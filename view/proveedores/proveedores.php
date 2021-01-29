<head>
  <link rel="stylesheet" href="../../view/css/stylesfact.css">
</head>
<style>
  @media (max-width: 1500px) { 
  .btncerrar .btnc{
  position: relative;
 right: 25px;
  }
}
</style>
   <div class="contenedor-datos2">
    <div class="row">
      <div class="titulo2">
        <h4>Proveedores</h4>
      </div>
      <div class="btncerrarpro">
          <input type="button" class="btn btn-outline-danger btnc" id="btncerrarpro" name="btncerrarpro" value="X" onclick="javascript:Cerrarvistapv();">
      </div>
    </div>
    <div class="row fila">  
      <div class="form-group">
       <label class="lb-buscar-pv" for="buscar-pv">Buscar:</label>
      </div>
      <div class="form-group">
       <input type="text" class="inp-buscar-pv" id="buscar-pv" name="buscar-pv" placeholder="ingrese numero de nit" tabindex="1">
      </div>
      <div class="form-group campos">
       <label class="lb-id-pv" for="id-pv">Id</label>
      </div>
      <div class="form-group campos">
       <input type="text" class="inp-id-pv" id="id-pv" name="id-pv" readonly="readonly">
      </div>       
     </div>
     <div class="row fila">
      <div class="form-group campos">
       <label class="lb-nit-pv" for="nit-pv">Nit</label>
      </div>
      <div class="form-group campos">
       <input type="text" class="inp-nit-pv" id="nit-pv" name="nit-pv" tabindex="2">
      </div>
      <div class="form-group campos">
        <label class="lb-dv-pv" for="dv-pv">Dv</label>
       </div>
       <div class="form-group campos">
        <input type="text" class="inp-dv-pv" id="dv-pv" name="dv-pv" tabindex="3">
       </div>   
       <div class="form-group campos">
        <label class="lb-ciiu-pv" for="ciiu-pv">CIIU</label>
       </div>
       <div class="form-group campos">
        <input type="text" class="inp-ciiu-pv" id="ciiu-pv" name="ciiu-pv" tabindex="4">
       </div>   
       <div class="form-group campos">
        <label class="lb-razon-pv" for="razon-pv">Razon Social</label>
       </div>
       <div class="form-group campos">
        <input type="text" class="inp-razon-pv" id="razon-pv" name="razon-pv" tabindex="5">
       </div> 
     </div>
     <div class="row fila">
      <div class="form-group campos">
        <label class="lb-tel-pv" for="tel-pv">Telefono</label>
       </div>
       <div class="form-group campos">
        <input type="number" class="inp-tel-pv" id="tel-pv" name="tel-pv" min="0" tabindex="6">
       </div>
       <div class="form-group campos">
         <label class="lb-otro-pv" for="otro-pv">Otro</label>
        </div>
        <div class="form-group campos">
         <input type="text" class="inp-otro-pv" id="otro-pv" name="otro-pv" tabindex="7">
        </div>   
        <div class="form-group campos">
         <label class="lb-cont-pv" for="cont-pv">Contacto</label>
        </div>
        <div class="form-group campos">
         <input type="text" class="inp-cont-pv" id="cont-pv" name="cont-pv" tabindex="8">
        </div>   
     </div>
     <div class="row fila">
      <div class="form-group campos">
        <label class="lb-dir-pv" for="dir-pv">Direccion</label>
       </div>
       <div class="form-group campos">
        <input type="text" class="inp-dir-pv" id="dir-pv" name="dir-pv" tabindex="9">
       </div>
       <div class="form-group campos">
         <label class="lb-ciud-pv" for="ciud-pv">Ciudad</label>
        </div>
        <div class="form-group campos">
         <input type="text" class="inp-ciud-pv" id="ciud-pv" name="ciud-pv"tabindex="10">
        </div> 
     </div>
     <div class="row fila  col-xl-12">    
        <div class="form-group campos col-xl-4">
         <label class="lb-email-pv" for="email-pv">Email</label>
         <input type="email" class="inp-email-pv" id="email-pv" name="email-pv" tabindex="11">
        </div>
        <div class="form-group campos col-xl-2">
            <label class="lb-plazo-pv" for="plazo-pv">Plazo</label>
            <input type="text" class="inp-plazo-pv" id="plazo-pv" name="plazo-pv" tabindex="12">
        </div> 
        <div class="form-group chs col-xl-5">
          <input type="checkbox" id="cbox1-pv" class="inp-cbox1-pv" name="cbox1-pv" value="norete" tabindex="13"><label for="cbox1" class="lb-cboxs campos">No Retenedor</label>
          <input type="checkbox" id="cbox2-pv" class="inp-cbox2-pv" name="cbox2-pv" value="grancon" tabindex="14"><label for="cbox1" class="lb-cboxs campos">Gran Contribuyente</label>
          <input type="checkbox" id="cbox3-pv" class="inp-cbox3-pv" name="cbox3-pv" value="rteiva" tabindex="15"><label for="cbox1" class="lb-cboxs campos">Rte Iva</label>
        </div> 
     </div>
      <div class="row fila col-xl-12">
        <div class="form-group col-xl-3">
          <input type="button" class="btn btn-secondary btn1" id="btnant" name="btnant"  value="Ant" onclick="javascript: AntDatospv();"> 
          <input type="button" class="btn btn-secondary btn1" id="btnsig" name="btnsig"  value="Sig" onclick="javascript: SigDatospv();"> 
        </div> 
        <div class="form-group col-xl-8">
          <input type="button" class="btn btn-primary btn2" id="btnclear" name="btnclear"  value="Nuevo" onclick="javascript: ClearDatospv();">
          <input type="button" class="btn btn-primary btn2" id="btnnuevo" name="btnnuevo"  value="Grabar" onclick="javascript: NuevoDatospv();"> 
          <input type="button" class="btn btn-primary btn2" id="btneditar" name="btneditar"  value="Editar" data-toggle="modal" data-target="#Modalpv2">
          <input type="button" class="btn btn-primary btn2" id="btn-excel-pro" name="btn-excel-pro"  value="Excel" onclick="javascript: ExcelDatospv();"> 
          <input type="button" class="btn btn-primary btn2" id="btnborrar" name="btnborrar"  value="Borrar" data-toggle="modal" data-target="#Modalpv">
        </div>
      </div>
      <div class="alert alert-dark row fila col-xl-12"> 
       <span id="respuestapv"></span> 
      </div>    
   </div>
  </div>
  <script>
   //buscador interactivo clientes
   $(document).ready(function(){		
        $("#buscar-pv").on("keyup",function(){
          BuscarDatospv();
        
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
</script> 