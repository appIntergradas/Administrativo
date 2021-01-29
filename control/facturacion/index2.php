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
include_once '../../model/dao/DAOClientes.php';
include_once '../../model/business/Clientes.php';
include_once '../../model/dao/DAOEncabezadofactu.php';
include_once '../../model/business/Encabezadofactu.php';

session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
    $ident =  $_SESSION['usuario']->get_usu_identificacion();
    $color="#000138";
    $bitArticulosTablanul='';
    $comilla="'";
    $va='';
    $borrarVisibility="";
    $enca=new Encabezadofactu();
    $enca->set_nom_enca_vendedor($nameuser);
    $facturas=$enca->ConsulUltfacturasvende();
    foreach ($facturas as $key => $value) {
        $va=$value['subtota_enca'];
        if($va == 0.00){
            $color="red";
            $borrarVisibility="display:none;";
            
        }else{
            $color="#000138";
            $borrarVisibility="display:block;";
           
        }
        $bitArticulosTablanul.='<tr>
                        <td style="text-align: left;color:'.$color.';">'.$value['num_enca_fact'].'</td>
                        <td style="text-align: left;">'.$value['nom_enca_cl'].'</td>
                        <td style="text-align: left;">'.$value['fecha_enca_fact'].'</td>
                        <td style="text-align: left;">'.$value['nom_enca_vendedor'].'</td>
                        <td style="text-align: left;">'.$value['subtota_enca'].'</td>
                        <td style="text-align: left;">'.$value['total_enca'].'</td>
                        <td style="text-align: center;"><button  style="'.$borrarVisibility.'" onClick="javascript:Showmodalanul('.$value['num_enca_fact'].');" class="btn btn-danger taico"><i class="fas fa-trash" aria-hidden="true"></i></button></td>
                        </tr>';
    }
    
    include '../../view/facturacion/Anular.php';
    
}  else {
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/login.php');</script>";
}


?>