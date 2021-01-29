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
class DAOEncabezadocomp {
    protected $_cod_enca_comp;
    protected $_nit_enca_cl;
    protected $_nom_enca_cl;
    protected $_fecha_enca_comp;
    protected $_nom_enca_vendedor;
    protected $_num_enca_comp;
    protected $_subtota_enca;
    protected $_total_enca;
    protected $_forma_pago;
    private $_obj_rol; 
    private $_db;
    public $_mxr;
    
    public function __construct() {
        $this->_db = new DB();    
    }
    public function BorrarEncacomp(){
        $query = 'DELETE FROM encabezadocompra WHERE num_enca_comp='.$this->_num_enca_comp;
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }
    public function InfoEncacomp(){
        $query = 'SELECT * FROM encabezadocompra WHERE num_enca_comp='.$this->_num_enca_comp;
        $this->_db->Query($query);
        return $this->_db->RowFetchArray();
        
    }
    
    public function Infodetalle(){
        $query = 'SELECT * FROM detallecompra WHERE cod_articulo='.$this->_cod_articulo.' AND num_comp='.$this->_num_comp;
        $this->_db->Query($query);
        return $this->_db->RowFetchArray();
    }

    public function InserEncacomp(){
        $ins = "'".$this->_nit_enca_cl."'";
        $ins .= ",'".$this->_nom_enca_cl."'";
        $ins .= ",'".$this->_fecha_enca_comp."'";
        $ins .= ",'".$this->_nom_enca_vendedor."'";
        $ins .= ",'".$this->_num_enca_comp."'";
        $ins .= ",'".$this->_subtota_enca."'";
        $ins .= ",'".$this->_total_enca."'";
        $ins .= ",'".$this->_forma_pago."'";
        $query = 'INSERT INTO encabezadocompra (nit_enca_cl,nom_enca_cl,fecha_enca_comp,nom_enca_vendedor,num_enca_comp,
                  subtota_enca,total_enca,forma_pago) VALUES ('.$ins.')';  
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }
    
    public function ModiEncacompanul(){
        $upd = "subtota_enca = '".$this->_subtota_enca."'";
        $upd .= ",total_enca = '".$this->_total_enca."'";
        $query = "UPDATE encabezadocompra SET ".$upd." WHERE num_enca_comp='".$this->_num_enca_comp."'";
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }
     
    public function AddEncacomp(){
        $upd = "art_cantidad = '".$this->_art_cantidad."'";
        $upd .= ",art_pventa = '".$this->_art_pventa."'";
        $upd .= ",art_acentamiento = 1";
        $query = "UPDATE articulos SET ".$upd." WHERE art_id='".$this->_art_id."'";
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }

    public function ModiEncacomp(){
        //$upd = "codigo = '".$this->_codigo."'";
        $upd = "nit_enca_cl = '".$this->_nit_enca_cl."'";
        $upd .= ",nom_enca_cl = '".$this->_nom_enca_cl."'";
        $upd .= ",fecha_enca_comp = '".$this->_fecha_enca_comp."'";
        $upd .= ",nom_enca_vendedor = '".$this->_nom_enca_vendedor."'";
        $upd .= ",subtota_enca = '".$this->_subtota_enca."'";
        $upd .= ",total_enca = '".$this->_total_enca."'";
        $query = "UPDATE encabezadocompra SET ".$upd." WHERE num_enca_comp='".$this->_num_enca_comp."'";
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }
    public function Buscarnit(){
        $query = "SELECT *                
            FROM
            encabezadocompra
            WHERE nit_enca_cl='".$this->_nit_enca_cl."'";
        error_log($query);
         $this->_db->Query($query);
         return $this->_db->RowFetchArray();
    }

    public function AsignarNocompra(){
        $query = 'SELECT MAX(num_enca_comp) FROM  encabezadocompra';
        $this->_db->Query($query);
        return $this->_db->RowFetchArray();
        
    }

    public function Consulcompras(){
        $query = "SELECT * FROM encabezadocompra";
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
        $rows[] = $row;
        }
        return $rows;
    }

    public function ConsulUltcompras(){
        $query = 'SELECT * FROM  encabezadocompra  ORDER BY cod_enca_comp DESC LIMIT 5';
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
            $rows[] = $row;
        }
        return $rows;
        
    }


    public function ListarArticulosTodos($orden = 'ASC'){
        $query = 'SELECT * '
                . 'FROM articulos '
                . 'WHERE art_acentamiento=1';
        
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function ListarArticulosTodosbs($orden = 'ASC'){
        $query = 'SELECT * '
                . 'FROM articulos '
                . 'WHERE art_acentamiento=0';
        
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

    
    

   

    public function BorrarArt(){
        $upd = "art_acentamiento = 0";
        $query = "UPDATE articulos SET ".$upd." WHERE art_id='".$this->_art_id."'";
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

    
    function get_num_enca_comp() {
        return $this->_num_enca_comp;
    }
    function get_nit_enca_cl() {
        return $this->_nit_enca_cl;
    }
    function get_nom_enca_cl() {
        return $this->_nom_enca_cl;
    }
    function get_fecha_enca_comp() {
        return $this->_fecha_enca_comp;
    }
    function get_nom_enca_vendedor() {
        return $this->_nom_enca_vendedor;
    }
    function get_subtota_enca() {
        return $this->_subtota_enca;
    }
    function get_total_enca() {
        return $this->_total_enca;
    }
    function get_forma_pago() {
        return $this->_forma_pago;
    }
    
    

   

    function set_num_enca_comp($_num_enca_comp) {
        $this->_num_enca_comp = $_num_enca_comp;
    }
    function set_nit_enca_cl($_nit_enca_cl) {
        $this->_nit_enca_cl = $_nit_enca_cl;
    }
    function set_nom_enca_cl($_nom_enca_cl) {
        $this->_nom_enca_cl = $_nom_enca_cl;
    }
    function set_fecha_enca_comp($_fecha_enca_comp) {
        $this->_fecha_enca_comp = $_fecha_enca_comp;
    }
    function set_nom_enca_vendedor($_nom_enca_vendedor) {
        $this->_nom_enca_vendedor = $_nom_enca_vendedor;
    }
    function set_subtota_enca($_subtota_enca) {
        $this->_subtota_enca = $_subtota_enca;
    }
    function set_total_enca($_total_enca) {
        $this->_total_enca = $_total_enca;
    }
    function set_forma_pago($_forma_pago) {
        $this->_forma_pago = $_forma_pago;
    }
   
    
    


}

?>
