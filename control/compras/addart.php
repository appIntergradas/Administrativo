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
include_once '../../model/dao/DAODetallecomp_temp.php';
include_once '../../model/business/Detallecomp_temp.php';

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
    $artemp3 = new Articulos_temp3();
    if(isset($_POST['art_cod']) && isset($_POST['nu_comp'])){
        $cod= $_POST['art_cod'];
        $nom= $_POST['art_nom'];
        $can= $_POST['art_cant'];
        $val= $_POST['art_valart'];
        $ideusu= $_POST['ide_usu'];
        $nucomp= $_POST['nu_comp'];
       
        $enca = new Encabezadocomp();
        $detatemp = new Detallecomptemp();
        $info2='';

        $nocomp=$enca->AsignarNocompra();//me trae la ultima factura
        $nocomp[0]=$nocomp[0] + 1;

        $art->set_art_id($cod);
                  $info=$art->InfoArticulos();
                  $artemp3->set_art_id($cod);
                  if(!empty($info)){
                    if($can<=$info[3]){//validamos el stock
                      if($nocomp[0] == $nucomp){// inserta los articulos a la tabla articulos temporal        
                              $artemp3->set_art_id($cod);
                              $artemp3->set_art_referencia("");
                              $artemp3->set_art_nom($nom);
                              $artemp3->set_art_cantidad($can);
                              $artemp3->set_art_pcosto("");
                              $artemp3->set_art_pventa($val);
                              $artemp3->set_art_acentamiento("1");
                              $artemp3->set_identificacion_usu($ideusu);
                              if($artemp3->InfoArticulostemp()==false){
                                    if($artemp3->AddArticulotemp()){
                                          $subtotfinal = $can * $val; 
                                          //$subtotfinal=$subtotfinal+$subtotart;
                                          echo 4;
                                    }else{
                                          echo 1;
                                    }
                              }else{      //validamos que la cantidad total no sobre pase el stock
                                          $info2=$artemp3->InfoArticulostemp();
                                          $ncan=$can + $info2[3];
                                          if($ncan<=$info[3]){
                                                $artemp3->set_art_id($cod);
                                                $artemp3->set_art_cantidad($ncan);
                                                if($artemp3->UpdArticulotemp()){//adicionamos cantidad a producto que ya estaba agregado
                                                      $subtotfinal = $ncan * $val; 
                                                      //$subtotfinal=$subtotfinal+$subtotart;
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
                              $detatemp->set_num_comp($nucomp);
                              if($detatemp->InfoArticulosdetalletemp()==false){
                                    if($detatemp->InserDetallecomp()){
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


