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
    $info='';
    $usu=new Usuario();
    $usut=new Usuario_temp();
    $info=array();
    if(isset($_POST['buscar_usu'])){
        $dato=$_POST['buscar_usu'];

        //vaciamos temp
        $usut->VaciarUstemp();
        
        
        $usu->set_usu_login($dato);
        $usu->set_usu_identificacion($dato);
        $info=$usu->InfoUsbusqueda();

    if(!empty($info)){
            foreach ($info as $key => $value5) {
                //guardo usuarios en temp
                $usut->set_usu_identificacion($value5['usu_identificacion']);
                $usut->set_usu_nombre($value5['usu_nombre']);
                $usut->set_usu_apellidos($value5['usu_apellidos']);
                $usut->set_usu_login($value5['usu_login']);
                $usut->set_usu_passwd($value5['usu_passwd']);
                $usut->set_rol_codigo($value5['rol_codigo']);
                $usut->set_usu_mail($value5['usu_mail']);
                $usut->set_permiso_anular($value5['permiso_anular']);
                $usut->set_usu_estado($value5['usu_estado']);
                if(($usut->RegistrarUsuario())==false){
                    echo 1;
                }
            }   
            $usut->set_usu_codigo(1); 
            $info2=$usut->InfoUsures();//consulto el primer registro
            if(!empty($info2)){
                $json= array();
                $cod=$info2[0]; 
                $ide=$info2[1]; 
                $nom=$info2[2]; 
                $ape=$info2[3]; 
                $log=$info2[4]; 
                $pas=$info2[5]; 
                $rol=$info2[6]; 
                $est=$info2[7]; 
                $mai=$info2[8];
                $anu=$info2[13];

                $json = array('usu_codigo'=>$cod,'usu_identificacion'=>$ide,'usu_nombre'=>$nom,'usu_apellidos'=>$ape,'usu_login'=>$log,'usu_passwd'=>$pas,'rol_codigo'=>$rol,'usu_estado'=>$est,'usu_mail'=>$mai,'usu_anul'=>$anu);
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


}else {
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/index.php');</script>";
}


?>


