<?php
    require_once("./src/Views/Components/Layout.php"); 
    require_once("./src/Views/Components/Nav.php");
?>


<Nav>
<nav class="navbar navbar-expand-lg bg-light fixed-top d-flex">
  <div class="container-fluid">
  <img src="../Components/img/p 1.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?action=index">LISTADO DE SOLICITUDES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?action=create">AÑADIR SOLICITUD</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="?action=EditClient">DETALLE</a>
        </li>
      
      </ul>
    </div>
  </div>
</nav>
</Nav>