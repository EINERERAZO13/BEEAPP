<?php 
    require_once("../modelo/empresa.php");

    if (isset ($_REQUEST["btn_enviar"])){
        $nit = $_POST["nit"];
        $razon_social = $_POST["razon_social"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $ubicacion = $_POST["ubicacion"];
        $contactos = $_POST["contactos"];
        $insertarUsuario = new empresa ();
        $insertarUsuario->insertarUsuarioEmpresa($nit,$razon_social, $email, $password,$ubicacion,$contactos);
             
    }

?>