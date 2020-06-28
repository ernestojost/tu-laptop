<?php
session_start();

if(isset($_SESSION['usuario'])){
    session_destroy();
}

if(isset($_SESSION["carrito"])){
    session_destroy();
}

header("Location: index.php");