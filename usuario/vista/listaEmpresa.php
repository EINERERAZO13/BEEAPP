<?php 
    require_once("../modelo/empresa.php");
    require_once("../../template/plantillaFormulario.php");
    $modeloempresa = new empresa();
?>
  <br>
      
      <center><h2>LISTADO DE EMPRESAS </h2></center>
      <br>

      <table class="table">
    <thead>  
        <tr>
            <th>#</th>
            <th><h5>Nit</th>
            <th>Razon Social</th>
            <th>Correo Electronico</th>
            <th>Ubicacion</th>
            <th> Acciones</th></h3>
        <tr>
    </thead> 
    <tbody>       
        <?php

          $verempresas = $modeloempresa->getempresa();
          foreach ($verempresas as $key => $listarempresas) {
        ?>      
            <tr>
            <th scope="row"><?= $listarempresas['id'];?></th>
                <td><?= $listarempresas['nit'];?></td>
                <td><?= $listarempresas['razon_social'];?></td>
                <td><?= $listarempresas['email'];?></td>
                <td><?= $listarempresas['ubicacion'];?></td>
                <td>
                   <a href="update.php?=id<?= $listarempresas['id'];?>" class="btn btn-warning">Editar</a>
                    <a href="delete.php=id<?= $listarempresas['id']?>" class="btn btn-danger">Eliminar</a>
                </td>  
            </tr>
        <?php 
        }
        ?>   
    </tbody>
</table>

 

    
