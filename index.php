<?php

require_once("template/Plantillaindex.php");

?>
<header>
    <div class="px-3 py-2 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
            
              <a href="#" class="nav-link text-secondary">
              <i class="bi bi-house-fill"></i><use xlink:href="index.php"></use></i>
                Inicio
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
              <i class="bi bi-menu-up"></i><use xlink:href="#speedometer2"></use></i>
                Menu
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
              <i class="bi bi-bookmarks-fill"></i><use xlink:href="#table"></use></i>
                Pedidos
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
              <i class="bi bi-basket-fill"></i><use xlink:href="#grid"></use></i>
                Productos
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
              <i class="bi bi-person-square"></i><use xlink:href="#people-circle"></use></i>
                Clientes
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="px-3 py-2 border-bottom mb-3">
      <div class="container d-flex flex-wrap justify-content-center">
        <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
          <input type="search" class="form-control" placeholder="Buscar..." aria-label="Search">
        </form>       
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            REGISTRASE
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="usuario/vista/addApicultor.php">Como Apicultor</a></li>
            <li><a class="dropdown-item" href="usuario/vista/addEmpresa.php">Como Empresa</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Como Persona natural</a></li>
          </ul>
        </li>
        <div class="text-end">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            INICIAR SESION
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="usuario/vista/loginApicultor.php">Como Apicultor</a></li>
            <li><a class="dropdown-item" href="usuario/vista/addEmpresa.php">Como Empresa</a></li>
            <li><a class="dropdown-item" href="usuario/vista/addEmpresa.php">Como persona natural</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Como administrador</a></li>
          </ul>
        </li>
        <div class="text-end">
        </div>
      </div>
    </div>
  </header>
  