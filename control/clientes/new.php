<?php
include_once '../../generic/Permisos.php';
include_once '../../generic/config/config.php';
include_once '../../generic/DB.php';
include_once '../../model/dao/DAORol.php';
include_once '../../model/dao/DAOModulosxRol.php';
include_once '../../model/dao/DAOUsuario.php';
include_once '../../model/business/Usuario.php';
include_once '../../model/dao/DAOClientes.php';
include_once '../../model/business/Clientes.php';

session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();

    $usu=new Clientes();
    
    if(isset($_POST['nit_cl']) && isset($_POST['razon_cl'])){
        
        $usu->set_cl_nit($_POST['nit_cl']);
        $usu->set_cl_dv($_POST['dv_cl']);
        $usu->set_cl_ciiu($_POST['ciiu_cl']);
        $usu->set_cl_razon($_POST['razon_cl']);
        $usu->set_cl_tel($_POST['tel_cl']);
        $usu->set_cl_otro($_POST['otro_cl']);
        $usu->set_cl_cont($_POST['cont_cl']);
        $usu->set_cl_dir($_POST['dir_cl']);
        $usu->set_cl_ciud($_POST['ciud_cl']);
        $usu->set_cl_email($_POST['email_cl']);
        $usu->set_cl_norete($_POST['norete_cl']);
        $usu->set_cl_grancon($_POST['grancon_cl']);
        $usu->set_cl_rteiva($_POST['rteiva_cl']);
        $usu->set_cl_plazo($_POST['plazo_cl']);
        $usu->set_cl_creo($nameuser);
        
        if(!empty($usu->ValidarNit())){
            echo 1;
        }else{
            if($usu->RegistrarCliente()){
                echo 4;
            }  else {
                echo 0;
            }
        }
    }else {
        echo 0;
    }


}  else {
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/index.php');</script>";
}


?>


