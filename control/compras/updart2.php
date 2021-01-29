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
include_once '../../model/dao/DAODetallecomp_temp.php';
include_once '../../model/business/Detallecomp_temp.php';

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
    $detat = new Detallecomptemp();
   
    if(isset($_POST['art_codf']) && isset($_POST['num_compf'])){
        $comp= $_POST['num_compf'];
        $cod= $_POST['art_codf'];
        $can= $_POST['art_cantf'];
        $val= $_POST['art_valartf'];
        $subt= $can * $val;
        $art->set_art_id($cod);
        $info=$art->InfoArticulos();
        

      if(!empty($info)){
           if($can<=$info[3]){
              $detat->set_num_comp($comp);
              $detat->set_cod_articulo($cod);
              $detat->set_canti_articulo($can);
              $detat->set_valorve_articulo($val);
              $detat->set_subtotal_articulo($subt);
                  if($detat->ModArtdetallecom()){
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


