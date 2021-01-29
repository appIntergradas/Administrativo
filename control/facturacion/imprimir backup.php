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
include_once '../../model/dao/DAODetallefactu.php';
include_once '../../model/business/Detallefactu.php';
include_once '../../model/dao/DAODetallefactu_temp.php';
include_once '../../model/business/Detallefactu_temp.php';



session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
    $ident =  $_SESSION['usuario']->get_usu_identificacion();

    $enca = new Encabezadofactu();
    $cli = new Clientes();
    $deta = new Detallefactu();

    $bitArtimpTabla='';
    $bitArticulosTablabs='';
    $subtot=0;
    $subtotfinal=0;
    $imqr='';
    $k=0;
    if(isset($_GET['factu'])){
        $fact=$_GET['factu'];
        $enca->set_num_enca_fact($fact);
        $info=$enca->InfoEncafact();//datos de encabezado

        $nomcl=strtoupper($info[2]);
        $nitcl=$info[1];
        $fpago=$info[8];

        $cli->set_cl_nit($nitcl);
        $info2=$cli->ValidarNit();
        $dir=$info2[8];
        $ciu=$info2[9];
        $te=$info2[5];

        date_default_timezone_set('America/Bogota');
        $fe= date('d-m-Y');
        $ho= date('H:i:s');
        $deta->set_num_fact($fact);
        $det=$deta->InfoDetafact();
        foreach ($det as $key => $value2) {
            $subtot=$value2['subtotal_articulo'];
            $subtotfinal=$subtotfinal +$subtot;
            $bitArtimpTabla.='<tr>
                            <td style="text-align: left;">'.$value2['cod_articulo'].'</td>
                            <td style="text-align: left;">'.$value2['nom_articulo'].'</td>
                            <td style="text-align: left;">'.$value2['canti_articulo'].'</td>
                            <td style="text-align: left;">'.$value2['valorve_articulo'].'</td>
                            <td style="text-align: left;">'.$subtot.'</td>
                            </tr>';
                            $k=$k+1;
        }
        //generamos qr
        $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;//falta corregir ruta
        $PNG_WEB_DIR = 'temp/';
        include_once 'phpqrcode/qrlib.php';    
        if (!file_exists($PNG_TEMP_DIR))
           mkdir($PNG_TEMP_DIR);
           $filename = $PNG_TEMP_DIR.'test.png';
           $matrixPointSize = 10;
           $errorCorrectionLevel = 'L'; 
        $filename = $PNG_TEMP_DIR.'test'.md5($errorCorrectionLevel.'|'.$matrixPointSize).'.png';
        QRcode::png('información', $filename, $errorCorrectionLevel, $matrixPointSize, 2);//falta cambiar contenido 
        $imqr='<img src="'.$PNG_WEB_DIR.basename($filename).'" />'; 
        








       
   }else{
        echo 1;

    }
    
    include '../../view/facturacion/plantilla.php';
    
}  else {
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/login.php');</script>";
}


?>


