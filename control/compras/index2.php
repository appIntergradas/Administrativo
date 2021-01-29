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
include_once '../../model/dao/DAOClientes.php';
include_once '../../model/business/Clientes.php';
include_once '../../model/dao/DAOEncabezadocomp.php';
include_once '../../model/business/Encabezadocomp.php';

session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
    $ident =  $_SESSION['usuario']->get_usu_identificacion();
    $color="#000138";
    $bitComprasTablanul='';
    $comilla="'";
    $va='';
    $borrarVisibility="";
    $enca=new Encabezadocomp();
    $compras=$enca->Consulcompras();
    foreach ($compras as $key => $value) {
        $bitComprasTablanul.='<tr>
                        <td style="text-align: left;color:'.$color.';">'.$value['num_enca_comp'].'</td>
                        <td style="text-align: left;">'.$value['nom_enca_cl'].'</td>
                        <td style="text-align: left;">'.$value['fecha_enca_comp'].'</td>
                        <td style="text-align: left;">'.$value['nom_enca_vendedor'].'</td>
                        <td style="text-align: left;">'.$value['subtota_enca'].'</td>
                        <td style="text-align: left;">'.$value['total_enca'].'</td>
                        <td style="text-align: center;"><button  style="'.$borrarVisibility.'" onClick="javascript:Showmodalanul2('.$value['num_enca_comp'].');" class="btn btn-danger taico"><i class="fas fa-trash" aria-hidden="true"></i></button></td>
                        </tr>';
    }
    
    include '../../view/compras/Anular.php';
    
}  else {
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/login.php');</script>";
}


?>