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
    $artemp3 = new Articulos_temp3();
    if(isset($_POST['art_cod'])){
        $cod= $_POST['art_cod'];
        $can= $_POST['art_cant'];
        $val= $_POST['art_valart'];
        $art->set_art_id($cod);
        $info=$art->InfoArticulos();
        $artemp3->set_art_id($cod);

      if(!empty($info)){
           if($can<=$info[3]){
              $artemp3->set_art_id($cod);
              $artemp3->set_art_cantidad($can);
              $artemp3->set_art_pventa($val);
                  if($artemp3->ModArticulotemp()){
                        $subtotart = $can * $val; 
                        $subtotfinal=$subtotfinal+$subtotart;
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
    }else{
          echo 0;
    }
}else{
      echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/index.php');</script>";
}
?>


