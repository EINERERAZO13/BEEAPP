<?php 
    require_once("../modelo/administrador.php");
    require_once("../../template/plantillaFormulario.php");
    $modeloadministrador = new administrador();
?>
  <br>
  <form>
    <a href="perfiladministrador.php">
    <button type="button" class="btn btn-warning" href="perfiladministrador.php"  >VOLVER</button>
    </a>
</form>
        <center><h2>LISTADO DE ADMINISTRADORES </h2></center>
      <br>

      <table class="table">
    <thead>  
        <tr>
            <th>#</th>
            <th><h5>Nombres y Apellidos</th>
            <th>Correo electronico</th>
            <th>rol</th>
            <th>contactos</th>
            <th> Acciones</th></h3>
        <tr>
    </thead> 
    <tbody>       
        <?php

          $veradministradores = $modeloadministrador->getadministrador();
          foreach ($veradministradores as $key => $listaradministradores) {
        ?>      
            <tr>
            <th scope="row"><?= $listaradministradores['id'];?></th>
                <td><?= $listaradministradores['nombre'];?></td>
                <td><?= $listaradministradores['email'];?></td>
                <td><?= $listaradministradores['rol'];?></td>
                <td><?= $listaradministradores['contactos'];?></td>
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

 

    
