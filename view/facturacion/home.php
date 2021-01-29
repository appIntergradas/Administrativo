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
left:0px;
}
table.dataTable tbody th, table.dataTable tbody td{
  padding:0px 1px;
  
}

</style>  
<div class="contenedor-datos5 offset-xl-1 col-xl-10 offset-lg-1 col-lg-10">
    <div class="row">
      <div class="titulo5 col-xl-12">
        <h4>Facturacion</h4>
      </div>
      <div class="btncerrarf">
          <input type="button" class="btn btn-outline-danger btncf" id="btn-cerrar" name="btn-cerrar" value="X" onclick="javascript:Showmodalguardarcerrarfact();">
      </div>
    </div>
    <div class="row fila">
      <div class="title-fecha col-xl-1">
        <div class="form-group">
          <label class="lb-fecha-fact" for="fecha-fact">FECHA</label>
        </div>
      </div>
      <div class="input-fecha col-xl-2">
        <div class="form-group">
          <input type="date" class="form-control inp-fecha-fact" value="<?=$fechaactu?>" id="fecha-fact" readonly>
        </div>
      </div>
      <div class="title-cod-cl-fa col-xl-1">
        <div class="form-group">
          <label class="lb-cod-cl-fa" for="cod-cl-fa">NIT/CC</label>
        </div>
      </div>
      <div class="input-cod-cl-fa col-xl-2">
        <div class="form-group">
          <input type="text" class="form-control inp-cod-cl-fa" id="cod-cl-fa" onkeyup="javascript: Buscarcl();" required tabindex="1" autofocus="autofocus" autocomplete="off">
        </div>
      </div>
      <div class="title-tele-cl col-xl-1">
        <div class="form-group">
          <label class="lb-tele-cl" for="tele-cl">TELEFONO</label>
        </div>
      </div>
      <div class="input-tele-cl col-xl-1">
        <div class="form-group">
          <input type="text" class="form-control inp-tele-cl" id="tele-cl" required tabindex="2" autocomplete="off">
        </div>
      </div>
      <div class="title-op-fact col-xl-1">
        <div class="form-group">
          <label class="lb-op-fact" for="op-fact">OP</label>
        </div>
      </div>
      <div class="input-op-fact col-xl-1">
        <div class="form-group">
          <input type="text" class="form-control inp-op-fact" id="op-fact" tabindex="3">
        </div>
      </div>
      <div class="title-nume-fact col-xl-1">
        <div class="form-group">
          <label class="lb-nume-fact" for="nume-fact"><strong>N.FACTURA</strong></label>
        </div>
      </div>
      <div class="input-nume-fact col-xl-1">
        <div class="form-group">
          <input type="text" class="form-control inp-nume-fact" id="nume-fact" readonly value="<?= $nofact[0] ?>">
        </div>
      </div>
   </div><!--cierro fila1-->
   <div class="row fila">
    <div class="title-nomb-cl col-xl-1">
      <div class="form-group">
        <label class="lb-nomb-cl" for="nomb-cl">CLIENTE</label>
      </div>
    </div>
    <div class="input-nomb-cl col-xl-3">
      <div class="form-group">
        <input type="text" class="form-control inp-nomb-cl" id="nomb-cl" required tabindex="4" autocomplete="off">
      </div>
    </div>
    <div class="title-dire-cl col-xl-1">
      <div class="form-group">
        <label class="lb-dire-cl" for="dire-cl">DIRECCION</label>
      </div>
    </div>
    <div class="input-dire-cl col-xl-3">
      <div class="form-group">
        <input type="text" class="form-control inp-dire-cl" id="dire-cl" required tabindex="5" autocomplete="off">
      </div>
    </div>
    <div class="title-vend-usu col-xl-1">
      <div class="form-group">
        <label class="lb-vend-usu" for="vend-usu">VENDEDOR</label>
      </div>
    </div>
    <div class="input-vend-usu col-xl-1">
      <div class="form-group">
        <input type="text" class="form-control inp-vend-usu" id="vend-usu" readonly value="<?=$ident?>">
      </div>
    </div>
    <div class="title-o-compra col-xl-1">
      <div class="form-group">
        <label class="lb-o-compra" for="o-compra">O.COMPRA</label>
      </div>
    </div>
    <div class="input-o-compra col-xl-1">
      <div class="form-group">
        <input type="text" class="form-control inp-o-compra" id="o-compra" tabindex="6">
      </div>
    </div> 
    <div class="row">
      <div class="row col-xl-12"> 
        <hr id="separador"></hr> 
      </div>  
    </div>

   </div><!--cierre fila2-->
   <div class="row fila artidat">
    <div class="title-fecha col-xl-1">
      <div class="form-group">
        <label class="lb-codi-fact" for="codi-fact">COD</label>
      </div>
    </div>
    <div class="input-codi-fact col-xl-1">
      <div class="form-group">
        <input type="text" class="form-control inp-codi-fact" id="codi-fact"  onkeyup="javascript: Buscarcodi();" tabindex="7" autocomplete="off">
      </div>
    </div>
    <div class="title-arti-fact col-xl-1">
      <div class="form-group">
        <label class="lb-arti-fact" for="arti-fact">ARTICULO</label>
      </div>
    </div>
    <div class="input-arti-fact col-xl-2">
      <div class="form-group">
        <input type="text" class="form-control inp-arti-fact" id="arti-fact" readonly>
      </div>
    </div>
    <div class="title-cant-fact col-xl-1">
      <div class="form-group">
        <label class="lb-cant-fact" for="cant-fact">CANTIDAD</label>
      </div>
    </div>
    <div class="input-cant-fact col-xl-1">
      <div class="form-group">
        <input type="number" class="form-control inp-cant-fact" id="cant-fact" onkeyup="javascript: Calcularcant();" tabindex="8" min="1">
      </div>
    </div>
    <div class="title-val-fact col-xl-1">
      <div class="form-group">
        <label class="lb-val-fact" for="val-fact">VALOR</label>
      </div>
    </div>
    <div class="input-val-fact col-xl-1">
      <div class="form-group">
        <input type="number" class="form-control inp-val-fact" id="val-fact" onkeyup="javascript: Calcularcant();" tabindex="9" min="1">
      </div>
    </div>
    <div class="title-iva-fact col-xl-1">
      <div class="form-group">
        <label class="lb-iva-fact" for="iva-fact">%IVA</label>
      </div>
    </div>
    <div class="input-iva-fact col-xl-1">
      <div class="form-group">
        <input type="number" class="form-control inp-iva-fact" id="iva-fact" readonly>
      </div>
    </div>
    <div class="input-sutl-fact col-xl-1">
      <div class="form-group">
        <input type="text" class="form-control inp-sutl-fact" id="sutl-fact" placeholder="Subtotal" readonly >
        <button class="btn btn-success btonmas" id="btnmas" onfocus="javascript:AgregarArtfa();" tabindex="10">+</button>
      </div>
    </div>
 </div><!--cierro fila3--> 
 <div class="row">
  <div class="alert alert-dark row fila col-xl-12"> 
    <span id="respuestafa"></span> 
  </div>  
 </div>
 <div class="row fila" id="tbprincipal">
  <div class="contenedor-tabla-articulos col-xl-12">
    <table id="articulos" class="display" style="width:100%">
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
      <tbody>
        <?= $bitArticulosTabla ?>
      </tbody>
      <tfoot>
         
      </tfoot>
    </table>
  </div> 
