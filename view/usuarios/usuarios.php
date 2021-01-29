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
   <div class="contenedor-datos3">
    <div class="row">
      <div class="titulo3">
        <h4>Usuarios</h4>
      </div>
      <div class="btncerrarusu">
          <input type="button" class="btn btn-outline-danger btnc" id="btncerrarusu" name="btncerrarusu" value="X" onclick="javascript:Cerrarvistaus();">
      </div>
    </div>
    <div class="row fila">  
      <div class="form-group">
       <label class="lb-buscar-usu" for="buscar-usu">Buscar:</label>
      </div>
      <div class="form-group">
       <input type="text" class="inp-buscar-usu" id="buscar-usu" name="buscar-usu" placeholder="ingrese login de usuario" tabindex="1">
      </div>
      <div class="form-group campos">
       <label class="lb-cod-usu" for="cod-usu">Codigo</label>
      </div>
      <div class="form-group campos">
       <input type="text" class="inp-cod-usu" id="cod-usu" name="cod-usu" readonly="readonly">
      </div>       
     </div>
     <div class="row fila">
      <div class="form-group campos">
       <label class="lb-ide-usu" for="ide-usu">Identificacion</label>
      </div>
      <div class="form-group campos">
       <input type="text" class="inp-ide-usu" id="ide-usu" name="ide-usu"  required tabindex="2">
      </div>
      <div class="form-group campos">
       <label class="lb-nom-usu" for="nom-usu">Nombre</label>
      </div>
      <div class="form-group campos">
       <input type="text" class="inp-nom-usu" id="nom-usu" name="nom-usu" tabindex="3" >
      </div>
      <div class="form-group campos">
       <label class="lb-ape-usu" for="ape-usu">Apellidos</label>
      </div>
      <div class="form-group campos">
       <input type="text" class="inp-ape-usu" id="ape-usu" name="ape-usu" tabindex="4">
      </div>
     </div>
     <div class="row fila">
     <div class="form-group campos">
       <label class="lb-log-usu" for="log-usu">Login</label>
      </div>
      <div class="form-group campos">
       <input type="text" class="inp-log-usu" id="log-usu" name="log-usu" tabindex="5" >
      </div>
      <div class="form-group campos">
       <label class="lb-pass-usu" for="pass-usu">Contraseña</label>
      </div>
      <div class="form-group campos">
       <input type="password" class="inp-pass-usu" id="pass-usu" name="pass-usu" tabindex="6">
      </div>
      <div class="form-group campos">
       <label class="lb-rol-usu" for="rol-usu">Rol</label>
      </div>
      <div class="form-group campos">
       <input type="text" class="inp-rol-usu" id="rol-usu" name="rol-usu" tabindex="7">
      </div>
      <div class="form-group campos">
       <label class="lb-anul-usu" for="anul-usu">Anular</label>
      </div>
      <div class="form-group campos">
       <input type="text" class="inp-anul-usu" id="anul-usu" name="anul-usu" tabindex="8">
      </div>
     </div>
     <div class="row fila">
     <div class="form-group campos">
       <label class="lb-est-usu" for="est-usu">Estado</label>
      </div>
      <div class="form-group campos">
       <input type="text" class="inp-est-usu" id="est-usu" name="est-usu" tabindex="9">
      </div>
      <div class="form-group campos">
       <label class="lb-mail-usu" for="mail-usu">Email</label>
      </div>
      <div class="form-group campos">
       <input type="email" class="inp-mail-usu" id="mail-usu" name="mail-usu"tabindex="10">
      </div>
     </div> 
      <div class="row fila  col-xl-12">
        <div class="form-group col-xl-3">
          <input type="button" class="btn btn-secondary btn1" id="btnant" name="btnant"  value="Ant" onclick="javascript: AntDatosus();"> 
          <input type="button" class="btn btn-secondary btn1" id="btnsig" name="btnsig"  value="Sig" onclick="javascript: SigDatosus();"> 
        </div> 
        <div class="form-group col-xl-8">
        <input type="button" class="btn btn-primary btn2" id="btnclear" name="btnclear"  value="Nuevo" onclick="javascript: ClearDatosus();">  
        <input type="button" class="btn btn-primary btn2" id="btnnuevo" name="btnnuevo"  value="Grabar" onclick="javascript:NuevoDatosus();"> 
        <input type="button" class="btn btn-primary btn2" id="btn-editar-pro" name="btn-editar-pro" value="Editar" data-toggle="modal" data-target="#Modalus2">
        <input type="button" class="btn btn-primary btn2" id="btn-excel-pro" name="btn-excel-pro"  value="Excel" onclick="javascript: ExcelDatosus();"> 
        <input type="button" class="btn btn-primary btn2" id="btn-borrar-pro" name="btn-borrar-pro" value="Borrar" data-toggle="modal" data-target="#Modalus">
        </div> 
      </div>
      <div class="alert alert-dark row fila col-xl-12"> 
       <span id="respuestaus"></span> 
      </div>
   </div>
</div>
<script>
   //buscador interactivo usuarios
   $(document).ready(function(){		
        $("#buscar-usu").on("keyup",function(){
          BuscarDatosus();
        
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
