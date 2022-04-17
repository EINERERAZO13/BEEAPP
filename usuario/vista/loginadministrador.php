<?php

require_once("../../template/PlantillaFormulario.php")

?>
<div class="formulario">

<form action="../controlador/loginadministrador.php"method="POST">
    <div class="mb-3">
        <label >Correo electronico: </label>
        <input type="text" class="form-control" name="email" placeholder="Digite aqui el correo electronico" aria-describedby="emailHelp">
        
    </div>
    
   
    <div class="mb-3">
        <label >Contraseña</label>
        <input type="password" class="form-control" name="password" placeholder="Ingrese aqui su contraseña"  aria-describedby="emailHelp">
        
    </div>
    
    
           
  
    <button type="submit" name="btn_enviar" class="btn btn-primary">Ingresar</button></a>


</form>
</div>
    
