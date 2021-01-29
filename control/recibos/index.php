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
include_once '../../model/dao/DAOFacturb.php';
include_once '../../model/business/Facturb.php';
include_once '../../model/dao/DAORecibopagar.php';
include_once '../../model/business/Recibopagar.php';

session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
    $ident =  $_SESSION['usuario']->get_usu_identificacion();

    $bitArticulosTabla='';
    $bitFactTablarb='';
    $bitClientesTablabs='';
    $bitArticulosTablabs='';
    $bitFact ='';
    $bitTablapagarb='';
    $nofact=[];
    $ultfact=[];
    $subtot=0;
    $subtotfinal=0;
    $totalfinal=0;
    $comilla="'";
    $llamafa="";
    $subtotalrb=0;
    date_default_timezone_set('America/Bogota');
    $fechaactu=date("Y-m-d");
       


    //para listar los clientes en el modal
    $cli=new Clientes();
    $clientes=$cli->ListarClientesTodos();
    foreach ($clientes as $key => $value) {
        $bitClientesTablabs.='<tr>
                        <td style="text-align: left;">'.$value['cl_nit'].'</td>
                        <td style="text-align: left;">'.$value['cl_razon'].'</td>
                        <td style="text-align: left;">'.$value['cl_tel'].'</td>
                        <td style="text-align: center;"><input type="radio" name="clientesbs" value="'.$value['cl_id'].'"></td>
                        </tr>';
    }
   //para listar los articulos en el modal
    $art=new Articulos();
    $articu=$art->ListarArticulosTodos();
    foreach ($articu as $key => $value2) {
        $bitArticulosTablabs.='<tr>
                        <td style="text-align: left;">'.$value2['art_id'].'</td>
                        <td style="text-align: left;">'.$value2['art_referencia'].'</td>
                        <td style="text-align: left;">'.$value2['art_nom'].'</td>
                        <td style="text-align: center;"><input type="radio" name="articulosbs" value="'.$value2['art_id'].'"></td>
                        </tr>';
    }
  
    //inicializacion facturas recibos
    $ftrb = new Facturb();
    $ftrb->VaciarTablafactrecibo();
    
    $recipa = new Recibopagarb();
    $noreci=$recipa->AsignarNorecibo();
    if($noreci==NULL){
        $noreci = 0;
    }else{
        $noreci[0] = $noreci[0] + 1;
    }
  
    
    include '../../view/recibos/home.php';
    
}  else {
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/login.php');</script>";
}


?>