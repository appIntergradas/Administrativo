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
class DAOCategorias {
    protected $_cat_id;
    protected $categoria;
    private $_obj_rol; 
    private $_db;
    public $_mxr;
    
    public function __construct() {
        $this->_db = new DB();    
    }
    
    public function ListarCategorias($orden = 'ASC'){
        $query = 'SELECT * '
                . 'FROM categorias '
                . 'WHERE cat_id = "'.$this->_cat_id.'"';
        
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
   
    public function ListarCategoriasTodos($orden = 'ASC'){
        $query = 'SELECT * '
                . 'FROM categorias ';
        
        $this->_db->Query($query);
        $rows = array();
        while ($row = $this->_db->FetchAssoc()) {
            $rows[] = $row;
        }
        return $rows;
    }  

    function set_cat_id($_cat_id) {
        $this->_cat_id = $_cat_id;
    }

    function set_categoria($_categoria) {
        $this->_categoria = $_categoria;
    }

    


}

?>
