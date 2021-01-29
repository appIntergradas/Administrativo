<head>
<link rel="stylesheet" href="../../view/css/stylesfact.css">
</head>
<style>
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
@media (max-width: 1500px) {                                                      
.titulo6 h4{
  width:1125px;
} 
.btncerrarf {
    position: relative;
    left: 1073px;
}
}
</style> 
<div class="contenedor-datos6 offset-xl-1 col-xl-10 offset-lg-1 col-lg-10">
<div class="row">
      <div class="titulo6 col-xl-12">
        <h4>Anular Factura</h4>
      </div>
      <div class="btncerrarf">
          <input type="button" class="btn btn-outline-danger btncf" id="btn-cerrar" name="btn-cerrar" value="X" onclick="javascript:Cerrarvistaftanul();">
      </div>
    </div>
  
 <div class="row fila" id="tbprincipal">
  <div class="contenedor-tabla-facturas col-xl-12">
    <table id="facturas" class="display" style="width:100%">
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
      <tbody>
        <?= $bitArticulosTablanul ?>
      </tbody>
      <tfoot>
          
      </tfoot>
    </table>
  </div> 
</div><!--cierro fila-->
<div class="row">
  <div class="alert alert-dark row fila col-xl-12"> 
    <span id="respuestanul"></span> 
  </div>  
 </div>
</div><!--cierro container-->

<!-- Modal confirmacion anulacion factura -->
<div class="modal fade" id="Modalfactanul" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title title-modal" id="exampleModalCenterTitle">¿Esta seguro de anular la factura?</h5>
        <button type="button" class="close" data-dismiss="modal" onclick="javascript:OcultarBusqueda();" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" id="contactFormart" action="">
      <div class="modal-body">
            <div class="input-conf-anul-fact col-xl-12">
              <div class="form-group ">
                <input type="text" class="form-control inp-conf-anul-fact" id="conf-anul-fact" name="conf-anul-fact" readonly>
              </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="javascript:OcultarBusqueda();">Cancelar</button>
        <button type="button" class="btn btn-primary"  data-dismiss="modal" onclick="javascript:DelFactanul();" >Aceptar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- fin Modal confirmacion anulacion factura -->

<script>
  /*datatable1*/
  $( document ).ready(function() {
  $('#facturas').DataTable( {
                 "bDestroy": true,
                 "cache": false,
                 "bAutoWidth": true,   
                 "bAutoHeight": true,   
                  "responsive": true,
                  "scrollY":        "1500px",
                  "autoWidth": true,
                  "scrollCollapse": true,
                  "bFilter": true, //oculta el input busqueda
                  "bLengthChange": false,//oculta mostrar cantidad elementos
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
});


</script>
