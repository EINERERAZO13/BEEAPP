<?php

require_once("../../template/PlantillaFormulario.php");

/*<a href="../../index.php">
<button type="submit" class="btn btn-primary">
  
      volver</a></button>*/
?>

<center><h2>REGISTRO PARA PERSONAS NATURALES</h2></center>
<div class="formulario">
<form action="../Controlador/addPersona.php" method="POST">
  <div class="mb-3">
    <label>Nombres y Apellidos: </label>
    <input type="text" class="form-control" name="nombres_apellidos" placeholder="Ingrese aqui sus nombres y apellidos completos">
  </div>

  <div class="mb-3">
    <label>Documento de identidad: </label>
    <input type="text" class="form-control" name="identidad" placeholder="Escriba aqui el numero de su documento de identidad">
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
    <label>Contactos: </label>
    <input type="text" class="form-control" name="contactos" aria-describedby="emailHelp">
  </div>
  <button type="submit" name="btn_enviar" class="btn btn-primary">enviar</button>


  
</form>
</div>      