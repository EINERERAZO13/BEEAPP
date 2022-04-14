<?php 
    require_once("../modelo/apicultor.php");
    require_once("../../template/plantillaFormulario.php");
    $modeloapicultor = new apicultor();
?>

<h3>Listado de usuarios </h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombres y Apellidos</th>
      <th scope="col">identidad</th>
      <th scope="col">ubicacion</th>
      <th scope="col">fecha de nacimiento</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $verapicultores = $modeloapicultor->getapicultor();
  foreach ($verapicultores as $listarapicultor) {
  ?>
            <tr>
                <th scope="row"><?= $listarapicultor['id_apicultor'];?></th>
                <td><?= $listarapicultor['nombre_apellidos'];?></td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                  <a href="update.php?=id<?= $listarapicultor['id_apicultor'];?>" class="btn btn-warning">Editar</a>
                  <a href="delete.php=id<?= $listarapicultor['id_apicultor']?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        <?php
         
        }
         
        ?>
   
   
  </tbody>
</table>



    

?>