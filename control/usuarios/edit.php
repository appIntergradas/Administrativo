<?php
include_once '../../generic/Permisos.php';
include_once '../../generic/config/config.php';
include_once '../../generic/DB.php';
include_once '../../model/dao/DAORol.php';
include_once '../../model/dao/DAOModulosxRol.php';
include_once '../../model/dao/DAOUsuario.php';
include_once '../../model/business/Usuario.php';
include_once '../../model/dao/DAOUsuario_temp.php';
include_once '../../model/business/Usuario_temp.php';

session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();

    $usu=new Usuario();
    $usut=new Usuario_temp();
    date_default_timezone_set('America/Bogota');
    $fechaActual = date('d-m-Y H:i:s');
    
    if(isset($_POST['cod_usu'])  && isset($_POST['nom_usu']) && isset($_POST['ape_usu']) && isset($_POST['log_usu'])  && isset($_POST['pass_usu']) && isset($_POST['mail_usu']) && isset($_POST['ide_usu']) && isset($_POST['anul_usu'])){
        $usu->set_usu_codigo($_POST['cod_usu']);
        $usu->set_usu_identificacion($_POST['ide_usu']);
        $usu->set_usu_nombre($_POST['nom_usu']);
        $usu->set_usu_apellidos($_POST['ape_usu']);
        $usu->set_usu_login($_POST['log_usu']);
        $usu->set_usu_passwd($_POST['pass_usu']);
        $usu->set_rol_codigo(1);
        $usu->set_usu_estado(1);
        $usu->set_usu_mail($_POST['mail_usu']);
        $usu->set_usu_fecha_mod($fechaActual);
        $usu->set_usu_mod($nameuser);
        $usu->set_permiso_anular($_POST['anul_usu']);
        if($usu->ValidarIdentificacion()){
          if(!empty($usu->ModificarUsuario())){
                $usut->VaciarUstemp();
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


