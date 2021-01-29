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
include_once '../../model/dao/DAOUsuario.php';
include_once '../../model/business/Usuario.php';



    
session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
    $ident =  $_SESSION['usuario']->get_usu_identificacion();

    $bitArtTabla='';
    $bitArticulosTablabs='';
    $bitClientesTablabs='';
    $bitFact ='';
    $nofact=[];
    $ultfact=[];
    $subtot=0;
    $subtotfinal=0;
    $comilla="'";
    $peranul="";
    $usu=new Usuario();
    $usu->set_usu_identificacion($ident);
    $per=$usu->Permisoanulusu();
    if($per[0]==1){
      $peranul="display:block;";  
    }else{
      $peranul="display:none;";  
    }
    $art = new Articulos();
    $arti=$art->ListarArtTodos();
    
    $bitArtTabla='
    <html>
        <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../../view/css/stylesfact.css">
       </head>
       <style>
            .tg{ 
                width: 1200px;
                height: 60px;
                margin-left: 90px;
                background:#E5E6E7;
                border: 1px solid #000138;
                border-radius: 10px;    
                }
                .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
                color: #ffffff;
                background-color: #000138;
                border-color: #000138;
                border-radius: 10px;
            }
            a{
                color:#000138;
            }
            a:hover{
                color:  rgb(8, 107, 173);
            }
            .nav-tabs .nav-link:focus, .nav-tabs .nav-link:hover {
                border-color:#000138;
                border-radius: 10px;
            }
            .dataTables_wrapper .dataTables_filter input{
                border:1px solid gray; 
                border-radius: 10px;
                background:#EFEFEF;
                position: relative;
                height: 30px;
                width: 300px;
                outline: none; 
            }
            .dataTables_wrapper .dataTables_filter input:focus{
               border-color: #000138;
               box-shadow: 0 0 0 0.2rem rgba(0,1,56,.25);
               outline: none;
                    
            }

            .dataTables_wrapper .dataTables_length{
                display:none;
            }
            .inpartcant{
                border:1px solid gray; 
                border-radius: 10px;
                background:#EFEFEF;
                position: relative;
                outline: none; 
            }
            .inpartcant:focus{
                border-color: #000138;
                box-shadow: 0 0 0 0.2rem rgba(0,1,56,.25);
                outline: none;
            }
            .inpartpventa{
                border:1px solid gray; 
                border-radius: 10px;
                background:#EFEFEF;
                position: relative;
                outline: none; 
            }
            .inpartpventa:focus{
                border-color: #000138;
                box-shadow: 0 0 0 0.2rem rgba(0,1,56,.25);
                outline: none;
            }
            @media (max-width: 1500px) { 
                .btncerrar .btnc{
                position: relative;
               right: 25px;
                }
              }
       </style>
       <body>
    <table id="articulos8" class="display" style="width:1140px; color:#000138;">
    <thead>
        <tr>
            <th style="padding-right: 100px;">CODIGO</th>
            <th style="padding-right: 100px;">ARTICULO</th>
            <th style="padding-right: 100px;">CANTIDAD</th>
            <th style="padding-right: 130px;">VR. UNITARIO</th>
            <th >SUBTOTAL</th>
            <th></th>
        </tr>
    </thead>
    <tbody>';
    foreach ($arti as $key => $value) {
        $subtot = $value['art_cantidad'] * $value['art_pventa'];
        $subtotfinal=$subtotfinal+$subtot; 
        $bitArtTabla.='<tr>
                        <td style="text-align: left;">'.$value['art_id'].'</td>
                        <td style="text-align: left;">'.$value['art_nom'].'</td>
                        <td style="text-align: left;">'.$value['art_cantidad'].'</td>
                        <td style="text-align: left;">'.$value['art_pventa'].'</td>
                        <td style="text-align: left;">'.$subtot.'</td>
                        <td style="text-align: center;'.$peranul.'"><button onClick="javascript:DelArti('.$value['art_id'].');" class="btn btn-danger taico"><i class="fas fa-trash" aria-hidden="true"></i></button></td>
                    </tr>';
    }
    $bitArtTabla.='</tbody>
    <tfoot>
        
    </tfoot>
  </table>
  
  <script>
  $("#articulos8").DataTable( {
    "responsive": true,
    "bDestroy": true,
    "cache": false,
    "scrollY":        "1500px",
    "autoWidth": true,
    "scrollCollapse": true,
    "bFilter": false,
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
  echo $bitArtTabla;
}  else {
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/login.php');</script>";
  }