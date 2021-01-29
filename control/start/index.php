<?php

    include_once '../../generic/Permisos.php';
    include_once '../../generic/config/config.php';
    include_once '../../generic/DB.php';
    include_once '../../model/dao/DAORol.php';
    include_once '../../model/dao/DAOModulosxRol.php';
    include_once '../../model/dao/DAOUsuario.php';
    include_once '../../model/business/Usuario.php';
    
session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),2)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $ident =  $_SESSION['usuario']->get_usu_identificacion();
    $peranul="";

    $usu=new Usuario();
    $usu->set_usu_identificacion($ident);
    $per=$usu->Permisoanulusu();
    if($per[0]==1){
      $peranul="display:block;";  
    }else{
      $peranul="display:none;";  
    }
    
   

   
    include '../../view/start/home.php';
    
}  else {
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/login.php');</script>";
}