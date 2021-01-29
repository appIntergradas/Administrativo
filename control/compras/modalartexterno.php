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
include_once '../../model/dao/DAOClientes.php';
include_once '../../model/business/Clientes.php';

    $bitArticulosTabla='';
    $bitArticulosTablabs='';
    $bitClientesTablabs='';
    $bitFact ='';
    $nofact=[];
    $ultfact=[];
    $subtot=0;
    $subtotfinal=0;
    $comilla="'";

    $art=new Articulos();
    $articulos=$art->ListarArticulosTodos();
    $bitArticulosTablabs='
    <html>
        <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
        <link rel="stylesheet" href="../../view/css/stylesfact.css">
        </head>
       </head>
       <style>
       input[type=number] { -moz-appearance:textfield; }
      .dataTables_wrapper .dataTables_length{
        display:none;
      }
      .dataTables_wrapper .dataTables_filter input{
        border: 1px solid #000138;
        background: #EFEFEF;
        border-radius: .25rem; 
        position:relative;
        right:12px;
      }
      .dataTables_wrapper .dataTables_filter input:focus{
        background:white;
      }
      </style>  
       <body>
       <table id="articulosbs2" class="display" style="width:100%">
       <thead>
         <tr>
             <th>CODIGO</th>
             <th>REFERENCIA</th>
             <th>NOMBRE</th>
             <th></th>
         </tr>
       </thead>
        <tbody>';
    foreach ($articulos as $key => $value) {
        $bitArticulosTablabs.='<tr>
                                <td style="text-align: left;">'.$value['art_id'].'</td>
                                <td style="text-align: left;">'.$value['art_referencia'].'</td>
                                <td style="text-align: left;">'.$value['art_nom'].'</td>
                                <td style="text-align: center;"><input type="radio" name="articulosbs" value="'.$value['art_id'].'"></td>
                              </tr>';
    }
    $bitArticulosTablabs.='</tbody>
    <tfoot>
        
    </tfoot>
  </table>
  <script>
 var table= $("#articulosbs2").DataTable( {
                  responsive: true,
                  "scrollY":        "1500px",
                  "autoWidth": true,
                  "ordering": false,
                  "scrollCollapse": true,
                  "pageLength": 5,
                  "paging": true,
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
                 
                  $("#articulosbs2 tbody").on("click", "tr", function(){
                     var data = table.row( this ).data();
                     $(this).find("td input[type=radio]").prop("checked", true);
                   });


</script>
  </body>
  </html>';
  echo $bitArticulosTablabs;