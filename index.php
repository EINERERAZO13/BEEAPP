<?php

require_once("template/Plantillaindex.php");

?>
 <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
 
   <title> BEEAPP 2022</title>
  <H6 >
  <style>

</style>
<center><a class="navbar-brand" class="h1" href="#"><img src="imagen/logobeeapp.png" width="200" height="150" alt="BEEAPP"></a><h1 id="unico">BIENVENIDOS AL MUNDO DE LAS ABEJAS</h1></center>

</head>
 <body>
     <div class="px-3 py-2 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content- my-md-0 text-small">
            <li>
            
            <h5><a href="../../index.php" class="nav-link text-white" >
              <i class="bi bi-house-fill"></i><use xlink:href="#home"></use></i>
                Inicio
              </a>
            </li>
            <li>
            <h5><a href="#" class="nav-link text-white">
              <i class="bi bi-menu-up"></i><use xlink:href="#speedometer2"></use></i>
                Menu
              </a>
            </li>
            <li>
            <h5> <a href="#" class="nav-link text-white">
              <i class="bi bi-bookmarks-fill"></i><use xlink:href="#table"></use></i>
                Pedidos
              </a>
            </li>
            <li>
            <h5><a href="#" class="nav-link text-white">
              <i class="bi bi-basket-fill"></i><use xlink:href="#grid"></use></i>
                Productos
              </a>
            </li>
            <li>
            <h5> <a href="#" class="nav-link text-white">
              <i class="bi bi-person-square"></i><use xlink:href="#people-circle"></use></i>
                Clientes
              </a>
            </li>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
            REGISTRASE
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="usuario/vista/addApicultor.php">Como Apicultor</a></li>
            <li><a class="dropdown-item" href="usuario/vista/addEmpresa.php">Como Empresa</a></li>
            <li><a class="dropdown-item" href="usuario/vista/addPersona.php">Como persona natural</a></li>
          </ul>
        </li>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            INICIAR SESION
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="usuario/vista/loginApicultor.php">Como Apicultor</a></li>
            <li><a class="dropdown-item" href="usuario/vista/loginEmpresa">Como Empresa</a></li>
            <li><a class="dropdown-item" href="usuario/vista/loginPersona.php">Como Persona natural</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="usuario/vista/loginadministrador.php">Como Administrador</a></li>
          </ul>
        </li>
        </ul>
        <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar por Id" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>                
            </div>
        </div>
      </div>
    </div>
</body>
      
    
  </header>
  