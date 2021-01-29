<?php
header('Content-type:application/vnd.ms-excel');
header('Content-Disposition: attachment; filename=articulos.xls');
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Pragma: no-cache");
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
      $info=$art->InfoExcArti();
?>

<table border="1">
	<tr>
		<th style="background-color:orange;">Codigo</th>
		<th style="background-color:orange;">Nombre</th>
		<th style="background-color:orange;">Referenica</th>
		<th style="background-color:orange;">Cantidad</th>
		<th style="background-color:orange;">Precio Costo</th>
		<th style="background-color:orange;">Precio Venta</th>
	</tr>
	<?php
	     foreach ($info as $key => $value) {		
			?>
				<tr>
					<td><?php echo $value['art_id']; ?></td>
					<td><?php echo $value['art_nom']; ?></td>
					<td><?php echo $value['art_referencia']; ?></td>
					<td><?php echo $value['art_cantidad']; ?></td>
					<td><?php echo $value['art_pcosto']; ?></td>
					<td><?php echo $value['art_pventa']; ?></td>
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