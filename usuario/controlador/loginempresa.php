<?php

require_once("../modelo/apicultor.php");

    if (isset($_REQUEST["btn_enviar"])==1) {
        $email = $_POST["email"];
        $password = $_POST ["password"];
        $LoginUsuario = new apicultor();
        $LoginUsuario->login($email,$password);
        
        if (isset($LoginUsuario)==1) {
            //header permite ir a otro archivo
            header('location: ../vista/loginapicultor.php');
        }else {
            header('location: ../index.php');
        }
        
    }
    



?>