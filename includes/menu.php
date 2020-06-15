<!-- MENU -->
<nav class="navbar navbar-expand-lg navbar-light bg-white container p-0">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse row" id="navbarNav">
        <ul class="navbar-nav mx-auto">
            <?php
            $categorias = conseguirCategorias($db);

            if (!empty($categorias) && mysqli_num_rows($categorias) >= 1):
                while ($categoria = mysqli_fetch_assoc($categorias)):
                    ?>

                    <li class="nav-item">
                        <a class="nav-link text-dark py-3" href="#"><strong><?= $categoria['nombre'] ?></strong></a>
                    </li>

                    <?php
                endwhile;
            endif;
            ?>
        </ul>
    </div>
</nav>
<hr class="m-0"/>   

