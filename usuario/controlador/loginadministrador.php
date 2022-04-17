<?php

require_once("../modelo/administrador.php");

    if (isset($_REQUEST["btn_enviar"])==1) {
        $email = $_POST["email"];
        $password = $_POST ["password"];
        $LoginUsuario = new administrador();
        $LoginUsuario->loginadministrador ($email,$password);
        
        if (isset($LoginUsuario)==1) {
            //header permite ir a otro archivo
            header('location: ../vista/perfiladministrador.php');
        }else {
            header('location: ../index.php');
        }
        
    }
    



?>