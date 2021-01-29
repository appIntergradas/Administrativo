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
class DAODetallefactu {
    protected $_cod_detalle_fact;
    protected $_cod_articulo;
    protected $_nom_articulo;
    protected $_valorve_articulo;
    protected $_canti_articulo;
    protected $_subtotal_articulo;
    protected $_num_fact;
    private $_obj_rol; 
    private $_db;
    public $_mxr;
    
    public function __construct() {
        $this->_db = new DB();    
    }
    
    
    public function InserDetallefact(){
        $ins = "'".$this->_cod_articulo."'";
        $ins .= ",'".$this->_nom_articulo."'";
        $ins .= ",'".$this->_valorve_articulo."'";
        $ins .= ",'".$this->_canti_articulo."'";
        $ins .= ",'".$this->_subtotal_articulo."'";
        $ins .= ",'".$this->_num_fact."'";
        $query = 'INSERT INTO detallefactura (cod_articulo,nom_articulo,valorve_articulo,canti_articulo,subtotal_articulo,
                  num_fact) VALUES ('.$ins.')';  
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }
    

       public function ModiDetallefact(){
        $upd = "canti_articulo = '".$this->_canti_articulo."'";
        $upd .= ",valorve_articulo = '".$this->_valorve_articulo."'";
        $upd .= ",subtotal_articulo = '".$this->_subtotal_articulo."'";
        $query = 'UPDATE detallefactura SET '.$upd.' WHERE cod_articulo='.$this->_cod_articulo.' AND num_fact='.$this->_num_fact;
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }

    public function Buscarcodart(){
        $query = 'SELECT * FROM detallefactura WHERE cod_articulo='.$this->_cod_articulo;
        error_log($query);
         $this->_db->Query($query);
         $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
            $rows[] = $row;
        }
        return $rows;
    }




    

    public function Infodetalle(){
        $query = 'SELECT * FROM detallefactura WHERE cod_articulo='.$this->_cod_articulo.' AND num_fact='.$this->_num_fact;
        $this->_db->Query($query);
        return $this->_db->RowFetchArray();
    }


   
    public function InfoDetafact(){
        $query = 'SELECT * '
        . 'FROM  detallefactura '
        . 'WHERE num_fact='.$this->_num_fact;
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
            $rows[] = $row;
        }
        return $rows;
        
    }

    public function AsignarNofactura(){
        $query = 'SELECT MAX(num_enca_fact) FROM  encabezadofactura';
        $this->_db->Query($query);
        return $this->_db->RowFetchArray();
        
    }

    public function ConsulUltfacturas(){
        $query = 'SELECT * FROM  encabezadofactura';
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
            $rows[] = $row;
        }
        return $rows;
        
    }

    public function ModArtdetallefat(){
        $upd = "canti_articulo = '".$this->_canti_articulo."'";
        $upd .= ",valorve_articulo = '".$this->_valorve_articulo."'";
        $query = 'UPDATE detallefactura SET '.$upd.' WHERE cod_articulo='.$this->_cod_articulo;
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }






    public function AddEncafact(){
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

    
    function get_cod_articulo() {
        return $this->_cod_articulo;
    }
    function get_nom_articulo() {
        return $this->_nom_articulo;
    }
    function get_valorve_articulo() {
        return $this->_valorve_articulo;
    }
    function get_canti_articulo() {
        return $this->_canti_articulo;
    }
    function get_subtotal_articulo() {
        return $this->_subtotal_articulo;
    }
    function get_num_fact() {
        return $this->_num_fact;
    }
    
    
    

   

    function set_cod_articulo($_cod_articulo) {
        $this->_cod_articulo = $_cod_articulo;
    }
    function set_nom_articulo($_nom_articulo) {
        $this->_nom_articulo = $_nom_articulo;
    }
    function set_valorve_articulo($_valorve_articulo) {
        $this->_valorve_articulo = $_valorve_articulo;
    }
    function set_canti_articulo($_canti_articulo) {
        $this->_canti_articulo = $_canti_articulo;
    }
    function set_subtotal_articulo($_subtotal_articulo) {
        $this->_subtotal_articulo = $_subtotal_articulo;
    }
    function set_num_fact($_num_fact) {
        $this->_num_fact = $_num_fact;
    }
    
   
    
    


}

?>
