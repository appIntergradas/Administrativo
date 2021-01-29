<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DAOUsuario
 *
 * @author aquirozr
 */
class DAOClientes_temp {
    protected $_cl_id;
    protected $_cl_nit;
    protected $_cl_razon;
    protected $_cl_dv;
    protected $_cl_ciiu;
    protected $_cl_ciud;
    protected $_cl_dir;
    protected $_cl_tel;
    protected $_cl_otro;
    protected $_cl_cont;
    protected $_cl_norete;
    protected $_cl_grancon;
    protected $_cl_rteiva;
    protected $_cl_plazo;
    protected $_cl_creo;
    protected $_cl_mod;
    protected $_cl_fecha_mod;
    protected $_cl_email;
    private $_obj_rol; 
    private $_db;
    public $_mxr;
    
    public function __construct() {
        $this->_db = new DB();    
    }
   public function VaciarCltemp(){
    $query= 'TRUNCATE clientes_temp' ;
    $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
   }
   public function InfoClires(){
    $query = 'SELECT * FROM clientes_temp WHERE cl_id='.$this->_cl_id;
        $this->_db->Query($query);
        return $this->_db->RowFetchArray();
}

    public function ListarClientes($orden = 'ASC'){
        $query = 'SELECT * '
                . 'FROM clientes '
                . 'LEFT JOIN (SELECT r1.cli_id, SUM(r1.valor) AS cartera FROM remision r1 WHERE estado!="Finalizado" GROUP BY cli_id) AS dat ON dat.cli_id = nitcc '
                . 'WHERE vendedor = "'.$this->_cl_dv.'"';
        
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function ListarClientesTodos($orden = 'ASC'){
        $query = 'SELECT * '
                . 'FROM clientes ';
        
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
            $rows[] = $row;
        }
        return $rows;
    }  
   
    public function ListarClientesTodos2($orden = 'ASC'){
        $query = 'SELECT * '
                . 'FROM clientes '
                . 'LEFT JOIN (SELECT r1.cli_id, SUM(r1.valor) AS cartera FROM remision r1 WHERE estado!="Finalizado" GROUP BY cli_id) AS dat ON dat.cli_id = nitcc ';
        
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function ValidarNit(){
        $query = "SELECT *                
            FROM
            clientes
            WHERE cl_nit='".$this->_cl_nit."'";
        error_log($query);
         $this->_db->Query($query);
         return $this->_db->RowFetchArray();
    }
    
    public function RegistrarCliente(/*$valorKl*/){
        $ins = "'".$this->_cl_nit."'";
        $ins .= ",'".$this->_cl_dv."'";
        $ins .= ",'".$this->_cl_ciiu."'";
        $ins .= ",'".$this->_cl_razon."'";
        $ins .= ",'".$this->_cl_tel."'";
        $ins .= ",'".$this->_cl_otro."'";
        $ins .= ",'".$this->_cl_cont."'";
        $ins .= ",'".$this->_cl_dir."'";
        $ins .= ",'".$this->_cl_ciud."'";
        $ins .= ",'".$this->_cl_email."'";
        $ins .= ",'".$this->_cl_norete."'";
        $ins .= ",'".$this->_cl_grancon."'";
        $ins .= ",'".$this->_cl_rteiva."'";
        $ins .= ",'".$this->_cl_plazo."'";
        $ins .= ",'".$this->_cl_creo."'";

        /*if($this->_fecha_entrega != "" ){
            $ins .= ",'".$this->_fecha_entrega."'";
        }else{
            $ins .= ",NULL";
        }*/
        $query = 'INSERT INTO clientes_temp (cl_nit,cl_dv,cl_ciiu,cl_razon,cl_tel,cl_otro,
                  cl_cont,cl_dir,cl_ciud,cl_email,cl_norete,cl_grancon,cl_rteiva,cl_plazo,cl_creo) VALUES ('.$ins.')';  
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }

  
    public function ModificarCliente(){
        $upd = "cl_nit = '".$this->_cl_nit."'";
        $upd .= ",cl_dv = '".$this->_cl_dv."'";
        $upd .= ",cl_ciiu = '".$this->_cl_ciiu."'";
        $upd .= ",cl_razon = '".$this->_cl_razon."'";
        $upd .= ",cl_tel = '".$this->_cl_tel."'";
        $upd .= ",cl_otro = '".$this->_cl_otro."'";
        $upd .= ",cl_cont = '".$this->_cl_cont."'";
        $upd .= ",cl_dir = '".$this->_cl_dir."'";
        $upd .= ",cl_ciud = '".$this->_cl_ciud."'";
        $upd .= ",cl_email = '".$this->_cl_email."'"; 
        $upd .= ",cl_norete = '".$this->_cl_norete."'"; 
        $upd .= ",cl_grancon = '".$this->_cl_grancon."'"; 
        $upd .= ",cl_rteiva = '".$this->_cl_rteiva."'"; 
        $upd .= ",cl_plazo = '".$this->_cl_plazo."'";
        $upd .= ",cl_fecha_mod = '".$this->_cl_fecha_mod."'";
        $upd .= ",cl_mod = '".$this->_cl_mod."'"; 
        $query = 'UPDATE clientes SET '.$upd.' WHERE cl_id='.$this->_cl_id;
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }
    
