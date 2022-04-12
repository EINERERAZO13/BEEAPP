<?php 

    class Conexion {

        private     $db;
        protected     $driver     = "mysql";
        protected   $host       = "localhost";
        private     $based      = "beeapp";
        private     $usuario    = "root";
        private     $contrasena = "";

        public function __construct(){
            try {
                $db = new PDO("{$this->driver}:host={$this->host};
                dbname={$this->based}", $this->usuario, $this->contrasena);
                //echo "La conexion a la Bd es exitosa";
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $db;
            } catch (PDOException $e) {
                echo "Error de conexión a la bd..".$e->getMessage();
            }
        }
    }//end clase

    /* $objConexion = new Conexion();
    print_r($objConexion); */

?>