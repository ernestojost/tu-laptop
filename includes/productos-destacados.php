<!-- PRODUCTO DESTACADOS -->
<div id="featured-products-content" class="container mx-auto bg-white mt-5 border p-0">
    <h2 id="featured-products" class="my-3 text-center text-uppercase font-weight-bold">Productos destacados</h2>
    <hr class="m-0"/>
    <div id="carousel-featured" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            <?php
            $productos = conseguirProductos($db);

            // Si hay al menos un producto como destacado
            if (!empty($productos)):
                $contadorCantidadDestacados = 1;
                $seAgregoDestacado = false; // Es true si se agregaron los primeros 2 div del carousel-item
                // Si todavía hay productos y van menos de 12 productos destacados
                while (($producto = mysqli_fetch_assoc($productos)) && ($contadorCantidadDestacados <= 12)): // Máximo de 3 páginas en el carousel

                    if (($contadorCantidadDestacados == 1) && (!$seAgregoDestacado)):
                        ?>
                        <div class="carousel-item active">
                            <div class="mx-5 my-3 d-flex justify-content-around">
                                <?php
                                $seAgregoDestacado = true;
                            endif;
                            if ((($contadorCantidadDestacados == 5) || ($contadorCantidadDestacados == 9)) && (!$seAgregoDestacado)):
                                $seAgregoDestacado = true;
                                ?>
                                <div class="carousel-item">
                                    <div class="mx-5 my-3 d-flex justify-content-around">
                                        <?php
                                    endif;

                                    if ($producto['destacado'] == "si"):
                                        ?>

                                        <a class="w-20 text-decoration-none" href="#" type="button">
                                            <div class="d-flex p-0 mx-auto">
                                                <img class="align-self-center d-block mh-100 mw-100" src="<?= $producto['imagen'] ?>" alt="<?= $producto['nombre'] ?>">
                                            </div>
                                            <p class="text-center mx-auto text-dark"><?= $producto['nombre'] ?></p>
                                            <p class="text-center">USD <?= $producto['precio'] ?></p>
                                        </a>

                                        <?php
                                        $contadorCantidadDestacados++;
                                    endif;
                                    if (($contadorCantidadDestacados == 5) || ($contadorCantidadDestacados == 9) || ($contadorCantidadDestacados == 13)):
                                        $seAgregoDestacado = false;
                                        ?>
                                    </div>
                                </div>
                                <?php
                            endif;
                        endwhile;
                        if (($contadorCantidadDestacados != 5) && ($contadorCantidadDestacados != 9) && ($contadorCantidadDestacados != 13)):
                            ?>
                        </div>
                    </div>
                    <?php
                endif;
            endif;
            ?>
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

