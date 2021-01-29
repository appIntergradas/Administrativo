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
include_once '../../model/dao/DAOEncabezadocomp.php';
include_once '../../model/business/Encabezadocomp.php';
include_once '../../model/dao/DAODetallecomp.php';
include_once '../../model/business/Detallecomp.php';

session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
    

    $bitComp ='';
    $nocomp=[];
    $ultcomp=[];
    $ca='';
    $cantnueva='';
    $info2=[];
    $subto='';
    $enca = new Encabezadocomp();
    $deta = new Detallecomp();
    $artemp3 = new Articulos_temp3();
    $arti = new Articulos();
    if(isset($_POST['fecha_enca']) && isset($_POST['nitcl_enca'])  && isset($_POST['numcomp_enca']) && isset($_POST['nomcl_enca']) && isset($_POST['codvend_comp']) && isset($_POST['subto_enca']) && isset($_POST['totacomp_enca'])){
        
        $fechaenca= $_POST['fecha_enca'];
        $nitclenca= $_POST['nitcl_enca'];
        $numcompenca= $_POST['numcomp_enca'];
        $nomclenca= $_POST['nomcl_enca'];
        $codvendcomp= $_POST['codvend_comp'];
        $subtoenca= $_POST['subto_enca'];
        $totalcompenca= $_POST['totacomp_enca'];
        $formpaco= $_POST['formpa_enca'];

        $enca->set_num_enca_comp($numcompenca);
        $info=$enca->InfoEncacomp();

       if(empty($info)){
          
              $enca->set_fecha_enca_comp($fechaenca);
              $enca->set_nit_enca_cl($nitclenca);
              $enca->set_nom_enca_cl($nomclenca);
              $enca->set_subtota_enca($subtoenca);
              $enca->set_total_enca($totalcompenca);
              $enca->set_num_enca_comp($numcompenca);
              $enca->set_nom_enca_vendedor($nameuser);
              $enca->set_forma_pago($formpaco);
                        if($enca->InserEncacomp()){
                              $enca = new Encabezadocomp();
                              $nocomp=$enca->AsignarNocompra();
                              $nocomp[0]=$nocomp[0] + 1;
                              $ultcomp=$enca->ConsulUltcompras();
                              foreach ($ultcomp as $key => $value2) {
                                    $bitComp.='<option value="'.$value2['num_enca_comp'].'">'.$value2['nom_enca_cl'].'</option>';
                              }
                              
                              $artemp3->set_identificacion_usu($codvendcomp);
                              $info2=$artemp3->Buscarartvend();
                              if(!empty($info2)){
                                 foreach ($info2 as $key => $value3) {
                                    //guardo articulos en detallefactura
                                    $subto=$value3['art_pventa']*$value3['art_cantidad'];
                                    $deta->set_cod_articulo($value3['art_id']);
                                    $deta->set_nom_articulo($value3['art_nom']);
                                    $deta->set_valorve_articulo($value3['art_pventa']);
                                    $deta->set_canti_articulo($value3['art_cantidad']);
                                    $deta->set_subtotal_articulo($subto);
                                    $deta->set_num_comp($numcompenca);
                                    $deta->InserDetallecomp();
                                    //actualizo el stock
                                    $arti->set_art_id($value3['art_id']);
                                    $ca=$arti->InfoArticuloscant();
                                    $cantnueva=$ca[0]+ $value3['art_cantidad'];
                                    $arti->set_art_cantidad($cantnueva);
                                    $arti->Upcanart();
                                 }
                                 //actualizo articulos_temp
                                 $artemp3->set_identificacion_usu($codvendcomp);
                                 $artemp3->Delarttemp();
                        
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


