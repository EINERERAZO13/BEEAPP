<?php 
   require_once("../../conexion/conexion.php");
session_start();
   class administrador extends conexion {


        public function __construct()
        {
            $this->db = parent::__construct();            
        }    

        //LOGIN ADMINISTRADOR
        public function loginadministrador ($email, $password){
            $tabla = $this->db->prepare("SELECT email, password FROM administrador
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

      //VER TODOS LOS ADMINISTRADORES
      public function getadministrador(){
        $rows = Null;
        $tabla = $this->db->prepare("SELECT id, nombre, email, password, rol, contactos FROM administrador");
        $tabla->execute();
        while ($result = $tabla->fetch()) {
        $rows[] = $result;
        }
        return $rows;
        }

} //fin de la clase 


   
   

?>