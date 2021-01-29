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
include_once '../../model/dao/DAOArticulos_temp3.php';
include_once '../../model/business/Articulos_temp3.php';
include_once '../../model/dao/DAOEncabezadocomp.php';
include_once '../../model/business/Encabezadocomp.php';
include_once '../../model/dao/DAODetallecomp.php';
include_once '../../model/business/Detallecomp.php';
include_once '../../model/dao/DAODetallecomp_temp.php';
include_once '../../model/business/Detallecomp_temp.php';

session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
    $co='';
    $arti = new Articulos();
    $enca=new Encabezadocomp();
    $detat = new Detallecomptemp();
    $deta = new Detallecomp();
    if(isset($_POST['nu_comp'])){
        $co=$_POST['nu_comp'];
       
       
        $detat->set_num_comp($co);
        $info6=$detat->InfoDetacomp();
            if(empty($info6)){//verifico que no este ocupada la compra
                $enca->set_num_enca_comp($co);
                if($enca->BorrarEncacomp()){//Borro la compra en el encabezado
                    $deta->set_num_comp($co);
                    $info7=$deta->InfoDetacomp();
                    foreach ($info7 as $key => $value4) {
                        //actualizo stock
                        $arti->set_art_id($value4['cod_articulo']);
                        $ca=$arti->InfoArticuloscant();
                        $cantnueva=$ca[0] - $value4['canti_articulo'];
                        $arti->set_art_cantidad($cantnueva);
                        $arti->Upcanart();
                        //Borro la compra del detalle compra
                       
                        $deta->set_num_comp($value4['num_comp']);
                        $deta->BorrarDetallecomp();
                    }
                    echo 4;
                }else{
                    echo 1;
                }
               
            }else {
                echo 2;
            }

    }else{
        echo 0;
    }
    
   
    

}else{
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/login.php');</script>";
}
?>