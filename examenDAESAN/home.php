<?php
    session_start ();

if (!isset($_SESSION['usuario'])){
    echo '
        <script> 
        alert ("Por favor debes iniciar sesion");
        window.location = "index.php";
        </script>
        
    ';
    session_destroy ();
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        .custom-navbar {
            background-color:#0d010ec8 ;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">
    <a class="navbar-brand mx-auto" href="#">
            <img src="imacarru/klipartz.com.png" alt="Logo" height="70">
    </a>
<div class="container-fluid">
    <a class="navbar-brand" href="php/cerrar_sesion.php">Cerrar Sesion</a>
    
  </div>
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="home.php" id="home-link">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="usuarios-link">Usuarios</a>
            </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Productos</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" id="listaprodu-link" href="#"> Lista de productos </a></li>
            <li><a class="dropdown-item" id="cargap-link" href="#"> Carga de productos </a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Proveedores</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" id="listaprovee-link" href="#"> Lista de proveedores </a></li>
            <li><a class="dropdown-item" id="cargaprov-link" href="#"> Carga de proveedores </a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Clientes</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" id="listacliente-link" href="#"> Lista de Clientes </a></li>
            <li><a class="dropdown-item" id="cargacliente-link" href="#"> Cargar de Clientes </a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        </ul>   
    </div>
</nav>

<div class="container mt-4" id="workspace">
    <link rel="stylesheet" href="style.css">
    
<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="imacarru/pxfuel3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-uppercase fw-bold">L</h5>
        <p class="fs-5">
                <span style="background-color: rgba(255, 255, 255, 0.5); padding: 5px;">
                  
                </span>
            </p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="imacarru/dess.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-uppercase fw-bold"></h5>
        <p class="fs-5">
                <span style="background-color: rgba(255, 255, 255, 0.5); padding: 5px;">
                </span>
            </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imacarru/descarga11.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-uppercase fw-bold"></h5>
         <p class="fs-5">
                <span style="background-color: rgba(255, 255, 255, 0.5); padding: 5px;">
                   
                </span>
            </p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<script>
    $(document).ready(function () {
      

        $("#home-link").click ( function () {
            $.get("home.php/", function (data) {
                $("#workspace").html(data);
            });
        });

        $("#usuarios-link").click ( function () {
            $.get("usuarios/index.php/", function (data) {
                $("#workspace").html(data);
            });
        });

        $("#listaprodu-link").click ( function () {
            $.get("listaprodu/index.php", function (data) {
                $("#workspace").html(data);
            });
        });

        $("#cargap-link").click ( function () {
            $.get("cargap/index.php", function (data) {
                $("#workspace").html(data);
            });
        });

        $("#listaprovee-link").click ( function () {
            $.get("listaprovee/index.php", function (data) {
                $("#workspace").html(data);
            });
        });

        $("#cargaprov-link").click ( function () {
            $.get("cargaprov/index.php", function (data) {
                $("#workspace").html(data);
            });
        });

        $("#listacliente-link").click ( function () {
            $.get("listacliente/index.php", function (data) {
                $("#workspace").html(data);
            });
        });

        $("#cargacliente-link").click ( function () {
            $.get("cargacliente/index.php", function (data) {
                $("#workspace").html(data);
            });
        });


    });
</script>


<script src= https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js></script>
</body>
</html>