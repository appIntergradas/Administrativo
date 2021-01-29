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
include_once '../../model/dao/DAODetallefactu_temp.php';
include_once '../../model/business/Detallefactu_temp.php';

session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
    $subtot=0;
    $subtotfinal=0;
    $can=0;
    $art = new Articulos();
    $deta = new Detallefactutemp();
   
    if(isset($_POST['art_codf']) && isset($_POST['num_factf'])){
        $fact= $_POST['num_factf'];
        $cod= $_POST['art_codf'];
        $can= $_POST['art_cantf'];
        $val= $_POST['art_valartf'];
        $subt= $can * $val;
        $art->set_art_id($cod);
        $info=$art->InfoArticulos();
        

      if(!empty($info)){
           if($can<=$info[3]){
              $deta->set_num_fact($fact);
              $deta->set_cod_articulo($cod);
              $deta->set_canti_articulo($can);
              $deta->set_valorve_articulo($val);
              $deta->set_subtotal_articulo($subt);
                  if($deta->ModArtdetallefat()){
                        $subtot = $can * $val; 
                        $subtotfinal=$subtotfinal+$subtot;
                        echo 4;
                  }else{
                        echo 1;
                  }
            }else{
                  echo 2;
            }
      }else{
              echo 3;
      }
    }else{
          echo 0;
    }
}else{
      echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/index.php');</script>";
}
?>


