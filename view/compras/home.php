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
#subto-comp{font-weight:bold;}
#total-comp{font-weight:bold;}
#estado3{
  visibility:visible;
}
#estado4{
  visibility:hidden;
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
<div class="contenedor-datos5 offset-xl-1 col-xl-10 offset-lg-1 col-lg-10">
    <div class="row">
      <div class="titulo5 col-xl-12">
        <h4>Compras</h4>
      </div>
      <div class="btncerrarf">
          <input type="button" class="btn btn-outline-danger btncf" id="btn-cerrar" name="btn-cerrar" value="X" onclick="javascript:Showmodalguardarcerrarcomp();">
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
          <input type="date" class="form-control inp-fecha-fact" value="<?=$fechaactu?>" id="fecha-comp" readonly>
        </div>
      </div>
      <div class="title-cod-cl-co col-xl-1">
        <div class="form-group">
          <label class="lb-cod-cl-co" for="cod-cl-co">NIT/CC</label>
        </div>
      </div>
      <div class="input-cod-cl-co col-xl-2">
        <div class="form-group">
          <input type="text" class="form-control inp-cod-cl-co" id="cod-cl-co" onkeyup="javascript: Buscarclco();" required tabindex="1" autofocus="autofocus" autocomplete="off">
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
          <input type="text" class="form-control inp-op-fact" id="op-comp" tabindex="3">
        </div>
      </div>
      <div class="title-nume-comp col-xl-1">
        <div class="form-group">
          <label class="lb-nume-comp" for="nume-comp"><strong>N.COMPRA</strong></label>
        </div>
      </div>
      <div class="input-nume-comp col-xl-1">
        <div class="form-group">
          <input type="text" class="form-control inp-nume-comp" id="nume-comp" readonly value="<?= $nocomp[0] ?>">
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
   </div><!--cierre fila2-->
   <div class="row">
      <div class="row col-xl-12"> 
        <hr id="separador"></hr> 
      </div>  
    </div>
   <div class="row fila artidat">
    <div class="title-fecha col-xl-1">
      <div class="form-group">
        <label class="lb-codi-fact" for="codi-comp">COD</label>
      </div>
    </div>
    <div class="input-codi-fact col-xl-1">
      <div class="form-group">
        <input type="text" class="form-control inp-codi-fact" id="codi-comp"  onkeyup="javascript: Buscarcodico();" tabindex="7" autocomplete="off">
      </div>
    </div>
    <div class="title-arti-comp col-xl-1">
      <div class="form-group">
        <label class="lb-arti-comp" for="arti-comp">ARTICULO</label>
      </div>
    </div>
    <div class="input-arti-comp col-xl-2">
      <div class="form-group">
        <input type="text" class="form-control inp-arti-comp" id="arti-comp" readonly>
      </div>
    </div>
    <div class="title-cant-comp col-xl-1">
      <div class="form-group">
        <label class="lb-cant-comp" for="cant-comp">CANTIDAD</label>
      </div>
    </div>
    <div class="input-cant-comp col-xl-1">
      <div class="form-group">
        <input type="number" class="form-control inp-cant-comp" id="cant-comp" onkeyup="javascript: Calcularcantco();" tabindex="8" min="1">
      </div>
    </div>
    <div class="title-val-comp col-xl-1">
      <div class="form-group">
        <label class="lb-val-comp" for="val-comp">VALOR</label>
      </div>
    </div>
    <div class="input-val-comp col-xl-1">
      <div class="form-group">
        <input type="number" class="form-control inp-val-comp" id="val-comp" onkeyup="javascript: Calcularcantco();" tabindex="9" min="1">
      </div>
    </div>
    <div class="title-iva-fact col-xl-1">
      <div class="form-group">
        <label class="lb-iva-fact" for="iva-comp">%IVA</label>
      </div>
    </div>
    <div class="input-iva-fact col-xl-1">
      <div class="form-group">
        <input type="number" class="form-control inp-iva-fact" id="iva-comp" readonly >
      </div>
    </div>
    <div class="input-sutl-fact col-xl-1">
      <div class="form-group">
        <input type="text" class="form-control inp-sutl-fact" id="sutl-comp" placeholder="Subtotal" readonly >
        <button class="btn btn-success btonmas" id="btnmas" onfocus="javascript:AgregarArtco();" tabindex="10">+</button>
      </div>
    </div>
 </div><!--cierro fila3--> 
 <div class="row">
  <div class="alert alert-dark row fila col-xl-12"> 
    <span id="respuestaco"></span> 
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
      <label class="lb-plazo-fact" for="plazo-comp">PLAZO</label>
    </div>
  </div>
  <div class="input-plazo-fact col-xl-1">
    <div class="form-group">
      <div class="form-group ">
        <input type="number" class="form-control inp-plazo-fact" id="plazo-comp" tabindex="13">
      </div>
    </div>
  </div>
 <div class="title-iv-fact col-xl-1">
    <div class="form-group">
      <label class="lb-iv-fact" for="iv-comp" style="visibility:hidden;">IVA</label>
    </div>
  </div>
  <div class="input-iv-fact col-xl-1">
    <div class="form-group">
      <input type="number" class="form-control inp-iv-fact" id="iv-comp" tabindex="14" style="visibility:hidden;">
    </div>
  </div>
  <div class="title-re-fact col-xl-1">
    <div class="form-group">
      <label class="lb-re-fact" for="re-comp" style="visibility:hidden;">RETETE</label>
    </div>
  </div>
  <div class="input-re-fact col-xl-1">
    <div class="form-group">
      <input type="number" class="form-control inp-re-fact" id="re-comp" tabindex="15" style="visibility:hidden;">
    </div>
  </div>
  <div class="title-subto-comp col-xl-1">
    <div class="form-group">
      <label class="lb-subto-comp" for="subto-comp">SUBTOTAL</label>
    </div>
  </div>
  <div class="input-subto-comp col-xl-1">
    <div class="form-group">
      <input type="text" class="form-control inp-subto-comp" id="subto-comp" readonly value="<?=$subtotfinal?>">
    </div>
  </div>
