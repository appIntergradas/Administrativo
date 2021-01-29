<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DAOModulosxRol
 *
 * @author aquirozr
 */
class DAOModulosxRol {
    protected $_mxr_codigo;
    protected $_mod_codigo;
    protected $_rol_codigo;
    private $_db;
    
    public function DAOModulosxRol() {
        //$this->_db = new DB();
    }
    
    public function ListarPermisosxRol($rol){
        $sql = "
                SELECT
                tbl_modulosxrol.mxr_codigo,
                tbl_modulosxrol.mod_codigo,
                tbl_modulosxrol.rol_codigo
                FROM
                tbl_modulosxrol
                WHERE
                tbl_modulosxrol.rol_codigo =  '".$rol."'";
        
        $this->_db->Query($sql);
        $modulos = array();
        while($resulatdo = $this->_db->FetchArray()){
            $modulos[] = $resultado['mod_codigo'];
        }
        return $modulos;
    }
    
    public function get_mxr_codigo() {
        return $this->_mxr_codigo;
    }

    public function set_mxr_codigo($_mxr_codigo) {
        $this->_mxr_codigo = $_mxr_codigo;
    }

    public function get_mod_codigo() {
        return $this->_mod_codigo;
    }

    public function set_mod_codigo($_mod_codigo) {
        $this->_mod_codigo = $_mod_codigo;
    }

    public function get_rol_codigo() {
        return $this->_rol_codigo;
    }

    public function set_rol_codigo($_rol_codigo) {
        $this->_rol_codigo = $_rol_codigo;
    }    
}

?>
