<?php
/**
 * Description of DAOModulo
 *
 * @author aquirozr
 */
class DAOModulo {
    protected $_mod_codigo;
    protected $_mod_nombre;
    protected $_mod_url;
    protected $_mod_estado;
    protected $_mod_codigo_padre;
    private $_tree;
    private $_db;
    
    public function __construct() {
        $this->_db = new DB();
    }
    
    public function ListarModulos($ord = 'ASC'){
        $query = '  SELECT
                    mod_codigo,
                    mod_nombre,
                    mod_url,
                    mod_estado,
                    mod_codigo_padre
                    FROM
                    modulo
                    WHERE mod_estado=1';
        $this->_db->Query($query);
        
        $modulos = array();
        while($resultado = $this->_db->FetchArray()){
            $modulos[] = array(
                'codigo'=>$resultado['mod_codigo'],
                'nombre'=>$resultado['mod_nombre'],
                'url'=>$resultado['mod_url'],
                'estado'=>$resultado['mod_estado'],
                'padre'=>$resultado['mod_codigo_padre']
            );
        }
        return $modulos;
    }
    
    public function ListarMenu($ord='ASC'){
        $this->_tree = '<UL class="nav">';
        foreach($this->ListarModulos('ASC') as $llave=>$valor){
            if($valor['codigo']==$valor['padre']){
                $this->_tree .= '<LI class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">'.$valor['nombre'].'</a>';
                $this->ListarHijos($valor['codigo']);
                $this->_tree .= '</LI>';
            }
        }
        $this->_tree .= '</UL>';
        return $this->_tree;
    }
    
    public function ListarHijos($id){
        $this->_tree .= '<UL class="dropdown-menu">';
        foreach($this->ListarModulos('ASC') as $llave => $valor){
            if(($valor['padre']==$id) && ($valor['codigo']!=$valor['padre'])){
                $url = $valor['url'];
                $this->_tree .= '<LI><a href="'.$url.'">'.$valor['nombre'].'</a>';					
                $this->ListarHijos($valor['codigo']);
                $this->_tree .= '</LI>';
            }
        }
        $this->_tree .= '</UL>';
        return $this->_tree;
    }
    
    public function get_mod_codigo() {
        return $this->_mod_codigo;
    }

    public function set_mod_codigo($_mod_codigo) {
        $this->_mod_codigo = $_mod_codigo;
    }

    public function get_mod_nombre() {
        return $this->_mod_nombre;
    }

    public function set_mod_nombre($_mod_nombre) {
        $this->_mod_nombre = $_mod_nombre;
    }

    public function get_mod_url() {
        return $this->_mod_url;
    }

    public function set_mod_url($_mod_url) {
        $this->_mod_url = $_mod_url;
    }

    public function get_mod_estado() {
        return $this->_mod_estado;
    }

    public function set_mod_estado($_mod_estado) {
        $this->_mod_estado = $_mod_estado;
    }

    public function get_mod_codigo_padre() {
        return $this->_mod_codigo_padre;
    }

    public function set_mod_codigo_padre($_mod_codigo_padre) {
        $this->_mod_codigo_padre = $_mod_codigo_padre;
    }
}

?>
