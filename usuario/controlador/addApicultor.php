<?php 
    require_once("../modelo/apicultor.php");

    if (isset ($_REQUEST["btn_enviar"])){
        $nombres_apellidos = $_POST["nombres_apellidos"];
        $identidad = $_POST["identidad"];
        $password = $_POST["password"];
        $ubicacion = $_POST["ubicacion"];
        $contactos = $_POST["contactos"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $insertarUsuario = new apicultor ();
        $insertarUsuario->insertarUsuario($nombres_apellidos,$identidad,$password,$ubicacion,$contactos,$fecha_nacimiento);
             
    }

?>