<?php
include_once '../../generic/Permisos.php';
include_once '../../generic/config/config.php';
include_once '../../generic/DB.php';
include_once '../../model/dao/DAORol.php';
include_once '../../model/dao/DAOModulosxRol.php';
include_once '../../model/dao/DAOUsuario.php';
include_once '../../model/business/Usuario.php';
include_once '../../model/dao/DAOProveedores.php';
include_once '../../model/business/Proveedores.php';
include_once '../../model/dao/DAOProveedores_temp.php';
include_once '../../model/business/Proveedores_temp.php';
session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
    $daton=0;
    $info3="";
    $pro=new Proveedores();
    $prot=new Proveedores_temp();
    $info=array();
    if(empty($_POST['buscar_pv']) && empty($_POST['pv_id'])){
        $prot->VaciarPvtemp();//vacimos tabla temporal
        $info=$pro->ListarProveedoresTodos();//consulto todos los provedores
            if(!empty($info)){// verifico que no este vacia la tabla de provedores
                foreach ($info as $key => $value) {//guardo los provedores en temporal
                    $prot->set_pv_nit($value['pv_nit']);
                    $prot->set_pv_dv($value['pv_dv']);
                    $prot->set_pv_ciiu($value['pv_ciiu']);
                    $prot->set_pv_razon($value['pv_razon']);
                    $prot->set_pv_tel($value['pv_tel']);
                    $prot->set_pv_otro($value['pv_otro']);
                    $prot->set_pv_cont($value['pv_cont']);
                    $prot->set_pv_dir($value['pv_dir']);
                    $prot->set_pv_ciud($value['pv_ciud']);
                    $prot->set_pv_email($value['pv_email']);
                    $prot->set_pv_norete($value['pv_norete']);
                    $prot->set_pv_grancon($value['pv_grancon']);
                    $prot->set_pv_rteiva($value['pv_rteiva']);
                    $prot->set_pv_plazo($value['pv_plazo']);
                    $prot->set_pv_creo($nameuser);
                    $prot->RegistrarProveedor();
                    $dato=0;
                }
            }else{
               echo 1;
            }
    }else{
        $dato=$_POST['pv_id'];
    }
    
        
        
              
              $daton=$dato+1;  
              $prot->set_pv_id($daton); 
              $info3=$prot->InfoPvires();//consulto el registro
                
        
            if(!empty($info3)){
                    $json= array();
                    $id=$info3[0];
                    $nit=$info3[1]; 
                    $dv=$info3[2]; 
                    $ciiu=$info3[3]; 
                    $razon=$info3[4]; 
                    $tel=$info3[5]; 
                    $otro=$info3[6]; 
                    $cont=$info3[7]; 
                    $dir=$info3[8]; 
                    $ciud=$info3[9];
                    $email=$info3[10];
                    $norete=$info3[11];
                    $grancon=$info3[12];
                    $rteiva=$info3[13];
                    $plazo=$info3[14];

                    
                
                $json = array('pv_id'=>$id,'pv_nit'=>$nit,'pv_dv'=>$dv,'pv_ciiu'=>$ciiu,'pv_razon'=>$razon,'pv_tel'=>$tel,'pv_otro'=>$otro,'pv_cont'=>$cont,'pv_dir'=>$dir,'pv_ciud'=>$ciud,'pv_email'=>$email,'pv_norete'=>$norete,'pv_grancon'=>$grancon,'pv_rteiva'=>$rteiva,'pv_plazo'=>$plazo);

            
            header('Content-Type: application/json');
            $json_string = json_encode($json);
            echo $json_string;
            

                }else{
                    echo 2;
                }
              
   


}  else {
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/index.php');</script>";
}


?>