<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si el campo 'correoElectronico' está definido
    if (isset($_POST['correoElectronico'])) {
        $correoElectronico = trim($_POST['correoElectronico']); 
    } else {
        echo "El campo de correo electrónico no está definido.";
        exit();
    }

    $contrasena = trim($_POST['contrasena']);

    // Usar consultas preparadas
    $stmt = $conex->prepare("SELECT * FROM datos WHERE LOWER(email) = LOWER(?)"); 
    $stmt->bind_param("s", $correoElectronico);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Verificar la contraseña usando password_verify
        if (password_verify($contrasena, $row['contrasena'])) {
            // Iniciar sesión
            session_start();
            $_SESSION['usuario'] = $correoElectronico; 
            header("Location: index.php"); 
            exit(); 
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: white;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: coral;
            height: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 40px;
            border-radius: 10px;
            position: relative;
            overflow: hidden;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
        }

        .header img {
            height: 90px;
            margin-right: 15px;
        }

        .header h1 {
            font-size: 50px;
            font-weight: 700;
            color: #fff;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.4);
            letter-spacing: 3px;
            animation: glow 1.5s ease-in-out infinite alternate, bounce 1s ease-in-out infinite;
        }

        @keyframes glow {
            0% {
                text-shadow: 0 0 5px #ff7300, 0 0 10px #ff7300, 0 0 15px #ff7300, 0 0 20px #ff7300, 0 0 25px #ff7300, 0 0 30px #ff7300, 0 0 35px #ff7300;
            }

            100% {
                text-shadow: 0 0 10px #ff7300, 0 0 15px #ff7300, 0 0 20px #ff7300, 0 0 25px #ff7300, 0 0 30px #ff7300, 0 0 35px #ff7300, 0 0 40px #ff7300;
            }
        }

        @keyframes bounce {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-15px);
            }

            100% {
                transform: translateY(0);
            }
        }

        .login-container {
            max-width: 450px;
            margin: 0 auto;
            padding: 20px;
        }

        .login-title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 30px;
            font-weight: 500;
        }

        .form-control {
            border-radius: 0;
            height: 40px;
            margin-bottom: 20px;
        }

        .password-container {
            position: relative;
        }

        .eye-icon {
            position: absolute;
            right: 10px;
            top: 10px;
            color: #888;
            cursor: pointer;
        }

        .btn-login {
            background-color: coral;
            color: white;
            border: none;
            border-radius: 30px;
            padding: 10px;
            font-weight: 500;
            width: 100%;
            margin-top: 10px;
            margin-bottom: 20px;
            outline: none;
        }

        /* Evitar el borde negro y el contorno en el botón */
        .btn-login:focus,
        .btn-login:active,
        .btn-login:focus-visible {
            outline: none;
            box-shadow: none;
            border: none;
        }

        .forgot-password {
            color: #0d6efd;
            text-decoration: none;
            font-size: 14px;
        }

        .create-account-btn {
            display: block;
            text-align: center;
            border: 2px solid coral;
            color: coral;
            padding: 10px;
            text-decoration: none;
            margin-top: 20px;
            font-weight: 500;
            border-radius: 30px;
        }

        .create-account-btn:hover {
            text-decoration: none;
            color: coral;
        }

        .checkbox-container {
            margin-left: 5px;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="img/logo2.png" alt="Logo">
        <h1>CHAMELEONS</h1>
    </div>

    <div class="login-container">
        <h2 class="login-title">Iniciar Sesión</h2>

        <form action="login.php" method="POST"> 
    
            <div class="form-group">
                <input type="email" class="form-control" name="correoElectronico" placeholder="Correo electrónico" required> 
            </div>
        
            <div class="form-group password-container">
                <input type="password" class="form-control" id="passwordField" name="contrasena" placeholder="Contraseña" required> 
                <span class="eye-icon" id="togglePassword">
                    <i class="fa-regular fa-eye-slash" id="eyeIcon"></i>
                </span>
            </div>
        
            <button type="submit" class="btn-login">Iniciar sesión</button>
        
            <div class="text-center">
                <a href="recupera_contraseña.html" class="forgot-password">¿Olvidaste tu contraseña?</a>
            </div>
            <a href="crea_cuenta.html" class="create-account-btn">¿Nuevo? Crear una Cuenta</a>
            <a href="index.html" class="create-account-btn">Regresar al Inicio</a>
        </form>
    </div>

    <script>
        // Función para mostrar/ocultar contraseña
        document.addEventListener('DOMContentLoaded', function () {
            const togglePassword = document.getElementById('togglePassword');
            const passwordField = document.getElementById('passwordField');
            const eyeIcon = document.getElementById('eyeIcon');

            togglePassword.addEventListener('click', function () {
                const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordField.setAttribute('type', type);

                if (type === 'password') {
                    eyeIcon.classList.remove('fa-eye');
                    eyeIcon.classList.add('fa-eye-slash');
                } else {
                    eyeIcon.classList.remove('fa-eye-slash');
                    eyeIcon.classList.add('fa-eye');
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>
