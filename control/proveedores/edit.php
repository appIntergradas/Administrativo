<?php
include_once '../../generic/Permisos.php';
include_once '../../generic/config/config.php';
include_once '../../generic/DB.php';
include_once '../../model/dao/DAORol.php';
include_once '../../model/dao/DAOModulosxRol.php';
include_once '../../model/dao/DAOUsuario.php';
include_once '../../model/business/Usuario.php';
include_once '../../model/dao/DAOProveedores.php';
include_once '../../model/business/Proveedores.php';
include_once '../../model/dao/DAOProveedores_temp.php';
include_once '../../model/business/Proveedores_temp.php';

session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();

    $prov=new Proveedores();
    $provt=new Proveedores_temp();
    date_default_timezone_set('America/Bogota');
    $fechaActual = date('d-m-Y H:i:s');
    
    if(isset($_POST['nit_pv']) && isset($_POST['razon_pv'])){
        
        $prov->set_pv_id($_POST['id_pv']);
        $prov->set_pv_nit($_POST['nit_pv']);
        $prov->set_pv_dv($_POST['dv_pv']);
        $prov->set_pv_ciiu($_POST['ciiu_pv']);
        $prov->set_pv_razon($_POST['razon_pv']);
        $prov->set_pv_tel($_POST['tel_pv']);
        $prov->set_pv_otro($_POST['otro_pv']);
        $prov->set_pv_cont($_POST['cont_pv']);
        $prov->set_pv_dir($_POST['dir_pv']);
        $prov->set_pv_ciud($_POST['ciud_pv']);
        $prov->set_pv_email($_POST['email_pv']);
        $prov->set_pv_norete($_POST['norete_pv']);
        $prov->set_pv_grancon($_POST['grancon_pv']);
        $prov->set_pv_rteiva($_POST['rteiva_pv']);
        $prov->set_pv_plazo($_POST['plazo_pv']);
        $prov->set_pv_fecha_mod($fechaActual);
        $prov->set_pv_mod($nameuser);
        if($prov->ValidarNit()){
           if(!empty($prov->ModificarProveedor())){
                    $provt->VaciarPvtemp();
                    echo 4;
                }else{
                    echo 1;
                }
        }else{
            echo 2;
        }    
    }else {
            echo 0;
    }


}  else {
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/index.php');</script>";
}


?>


