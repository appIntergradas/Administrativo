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
include_once '../../model/dao/DAOClientes_temp.php';
include_once '../../model/business/Clientes_temp.php';

session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();

    $cli=new Clientes();
    $clit=new Clientes_temp();
    date_default_timezone_set('America/Bogota');
    $fechaActual = date('d-m-Y H:i:s');

    if(isset($_POST['nit_cl']) && isset($_POST['razon_cl'])){
        
        
        $cli->set_cl_nit($_POST['nit_cl']);
        $cli->set_cl_dv($_POST['dv_cl']);
        $cli->set_cl_ciiu($_POST['ciiu_cl']);
        $cli->set_cl_razon($_POST['razon_cl']);
        $cli->set_cl_tel($_POST['tel_cl']);
        $cli->set_cl_otro($_POST['otro_cl']);
        $cli->set_cl_cont($_POST['cont_cl']);
        $cli->set_cl_dir($_POST['dir_cl']);
        $cli->set_cl_ciud($_POST['ciud_cl']);
        $cli->set_cl_email($_POST['email_cl']);
        $cli->set_cl_norete($_POST['norete_cl']);
        $cli->set_cl_grancon($_POST['grancon_cl']);
        $cli->set_cl_rteiva($_POST['rteiva_cl']);
        $cli->set_cl_plazo($_POST['plazo_cl']);
        $cli->set_cl_fecha_mod($fechaActual);
        $cli->set_cl_mod($nameuser);
       
        if($cli->ValidarNit()){
            if(!empty($cli->ModificarCliente())){
                $clit->VaciarCltemp();
                echo 4;
            }else{
                echo 1;
            }  
        }else{
            echo 2;
        }
        
        
                 
        
    }else{
            echo 0;
    }

}  else {
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/index.php');</script>";
}


?>


