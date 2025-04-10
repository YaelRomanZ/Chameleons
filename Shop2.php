<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.css"
        integrity="sha512-GmZYQ9SKTnOea030Tbiat0Y+jhnYLIpsGAe6QTnToi8hI2nNbVMETHeK4wm4MuYMQdrc38x+sX77+kVD01eNsQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
        .product img {
            width: 100%;
            height: auto;
            box-sizing: border-box;
            object-fit: cover;
        }

        #destacado>div.row.mx-auto.container>nav>ul>li.page-item.active>a {
            background-color: black;
        }

        #destacado>div.row.mx-auto.container>nav>ul>li:nth-child(n):hover>a {
            background-color: coral;
            color: #fff;
        }

        .pagination a {
            color: #000;
        }
    </style>
</head>

<body>

    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
        <div class="container d-flex align-items-center">
            <img src="img/logo1.png" alt="Logo" height="100" class="navbar-logo">
            <div class="search-container d-none d-lg-flex">
                <form class="d-flex w-100">
                    <div class="position-relative w-100">
                        <input type="text" class="form-control search-input"
                            placeholder="Buscar por producto, categoría y más">
                        <button class="btn search-btn" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span><i id="barras" class="fa-solid fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto d-flex align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="shop.html">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item acerca-item">
                        <a class="nav-link" href="acerca_de.html">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.html">Contacto</a>
                    </li>
                    <li class="nav-item iconos">
                        <a class="nav-link" href="login.html"><i class="fa-solid fa-user"></i></a>
                    </li>
                    <li class="nav-item iconos">
                        <a class="nav-link" href="favoritos.html"><i class="fa-solid fa-heart"></i></a>
                    </li>
                    <li class="nav-item iconos">
                        <a class="nav-link" href="carrito.html"><i class="fa-solid fa-bag-shopping"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="destacado" class="my-5 py-5">
        <div class="container mt-5 py-5">
            <h2 class="font-weight-bold">Nuestros Productos</h2>
            <hr>
            <p>Aquí puedes ver nuestros nuevos productos a un precio justo sobre chameleons.</p>
        </div>

        <div class="row mx-auto container">
            <a href="viewCart.php" class="cart-link" title="View Cart">
                <i class="glyphicon glyphicon-shopping-cart"></i>
            </a>
            <div id="products" class="row list-group">
            <?php
require_once 'conexion.php';

// Verificar si la conexión fue exitosa
if (!is_object($conex)) {
    die("Error: La variable \$conex no es un objeto de conexión válido.");
}

if ($conex->connect_error) {
    die("Error en la conexión: " . $conex->connect_error);
}

// Ejecutar la consulta
$query = $conex->query("SELECT id, nombre, precio, imagen FROM productos ORDER BY id ASC LIMIT 50");

if (!$query) {
    die("Error en la consulta: " . $conex->error);
}

// Verificar si hay resultados
if ($query->num_rows > 0) {
    echo '<div class="row mx-auto container">'; // Contenedor flex con Bootstrap
    while ($row = $query->fetch_assoc()) {
        // Generar el HTML para cada producto
        echo '<div class="product text-center col-lg-3 col-md-4 col-12">'; // 4 columnas por fila
        echo "<img class='img-fluid mb-3' src='img/shop/" . htmlspecialchars($row['id']) . ".jpg' alt='Imagen del producto' style='width:150px;height:150px;'>";
        echo '<div class="star">';
        echo '<i class="fa-solid fa-star"></i>';
        echo '<i class="fa-solid fa-star"></i>';
        echo '<i class="fa-solid fa-star"></i>';
        echo '<i class="fa-solid fa-star"></i>';
        echo '<i class="fa-solid fa-star"></i>';
        echo '</div>';
        echo '<h5 class="p-name">' . htmlspecialchars($row['nombre']) . '</h5>';
        echo '<h4 class="p-price">$' . number_format($row['precio'], 2) . '</h4>';
        echo '<button class="buy-btn href="cartAction.php?action=addToCart&id=">Compra Ahora</button>';
        echo '<a class="btn btn-success" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">Compra Ahora</a>';
        echo '</div>';
    }
    echo '</div>'; // Cierre del contenedor flex
} else {
    echo '<p class="text-center text-muted">No se encontraron productos.</p>';
}
?>
            </div>
        </div>
    </section>

    <footer class="mt-5 py-5">
        <div class="row container mx-auto pt-5">
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <img src="img/logo2.png" alt="Logo" height="60">
                <p class="pt-3">Fringilla urna porttitor rhoncus dolor purus luctus venenatis lectus magna fringilla diam
                    maecenas ultricies mi eget mauris.</p>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">
                <h5 class="pb-2">Destacado</h5>
                <ul class="text-uppercase list-unstyled">
                    <li><a href="#">Hombre</a></li>
                    <li><a href="#">Mujer</a></li>
                    <li><a href="#">Niño</a></li>
                    <li><a href="#">Niña</a></li>
                    <li><a href="#">Novedades</a></li>
                    <li><a href="#">Tenis</a></li>
                    <li><a href="#">Ropa</a></li>
                </ul>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">
                <h5 class="pb-2">Contáctanos</h5>
                <div>
                    <h6 class="text-uppercase">Dirección</h6>
                    <p>123 Calle Nombre, Ciudad</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Teléfono</h6>
                    <p>(123) 456-7890</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Correo</h6>
                    <p>mail@example.com</p>
                </div>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <h5 class="pb-2">Instagram</h5>
                <div class="row">
                    <img class="img-fluid w-25 h-100 m-2" src="img/instagram/1.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="img/instagram/2.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="img/instagram/3.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="img/instagram/4.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="img/instagram/5.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="copyright mt-5">
            <div class="row container mx-auto">
                <div class="col-lg-3 col-md-6 col-12 mb-4">
                    <img src="img/payment.png" alt="Métodos de pago">
                </div>
                <div class="col-lg-4 col-md-6 col-12 text-nowrap mb-2">
                    <p>Chameleons eCommerce © 2025. All Rights Reserved</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>
