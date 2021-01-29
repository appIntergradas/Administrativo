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

require_once '../../model/dao/DAORol.php';
require_once '../../model/business/Rol.php';
class DAOUsuario {
    protected $_usu_codigo;
    protected $_usu_identificacion;
    protected $_usu_nombre;
    protected $_usu_apellidos;
    protected $_usu_login;
    protected $_usu_passwd;
    protected $_rol_codigo;
    protected $_usu_estado;
    protected $_usu_mail;
    protected $_usu_creo;
    protected $_usu_mod;
    protected $_usu_fecha_mod;
    protected $_usu_permiso;
    protected $_permiso_anular;
    private $_obj_rol; 
    private $_db;
    public $_mxr;
    
    public function __construct() {
        $this->_db = new DB();    
        $this->_obj_rol = new Rol();
    }
    public function InfoExcUser(){
        $query = 'SELECT usu_identificacion,usu_nombre,usu_apellidos,usu_login,usu_mail '
                . 'FROM usuarios ';
        
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
            $rows[] = $row;
        }
        return $rows;
    }  
    public function InfoUsbusqueda(){
        $query = "SELECT * 
                    FROM usuarios
                    WHERE usu_identificacion LIKE '%".$this->_usu_identificacion."%' OR UPPER(usu_login) LIKE '%".strtoupper($this->_usu_login)."%'";
       
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
   
    public function ListarUsuariosTodos($orden = 'ASC'){
        $query = 'SELECT * '
                . 'FROM usuarios ';
        
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
            $rows[] = $row;
        }
        return $rows;
    }  
   
    public function ListarUsuarios($orden = 'ASC'){
        $query = 'SELECT * FROM usuarios';
        
        $this->_db->Query($query);
        $datos = array();
        while($resultado = $this->_db->FetchArray()){
            $datos[] = array(
                'codigo'=> $resultado['usu_codigo'],
                'identificacion' => $resultado['usu_identificacion'],
                'nombre' => $resultado['usu_nombre'],
                'login' => $resultado['usu_login'],
                'passwd'=> $resultado['usu_passwd'],
                'rol' => $resultado['rol_codigo'],
                'estado' => $resultado['usu_estado']
            );
        }
        return $datos;
    }
    
     public function ListarPermisos(){
        $query = 'SELECT *                
                FROM
                modulosxrol
                WHERE
                rol_codigo =  '.$this->_rol_codigo;
       
        $this->_db->Query($query);
        $modulos = array();
        while($resultado = $this->_db->FetchArray()){
            $modulos[] = $resultado['mod_codigo'];
        }
        return $modulos;         
    }
    
    public function ValidarLogin(){
        $query = "SELECT *                
            FROM
            usuarios
            WHERE usu_login='".$this->_usu_login."'";
        //error_log($query);
         $this->_db->Query($query);
         return $this->_db->RowFetchArray();
    }

    public function ValidarIdentificacion(){
        $query = "SELECT *                
            FROM
            usuarios
            WHERE usu_identificacion='".$this->_usu_identificacion."'";
        //error_log($query);
         $this->_db->Query($query);
         return $this->_db->RowFetchArray();
    }

    public function InfoRol($cod){
        $this->_obj_rol->InfoRol($cod);
        return $this->_obj_rol->get_rol_descripcion();
    }
   

    public function ModificarUsuario(){
        $upd = "usu_identificacion = '".$this->_usu_identificacion."'";
        $upd .= ",usu_nombre = '".$this->_usu_nombre."'";
        $upd .= ",usu_apellidos = '".$this->_usu_apellidos."'";
        $upd .= ",usu_login = '".$this->_usu_login."'";
        if($this->_usu_passwd != "d41d8cd98f00b204e9800998ecf8427e"){
            $upd .= ",usu_passwd = '".$this->_usu_passwd."'";
        }
        $upd .= ",rol_codigo = '".$this->_rol_codigo."'";
        $upd .= ",usu_estado = '".$this->_usu_estado."'";
        $upd .= ",usu_mail = '".$this->_usu_mail."'";
        $upd .= ",usu_fecha_mod = '".$this->_usu_fecha_mod."'";
        $upd .= ",usu_mod = '".$this->_usu_mod."'";
        $query = 'UPDATE usuarios SET '.$upd.' WHERE usu_codigo='.$this->_usu_codigo;
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }
    
    public function BorrarUsuario(){
        $query = 'DELETE FROM usuarios WHERE usu_identificacion='.$this->_usu_identificacion;
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }
    
    public function RegistrarUsuario(){
        $ins = "'".$this->_usu_identificacion."'";
        $ins .= ",'".$this->_usu_nombre."'";
        $ins .= ",'".$this->_usu_apellidos."'";
        $ins .= ",'".$this->_usu_login."'";
        $ins .= ",'".$this->_usu_passwd."'";
        $ins .= ",'".$this->_rol_codigo."'";
        $ins .= ",'".$this->_usu_estado."'";
        $ins .= ",'".$this->_usu_mail."'";
        $ins .= ",'".$this->_usu_creo."'";
        $ins .= ",'".$this->_permiso_anular."'";
        
        $query = 'INSERT INTO usuarios (usu_identificacion,usu_nombre,
                  usu_apellidos,usu_login,usu_passwd,rol_codigo,
                  usu_estado,usu_mail,usu_creo,permiso_anular) VALUES ('.$ins.')';  
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }
    
    public function IniciarSesion(){
        $sql = "
            SELECT * 
            FROM 
            usuarios  
            WHERE 
            usu_login =  '".$this->_usu_login."' AND 
            usu_passwd = '".$this->_usu_passwd."'
        ";
        try {

        $this->_db->Query($sql);
        
        $resultado = $this->_db->FetchArray();
        
        $this->_usu_codigo = $resultado['usu_codigo'];
        $this->_usu_identificacion = $resultado['usu_identificacion'];
        $this->_usu_nombre = $resultado['usu_nombre'];
        $this->_usu_apellidos = $resultado['usu_apellidos'];
        $this->_usu_login = $resultado['usu_login'];
        $this->_usu_estado = $resultado['usu_estado'];
        $this->_rol_codigo = $resultado['rol_codigo'];
        $this->_usu_permiso = $resultado['permiso'];
        $this->_permisos = $this->ListarPermisos();
        session_start();
        $_SESSION['usuario'] = $this;
        
        if(isset($this->_usu_codigo)!=''){
            return true;
        }else{
            return false;
        }
        
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function BuscarUsuario($tipo, $dato){
        $query = 'SELECT * FROM usuarios WHERE '.$tipo.'='.$dato;
        
        $this->_db->Query($query);
        $datos = array();
        while($resultado = $this->_db->FetchArray()){
            $datos[] = array(
                'codigo'=> $resultado['usu_codigo'],
                'identificacion' => $resultado['usu_identificacion'],
                'nombre' => $resultado['usu_nombre'],
                'apellido' => $resultado['usu_apellidos'],
                'login' => $resultado['usu_login'],
                'fecnac' => $resultado['usu_fecnac']
            );
        }
        return $datos;
    }
    
    public function InfoUsuarios(){
        $query = "SELECT * FROM usuarios WHERE usu_login='".$this->_usu_login."'";
        $this->_db->Query($query);
        return $this->_db->RowFetchArray();
    } 

    public function Permisoanulusu(){
        $query = "SELECT permiso_anular FROM usuarios WHERE usu_identificacion='".$this->_usu_identificacion."'";
        $this->_db->Query($query);
        return $this->_db->RowFetchArray();
    }   
        
    
    public function passAdmin(){
        $upd = "usu_login = '".$this->_usu_login."'";
        $upd .= ",usu_passwd = '".$this->_usu_passwd."'";
        $query="UPDATE usuarios SET '.$upd.' WHERE usu_codigo=1";
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
        $query="UPDATE usuarios SET '.$upd.' WHERE usu_codigo=2";
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }
    
    public function loginAdminInfo(){
        $query="SELECT usu_login,usu_passwd FROM usuarios WHERE usu_codigo=1";
        $this->_db->Query($query);
        return $this->_db->RowFetchArray();
    }
    
    public function loginEmpleadoInfo(){
        $query="SELECT usu_login,usu_passwd FROM usuarios WHERE usu_codigo=2";
        $this->_db->Query($query);
        return $this->_db->RowFetchArray();
    }

    
    public function get_usu_codigo() {
        return $this->_usu_codigo;
    }

    public function set_usu_codigo($_usu_codigo) {
        $this->_usu_codigo = $_usu_codigo;
    }

    public function get_usu_identificacion() {
        return $this->_usu_identificacion;
    }

    public function set_usu_identificacion($_usu_identificacion) {
        $this->_usu_identificacion = $_usu_identificacion;
    }

    public function get_permisos() {
        return $this->_permisos;
    }

    public function set_permisos($_permisos) {
        $this->_permisos = $_permisos;
    }

    public function get_usu_nombre() {
        return $this->_usu_nombre;
    }

    public function set_usu_nombre($_usu_nombre) {
        $this->_usu_nombre = $_usu_nombre;
    }

    public function get_usu_apellidos() {
        return $this->_usu_apellidos;
    }

    public function set_usu_apellidos($_usu_apellidos) {
        $this->_usu_apellidos = $_usu_apellidos;
    }

    public function get_usu_login() {
        return $this->_usu_login;
    }

    public function set_usu_login($_usu_login) {
        $this->_usu_login = $_usu_login;
    }

    public function get_usu_passwd() {
        return $this->_usu_passwd;
    }

    public function set_usu_passwd($_usu_passwd) {
        $this->_usu_passwd = $_usu_passwd;
        //$this->_usu_passwd = md5($_usu_passwd);
    }

    public function get_rol_codigo() {
        return $this->_rol_codigo;
    }

    public function set_rol_codigo($_rol_codigo) {
        $this->_rol_codigo= $_rol_codigo;
    }

    public function get_usu_estado() {
        return $this->_usu_estado;
    }

    public function set_usu_estado($_usu_estado) {
        $this->_usu_estado = $_usu_estado;
    }

    public function get_usu_mail() {
        return $this->_usu_mail;
    }

    public function set_usu_mail($_usu_mail) {
        $this->_usu_mail = $_usu_mail;
    }

    public function get_usu_creo() {
        return $this->_usu_creo;
    }

    public function set_usu_creo($_usu_creo) {
        $this->_usu_creo = $_usu_creo;
    }

    public function get_usu_fecha_mod() {
        return $this->_usu_fecha_mod;
    }

    public function set_usu_fecha_mod($_usu_fecha_mod) {
        $this->_usu_fecha_mod = $_usu_fecha_mod;
    }

    public function get_usu_mod() {
        return $this->_usu_fecha_mod;
    }

    public function set_usu_mod($_usu_mod) {
        $this->_usu_mod = $_usu_mod;
    }
    
    function get_usu_permiso() {
        return $this->_usu_permiso;
    }

    function set_usu_permiso($_usu_permiso) {
        $this->_usu_permiso = $_usu_permiso;
    }

    function set_permiso_anular($_permiso_anular) {
        $this->_permiso_anular = $_permiso_anular;
    }
    function get_permiso_anular() {
        return $this->_permiso_anular;
    }

}

?>
