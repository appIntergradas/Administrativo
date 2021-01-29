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
    $daton=0;
    $info4="";
    $art=new Articulos();
    $artt=new Articulos_temp2();
    $info=array();

    if(empty($_POST['buscar_art']) && empty($_POST['cod_art'])){
        $artt->Vaciarartemp2();//vacimos tabla temporal
        $info=$art->ListarArticulosTodos();//consulto todos los articulos
            if(!empty($info)){// verifico que no este vacia la tabla de articulos
                foreach ($info as $key => $value7) {//guardo los articulos en temporal
                    $artt->set_art_id($value7['art_id']);
                    $artt->set_art_descripcion($value7['art_nom']);
                    $artt->set_art_referencia($value7['art_referencia']);
                    $artt->set_art_cantidad($value7['art_cantidad']);
                    $artt->set_art_pcosto($value7['art_pcosto']);
                    $artt->set_art_pventa($value7['art_pventa']);
                    $artt->set_art_pventa2($value7['art_pventa2']);
                    $artt->set_art_pventa3($value7['art_pventa3']);
                    $artt->RegistrArt();
                    $dato=0;
                }
            }else{
               echo 1;
            }
    }else{
        $dato=$_POST['cod_art'];
    }
    
              $daton=$dato+1;  
              $artt->set_art_cod($daton); 
              $info4=$artt->InfoArtres();//consulto el registro
                
        
            if(!empty($info4)){
                    $json= array();
                    $id=$info4[0]; 
                    $ref=$info4[1]; 
                    $des=$info4[2]; 
                    $cant=$info4[3]; 
                    $pcosto=$info4[4]; 
                    $pventa=$info4[5]; 
                    $pventa2=$info4[6]; 
                    $pventa3=$info4[7]; 
                    $cod=$info4[9]; 

                    
            $json = array('art_id'=>$id,'art_referencia'=>$ref,'art_nom'=>$des,'art_cantidad'=>$cant,'art_pcosto'=>$pcosto,'art_pventa'=>$pventa,'art_pventa2'=>$pventa2,'art_pventa3'=>$pventa3,'art_cod'=>$cod);            
            header('Content-Type: application/json');
            $json_string = json_encode($json);
            echo $json_string;
            

                }else{
                    echo 2;
                }
              
   


}  else {
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/index.php');</script>";
}


?>  