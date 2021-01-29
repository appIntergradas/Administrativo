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
include_once '../../model/dao/DAOArticulos_temp.php';
include_once '../../model/business/Articulos_temp.php';
include_once '../../model/dao/DAOClientes.php';
include_once '../../model/business/Clientes.php';
include_once '../../model/dao/DAODetallefactu_temp.php';
include_once '../../model/business/Detallefactu_temp.php';
include_once '../../model/dao/DAODetallefactu.php';
include_once '../../model/business/Detallefactu.php';
include_once '../../model/dao/DAOEncabezadofactu.php';
include_once '../../model/business/Encabezadofactu.php';

    
session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
    $ident =  $_SESSION['usuario']->get_usu_identificacion();
    $bitArticulosTablanul='';
    $color="#000138";
    $va='';
    $borrarVisibility="";
    $enca=new Encabezadofactu();
    $enca->set_nom_enca_vendedor($nameuser);
    $facturas=$enca->ConsulUltfacturasvende();
    
        $bitArticulosTablanul='
        <html>
        <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
        <link rel="stylesheet" href="../../view/css/stylesfact.css">
        </head>
       </head>
       <body>
       <table id="facturas2" class="display" style="width:100%">
       <thead>
           <tr>
               <th>#FACTURA</th>
               <th>CLIENTE</th>
               <th>FECHA</th>
               <th>VENDEDOR</th>
               <th>SUBTOTAL</th>
               <th>TOTAL</th>
               <th></th>
           </tr>
       </thead>
       <tbody>';
       foreach ($facturas as $key => $value) {
        $va=$value['subtota_enca'];
        if($va == 0.00){
            $color="red";
            $borrarVisibility="display:none;";
        }else{
            $color="#000138";
            $borrarVisibility="display:block;";
        }
      $bitArticulosTablanul.='<tr>
                        <td style="text-align: left;color:'.$color.';">'.$value['num_enca_fact'].'</td>
                        <td style="text-align: left;">'.$value['nom_enca_cl'].'</td>
                        <td style="text-align: left;">'.$value['fecha_enca_fact'].'</td>
                        <td style="text-align: left;">'.$value['nom_enca_vendedor'].'</td>
                        <td style="text-align: left;">'.$value['subtota_enca'].'</td>
                        <td style="text-align: left;">'.$value['total_enca'].'</td>
                        <td style="text-align: center;"><button  style="'.$borrarVisibility.'" onClick="javascript:Showmodalanul('.$value['num_enca_fact'].');" class="btn btn-danger"><i class="fas fa-trash" aria-hidden="true"></i></button></td>
                        </tr>';
       }
       $bitArticulosTablanul.='</tbody>
        <tfoot>
        </tfoot>
        </table>
        <script>
        $("#facturas2").DataTable( {
                        responsive: true,
                        "scrollY":        "1500px",
                        "autoWidth": true,
                        "scrollCollapse": true,
                        "pageLength": 5,
                        "bFilter": true,
                        "paging":         true,
                        "order": [[ 1, "asc"]],
                        "language": {
                        "lengthMenu": "Mostrar _MENU_ datos por página",
                        "zeroRecords": "No se ha encontrado ningun registro",
                        "info": "Mostrando página _PAGE_ de _PAGES_",
                        "infoEmpty": "No hay registros disponibles",
                        "infoFiltered": "(filtrado de _MAX_ registros totales)",
                        "search": "Buscar:",
                        "paginate": {
                        "first":      "Inicio",
                        "last":       "Final",
                        "next":       "Siguiente",
                        "previous":   "Anterior"
                        },
                        "loadingRecords": "Cargando..."
                        }
                        }); 
        </script>
        </body>
        </html>';
            
    
            echo $bitArticulosTablanul;
           
    
}  else {
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/login.php');</script>";
  }