    public function BuscarUsuario($tipo, $dato){
        $query = 'SELECT * FROM usuarios WHERE '.$tipo.'='.$dato;
        
        $this->_db->Query($query);
        $datos = array();
        while($resultado = $this->_db->FetchArray()){
            $datos[] = array(
                'codigo'=> $resultado['nitcc'],
                'identificacion' => $resultado['razon'],
                'nombre' => $resultado['vendedor'],
                'apellido' => $resultado['usu_apellidos'],
                'login' => $resultado['usu_login'],
                'fecnac' => $resultado['usu_fecnac']
            );
        }
        return $datos;
    }
    
    public function BorrarCliente(){
        $query = 'DELETE FROM clientes WHERE  cl_id='.$this->_cl_id;
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }
    
    public function InfoClientes2(){
        $query = 'SELECT * '
                . 'FROM clientes '
                . 'LEFT JOIN (SELECT r1.cli_id, SUM(r1.valor) AS cartera FROM remision r1 WHERE estado!="Finalizado" GROUP BY cli_id) AS dat ON dat.cli_id = nitcc ' 
                . 'WHERE nitcc='.$this->_cl_nit;
        $this->_db->Query($query);
        return $this->_db->RowFetchArray();
    }
    
    public function InfoClbusqueda(){
        $query = "SELECT * 
                    FROM clientes
                    WHERE cl_nit LIKE '%".$this->_cl_nit."%' OR UPPER(cl_razon) LIKE '%".strtoupper($this->_cl_razon)."%'";
       
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
    public function InfoClientes(){
        $query = 'SELECT * FROM clientes WHERE cl_nit='.$this->_cl_nit;
        $this->_db->Query($query);
        return $this->_db->RowFetchArray();
    }

    public function InfoClientesid(){
        $query = 'SELECT * FROM clientes WHERE cl_id='.$this->_cl_id;
        $this->_db->Query($query);
        return $this->_db->RowFetchArray();
    }
    
    public function InfoUsuarios(){
        $query = 'SELECT * FROM usuarios WHERE nitcc='.$this->_cl_nit;
        $this->_db->Query($query);
        return $this->_db->RowFetchArray();
    }
    
    public function passAdmin(){
        $upd = "usu_login = '".$this->_usu_login."'";
        $upd .= ",usu_passwd = '".$this->_usu_passwd."'";
        $query="UPDATE usuarios SET '.$upd.' WHERE nitcc=1";
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }
    
    public function passEmpleado(){
        $upd = "usu_login = '".$this->_usu_login."'";
        $upd .= ",usu_passwd = '".$this->_usu_passwd."'";
        $query="UPDATE usuarios SET '.$upd.' WHERE nitcc=2";
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }
    
    public function loginAdminInfo(){
        $query="SELECT usu_login,usu_passwd FROM usuarios WHERE nitcc=1";
        $this->_db->Query($query);
        return $this->_db->RowFetchArray();
    }
    
    public function loginEmpleadoInfo(){
        $query="SELECT usu_login,usu_passwd FROM usuarios WHERE nitcc=2";
        $this->_db->Query($query);
        return $this->_db->RowFetchArray();
    }

    
    function get_cl_id() {
        return $this->_cl_id;
    }
    
    function get_cl_nit() {
        return $this->_cl_nit;
    }

    function get_cl_razon() {
        return $this->_cl_razon;
    }

    function get_cl_dv() {
        return $this->_cl_dv;
    }

    function get_cl_ciiu() {
        return $this->_cl_ciiu;
    }

    function get_cl_ciud() {
        return $this->_cl_ciud;
    }

    function get_cl_dir() {
        return $this->_cl_dir;
    }

    function get_cl_tel() {
        return $this->_cl_tel;
    }

    function get_cl_otro() {
        return $this->_cl_otro;
    }

    function get_cl_cont() {
        return $this->_cl_cont;
    }

    function get_cl_email() {
        return $this->_cl_email;
    }

    function get_cl_norete() {
        return $this->_cl_norete;
    }

    function get_cl_grancon() {
        return $this->_cl_grancon;
    }

    function get_cl_rteiva() {
        return $this->_cl_rteiva;
    }

    function get_cl_plazo() {
        return $this->_cl_plazo;
    }

    

    function set_cl_id($_cl_id) {
        $this->_cl_id = $_cl_id;
    }

    function set_cl_nit($_cl_nit) {
        $this->_cl_nit = $_cl_nit;
    }

    function set_cl_dv($_cl_dv) {
        $this->_cl_dv = $_cl_dv;
    }

    function set_cl_ciiu($_cl_ciiu) {
        $this->_cl_ciiu = $_cl_ciiu;
    }
    
    function set_cl_razon($_cl_razon) {
        $this->_cl_razon = $_cl_razon;
    }

    function set_cl_tel($_cl_tel) {
        $this->_cl_tel = $_cl_tel;
    }

    function set_cl_otro($_cl_otro) {
        $this->_cl_otro = $_cl_otro;
    }

    function set_cl_cont($_cl_cont) {
        $this->_cl_cont = $_cl_cont;
    }
    
    function set_cl_dir($_cl_dir) {
        $this->_cl_dir = $_cl_dir;
    }

    function set_cl_ciud($_cl_ciud) {
        $this->_cl_ciud = $_cl_ciud;
    }

    function set_cl_email($_cl_email) {
        $this->_cl_email = $_cl_email;
    }

    function set_cl_norete($_cl_norete) {
        $this->_cl_norete = $_cl_norete;
    }

    function set_cl_grancon($_cl_grancon) {
        $this->_cl_grancon = $_cl_grancon;
    }

    function set_cl_rteiva($_cl_rteiva) {
        $this->_cl_rteiva = $_cl_rteiva;
    }

    function set_cl_plazo($_cl_plazo) {
        $this->_cl_plazo = $_cl_plazo;
    }
   
    function get_cl_creo() {
        return $this->_cl_creo;
    }

    function set_cl_creo($_cl_creo) {
        $this->_cl_creo = $_cl_creo;
    }
    function get_cl_fecha_mod() {
        return $this->_cl_fecha_mod;
    }

    function set_cl_fecha_mod($_cl_fecha_mod) {
        $this->_cl_fecha_mod = $_cl_fecha_mod;
    }
    function get_cl_mod() {
        return $this->_cl_mod;
    }

    function set_cl_mod($_cl_mod) {
        $this->_cl_mod = $_cl_mod;
    }


}

?>
