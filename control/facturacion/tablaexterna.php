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

    
session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
    $ident =  $_SESSION['usuario']->get_usu_identificacion();

    $bitArticulosTabla='';
    $bitArticulosTablabs='';
    $bitClientesTablabs='';
    $bitFact ='';
    $nofact=[];
    $ultfact=[];
    $subtot=0;
    $subtotfinal=0;
    $comilla="'";
    $llamafa="";

    $artt = new Articulos_temp();
    $artt->set_identificacion_usu($ident);
    $articulostm=$artt->ListarArticulosTodostemp();
    
    if(!empty($articulostm)){
      $llamafa="hidden";
    }else{
        $llamafa="visible";
    }

    $bitArticulosTabla='
    <html>
        <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
        <link rel="stylesheet" href="../../view/css/stylesfact.css">
        </head>
       </head>
       <style>
        .dataTables_wrapper .dataTables_length{
        display:block;
        }
        .dataTables_wrapper .dataTables_filter input{
          border: 1px solid #000138;
          background: #EFEFEF;
          border-radius: .25rem; 
        }
        .dataTables_wrapper .dataTables_filter input:focus{
          background:white;
        }
        .dataTables_wrapper .dataTables_filter{
          position:relative;
          left:15px;
          }
          table.dataTable tbody th, table.dataTable tbody td{
            padding:0px 1px;
          }
      </style> 
       <body>
    <table id="articulos2" class="display" style="width:100%">
    <thead>
        <tr>
            <th>CODIGO</th>
            <th>ARTICULO</th>
            <th>CANTIDAD</th>
            <th>VR. UNITARIO</th>
            <th>SUBTOTAL</th>
            <th></th>
        </tr>
    </thead>
    <tbody>';
    foreach ($articulostm as $key => $value) {
      $color1="#EBF0F6";
      $color2="white";
        $subtot = $value['art_cantidad'] * $value['art_pventa'];
        $subtotfinal=$subtotfinal+$subtot; 
        $bitArticulosTabla.='<tr>
                        <td style="text-align: left;">'.$value['art_id'].'</td>
                        <td style="text-align: left;">'.$value['art_nom'].'</td>
                        <td style="text-align: left;"><input type="text" class="inpartcant" name="artcant" id="artcant'.$value['art_id'].'" value="'.$value['art_cantidad'].'" onkeyup="javascript: updateval('.$value['art_id'].');"></td>
                        <td style="text-align: left;"><input type="text" class="inpartpventa" name="artpventa" id="artpventa'.$value['art_id'].'" value="'.$value['art_pventa'].'" onkeyup="javascript: updateval('.$value['art_id'].');"></td>
                        <td style="text-align: left;">'.$subtot.'</td>
                        <td style="text-align: center;"><button onClick="javascript:DelArt('.$value['art_id'].');" class="btn btn-danger taico"><i class="fas fa-trash" aria-hidden="true"></i></button></td>
                    </tr>';
    }
    $bitArticulosTabla.='</tbody>
    <tfoot>
        
    </tfoot>
  </table>
  
  <script>
  $("#articulos2").DataTable( {
                 "bDestroy": true,
                 "bAutoWidth": true,   
                 "bAutoHeight": true,   
                  "responsive": true,
                  "scrollY":        "1500px",
                  "autoWidth": true,
                  "scrollCollapse": true,
                  "pageLength": 5,
                  "bFilter": true,
                  "bLengthChange": false,
                  "paging":  true,
                  "order": [],
                  "ordering": false,
                  "aaSorting": [[]],
                  "sort": false,
                  "orderable": false,       
                  "data-order":false,
                  "bSort": true,   
                  "language": {
                  "lengthMenu": "Mostrar _MENU_ datos por página",
                  "zeroRecords": "No se ha encontrado ningun registro",
                  "info": "Mostrando página _PAGE_ de _PAGES_",
                  "infoEmpty": "No hay registros disponibles",
                  "infoFiltered": "(filtrado de _MAX_ registros totales)",
                  "search": "BUSCAR:",
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
  echo $bitArticulosTabla;
}  else {
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/login.php');</script>";
  }