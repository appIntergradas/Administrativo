<?php
header('Content-type:application/xls');
header('Content-Disposition: attachment; filename=usuarios.xls');
  include_once '../../generic/Permisos.php';
	include_once '../../generic/config/config.php';
	include_once '../../generic/DB.php';
	include_once '../../model/dao/DAORol.php';
	include_once '../../model/dao/DAOModulosxRol.php';
	include_once '../../model/dao/DAOUsuario.php';
	include_once '../../model/business/Usuario.php';
	
	session_start();
	$per = new Permisos();
	if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
	
	$usu=new Usuario();
    $info=$usu->InfoExcUser();
?>

<table border="1">
	<tr>
		<th style="background-color:green;">Identificacion</th>
		<th style="background-color:green;">Nombre</th>
		<th style="background-color:green;">Apellido</th>
		<th style="background-color:green;">Login</th>
		<th style="background-color:green;">Correo</th>
	</tr>
	<?php
	     foreach ($info as $key => $value) {		
			?>
				<tr>
					<td><?php echo $value['usu_identificacion']; ?></td>
					<td><?php echo $value['usu_nombre']; ?></td>
					<td><?php echo $value['usu_apellidos']; ?></td>
					<td><?php echo $value['usu_login']; ?></td>
					<td><?php echo $value['usu_mail']; ?></td>
				</tr>	

			<?php
		}
	?>
</table>
<?php

}else{
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/index.php');</script>";
}
?>