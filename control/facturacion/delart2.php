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
include_once '../../model/dao/DAOArticulos_temp.php';
include_once '../../model/business/Articulos_temp.php';
include_once '../../model/dao/DAODetallefactu_temp.php';
include_once '../../model/business/Detallefactu_temp.php';

session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();




    $detatemp = new Detallefactutemp();
    $id='';
    $subtot=0;
    $subtotfinal=0;
    $info=array();
    if(isset($_POST['art_cod']) && isset($_POST['nu_fact']) ){
        $id=$_POST['art_cod'];
        $fact=$_POST['nu_fact'];
    }
    $detatemp-> set_cod_articulo($id);
    $detatemp-> set_num_fact($fact);
    $info=$detatemp->InfoArticulosdetalletemp();
    if(!empty($info)){
        $subtotart = $info[3] * $info[5]; 
        $subtotfinal=((int)$subtotfinal-(int)$subtotart);  
    }else{
        $subtotfinal = 0;
    }
    if($detatemp->BorrarDetallefact()){
        echo 4;
   }  else {
       echo 1;
   }

}else{
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/login.php');</script>";
}


?>