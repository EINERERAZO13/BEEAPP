<?php

require_once("../../template/PlantillaFormulario.php");

/*<a href="../../index.php">
<button type="submit" class="btn btn-primary">
  
      volver</a></button>*/
?>

  
<div class="formulario">
<form action="../Controlador/addEmpresa.php" method="POST">
  <div class="mb-3">
    <label>NIT: </label>
    <input type="text" class="form-control" name="nit" placeholder="Digite aqui la identificacion de la empresa">
  </div>

  <div class="mb-3">
    <label>Razon Social: </label>
    <input type="text" class="form-control" name="razon_social" placeholder="Ingrese aqui en nombre de la empresa">
  </div>

  <div class="mb-3">
    <label>Correo electronico: </label>
    <input type="text" class="form-control" name="email" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label>Contraseña: </label>
    <input type="text" class="form-control" name="password" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label>Ubicacion: </label>
    <input type="text" class="form-control" name="ubicacion" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label>Contactos: </label>
    <input type="text" class="form-control" name="contactos" aria-describedby="emailHelp">
  </div>
  <button type="submit" name="btn_enviar" class="btn btn-primary">enviar</button>


  
</form>
</div>      