<?php
    session_start();
    include 'conexion.php';
    if (isset($_SESSION['nombre'])) {
        echo '<li class="nav-item"><span class="nav-link">Hola, ' . htmlspecialchars($_SESSION['nombre']) . '</span></li>';
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.css"
        integrity="sha512-GmZYQ9SKTnOea030Tbiat0Y+jhnYLIpsGAe6QTnToi8hI2nNbVMETHeK4wm4MuYMQdrc38x+sX77+kVD01eNsQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
        .brand-carousel {
            padding: 40px 0;
            position: relative;
        }

        .brand-item {
            text-align: center;
            display: flex !important;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 80px;
        }

        .brand-item img {
            max-height: 100%;
            width: auto;
            max-width: 100%;
        }

        .slick-track {
            display: flex !important;
            align-items: center;
        }

        .slick-slide {
            height: inherit !important;
            display: flex !important;
            justify-content: center;
            align-items: center;
        }

        .slick-prev,
        .slick-next {
            width: 40px;
            height: 40px;
            background-color: coral;
            /* Cambiar a color coral */
            border-radius: 50%;
            z-index: 1;
            transition: background-color 0.3s;
            /* Añadir transición para suavizar el cambio de color */
        }

        .slick-prev:hover,
        .slick-next:hover {
            background-color: #ff7f50;
            /* Color más claro al pasar el mouse */
        }

        .slick-prev:before,
        .slick-next:before {
            color: white;
        }
    </style>

</head>

<body>

    <!-- NAVIGATION -->
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
    <div class="container d-flex align-items-center">
        <img src="img/logo1.png" alt="100" height="100" class="navbar-logo">
        <div class="search-container d-none d-lg-flex">
            <form class="d-flex w-100">
                <div class="position-relative w-100">
                    <input type="text" class="form-control search-input" placeholder="Buscar por producto, categoría y más">
                    <button class="btn search-btn" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i id="barras" class="fa-solid fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto d-flex align-items-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shop.html">Shop</a>
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
                    <a class="nav-link" href="login.html"><i class="fa-solid fa-user"></i></a> <!-- Icono de Login -->
                </li>
                <li class="nav-item iconos">
                    <a class="nav-link" href="favoritos.html"><i class="fa-solid fa-heart"></i></a> <!-- Icono de Favoritos -->
                </li>
                <li class="nav-item iconos">
                    <a class="nav-link" href="carrito.html"><i class="fa-solid fa-bag-shopping"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <section id="inicio">
        <div class="container">
            <h5>NOVEDADES</h5>
            <h1><span>Mejor Precio</span> Del Año</h1>
            <p>Chameleons te ofrece un tiempo muy<br>cómodo al caminar y hacer ejercicio.</p>
            <button>Compra ahora</button>
        </div>
    </section>

    <section id="marca" class="container brand-carousel">
        <div class="brand-slider">
            <div class="brand-item">
                <img class="img-fluid" src="img/marcas/1.png" alt="Todas las categorías">
            </div>
            <div class="brand-item">
                <img class="img-fluid" src="img/marcas/2.png" alt="LG">
            </div>
            <div class="brand-item">
                <img class="img-fluid" src="img/marcas/3.png" alt="Concepts">
            </div>
            <div class="brand-item">
                <img class="img-fluid" src="img/marcas/4.png" alt="Mabe">
            </div>
            <div class="brand-item">
                <img class="img-fluid" src="img/marcas/5.png" alt="Craftsman">
            </div>
            <div class="brand-item">
                <img class="img-fluid" src="img/marcas/6.png" alt="Reebok">
            </div>
            <div class="brand-item">
                <img class="img-fluid" src="img/marcas/1.png" alt="Philosophy">
            </div>
            <div class="brand-item">
                <img class="img-fluid" src="img/marcas/2.png" alt="Pukka">
            </div>
            <div class="brand-item">
                <img class="img-fluid" src="img/marcas/3.png" alt="Jeanious">
            </div>
            <div class="brand-item">
                <img class="img-fluid" src="img/marcas/4.png" alt="Tommy Hilfiger">
            </div>
            <div class="brand-item">
                <img class="img-fluid" src="img/marcas/5.png" alt="Makora">
            </div>
            <div class="brand-item">
                <img class="img-fluid" src="img/marcas/6.png" alt="Basel">
            </div>
            <div class="brand-item">
                <img class="img-fluid" src="img/marcas/1.png" alt="Guess">
            </div>
        </div>
    </section>


    <section id="nueva" class="w-100">
        <div class="row 0 m-0">
            <div class="one col-lg-4 col-md-12 col-12 p-0">
                <img class="img-fluid" src="img/nueva/1.jpg" alt="">
                <div class="details">
                    <h2>Tenis Extremadamente Raros</h2>
                    <button class="text-uppercase">Compra ahora</button>
                </div>
            </div>
            <div class="one col-lg-4 col-md-12 col-12 p-0">
                <img class="img-fluid" src="img/nueva/2.jpg" alt="">
                <div class="details">
                    <h2>Increíble Conjunto En Blanco</h2>
                    <button class="text-uppercase">Compra ahora</button>
                </div>
            </div>
            <div class="one col-lg-4 col-md-12 col-12 p-0">
                <img class="img-fluid" src="img/nueva/3.jpg" alt="">
                <div class="details">
                    <h2>Ropa Deportiva Con Hasta Un 50% De Descuento</h2>
                    <button class="text-uppercase">Compra ahora</button>
                </div>
            </div>
        </div>
    </section>

    <section id="destacado" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
            <h3>Nuestros Productos Destacados</h3>
            <hr class="mx-auto">
            <p>Aquí puedes ver nuestros nuevos productos a un precio justo sobre chameleons.</p>
        </div>
        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/destacado/1.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Tenis Deportivos</h5>
                <h4 class="p-price">$1,499.00</h4>
                <button class="buy-btn">Compra Ahora</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/destacado/2.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Tenis Deportivos</h5>
                <h4 class="p-price">$1,499.00</h4>
                <button class="buy-btn">Compra Ahora</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/destacado/3.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Tenis Deportivos</h5>
                <h4 class="p-price">$1,499.00</h4>
                <button class="buy-btn">Compra Ahora</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/destacado/4.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Tenis Deportivos</h5>
                <h4 class="p-price">$1,499.00</h4>
                <button class="buy-btn">Compra Ahora</button>
            </div>
        </div>
    </section>

    <section id="banner" class="my-5 py-5">
        <div class="container">
            <h4>REBAJAS DE MITAD DE TEMPORADA</h4>
            <h1>Colección De Primavera<br>Con Hasta Un 20%<br>De Descuento</h1>
            <button class="text-uppercase">Compra Ahora</button>
        </div>
    </section>

    <section id="ropa" class="my-5">
        <div class="container text-center mt-5 py-5">
            <h3>Vestidos & Monos</h3>
            <hr class="mx-auto">
            <p>Aquí puedes ver nuestros nuevos productos a un precio justo sobre chameleons.</p>
        </div>
        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/ropa/1.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Conjunto</h5>
                <h4 class="p-price">$1,499.00</h4>
                <button class="buy-btn">Compra Ahora</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/ropa/2.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Vestido</h5>
                <h4 class="p-price">$1,499.00</h4>
                <button class="buy-btn">Compra Ahora</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/ropa/3.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Playera</h5>
                <h4 class="p-price">$1,499.00</h4>
                <button class="buy-btn">Compra Ahora</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/ropa/4.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Conjunto</h5>
                <h4 class="p-price">$1,499.00</h4>
                <button class="buy-btn">Compra Ahora</button>
            </div>
        </div>
    </section>

    <section id="relojes" class="my-5">
        <div class="container text-center mt-5 py-5">
            <h3>Mejores Relojes</h3>
            <hr class="mx-auto">
            <p>Aquí puedes ver nuestros nuevos productos a un precio justo sobre chameleons.</p>
        </div>
        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/relojes/1.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Reloj</h5>
                <h4 class="p-price">$1,499.00</h4>
                <button class="buy-btn">Compra Ahora</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/relojes/2.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Reloj</h5>
                <h4 class="p-price">$1,499.00</h4>
                <button class="buy-btn">Compra Ahora</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/relojes/3.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Reloj</h5>
                <h4 class="p-price">$1,499.00</h4>
                <button class="buy-btn">Compra Ahora</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/relojes/4.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Reloj</h5>
                <h4 class="p-price">$1,499.00</h4>
                <button class="buy-btn">Compra Ahora</button>
            </div>
        </div>
    </section>

    <section id="Tenis" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
            <h3>Tenis Para Correr</h3>
            <hr class="mx-auto">
            <p>Aquí puedes ver nuestros nuevos productos a un precio justo sobre chameleons.</p>
        </div>
        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/tenis/1.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Tenis</h5>
                <h4 class="p-price">$1,499.00</h4>
                <button class="buy-btn">Compra Ahora</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/tenis/2.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Tenis</h5>
                <h4 class="p-price">$1,499.00</h4>
                <button class="buy-btn">Compra Ahora</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/tenis/3.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Tenis</h5>
                <h4 class="p-price">$1,499.00</h4>
                <button class="buy-btn">Compra Ahora</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/tenis/4.jpg" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Tenis</h5>
                <h4 class="p-price">$1,499.00</h4>
                <button class="buy-btn">Compra Ahora</button>
            </div>
        </div>
    </section>

    <footer class="mt-5 py-5">
        <div class="row container mx-auto pt-5">
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <img src="img/logo2.png" alt="60" height="60">
                <p class="pt-3">fringilla urna porttitor rhoncus dolor purus luctus venenatis lectus magna
                    fringilla diam maecenas ultricies mi eget mauris.</p>
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
            <div class="row container mx-autp">

                <div class="col-lg-3 col-md-6 col-12 mb-4">
                    <img src="img/payment.png" alt="">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.brand-slider').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: true,
                dots: false,
                pauseOnHover: false,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 4
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 2
                        }
                    }
                ]
            });
        });
    </script>

</body>

</html>