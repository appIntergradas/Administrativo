<?php
include_once '../../generic/Permisos.php';
include_once '../../generic/config/config.php';
include_once '../../generic/DB.php';
include_once '../../model/dao/DAORol.php';
include_once '../../model/dao/DAOModulosxRol.php';
include_once '../../model/dao/DAOUsuario.php';
include_once '../../model/business/Usuario.php';
include_once '../../model/dao/DAOUsuario_temp.php';
include_once '../../model/business/Usuario_temp.php';
session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
    $daton=0;
    $ca=0;
    $info4="";
    $usu=new Usuario();
    $usut=new Usuario_temp();
    $info=array();
   
    if(empty($_POST['buscar_usu']) && empty($_POST['us_id'])){
        $usut->VaciarUstemp();//vacimos tabla temporal
        $info=$usu->ListarUsuariosTodos();//consulto todos los usuarios
            if(!empty($info)){// verifico que no este vacia la consulta
                foreach ($info as $key => $value3) {//guardo los usuarios en temporal
                    $usut->set_usu_identificacion($value3['usu_identificacion']);
                    $usut->set_usu_nombre($value3['usu_nombre']);
                    $usut->set_usu_apellidos($value3['usu_apellidos']);
                    $usut->set_usu_login($value3['usu_login']);
                    $usut->set_usu_passwd($value3['usu_passwd']);
                    $usut->set_rol_codigo($value3['rol_codigo']);
                    $usut->set_usu_estado($value3['usu_estado']);
                    $usut->set_usu_mail($value3['usu_mail']);
                    $usut->set_permiso_anular($value3['permiso_anular']);
                    $usut->RegistrarUsuario();
                    $daton=$daton+1;
                }
            }else{
               echo 1;
            }
    }else{
        $ca=$_POST['us_id'];
        $daton=$ca-1;
    }
    
          
              $usut->set_usu_codigo($daton); 
              $info4=$usut->InfoUsures();//consulto el registro
                
        
            if(!empty($info4)){
                    $json= array();
                    $cod=$info4[0]; 
                    $ide=$info4[1]; 
                    $nom=$info4[2]; 
                    $ape=$info4[3]; 
                    $log=$info4[4]; 
                    $pas=$info4[5]; 
                    $rol=$info4[6]; 
                    $est=$info4[7]; 
                    $mai=$info4[8];
                    $anu=$info4[13];

                    
                
                    $json = array('usu_codigo'=>$cod,'usu_identificacion'=>$ide,'usu_nombre'=>$nom,'usu_apellidos'=>$ape,'usu_login'=>$log,'usu_passwd'=>$pas,'rol_codigo'=>$rol,'usu_estado'=>$est,'usu_mail'=>$mai,'usu_anul'=>$anu);

            
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