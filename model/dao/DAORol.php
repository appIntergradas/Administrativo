<?php
/**
 * Description of DAORol
 *
 * @author aquirozr
 */
class DAORol {
    protected $_rol_codigo;
    protected $_rol_descripcion;
    protected $_rol_estado;
    private $_db;
       
    public function __construct() {
        $this->_db = new DB();        
    }
    
    public function ListarRoles($ord = 'ASC'){
        $query = 'SELECT
                rol_codigo,
                rol_descripcion,
                rol_estado
                FROM
                rol
                ORDER BY
                rol_descripcion '.$ord;
        
        $this->_db->Query($query);
        $bit = array();
        while($resultado = $this->_db->FetchArray()){
            $bit[] = array(
                'codigo'=>$resultado['rol_codigo'],
                'desc'=>$resultado['rol_descripcion'],
                'estado'=>$resultado['rol_estado']
            );
        }
        return $bit;
    }
    
    public function MostrarRol($codigo=1){
        $sql = "SELECT
                rol_codigo,
                rol_descripcion,
                rol_estado
                FROM
                rol
                WHERE
                rol_codigo =  ".$codigo;
                
        $this->_db->Query($sql);
        
        $resultado = $this->_db->FetchArray();
        
        $this->_rol_codigo = $resultado['rol_codigo'];
        $this->_rol_descripcion = $resultado['rol_descripcion'];
        $this->_rol_estado = $resultado['rol_estado'];
        
        if($resultado != null){
            return true;
        }else{
            return false;
        }
    }
    
    public function get_rol_codigo() {
        return $this->_rol_codigo;
    }

    public function set_rol_codigo($_rol_codigo) {
        $this->_rol_codigo = $_rol_codigo;
    }

    public function get_rol_descripcion() {
        return $this->_rol_descripcion;
    }

    public function set_rol_descripcion($_rol_descripcion) {
        $this->_rol_descripcion = $_rol_descripcion;
    }

    public function get_rol_estado() {
        return $this->_rol_estado;
    }

    public function set_rol_estado($_rol_estado) {
        $this->_rol_estado = $_rol_estado;
    }
}

?>
