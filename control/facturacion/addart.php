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
include_once '../../model/dao/DAODetallefactu_temp.php';
include_once '../../model/business/Detallefactu_temp.php';

session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
    $subtot=0;
    $subtotfinal=0;
    $can=0;
    $art = new Articulos();
    $artemp = new Articulos_temp();
    if(isset($_POST['art_cod']) && isset($_POST['nu_fact'])){
        $cod= $_POST['art_cod'];
        $nom= $_POST['art_nom'];
        $can= $_POST['art_cant'];
        $val= $_POST['art_valart'];
        $ideusu= $_POST['ide_usu'];
        $nufact= $_POST['nu_fact'];
       
        $enca = new Encabezadofactu();
        $detatemp = new Detallefactutemp();
        $info2='';

        $nofact=$enca->AsignarNofactura();//me trae la ultima factura
        $nofact[0]=$nofact[0] + 1;
          $art->set_art_id($cod);
                  $info=$art->InfoArticulos();
                  $artemp->set_art_id($cod);
                  if(!empty($info)){
                    if($can<=$info[3]){//validamos el stock
                      if($nofact[0] == $nufact){// inserta los articulos a la tabla articulos temporal        
                              $artemp->set_art_id($cod);
                              $artemp->set_art_referencia("");
                              $artemp->set_art_nom($nom);
                              $artemp->set_art_cantidad($can);
                              $artemp->set_art_pcosto("");
                              $artemp->set_art_pventa($val);
                              $artemp->set_art_acentamiento("1");
                              $artemp->set_identificacion_usu($ideusu);
                              if($artemp->InfoArticulostemp()==false){
                                    if($artemp->AddArticulotemp()){
                                          $subtotfinal = $can * $val; 
                                          //$subtotfinal=$subtotfinal+$subtotart;
                                          echo 4;
                                    }else{
                                          echo 1;
                                    }
                              }else{      //validamos que la cantidad total no sobre pase el stock
                                          $info2=$artemp->InfoArticulostemp();
                                          $ncan=$can + $info2[3];
                                          if($ncan<=$info[3]){
                                                $artemp->set_art_id($cod);
                                                $artemp->set_art_cantidad($ncan);
                                                if($artemp->UpdArticulotemp()){//adicionamos cantidad a producto que ya estaba agregado
                                                      $subtotfinal = $ncan * $val; 
                                                     // $subtotfinal=$subtotfinal+$subtotart;
                                                      echo 4;
                                                }else{
                                                      echo 1;
                                                }
                                          }else{
                                                echo 3;//error sobre pasa el stock
                                          }
                                          
                        
                              }

                        }else{ //sino adiciona los articulos a la tabla detalle factura temporal
                              $subtotart = $can * $val; 
                              $subtotfinal=((int)$subtotfinal+(int)$subtotart);
                              $detatemp-> set_cod_articulo($cod);
                              $detatemp->set_nom_articulo($nom);
                              $detatemp->set_valorve_articulo($val);
                              $detatemp->set_canti_articulo($can);
                              $detatemp->set_subtotal_articulo($subtotart);
                              $detatemp->set_num_fact($nufact);
                              if($detatemp->InfoArticulosdetalletemp()==false){
                                    if($detatemp->InserDetallefact()){
                                       echo 5;
                                    }else{
                                          echo 1;
                                    }
                              }else{
                                    echo 3;
                              }
                        }


                  }else{
                        echo 2;
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


