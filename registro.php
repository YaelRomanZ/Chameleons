<?php 
include("conexion.php");

// Procesar el formulario de registro
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nombre'], $_POST['apellidoPaterno'], $_POST['apellidoMaterno'], 
                $_POST['telefonoCelular'], $_POST['correoElectronico'], $_POST['contrasena'])) {
        
        // Validar que todos los campos requeridos tengan contenido
        if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correoElectronico']) >= 1) {
            $nombre = trim($_POST['nombre']);
            $apellidoPaterno = trim($_POST['apellidoPaterno']);
            $apellidoMaterno = trim($_POST['apellidoMaterno']);
            $telefonoCelular = trim($_POST['telefonoCelular']);
            $correoElectronico = trim($_POST['correoElectronico']);
            $contrasena = password_hash(trim($_POST['contrasena']), PASSWORD_DEFAULT); // Encriptar la contraseña

            // Consulta para insertar los datos en la base de datos
            $consulta = "INSERT INTO datos(nombre, apellido_paterno, apellido_materno, telefono_celular, email, contrasena) 
                         VALUES ('$nombre', '$apellidoPaterno', '$apellidoMaterno', '$telefonoCelular', '$correoElectronico', '$contrasena')";
            
            $resultado = mysqli_query($conex, $consulta);

            if ($resultado) {
                echo '<h3 class="ok">¡Te has inscrito correctamente!</h3>';
            } else {
                echo '<h3 class="bad">¡Ups ha ocurrido un error!</h3>';
                echo "Error: " . mysqli_error($conex); // Muestra el error de SQL
            }
        } else {
            echo '<h3 class="bad">Por favor, completa todos los campos requeridos.</h3>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
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

        .form-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }

        .create-title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 30px;
            font-weight: 500;
        }

        .form-control {
            margin-bottom: 15px;
            width: 100%;
            padding: 8px;
            border: none;
            border-bottom: 1px solid #ccc;
            outline: none;
        }

        .password-field {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            right: 10px;
            top: 10px;
            cursor: pointer;
            color: #666;
        }

        .password-requirements {
            font-size: 12px;
            color: #666;
            margin-top: 5px;
        }

        .checkbox-container {
            margin: 20px 0;
        }

        .terms-text {
            font-size: 14px;
            color: #333;
            margin: 20px 0;
        }

        .terms-link {
            color: #0066cc;
            text-decoration: none;
        }

        .submit-button {
            background-color: coral;
            color: white;
            border: none;
            border-radius: 25px;
            padding: 12px;
            width: 100%;
            font-weight: bold;
            cursor: pointer;
            margin-bottom: 15px;
        }

        .login-link {
            display: block;
            text-align: center;
            color: coral;
            text-decoration: none;
            font-weight: bold;
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="img/logo2.png" alt="Logo">
        <h1>CHAMELEONS</h1>
    </div>

    <div class="form-container">
        <h2 class="create-title">Crear Cuenta</h2>
        <form method="POST" action="">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
            <input type="text" name="apellidoPaterno" class="form-control" placeholder="Apellido Paterno" required>
            <input type="text" name="apellidoMaterno" class="form-control" placeholder="Apellido Materno">
            <input type="text" name="telefonoCelular" class="form-control" placeholder="Teléfono Celular">
            <input type="email" name="correoElectronico" class="form-control" placeholder="Correo Electrónico" required>
            <div class="password-field">
                <input type="password" name="contrasena" id="contrasena" class="form-control" placeholder="Contraseña" required>
                <span class="password-toggle" id="togglePassword1"><i class="fa fa-eye-slash"></i></span>
            </div>
            <button type="submit" class="submit-button">Crear Cuenta</button>
            <a href="login.html" class="login-link">¿Ya tienes cuenta? Iniciar sesión</a>
        </form>
    </div>

    <script>
        function togglePasswordVisibility(inputId, toggleId) {
            const passwordInput = document.getElementById(inputId);
            const toggleButton = document.getElementById(toggleId);
            const icon = toggleButton.querySelector('i');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            }
        }

        document.getElementById('togglePassword1').addEventListener('click', function () {
            togglePasswordVisibility('contrasena', 'togglePassword1');
        });
    </script>
</body>

</html>