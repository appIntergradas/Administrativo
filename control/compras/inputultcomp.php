<?php
include_once '../../generic/Permisos.php';
include_once '../../generic/config/config.php';
include_once '../../generic/DB.php';
include_once '../../model/dao/DAORol.php';
include_once '../../model/dao/DAOModulosxRol.php';
include_once '../../model/dao/DAOUsuario.php';
include_once '../../model/business/Usuario.php';
include_once '../../model/dao/DAOEncabezadocomp.php';
include_once '../../model/business/Encabezadocomp.php';
session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
$enca = new Encabezadocomp();
$bitComp ='';
$ultcomp=$enca->ConsulUltcompras();//consultamos facturas para listar
    foreach ($ultcomp as $key => $value2) {
        $bitComp.='<option value="'.$value2['num_enca_comp'].'-'.$value2['nom_enca_cl'].'"></option>';
    }

echo $bitComp; 

}else{
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/index.php');</script>";
}
?>