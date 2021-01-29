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

    $prov=new Proveedores();
    $provt=new Proveedores_temp();
    $info11=array();
    if(isset($_POST['buscar_pv'])){
        $dato=$_POST['buscar_pv'];
        //vaciamos temp
        $provt->VaciarPvtemp();
        
        $prov->set_pv_nit($dato);
        $prov->set_pv_razon($dato);
        $info11=$prov->InfoPvbusqueda();

        
        
        if(!empty($info11)){
            foreach ($info11 as $key => $value5) {
                //guardo proveedores en temp
                $provt->set_pv_nit($value5['pv_nit']);
                $provt->set_pv_dv($value5['pv_dv']);
                $provt->set_pv_ciiu($value5['pv_ciiu']);
                $provt->set_pv_razon($value5['pv_razon']);
                $provt->set_pv_tel($value5['pv_tel']);
                $provt->set_pv_otro($value5['pv_otro']);
                $provt->set_pv_cont($value5['pv_cont']);
                $provt->set_pv_dir($value5['pv_dir']);
                $provt->set_pv_ciud($value5['pv_ciud']);
                $provt->set_pv_email($value5['pv_email']);
                $provt->set_pv_norete($value5['pv_norete']);
                $provt->set_pv_grancon($value5['pv_grancon']);
                $provt->set_pv_rteiva($value5['pv_rteiva']);
                $provt->set_pv_plazo($value5['pv_plazo']);
                if(($provt->RegistrarProve())==false){
                    echo 1;
                }
            } 
            $provt->set_pv_id(1); 
            $info12=$provt->InfoPvires();//consulto el primer registro
            if(!empty($info12)){
                $json= array();
                $id=$info12[0];
                $nit=$info12[1]; 
                $dv=$info12[2]; 
                $ciiu=$info12[3]; 
                $razon=$info12[4]; 
                $tel=$info12[5]; 
                $otro=$info12[6]; 
                $cont=$info12[7]; 
                $dir=$info12[8]; 
                $ciud=$info12[9];
                $email=$info12[10];
                $norete=$info12[11];
                $grancon=$info12[12];
                $rteiva=$info12[13];
                $plazo=$info12[14];

                
             
            $json = array('pv_id'=>$id,'pv_nit'=>$nit,'pv_dv'=>$dv,'pv_ciiu'=>$ciiu,'pv_razon'=>$razon,'pv_tel'=>$tel,'pv_otro'=>$otro,'pv_cont'=>$cont,'pv_dir'=>$dir,'pv_ciud'=>$ciud,'pv_email'=>$email,'pv_norete'=>$norete,'pv_grancon'=>$grancon,'pv_rteiva'=>$rteiva,'pv_plazo'=>$plazo);
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


