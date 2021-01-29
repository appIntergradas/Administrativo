<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../../view/css/styleimpfact.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
</head>
<div class="contenedor-datos8  col-xl-11 col-lg-11">
<div class="row">
      <div class="titulo7 col-xl-12">
        <h4>Factura <?= $fact ?></h4>
      </div>
      <div class="btncerrarf">
          <input type="button" class="btn btn-outline-danger btncf" id="btn-cerrar" name="btn-cerrar" value="X" onclick="javascript:Cerrarvistaftimpri();">
      </div>
</div>
 <div class="row fila" id="tbprincipal">
  <div class="contenedor-tabla-facturas col-xl-12">
  <table id="facturasimp" class="table table-striped table-bordered table-imp-gene">
  <thead>
        <tr class="conte1">
            <td style= "width:40%;border:1px solid white;"></td>
            <td style= "width:20%;border:1px solid white;"></td>
            <td style= "width:15%;border:1px solid white;"></td>
            <td style= "width:10%;border:1px solid white;"></td>
            <td style= "width:15%;border:1px solid white;"><div class="logo-imp" id="logo-impfact"><img src="../../view/img/indusesgos.jpg" ></div></td>
        </tr>  
</thead>
<tbody>
    <div > 
        <tr >
            <td style= "border-right:1px solid white;border-radius:10px 0px 0px 0px;border-bottom:1px solid white;"><div >Indusesgos S.A.S</div><div>Oscar Correa</div></td>
            <td style= "border-left:1px solid white;border-right:1px solid white;border-bottom:1px solid white;"></td>
            <td style= "border-radius:0px 10px 0px 0px;border-left:1px solid white;border-bottom:1px solid white;"></td>
            <td style= "border-left:1px solid white;border-top:1px solid white;border-bottom:1px solid white;border-right:1px solid white;"></td>
            <td style= "border-radius:10px 10px 0px 0px;border-bottom:1px solid white;">FACTURA DE VENTA</td>
        </tr>      
        <tr>
            <td style= "border-right:1px solid white;border-top:1px solid white;border-bottom:1px solid white;"><div>NIT: 900688208 </div></td>
            <td style= "border-right:1px solid white;border-left:1px solid white;border-top:1px solid white;border-bottom:1px solid white;">Responsable de iva</td>
            <td style= "border-left:1px solid white;border-top:1px solid white;border-bottom:1px solid white;">CIIU 4631</td>
            <td style= "border-top:1px solid white;border-bottom:1px solid white;border-left:1px solid white;border-right:1px solid white;"></td>
            <td style= "border-top:1px solid white;border-bottom:1px solid white;"> ELECTRONICA</td>
        </tr>
        <tr>
            <td style= "border-right:1px solid white;border-top:1px solid white;border-bottom:1px solid white;"><div>DIR: CRR 72 No. 28-13  </div></td>
            <td style= "border-right:1px solid white;border-left:1px solid white;border-top:1px solid white;border-bottom:1px solid white;"></td>
            <td style= "border-left:1px solid white;border-top:1px solid white;border-bottom:1px solid white;">Tel: 6129955</td>
            <td style= "border:1px solid white;"></td>
            <td style= "border-top:1px solid white;border-radius:0px 0px 10px 10px;">No. MED <?= $fact ?> </td>
        </tr>
        <tr>
            <td style= "border-right:1px solid white;border-top:1px solid white;border-radius:0px 0px 0px 10px;">Factura realizada por computador desarrollado por SO Aplicaciones Integradas NIT 1036688540-0</td>
            <td style= "border-right:1px solid white;border-left:1px solid white;border-top:1px solid white;"></td>
            <td style= "border-left:1px solid white;border-top:1px solid white;border-radius:0px 0px 10px 0px;"></td>
            <td style= "border:1px solid white;"></td>
            <td style= "border:1px solid white;"></td>
        </tr>
    </div>   

        <tr>
            <td style= "border:1px solid white;"></td>
            <td style= "border:1px solid white;"></td>
            <td style= "border:1px solid white;"></td>
            <td style= "border:1px solid white;"></td>
            <td style= "border:1px solid white;"></td>
        </tr>
        <tr>
            <td style= "border-right:1px solid white;border-radius:10px 0px 0px 0px;border-bottom:1px solid white;">CIUDAD: <?= $ciu ?></td>
            <td style= "border-left:1px solid white;border-right:1px solid white;border-bottom:1px solid white;">FECHA: <?= $fe ?> </td>
            <td style= "border-left:1px solid white;border-right:1px solid white;border-bottom:1px solid white;">PLAZO: <?= $pla ?> </td>
            <td style= "border-right:1px solid white;border-bottom:1px solid white;border-left:1px solid white;"></td>
            <td style= "border-radius:0px 10px 0px 0px;border-left:1px solid white;border-bottom:1px solid white;">F.VENCIMIENTO: <?= $fe ?> </td>
           
        </tr>
        <tr>
            <td style= "border-right:1px solid white;border-bottom:1px solid white;border-top:1px solid white;">CLIENTE:: <?= $clien ?> </td>
            <td style= "border-left:1px solid white;border-right:1px solid white;border-bottom:1px solid white;border-top:1px solid white;">TEL:  <?= $te ?></td>
            <td style= "border-left:1px solid white;border-right:1px solid white;border-bottom:1px solid white;border-top:1px solid white;">NIT: <?= $nitcl ?></td>
            <td style= "border-left:1px solid white;border-right:1px solid white;border-top:1px solid white;border-bottom:1px solid white;"></td>
            <td style= "border-left:1px solid white;border-bottom:1px solid white;border-top:1px solid white;">MONEDA: COP</td>
        </tr>
        <tr>
            <td style= "border-radius:0px 0px 0px 10px;border-right:1px solid white;border-top:1px solid white;">HORA EMISION:  <?= $ho ?> </td>
            <td style= "border-left:1px solid white;border-right:1px solid white;border-top:1px solid white;"></td>
            <td style= "border-left:1px solid white;border-right:1px solid white;border-top:1px solid white;">HORA VALIDACION:  <?= $ho ?></td>
            <td style= "border-left:1px solid white;border-right:1px solid white;border-top:1px solid white;"></td>
            <td style= "border-radius:0px 0px 10px 0px;border-left:1px solid white;border-top:1px solid white;">FORMA DE PAGO: <?= $fpago ?></td>
        </tr>
        <tr>
            <td style= "border:1px solid white;"></td>
            <td style= "border:1px solid white;"></td>
            <td style= "border:1px solid white;"></td>
            <td style= "border:1px solid white;"></td>
            <td style= "border:1px solid white;"></td>
        </tr>
        <tr>
            <th style= "border-left:1px solid white;border-right:1px solid white;border-top:1px solid white;" >DESCRIPCION</th>
            <th style= "border-left:1px solid white;border-right:1px solid white;border-top:1px solid white;">CANTIDAD</th>
            <th style= "border-left:1px solid white;border-right:1px solid white;border-top:1px solid white;">VR.UNITARIO</th>
            <th style= "border-left:1px solid white;border-right:1px solid white;border-top:1px solid white;">%IVA</th>
            <th style= "border-left:1px solid white;border-right:1px solid white;border-top:1px solid white;">VALOR</th>
        </tr>  
        <?= $bitArtimpTabla ?>
        <tr>
            <td style= "border:1px solid white;"></td>
            <td style= "border:1px solid white;"></td>
            <td style= "border:1px solid white;"></td>
            <td style= "border:1px solid white;"></td>
            <td style= "border:1px solid white;"></td>
        </tr>
        <tr>
          <td style= "border:1px solid white;">Esta Factura se asimila en todos sus efectos legales A una letra de cambio</td>
          <td style= "border:1px solid white;"></td>
          <td style= "border:1px solid white;"></td>
          <td style= "border-right:1px solid white;border-radius:10px 0px 0px 0px;border-bottom:1px solid white;">Subtotal: </td>
          <td style= "border-radius:0px 10px 0px 0px;border-left:1px solid white;border-bottom:1px solid white;"><?= $subtotfinal ?></td>
        </tr>
        <tr>
          <td style= "border:1px solid white;">segun art 774 de c.c.</td>
          <td style= "border:1px solid white;"></td>
          <td style= "border:1px solid white;"></td>
          <td style= "border-top:1px solid white;border-right:1px solid white;border-bottom:1px solid white;">Iva 19:</td>
          <td style= "border-left:1px solid white;border-top:1px solid white;border-bottom:1px solid white;"></td>
        </tr>
        <tr>
          <td style= "border:1px solid white;">Esta factura se entrega a satisfacticion de quien recibe</td>
          <td style= "border:1px solid white;"></td>
          <td style= "border:1px solid white;"><div class="qr-imp"><?= $imqr ?></div></td>
          <td style= "border-top:1px solid white;border-right:1px solid white;border-bottom:1px solid white;">Iva 5:</td>
          <td style= "border-left:1px solid white;border-top:1px solid white;border-bottom:1px solid white;"></td>
        </tr>
        <tr>
          <td style= "border:1px solid white;"></td>
          <td style= "border:1px solid white;"></td>
          <td style= "border:1px solid white;"></td>
          <td style= "border-top:1px solid white;border-right:1px solid white;border-bottom:1px solid white;">Iva EX:</td>
          <td style= "border-left:1px solid white;border-top:1px solid white;border-bottom:1px solid white;"></td>
        </tr>
        <tr>
          <td style= "border-left:1px solid white;border-right:1px solid white;border-top:1px solid white;"></td>
          <td style= "border:1px solid white;"></td>
          <td style= "border:1px solid white;"></td>
          <td style= "border-top:1px solid white;border-right:1px solid white;border-bottom:1px solid white;">RteFte: </td>
          <td style= "border-left:1px solid white;border-top:1px solid white;border-bottom:1px solid white;"></td>
        </tr>
        <tr>
          <td style= "border:1px solid white;">Recibido por</td>
          <td style= "border:1px solid white;"></td>
          <td style= "border:1px solid white;"></td>
          <td style= "border-right:1px solid white;border-top:1px solid white;border-radius:0px 0px 0px 10px;">TOTAL: </td>
          <td style= "border-left:1px solid white;border-top:1px solid white;border-radius:0px 0px 10px 0px;"><?= $subtotfinal ?></td>
        </tr> 
        </tbody>          
        <tfoot>
        </tfoot> 
  </table>
  
  </div> 
