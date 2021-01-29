<?php
/**
 * Description of Permisos
 *
 * @author aquirozr
 */
class Permisos {
    public function Autorizar($perm = array(), $mod_codigo){
        $band = 0;
        foreach ($perm as $llave=>$valor){
            if($valor == $mod_codigo){
                $band = 1;
            }
        }
        if($band == 1)
        {
            return true;
        }else{
            return false;
        }
    }
}
?>
