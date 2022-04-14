<?php 
   require_once("../../conexion/conexion.php");
session_start();
   class empresa extends conexion {


        public function __construct()
        {
            $this->db = parent::__construct();            
        }    

        //LOGIN EMPRESA
        public function loginEmpresa ($email, $password){
            $tabla = $this->db->prepare("SELECT email, password FROM empresa
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

            

         //REGISTRO EMPRESA
         public function insertarUsuarioEmpresa($nit, $razon_social, $email, $password, $ubicacion, $contactos){
            //prepare prepara la consulta SQL enviada ->Insert Into
            $tabla = $this->db->prepare("INSERT INTO empresa(nit, razon_social, email, password, ubicacion, contactos) 
            VALUE(:nit, :razon_social, :email, :password, :ubicacion, :contactos)");
            $tabla->bindParam(':nit', $nit);
            $tabla->bindParam(':razon_social', $razon_social);
            $tabla->bindParam(':email', $email);
            $tabla->bindParam(':password', $password);
            $tabla->bindParam(':ubicacion', $ubicacion);
            $tabla->bindParam(':contactos', $contactos);
            
            
            if ($tabla->execute()){
                echo "<h1>Registro de usuario satisfactorio.. </h1>";
                header('refresh:3; url=../vista/addEmpresa.php');
            }else{
                echo " Fallaste al Registrarte Prro, Intenta de nuevo!!";
                header('refresh:2; url=../../Index.php');
            }
        }



        //VER UN USUARIO EMPRESA
        public function getempresa(){
            $rows = Null;
            $tabla = $this->db->prepare("SELECT id, nit, razon_social, email, password, ubicacion, contactos FROM empresa");
            $tabla->execute();
            while ($result = $tabla->fetch()) {
            $rows[] = $result;
            }
            return $rows;
            }
   } //fin de la clase 

   
   

?>