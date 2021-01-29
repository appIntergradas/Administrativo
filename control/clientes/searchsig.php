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
include_once '../../model/dao/DAOClientes_temp.php';
include_once '../../model/business/Clientes_temp.php';
session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
    $daton=0;
    $info3="";
    $cli=new Clientes();
    $clit=new Clientes_temp();
    $info=array();

    if(empty($_POST['buscar_cl']) && empty($_POST['cl_id'])){
        $clit->VaciarCltemp();//vacimos tabla temporal
        $info=$cli->ListarClientesTodos();//consulto todos los clientes
            if(!empty($info)){// verifico que no este vacia la tabla de clientes
                foreach ($info as $key => $value) {//guardo los clientes en temporal
                    $clit->set_cl_nit($value['cl_nit']);
                    $clit->set_cl_dv($value['cl_dv']);
                    $clit->set_cl_ciiu($value['cl_ciiu']);
                    $clit->set_cl_razon($value['cl_razon']);
                    $clit->set_cl_tel($value['cl_tel']);
                    $clit->set_cl_otro($value['cl_otro']);
                    $clit->set_cl_cont($value['cl_cont']);
                    $clit->set_cl_dir($value['cl_dir']);
                    $clit->set_cl_ciud($value['cl_ciud']);
                    $clit->set_cl_email($value['cl_email']);
                    $clit->set_cl_norete($value['cl_norete']);
                    $clit->set_cl_grancon($value['cl_grancon']);
                    $clit->set_cl_rteiva($value['cl_rteiva']);
                    $clit->set_cl_plazo($value['cl_plazo']);
                    $clit->set_cl_creo($nameuser);
                    $clit->RegistrarCliente();
                    $dato=0;
                }
            }else{
               echo 1;
            }
    }else{
        $dato=$_POST['cl_id'];
    }
    
        
        
              
              $daton=$dato+1;  
              $clit->set_cl_id($daton); 
              $info3=$clit->InfoClires();//consulto el registro
                
        
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

                    
                
                $json = array('cl_id'=>$id,'cl_nit'=>$nit,'cl_dv'=>$dv,'cl_ciiu'=>$ciiu,'cl_razon'=>$razon,'cl_tel'=>$tel,'cl_otro'=>$otro,'cl_cont'=>$cont,'cl_dir'=>$dir,'cl_ciud'=>$ciud,'cl_email'=>$email,'cl_norete'=>$norete,'cl_grancon'=>$grancon,'cl_rteiva'=>$rteiva,'cl_plazo'=>$plazo);

            
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