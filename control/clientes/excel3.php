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
    $DBServer ='127.0.0.1';
    // $DB_Server = SERVER; //"localhost"; // MySQL Server
    $DBUsername ='root';
    //$DB_Username = USER; // MySQL Username
    $DBPassword ='';
    //$DB_Password = PASSWD; // MySQL Password
    $DBDBName ='prueba';
    //$DB_DBName = DATABASE; // MySQL Database Name
    $xls_filename = 'clientes_'.date('d-m-Y').' part'.$part.'.xls'; // Define Excel (.xls) file name
    
     /***** DO NOT EDIT BELOW LINES *****/
    // Create MySQL connection
    $sql = "SELECT cl_nit,cl_razon,cl_tel,cl_dir,cl_ciud,cl_email FROM clientes";
        $Connect =mysqli_connect($DBServer, $DBUsername, $DBPassword,$DBDBName) or die("Failed to connect to MySQL:<br />" . mysqli_error() . "<br />" . mysqli_errno());
        $Db =mysqli_select_db($Connect,$DBDBName) or die("Failed to select database:<br />" . mysqli_error($Connect). "<br />" . mysqli_errno($Connect));
        $result =mysqli_query($Connect,$sql) or die("Failed to execute query:<br />" . mysqli_error($Connect). "<br />" . mysqli_errno($Connect));   
          
    header("Content-Description: PHP Generated Data");
    header("Content-Type: application/x-msexcel");
    header("Content-Disposition: attachment; filename=\"{$xls_filename}\"");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Pragma: no-cache");
    

    /***** Formato Excel *****/
    // Define separator (defines columns in excel &amp; tabs in word)
    $sep = "\t"; // tabbed character

    // Start of printing column names as names of MySQL fields
    for ($i = 0; $i<mysqli_num_fields($result); $i++) {//devuelve un numero de columnas
      //echo mysqli_field_name($result, $i) . "\t";
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
function mysqli_field_name($result, $field_offset)
{
    $properties = mysqli_fetch_field_direct($result, $field_offset);
    return is_object($properties) ? $properties->name : null;
}
?>

