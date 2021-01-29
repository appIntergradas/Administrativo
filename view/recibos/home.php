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
.dataTables_wrapper .dataTables_length {
    display: none;
}
</style>  
<div class="contenedor-datos9 offset-xl-1 col-xl-10 offset-lg-1 col-lg-10">
    <div class="row">
      <div class="titulo9 col-xl-12">
        <h4>Recibo De Caja</h4>
      </div>
      <div class="btncerrarb">
          <input type="button" class="btn btn-outline-danger btncb" id="btn-cerrar" name="btn-cerrar" value="X" onclick="javascript:Cerrarvistarb();">
      </div>
    </div>
    <div class="row fila">
    <div class="title-num-rb col-xl-1">
        <div class="form-group">
          <label class="lb-num-rb" for="num-rb">NUMERO:</label>
        </div>
      </div>
      <div class="input-num-rb col-xl-1">
        <div class="form-group">
          <input type="text" class="form-control inp-num-rb" id="num-rb" required tabindex="1" readonly value="<?= $noreci[0] ?>">
        </div>
      </div>
      <div class="title-fecha-rb col-xl-1">
        <div class="form-group">
          <label class="lb-fecha-rb" for="fecha-rb">FECHA:</label>
        </div>
      </div>
      <div class="input-fecha col-xl-1">
        <div class="form-group">
          <input type="date" class="form-control inp-fecha-rb" value="<?=$fechaactu?>" id="fecha-rb" readonly>
        </div>
      </div>
      <div class="title-fechaela-rb col-xl-1">
        <div class="form-group">
          <label class="lb-fechaela-rb" for="fechaela-rb">FECHA ELABORACION:</label>
        </div>
      </div>
      <div class="input-fechaela col-xl-2">
        <div class="form-group">
          <input type="date" class="form-control inp-fechaela-rb"  id="fechaela-rb" required tabindex="2">
        </div>
      </div>
      <div class="title-cod-cl-rb col-xl-1">
        <div class="form-group">
          <label class="lb-cod-cl-rb" for="cod-cl-rb">NIT/CC:</label>
        </div>
      </div>
      <div class="input-cod-cl col-xl-2">
        <div class="form-group">
          <input type="text" class="form-control inp-cod-cl-rb" id="cod-cl-rb" onkeyup="javascript: Buscarclrb();" required tabindex="3">
        </div>
      </div>
      <div class="title-total-rb">
        <div class="form-group">
          <label class="lb-total-rb" for="total-rb">TOTAL:</label>
        </div>
      </div>
      <div class="input-total-rb col-xl-1">
        <div class="form-group ">
            <input type="text" class="form-control inp-total-rb" id="total-rb" placeholder="0.00" value="<?=$totalfinal?>" readonly>
        </div>
      </div>
   </div><!--cierro fila1-->
   <div class="row fila">
    <div class="title-nom-cl-rb col-xl-1">
      <div class="form-group">
        <label class="lb-nomb-cl-rb" for="nomb-cl-rb">RECIBO DE:</label>
      </div>
    </div>
    <div class="input-nomb-cl-rb col-xl-2">
      <div class="form-group">
        <input type="text" class="form-control inp-nomb-cl-rb" id="nomb-cl-rb" required tabindex="4">
      </div>
    </div>
    <div class="title-efec-rb col-xl-1">
      <div class="form-group">
        <label class="lb-efec-rb" for="efec-rb">EFECTIVO:</label>
      </div>
    </div>
    <div class="input-efec-cl col-xl-2">
      <div class="form-group">
        <input type="text" class="form-control inp-efec-rb" id="efec-rb" required tabindex="5">
      </div>
    </div>
    <div class="title-trans-rb col-xl-1">
      <div class="form-group">
        <label class="lb-trans-rb" for="trans-rb">TRANSFERENCIA:</label>
      </div>
    </div>
    <div class="input-trans-rb col-xl-1">
      <div class="form-group">
        <input type="text" class="form-control inp-trans-rb" id="trans-rb"  tabindex="6" >
      </div>
    </div>
    <div class="title-desc-rb col-xl-1">
      <div class="form-group">
        <label class="lb-desc-rb" for="desc-rb">DECUENTO:</label>
      </div>
    </div>
    <div class="input-desc-rb col-xl-1">
      <div class="form-group">
        <input type="text" class="form-control inp-desc-rb" id="desc-rb" tabindex="7">
      </div>
    </div> 
    <div class="title-factnum-rb col-xl-1">
        <div class="form-group">
          <label class="lb-factnum-rb" for="factnum-rb"><strong>FACTURA</strong></label>
        </div>
    </div>
    <div class="input-factnum-rb col-xl-1">
      <div class="form-group">
        <input type="checkbox" class="form-control inp-factnum-rb" id="factnum-rb" required tabindex="8">
      </div>
    </div>

   </div><!--cierre fila2-->
  <div class="row">
  <div class="alert alert-dark row fila col-xl-12"> 
    <span id="respuestarb"></span> 
  </div>  
 </div>
 <div class="row fila" id="tbprincipal">
  <div class="contenedor-tabla-factrb col-xl-12">
    <table id="factrb" class="display" style="width:100%">
      <thead>
          <tr>
              <th>FACTURA</th>
              <th>VALOR</th>
          </tr>
      </thead>
      <tbody>
        <?= $bitFactTablarb ?>
      </tbody>
      <tfoot>
         
      </tfoot>
    </table>
  </div> 
