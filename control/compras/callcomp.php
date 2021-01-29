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

session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
   
    
    $bitcomp ='';
    $nocomp=[];
    $ultcomp=[];
    $ca='';
    $cantnueva='';
    $info5=[];
    $enca = new Encabezadocomp();
    $deta = new Detallecomp();
    $artemp3 = new Articulos_temp3();
    $arti = new Articulos();
    if(isset($_POST['nume_comp'])){
        $compnum= $_POST['nume_comp'];
        $enca->set_num_enca_comp($compnum);
        $info5=$enca->InfoEncacomp();

       if(!empty($info5)){
          //empaco los datos  
          $json= array();
            $fechacomp=$info5[3]; 
            $nitcomp=$info5[1]; 
            $nomcomp=$info5[2];
            $numcomp=$info5[5];
            $json = array('fecha_comp'=>$fechacomp,'nit_comp'=>$nitcomp,'nom_comp'=>$nomcomp,'num_comp'=>$numcomp);
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


