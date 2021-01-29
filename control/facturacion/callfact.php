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

session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
   
    
    $bitFact ='';
    $nofact=[];
    $ultfact=[];
    $ca='';
    $cantnueva='';
    $info4=[];
    $enca = new Encabezadofactu();
    $deta = new Detallefactu();
    $artemp = new Articulos_temp();
    $arti = new Articulos();
    if(isset($_POST['nume_fact'])){
        $factunum= $_POST['nume_fact'];
        $enca->set_num_enca_fact($factunum);
        $info4=$enca->InfoEncafact();

       if(!empty($info4)){
          //empaco los datos  
          $json= array();
            $fechafact=$info4[3]; 
            $nitfact=$info4[1]; 
            $nomfact=$info4[2];
            $numfact=$info4[5];
            $json = array('fecha_fact'=>$fechafact,'nit_fact'=>$nitfact,'nom_fact'=>$nomfact,'num_fact'=>$numfact);
            header('Content-Type: application/json');
            $json_string = json_encode($json);
            echo $json_string;
                             
            
      }else{
              echo 1;
      }
    
    
    
    
    
    
    
    
    
      }else{
          echo 0;
    }
}else{
      echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/index.php');</script>";
}
?>


