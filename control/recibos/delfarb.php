<?php
include_once '../../generic/Permisos.php';
include_once '../../generic/config/config.php';
include_once '../../generic/DB.php';
include_once '../../model/dao/DAORol.php';
include_once '../../model/dao/DAOModulosxRol.php';
include_once '../../model/dao/DAOUsuario.php';
include_once '../../model/business/Usuario.php';
include_once '../../model/dao/DAOEncabezadofactu.php';
include_once '../../model/business/Encabezadofactu.php';
include_once '../../model/dao/DAORecibopagar_temp.php';
include_once '../../model/business/Recibopagar_temp.php';
include_once '../../model/dao/DAOFacturb.php';
include_once '../../model/business/Facturb.php';

session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();

    $recipat = new Recibopagarb_temp();
    $ftrb = new Facturb();
    $enca = new Encabezadofactu();
    
    
    if(isset($_POST['num_farb'])){
        $numfa=$_POST['num_farb'];

       $enca->set_num_enca_fact($numfa);
       $info9=$enca->InfoEncafact();
       $ftrb->set_nfact($info9[5]);
       $ftrb->set_valor($info9[7]);
       $ftrb->InsertFacturecibo();
        

        $recipat->set_num_factrb($numfa);
        if($recipat->DeleRecipago()){
           echo 4;
        }else{
            echo 1;
        }
    }else{
        echo 0;
    }
    

}else{
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/login.php');</script>";
}


?>