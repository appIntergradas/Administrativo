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
class DAORecibopagar_temp {
    protected $_num_factrb;
    protected $_concepto_factrb;
    protected $_valor_factrb;
    protected $_averias_factrb;
    protected $_descu_factrb;
    protected $_cance_factrb;
    protected $_flete_factrb;
    protected $_sobra_factrb;
    protected $_saldar_factrb;
    protected $_nom_vende_factrb;
    protected $_fechacrea_factrb;
    private $_obj_rol; 
    private $_db;
    public $_mxr;
    
    public function __construct() {
        $this->_db = new DB();    
    }
    
    public function ModiRecipago(){
        $upd = "num_factrb = '".$this->_num_factrb."'";
        $upd .= ",concepto_factrb = '".$this->_concepto_factrb."'";
        $upd .= ",valor_factrb = '".$this->_valor_factrb."'";
        $upd .= ",averias_factrb = '".$this->_averias_factrb."'";
        $upd .= ",descu_factrb = '".$this->_descu_factrb."'";
        $upd .= ",cance_factrb = '".$this->_cance_factrb."'";
        $upd .= ",flete_factrb = '".$this->_flete_factrb."'";
        $upd .= ",sobra_factrb = '".$this->_sobra_factrb."'";
        $upd .= ",saldar_factrb = '".$this->_saldar_factrb."'";
        $upd .= ",nom_vende_factrb = '".$this->_nom_vende_factrb."'";
        $query = "UPDATE reciboapagar_temp SET ".$upd." WHERE num_factrb='".$this->_num_factrb."'";
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }

    public function InserRecipago(){
        $ins = "'".$this->_num_factrb."'";
        $ins .= ",'".$this->_concepto_factrb."'";
        $ins .= ",'".$this->_valor_factrb."'";
        $ins .= ",'".$this->_averias_factrb."'";
        $ins .= ",'".$this->_descu_factrb."'";
        $ins .= ",'".$this->_cance_factrb."'";
        $ins .= ",'".$this->_flete_factrb."'";
        $ins .= ",'".$this->_sobra_factrb."'";
        $ins .= ",'".$this->_saldar_factrb."'";
        $ins .= ",'".$this->_nom_vende_factrb."'";
        $query = 'INSERT INTO reciboapagar_temp (num_factrb,concepto_factrb,valor_factrb,averias_factrb,descu_factrb,
                 cance_factrb,flete_factrb,sobra_factrb,saldar_factrb,nom_vende_factrb) VALUES ('.$ins.')';  
        $this->_db->Query($query);
        if($this->_db->FilasAfectadas()>0){
            return true;
        }else{
            return false;
        }
    }

    public function ListarRecipago(){
        $query = "SELECT * FROM reciboapagar_temp";
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
        $rows[] = $row;
        }
        return $rows;
    }
     
    public function VaciarRecipago(){
        $query= 'TRUNCATE reciboapagar_temp' ;
        $this->_db->Query($query);
            if($this->_db->FilasAfectadas()>0){
                return true;
            }else{
                return false;
            }
       }
    
       public function InfoRecipago(){
        $query = 'SELECT * FROM reciboapagar_temp WHERE num_factrb='.$this->_num_factrb;
        $this->_db->Query($query);
        return $this->_db->RowFetchArray();
    }

       public function DeleRecipago(){
        $query = 'DELETE FROM reciboapagar_temp WHERE num_factrb='.$this->_num_factrb;
        $this->_db->Query($query);
            if($this->_db->FilasAfectadas()>0){
                return true;
            }else{
                return false;
            }
        }



    
    
   
    

    function get_num_factrb() {
        return $this->_num_factrb;
    }
    function get_concepto_factrb() {
        return $this->_concepto_factrb;
    }
    function get_valor_factrb() {
        return $this->_valor_factrb;
    }
    function get_averias_factrb() {
        return $this->_averias_factrb;
    }
    function get_descu_factrb() {
        return $this->_descu_factrb;
    }
    function get_cance_factrb() {
        return $this->_cance_factrb;
    }
    function get_flete_factrb() {
        return $this->_flete_factrb;
    }
    function get_sobra_factrb() {
        return $this->_sobra_factrb;
    }
    function get_saldar_factrb() {
        return $this->_saldar_factrb;
    }
    function get_nom_vende_factrb() {
        return $this->_nom_vende_factrb;
    }
    function get_fechacrea_factrb() {
        return $this->_fechacrea_factrb;
    }
   
    
    
    function set_num_factrb($_num_factrb) {
        $this->_num_factrb = $_num_factrb;
    }
    function set_concepto_factrb($_concepto_factrb) {
        $this->_concepto_factrb = $_concepto_factrb;
    }
    function set_valor_factrb($_valor_factrb) {
        $this->_valor_factrb = $_valor_factrb;
    }
    function set_averias_factrb($_averias_factrb) {
        $this->_averias_factrb = $_averias_factrb;
    }
    function set_descu_factrb($_descu_factrb) {
        $this->_descu_factrb = $_descu_factrb;
    }
    function set_cance_factrb($_cance_factrb) {
        $this->_cance_factrb = $_cance_factrb;
    }
    function set_flete_factrb($_flete_factrb) {
        $this->_flete_factrb = $_flete_factrb;
    }
    function set_sobra_factrb($_sobra_factrb) {
        $this->_sobra_factrb = $_sobra_factrb;
    }
    function set_saldar_factrb($_saldar_factrb) {
        $this->_saldar_factrb = $_saldar_factrb;
    }
    function set_nom_vende_factrb($_nom_vende_factrb) {
        $this->_nom_vende_factrb = $_nom_vende_factrb;
    }
    function set_fechacrea_factrb($_fechacrea_factrb) {
        $this->_fechacrea_factrb = $_fechacrea_factrb;
    }
   
    
    


}

?>
