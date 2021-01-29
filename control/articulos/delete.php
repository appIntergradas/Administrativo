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
include_once '../../model/dao/DAODetallefactu.php';
include_once '../../model/business/Detallefactu.php';


session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();

    $art = new Articulos();
    $deta = new Detallefactu();
    $id="";
    $info=array();
    if(isset($_POST['cod_art'])){
        $id=$_POST['cod_art'];
    
            $deta->set_cod_articulo($id);
            $info=$deta->Buscarcodart();
            if(empty($info)){
                $art->set_art_id($id); 
                if($art->BorrarArti()){
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
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/login.php');</script>";
}


?>

