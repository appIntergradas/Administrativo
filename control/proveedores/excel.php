<?php
header('Content-type:application/xls');
header('Content-Disposition: attachment; filename=proveedores.xls');
  include_once '../../generic/Permisos.php';
	include_once '../../generic/config/config.php';
	include_once '../../generic/DB.php';
	include_once '../../model/dao/DAORol.php';
	include_once '../../model/dao/DAOModulosxRol.php';
	include_once '../../model/dao/DAOUsuario.php';
	include_once '../../model/business/Usuario.php';
	include_once '../../model/dao/DAOProveedores.php';
    include_once '../../model/business/Proveedores.php';
	session_start();
	$per = new Permisos();
	if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
	
	$prov=new Proveedores();
    $info=$prov->InfoExcProv();
?>

<table border="1">
	<tr>
		<th style="background-color:blue;">Codigo</th>
		<th style="background-color:blue;">Nombre</th>
		<th style="background-color:blue;">Telefono</th>
		<th style="background-color:blue;">Direccion</th>
		<th style="background-color:blue;">Ciudad</th>
		<th style="background-color:blue;">Correo</th>
	</tr>
	<?php
	     foreach ($info as $key => $value) {		
			?>
				<tr>
					<td><?php echo $value['pv_nit']; ?></td>
					<td><?php echo $value['pv_razon']; ?></td>
					<td><?php echo $value['pv_tel']; ?></td>
					<td><?php echo $value['pv_dir']; ?></td>
					<td><?php echo $value['pv_ciud']; ?></td>
					<td><?php echo $value['pv_email']; ?></td>
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