<?php
include_once '../../generic/Permisos.php';
include_once '../../generic/config/config.php';
include_once '../../generic/DB.php';
include_once '../../model/dao/DAORol.php';
include_once '../../model/dao/DAOModulosxRol.php';
include_once '../../model/dao/DAOUsuario.php';
include_once '../../model/business/Usuario.php';
include_once '../../model/dao/DAORecibopagar_temp.php';
include_once '../../model/business/Recibopagar_temp.php';

session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
    $subtot=0;
    $subtotfinal=0;
    $can=0;
    $recipat = new Recibopagarb_temp();
    if(isset($_POST['num_farb']) && isset($_POST['confacrb_farb']) && isset($_POST['valfacrb_farb']) && isset($_POST['avefacrb_farb']) && isset($_POST['desfacrb_farb']) && isset($_POST['canfacrb_farb']) && isset($_POST['flefacrb_farb']) && isset($_POST['sobfacrb_farb']) && isset($_POST['salfacrb_farb'])){
        $numfa= $_POST['num_farb'];
        $confacrb= $_POST['confacrb_farb'];
        $valfacrb= $_POST['valfacrb_farb'];
        $avefacrb= $_POST['avefacrb_farb'];
        $desfacrb= $_POST['desfacrb_farb'];
        $canfacrb= $_POST['canfacrb_farb'];
        $flefacrb= $_POST['flefacrb_farb'];
        $sobfacrb= $_POST['sobfacrb_farb'];
        $salfacrb= $_POST['salfacrb_farb'];

        $recipat->set_num_factrb($numfa);
        $info=$recipat->InfoRecipago();

        if(!empty($info)){
           if($valfacrb<$info[3]){
            $confacrb="abono factura";   
           }else{
            $confacrb="pago factura";   
           }   
        //date_default_timezone_set('America/Bogota');
        //$fec = date('d-m-Y H:i:s');
        //$recipat->set_fechacrea_factrb($fec);

        $recipat->set_concepto_factrb($confacrb);
        $recipat->set_valor_factrb($valfacrb);
        $recipat->set_averias_factrb($avefacrb);
        $recipat->set_descu_factrb($desfacrb);
        $recipat->set_cance_factrb($canfacrb);
        $recipat->set_flete_factrb($flefacrb);
        $recipat->set_sobra_factrb($sobfacrb);
        $recipat->set_saldar_factrb($salfacrb);
        $recipat->set_nom_vende_factrb($nameuser);
       
        if($recipat->ModiRecipago()){
                  echo 4;
            }else{
                  echo 1;
            }
      }else{
            echo 0;
      }
    }else{
          echo 0;
    }
}else{
      echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/index.php');</script>";
}
?>


