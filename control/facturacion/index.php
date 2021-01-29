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

    $bitArticulosTabla='';
    $bitArticulosTablabs='';
    $bitClientesTablabs='';
    $bitFact ='';
    $nofact=[];
    $ultfact=[];
    $subtot=0;
    $subtotfinal=0;
    $totalfinal=0;
    $comilla="'";
    $llamafa="";
    $illamafa="";
    $i=19;
    $k=20;
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
   //cargamos articulos temporales en la tabla principal
    $artt = new Articulos_temp();
    $artt->set_identificacion_usu($ident);
    $articulostm=$artt->ListarArticulosTodostemp();

    if(!empty($articulostm)){
      $llamafa="hidden";
      $illamafa="hidden";
    }else{
        $llamafa="visible";
        $illamafa="visible";
    }
    foreach ($articulostm as $key => $value) {
        $subtot = $value['art_cantidad'] * $value['art_pventa'];
        $subtotfinal=$subtotfinal+$subtot; 
        $totalfinal=$subtotfinal;
        
        $bitArticulosTabla.='<tr>
                        <td style="text-align: left;">'.$value['art_id'].'</td>
                        <td style="text-align: left;">'.$value['art_nom'].'</td>
                        <td style="text-align: left;"><input type="text" class="inpartcant" name="artcant" id="artcant'.$value['art_id'].'" value="'.$value['art_cantidad'].'" onkeyup="javascript: updateval('.$value['art_id'].');" tabindex="'.$i.'"></td>
                        <td style="text-align: left;"><input type="text" class="inpartpventa" name="artpventa" id="artpventa'.$value['art_id'].'" value="'.$value['art_pventa'].'" onkeyup="javascript: updateval('.$value['art_id'].');" tabindex="'.$k.'"></td>
                        <td style="text-align: left;">'.$subtot.'</td>
                        <td style="text-align: center;"><button onClick="javascript:DelArt('.$value['art_id'].');" class="btn btn-danger taico"><i class="fas fa-trash" aria-hidden="true"></i></button></td>
                    </tr>';
        $i=$i+1;
        $k=$i+1;
    }
    
    $enca = new Encabezadofactu();
    $nofact=$enca->AsignarNofactura();
    if($nofact==NULL){
        $nofact = 0;
    }else{
        $nofact[0] = $nofact[0] + 1;
    }
    $ultfact=$enca->ConsulUltfacturas();//consultamos facturas para listar
    foreach ($ultfact as $key => $value2) {
        $bitFact.='<option value="'.$value2['num_enca_fact'].'-'.$value2['nom_enca_cl'].'"></option>';
    }
      
    
    include '../../view/facturacion/home.php';
    
}  else {
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/login.php');</script>";
}


?>