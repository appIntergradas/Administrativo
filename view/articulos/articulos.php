<head>
  <link rel="stylesheet" href="../../view/css/stylesfact.css">
</head>

<style>
  .tg{ 
    width: 1200px;
    height: 60px;
    margin-left: 90px;
    background:#E5E6E7;
    border: 1px solid #000138;
    border-radius: 10px;    
    }
    .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #ffffff;
    background-color: #000138;
    border-color: #000138;
    border-radius: 10px;
   }
   input[type=number]::-webkit-inner-spin-button,
   input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }
   input[type=number] { -moz-appearance:textfield; }
   a{
     color:#000138;
   }
   .estiinfoart{
    width: 100%;
    position: relative;
    right: 15px;
   }
   a:hover{
    color:  rgb(8, 107, 173);
   }
   @media (max-width: 1500px) { 
  .btncerrar .btnc{
   position: relative;
   right: 25px;
  }
}
</style>
   <div class="contenedor-datos8">
    <div class="row">
      <div class="titulo8">
        <h4>Articulos</h4>
      </div>
      <div class="btncerrar">
          <input type="button" class="btn btn-outline-danger btnc" id="btn-cerrar" name="btn-cerrar" value="X" onclick="javascript:Cerrarvistart();">
      </div>
    </div>


    <div class="row fila">  
    <nav>
      <div class=" tg nav nav-tabs col-xl-12" id="nav-tab" role="tablist">
        <a class="col-xl-6 nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Articulo</a>
        <a class="col-xl-6 nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" onclick="javascript:listarDatosart();">Listado</a>
      </div>
    </nav>
    <div class="alert alert-dark row fila estiinfoart"> 
       <span id="respuestart"></span> 
    </div>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      <div class="row fila">
        <div class="form-group">
         <label class="lb-buscar-art" for="buscar-art">Buscar:</label>
        </div>
        <div class="form-group">
         <input type="text" class="inp-buscar-art" id="buscar-art" name="buscar-art" placeholder="ingrese nombre o codigo de articulo" tabindex="1">
        </div>
       </div>
      <div class="row fila">
      <div class="form-group campos">
         <label class="lb-id-art" for="id-art">Codigo</label>
        </div>
       <div class="form-group campos col-xl-1">
        <input type="text" class="inp-id-art" id="id-art" name="id-art" min="0"  required tabindex="2">
       </div>
      <div class="form-group campos">
       <label class="lb-des-art" for="des-art">Descripcion</label>
      </div>
      <div class="form-group campos col-xl-4">
       <input type="text" class="inp-des-art" id="des-art" name="des-art" tabindex="3" onblur="javascript:PasarReferenciaArt();">
      </div>
      <div class="form-group campos">
       <label class="lb-ref-art" for="ref-art">Referencia</label>
      </div>
      <div class="form-group campos col-xl-4">
       <input type="text" class="inp-ref-art" id="ref-art" name="ref-art" tabindex="4" readonly>
      </div>
      </div>
     <div class="row fila">
     <div class="form-group campos">
       <label class="lb-cant-art" for="cant-art">Cantidad</label>
      </div>
      <div class="form-group campos">
       <input type="number" class="inp-cant-art" id="cant-art" name="cant-art" min="1" tabindex="5">
      </div> 
      <div class="form-group campos">
       <label class="lb-vaco-art" for="vaco-art">Costo</label>
      </div>
      <div class="form-group campos">
       <input type="number" class="inp-vaco-art" id="vaco-art" name="vaco-art" min="0" tabindex="6">
      </div>
      <div class="form-group campos">
       <label class="lb-vave1-art" for="vave1-art">Valor Venta 1</label>
      </div>
      <div class="form-group campos">
       <input type="number" class="inp-vave1-art" id="vave1-art" name="vave1-art" min="0" tabindex="7" >
      </div>
      <div class="form-group campos">
       <label class="lb-vave2-art" for="vave2-art">Valor Venta 2</label>
      </div>
      <div class="form-group campos">
       <input type="number" class="inp-vave2-art" id="vave2-art" name="vave2-art" min="0" tabindex="8">
      </div>
      <div class="form-group campos">
       <label class="lb-vave3-art" for="vave3-art">Valor Venta 3</label>
      </div>
      <div class="form-group campos">
       <input type="number" class="inp-vave3-art" id="vave3-art" name="vave3-art" min="0" tabindex="9">
      </div>
     </div>
      <div class="row fila  col-xl-12">
        <div class="form-group col-xl-3">
          <input type="button" class="btn btn-secondary btn1" value="Ant" id="btnant" name="btnant"   onclick="javascript: AntDatosart();">
          <input type="button" class="btn btn-secondary btn1" value="Sig" id="btnsig" name="btnsig"   onclick="javascript: SigDatosart();">
          <input type="number" class="inp-codi-art coar" id="codi-art" name="codi-art"  readonly>
        </div>
        <div class="form-group col-xl-8">
         <input type="button" class="btn btn-primary btn2" id="btnclear" name="btnclear"  value="Nuevo" onclick="javascript: ClearDatosart();">
         <input type="button" class="btn btn-primary btn2" id="btnnuevo" name="btnnuevo"  value="Grabar" onclick="javascript:NuevoDatosart();">
         <input type="button" class="btn btn-primary btn2" id="btn-editar-pro" name="btn-editar-pro" value="Editar" data-toggle="modal" data-target="#Modalart2">
         <input type="button" class="btn btn-primary btn2" id="btn-excel-pro" name="btn-excel-pro"  value="Excel" onclick="javascript:ExcelDatoart();"> 
         <input type="button" class="btn btn-primary btn2" id="btn-borrar-pro" name="btn-borrar-pro" value="Borrar" data-toggle="modal" data-target="#Modalart">
        </div> 
               
      </div>    
      </div>
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" >
     <div class="row fila" id="tbprincipal">
      <div class="contenedor-tabla-arti col-xl-12">
        <table id="art" class="display" style="width:100%">
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
            <?= $bitArtTabla ?>
          </tbody>
          <tfoot>
              
          </tfoot>
        </table>
      </div> 
    </div><!--cierro fila4-->
     </div>
    </div>
  </div>
     
  <script>
//buscador interactivo articulos
$(document).ready(function(){		
        $("#buscar-art").on("keyup",function(){
        BuscarDatoart();
        
      });
		}); 
     

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
  $('#art').DataTable( {
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