</div><!--cierro fila4-->
 <div class="row fila" id="tbprincipal">
  <div class="contenedor-tabla-factapagarb col-xl-12">
    <table id="factapagarb" class="display" style="width:80%">
      <thead>
          <tr>
              <th>NUMERO</th>
              <th>CONCEPTO</th>
              <th>VALOR</th>
              <th>AVERIAS</th>
              <th>DESCUENTO</th>
              <th>CANCELADO</th> 
              <th>FLETES</th> 
              <th>SOBRANTES</th> 
              <th>SALDAR</th> 
              <th></th> 
          </tr>
      </thead>
      <tbody>
        <?= $bitTablapagarb ?>
      </tbody>
      <tfoot>
         
      </tfoot>
    </table>
  </div> 
</div><!--cierro fila5-->
<div class="row fila">
  <div class="title-obse-fact col-xl-2">
    <div class="form-group text-center">
      <label class="lb-obse-fact" for="obse-fact">OBSERVACIONES</label>
    </div>
  </div>
  <div class="input-obse-fact col-xl-10">
    <div class="form-group ">
        <input type="text" class="form-control inp-obse-fact" id="obse-fact" tabindex="16">
      </div>
  </div>
</div><!--cierro fila6-->
<div class="row fila">
  <div class="title-subto-rb offset-xl-8 col-xl-2">
    <div class="form-group text-center">
      <label class="lb-subto-rb" for="subto-rb">SUBTOTAL:</label>
    </div>
  </div>
  <div class="input-subto-rb col-xl-2">
    <div class="form-group ">
        <input type="text" class="form-control inp-subto-rb" id="subto-rb" tabindex="16" value="<?=$subtotalrb?>" readonly>
    </div>
  </div>
</div><!--cierro fila7--> 
<div class="row fila">
  <div class="select-reimpr-fact col-xl-2">
      <div class="form-group ">
        <input  class="inp-dispo-fact" list="factudispo" name="factudispo" type="text" id="inp-dispo-fact" tabindex="17">
        <!--<select class="custom-select my-1 mr-sm-2" id="sl-reimpr-fact" tabindex="18">
        </select>-->
      </div>
  </div>
  <div class="btn-guardar col-xl-1">
    <button   class="btn btn-primary bton guardarfact" onclick="javascript:Showmodalguardarreci();">Grabar</button>
  </div>
  <div class="btn-buscar ">
    <button class="btn btn-primary bton llamafact"  style="visibility:<?=$llamafa?>;" onclick="javascript:LlamarFact();">Nuevo</button>
  </div>
  <div class="btn-guardarcam ">
    <button  class="btn btn-info bton guardarcam" onclick="javascript:Showmodalguardarcambfact();">Guardar Cambios</button>
  </div>
  <div class="btn-imprimir ">
    <button class="btn btn-primary bton impri" onclick="javascript:Imprifact();">Imprimir</button>
  </div>
  
</div> <!--cierro fila8--> 
</div><!--cierro container-->

