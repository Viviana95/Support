<?php
    require_once("./src/Views/Components/Layout.php"); 
    require_once("./src/Views/Components/Nav.php");
?>


<Nav>
<nav class="navbar navbar-expand-lg bg-light fixed-top d-flex">
<a class="navbar-logo" rel="home" href='#' title="Logo"> 
  <img style="max-width:100px; margin-top: -7px; margin-left: 10px" src='/src/asset/logo.png'> 
</a>
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" style="color: black" aria-current="page" href="?action=index">LISTADO DE SOLICITUDES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: black" href="?action=create">AÑADIR SOLICITUD</a>
        </li>
        
      
      </ul>
    </div>
  </div>
</nav>
</Nav>