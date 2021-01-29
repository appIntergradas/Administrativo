<?php
header('Content-type:application/xls');
header('Content-Disposition: attachment; filename=clientes.xls');
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
      $info=$cli->InfoExcClie();
?>

<table border="1">
	<tr>
		<th style="background-color:red;">Codigo</th>
		<th style="background-color:red;">Nombre</th>
		<th style="background-color:red;">Telefono</th>
		<th style="background-color:red;">Direccion</th>
		<th style="background-color:red;">Ciudad</th>
		<th style="background-color:red;">Correo</th>
	</tr>
	<?php
	     foreach ($info as $key => $value) {		
			?>
				<tr>
					<td><?php echo $value['cl_nit']; ?></td>
					<td><?php echo $value['cl_razon']; ?></td>
					<td><?php echo $value['cl_tel']; ?></td>
					<td><?php echo $value['cl_dir']; ?></td>
					<td><?php echo $value['cl_ciud']; ?></td>
					<td><?php echo $value['cl_email']; ?></td>
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