</div><!--cierro fila5--> 
<div class="row fila">
  <div class="title-obse-fact col-xl-2">
    <div class="form-group text-center">
      <label class="lb-obse-fact" for="obse-comp">OBSERVACIONES</label>
    </div>
  </div>
  <div class="input-obse-fact col-xl-10">
    <div class="form-group ">
        <input type="text" class="form-control inp-obse-fact" id="obse-comp" tabindex="16">
      </div>
  </div>
</div><!--cierro fila6--> 
<div class="row fila">
  <div class="select-reimpr-fact col-xl-2">
      <div class="form-group ">
        <input  class="inp-dispo-comp" list="comprasdispo" name="comprasdispo" type="text" id="inp-dispo-comp" tabindex="17" autocomplete="off">
        <!--<select class="custom-select my-1 mr-sm-2" id="sl-reimpr-fact" tabindex="18">
        </select>-->
      </div>
  </div>
  <div class="btn-imprimir ">
    <button class="btn btn-primary bton impri" onclick="javascript:Impricomp();">Imprimir</button>
  </div>
  <div class="btn-buscar ">
    <button class="btn btn-primary bton llamacomp"  style="visibility:<?=$llamaco?>;" onclick="javascript:LlamarComp();">Llamar Compra</button>
  </div>
  <div class="input-numero-comp">
    <div class="form-group ">
        <input type="number" class="form-control inp-numero-comp" style="visibility:<?=$illamaco?>;" id="numero-comp" value="<??>" min="0">
    </div>
  </div>
  <div class="btn-guardarcam ">
    <button id="estado4" class="btn btn-info bton guardarcam" onclick="javascript:Showmodalguardarcambcomp();">Guardar Cambios</button>
  </div>
  <div class="title-obse-fact">
    <div class="form-group">
      <label class="lb-total-comp" for="obse-fact">TOTAL $</label>
    </div>
  </div>
  <div class="input-total-comp col-xl-2">
    <div class="form-group ">
        <input type="text" class="form-control inp-total-comp" id="total-comp" placeholder="0.00" value="<?=$totalfinal?>" readonly>
    </div>
  </div>
  <div class="btn-guardar col-xl-1">
    <button id="estado3"  class="btn btn-primary bton guardarfact" onclick="javascript:Showmodalguardarcomp();">Grabar</button>
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
        <button type="button" class="btn btn-primary"  data-dismiss="modal" onclick="javascript:Buscarcl2co();" >Aceptar</button>
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
        <button type="button" class="btn btn-primary"  data-dismiss="modal" onclick="javascript:Buscarart2co();" >Aceptar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- fin Modal artbuscar -->
<!-- Modal cerrar compra -->
<div class="modal fade" id="Modalcompclose" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title title-modal" id="exampleModalCenterTitle">¿Desea Guardar Los Cambios De La Compra?</h5>
        <button type="button" class="close" data-dismiss="modal" onclick="javascript:OcultarBusqueda();" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" id="contactFormart" action="">
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="javascript:Ocultarsavecomp();">No</button>
        <button type="button" class="btn btn-primary"  data-dismiss="modal" onclick="javascript:Cerrarvistacomp();" >Si</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- fin Modal cerrar compra -->
<!-- Modal guardar compra -->
<div class="modal fade" id="Modalcompsave" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title title-modal" id="exampleModalCenterTitle">¿Esta seguro de guardar la compra?</h5>
        <button type="button" class="close" data-dismiss="modal" onclick="javascript:OcultarBusqueda();" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" id="contactFormart" action="">
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="javascript:OcultarBusqueda();">Cancelar</button>
        <button type="button" class="btn btn-primary"  data-dismiss="modal" onclick="javascript:GuardarComp();" >Aceptar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- fin Modal guardar compra -->
<!-- Modal guardar cambios compra -->
<div class="modal fade" id="Modalcompsavecamb" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title title-modal" id="exampleModalCenterTitle">¿Esta seguro de guardar los cambios de la compra?</h5>
        <button type="button" class="close" data-dismiss="modal" onclick="javascript:OcultarBusqueda();" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" id="contactFormart" action="">
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="javascript:OcultarBusqueda();">Cancelar</button>
        <button type="button" class="btn btn-primary"  data-dismiss="modal" onclick="javascript:GuardarCambioscomp();" >Aceptar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- fin Modal guardar cambios compra -->

<!-- data list -->
<datalist id="comprasdispo">
  <option><?= $bitComp ?></option>
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

$(document).keydown(function (tecla) {
            if (tecla.keyCode == 113) { //f2
              if($("#cod-cl-co").is(":focus")){
                $('#respuestaco').html('');
                $("#Modalbcl").modal("show");
                $(".dataTables_wrapper .dataTables_filter").css("display", "block");
                $('.contenedor-tabla-clientes').load('../../control/compras/modalartexterno2.php');
                }else{
                  if($("#codi-comp").is(":focus")){
                    $('#respuestaco').html('');
                    $("#Modalbart").modal("show");
                    $(".dataTables_wrapper .dataTables_filter").css("display", "block");
                    $('.contenedor-tabla-articulosbs').load('../../control/compras/modalartexterno.php');
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
