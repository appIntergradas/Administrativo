<?php
date_default_timezone_set('America/Bogota');
$date=strftime("%A %d de %B del %Y");
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
    $salida='';
    //$cli=new Clientes();
    //$clexp=array();
    $part=1;
    $start=0;
    //$clexp=$cli->ListarClientesTodos();
    $DB_Server = SERVER; //"localhost"; // MySQL Server
    $DB_Username = USER; // MySQL Username
    $DB_Password = PASSWD; // MySQL Password
    $DB_DBName = DATABASE; // MySQL Database Name
    $DB_TBLName = "clientes"; // MySQL Table Name
    $xls_filename = 'clientes_'.date('d-m-Y').' part'.$part.'.xls'; // Define Excel (.xls) file name
    
     /***** DO NOT EDIT BELOW LINES *****/
    // Create MySQL connection
    $sql = "SELECT 
    cl_nit NIT,
    cl_razon NOMBRE,
    cl_tel TELEFONO,
    cl_dir DIRECCION,
    cl_ciud CIUDAD,
    cl_mail CORREO,
    FROM 
    clientes LIMIT ".$start.",1048570";
    $Connect = @mysqli_connect($DB_Server, $DB_Username, $DB_Password) or die("Failed to connect to MySQL:<br />" . mysqli_error() . "<br />" . mysqli_errno());
    // Select database
    $Db = @mysqli_select_db($DB_DBName, $Connect) or die("Failed to select database:<br />" . mysqli_error($Connect). "<br />" . mysqli_errno($Connect));
    // Execute query
    $result = @mysqli_query($sql,$Connect) or die("Failed to execute query:<br />" . mysqli_error($Connect). "<br />" . mysqli_errno($Connect));

    // Header info settings
    /*header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename=$xls_filename");
    header("Pragma: no-cache");
    header("Expires: 0");*/
    
    header("Content-Description: PHP Generated Data");
    header("Content-Type: application/x-msexcel");
    header("Content-Disposition: attachment; filename=\"{$xls_filename}\"");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Pragma: no-cache");
    
    /*header("Content-type: text/csv");
    header("Content-Disposition: attachment; filename=file.csv");
    header("Pragma: no-cache");
    header("Expires: 0");*/

    /***** Start of Formatting for Excel *****/
    // Define separator (defines columns in excel &amp; tabs in word)
    $sep = "\t"; // tabbed character

    // Start of printing column names as names of MySQL fields
    for ($i = 0; $i<mysqli_num_fields($result); $i++) {
      echo mysqli_field_name($result, $i) . "\t";
    }
    print("\n");
    // End of printing column names

    // Start while loop to get data
    while($row = mysqli_fetch_row($result))
    {
      $schema_insert = "";
      for($j=0; $j<mysqli_num_fields($result); $j++)
      {
        if(!isset($row[$j])) {
          $schema_insert .= "NULL".$sep;
        }
        elseif ($row[$j] != "") {
          $schema_insert .= "$row[$j]".$sep;
        }
        else {
          $schema_insert .= "".$sep;
        }
      }
      $schema_insert = str_replace($sep."$", "", $schema_insert);
      $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
      $schema_insert .= "\t";
      print(trim($schema_insert));
      print "\n";
      //echo $start;
    }


}else{
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/index.php');</script>";
}
?>