</div><!--cierro fila4-->
<div class="row fila">
  <div class="cboxs col-xl-4">
    <div class="form-check form-check-inline">
      <label class="form-check-label lb-cbox-cre" for="inlineRadio1">CREDITO</label>
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked tabindex="11">
    </div>
    <div class="form-check form-check-inline">
      <label class="form-check-label lb-cbox-cont" for="inlineRadio2">CONTADO</label>
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" tabindex="12">
    </div>
  </div>
  <div class="title-plazo-fact col-xl-1">
    <div class="form-group">
      <label class="lb-plazo-fact" for="plazo-fact">PLAZO</label>
    </div>
  </div>
  <div class="input-plazo-fact col-xl-1">
    <div class="form-group">
      <div class="form-group ">
        <input type="number" class="form-control inp-plazo-fact" id="plazo-fact" tabindex="13">
      </div>
    </div>
  </div>
 <div class="title-iv-fact col-xl-1">
    <div class="form-group">
      <label class="lb-iv-fact" for="iv-fact" style="visibility:hidden;">%IVA</label>
    </div>
  </div>
  <div class="input-iv-fact col-xl-1">
    <div class="form-group">
      <input type="number" class="form-control inp-iv-fact" id="iv-fact" tabindex="14"  style="visibility:hidden;" >
    </div>
  </div>
  <div class="title-re-fact col-xl-1">
    <div class="form-group">
      <label class="lb-re-fact" for="re-fact"  style="visibility:hidden;">RETETE</label>
    </div>
  </div>
  <div class="input-re-fact col-xl-1">
    <div class="form-group">
      <input type="number" class="form-control inp-re-fact" id="re-fact" tabindex="15"  style="visibility:hidden;">
    </div>
  </div>
  <div class="title-subto-fact col-xl-1">
    <div class="form-group">
      <label class="lb-subto-fact" for="subto-fact">SUBTOTAL</label>
    </div>
  </div>
  <div class="input-subto-fact col-xl-1">
    <div class="form-group">
      <input type="text" class="form-control inp-subto-fact" id="subto-fact" readonly value="<?=$subtotfinal?>">
    </div>
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
  <div class="select-reimpr-fact col-xl-2">
      <div class="form-group ">
        <input  class="inp-dispo-fact" list="factudispo" name="factudispo" type="text" id="inp-dispo-fact" tabindex="17" autocomplete="off">
        <!--<select class="custom-select my-1 mr-sm-2" id="sl-reimpr-fact" tabindex="18">
        </select>-->
      </div>
  </div>
  <div class="btn-imprimir ">
    <button class="btn btn-primary bton impri" onclick="javascript:Imprifact();">Imprimir</button>
  </div>
  <div class="btn-buscar ">
    <button class="btn btn-primary bton llamafact"  style="visibility:<?=$llamafa?>;" onclick="javascript:LlamarFact();">Llamar Factura</button>
  </div>
  <div class="input-numero-fact">
    <div class="form-group ">
        <input type="number" class="form-control inp-numero-fact" style="visibility:<?=$illamafa?>;" id="numero-fact"  min="0">
    </div>
  </div>
  <div class="btn-guardarcam ">
    <button id="estado2" class="btn btn-info bton guardarcam" onclick="javascript:Showmodalguardarcambfact();">Guardar Cambios</button>
  </div>
  <div class="title-obse-fact">
    <div class="form-group">
      <label class="lb-total-fact" for="obse-fact">TOTAL $</label>
    </div>
  </div>
  <div class="input-total-fact col-xl-2">
    <div class="form-group ">
        <input type="text" class="form-control inp-total-fact" id="total-fact" placeholder="0.00" value="<?=$totalfinal?>" readonly>
    </div>
  </div>
  <div class="btn-guardar col-xl-1">
    <button id="estado1"  class="btn btn-primary bton guardarfact" onclick="javascript:Showmodalguardarfact();">Grabar</button>
  </div>
