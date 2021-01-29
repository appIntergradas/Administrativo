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
include_once '../../model/dao/DAOEncabezadofactu.php';
include_once '../../model/business/Encabezadofactu.php';
include_once '../../model/dao/DAOFacturb.php';
include_once '../../model/business/Facturb.php';
include_once '../../model/dao/DAORecibopagar_temp.php';
include_once '../../model/business/Recibopagar_temp.php';


    
session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
    $ident =  $_SESSION['usuario']->get_usu_identificacion();

    $bitFactTablarb='';
    $totalfinal=0;
    $recipat = new Recibopagarb_temp();
    $ftrb = new Facturb();

    
    //$recipat->VaciarRecipago();
    $facture=$ftrb->ListarFactureciboTodos();
                 
    
  

    $bitFactTablarb='
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
        display:none;
        }
      </style> 
       <body>
    <table id="factrb2" class="display" style="width:100%">
    <thead>
        <tr>
          <th>FACTURA</th>
          <th>VALOR</th>
        </tr>
    </thead>
    <tbody>';
    foreach ($facture as $key => $value3) {
      $totalfinal=$totalfinal+$value3['valor'];
      $bitFactTablarb.='<tr>
                      <td style="text-align: left;">'.$value3['nfact'].'</td>
                      <td style="text-align: left;">'.$value3['valor'].'</td>
                      </tr>';
    }
    $bitFactTablarb.='</tbody>
    <tfoot>
        
    </tfoot>
  </table>
  
  <script>
  var table2=$("#factrb2").DataTable( {
                  responsive: true,
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
                  "search": "",
                  "paginate": {
                  "first":      "Inicio",
                  "last":       "Final",
                  "next":       "Siguiente",
                  "previous":   "Anterior"
                  },
                  "loadingRecords": "Cargando..."
                  }
                  }); 
                  $("#factrb2 tbody").on("click", "tr", function(){
                      var data = table2.row( this ).data();
                      var nufa=data[0];
                      var vafa=data[1];
                      $(".contenedor-tabla-factapagarb").load("../../control/recibos/tablaexterna2.php?nufa="+nufa+"&vafa="+vafa);
                      $(".input-total-rb").load("../../control/recibos/inputtotalexterno.php");
                      table2.row().remove();                          
                      table2.row().draw();                          
                   });
</script>
  </body>
  </html>';
  echo $bitFactTablarb;
}  else {
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/login.php');</script>";
  }