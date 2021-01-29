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
    

    $bitFact ='';
    $nofact=[];
    $ultfact=[];
    $ca='';
    $cantnueva='';
    $info2=[];
    $enca = new Encabezadofactu();
    $deta = new Detallefactu();
    $detat = new Detallefactutemp();
    $arti = new Articulos();
    if(isset($_POST['fecha_enca']) && isset($_POST['nitcl_enca'])  && isset($_POST['numfact_enca']) && isset($_POST['nomcl_enca']) && isset($_POST['codvend_fact']) && isset($_POST['subto_enca']) && isset($_POST['totafact_enca'])){
        
        $fechaenca= $_POST['fecha_enca'];
        $nitclenca= $_POST['nitcl_enca'];
        $numfactenca= $_POST['numfact_enca'];
        $nomclenca= $_POST['nomcl_enca'];
        $codvendfact= $_POST['codvend_fact'];
        $subtoenca= $_POST['subto_enca'];
        $totalfactenca= $_POST['totafact_enca'];
        $enca->set_num_enca_fact($numfactenca);
        $info=$enca->InfoEncafact();

       if(!empty($info)){//valido que si este la factura
          
              $enca->set_fecha_enca_fact($fechaenca);
              $enca->set_nit_enca_cl($nitclenca);
              $enca->set_nom_enca_cl($nomclenca);
              $enca->set_subtota_enca($subtoenca);
              $enca->set_total_enca($totalfactenca);
              $enca->set_num_enca_fact($numfactenca);
              $enca->set_nom_enca_vendedor($nameuser);
                        if($enca->ModiEncafact()){//modifico encabezado
                              //$nofact=$enca->AsignarNofactura();
                              //$nofact[0]=$nofact[0] + 1;
                              $ultfact=$enca->ConsulUltfacturas();
                              foreach ($ultfact as $key => $value2) {
                                    $bitFact.='<option value="'.$value2['num_enca_fact'].'">'.$value2['nom_enca_cl'].'</option>';
                              }
                              
                              $detat->set_num_fact($numfactenca);
                              $info2=$detat->InfoDetafact();
                              if(!empty($info2)){
                                 foreach ($info2 as $key => $value3) {
                                    //guardo articulos en detallefactura
                                    $deta->set_cod_articulo($value3['cod_articulo']);
                                    $deta->set_nom_articulo($value3['nom_articulo']);
                                    $deta->set_valorve_articulo($value3['valorve_articulo']);
                                    $deta->set_canti_articulo($value3['canti_articulo']);
                                    $deta->set_subtotal_articulo($value3['subtotal_articulo']);
                                    $deta->set_num_fact($value3['num_fact']);
                                    if($deta-> Infodetalle()){
                                       $deta->ModiDetallefact();
                                      
                                    }else{
                                          $deta->InserDetallefact();
                                    }
                                    //actualizo el stock
                                    $arti->set_art_id($value3['cod_articulo']);
                                    $ca=$arti->InfoArticuloscant();
                                    $cantnueva=$ca[0]- $value3['canti_articulo'];
                                    $arti->set_art_cantidad($cantnueva);
                                    $arti->Upcanart();
                                   //actualizo detallefact_temp
                                   $detat->set_num_fact($value3['num_fact']);
                                   $detat->set_cod_articulo($value3['cod_articulo']);
                                   $detat->BorrarDetallefact();
                                    
                                          
                                 }
                                 echo 4;
                              }else{
                                   echo 2;
                                   
                              }

                             
                        }else{
                              echo 1;
                        }
                 
            
      }else{
              echo 0;
      }
    
    
    
    
    
    
    
    
    
      }else{
          echo 0;
    }
}else{
      echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/index.php');</script>";
}
?>


