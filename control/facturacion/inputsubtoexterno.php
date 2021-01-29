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
include_once '../../model/dao/DAOClientes.php';
include_once '../../model/business/Clientes.php';
include_once '../../model/dao/DAOArticulos_temp.php';
include_once '../../model/business/Articulos_temp.php';

    
session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
    $ident =  $_SESSION['usuario']->get_usu_identificacion();

    $subtot=0;
    $subto=0;
    $subtotfinal=0;
    

    $artemp = new Articulos_temp();
    $artemp->set_identificacion_usu($ident);
    $articulostm=$artemp->ListarArticulosTodostemp();
    foreach ($articulostm as $key => $value) {
        $subtot = $value['art_cantidad'] * $value['art_pventa'];
        $subtotfinal=$subtotfinal+$subtot; 
       
    }
    $subtotfinal=number_format($subtotfinal,  2,".",".");
    $subtot='
    <html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
        <link rel="stylesheet" href="../../view/css/stylesfact.css">
    </head>
    <style>
    #subto-fact{font-weight:bold;}
    </style>
    <body>
       <div class="form-group">
        <input type="text" class="form-control inp-subto-fact" id="subto-fact" readonly value="'.$subtotfinal.'">
       </div>
    </body>
  </html>';
  echo $subtot;
}  else {
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/login.php');</script>";
}