<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css"  />
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="./index.php?ruta=inicio">
            <img class="logo" src="./svg/LA CARAVANA.svg" alt="LOGO" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsemenu"
            aria-expanded="false"
            aria-controls="collapse"
          >
            <span><img src="./svg/Group 44.svg" alt="menu" /></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsemenu">
            <ul class="navbar-collapse-nav">
            <li class="navbar-collapse-nav-link">
                <a class="navbar-collapse-nav-link" href="./index.php?ruta=inicio">HOME</a>
              </li>
              <li class="navbar-collapse-nav-link">
                <a class="navbar-collapse-nav-link" href="./index.php?ruta=about">ABOUT US</a>
              </li>
              <li class="navbar-collapse-nav-link">
                <a class="navbar-collapse-nav-link" href="./index.php?ruta=menu">MENU</a>
              </li>
              <li class="navbar-collapse-nav-link">
                <a class="navbar-collapse-nav-link" href="./index.php?ruta=contact">CONTACT</a>
              </li>
            </ul>
            <div class="navbar-collapse-nav-titulo">
              <img
                class="navbar-collapse-nav-titulo-img"
                src="./svg/LA CARAVANA-titulo.svg"
                alt="titulo"
              />
            </div>
            <div class="navbar-collapse-nav-footer">
              <img
                class="navbar-collapse-nav-footer-img"
                src="./img/pizza-3000285_1920-1.png"
                alt="pizza"
              />
            </div>
          </div>
        </div>
      </nav>
<section>
        <?php
        if(isset($_GET['ruta'])){
          if(
            $_GET['ruta']=="about" ||
            $_GET['ruta']=="contact" ||
            $_GET['ruta']=="inicio" ||
            $_GET['ruta']=="menu" ||
            $_GET['ruta']=="menu_2"

          ){
            include "paginas/" . $_GET['ruta'] . ".php";
          }else{
            include "paginas/error404.php";
          }
        }else{
            include "paginas/contact.php";
        }
        
        ?>
      </section>
</body>
</html>