<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/menu.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>


<header>
    
        <a href="#" class="logo" >Bazar Lulu</a>
        <div class="menu-toggle"></div>
        <nav>
            <ul>
                <li><a href="../index2.html" >Inicio</a></li>
                <li><a href="../acerca.html">Acerca de</a></li>
                <li><a href="carritot/index.php" >Porductos</a></li>
                <li><a href="../php/login.php">Ingresar</a></li>
                <li><a href="#">Contacto</a></li>
                <li class="nav-item active">
                <a class="nav-link " href="mostrarCarrito.php" >Carrito(<?php 
                echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                
                ?>)</a>
            </li>
            <li><a href="datatable/index.php">Datatable</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>





<br/>
<br/>



<div class="container">