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
class DAOArticulos_temp2 {
    protected $_art_id;
    protected $_art_cod;
    protected $_art_acentamiento;
    protected $_art_descripcion;
    protected $_art_referencia;
    protected $_art_pcosto;
    protected $_identificacion_usu;
    protected $_art_cantidad;
    protected $_art_pventa;
    protected $_art_pventa2;
    protected $_art_pventa3;
    protected $_descripcion_bodega;
    protected $_linea;
    protected $_descripcion_linea;
    protected $_referencia;
    protected $_descripcion;
    protected $_saldo;
    protected $_marca;
    protected $_costo;
    protected $_observacion;
    protected $_diseno;
    protected $_u_medida;
    protected $_precio_compra;
    protected $_codigo;
    private $_obj_rol; 
    private $_db;
    public $_mxr;
    
    public function __construct() {
        $this->_db = new DB();    
    }
    public function Vaciarartemp2(){
        $query= 'TRUNCATE articulos_temp2' ;
        $this->_db->Query($query);
            if($this->_db->FilasAfectadas()>0){
                return true;
            }else{
                return false;
            }
       }
       public function RegistrArt(){
        $ins = "'".$this->_art_id."'";
        $ins .= ",'".$this->_art_descripcion."'";
        $ins .= ",'".$this->_art_referencia."'";
        $ins .= ",'".$this->_art_cantidad."'";
        $ins .= ",'".$this->_art_pcosto."'";
        $ins .= ",'".$this->_art_pventa."'";
        $ins .= ",'".$this->_art_pventa2."'";
        $ins .= ",'".$this->_art_pventa3."'";
        $query = 'INSERT INTO articulos_temp2 (art_id,art_nom,art_referencia,art_cantidad,art_pcosto,art_pventa,
                  art_pventa2,art_pventa3) VALUES ('.$ins.')';  
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    } 

    public function InfoArtres(){
        $query = 'SELECT * FROM articulos_temp2 WHERE art_cod='.$this->_art_cod;
            $this->_db->Query($query);
            return $this->_db->RowFetchArray();
    }
    public function Buscarartvend($orden = 'ASC'){
        $query = 'SELECT * '
                . 'FROM articulos_temp '
                . 'WHERE identificacion_usu='.$this->_identificacion_usu;
        
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
            $rows[] = $row;
        }
        return $rows;
    }


    public function ListarArticulosTodostemp($orden = 'ASC'){
        $query = 'SELECT * '
                . 'FROM articulos_temp '
                . 'WHERE identificacion_usu='.$this->_identificacion_usu;
        
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function InfoArticulostemp(){
        $query = 'SELECT * FROM articulos_temp WHERE art_id='.$this->_art_id;
        $this->_db->Query($query);
        return $this->_db->RowFetchArray();
    }

    public function AddArticulotemp(){
        $ins = "'".$this->_art_id."'";
        $ins .= ",'".$this->_art_referencia."'";
        $ins .= ",'".$this->_art_descripcion."'";
        $ins .= ",'".$this->_art_cantidad."'";
        $ins .= ",'".$this->_art_pcosto."'";
        $ins .= ",'".$this->_art_pventa."'";
        $ins .= ",'".$this->_art_acentamiento."'";
        $ins .= ",'".$this->_identificacion_usu."'";
        $query = 'INSERT INTO articulos_temp (art_id,art_referencia,art_nom,art_cantidad,art_pcosto,art_pventa,art_acentamiento,identificacion_usu) VALUES ('.$ins.')';  
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }

    public function BorrarArtemp(){
        $query = "DELETE FROM articulos_temp WHERE art_id='".$this->_art_id."'";
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }

    public function Delarttemp(){
        $query = "DELETE FROM articulos_temp WHERE identificacion_usu='".$this->_identificacion_usu."'";
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }

    public function ModArticulotemp(){
        $upd = "art_cantidad = '".$this->_art_cantidad."'";
        $upd .= ",art_pventa = '".$this->_art_pventa."'";
        $query = 'UPDATE articulos_temp SET '.$upd.' WHERE art_id='.$this->_art_id;
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }

    
    
    
    
    
    public function Modificar(){
        //$upd = "codigo = '".$this->_codigo."'";
        $upd = "descripcion = '".$this->_descripcion."'";
        $upd .= ",cat_id = '".$this->_cat_id."'";
        $upd .= ",u_medida = '".$this->_u_medida."'";
        $upd .= ",precio_compra = '".$this->_precio_compra."'";
        $upd .= ",saldo = '".$this->_saldo."'";
        $upd .= ",costo = '".$this->_costo."'";
        echo $query = "UPDATE productos SET ".$upd." WHERE codigo='".$this->_codigo."'";
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }
    
    public function Registrar(){
        $ins = "'".$this->_codigo."'";
        $ins .= ",'".$this->_descripcion."'";
        $ins .= ",'".$this->_cat_id."'";
        $ins .= ",'".$this->_u_medida."'";
        $ins .= ",'".$this->_precio_compra."'";
        $ins .= ",'".$this->_saldo."'";
        $ins .= ",'".$this->_costo."'";
        $query = 'INSERT INTO productos (codigo,descripcion,cat_id,u_medida,precio_compra,
                  saldo,costo) VALUES ('.$ins.')';  
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }
    
    public function ListarProductos($orden = 'ASC'){
        $query = 'SELECT * '
                . 'FROM clientes '
                . 'LEFT JOIN (SELECT r1.cli_id, SUM(r1.valor) AS cartera FROM remision r1 WHERE estado!="Finalizado" GROUP BY cli_id) AS dat ON dat.cli_id = nitcc '
                . 'WHERE vendedor = "'.$this->_vendedor.'"';
        
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function ListarProductosTodos($orden = 'ASC'){
        $query = 'SELECT * '
                . 'FROM productos '
                . 'LEFT JOIN categorias ON productos.cat_id = categorias.cat_id';
        
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
            $rows[] = $row;
        }
        return $rows;
    }  
   

    public function ListarFamilia($orden = 'ASC'){
        $query = "SELECT linea, UPPER(descripcion_linea) 
                    FROM productos 
                    GROUP BY descripcion_linea";
        
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
    
    public function ListarImagenes($val){
        $query = "SELECT cat_id, UPPER(categoria) as categoria 
                    FROM categorias 
                    WHERE UPPER(categoria) LIKE '%".strtoupper($val)."%' ORDER BY categoria";
        
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
    
    public function ListarImagenesTodas($orden = 'ASC'){
        $query = "SELECT cat_id, UPPER(categoria) as categoria 
                    FROM categorias ORDER BY categoria";
        
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
    
    public function ListarColores($data){ //LISTA PRODUCTOS POR CATEGORIA
        $query = "SELECT * FROM productos WHERE cat_id='".$this->_codigo."'".$data;
        
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
    
    public function Bodegas(){
        $query = 'SELECT descripcion_bodega FROM productos GROUP BY descripcion_bodega';
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
    
    public function Lineas(){
        $query = 'SELECT descripcion_linea FROM productos GROUP BY descripcion_linea';
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
    
    public function Marcas(){
        $query = 'SELECT marca FROM productos GROUP BY marca';
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
    
    public function InfoProductos(){
        $query = "SELECT *  
                FROM productos 
                WHERE codigo='".$this->_codigo."'";
        $this->_db->Query($query);
        return $this->_db->RowFetchArray();
    }

    public function Borrar(){
        $query = "DELETE FROM productos WHERE codigo='".$this->_codigo."'";
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }
    
    
    
    

    
    function get_art_id() {
        return $this->_art_id;
    }
    function get_art_cod() {
        return $this->_art_cod;
    }
    function get_art_cantidad() {
        return $this->_art_cantidad;
    }
    function get_art_pventa() {
        return $this->_art_pventa;
    }
    function get_art_pventa2() {
        return $this->_art_pventa2;
    }
    function get_art_pventa3() {
        return $this->_art_pventa3;
    }
    function get_art_acentamiento() {
        return $this->_art_acentamiento;
    }
    function get_art_descripcion() {
        return $this->_art_descripcion;
    }
    function get_art_referencia() {
        return $this->_art_referencia;
    }
    function get_art_pcosto() {
        return $this->_art_pcosto;
    }
    function get_identificacion_usu() {
        return $this->_identificacion_usu;
    }

   

    function set_art_id($_art_id) {
        $this->_art_id = $_art_id;
    }
    function set_art_cod($_art_cod) {
        $this->_art_cod = $_art_cod;
    }
    function set_art_cantidad($_art_cantidad) {
        $this->_art_cantidad = $_art_cantidad;
    }
    function set_art_pventa($_art_pventa) {
        $this->_art_pventa = $_art_pventa;
    }
    function set_art_pventa2($_art_pventa2) {
        $this->_art_pventa2 = $_art_pventa2;
    }
    function set_art_pventa3($_art_pventa3) {
        $this->_art_pventa3 = $_art_pventa3;
    }
    function set_art_acentamiento($_art_acentamiento) {
        $this->_art_acentamiento = $_art_acentamiento;
    }
    function set_art_descripcion($_art_descripcion) {
        $this->_art_descripcion = $_art_descripcion;
    }
    function set_art_referencia($_art_referencia) {
        $this->_art_referencia = $_art_referencia;
    }
    function set_art_pcosto($_art_pcosto) {
        $this->_art_pcosto = $_art_pcosto;
    }
    function set_identificacion_usu($_identificacion_usu) {
        $this->_identificacion_usu = $_identificacion_usu;
    }

    
    


}

?>