</div> <!--cierro fila7--> 
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
        <button type="button" class="btn btn-primary"  data-dismiss="modal" onclick="javascript:Buscarcl2();" >Aceptar</button>
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
      <div class="contenedor-tabla-articulosbs col-xl-12">
       <table id="articulosbs" class="display" style="width:100%">
        <thead>
          <tr>
              <th>CODIGO</th>
              <th>REFERENCIA</th>
              <th>NOMBRE</th>
              <th></th>
          </tr>
        </thead>
         <tbody>
          <?= $bitArticulosTablabs ?>
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
<!-- Modal cerrar factura -->
<div class="modal fade" id="Modalfactclose" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title title-modal" id="exampleModalCenterTitle">¿Desea Guardar Los Cambios De La Factura?</h5>
        <button type="button" class="close" data-dismiss="modal" onclick="javascript:OcultarBusqueda();" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" id="contactFormart" action="">
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="javascript:Ocultarsavefact();">No</button>
        <button type="button" class="btn btn-primary"  data-dismiss="modal" onclick="javascript:Cerrarvistaft();" >Si</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- fin Modal cerrar factura -->
<!-- Modal guardar factura -->
<div class="modal fade" id="Modalfactsave" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title title-modal" id="exampleModalCenterTitle">¿Esta seguro de guardar la factura?</h5>
        <button type="button" class="close" data-dismiss="modal" onclick="javascript:OcultarBusqueda();" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" id="contactFormart" action="">
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="javascript:OcultarBusqueda();">Cancelar</button>
        <button type="button" class="btn btn-primary"  data-dismiss="modal" onclick="javascript:GuardarFact();" >Aceptar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- fin Modal guardar factura -->
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
  $('#articulos').DataTable( {
                 "bDestroy": true,
                 "bAutoWidth": true,   
                 "bAutoHeight": true,   
                  "responsive": true,
                  "scrollY":        "1500px",
                  "autoWidth": true,
                  "scrollCollapse": true,
                  "pageLength": 5,
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
                  "search": "BUSCAR: ",
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
              if($("#cod-cl-fa").is(":focus")){
                $('#respuestafa').html('');
                $("#Modalbcl").modal("show");
                $(".dataTables_wrapper .dataTables_filter").css("display", "block");             
                $(".dataTables_wrapper .dataTables_filter").focus();   
                $('.contenedor-tabla-clientes').load('../../control/facturacion/modalartexterno2.php');
                }else{
                  if($("#codi-fact").is(":focus")){
                    $('#respuestafa').html('');
                    $("#Modalbart").modal("show");
                    $(".dataTables_wrapper .dataTables_filter").css("display", "block");
                    $('.contenedor-tabla-articulosbs').load('../../control/facturacion/modalartexterno.php');
                  }
                }
              
            }
        });
  //focus en el buscador modal clientes      
  $(function () {
  $('#Modalbcl').on('shown.bs.modal', function (e) {
    $('.dataTables_wrapper .dataTables_filter input').focus();
   })
  });
   //focus en el buscador modal articulos
  $(function () {
  $('#Modalbart').on('shown.bs.modal', function (e) {
    $('.dataTables_wrapper .dataTables_filter input').focus();
   })
  });
</script>
