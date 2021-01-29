<?php
include_once '../../generic/Permisos.php';
include_once '../../generic/config/config.php';
include_once '../../generic/DB.php';
include_once '../../model/dao/DAORol.php';
include_once '../../model/dao/DAOModulosxRol.php';
include_once '../../model/dao/DAOUsuario.php';
include_once '../../model/business/Usuario.php';
include_once '../../model/dao/DAOArticulos.php';
include_once '../../model/business/Articulos.php';
include_once '../../model/dao/DAOArticulos_temp2.php';
include_once '../../model/business/Articulos_temp2.php';

session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
    $info2='';
    $art = new Articulos();
    $artt=new Articulos_temp2();
    $info=array();
    if(isset($_POST['buscar_art'])){
        $dato=$_POST['buscar_art'];
        $canti=0;
        //vaciamos temp
        $artt->Vaciarartemp2();
        
        $art->set_art_id($dato);
        $art->set_art_referencia($dato);
        $art->set_art_descripcion($dato);
        $info=$art->InfoArtbusqueda();
        
        
        if(!empty($info)){
            foreach ($info as $key => $value9) {
                //guardo articulos en temp2
                $artt->set_art_id($value9['art_id']);
                $artt->set_art_referencia($value9['art_referencia']);
                $artt->set_art_descripcion($value9['art_nom']);
                $artt->set_art_cantidad($value9['art_cantidad']);
                $artt->set_art_pcosto($value9['art_pcosto']);
                $artt->set_art_pventa($value9['art_pventa']);
                $artt->set_art_pventa2($value9['art_pventa2']);
                $artt->set_art_pventa3($value9['art_pventa3']);
                
                if(($artt->RegistrArt())==false){
                    echo 1;
                }
            } 
            $artt->set_art_cod(1);
            $info2=$artt->InfoArtres();//consulto el primer registro
           
            if(!empty($info2)){
                $canti=$info2[3];
               
                $json= array();
                $id=$info2[0]; 
                $ref=$info2[1]; 
                $des=$info2[2]; 
                $cant= number_format($canti, 2, '.', ','); 
                $pcosto=$info2[4]; 
                $pventa=$info2[5]; 
                $pventa2=$info2[6]; 
                $pventa3=$info2[7]; 
                $cod=$info2[9]; 
                
             
            $json = array('art_id'=>$id,'art_referencia'=>$ref,'art_nom'=>$des,'art_cantidad'=>$cant,'art_pcosto'=>$pcosto,'art_pventa'=>$pventa,'art_pventa2'=>$pventa2,'art_pventa3'=>$pventa3,'art_cod'=>$cod);
            header('Content-Type: application/json');
            $json_string = json_encode($json);
            echo $json_string;
            }else{
                echo 2;
            }
            
        }else{
            echo 1;
        }
    }else {
        echo 0;
    }


}  else {
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/index.php');</script>";
}


?>


