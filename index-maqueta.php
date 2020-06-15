<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Tu Laptop</title>
        <link rel='icon' type='image/x-icon' href='favicon.ico' />

        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />

        <!-- Mis estilos -->
        <link rel="stylesheet" type="text/css" href="./assets/css/styles.css" />
        <script type="text/javascript" src="./assets/js/index.js"></script>
    </head>
    <body>
        <div id="content">
            <!-- CABECERA -->
            <header id="header" class="container">
                <nav class="navbar navbar-light bg-white row mx-auto">
                    <a class="navbar-brand p-0" href="index.php">
                        <img src="assets/img/logo.webp" height="40" alt="Logo" loading="lazy">
                    </a>
                    <div>
                        <form class="form-inline d-inline">
                            <input id="text-search" class="form-control rounded-0" type="search" placeholder="Buscar productos..." aria-label="Search" spellcheck="false">
                            <button id="button-search" class="btn rounded-0" type="submit">
                                <img src="./assets/img/search.svg" alt="Search" height="22" width="18"/>
                            </button>
                        </form>
                        <button id="account" class="nav-link d-inline align-middle border-0 bg-transparent" type="button" onmouseover="changeIconHover('account')" onmouseout="changeIconNormal('account')" onclick="changeVisibilityLogin(true)">
                            <img id="imgAccount" src="./assets/img/accountNormal.svg"/>
                            <span>Mi cuenta</span>
                        </button>
                        <a id="shop" class="nav-link d-inline align-middle" href="#" onmouseover="changeIconHover('shop')" onmouseout="changeIconNormal('shop')" onclick="changeVisibilityShoppingCart(true)">
                            <img id="imgShop" src="./assets/img/shopNormal.svg"/>
                            <span><strong>USD 0,00</strong></span>
                        </a>
                    </div>
                </nav>
            </header>
            <hr class="m-0"/>
            <!-- MENU -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white container p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse row" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link text-dark py-3" href="#"><strong>Notebooks</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark py-3" href="#"><strong>Celulares</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark py-3" href="#"><strong>PC</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark py-3" href="#"><strong>Consolas</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark py-3" href="#"><strong>Cámaras</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark py-3" href="#"><strong>Accesorios</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark py-3" href="#"><strong>Audio & Video</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark py-3" href="#"><strong>Networking</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark py-3" href="#"><strong>Tablets</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark py-3" href="#"><strong>Repuestos y partes</strong></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <hr class="m-0"/>   
            <!-- CONTENIDO CENTRAL -->
            <div id="principal-content" class="bg-light pb-5">
                <!-- CAROUSEL HOME -->
                <div id="carouselHome-content" class="container mx-auto">
                    <div id="carouselHome" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="#" type="button">
                                    <img class="d-block w-100" src="./assets/img/1.jpg" alt="First slide">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="#" type="button">
                                    <img class="d-block w-100" src="./assets/img/2.jpg" alt="Second slide">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="#" type="button">
                                    <img class="d-block w-100" src="./assets/img/3.jpg" alt="Third slide">
                                </a>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!-- PRODUCTO DESTACADOS -->
                <div id="featured-products-content" class="container mx-auto bg-white mt-5 border p-0">
                    <h2 id="featured-products" class="my-3 text-center text-uppercase font-weight-bold">Productos destacados</h2>
                    <hr class="m-0"/>
                    <div id="carousel-featured" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="mx-5 my-3 d-flex justify-content-around">
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop1.jpg" alt="Laptop 1">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Cor</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop2.jpg" alt="Laptop 2">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Core</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop3.jpg" alt="Laptop 3">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop2.jpg" alt="Laptop 2">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 G</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="mx-5 my-3 d-flex justify-content-around">
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop1.jpg" alt="Laptop 1">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Core, NVIDIA GeForce CNC Aluminio</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop2.jpg" alt="Laptop 2">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Core, NVIDIA GeForce CNC Aluminio</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop3.jpg" alt="Laptop 3">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Core, NVIDIA GeForce CNC Aluminio</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop2.jpg" alt="Laptop 2">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Core, NVIDIA GeForce CNC Aluminio</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="mx-5 my-3 d-flex justify-content-around">
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop1.jpg" alt="Laptop 1">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Core, NVIDIA GeForce CNC Aluminio</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop2.jpg" alt="Laptop 2">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Core, NVIDIA GeForce CNC Aluminio</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop3.jpg" alt="Laptop 3">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Core, NVIDIA GeForce CNC Aluminio</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop2.jpg" alt="Laptop 2">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Core, NVIDIA GeForce CNC Aluminio</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev bg-primary carousel-control-size my-auto" href="#carousel-featured" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next bg-primary carousel-control-size my-auto" href="#carousel-featured" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!-- OFERTAS IMPERDIBLES -->
                <div id="offers-products-content" class="container mx-auto bg-white mt-5 border p-0">
                    <h2 id="offers-products" class="my-3 text-center text-uppercase font-weight-bold">Ofertas Imperdibles</h2>
                    <hr class="m-0"/>
                    <div id="carousel-offers" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="mx-5 my-3 d-flex justify-content-around">
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop1.jpg" alt="Laptop 1">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Cor</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop2.jpg" alt="Laptop 2">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Core</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop3.jpg" alt="Laptop 3">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop2.jpg" alt="Laptop 2">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 G</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="mx-5 my-3 d-flex justify-content-around">
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop1.jpg" alt="Laptop 1">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Core, NVIDIA GeForce CNC Aluminio</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop2.jpg" alt="Laptop 2">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Core, NVIDIA GeForce CNC Aluminio</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop3.jpg" alt="Laptop 3">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Core, NVIDIA GeForce CNC Aluminio</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop2.jpg" alt="Laptop 2">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Core, NVIDIA GeForce CNC Aluminio</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="mx-5 my-3 d-flex justify-content-around">
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop1.jpg" alt="Laptop 1">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Core, NVIDIA GeForce CNC Aluminio</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop2.jpg" alt="Laptop 2">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Core, NVIDIA GeForce CNC Aluminio</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop3.jpg" alt="Laptop 3">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Core, NVIDIA GeForce CNC Aluminio</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop2.jpg" alt="Laptop 2">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Core, NVIDIA GeForce CNC Aluminio</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev bg-primary carousel-control-size my-auto" href="#carousel-offers" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next bg-primary carousel-control-size my-auto" href="#carousel-offers" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!-- NOVEDADES -->
                <div id="news-products-content" class="container mx-auto bg-white mt-5 border p-0">
                    <h2 id="news-products" class="my-3 text-center text-uppercase font-weight-bold">Novedades</h2>
                    <hr class="m-0"/>
                    <div id="carousel-news" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="mx-5 my-3 d-flex justify-content-around">
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop1.jpg" alt="Laptop 1">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Cor</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop2.jpg" alt="Laptop 2">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Core</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop3.jpg" alt="Laptop 3">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop2.jpg" alt="Laptop 2">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 G</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="mx-5 my-3 d-flex justify-content-around">
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop1.jpg" alt="Laptop 1">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Core, NVIDIA GeForce CNC Aluminio</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop2.jpg" alt="Laptop 2">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Core, NVIDIA GeForce CNC Aluminio</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop3.jpg" alt="Laptop 3">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Core, NVIDIA GeForce CNC Aluminio</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop2.jpg" alt="Laptop 2">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Core, NVIDIA GeForce CNC Aluminio</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="mx-5 my-3 d-flex justify-content-around">
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop1.jpg" alt="Laptop 1">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Core, NVIDIA GeForce CNC Aluminio</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop2.jpg" alt="Laptop 2">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Core, NVIDIA GeForce CNC Aluminio</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop3.jpg" alt="Laptop 3">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Core, NVIDIA GeForce CNC Aluminio</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                    <a class="w-20 text-decoration-none" href="#" type="button">
                                        <div class="d-flex p-0 mx-auto">
                                            <img class="align-self-center d-block mh-100 mw-100" src="./assets/img/laptop2.jpg" alt="Laptop 2">
                                        </div>
                                        <p class="text-center mx-auto text-dark">Razer Blade 15 Gaming Laptop 2019: Intel Core i7-9750H 6 Core, NVIDIA GeForce CNC Aluminio</p>
                                        <p class="text-center">USD 1,999.77</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev bg-primary carousel-control-size my-auto" href="#carousel-news" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next bg-primary carousel-control-size my-auto" href="#carousel-news" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- USUARIO -->
            <div id="login-account" class="position-absolute w-100 h-100 d-none">
                <div id="login-account-content" class="bg-white">
                    <button id="login-account-close" class="btn font-family-websymbols font-size-13 float-right text-dark" onclick="changeVisibilityLogin(false)">'</button>
                    <form id="login-form">
                        <div class="form-group">
                            <label class="font-weight-bold" for="email-login">Correo electrónico</label>
                            <input type="email" class="form-control" id="email-login" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="password-login">Contraseña</label>
                            <input type="password" class="form-control" id="password-login">
                        </div>
                        <div id="login-error" class="alert alert-danger font-size-13 d-none" role="alert"></div>
                        <button id="login-enter" type="submit" class="btn mt-4 w-100 rounded-0 text-white text-uppercase font-size-13 p-2 font-weight-bold shadow-none">Ingresar</button>
                        <p class="mt-3">
                            No soy usuario registrado y quiero <a id="openCreateAccount" class="cursor-pointer">crear una cuenta</a>.
                        </p>
                    </form>
                    <form id="create-account-form" class="d-none">
                        <div class="form-group">
                            <label class="font-weight-bold" for="name-create-account">Nombre</label>
                            <input type="text" class="form-control" id="name-create-account">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="surname-create-account">Apellido</label>
                            <input type="text" class="form-control" id="surname-create-account">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="email-create-account">Correo electrónico</label>
                            <input type="email" class="form-control" id="email-create-account" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="password-create-account">Contraseña</label>
                            <input type="password" class="form-control" id="password-create-account">
                        </div>
                        <p>
                            La contraseña debe contener como mínimo 8 caracteres de largo.
                        </p>
                        <div id="create-account-error" class="alert alert-danger font-size-13 d-none" role="alert"></div>
                        <button id="create-account" type="submit" class="btn mt-4 w-100 rounded-0 text-white text-uppercase font-size-13 p-2 font-weight-bold shadow-none">Crear cuenta</button>
                        <p class="mt-3">
                            Si ya tienes una cuenta <a id="closeCreateAccount" class="cursor-pointer">ingresa aquí</a>.
                        </p>
                    </form>
                </div>
            </div>
            <div id="shopping-cart" class="position-absolute w-100 h-100 d-none">
                <div id="shopping-cart-content" class="bg-white">
                    <button id="shopping-cart-close" class="btn font-family-websymbols font-size-13 float-right text-dark" onclick="changeVisibilityShoppingCart(false)">'</button>
                </div>
            </div>
            <!-- PIE DE PÁGINA -->
            <hr class="m-0"/>
            <footer class="container">
                <div class="d-flex justify-content-between py-4">
                    <div id="company">
                        <p class="text-uppercase font-weight-bold title-footer">Empresa</p>
                        <a class="text-decoration-none text-dark" href="#">Contacto</a>
                    </div>
                    <div id="social">
                        <p class="text-uppercase font-weight-bold title-footer">Social</p>
                        <a class="h6 text-decoration-none font-family-websymbols bg-primary text-white p-2 rounded-circle" href="#">f</a>
                        <a class="h6 text-decoration-none font-family-websymbols bg-info text-white p-2 rounded-circle" href="#">t</a>
                        <a class="h6 text-decoration-none font-family-websymbols bg-danger text-white p-2 rounded-circle" href="#">y</a>
                        <a class="h6 text-decoration-none font-family-websymbols bg-success text-white p-2 rounded-circle" href="#">l</a>
                    </div>
                    <div id="payment-methods">
                        <p class="text-uppercase font-weight-bold title-footer pl-2">Medios de pago</p>
                        <div class="justify-content-between">
                            <img class="payment-methods-size" src="./assets/img/medios-de-pago/visa.svg" />
                            <img class="payment-methods-size" src="./assets/img/medios-de-pago/oca.svg" />
                            <img class="payment-methods-size" src="./assets/img/medios-de-pago/tarjetad.svg" />
                            <img class="payment-methods-size" src="./assets/img/medios-de-pago/creditel.svg" />
                            <img class="payment-methods-size" src="./assets/img/medios-de-pago/passcard.svg" />
                            <img class="payment-methods-size" src="./assets/img/medios-de-pago/anda.svg" />
                            <img class="payment-methods-size" src="./assets/img/medios-de-pago/cabal.svg" />
                        </div>
                    </div>
                </div>
                <p class="text-center">Tu laptop es un proyecto que realizo sin fines de lucro. Esta enfocado para poder incluirlo en mi portfolio.<br/>
                    Las imágenes, el contenido y el precio de los productos son solo ilustrativos.</p>
                <p class="text-secondary">&copy; Copyright 2020</p>
            </footer>
        </div>

        <!-- Bootstrap -->
        <script type="text/javascript" src="jquery/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    </body>
</html>