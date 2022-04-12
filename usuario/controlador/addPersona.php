<?php 
    require_once("../modelo/persona.php");

    if (isset ($_REQUEST["btn_enviar"])){
        $nombres_apellidos = $_POST["nombres_apellidos"];
        $identidad = $_POST["identidad"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $contactos = $_POST["contactos"];
        $insertarUsuario = new persona ();
        $insertarUsuario->insertarUsuarioPersona($nombres_apellidos,$identidad, $email, $password, $contactos);
             
    }

?>