<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="../../view/css/stylesfact.css">
</head>
<style>
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
input[type=number] { -moz-appearance:textfield; }
#subto-fact{font-weight:bold;}
#total-fact{font-weight:bold;}
</style>  
<div class="contenedor-datos5 offset-xl-1 col-xl-10 offset-lg-1 col-lg-10">
    <div class="row">
      <div class="titulo5 col-xl-12">
        <h4>Facturacion</h4>
      </div>
      <div class="btncerrarf">
          <input type="button" class="btn btn-outline-danger btncf" id="btn-cerrar" name="btn-cerrar" value="X" onclick="javascript:Cerrarvistaft();">
      </div>
    </div>
    
 
 <div class="row fila" id="tbprincipal">
  <div class="contenedor-tabla-articulos col-xl-12">
    <table id="articulos5" class="display" style="width:100%">
      <thead>
          <tr>
              <th>CODIGO <?= $fact ?></th>
              <th>ARTICULO</th>
              <th>CANTIDAD</th>
              <th>VR. UNITARIO</th>
              <th>SUBTOTAL  <?= $k ?></th>
          </tr>
      </thead>
      <tbody>
        <?=  $bitArticulosTablabs ?>
      </tbody>
      <tfoot>
         
      </tfoot>
    </table>
  </div> 
</div><!--cierro fila4-->
</div><!--cierro container-->



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script> 


<script>


  /*datatable1*/
  $( document ).ready(function() {
  $('#articulos5').DataTable( {
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
});



</script>
