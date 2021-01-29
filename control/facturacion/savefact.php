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
    $subto='';
    $enca = new Encabezadofactu();
    $deta = new Detallefactu();
    $artemp = new Articulos_temp();
    $arti = new Articulos();
    if(isset($_POST['fecha_enca']) && isset($_POST['nitcl_enca'])  && isset($_POST['numfact_enca']) && isset($_POST['nomcl_enca']) && isset($_POST['codvend_fact']) && isset($_POST['subto_enca']) && isset($_POST['totafact_enca'])){
        
        $fechaenca= $_POST['fecha_enca'];
        $nitclenca= $_POST['nitcl_enca'];
        $numfactenca= $_POST['numfact_enca'];
        $nomclenca= $_POST['nomcl_enca'];
        $codvendfact= $_POST['codvend_fact'];
        $subtoenca= $_POST['subto_enca'];
        $totalfactenca= $_POST['totafact_enca'];
        $formpafa= $_POST['formpa_enca'];
        $enca->set_num_enca_fact($numfactenca);
        $info=$enca->InfoEncafact();

       if(empty($info)){
          
              $enca->set_fecha_enca_fact($fechaenca);
              $enca->set_nit_enca_cl($nitclenca);
              $enca->set_nom_enca_cl($nomclenca);
              $enca->set_subtota_enca($subtoenca);
              $enca->set_total_enca($totalfactenca);
              $enca->set_num_enca_fact($numfactenca);
              $enca->set_nom_enca_vendedor($nameuser);
              $enca->set_forma_pago($formpafa);
                        if($enca->InserEncafact()){
                              $enca = new Encabezadofactu();
                              $nofact=$enca->AsignarNofactura();
                              $nofact[0]=$nofact[0] + 1;
                              $ultfact=$enca->ConsulUltfacturas();
                              foreach ($ultfact as $key => $value2) {
                                    $bitFact.='<option value="'.$value2['num_enca_fact'].'">'.$value2['nom_enca_cl'].'</option>';
                              }
                              
                              $artemp->set_identificacion_usu($codvendfact);
                              $info2=$artemp->Buscarartvend();
                              if(!empty($info2)){
                                 foreach ($info2 as $key => $value3) {
                                    //guardo articulos en detallefactura
                                    $subto=$value3['art_pventa']*$value3['art_cantidad'];
                                    $deta->set_cod_articulo($value3['art_id']);
                                    $deta->set_nom_articulo($value3['art_nom']);
                                    $deta->set_valorve_articulo($value3['art_pventa']);
                                    $deta->set_canti_articulo($value3['art_cantidad']);
                                    $deta->set_subtotal_articulo($subto);
                                    $deta->set_num_fact($numfactenca);
                                    $deta->InserDetallefact();
                                    //actualizo el stock
                                    $arti->set_art_id($value3['art_id']);
                                    $ca=$arti->InfoArticuloscant();
                                    $cantnueva=$ca[0]- $value3['art_cantidad'];
                                    $arti->set_art_cantidad($cantnueva);
                                    $arti->Upcanart();
                                 }
                                 //actualizo articulos_temp
                                 $artemp->set_identificacion_usu($codvendfact);
                                 $artemp->Delarttemp();
                        
                                    echo 4;
                              }else{
                                   echo 2;
                                   //elimino insersion
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


