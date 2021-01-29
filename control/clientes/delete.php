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
include_once '../../model/dao/DAOEncabezadofactu.php';
include_once '../../model/business/Encabezadofactu.php';

session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
    $info=array();
    $dato=0;
    $cli=new Clientes();
    $enca=new Encabezadofactu();
    
    if(isset($_POST['nit_cl'])){
        $dato=$_POST['nit_cl'];
            $enca->set_nit_enca_cl($dato);
            $info=$enca->Buscarnit();
            if(empty($info)){
                $cli->set_cl_nit($dato);
                if(!empty($cli->BorrarCliente())){
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


