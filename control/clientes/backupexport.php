<?php

setlocale(LC_ALL,"es_ES@euro","es_ES","esp","es");
date_default_timezone_set('America/Bogota');
$date=strftime("%A %d de %B del %Y");
    include_once '../../generic/Permisos.php';
    include_once '../../generic/config/config.php';
    include_once '../../generic/DB.php';
    include_once '../../model/dao/DAOImport.php';
    include_once '../../model/business/Import.php';   
    include_once '../../model/dao/DAOExport.php';
    include_once '../../model/business/Export.php'; 
    include_once '../../model/dao/DAOUsuario.php';
    include_once '../../model/business/Usuario.php';
    include_once '../../model/dao/DAOLog.php';
    include_once '../../model/business/Log.php';
    
session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),10)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();  
    $roluser = $_SESSION['usuario']->get_rol_id();
    $login=$_SESSION['usuario']->get_usu_user();
    $date='';
    $start=0;
    $part=1;
    if($_GET['qty']){
        $start=$_GET['qty'];
    }
    if($start!=0){
        $part=2;
    }

    // create a simple 2-dimensional array
    $exp=new Export();
    $total=$exp->ContarRegistros();
    $div=$total[0] / 60000;
    $qty1=1;
    $qty2=60000;
    $output='';

    $DB_Server = SERVER; //"localhost"; // MySQL Server
    $DB_Username = USER; // MySQL Username
    $DB_Password = PASSWD; // MySQL Password
    $DB_DBName = DATABASE; // MySQL Database Name
    $DB_TBLName = "clientes"; // MySQL Table Name
    $xls_filename = 'backupSOCA_'.date('d-m-Y').' part'.$part.'.xls'; // Define Excel (.xls) file name

    /***** DO NOT EDIT BELOW LINES *****/
    // Create MySQL connection
    $sql = "SELECT 
    cli_nit NIT,
    cli_nombre NOMBRE,
    cli_ciudad CIUDAD,
    cli_dir1 DIRECCION1,
    cli_dir2 DIRECCION2,
    cli_mail1 CORREO1,
    cli_mail2 CORREO2,
    cli_tel1 TELEFONO1,
    cli_tel2 TELEFONO2,
    cli_tel3 TELEFONO3,
    cli_tel4 TELEFONO4,
    cli_tel5 TELEFONO5,
    cli_tel6 TELEFONO6,
    cli_tel7 TELEFONO7,
    cli_tel8 TELEFONO8,
    cli_tel9 TELEFONO9,
    cli_tel10 TELEFONO10,
    cli_cel1 CELULAR1,
    cli_cel2 CELULAR2,
    cli_cel3 CELULAR3,
    cli_cel4 CELULAR4,
    cli_cel5 CELULAR5,
    cli_cel6 CELULAR6,
    cli_cel7 CELULAR7,
    cli_cel8 CELULAR8,
    cli_cel9 CELULAR9,
    cli_cel10 CELULAR10 
    FROM 
    clientes LIMIT ".$start.",1048570";
    $Connect = @mysql_connect($DB_Server, $DB_Username, $DB_Password) or die("Failed to connect to MySQL:<br />" . mysql_error() . "<br />" . mysql_errno());
    // Select database
    $Db = @mysql_select_db($DB_DBName, $Connect) or die("Failed to select database:<br />" . mysql_error(). "<br />" . mysql_errno());
    // Execute query
    $result = @mysql_query($sql,$Connect) or die("Failed to execute query:<br />" . mysql_error(). "<br />" . mysql_errno());

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
    for ($i = 0; $i<mysql_num_fields($result); $i++) {
      echo mysql_field_name($result, $i) . "\t";
    }
    print("\n");
    // End of printing column names

    // Start while loop to get data
    while($row = mysql_fetch_row($result))
    {
      $schema_insert = "";
      for($j=0; $j<mysql_num_fields($result); $j++)
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
    //echo "<script languaje='javascript'>alert('La copia de seguridad se ha realizado con exito!'); window.location = ('../../controller/start/admin.php');</script>";
}  else {
   echo "<script languaje='javascript'>alert('[ERROR!] Usted no posee permisos suficientes para ingresar a esta página.'); window.location = ('../../controller/start/login.php');</script>";
}