<!-- Modal clientebuscar -->
<div class="modal fade" id="Modalbcl" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title title-modal" id="exampleModalCenterTitle">Buscar Clientes</h5>
        <button type="button" class="close" data-dismiss="modal"onclick="javascript:OcultarBusqueda();" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" id="contactFormcl" action="">
      <div class="modal-body">
      <div class="contenedor-tabla-clientes col-xl-12">
       <table id="clientesbs" class="display" style="width:100%">
        <thead>
          <tr>
              <th>NIT/CC</th>
              <th>NOMBRE</th>
              <th>TELEFONO</th>
              <th></th>
          </tr>
        </thead>
         <tbody>
          <?=  $bitClientesTablabs ?>
         </tbody>
         <tfoot>
         </tfoot>
        </table>
      </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="javascript:OcultarBusqueda();">Cancelar</button>
        <button type="button" class="btn btn-primary"  data-dismiss="modal" onclick="javascript:Buscarcl2rb();" >Aceptar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- fin Modal clientebuscar -->
<!-- Modal artbuscar -->
<div class="modal fade" id="Modalbart" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title title-modal" id="exampleModalCenterTitle">Buscar Articulos</h5>
        <button type="button" class="close" data-dismiss="modal" onclick="javascript:OcultarBusqueda();" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" id="contactFormart" action="">
      <div class="modal-body">
      <div class="contenedor-tabla-articulos col-xl-12">
       <table id="articulos" class="display" style="width:100%">
        <thead>
          <tr>
              <th>CODIGO</th>
              <th>REFERENCIA</th>
              <th>NOMBRE</th>
              <th></th>
          </tr>
        </thead>
         <tbody>
          <?=$bitArticulosTablabs ?>
         </tbody>
         <tfoot>
         </tfoot>
        </table>
      </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="javascript:OcultarBusqueda();">Cancelar</button>
        <button type="button" class="btn btn-primary"  data-dismiss="modal" onclick="javascript:Buscarart2();" >Aceptar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- fin Modal artbuscar -->
<!-- Modal guardar recibo -->
<div class="modal fade" id="Modalrecisave" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title title-modal" id="exampleModalCenterTitle">¿Esta seguro de guardar el recibo?</h5>
        <button type="button" class="close" data-dismiss="modal" onclick="javascript:OcultarBusqueda();" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" id="contactFormart" action="">
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="javascript:OcultarBusqueda();">Cancelar</button>
        <button type="button" class="btn btn-primary"  data-dismiss="modal" onclick="javascript: GuardarRecib();" >Aceptar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- fin Modal guardar recibo -->
<!-- Modal guardar cambios factura -->
<div class="modal fade" id="Modalfactsavecamb" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title title-modal" id="exampleModalCenterTitle">¿Esta seguro de guardar los cambios de la factura?</h5>
        <button type="button" class="close" data-dismiss="modal" onclick="javascript:OcultarBusqueda();" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" id="contactFormart" action="">
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="javascript:OcultarBusqueda();">Cancelar</button>
        <button type="button" class="btn btn-primary"  data-dismiss="modal" onclick="javascript:GuardarCambiosfact();" >Aceptar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- fin Modal guardar cambios factura -->

<!-- data list -->
<datalist id="factudispo">
  <option><?= $bitFact ?></option>
</datalist>
<!-- fin data list -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script> 


<script>
 
//pasar inputs con enter
document.addEventListener('keypress', function(evt) {
        // Si el evento NO es una tecla Enter
        if (evt.key != 'Enter') {
        return;
        }
        let element = evt.target;
        // AQUI logica para encontrar el siguiente
        let tabIndex = element.tabIndex + 1;
        var next = document.querySelector('[tabindex="'+tabIndex+'"]');
        // Si encontramos un elemento
        if (next) {
        next.focus();
        event.preventDefault();
        }
      });

  /*datatable1*/
  $( document ).ready(function() {
    var table= $('#factrb').DataTable( {
      responsive: true,
      "scrollY":        "1500px",
      "autoWidth": true,
      "scrollCollapse": true,
      "bFilter": false,
      "paging":  true,
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


  /*datatable2*/
  $( document ).ready(function() {
  $('#factapagarb').DataTable( {
      responsive: true,
      "scrollY":  true,
      "autoWidth": true,
      "scrollCollapse": true,
      "bFilter": false,
      "paging":  true,
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

$(document).keydown(function (tecla) {
            if (tecla.keyCode == 113) { //f2
              if($("#cod-cl-rb").is(":focus")){
                $('#respuestarb').html('');
                $("#Modalbcl").modal("show");
                $(".dataTables_wrapper .dataTables_filter").css("display", "block");
                $('.contenedor-tabla-clientes').load('../../control/recibos/modalartexterno2.php');
                }
              
            }
        });

</script>
