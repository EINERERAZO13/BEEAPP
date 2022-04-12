<?php 
   require_once("../../conexion/conexion.php");
session_start();
   class apicultor extends conexion {


        public function __construct()
        {
            $this->db = parent::__construct();            
        }    

        //LOGIN APICULTOR
        public function login ($identidad, $password){
            $tabla = $this->db->prepare("SELECT identidad, password FROM apicultor
             WHERE identidad = :identidad AND password = :password");
             $tabla->bindParam(':identidad',$identidad);
             $tabla->bindParam(':password',$password);
             $tabla->execute();
             //rowCount busca en la tabla una conincidencia si la encontro = 1    
             if ($tabla->rowCount()==1) {
                 $loginUsuario = $tabla->fetch();
                $_SESSION['identidad'] = $loginUsuario['identidad'];
                echo "inicio de sesion satisfactorio!!";
                          
             }else {
                 echo "Fallo al iniciar sesion verifique sus datos";
             }
        }

            //REGISTRO APICULTOR
        public function insertarUsuario($nombres_apellidos, $identidad, $password, $ubicacion, $contactos, $fecha_nacimiento){
            //prepare prepara la consulta SQL enviada ->Insert Into
            $tabla = $this->db->prepare("INSERT INTO apicultor(nombres_apellidos, identidad, password, ubicacion, contactos, fecha_nacimiento) 
            VALUE(:nombres_apellidos, :identidad, :password, :ubicacion, :contactos, :fecha_nacimiento)");
            $tabla->bindParam(':nombres_apellidos', $nombres_apellidos);
            $tabla->bindParam(':identidad', $identidad);
            $tabla->bindParam(':password', $password);
            $tabla->bindParam(':ubicacion', $ubicacion);
            $tabla->bindParam(':contactos', $contactos);
            $tabla->bindParam(':fecha_nacimiento', $fecha_nacimiento);
            
            if ($tabla->execute()){
                echo "<h1>tu Registro como apicultor fue exitoso.. </h1>";
                echo "<br>";
                echo "<h1>El equipo BEEAPP te da la bienvenida.. </h1>";
                header('refresh:10; url=../../index.php');
            }else{
                echo " Fallaste al Registrarte Prro, Intenta de nuevo!!";
                header('refresh:2; url=../../Index.php');
            }
        }

         //REGISTRO EMPRESA
         public function insertarUsuarioEmpresa($nit, $razon_social, $email, $password, $ubicacion, $contactos){
            //prepare prepara la consulta SQL enviada ->Insert Into
            $tabla = $this->db->prepare("INSERT INTO empresa(nit, email, password, ubicacion, contactos) 
            VALUE(:nombres_apellidos, :identidad, :password, :ubicacion, :contactos)");
            $tabla->bindParam(':nombres_apellidos', $nit);
            $tabla->bindParam(':identidad', $email);
            $tabla->bindParam(':password', $password);
            $tabla->bindParam(':ubicacion', $ubicacion);
            $tabla->bindParam(':contactos', $contactos);
            
            
            if ($tabla->execute()){
                echo "<h1>Registro de usuario satisfactorio.. </h1>";
                header('refresh:3; url=../vista/add.php');
            }else{
                echo " Fallaste al Registrarte Prro, Intenta de nuevo!!";
                header('refresh:2; url=../../Index.php');
            }
        }



        //VER UN USUARIO APICULTOR
        public function getIdrUsuario($id){
            $rows = null;
            $tabla = $this->db->prepare("SELECT id, nombres_epellidos, identidad, ubicacion, contactos, fecha_nacimiento FROM apicultor WHERE id = :id");
            $tabla->bindParam(':id',$id);
            $tabla->execute();
            while ($result = $tabla->fetch()) {
                $rows[] = $result;
            }
            return $rows;
           
        }
   } //fin de la clase 

   
   

?>