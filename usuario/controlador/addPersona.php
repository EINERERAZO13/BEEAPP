<?php 
    require_once("../modelo/persona.php");

    if (isset ($_REQUEST["btn_enviar"])){
        $nombre = $_POST["nombre"];
        $identidad = $_POST["identidad"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $contactos = $_POST["contactos"];
        $insertarUsuario = new persona ();
        $insertarUsuario->insertarUsuarioPersona($nombre, $identidad, $email, $password, $contactos);
             
    }

?>