</div><!--cierro fila-->
</div><!--cierro container-->



<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.colVis.min.js"></script>


<script>
$(document).ready(function() {
    $('#facturasimp').DataTable( {
      dom: 'Bfrtip',
      buttons: [
                            {
                                extend: 'copy',
                                text: 'Copiar',
                                exportOptions: {
                                    columns: [ 0, 1, 2, 3, 4]
                                }
                            },
                            {
                                extend: 'csv',
                                exportOptions: {
                                    columns: [ 0, 1, 2, 3, 4]
                                }
                            },
                            {
                                extend: 'excel',
                                exportOptions: {
                                    columns: [ 0, 1, 2, 3, 4]
                                }
                            },
                            {
                                extend: 'print',
                                customize: function ( win ) {
                                $(win.document.body)
                                    .css( 'background', 'blue' )
                            },
                                text: 'Imprimir',
                                exportOptions: {
                                    columns: [ 0, 1, 2, 3, 4],
                                    stripHtml: false, /* indicamos que no se eliminen las imagenes*/
                                }
                            },
                            {
                                extend: 'pdf',
                                exportOptions: {
                                    columns: [ 0, 1, 2, 3, 4] 
                                }    
                            }
                            //copy', 'csv', 'excel', 'print'
                        ],
      responsive: true,
      "scrollY":        "1500px",
      "autoWidth": true,
      "sort": true,
      "scrollCollapse": true,
      "bFilter": false,
      "paging":         false,
      "ordering": false,
      "info":     false,
      "order": [[ 1, "asc"]],
      "language": {
      "lengthMenu": "Mostrar _MENU_ datos por página",
      "zeroRecords": "No se ha encontrado ningun registro",
      "info": "Mostrando página _PAGE_ de _PAGES_",
      "infoEmpty": "",
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
    } );
} );
</script>

