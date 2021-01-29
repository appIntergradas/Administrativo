<?php
    /**
    * Description of DB
    *
    * @author aquirozr
    */
    class DB {
        private $_server;
        private $_user;
        private $_passwd;
        private $_database;
        private $_port;
        private $_conexion;
        private $_result;
        
        public function DB(){
            $this->_server = SERVER;
            $this->_user = USER;
            $this->_passwd = PASSWD;
            $this->_database = DATABASE;
            $this->_port = PORT;
            try {
            $mysqli='';
            $this->_conexion = new mysqli($this->_server, $this->_user, $this->_passwd, $this->_database);
            if ($this->_conexion->connect_errno) {
                echo "Fallo al contenctar a MySQL: (" . $this->_conexion->connect_errno . ") " . $this->_conexion->connect_error;
            }
            mysqli_query($this->_conexion, "SET NAMES 'utf8'");
                return true;
                
            } catch (Exception $exc) {
                return false;
            }
        }
        
        public function Query($query){
		
            $this->_result = mysqli_query($this->_conexion,$query);

        }
        
        public function FetchArray(){
            
            return mysqli_fetch_array($this->_result);

        }
        
        public function FetchAssoc(){
            
            return mysqli_fetch_assoc($this->_result);

        }
        
        public function RowFetchArray(){
            if($row=mysqli_fetch_row($this->_result)){
            return $row;
            }
        }
        
        public function FilasAfectadas(){
        
            return mysqli_affected_rows($this->_conexion);
        
        }
        
        public function lastInsertedId(){
            return mysqli_insert_id($this->_conexion);
        }
        
        public function Close(){
            return mysqli_close($this->_conexion);
        }
        
        public function get_server() {
            return $this->_server;
        }

        public function set_server($_server) {
            $this->_server = $_server;
        }

        public function get_user() {
            return $this->_user;
        }

        public function set_user($_user) {
            $this->_user = $_user;
        }

        public function get_passwd() {
            return $this->_passwd;
        }

        public function set_passwd($_passwd) {
            $this->_passwd = $_passwd;
        }

        public function get_database() {
            return $this->_database;
        }

        public function set_database($_database) {
            $this->_database = $_database;
        }

        public function get_port() {
            return $this->_port;
        }

        public function set_port($_port) {
            $this->_port = $_port;
        }

        public function get_conexion() {
            return $this->_conexion;
        }

        public function set_conexion($_conexion) {
            $this->_conexion = $_conexion;
        }

        public function get_result() {
            return $this->_result;
        }

        public function set_result($_result) {
            $this->_result = $_result;
        }


    }
?>
