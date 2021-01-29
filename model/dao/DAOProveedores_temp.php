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
class DAOProveedores_temp {
    protected $_pv_id;
    protected $_pv_nit;
    protected $_pv_razon;
    protected $_pv_dv;
    protected $_pv_ciiu;
    protected $_pv_ciud;
    protected $_pv_dir;
    protected $_pv_tel;
    protected $_pv_otro;
    protected $_pv_cont;
    protected $_pv_norete;
    protected $_pv_grancon;
    protected $_pv_rteiva;
    protected $_pv_plazo;
    protected $_pv_creo;
    protected $_pv_fecha_mod;
    protected $_pv_mod;
    protected $_pv_email;
    private $_obj_rol; 
    private $_db;
    public $_mxr;
    
    public function __construct() {
        $this->_db = new DB();    
    }
    
    public function VaciarPvtemp(){
        $query= 'TRUNCATE proveedores_temp' ;
        $this->_db->Query($query);
            if($this->_db->FilasAfectadas()>0){
                return true;
            }else{
                return false;
            }
       }
       public function RegistrarProve(){
        $ins = "'".$this->_pv_nit."'";
        $ins .= ",'".$this->_pv_dv."'";
        $ins .= ",'".$this->_pv_ciiu."'";
        $ins .= ",'".$this->_pv_razon."'";
        $ins .= ",'".$this->_pv_tel."'";
        $ins .= ",'".$this->_pv_otro."'";
        $ins .= ",'".$this->_pv_cont."'";
        $ins .= ",'".$this->_pv_dir."'";
        $ins .= ",'".$this->_pv_ciud."'";
        $ins .= ",'".$this->_pv_email."'";
        $ins .= ",'".$this->_pv_norete."'";
        $ins .= ",'".$this->_pv_grancon."'";
        $ins .= ",'".$this->_pv_rteiva."'";
        $ins .= ",'".$this->_pv_plazo."'";

        $query = 'INSERT INTO proveedores_temp (pv_nit,pv_dv,pv_ciiu,pv_razon,pv_tel,pv_otro,
                  pv_cont,pv_dir,pv_ciud,pv_email,pv_norete,pv_grancon,pv_rteiva,pv_plazo) VALUES ('.$ins.')';  
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }
    public function InfoPvires(){
        $query = 'SELECT * FROM proveedores_temp WHERE pv_id='.$this->_pv_id;
            $this->_db->Query($query);
            return $this->_db->RowFetchArray();
    }
   
    public function ListarClientes($orden = 'ASC'){
        $query = 'SELECT * '
                . 'FROM clientes '
                . 'LEFT JOIN (SELECT r1.cli_id, SUM(r1.valor) AS cartera FROM remision r1 WHERE estado!="Finalizado" GROUP BY cli_id) AS dat ON dat.cli_id = nitcc '
                . 'WHERE vendedor = "'.$this->_pv_dv.'"';
        
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
   
    public function ListarClientesTodos($orden = 'ASC'){
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
            proveedores
            WHERE pv_nit='".$this->_pv_nit."'";
        error_log($query);
         $this->_db->Query($query);
         return $this->_db->RowFetchArray();
    }
    
    public function RegistrarProveedor(/*$valorKl*/){
        $ins = "'".$this->_pv_nit."'";
        $ins .= ",'".$this->_pv_dv."'";
        $ins .= ",'".$this->_pv_ciiu."'";
        $ins .= ",'".$this->_pv_razon."'";
        $ins .= ",'".$this->_pv_tel."'";
        $ins .= ",'".$this->_pv_otro."'";
        $ins .= ",'".$this->_pv_cont."'";
        $ins .= ",'".$this->_pv_dir."'";
        $ins .= ",'".$this->_pv_ciud."'";
        $ins .= ",'".$this->_pv_email."'";
        $ins .= ",'".$this->_pv_norete."'";
        $ins .= ",'".$this->_pv_grancon."'";
        $ins .= ",'".$this->_pv_rteiva."'";
        $ins .= ",'".$this->_pv_plazo."'";
        $ins .= ",'".$this->_pv_creo."'";

        /*if($this->_fecha_entrega != "" ){
            $ins .= ",'".$this->_fecha_entrega."'";
        }else{
            $ins .= ",NULL";
        }*/
        $query = 'INSERT INTO proveedores_temp (pv_nit,pv_dv,pv_ciiu,pv_razon,pv_tel,pv_otro,
                  pv_cont,pv_dir,pv_ciud,pv_email,pv_norete,pv_grancon,pv_rteiva,pv_plazo,pv_creo) VALUES ('.$ins.')';  
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }

  
    public function ModificarProveedor(){
        $upd = "pv_nit = '".$this->_pv_nit."'";
        $upd .= ",pv_dv = '".$this->_pv_dv."'";
        $upd .= ",pv_ciiu = '".$this->_pv_ciiu."'";
        $upd .= ",pv_razon = '".$this->_pv_razon."'";
        $upd .= ",pv_tel = '".$this->_pv_tel."'";
        $upd .= ",pv_otro = '".$this->_pv_otro."'";
        $upd .= ",pv_cont = '".$this->_pv_cont."'";
        $upd .= ",pv_dir = '".$this->_pv_dir."'";
        $upd .= ",pv_ciud = '".$this->_pv_ciud."'";
        $upd .= ",pv_email = '".$this->_pv_email."'"; 
        $upd .= ",pv_norete = '".$this->_pv_norete."'"; 
        $upd .= ",pv_grancon = '".$this->_pv_grancon."'"; 
        $upd .= ",pv_rteiva = '".$this->_pv_rteiva."'"; 
        $upd .= ",pv_plazo = '".$this->_pv_plazo."'";
        $upd .= ",pv_fecha_mod = '".$this->_pv_fecha_mod."'";
        $upd .= ",pv_mod = '".$this->_pv_mod."'"; 
        $query = 'UPDATE proveedores SET '.$upd.' WHERE pv_id='.$this->_pv_id;
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{ 
            return false;
        }
    }
        public function BuscaraUsuario($tipo, $dato){
        $query = 'SELECT * FROM usuarios WHERE '.$tipo.'='.$dato;      
        $this->_db->Query($query);
        $datos = array();
        while($resultado= $this->_db->FetchArray()){
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
    
    public function BorrarProveedor(){
        $query = 'DELETE FROM proveedores WHERE  pv_id='.$this->_pv_id;
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
                . 'WHERE nitcc='.$this->_pv_nit;
        $this->_db->Query($query);
        return $this->_db->RowFetchArray();
    }
    
    public function InfoClientes(){
        $query = 'SELECT * FROM clientes WHERE cl_nit='.$this->_pv_nit;
        $this->_db->Query($query);
        return $this->_db->RowFetchArray();
    }
    public function InfoProveedor(){
        $query = 'SELECT * FROM proveedores WHERE pv_nit='.$this->_pv_nit;
        $this->_db->Query($query);
        return $this->_db->RowFetchArray();
    }

    public function InfoUsuarios(){
        $query = 'SELECT * FROM usuarios WHERE nitcc='.$this->_pv_nit;
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

    
    function get_pv_id() {
        return $this->_pv_id;
    }
    
    function get_pv_nit() {
        return $this->_pv_nit;
    }

    function get_pv_razon() {
        return $this->_pv_razon;
    }

    function get_pv_dv() {
        return $this->_pv_dv;
    }

    function get_pv_ciiu() {
        return $this->_pv_ciiu;
    }

    function get_pv_ciud() {
        return $this->_pv_ciud;
    }

    function get_pv_dir() {
        return $this->_pv_dir;
    }

    function get_pv_tel() {
        return $this->_pv_tel;
    }

    function get_pv_otro() {
        return $this->_pv_otro;
    }

    function get_pv_cont() {
        return $this->_pv_cont;
    }

    function get_pv_email() {
        return $this->_pv_email;
    }

    function get_pv_norete() {
        return $this->_pv_norete;
    }

    function get_pv_grancon() {
        return $this->_pv_grancon;
    }

    function get_pv_rteiva() {
        return $this->_pv_rteiva;
    }

    function get_pv_plazo() {
        return $this->_pv_plazo;
    }

    

    function set_pv_id($_pv_id) {
        $this->_pv_id = $_pv_id;
    }

    function set_pv_nit($_pv_nit) {
        $this->_pv_nit = $_pv_nit;
    }

    function set_pv_dv($_pv_dv) {
        $this->_pv_dv = $_pv_dv;
    }

    function set_pv_ciiu($_pv_ciiu) {
        $this->_pv_ciiu = $_pv_ciiu;
    }
    
    function set_pv_razon($_pv_razon) {
        $this->_pv_razon = $_pv_razon;
    }

    function set_pv_tel($_pv_tel) {
        $this->_pv_tel = $_pv_tel;
    }

    function set_pv_otro($_pv_otro) {
        $this->_pv_otro = $_pv_otro;
    }

    function set_pv_cont($_pv_cont) {
        $this->_pv_cont = $_pv_cont;
    }
    
    function set_pv_dir($_pv_dir) {
        $this->_pv_dir = $_pv_dir;
    }

    function set_pv_ciud($_pv_ciud) {
        $this->_pv_ciud = $_pv_ciud;
    }

    function set_pv_email($_pv_email) {
        $this->_pv_email = $_pv_email;
    }

    function set_pv_norete($_pv_norete) {
        $this->_pv_norete = $_pv_norete;
    }

    function set_pv_grancon($_pv_grancon) {
        $this->_pv_grancon = $_pv_grancon;
    }

    function set_pv_rteiva($_pv_rteiva) {
        $this->_pv_rteiva = $_pv_rteiva;
    }

    function set_pv_plazo($_pv_plazo) {
        $this->_pv_plazo = $_pv_plazo;
    }

    function get_pv_creo() {
        return $this->_pv_creo;
    }

    function set_pv_creo($_pv_creo) {
        $this->_pv_creo = $_pv_creo;
    }
    function get_pv_fecha_mod() {
        return $this->_pv_fecha_mod;
    }

    function set_pv_fecha_mod($_pv_fecha_mod) {
        $this->_pv_fecha_mod = $_pv_fecha_mod;
    }
    function get_pv_mod() {
        return $this->_pv_mod;
    }

    function set_pv_mod($_pv_mod) {
        $this->_pv_mod = $_pv_mod;
    }

}

?>
