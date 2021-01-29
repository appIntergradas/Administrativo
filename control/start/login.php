<?php
  
    include_once '../../generic/config/config.php';
    include_once '../../generic/DB.php';
    include_once '../../model/dao/DAORol.php';
    include_once '../../model/dao/DAOModulosxRol.php';
    include_once '../../model/dao/DAOUsuario.php';    
    include_once '../../model/business/Usuario.php';
    

    
    if(isset($_POST['btn-login-entrar'])!=''){
        $mensaje2="";
        $usu="";
        $usuario = new Usuario();
        $usuario->set_usu_login($_POST['login-user']);
        $usuario->set_usu_passwd($_POST['login-pass']);
        
	if(@$usuario->IniciarSesion()){
            header('Location: ../../control/start/');
            exit();
        }else{
            echo "<script languaje='javascript'>alert('[ERROR!] Invalid username or password.'); window.location = ('../../control/start/login.php');</script>";
        }
   }
    include_once("../../view/start/login.php");
?>
