<?php
include_once '../../generic/Permisos.php';
include_once '../../generic/config/config.php';
include_once '../../generic/DB.php';
include_once '../../model/dao/DAORol.php';
include_once '../../model/dao/DAOModulosxRol.php';
include_once '../../model/dao/DAOUsuario.php';
include_once '../../model/business/Usuario.php';
include_once '../../model/dao/DAOClientes.php';
include_once '../../model/business/Clientes.php';
include_once '../../model/dao/DAOEncabezadofactu.php';
include_once '../../model/business/Encabezadofactu.php';
include_once '../../model/dao/DAOFacturb.php';
include_once '../../model/business/Facturb.php';
include_once '../../model/dao/DAORecibopagar_temp.php';
include_once '../../model/business/Recibopagar_temp.php';
session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();

    $enca = new Encabezadofactu();
    $recipat = new Recibopagarb_temp();
    $ftrb = new Facturb();
    $bitFactTablarb='';
    $totalfinal=0;
    $cli=new Clientes();
    $info=array();
    if(isset($_POST['bus_clrb'])){
        $dato=$_POST['bus_clrb'];
        
        $recipat->VaciarRecipago();
        $cli->set_cl_nit($dato);
        $info=$cli->InfoClientes();
        
        if(!empty($info)){
            $ftrb->VaciarTablafactrecibo();//vaciamos tabla de recibos
            $enca->set_nit_enca_cl($dato);
            $info6=$enca->InfoEncafactcl();//buscamos valores en el encabezado
            if(!empty($info6) && $info6 !=false && $info6 !=null){
                foreach ($info6 as $key => $value4) {
                    $ftrb->set_nfact($value4['num_enca_fact']);
                    $ftrb->set_valor($value4['total_enca']);
                    $ftrb->InsertFacturecibo();
                } 
                
                $facture=$ftrb->ListarFactureciboTodos();
                foreach ($facture as $key => $value3) {
                    $totalfinal=$totalfinal+$value3['valor'];
                    $totalfinal=number_format($totalfinal);
                    $bitFactTablarb.='<tr>
                                    <td style="text-align: left;">'.$value3['nfact'].'</td>
                                    <td class="selval" style="text-align: left;">'.$value3['valor'].'</td>
                                    </tr>';
                } 
                $json= array();
                    $razon=$info[4]; 
                   
                 
                $json = array('cl_razon'=>$razon);
    
                // echo $bitFactTablarb;
                header('Content-Type: application/json');
                $json_string = json_encode($json);
                echo $json_string;
            }else{
                echo 2;
            }


            
         
            
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