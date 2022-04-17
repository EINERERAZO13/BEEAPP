<?php 
   require_once("../../conexion/conexion.php");
session_start();
   class Persona extends conexion {


        public function __construct()
        {
            $this->db = parent::__construct();            
        }    

        //LOGIN PERSONA
        public function loginPersona ($email, $password){
            $tabla = $this->db->prepare("SELECT email, password FROM persona
             WHERE email = :email AND password = :password");
             $tabla->bindParam(':email',$email);
             $tabla->bindParam(':password',$password);
             $tabla->execute();
             //rowCount busca en la tabla una conincidencia si la encontro = 1    
             if ($tabla->rowCount()==1) {
                 $loginUsuario = $tabla->fetch();
                $_SESSION['email'] = $loginUsuario['email'];
                echo "inicio de sesion satisfactorio!!";
                          
             }else {
                 echo "Fallo al iniciar sesion verifique sus datos";
             }
        }

            

         //REGISTRO PERSONA
         public function insertarUsuarioPersona($nombre, $identidad, $email, $password, $contactos){
            //prepare prepara la consulta SQL enviada ->Insert Into
            $tabla = $this->db->prepare("INSERT INTO persona(nombre, identidad, email, password, contactos) 
            VALUE(:nombre, :identidad, :email, :password, :contactos)");
            $tabla->bindParam(':nombre', $nombre);
            $tabla->bindParam(':identidad', $identidad);
            $tabla->bindParam(':email', $email);
            $tabla->bindParam(':password', $password);
            $tabla->bindParam(':contactos', $contactos);
            
            
            if ($tabla->execute()){
                echo "<h1>tu registro como persona natural fue exitoso.. </h1>";
                echo "<br>";
                echo "<h1>El equipo BEEAPP te da la bienvenida.. </h1>";
                header('refresh:10; url=../../index.php');
            }else{
                echo " Tu registro no fue posible, Intenta de nuevo!!";
                header('refresh:2; url=../vista/addPersona.php');
            }
        }


        public function getpersona(){
            $rows = Null;
            $tabla = $this->db->prepare("SELECT id, nombre, identidad, email, password, contactos FROM persona");
            $tabla->execute();
            while ($result = $tabla->fetch()) {
            $rows[] = $result;
            }
            return $rows;
            }
   } //fin de la clase 


   
   

?>