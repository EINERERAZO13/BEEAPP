<?php

require_once("../../template/PlantillaFormulario.php")

?>
<br>
      
      <center><h2>INGRESAR COMO PERSONA NATURAL </h2></center>
      <br>
<div class="formulario">

<form action="../controlador/login.php"method="POST">
    <div class="mb-3">
        <label >Correo Electronico: </label>
        <input type="text" class="form-control" name="email" placeholder="Digite aqui el numero de su documento de identidad" aria-describedby="emailHelp">
        
    </div>
    
   
    <div class="mb-3">
        <label >Contraseña</label>
        <input type="password" class="form-control" name="password" placeholder="Ingrese aqui su contraseña"  aria-describedby="emailHelp">
        
    </div>
    
    
           
  
    <button type="submit" name="btn_enviar" class="btn btn-primary">Ingresar</button></a>


</form>
</div>
    
