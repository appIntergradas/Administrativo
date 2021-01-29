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
session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();

    $cli=new Clientes();
    $info=array();
    if(isset($_POST['bus_cl2'])){
        $dato=$_POST['bus_cl2'];
        
        
        $cli->set_cl_nit($dato);
        $info=$cli->InfoClientes();
        
        if(!empty($info)){
            $json= array();
                $nit=$info[1]; 
                $razon=$info[4]; 
                $tel=$info[5]; 
                $dir=$info[8]; 
                $pla=$info[14]; 
                

                
             
            $json = array('cl_nit'=>$nit,'cl_razon'=>$razon,'cl_tel'=>$tel,'cl_dir'=>$dir,'cl_plazo'=>$pla);

           //echo 4;
         header('Content-Type: application/json');
         $json_string = json_encode($json);
          echo $json_string;
         
            
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