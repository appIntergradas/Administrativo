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

session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
    
    date_default_timezone_set('America/Bogota');
    $fechaActual = date('d-m-Y H:i:s');
    $art = new Articulos();
    if(isset($_POST['cod_art']) && isset($_POST['des_art']) && isset($_POST['ref_art']) && isset($_POST['cant_art'])  && isset($_POST['vaco_art']) && isset($_POST['vave1_art']) && isset($_POST['vave2_art']) && isset($_POST['vave3_art'])){
        $art->set_art_id($_POST['cod_art']);
        $art->set_art_descripcion($_POST['des_art']);
        $art->set_art_referencia($_POST['ref_art']);        
        $art->set_art_cantidad($_POST['cant_art']);
        $art->set_art_pcosto($_POST['vaco_art']);
        $art->set_art_pventa($_POST['vave1_art']);
        $art->set_art_pventa2($_POST['vave2_art']);
        $art->set_art_pventa3($_POST['vave3_art']);
        $art->set_art_usu_mod($nameuser);
        $art->set_art_usu_fecha_mod($fechaActual);
        
        if(!empty($art->ModificarArt())){
            echo 4;
        }else{
            echo 1;
        }
    }else {
        echo 0;
    }


}  else {
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/index.php');</script>";
}


?>


