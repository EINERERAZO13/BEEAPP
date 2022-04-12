<?php

require_once("../../template/PlantillaFormulario.php");

/*<a href="../../index.php">
<button type="submit" class="btn btn-primary">
  
      volver</a></button>*/
?>

<center><h2>REGISTRO PARA APICULTORES</h2></center>
<div class="formulario">
<form action="../Controlador/addApicultor.php" method="POST">
  <div class="mb-3">
    <label>Nombres y apellidos: </label>
    <input type="text" class="form-control" name="nombres_apellidos" placeholder="Ingrese aqui sus nombres y apellidos completos">
  </div>

  <div class="mb-3">
    <label>Identidad: </label>
    <input type="text" class="form-control" name="identidad" placeholder="Digite aqui el numero de su documento de identidad">
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

  <div class="mb-3">
    <label>Fecha de nacimiento: </label>
    <input type="date" class="form-control" name="fecha_nacimiento" aria-describedby="emailHelp">
  </div>
  <button type="submit" name="btn_enviar" class="btn btn-primary">enviar</button>


  
</form>
</div>      