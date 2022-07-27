<?php
    require_once("./src/Views/Components/Layout.php"); 
    require_once("./src/Views/Components/Nav.php");
?>


<Nav>
<nav class="navbar navbar-expand-lg bg-dark fixed-top d-flex">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <a class="navbar-brand" rel="home" href='#' title="Logo"> 
        <img style="max-width:100px; margin-top: -7px;" src='/src/assets/logo.png'> 
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" style="color: white" aria-current="page" href="?action=index">LISTADO DE SOLICITUDES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: white" href="?action=create">AÑADIR SOLICITUD</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" style="color: white" href="?action=EditClient">DETALLE</a>
        </li>
      
      </ul>
    </div>
  </div>
</nav>
</Nav>