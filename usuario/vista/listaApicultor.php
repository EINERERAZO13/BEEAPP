<?php 
    require_once("../modelo/apicultor.php");
    require_once("../../template/plantillaFormulario.php");
    $modeloapicultor = new apicultor();
?>
  <br>
      
      <center><h2>LISTADO DE APICULTORES </h2></center>
      <br>

      <table class="table">
    <thead>  
        <tr>
            <th>#</th>
            <th><h5>Nombres y Apellidos</th>
            <th>identidad</th>
            <th>ubicacion</th>
            <th>fecha de nacimiento</th>
            <th> Acciones</th></h3>
        <tr>
    </thead> 
    <tbody>       
        <?php

          $verapicultores = $modeloapicultor->getapicultor();
          foreach ($verapicultores as $key => $listarapicultores) {
        ?>      
            <tr>
            <th scope="row"><?= $listarapicultores['id'];?></th>
                <td><?= $listarapicultores['nombre'];?></td>
                <td><?= $listarapicultores['identidad'];?></td>
                <td><?= $listarapicultores['ubicacion'];?></td>
                <td><?= $listarapicultores['fecha_nacimiento'];?></td>
                <td>
                   <a href="update.php?=id<?= $listarapicultores['id'];?>" class="btn btn-warning">Editar</a>
                    <a href="delete.php=id<?= $listarapicultores['id']?>" class="btn btn-danger">Eliminar</a>
                </td>  
            </tr>
        <?php 
        }
        ?>   
    </tbody>
</table>

 

    
