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
   <div class="contenedor-datos4">
    <div class="row">
      <div class="titulo4">
        <h4>Clientes</h4>
      </div>
      <div class="btncerrarcli">
          <input type="button" class="btn btn-outline-danger btnc" id="btncerrarcli" name="btncerrarcli" value="X" onclick="javascript:Cerrarvistacl();">
      </div>
    </div>
    <div class="row fila">  
      <div class="form-group">
       <label class="lb-buscar-cl" for="buscar-cl">Buscar:</label>
      </div>
      <div class="form-group">
       <input type="text" class="inp-buscar-cl" id="buscar-cl" name="buscar-cl" placeholder="ingrese numero de nit" tabindex="1">
      </div>
      <div class="form-group campos">
       <label class="lb-id-cl" for="id-cl">Id</label>
      </div>
      <div class="form-group campos">
       <input type="text" class="inp-id-cl" id="id-cl" name="id-cl" readonly="readonly">
      </div>       
     </div>
     <div class="row fila">
      <div class="form-group campos">
       <label class="lb-nit-cl" for="nit-cl">Nit</label>
      </div>
      <div class="form-group campos">
       <input type="text" class="inp-nit-cl" id="nit-cl" name="nit-cl" tabindex="2">
      </div>
      <div class="form-group campos">
        <label class="lb-dv-cl" for="dv-cl">Dv</label>
       </div>
       <div class="form-group campos">
        <input type="text" class="inp-dv-cl" id="dv-cl" name="dv-cl" tabindex="3">
       </div>   
       <div class="form-group campos">
        <label class="lb-ciiu-cl" for="ciiu-cl">CIIU</label>
       </div>
       <div class="form-group campos">
        <input type="text" class="inp-ciiu-cl" id="ciiu-cl" name="ciiu-cl" tabindex="4">
       </div>   
       <div class="form-group campos">
        <label class="lb-razon-cl" for="razon-cl">Razon Social</label>
       </div>
       <div class="form-group campos">
        <input type="text" class="inp-razon-cl" id="razon-cl" name="razon-cl" tabindex="5">
       </div> 
     </div>
     <div class="row fila">
      <div class="form-group campos">
        <label class="lb-tel-cl" for="tel-cl">Telefono</label>
       </div>
       <div class="form-group campos">
        <input type="number" class="inp-tel-cl" id="tel-cl" name="tel-cl" min="0" tabindex="6">
       </div>
       <div class="form-group campos">
         <label class="lb-otro-cl" for="otro-cl">Otro</label>
        </div>
        <div class="form-group campos">
         <input type="text" class="inp-otro-cl" id="otro-cl" name="otro-cl" tabindex="7">
        </div>   
        <div class="form-group campos">
         <label class="lb-cont-cl" for="cont-cl">Contacto</label>
        </div>
        <div class="form-group campos">
         <input type="text" class="inp-cont-cl" id="cont-cl" name="cont-cl" tabindex="8">
        </div>   
     </div>
     <div class="row fila">
      <div class="form-group campos">
        <label class="lb-dir-cl" for="dir-cl">Direccion</label>
       </div>
       <div class="form-group campos">
        <input type="text" class="inp-dir-cl" id="dir-cl" name="dir-cl" tabindex="9">
       </div>
       <div class="form-group campos">
         <label class="lb-ciud-cl" for="ciud-cl">Ciudad</label>
        </div>
        <div class="form-group campos">
         <input type="text" class="inp-ciud-cl" id="ciud-cl" name="ciud-cl" tabindex="10">
        </div> 
     </div>
     <div class="row fila  col-xl-12">    
        <div class="form-group campos col-xl-4">
          <label class="lb-email-cl" for="email-cl">Email</label>
          <input type="email" class="inp-email-cl" id="email-cl" name="email-cl" tabindex="11">
        </div>
        <div class="form-group campos col-xl-2">
            <label class="lb-plazo-cl" for="plazo-cl">Plazo</label>
            <input type="text" class="inp-plazo-cl" id="plazo-cl" name="plazo-cl" tabindex="12">
        </div> 
        <div class="form-group chs col-xl-5">
          <input type="checkbox" id="cbox1-cl" class="inp-cbox1-cl" name="cbox1-cl" value="norete" tabindex="13"><label for="cbox1" class="lb-cboxs campos">No Retenedor</label>
          <input type="checkbox" id="cbox2-cl" class="inp-cbox2-cl" name="cbox2-cl" value="grancon" tabindex="14"><label for="cbox1" class="lb-cboxs campos">Gran Contribuyente</label>
          <input type="checkbox" id="cbox3-cl" class="inp-cbox3-cl" name="cbox3-cl" value="rteiva" tabindex="15"><label for="cbox1" class="lb-cboxs campos">Rte Iva</label>
        </div> 
       </div>
      <div class="row fila  col-xl-12">
        <div class="form-group col-xl-3">
          <input type="button" class="btn btn-secondary  btn1" id="btnant" name="btnant"  value="Ant" onclick="javascript: AntDatoscl();"> 
          <input type="button" class="btn btn-secondary btn1" id="btnsig" name="btnsig"  value="Sig" onclick="javascript: SigDatoscl();">
          <!--<a id="link-exce" href="../../control/clientes/excel.php">Generar XLS</a>-->
        </div> 
        <div class="form-group col-xl-8">
          <input type="button" class="btn btn-primary btn2" id="btnclear" name="btnclear"  value="Nuevo" onclick="javascript: ClearDatoscl();">
          <input type="button" class="btn btn-primary btn2" id="btnnuevo" name="btnnuevo"  value="Grabar" onclick="javascript: NuevoDatoscl();">
          <input type="button" class="btn btn-primary btn2" id="btneditar" name="btneditar"  value="Editar" data-toggle="modal" data-target="#Modalcl2" >
          <input type="button" class="btn btn-primary btn2" id="btn-excel-pro" name="btn-excel-pro"  value="Excel" onclick="javascript: ExcelDatoscl();"> 
          <input type="button" class="btn btn-primary btn2" id="btnborrar" name="btnborrar"  value="Borrar" data-toggle="modal" data-target="#Modalcl"> 
        </div> 
       </div>
      <div class="alert alert-dark row fila col-xl-12"> 
       <span id="respuestacl"></span> 
      </div>
   </div>
</div>


<script>
   //buscador interactivo clientes
   $(document).ready(function(){		
        $("#buscar-cl").on("keyup",function(){
        BuscarDatoscl();
        
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