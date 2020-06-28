<?php

// Conexión a la base de datos
require_once 'includes/conexion.php';

if (isset($_SESSION['carrito'])) {
    foreach ($_SESSION['carrito'] as $indice => $elemento) {
        unset($_SESSION['carrito'][$indice]);
    }
}

header("Location: carrito.php");
