<!-- NOVEDADES -->
<div id="news-products-content" class="container mx-auto bg-white mt-5 border p-0">
    <h2 id="news-products" class="my-3 text-center text-uppercase font-weight-bold">Novedades</h2>
    <hr class="m-0"/>
    <div id="carousel-news" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            $productos = conseguirProductos($db);

            // Si hay al menos un producto
            if (!empty($productos)):
                $contadorCantidadNovedades = 1;
                $seAgregaronDivInicial = false; // Es true si se agregaron los primeros 2 div del carousel-item
                $seAgregaronDivFinal = false; // Es true si se agregaron los ultimos 2 div del carousel-item
                // Si todavía hay productos y van menos de 12 productos
                while (($producto = mysqli_fetch_assoc($productos)) && ($contadorCantidadNovedades <= 12)): // Máximo de 12 productos en el carousel

                    if (($contadorCantidadNovedades == 1) && (!$seAgregaronDivInicial)):
                        ?>
                        <div class="carousel-item active">
                            <div class="mx-5 my-3 d-flex justify-content-around">
                                <?php
                                $seAgregaronDivInicial = true;
                            endif;
                            if ((($contadorCantidadNovedades == 5) || ($contadorCantidadNovedades == 9)) && (!$seAgregaronDivInicial)):
                                ?>
                                <div class="carousel-item">
                                    <div class="mx-5 my-3 d-flex justify-content-around">
                                        <?php
                                        $seAgregaronDivInicial = true;
                                        $seAgregaronDivFinal = false;
                                    endif;
                                        ?>

                                        <a class="w-20 text-decoration-none" href="producto.php?id=<?=$producto['id']?>" type="button">
                                            <div class="d-flex p-0 mx-auto">
                                                <img class="align-self-center d-block mh-100 mw-100 mx-auto" src="<?= $producto['imagen'] ?>" alt="<?= $producto['nombre'] ?>">
                                            </div>
                                            <p class="name-product text-center mx-auto text-dark"><?= $producto['nombre'] ?></p>
                                            <div class="prices">
                                                <?php
                                                if (($producto['precio_oferta'] != "0.00") && ($producto['stock'] != 0)):
                                                    ?>
                                                    <p class="normal-price">USD <?= $producto['precio_oferta'] ?></p>
                                                    <p class="old-price text-muted"><s>USD <?= $producto['precio'] ?></s></p>
                                                    <?php
                                                else:
                                                    ?>
                                                    <p class="normal-price">USD <?= $producto['precio'] ?></p>
                                                <?php
                                                endif;
                                                ?>
                                            </div>
                                        </a>

                                        <?php
                                        $contadorCantidadNovedades++;
                                    if ((($contadorCantidadNovedades == 5) || ($contadorCantidadNovedades == 9) || ($contadorCantidadNovedades == 13)) && (!$seAgregaronDivFinal)):
                                        ?>
                                    </div>
                                </div>
                                <?php
                                $seAgregaronDivInicial = false;
                                $seAgregaronDivFinal = true;
                            endif;
                        endwhile;
                        if (!$seAgregaronDivFinal):
                            ?>
                        </div>
                    </div>
                    <?php
                endif;
            endif;
            ?>
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