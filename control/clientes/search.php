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

    $cli=new Clientes();
    $clit=new Clientes_temp();
    $info=array();
    if(isset($_POST['buscar_cl'])){
        $dato=$_POST['buscar_cl'];
        
        //vaciamos temp
        $clit->VaciarCltemp();
        

        $cli->set_cl_nit($dato);
        $cli->set_cl_razon($dato);
        $info=$cli->InfoClbusqueda();
        
        if(!empty($info)){
            foreach ($info as $key => $value4) {
                //guardo clientes en temp
                $clit->set_cl_nit($value4['cl_nit']);
                $clit->set_cl_dv($value4['cl_dv']);
                $clit->set_cl_ciiu($value4['cl_ciiu']);
                $clit->set_cl_razon($value4['cl_razon']);
                $clit->set_cl_tel($value4['cl_tel']);
                $clit->set_cl_otro($value4['cl_otro']);
                $clit->set_cl_cont($value4['cl_cont']);
                $clit->set_cl_dir($value4['cl_dir']);
                $clit->set_cl_ciud($value4['cl_ciud']);
                $clit->set_cl_email($value4['cl_email']);
                $clit->set_cl_norete($value4['cl_norete']);
                $clit->set_cl_grancon($value4['cl_grancon']);
                $clit->set_cl_rteiva($value4['cl_rteiva']);
                $clit->set_cl_plazo($value4['cl_plazo']);
                $clit->set_cl_creo($nameuser);
                if(($clit->RegistrarCliente())==false){
                    echo 1;
                }
            } 
            $clit->set_cl_id(1); 
            $info2=$clit->InfoClires();//consulto el primer registro
            if(!empty($info2)){
                $json= array();
                $id=$info2[0];
                $nit=$info2[1]; 
                $dv=$info2[2]; 
                $ciiu=$info2[3]; 
                $razon=$info2[4]; 
                $tel=$info2[5]; 
                $otro=$info2[6]; 
                $cont=$info2[7]; 
                $dir=$info2[8]; 
                $ciud=$info2[9];
                $email=$info2[10];
                $norete=$info2[11];
                $grancon=$info2[12];
                $rteiva=$info2[13];
                $plazo=$info2[14];

                
             
            $json = array('cl_id'=>$id,'cl_nit'=>$nit,'cl_dv'=>$dv,'cl_ciiu'=>$ciiu,'cl_razon'=>$razon,'cl_tel'=>$tel,'cl_otro'=>$otro,'cl_cont'=>$cont,'cl_dir'=>$dir,'cl_ciud'=>$ciud,'cl_email'=>$email,'cl_norete'=>$norete,'cl_grancon'=>$grancon,'cl_rteiva'=>$rteiva,'cl_plazo'=>$plazo);

           
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