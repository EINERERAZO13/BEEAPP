<?php 
    require_once("../modelo/persona.php");
    require_once("../../template/plantillaFormulario.php");
    $modelopersona = new persona();
?>
  <br>
  <form>
    <a href="perfiladministrador.php">
    <button type="button" class="btn btn-warning" href="perfiladministrador.php"  >VOLVER</button>
    </a>
</form>
      <center><h2>LISTADO DE PERSONAS </h2></center>
      <br>

      <table class="table">
    <thead>  
        <tr>
            <th>#</th>
            <th><h5>Nombres y apellidos</th>
            <th>Identidad</th>
            <th>Correo Electronico</th>
            <th>Contactos</th>
            <th> Acciones</th></h3>
        <tr>
    </thead> 
    <tbody>       
        <?php

          $verpersonas = $modelopersona->getpersona();
          foreach ($verpersonas as $Key => $listarpersona) {
        ?>      
            <tr>
            <th scope="row"><?= $listarpersona['id'];?></th>
                <td><?= $listarpersona['nombre'];?></td>
                <td><?= $listarpersona['identidad'];?></td>
                <td><?= $listarpersona['email'];?></td>
                <td><?= $listarpersona['contactos'];?></td>
                <td>
                   <a href="update.php?=id<?= $listarpersona['id'];?>" class="btn btn-warning">Editar</a>
                    <a href="delete.php=id<?= $listarpersona['id']?>" class="btn btn-danger">Eliminar</a>
                </td>  
            </tr>
        <?php 
        }
        ?>   
    </tbody>
</table>

 

    
