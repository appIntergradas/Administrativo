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
session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();

    $art = new Articulos();
    $info=[];
    $subtotart=0;
    $subt=0;
    if(isset($_POST['bus_codi'])){
        $dato=$_POST['bus_codi'];
        
        
        $art->set_art_id($dato);
        $info=$art->InfoArticulos();
        
        if(!empty($info)){
            $json= array();
                $artnom=$info[2]; 
                $artcant=$info[3]; 
                $artvalorv=$info[5];
                $info[0]=$info[0] * $info[0]; 
                $subtotart = $info[3] * $info[5];   
                $subt=number_format($subtotart,  2,".",".");
                

                
             
            $json = array('art_nom'=>$artnom,'art_cantidad'=>$artcant,'art_pventa'=>$artvalorv,'subt_art'=>$subt);

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