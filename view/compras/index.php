<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="../../view/css/styleimpfact.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
</head>
<div class="contenedor-datos8 offset-xl-1 col-xl-10 offset-lg-1 col-lg-10">
<div class="row">
      <div class="titulo7 col-xl-12">
        <h4>Factura 26</h4>
      </div>
      <div class="btncerrarf">
          <input type="button" class="btn btn-outline-danger btncf" id="btn-cerrar" name="btn-cerrar" value="X" onclick="javascript:Cerrarvistaftimpri();">
      </div>
</div>
 <div class="row fila" id="tbprincipal">
  <div class="contenedor-tabla-facturas col-xl-12">
<table id="example" class="display nowrap table table-striped table-bordered table-imp-gene" style="width:100%">
<thead>
        <tr class="conte1">
          <td><div class="title-imp"><h3>Indusesgos S.A.S</h3></div></td>
          <td><div class="qr-imp">qr</div></td>
          <td><div class="logo-imp" id="logo-impfact"><img src="../../view/img/indusesgos.jpg" ></div></td>
        </tr>
        
            <tr>
              <th >COD</th>
              <th>DESCRIPCION</th>
              <th>CANTIDAD</th>
              <th>VR.UNITARIO</th>
              <th>TOTAL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
               
            </tr>
            
        </tbody>
        <tr></tr>  
         <tr></tr>  
         <tr><hr></tr>

          <tr>
          <td></td>
          <td></td>
          <td>SUBTOTAL: 45000</td>
          </tr>
          <tr>
          <td></td>
          <td></td>
          <td>DESCUENTO:</td>
          </tr>
          <tr>
          <td><hr></td>
          <td><hr></td>
          <td>IVA 19:</td>
          </tr>
          <tr>
          <td></td>
          <td></td>
          <td>RETE FTE:</td>
          </tr>
          <tr>
          <td></td>
          <td></td>
          <td>TOTAL: 45000</td>
          </tr>  
        <tfoot>
           
        </tfoot>
    </table>
</div>	
</div>	
</div>	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
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
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
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
    } );
} );
</script>