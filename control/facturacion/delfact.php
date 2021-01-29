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
include_once '../../model/dao/DAOEncabezadofactu.php';
include_once '../../model/business/Encabezadofactu.php';
include_once '../../model/dao/DAODetallefactu.php';
include_once '../../model/business/Detallefactu.php';
include_once '../../model/dao/DAODetallefactu_temp.php';
include_once '../../model/business/Detallefactu_temp.php';

session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
    $fa='';
    $arti = new Articulos();
    $enca=new Encabezadofactu();
    $detat = new Detallefactutemp();
    $deta = new Detallefactu();
    if(isset($_POST['nu_fact'])){
        $fa=$_POST['nu_fact'];
       
       
        $detat->set_num_fact($fa);
        $info6=$detat->InfoDetafact();
            if(empty($info6)){//verifico que no este ocupada la factura
                $enca->set_num_enca_fact($fa);
                $enca->set_subtota_enca(0);
                $enca->set_total_enca(0);
                if($enca->ModiEncafactanul()){//Modifico la factuta en el encabezado
                    $deta->set_num_fact($fa);
                    $info7=$deta->InfoDetafact();
                    foreach ($info7 as $key => $value4) {
                        //actualizo stock
                        $arti->set_art_id($value4['cod_articulo']);
                        $ca=$arti->InfoArticuloscant();
                        $cantnueva=$ca[0]+ $value4['canti_articulo'];
                        $arti->set_art_cantidad($cantnueva);
                        $arti->Upcanart();
                        //modifico campos detalle factura
                        $deta->set_valorve_articulo(0);
                        $deta->set_canti_articulo(0);
                        $deta->set_subtotal_articulo(0);
                        $deta->set_num_fact($value4['num_fact']);
                        $deta->ModiDetallefact();
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