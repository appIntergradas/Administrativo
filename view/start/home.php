
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indusesgos S.A.S</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../view/css/stylesfact.css">
</head>
<body>
    <div class="container-fluid menu">
     <div class="row col-xl-12">
         <?php include_once '../../view/start/menu.php'; ?>
        <div class="logout col-xl-2">
        <span class="user"><?= $nameuser ?></span>
         <a class="salida" href="../../control/start/logout.php">Salir<span class="caret"></span></a>
       </div>
    </div>
     <div class="row main-container">
      <h6 class="col-xl-1 indica"></h6>
     </div>
   </div>
   
   <div id="contenido_usuarios"></div>
   <div id="contenido_clientes"></div>
   <div id="contenido_proveedores"></div>
   <div id="contenido_articulos"></div>
   <div id="contenido_facturacion"></div>
   <div id="contenido_anularfact"></div>
   <div id="contenido_impresion"></div>
   <div id="contenido_impresionco"></div>
   <div id="contenido_compras"></div>
   <div id="contenido_anularcompr"></div>
   <div id="contenido_recibo"></div>

  
   <script>
   
    $(document).ready(function(){		
       $("#llamar_clientes").on("click", function(e){
				 e.preventDefault();
        $("#contenido_proveedores").css("display", "none");
        $("#contenido_usuarios").css("display", "none");
        $("#contenido_facturacion").css("display", "none");
        $("#contenido_anularfact").css("display", "none");
        $("#contenido_impresion").css("display", "none");
        $("#contenido_impresionco").css("display", "none");
        $("#contenido_articulos").css("display", "none");
        $("#contenido_anularcompr").css("display", "none");
        $("#contenido_compras").css("display", "none");
        $("#contenido_recibo").css("display", "none");
        $("#contenido_proveedores").empty();
        $("#contenido_usuarios").empty();
        $("#contenido_facturacion").empty();
        $("#contenido_anularfact").empty();
        $("#contenido_impresion").empty();
        $("#contenido_impresionco").empty();
        $("#contenido_articulos").empty();
        $("#contenido_anularcompr").empty();
        $("#contenido_compras").empty();
        $("#contenido_recibo").empty();
        $("#contenido_clientes").css("display", "block"); 
        $("#contenido_clientes").load("../../control/clientes/index.php");
        });
      });

    $(document).ready(function(){		
        $("#llamar_proveedores").on("click", function(e){
				 e.preventDefault();
         $("#contenido_clientes").css("display", "none");
         $("#contenido_usuarios").css("display", "none");
         $("#contenido_facturacion").css("display", "none");
         $("#contenido_anularfact").css("display", "none");
         $("#contenido_impresion").css("display", "none");
         $("#contenido_impresionco").css("display", "none");
         $("#contenido_articulos").css("display", "none");
         $("#contenido_anularcompr").css("display", "none");
         $("#contenido_compras").css("display", "none");
         $("#contenido_recibo").css("display", "none");
         $("#contenido_clientes").empty();
         $("#contenido_usuarios").empty();
         $("#contenido_facturacion").empty();
         $("#contenido_anularfact").empty();
         $("#contenido_impresion").empty();
         $("#contenido_impresionco").empty();
         $("#contenido_articulos").empty();
         $("#contenido_anularcompr").empty();
         $("#contenido_compras").empty();
         $("#contenido_recibo").empty();
         $("#contenido_proveedores").css("display", "block");
         $("#contenido_proveedores").load("../../control/proveedores/index.php");
        });
    	});
    $(document).ready(function(){	
        $("#llamar_usuarios").on("click", function(e){
				 e.preventDefault();
         $("#contenido_clientes").css("display", "none");
         $("#contenido_proveedores").css("display", "none");
         $("#contenido_facturacion").css("display", "none");
         $("#contenido_anularfact").css("display", "none");
         $("#contenido_impresion").css("display", "none");
         $("#contenido_impresionco").css("display", "none");
         $("#contenido_articulos").css("display", "none");
         $("#contenido_anularcompr").css("display", "none");
         $("#contenido_compras").css("display", "none");
         $("#contenido_recibo").css("display", "none");
         $("#contenido_clientes").empty();
         $("#contenido_proveedores").empty();
         $("#contenido_facturacion").empty();
         $("#contenido_anularfact").empty();
         $("#contenido_impresion").empty();
         $("#contenido_impresionco").empty();
         $("#contenido_articulos").empty();
         $("#contenido_anularcompr").empty();
         $("#contenido_compras").empty();
         $("#contenido_recibo").empty();
         $("#contenido_usuarios").css("display", "block");
         $("#contenido_usuarios").load("../../control/usuarios/index.php");
        });
		});
    $(document).ready(function(){	
        $("#llamar_articulos").on("click", function(e){
				 e.preventDefault();
         $("#contenido_clientes").css("display", "none");
         $("#contenido_proveedores").css("display", "none");
         $("#contenido_facturacion").css("display", "none");
         $("#contenido_anularfact").css("display", "none");
         $("#contenido_impresion").css("display", "none");
         $("#contenido_impresionco").css("display", "none");
         $("#contenido_usuarios").css("display", "none");
         $("#contenido_anularcompr").css("display", "none");
         $("#contenido_compras").css("display", "none");
         $("#contenido_recibo").css("display", "none");
         $("#contenido_clientes").empty();
         $("#contenido_proveedores").empty();
         $("#contenido_facturacion").empty();
         $("#contenido_anularfact").empty();
         $("#contenido_impresion").empty();
         $("#contenido_impresionco").empty();
         $("#contenido_usuarios").empty();
         $("#contenido_anularcompr").empty();
         $("#contenido_compras").empty();
         $("#contenido_recibo").empty();
         $("#contenido_articulos").css("display", "block");
         $("#contenido_articulos").load("../../control/articulos/index.php");
        });
		});
    
    $(document).ready(function(){		
        $("#llamar_facturacion").on("click", function(e){ 
				 e.preventDefault();
        $("#contenido_clientes").css("display", "none");
        $("#contenido_proveedores").css("display", "none");
        $("#contenido_usuarios").css("display", "none");
        $("#contenido_anularfact").css("display", "none");
        $("#contenido_impresion").css("display", "none");
        $("#contenido_impresionco").css("display", "none");
        $("#contenido_articulos").css("display", "none");
        $("#contenido_anularcompr").css("display", "none");
        $("#contenido_compras").css("display", "none"); 
        $("#contenido_recibo").css("display", "none");
        $("#contenido_clientes").empty();
        $("#contenido_proveedores").empty();
        $("#contenido_usuarios").empty();
        $("#contenido_anularfact").empty();
        $("#contenido_impresion").empty();
        $("#contenido_impresionco").empty();
        $("#contenido_articulos").empty();
        $("#contenido_anularcompr").empty();
        $("#contenido_compras").empty(); 
        $("#contenido_recibo").empty();
        $("#contenido_facturacion").css("display", "block");   
        $("#contenido_facturacion").load("../../control/facturacion/index.php");
        $('.btn-buscar').load('../../control/facturacion/btnllamafa.php');
        $('.input-numero-fact').load('../../control/facturacion/inpllamafa.php');
        $("cod-cl-fa").focus();
       });
      });
          
    $(document).ready(function(){		
        $("#llamar_anularfact").on("click", function(e){
				 e.preventDefault();
        $("#contenido_clientes").css("display", "none");
        $("#contenido_proveedores").css("display", "none");
        $("#contenido_usuarios").css("display", "none");
        $("#contenido_facturacion").css("display", "none");
        $("#contenido_impresion").css("display", "none");
        $("#contenido_impresionco").css("display", "none");
        $("#contenido_articulos").css("display", "none");
        $("#contenido_anularcompr").css("display", "none");
        $("#contenido_compras").css("display", "none");
        $("#contenido_recibo").css("display", "none");
        $("#contenido_clientes").empty();
        $("#contenido_proveedores").empty();
        $("#contenido_usuarios").empty();
        $("#contenido_facturacion").empty();
        $("#contenido_impresion").empty();
        $("#contenido_impresionco").empty();
        $("#contenido_articulos").empty();
        $("#contenido_anularcompr").empty();
        $("#contenido_compras").empty();
        $("#contenido_recibo").empty();
        $("#contenido_anularfact").css("display", "block");
        $("#contenido_anularfact").load("../../control/facturacion/index2.php");
        $(".dataTables_wrapper .dataTables_filter").css("display", "block");
        });
      });
    $(document).ready(function(){		
        $("#llamar_compras").on("click", function(e){
				 e.preventDefault();
        $("#contenido_clientes").css("display", "none");
        $("#contenido_proveedores").css("display", "none");
        $("#contenido_usuarios").css("display", "none");
        $("#contenido_impresion").css("display", "none");
        $("#contenido_impresionco").css("display", "none");
        $("#contenido_articulos").css("display", "none"); 
        $("#contenido_facturacion").css("display", "none");
        $("#contenido_anularfact").css("display", "none");
        $("#contenido_anularcompr").css("display", "none");
        $("#contenido_recibo").css("display", "none");
        $("#contenido_clientes").empty();
        $("#contenido_proveedores").empty();
        $("#contenido_usuarios").empty();
        $("#contenido_impresion").empty();
        $("#contenido_impresionco").empty();
        $("#contenido_articulos").empty(); 
        $("#contenido_facturacion").empty();
        $("#contenido_anularfact").empty();
        $("#contenido_anularcompr").empty();
        $("#contenido_recibo").empty();
        $("#contenido_compras").css("display", "block"); 
        $("#contenido_compras").load("../../control/compras/index.php");
        $('.btn-buscar').load('../../control/compras/btnllamaco.php');
        $('.input-numero-comp').load('../../control/compras/inpllamaco.php');
        $("cod-cl-co").focus();
       });
      });
      
    $(document).ready(function(){		
        $("#llamar_anularcompr").on("click", function(e){
				 e.preventDefault();
        $("#contenido_clientes").css("display", "none");
        $("#contenido_proveedores").css("display", "none");
        $("#contenido_usuarios").css("display", "none");
        $("#contenido_facturacion").css("display", "none");
        $("#contenido_anularfact").css("display", "none");
        $("#contenido_impresion").css("display", "none");
        $("#contenido_impresionco").css("display", "none");
        $("#contenido_articulos").css("display", "none");
        $("#contenido_compras").css("display", "none"); 
        $("#contenido_recibo").css("display", "none");
        $("#contenido_clientes").empty();
        $("#contenido_proveedores").empty();
        $("#contenido_usuarios").empty();
        $("#contenido_facturacion").empty();
        $("#contenido_anularfact").empty();
        $("#contenido_impresion").empty();
        $("#contenido_impresionco").empty();
        $("#contenido_articulos").empty();
        $("#contenido_compras").empty(); 
        $("#contenido_recibo").empty();
        $("#contenido_anularcompr").css("display", "block");
        $("#contenido_anularcompr").load("../../control/compras/index2.php");
        $(".dataTables_wrapper .dataTables_filter").css("display", "block");
        });
      });
    $(document).ready(function(){		
        $("#llamar_recibo").on("click", function(e){
				 e.preventDefault();
        $("#contenido_clientes").css("display", "none");
        $("#contenido_proveedores").css("display", "none");
        $("#contenido_usuarios").css("display", "none");
        $("#contenido_facturacion").css("display", "none");
        $("#contenido_anularfact").css("display", "none");
        $("#contenido_impresion").css("display", "none");
        $("#contenido_impresionco").css("display", "none");
        $("#contenido_articulos").css("display", "none");
        $("#contenido_compras").css("display", "none"); 
        $("#contenido_anularcompr").css("display", "none");
        $("#contenido_clientes").empty();
        $("#contenido_proveedores").empty();
        $("#contenido_usuarios").empty();
        $("#contenido_facturacion").empty();
        $("#contenido_anularfact").empty();
        $("#contenido_impresion").empty();
        $("#contenido_impresionco").empty();
        $("#contenido_articulos").empty();
        $("#contenido_compras").empty(); 
        $("#contenido_anularcompr").empty();
        $("#contenido_recibo").css("display", "block");
        $("#contenido_recibo").load("../../control/recibos/index.php");
        $(".dataTables_wrapper .dataTables_filter").css("display", "block");
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
<script>
//ajax boton nuevo usuarios
function NuevoDatosus(){
        var exp=/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
        var ideusu = $("#ide-usu").val();
        var nomusu = $("#nom-usu").val();
        var apeusu = $("#ape-usu").val();
        var logusu = $("#log-usu").val();
        var passusu = $("#pass-usu").val();
        var rolusu = $("#rol-usu").val();
        var estusu = $("#est-usu").val();
        var mailusu = $("#mail-usu").val();
        var anulusu = $("#anul-usu").val();
        $('#respuestaus').html('');
        if(ideusu !="" && nomusu !="" && apeusu !="" && logusu !="" && passusu !="" && rolusu !="" && estusu !="" && mailusu !="" && anulusu!=""){
          if(anulusu ==1 || anulusu==0){

          
          if(exp.test(mailusu)){
          $.ajax({
            type: 'POST',
            url: '../../control/usuarios/new.php',
            data:('ide_usu='+ideusu+'&nom_usu='+nomusu+'&ape_usu='+apeusu+'&log_usu='+logusu+'&pass_usu='+passusu+'&rol_usu='+rolusu+'&est_usu='+estusu+'&mail_usu='+mailusu+'&anul_usu='+anulusu),
            success: function(res){
              if(res==4){
                $('#respuestaus').html('los datos se guardaron correctamente').css("color","#28a745");
                $('#buscar-usu').val('');
                $('#cod-usu').val('');
                $('#ide-usu').val('');
                $('#nom-usu').val('');
                $('#ape-usu').val('');
                $('#log-usu').val('');
                $('#pass-usu').val('');
                $('#rol-usu').val('');
                $('#est-usu').val('');
                $('#mail-usu').val('');
                $("#anul-usu").val('');           
              }else{if(res==1){
                $('#respuestaus').html('El usuario ya existe, intente de nuevo..').css("color","red");
                
                     }else{if(res==0){
                      $('#respuestaus').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                      
                            }
                          }
                    }
            }

        });
          }else{
                $('#respuestaus').html('El correo no es valido.intentelo de nuevo..').css("color","red");
                $("#mail-usu").focus().css("border-color","#000138");
          }
     
          }else{
                $('#respuestaus').html('El valor para anular no es valido.').css("color","red");
                $("#anul-usu").focus().css("border-color","#000138");
          }

        }else{
          $('#respuestaus').html('Debe completar la informacion.').css("color","red");
        }
        
}

//ajax boton buscar usuarios
function BuscarDatosus(){
        var buscarusu = $("#buscar-usu").val();
        if(buscarusu =="" || buscarusu == null){
        $('#buscar-usu').html('');
        $('#respuestaus').html('');
        $('#cod-usu').val('');
        $('#ide-usu').val('');
        $('#nom-usu').val('');
        $('#ape-usu').val('');
        $('#log-usu').val('');
        $('#pass-usu').val('');
        $('#rol-usu').val('');
        $('#anul-usu').val('');
        $('#est-usu').val('');
        $('#mail-usu').val('');
        }else{
          $.ajax({
            type: 'POST',
            url: '../../control/usuarios/search.php',
            data:('buscar_usu='+buscarusu),
            dataType: "json",
            success: function(res){
              if(res!=1 && res !=0 && res !=2){
                var info = JSON.parse(JSON.stringify(res));
                $('#respuestaus').html('Informacion Encontrada.').css("color","#28a745");
                $('#cod-usu').val(info.usu_codigo);
                $('#ide-usu').val(info.usu_identificacion);
                $('#nom-usu').val(info.usu_nombre);
                $('#ape-usu').val(info.usu_apellidos);
                $('#log-usu').val(info.usu_login);
                $('#pass-usu').val(info.usu_passwd);
                $('#rol-usu').val(info.rol_codigo);
                $('#est-usu').val(info.usu_estado);
                $('#mail-usu').val(info.usu_mail);
                $('#anul-usu').val(info.usu_anul);                           
              }else{if(res==1){
                $('#respuestaus').html('No hay Resultados').css("color","red");
                $('#buscar-usu').html('');
                $('#cod-usu').val('');
                $('#ide-usu').val('');
                $('#nom-usu').val('');
                $('#ape-usu').val('');
                $('#log-usu').val('');
                $('#pass-usu').val('');
                $('#rol-usu').val('');
                $('#anul-usu').val('');
                $('#est-usu').val('');
                $('#mail-usu').val('');
                    }else{if(res==2){
                       $('#respuestaus').html('Informacion Ocupada, intentelo de nuevo..').css("color","red");
                      }else{if(res==0){
                        $('#respuestaus').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                              }
                            }
                          }
                  }
            }

        });
        }        
}
//bton siguiente usuarios
function SigDatosus(){
  var buscarusu = $("#buscar-usu").val();
  var idus = $("#cod-usu").val();
  $('#respuestaus').html('');
  $.ajax({
            type: 'POST',
            url: '../../control/usuarios/searchsig.php',
            data:('us_id='+idus+'&buscar_usu='+buscarusu),
            dataType: "json",
            success: function(res){
              if(res!=1 && res !=2){
                var info = JSON.parse(JSON.stringify(res));
                $('#respuestaus').html('Informacion Encontrada.').css("color","#28a745");
                $('#cod-usu').val(info.usu_codigo);
                $('#ide-usu').val(info.usu_identificacion);
                $('#nom-usu').val(info.usu_nombre);
                $('#ape-usu').val(info.usu_apellidos);
                $('#log-usu').val(info.usu_login);
                $('#pass-usu').val(info.usu_passwd);
                $('#rol-usu').val(info.rol_codigo);
                $('#est-usu').val(info.usu_estado);
                $('#mail-usu').val(info.usu_mail);
                $('#anul-usu').val(info.usu_anul);
                           
              }else{if(res==1){
                  $('#respuestaus').html('No hay registros para mostrar').css("color","red");
                  }else{
                        if(res==2){
                          $('#respuestaus').html('No hay mas Resultados para mostrar').css("color","red");  
                        }
                  }
              } 

            }
          });               
}
//bton anterior usuarios
function AntDatosus(){
  var buscarusu = $("#buscar-usu").val();
  var idus= $("#cod-usu").val();
  $('#respuestaus').html('');
  $.ajax({
            type: 'POST',
            url: '../../control/usuarios/searchant.php',
            data:('us_id='+idus+'&buscar_usu='+buscarusu),
            dataType: "json",
            success: function(res){
              if(res!=1 && res !=2){
                var info = JSON.parse(JSON.stringify(res));
                $('#respuestaus').html('Informacion Encontrada.').css("color","#28a745");
                $('#cod-usu').val(info.usu_codigo);
                $('#ide-usu').val(info.usu_identificacion);
                $('#nom-usu').val(info.usu_nombre);
                $('#ape-usu').val(info.usu_apellidos);
                $('#log-usu').val(info.usu_login);
                $('#pass-usu').val(info.usu_passwd);
                $('#rol-usu').val(info.rol_codigo);
                $('#est-usu').val(info.usu_estado);
                $('#mail-usu').val(info.usu_mail);
                $('#anul-usu').val(info.usu_anul);
                           
              }else{if(res==1){
                  $('#respuestaus').html('No hay registros para mostrar.').css("color","red");
                  }else{
                        if(res==2){
                          $('#respuestaus').html('No hay mas Resultados para mostrar.').css("color","red");  
                        }
                  }
              } 

            }
          });                 
}

//ajax boton editar usuarios
function EditarDatosus(){
        var exp=/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
        var codusu =  $('#cod-usu').val();
        var ideusu = $("#ide-usu").val();
        var nomusu = $("#nom-usu").val();
        var apeusu = $("#ape-usu").val();
        var logusu = $("#log-usu").val();
        var passusu = $("#pass-usu").val();
        var rolusu = $("#rol-usu").val();
        var estusu = $("#est-usu").val();
        var mailusu = $("#mail-usu").val();
        var anulusu = $("#anul-usu").val();
        
        $('#respuestaus').html('');
        if(codusu != "" && ideusu !="" && nomusu !="" && apeusu !="" && logusu !="" && passusu !="" && rolusu !="" && estusu !="" && mailusu !=""){
          if(anulusu ==1 || anulusu==0){
          if(exp.test(mailusu)){
          $.ajax({
            type: 'POST',
            url: '../../control/usuarios/edit.php',
            data:('cod_usu='+codusu+'&ide_usu='+ideusu+'&nom_usu='+nomusu+'&ape_usu='+apeusu+'&log_usu='+logusu+'&pass_usu='+passusu+'&rol_usu='+rolusu+'&est_usu='+estusu+'&mail_usu='+mailusu+'&anul_usu='+anulusu),
            success: function(res){
              if(res==4){
                $('#respuestaus').html('los datos se modificaron correctamente').css("color","#28a745");
                $('#buscar-usu').val('');
                $('#cod-usu').val('');
                $('#ide-usu').val('');
                $('#nom-usu').val('');
                $('#ape-usu').val('');
                $('#log-usu').val('');
                $('#pass-usu').val('');
                $('#rol-usu').val('');
                $('#est-usu').val('');
                $('#mail-usu').val(''); 
                $("#anul-usu").val('');          
              }else{if(res==1){
                $('#respuestaus').html('ERROR al modificar los datos, intente de nuevo..').css("color","red");
                
                     }else{if(res==0){
                           $('#respuestaus').html('ERROR,falta alguna informacion intentelo de nuevo..').css("color","red");
                           }else{
                               if(res==2){
                                $('#respuestaus').html('ERROR usuario no existe.').css("color","red");
                                $("#ide-usu").focus().css("border-color","#000138");
                                
                               }
                            }
                          }
                    }
            }

        });
          }else{
                $('#respuestaus').html('El correo no es valido.intentelo de nuevo..').css("color","red");
                $("#mail-usu").focus().css("border-color","#000138");
          }
        }else{
                $('#respuestaus').html('El valor para anular no es valido.').css("color","red");
                $("#anul-usu").focus().css("border-color","#000138");
          }
        }else{
          $('#respuestaus').html('Debe completar la informacion.').css("color","red");
        }
        
}
//ajax boton borrar usuarios
function BorrarDatosus(){
        var ideusu = $("#ide-usu").val();
                
        $('#respuestaus').html('');
        if(ideusu != "" && ideusu!=null){
          $.ajax({
            type: 'POST',
            url: '../../control/usuarios/delete.php',
            data:('ide_usu='+ideusu),
            success: function(res){
              if(res==4){
                $('#respuestaus').html('los datos se borraron correctamente').css("color","#28a745");
                $('#buscar-usu').val('');
                $('#cod-usu').val('');
                $('#ide-usu').val('');
                $('#nom-usu').val('');
                $('#ape-usu').val('');
                $('#log-usu').val('');
                $('#pass-usu').val('');
                $('#rol-usu').val('');
                $('#est-usu').val('');
                $('#mail-usu').val(''); 
                $("#anul-usu").val('');           
              }else{if(res==1){
                $('#respuestaus').html('ERROR al borrar los datos, intente de nuevo..').css("color","red");
                
                     }else{if(res==0){
                      $('#respuestaus').html('ERROR,debe seleccionar el registro a borrar').css("color","red");
                      
                            }
                          }
                    }
            }

        });
        }else{
          $('#respuestaus').html('Debe especificar el archivo que se va a borrar').css("color","red");
        }
        
}

// boton Cerrar Vista usuarios
function Cerrarvistaus(){
  $("#contenido_usuarios").empty();
  $("#contenido_usuarios").css("display", "none");

}

//ajax boton Limpiar campos usuarios
function ClearDatosus(){
  $('#respuestaus').html('');
  $('#buscar-usu').val('');
  $('#cod-usu').val('');
  $('#ide-usu').val('');
  $('#nom-usu').val('');
  $('#ape-usu').val('');
  $('#log-usu').val('');
  $('#pass-usu').val('');
  $('#rol-usu').val('');
  $('#est-usu').val('');
  $('#anul-usu').val('');
  $('#mail-usu').val('');
  $("#ide-usu").focus().css("border-color","#000138");
}

// boton Cerrar Vista articulos
function Cerrarvistart(){
  $("#contenido_articulos").empty();
  $("#contenido_articulos").css("display", "none");

}
//ajax boton nuevo articulo
function NuevoDatosart(){
        
        var codart = $("#id-art").val();
        var desart = $("#des-art").val();
        var refart = $("#ref-art").val();
        var cantart = $("#cant-art").val();
        var vacoart = $("#vaco-art").val();
        var vave1art = $("#vave1-art").val();
        var vave2art = $("#vave2-art").val();
        var vave3art = $("#vave3-art").val();
        $('#respuestart').html('');
        if(codart !="" && desart !="" && refart !="" && cantart !="" && vacoart !="" && vave1art !="" && vave2art !="" && vave3art !=""){
          $.ajax({
            type: 'POST',
            url: '../../control/articulos/new.php',
            data:('cod_art='+codart+'&des_art='+desart+'&ref_art='+refart+'&cant_art='+cantart+'&vaco_art='+vacoart+'&vave1_art='+vave1art+'&vave2_art='+vave2art+'&vave3_art='+vave3art),
            success: function(res){
              if(res==4){
                $('#respuestart').html('los datos se guardaron correctamente').css("color","#28a745");
                $("#id-art").val('');
                $("#des-art").val('');
                $("#ref-art").val('');
                $("#cant-art").val('');
                $("#vaco-art").val('');
                $("#vave1-art").val('');
                $("#vave2-art").val('');
                $("#vave3-art").val('');          
              }else{if(res==1){
                $('#respuestart').html('No se pudo realizar la operacion, intente de nuevo..').css("color","red");
                
                     }else{if(res==0){
                      $('#respuestart').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                      
                            }else{
                              if(res==2){
                                $('#respuestart').html('ERROR error codigo ya exite..').css("color","red");
                              }
                            }
                          }
                    }
            }

        });
        }else{
          $('#respuestart').html('Debe completar la informacion.').css("color","red");
        }
        
}
//ajax boton buscar articulos
function BuscarDatoart(){
        var buscarart = $("#buscar-art").val();
        if(buscarart =="" || buscarart == null){
        $("#des-art").val('');
        $("#id-art").val('');
        $("#ref-art").val('');
        $("#cant-art").val('');
        $("#vaco-art").val('');
        $("#vave1-art").val('');
        $("#vave2-art").val('');
        $("#vave3-art").val('');
        $('#respuestart').html('');

        }else{
          $.ajax({
            type: 'POST',
            url: '../../control/articulos/search.php',
            data:('buscar_art='+buscarart),
            dataType: "json",
            success: function(res){
              if(res!=1 && res !=0 && res !=2){
                var info = JSON.parse(JSON.stringify(res));
                $('#respuestart').html('Informacion Encontrada.').css("color","#28a745");
                $('#id-art').val(info.art_id);
                $("#des-art").val(info.art_nom);
                $("#ref-art").val(info.art_referencia);
                $("#cant-art").val(info.art_cantidad);
                $("#vaco-art").val(info.art_pcosto);
                $("#vave1-art").val(info.art_pventa);
                $("#vave2-art").val(info.art_pventa2);
                $("#vave3-art").val(info.art_pventa3);
                $("#codi-art").val(info.art_cod);
                           
              }else{if(res==1){
                $('#respuestart').html('No hay Resultados').css("color","red");
                $("#des-art").val('');
                $("#id-art").val('');
                $("#ref-art").val('');
                $("#cant-art").val('');
                $("#vaco-art").val('');
                $("#vave1-art").val('');
                $("#vave2-art").val('');
                $("#vave3-art").val('');
                
                     }else{if(res==2){
                       $('#respuestacl').html('Informacion Ocupada, intentelo de nuevo..').css("color","red");
                       }else{if(res==0){
                          $('#respuestart').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                          
                                }
                            }
                          }
                      
                    }
            }

        });
      } 
}
//bton siguiente articulo
function SigDatosart(){
  var codart = $("#codi-art").val();
  var buscarart = $("#buscar-art").val();
  $('#respuestaus').html('');
  $.ajax({
            type: 'POST',
            url: '../../control/articulos/searchsig.php',
            data:('cod_art='+codart+'&buscar_art='+buscarart),
            dataType: "json",
            success: function(res){
              if(res!=1 && res !=2){
                var info = JSON.parse(JSON.stringify(res));
                $('#respuestart').html('Informacion Encontrada.').css("color","#28a745");
                $('#id-art').val(info.art_id);
                $("#des-art").val(info.art_nom);
                $("#ref-art").val(info.art_referencia);
                $("#cant-art").val(info.art_cantidad);
                $("#vaco-art").val(info.art_pcosto);
                $("#vave1-art").val(info.art_pventa);
                $("#vave2-art").val(info.art_pventa2);
                $("#vave3-art").val(info.art_pventa3);
                $("#codi-art").val(info.art_cod);
                           
              }else{if(res==1){
                  $('#respuestart').html('No hay registros para mostrar.').css("color","red");
                  }else{
                        if(res==2){
                          $('#respuestart').html('No hay mas Resultados para mostrar.').css("color","red");  
                        }
                  }
              } 

            }
          });                 
}
//bton anterior articulo
function  AntDatosart(){
  var codart= $("#codi-art").val();
  var buscarart = $("#buscar-art").val();
  $('#respuestart').html('');
  $.ajax({
            type: 'POST',
            url: '../../control/articulos/searchant.php',
            data:('cod_art='+codart+'&buscar_art='+buscarart),
            dataType: "json",
            success: function(res){
              if(res!=1 && res !=2){
                var info = JSON.parse(JSON.stringify(res));
                $('#respuestart').html('Informacion Encontrada.').css("color","#28a745");
                $('#id-art').val(info.art_id);
                $("#des-art").val(info.art_nom);
                $("#ref-art").val(info.art_referencia);
                $("#cant-art").val(info.art_cantidad);
                $("#vaco-art").val(info.art_pcosto);
                $("#vave1-art").val(info.art_pventa);
                $("#vave2-art").val(info.art_pventa2);
                $("#vave3-art").val(info.art_pventa3);
                $("#codi-art").val(info.art_cod);
                           
              }else{if(res==1){
                  $('#respuestart').html('No hay registros para mostrar.').css("color","red");
                  }else{
                        if(res==2){
                          $('#respuestart').html('No hay mas Resultados para mostrar').css("color","red");  
                        }
                  }
              } 

            }
          });                
}
//ajax boton editar articulos
function EditarDatoart(){
  
        var codart = $("#id-art").val();
        var desart = $("#des-art").val();
        var refart = $("#ref-art").val();
        var cantart = $("#cant-art").val();
        var vacoart = $("#vaco-art").val();
        var vave1art = $("#vave1-art").val();
        var vave2art = $("#vave2-art").val();
        var vave3art = $("#vave3-art").val();
        
        $('#respuestart').html('');
        if(codart !="" && desart !="" && refart !="" && cantart !="" && vacoart !="" && vave1art !="" && vave2art !="" && vave3art !=""){
          $.ajax({
            type: 'POST',
            url: '../../control/articulos/edit.php',
            data:('cod_art='+codart+'&des_art='+desart+'&ref_art='+refart+'&cant_art='+cantart+'&vaco_art='+vacoart+'&vave1_art='+vave1art+'&vave2_art='+vave2art+'&vave3_art='+vave3art),
            success: function(res){
              if(res==4){
                $('#respuestart').html('los datos se guardaron correctamente').css("color","#28a745");
                $("#id-art").val('');
                $("#des-art").val('');
                $("#ref-art").val('');
                $("#cant-art").val('');
                $("#vaco-art").val('');
                $("#vave1-art").val('');
                $("#vave2-art").val('');
                $("#vave3-art").val('');
                $("#buscar-art").val('');
                $("#codi-art").val('');        
              }else{if(res==1){
                $('#respuestart').html('No se pudo realizar la operacion, intente de nuevo..').css("color","red");
                
                     }else{if(res==0){
                      $('#respuestart').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                      
                            }
                          }
                    }
            }

        });
        }else{
          $('#respuestart').html('Debe completar la informacion.').css("color","red");
        }
        
}

//ajax boton borrar articulos
function BorrarDatoart(){
  var codart = $("#id-art").val();
               $('#respuestart').html('');
        if(codart != "" && codart != null ){
          $.ajax({
            type: 'POST',
            url: '../../control/articulos/delete.php',
            data:('cod_art='+codart),
            success: function(res){
              if(res==4){
                $('#respuestart').html('los datos se borraron correctamente').css("color","#28a745");
                $("#id-art").val('');
                $("#des-art").val('');
                $("#ref-art").val('');
                $("#cant-art").val('');
                $("#vaco-art").val('');
                $("#vave1-art").val('');
                $("#vave2-art").val('');
                $("#vave3-art").val(''); 
                $("#buscar-art").val('');
                $("#codi-art").val('');            
              }else{if(res==1){
                $('#respuestart').html('ERROR al borrar los datos, intente de nuevo..').css("color","red");
                
                     }else{if(res==0){
                      $('#respuestart').html('ERROR,debe seleccionar el registro a borrar.').css("color","red");
                           }else{
                             if(res==2){
                              $('#respuestart').html('No se puede borrar este articulo.tiene facturas.').css("color","red");
                             }
                           }
                          }
                    }
            }

        });
        }else{
          $('#respuestart').html('Debe especificar el archivo que se va a borrar').css("color","red");
        }
        
}
//ajax boton Limpiar campos articulos
function ClearDatosart(){

$('#respuestart').html('');
$('#buscar-art').val('');
$("#id-art").val('');
$("#des-art").val('');
$("#ref-art").val('');
$("#cant-art").val('');
$("#vaco-art").val('');
$("#vave1-art").val('');
$("#vave2-art").val('');
$("#vave3-art").val(''); 
$("#codi-art").val(''); 
$("#id-art").focus().css("border-color","#000138");     
}
//para pasar lo campo descripcion a referencia.
function PasarReferenciaArt(){
  var artdesc = $("#des-art").val();
  $('#ref-art').val(artdesc);

}

function listarDatosart(){
  $('#respuestart').html('');
  $("#nav-profile").load("../../control/articulos/list.php");
  
}
//actualizar campos cant y valor en consulta articulos
function updateval3(idart){
        var idart;
        var artcant = $("#artcant"+idart).val();
        var artpventa = $("#artpventa"+idart).val();
        $('#respuestart').html('');
        $("#artcant"+idart).focus().css("border-color","#000138");

        if(idart !="" && artcant !="" && artpventa !=""){
          $.ajax({
              type: 'POST',
              url: '../../control/articulos/updart3.php',
              data:('art_cod='+idart+'&art_cant='+artcant+'&art_valart='+artpventa),
              success: function(res){
                if(res==4){
                $('#respuestart').html('ok').css("color","#28a745");
                $( "#artcant"+idart).focus().css("border-color","#000138");
                $('.contenedor-tabla-arti').load('../../control/articulos/tablaexterna3.php');
                }else{
                  if(res==1){
                    $("#artcant"+idart).focus().css("border-color","red");
                    $('#respuestart').html('verifique la informacion, intente de nuevo..').css("color","red");
                  }else{
                    if(res==2){
                      $("#artcant"+idart).focus().css("border-color","red");
                      $('#respuestart').html('la cantidad debe ser menor al stock..').css("color","red");
                     
                  
                    }else{
                      if(res==0){
                        $( "#artcant"+idart).focus().css("border-color","red");
                        $('#respuestart').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                      }
                    }
                  }
              }
             

            }

        });
        }else{
          $('#respuestapv').html('Debe completar la informacion.').css("color","red");
        }
        
}
//btn borrar articulo desde datatable articulo 
function DelArti(idart){
  var idart;
$('#respuestart').html('');

if(idart !=""){
 $.ajax({
    type: 'POST',
    url: '../../control/articulos/delart.php',
    data:('art_cod='+idart),
    success: function(res){
      if(res==4){
        $('#respuestart').html('los datos se borraron correctamente').css("color","#28a745");
        $( "#artcant"+idart).focus().css("border-color","#000138");
        $('#nav-profile').load('../../control/articulos/tablaexterna4.php');

      }else{if(res==1){
        $('#respuestart').html('verifique la informacion, intente de nuevo..').css("color","red");
        
             }else{if(res==0){
              $('#respuestart').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
              
                    }
                  }
            }
    }

});
}else{
  $('#respuestafa').html('Debe completar la informacion.').css("color","red");
}

}

//ajax boton Grabar clientes
function NuevoDatoscl(){
        var exp=/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
        var nitcl = $("#nit-cl").val();
        var dvcl = $("#dv-cl").val();
        var ciiucl = $("#ciiu-cl").val();
        var razoncl = $("#razon-cl").val();
        var telcl = $("#tel-cl").val();
        var otrocl = $("#otro-cl").val();
        var contcl = $("#cont-cl").val();
        var dircl = $("#dir-cl").val();
        var ciudcl = $("#ciud-cl").val();
        var emailcl = $("#email-cl").val();
        var plazocl = $("#plazo-cl").val();
        var norete ="";
        var grancon ="";
        var rteiva ="";
        $('#respuestacl').html('');
        
      if(nitcl !="" && razoncl !=""){
        if(exp.test(emailcl)){
          if($('.inp-cbox1-cl').prop('checked') ) {
              norete = "si";
          }else{
              norete ="no";
          }
          if($('.inp-cbox2-cl').prop('checked') ) {
              grancon = "si";
          }else{
              grancon ="no";
          }
          if($('.inp-cbox3-cl').prop('checked') ) {
              rteiva = "si";
          }else{
              rteiva ="no";
          }

          $.ajax({
            type: 'POST',
            url: '../../control/clientes/new.php',
            data:('nit_cl='+nitcl+'&dv_cl='+dvcl+'&ciiu_cl='+ciiucl+'&razon_cl='+razoncl+'&tel_cl='+telcl+'&otro_cl='+otrocl+'&cont_cl='+contcl+'&dir_cl='+dircl+'&ciud_cl='+ciudcl+'&email_cl='+emailcl+'&norete_cl='+norete+'&grancon_cl='+grancon+'&rteiva_cl='+rteiva+'&plazo_cl='+plazocl),
            success: function(res){
              if(res==4){
                $('#respuestacl').html('los datos se guardaron correctamente').css("color","#28a745");
                $('#buscar-cl').val('');
                $('#id-cl').val('');
                $("#nit-cl").val('');
                $("#dv-cl").val('');
                $("#ciiu-cl").val('');
                $("#razon-cl").val('');
                $("#tel-cl").val('');
                $("#otro-cl").val('');
                $("#cont-cl").val('');
                $("#dir-cl").val('');
                $("#ciud-cl").val('');
                $("#email-cl").val('');
                $('.inp-cbox1-cl').prop('checked',false);
                $('.inp-cbox2-cl').prop('checked',false);
                $('.inp-cbox3-cl').prop('checked',false);
                $("#plazo-cl").val('');         
              }else{if(res==1){
                $('#respuestacl').html('El cliente ya existe, intente de nuevo..').css("color","red");
                
                     }else{if(res==0){
                      $('#respuestacl').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                      
                            }
                          }
                    }
            }

        });
        }else{
              $('#respuestacl').html('El correo no es valido.intentelo de nuevo..').css("color","red");
              $("#email-cl").focus().css("border-color","#000138");
        }

      }else{
        $('#respuestacl').html('Debe completar la informacion.').css("color","red");
      }
        
}
//ajax boton nuevo clientes para limpiar campos
function ClearDatoscl(){
                $('#respuestacl').html('');
                $('#buscar-cl').val('');
                $('#id-cl').val('');
                $("#nit-cl").val('');
                $("#dv-cl").val('');
                $("#ciiu-cl").val('');
                $("#razon-cl").val('');
                $("#tel-cl").val('');
                $("#otro-cl").val('');
                $("#cont-cl").val('');
                $("#dir-cl").val('');
                $("#ciud-cl").val('');
                $("#email-cl").val('');
                $('.inp-cbox1-cl').prop('checked',false);
                $('.inp-cbox2-cl').prop('checked',false);
                $('.inp-cbox3-cl').prop('checked',false);
                $("#plazo-cl").val(''); 
                $("#nit-cl").focus().css("border-color","#000138");        
}
//boton excel clientes
function ExcelDatoscl(){
  $('#respuestacl').html(''); 
  window.location.href = "../../control/clientes/excel.php";
  $('#respuestacl').html('Archivo Exportado').css("color","#28a745");
 /*$.ajax({
            url: '../../control/clientes/excel.php',
            success: function(data) {
              $('#respuestacl').html('Archivo Exportado').css("color","#28a745");
            }
         });*/
}
//boton excel proveedores
function ExcelDatospv(){
  $('#respuestapv').html(''); 
  window.location.href = "../../control/proveedores/excel.php";
  $('#respuestapv').html('Archivo Exportado').css("color","#28a745");
 }
//boton excel usuarios
function ExcelDatosus(){
  $('#respuestaus').html(''); 
  window.location.href = "../../control/usuarios/excel.php";
  $('#respuestaus').html('Archivo Exportado').css("color","#28a745");
 }
//boton excel articulos
function ExcelDatoart(){
  $('#respuestart').html(''); 
  window.location.href = "../../control/articulos/excel.php";
  $('#respuestart').html('Archivo Exportado').css("color","#28a745");
 }

//ajax boton buscar clientes
function BuscarDatoscl(){
  var buscarcl = $("#buscar-cl").val();
        if(buscarcl =="" || buscarcl==null){
          $('#id-cl').val('');
          $('#nit-cl').val('');
          $('#dv-cl').val('');
          $('#ciiu-cl').val('');
          $('#razon-cl').val('');
          $('#tel-cl').val('');
          $('#otro-cl').val('');
          $('#cont-cl').val('');
          $('#dir-cl').val('');
          $('#ciud-cl').val('');
          $('#email-cl').val('');
          $('.inp-cbox1-cl').prop('checked',false);
          $('.inp-cbox2-cl').prop('checked',false);
          $('.inp-cbox3-cl').prop('checked',false);
          $("#plazo-cl").val('');
          $('#respuestacl').html('');         
        }else{
         
          $.ajax({
            type: 'POST',
            url: '../../control/clientes/search.php',
            data:('buscar_cl='+buscarcl),
            dataType: "json",
            success: function(res){
              if(res!=1 && res !=0 && res !=2){
                var info = JSON.parse(JSON.stringify(res));
                $('#respuestacl').html('Informacion Encontrada.').css("color","#28a745");
                $('#id-cl').val(info.cl_id);
                $('#nit-cl').val(info.cl_nit);
                $('#dv-cl').val(info.cl_dv);
                $('#ciiu-cl').val(info.cl_ciiu);
                $('#razon-cl').val(info.cl_razon);
                $('#tel-cl').val(info.cl_tel);
                $('#otro-cl').val(info.cl_otro);
                $('#cont-cl').val(info.cl_cont);
                $('#dir-cl').val(info.cl_dir);
                $('#ciud-cl').val(info.cl_ciud);
                $('#email-cl').val(info.cl_email);
              
                if(info.cl_norete=="si"){
                  $('.inp-cbox1-cl').prop('checked',true);
                }else{
                  $('.inp-cbox1-cl').prop('checked',false);
                }
                if(info.cl_grancon=="si"){
                  $('.inp-cbox2-cl').prop('checked',true);
                }else{
                  $('.inp-cbox2-cl').prop('checked',false);
                }
                if(info.cl_rteiva=="si"){
                  $('.inp-cbox3-cl').prop('checked',true);
                }else{
                  $('.inp-cbox3-cl').prop('checked',false);
                }
                $('#plazo-cl').val(info.cl_plazo);
                           
              }else{if(res==1){
                $('#respuestacl').html('No hay Resultados').css("color","red");
                $('#id-cl').val('');
                $('#nit-cl').val('');
                $('#dv-cl').val('');
                $('#ciiu-cl').val('');
                $('#razon-cl').val('');
                $('#tel-cl').val('');
                $('#otro-cl').val('');
                $('#cont-cl').val('');
                $('#dir-cl').val('');
                $('#ciud-cl').val('');
                $('#email-cl').val('');
                $('.inp-cbox1-cl').prop('checked',false);
                $('.inp-cbox2-cl').prop('checked',false);
                $('.inp-cbox3-cl').prop('checked',false);
                $("#plazo-cl").val('');
                }else{if(res==2){
                  $('#respuestacl').html('Informacion Ocupada, intentelo de nuevo..').css("color","red");
                    }else{if(res==0){
                      $('#respuestacl').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                      
                          }
                    }
                }
              }
                    
            }

        });
        }
         
  }

//bton siguiente clientes
function SigDatoscl(){
  var buscarcl = $("#buscar-cl").val();
  var idcl = $("#id-cl").val();
  $('#respuestacl').html('');
  $.ajax({
            type: 'POST',
            url: '../../control/clientes/searchsig.php',
            data:('cl_id='+idcl+'&buscar_cl='+buscarcl),
            dataType: "json",
            success: function(res){
              if(res!=1 && res !=2 ){
                var info = JSON.parse(JSON.stringify(res));
                $('#respuestacl').html('Informacion Encontrada.').css("color","#28a745");
                $('#id-cl').val(info.cl_id);
                $('#nit-cl').val(info.cl_nit);
                $('#dv-cl').val(info.cl_dv);
                $('#ciiu-cl').val(info.cl_ciiu);
                $('#razon-cl').val(info.cl_razon);
                $('#tel-cl').val(info.cl_tel);
                $('#otro-cl').val(info.cl_otro);
                $('#cont-cl').val(info.cl_cont);
                $('#dir-cl').val(info.cl_dir);
                $('#ciud-cl').val(info.cl_ciud);
                $('#email-cl').val(info.cl_email);
              
                if(info.cl_norete=="si"){
                  $('.inp-cbox1-cl').prop('checked',true);
                }else{
                  $('.inp-cbox1-cl').prop('checked',false);
                }
                if(info.cl_grancon=="si"){
                  $('.inp-cbox2-cl').prop('checked',true);
                }else{
                  $('.inp-cbox2-cl').prop('checked',false);
                }
                if(info.cl_rteiva=="si"){
                  $('.inp-cbox3-cl').prop('checked',true);
                }else{
                  $('.inp-cbox3-cl').prop('checked',false);
                }
                $('#plazo-cl').val(info.cl_plazo);
                           
              }else{if(res==1){
                  $('#respuestacl').html('No hay registros para mostrar.').css("color","red");
                  }else{
                        if(res==2){
                          $('#respuestacl').html('No hay mas Resultados para mostrar').css("color","red");  
                        }
                  }
              } 

            }
          });
                  
}
//bton anterior clientes
function AntDatoscl(){
  var buscarcl = $("#buscar-cl").val();
  var idcl = $("#id-cl").val();
  $('#respuestacl').html('');
  $.ajax({
            type: 'POST',
            url: '../../control/clientes/searchant.php',
            data:('cl_id='+idcl+'&buscar_cl='+buscarcl),
            dataType: "json",
            success: function(res){
              if(res!=1 && res !=2){
                var info = JSON.parse(JSON.stringify(res));
                $('#respuestacl').html('Informacion Encontrada.').css("color","#28a745");
                $('#id-cl').val(info.cl_id);
                $('#nit-cl').val(info.cl_nit);
                $('#dv-cl').val(info.cl_dv);
                $('#ciiu-cl').val(info.cl_ciiu);
                $('#razon-cl').val(info.cl_razon);
                $('#tel-cl').val(info.cl_tel);
                $('#otro-cl').val(info.cl_otro);
                $('#cont-cl').val(info.cl_cont);
                $('#dir-cl').val(info.cl_dir);
                $('#ciud-cl').val(info.cl_ciud);
                $('#email-cl').val(info.cl_email);
              
                if(info.cl_norete=="si"){
                  $('.inp-cbox1-cl').prop('checked',true);
                }else{
                  $('.inp-cbox1-cl').prop('checked',false);
                }
                if(info.cl_grancon=="si"){
                  $('.inp-cbox2-cl').prop('checked',true);
                }else{
                  $('.inp-cbox2-cl').prop('checked',false);
                }
                if(info.cl_rteiva=="si"){
                  $('.inp-cbox3-cl').prop('checked',true);
                }else{
                  $('.inp-cbox3-cl').prop('checked',false);
                }
                $('#plazo-cl').val(info.cl_plazo);
                           
              }else{if(res==1){
                  $('#respuestacl').html('No hay registros para mostrar.').css("color","red");
                  }else{
                        if(res==2){
                          $('#respuestacl').html('No hay mas Resultados para mostrar').css("color","red");  
                        }
                  }
              } 

            }
          });
                   
}

//ajax boton editar clientes
function EditarDatoscl(){
        var exp=/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
        var idcl = $("#id-cl").val();
        var nitcl = $("#nit-cl").val();
        var dvcl = $("#dv-cl").val();
        var ciiucl = $("#ciiu-cl").val();
        var razoncl = $("#razon-cl").val();
        var telcl = $("#tel-cl").val();
        var otrocl = $("#otro-cl").val();
        var contcl = $("#cont-cl").val();
        var dircl = $("#dir-cl").val();
        var ciudcl = $("#ciud-cl").val();
        var emailcl = $("#email-cl").val();
        var norete ="";
        var grancon ="";
        var rteiva ="";
        
        if(nitcl !="" && razoncl !=""){
          if(exp.test(emailcl)){
           if($('.inp-cbox1-cl').prop('checked')) {
              norete = "si";
           }else{
              norete ="no";
           }
           if($('.inp-cbox2-cl').prop('checked')) {
              grancon = "si";
           }else{
              grancon ="no";
           }
           if($('.inp-cbox3-cl').prop('checked')) {
              rteiva = "si";
           }else{
              rteiva ="no";
           }
        var plazocl = $("#plazo-cl").val();
        if(nitcl != "" && razoncl !="" && nitcl != null && razoncl !=null ){
             $.ajax({
              type: 'POST',
              url: '../../control/clientes/edit.php',
             data:('id_cl='+idcl+'&nit_cl='+nitcl+'&dv_cl='+dvcl+'&ciiu_cl='+ciiucl+'&razon_cl='+razoncl+'&tel_cl='+telcl+'&otro_cl='+otrocl+'&cont_cl='+contcl+'&dir_cl='+dircl+'&ciud_cl='+ciudcl+'&email_cl='+emailcl+'&norete_cl='+norete+'&grancon_cl='+grancon+'&rteiva_cl='+rteiva+'&plazo_cl='+plazocl),
              success: function(res){
                if(res==4){
                $('#respuestacl').html('los datos se modificaron correctamente').css("color","#28a745");
                $('#buscar-cl').val('');
                $("#id-cl").val('');
                $("#nit-cl").val('');
                $("#dv-cl").val('');
                $("#ciiu-cl").val('');
                $("#razon-cl").val('');
                $("#tel-cl").val('');
                $("#otro-cl").val('');
                $("#cont-cl").val('');
                $("#dir-cl").val('');
                $("#ciud-cl").val('');
                $("#email-cl").val('');
                $('.inp-cbox1-cl').prop('checked',false);
                $('.inp-cbox2-cl').prop('checked',false);
                $('.inp-cbox3-cl').prop('checked',false);
                $("#plazo-cl").val(''); 
                }else{ 
                  if(res==1){
                    $('#respuestacl').html('ERROR modificando la informacion.').css("color","red");
                   }else{
                    if(res==0){
                      $('#respuestacl').html('ERROR,falta alguna informacion intentelo de nuevo..').css("color","red");
                    }else{
                      if(res==2){
                        $('#respuestacl').html('ERROR cliente no existe.').css("color","red");
                        $("#nit-cl").focus().css("border-color","#000138");
                      }
                    }

                   }
                }
              } 
             });
          } 
        }else{
              $('#respuestacl').html('El correo no es valido.intentelo de nuevo..').css("color","red");
              $("#email-cl").focus().css("border-color","#000138");
        }
           
         
        }else{
          $('#respuestacl').html('Debe completar la informacion.').css("color","red");
        }

}

//ajax boton borrar clientes
function BorrarDatoscl(){
        var nitcl = $("#nit-cl").val();
        
        if(nitcl != "" ){
          $.ajax({
            type: 'POST',
            url: '../../control/clientes/delete.php',
            data:('nit_cl='+nitcl),
            success: function(res){
              if(res==4){
                $('#respuestacl').html('los datos se borraron correctamente').css("color","#28a745");
                $('#buscar-cl').val('');
                $("#id-cl").val('');
                $("#nit-cl").val('');
                $("#dv-cl").val('');
                $("#ciiu-cl").val('');
                $("#razon-cl").val('');
                $("#tel-cl").val('');
                $("#otro-cl").val('');
                $("#cont-cl").val('');
                $("#dir-cl").val('');
                $("#ciud-cl").val('');
                $("#email-cl").val('');
                $('.inp-cbox1-cl').prop('checked',false);
                $('.inp-cbox2-cl').prop('checked',false);
                $('.inp-cbox3-cl').prop('checked',false);
                $("#plazo-cl").val('');           
              }else{if(res==1){
                $('#respuestacl').html('ERROR al borrar los datos, intente de nuevo..').css("color","red");
                
                     }else{if(res==0){
                      $('#respuestacl').html('ERROR,debe seleccionar el registro a borrar.').css("color","red");
                      
                            }else{if(res==2){
                              $('#respuestacl').html('No se puede borrar este cliente.tiene facturas.').css("color","red");
                                 }

                            }
                          }
                    }
            }

        });
        }else{
          $('#respuestacl').html('Debe especificar el archivo que va a borrar.').css("color","red");
        }
        
}

//ajax boton Cerrar Vista clientes
function Cerrarvistacl(){
  $("#contenido_clientes").empty();
  $("#contenido_clientes").css("display", "none");

}

//ajax boton buscar proveedores
function BuscarDatospv(){
 var buscarpv = $("#buscar-pv").val();        
        if(buscarpv =="" || buscarpv==null){
          $('#respuestapv').html('');
          $("#buscar-pv").html('');
          $("#nit-pv").val('');
          $("#id-pv").val('');
          $("#dv-pv").val('');
          $("#ciiu-pv").val('');
          $("#razon-pv").val('');
          $("#tel-pv").val('');
          $("#otro-pv").val('');
          $("#cont-pv").val('');
          $("#dir-pv").val('');
          $("#ciud-pv").val('');
          $("#email-pv").val('');
          $('.inp-cbox1-pv').prop('checked',false);
          $('.inp-cbox2-pv').prop('checked',false);
          $('.inp-cbox3-pv').prop('checked',false);
          $("#plazo-pv").val('');
           
        }else{
            $.ajax({
            type: 'POST',
            url: '../../control/proveedores/search.php',
            data:('buscar_pv='+buscarpv),
            dataType: "json",
            success: function(res){
              if(res!=1 && res !=0 && res !=2){
                var info = JSON.parse(JSON.stringify(res));
                $('#respuestapv').html('Informacion Encontrada.').css("color","#28a745");
                $('#id-pv').val(info.pv_id);
                $('#nit-pv').val(info.pv_nit);
                $('#dv-pv').val(info.pv_dv);
                $('#ciiu-pv').val(info.pv_ciiu);
                $('#razon-pv').val(info.pv_razon);
                $('#tel-pv').val(info.pv_tel);
                $('#otro-pv').val(info.pv_otro);
                $('#cont-pv').val(info.pv_cont);
                $('#dir-pv').val(info.pv_dir);
                $('#ciud-pv').val(info.pv_ciud);
                $('#email-pv').val(info.pv_email);
                if(info.pv_norete=="si"){
                  $('.inp-cbox1-pv').prop('checked',true);
                }else{
                  $('.inp-cbox1-pv').prop('checked',false);
                }
                if(info.pv_grancon=="si"){
                  $('.inp-cbox2-pv').prop('checked',true);
                }else{
                  $('.inp-cbox2-pv').prop('checked',false);
                }
                if(info.pv_rteiva=="si"){
                  $('.inp-cbox3-pv').prop('checked',true);
                }else{
                  $('.inp-cbox3-pv').prop('checked',false);
                }
                $('#plazo-pv').val(info.pv_plazo);
                           
              }else{if(res==1){
                $('#respuestapv').html('No hay Resultados').css("color","red");
                $("#nit-pv").val('');
                $("#id-pv").val('');
                $("#dv-pv").val('');
                $("#ciiu-pv").val('');
                $("#razon-pv").val('');
                $("#tel-pv").val('');
                $("#otro-pv").val('');
                $("#cont-pv").val('');
                $("#dir-pv").val('');
                $("#ciud-pv").val('');
                $("#email-pv").val('');
                $('.inp-cbox1-pv').prop('checked',false);
                $('.inp-cbox2-pv').prop('checked',false);
                $('.inp-cbox3-pv').prop('checked',false);
                $("#plazo-pv").val('');
               }else{if(res==2){
                 $('#respuestapv').html('Informacion Ocupada, intentelo de nuevo..').css("color","red"); 
                  }else{if(res==0){
                          $('#respuestapv').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                          }
                        }
                    }
                  }
            }

        });
      }
        
}
//bton anterior proveedores
function AntDatospv(){
  var idpv = $("#id-pv").val();
  var buscarpv = $("#buscar-pv").val();
  $('#respuestapv').html('');
  $.ajax({
            type: 'POST',
            url: '../../control/proveedores/searchant.php',
            data:('pv_id='+idpv+'&buscar_pv='+buscarpv),
            dataType: "json",
            success: function(res){
              if(res!=1 && res !=2){
                var info = JSON.parse(JSON.stringify(res));
                $('#respuestapv').html('Informacion Encontrada.').css("color","#28a745");
                $('#id-pv').val(info.pv_id);
                $('#nit-pv').val(info.pv_nit);
                $('#dv-pv').val(info.pv_dv);
                $('#ciiu-pv').val(info.pv_ciiu);
                $('#razon-pv').val(info.pv_razon);
                $('#tel-pv').val(info.pv_tel);
                $('#otro-pv').val(info.pv_otro);
                $('#cont-pv').val(info.pv_cont);
                $('#dir-pv').val(info.pv_dir);
                $('#ciud-pv').val(info.pv_ciud);
                $('#email-pv').val(info.pv_email);
              
                if(info.pv_norete=="si"){
                  $('.inp-cbox1-pv').prop('checked',true);
                }else{
                  $('.inp-cbox1-pv').prop('checked',false);
                }
                if(info.pv_grancon=="si"){
                  $('.inp-cbox2-pv').prop('checked',true);
                }else{
                  $('.inp-cbox2-pv').prop('checked',false);
                }
                if(info.pv_rteiva=="si"){
                  $('.inp-cbox3-pv').prop('checked',true);
                }else{
                  $('.inp-cbox3-pv').prop('checked',false);
                }
                $('#plazo-pv').val(info.pv_plazo);
                           
              }else{if(res==1){
                  $('#respuestapv').html('No hay registros para mostrar').css("color","red");
                  }else{
                        if(res==2){
                          $('#respuestapv').html('No hay mas Resultados para mostrar').css("color","red");  
                        }
                  }
              } 

            }
          });
                   
}

//bton siguiente proveedores
function SigDatospv(){
  var buscarpv = $("#buscar-pv").val();
  var idpv = $("#id-pv").val();
  $('#respuestapv').html('');
  $.ajax({
            type: 'POST',
            url: '../../control/proveedores/searchsig.php',
            data:('pv_id='+idpv+'&buscar_pv='+buscarpv),
            dataType: "json",
            success: function(res){
              if(res!=1 && res !=2){
                var info = JSON.parse(JSON.stringify(res));
                $('#respuestapv').html('Informacion Encontrada.').css("color","#28a745");
                $('#id-pv').val(info.pv_id);
                $('#nit-pv').val(info.pv_nit);
                $('#dv-pv').val(info.pv_dv);
                $('#ciiu-pv').val(info.pv_ciiu);
                $('#razon-pv').val(info.pv_razon);
                $('#tel-pv').val(info.pv_tel);
                $('#otro-pv').val(info.pv_otro);
                $('#cont-pv').val(info.pv_cont);
                $('#dir-pv').val(info.pv_dir);
                $('#ciud-pv').val(info.pv_ciud);
                $('#email-pv').val(info.pv_email);
              
                if(info.pv_norete=="si"){
                  $('.inp-cbox1-pv').prop('checked',true);
                }else{
                  $('.inp-cbox1-pv').prop('checked',false);
                }
                if(info.pv_grancon=="si"){
                  $('.inp-cbox2-pv').prop('checked',true);
                }else{
                  $('.inp-cbox2-pv').prop('checked',false);
                }
                if(info.pv_rteiva=="si"){
                  $('.inp-cbox3-pv').prop('checked',true);
                }else{
                  $('.inp-cbox3-pv').prop('checked',false);
                }
                $('#plazo-pv').val(info.pv_plazo);
                           
              }else{if(res==1){
                  $('#respuestapv').html('No hay registros para mostrar.').css("color","red");
                  }else{
                        if(res==2){
                          $('#respuestapv').html('No hay mas Resultados para mostrar').css("color","red");  
                        }
                  }
              } 

            }
          });
                    
}
//ajax boton nuevo proveedores
function NuevoDatospv(){
        var exp=/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
        var nitpv = $("#nit-pv").val();
        var dvpv = $("#dv-pv").val();
        var ciiupv = $("#ciiu-pv").val();
        var razonpv = $("#razon-pv").val();
        var telpv = $("#tel-pv").val();
        var otropv = $("#otro-pv").val();
        var contpv = $("#cont-pv").val();
        var dirpv = $("#dir-pv").val();
        var ciudpv = $("#ciud-pv").val();
        var emailpv = $("#email-pv").val();
        var plazopv = $("#plazo-pv").val();
        var norete ="";
        var grancon ="";
        var rteiva ="";
        $('#respuestapv').html('');
        
        if(nitpv !="" && razonpv !=""){
          if(exp.test(emailpv)){

          if($('.inp-cbox1-pv').prop('checked') ) {
              norete = "si";
          }else{
              norete ="no";
          }
          if($('.inp-cbox2-pv').prop('checked') ) {
              grancon = "si";
          }else{
              grancon ="no";
          }
          if($('.inp-cbox3-pv').prop('checked') ) {
              rteiva = "si";
          }else{
              rteiva ="no";
          }

          $.ajax({
            type: 'POST',
            url: '../../control/proveedores/new.php',
            data:('nit_pv='+nitpv+'&dv_pv='+dvpv+'&ciiu_pv='+ciiupv+'&razon_pv='+razonpv+'&tel_pv='+telpv+'&otro_pv='+otropv+'&cont_pv='+contpv+'&dir_pv='+dirpv+'&ciud_pv='+ciudpv+'&email_pv='+emailpv+'&norete_pv='+norete+'&grancon_pv='+grancon+'&rteiva_pv='+rteiva+'&plazo_pv='+plazopv),
            success: function(res){
              if(res==4){
                $('#respuestapv').html('los datos se guardaron correctamente').css("color","#28a745");
                $('#buscar-pv').val('');
                $("#nit-pv").val('');
                $("#dv-pv").val('');
                $("#ciiu-pv").val('');
                $("#razon-pv").val('');
                $("#tel-pv").val('');
                $("#otro-pv").val('');
                $("#cont-pv").val('');
                $("#dir-pv").val('');
                $("#ciud-pv").val('');
                $("#email-pv").val('');
                $('.inp-cbox1-pv').prop('checked',false);
                $('.inp-cbox2-pv').prop('checked',false);
                $('.inp-cbox3-pv').prop('checked',false);
                $("#plazo-pv").val('');         
                $("#id-pv").val('');         
              }else{if(res==1){
                $('#respuestapv').html('El proveedor ya existe, intente de nuevo..').css("color","red");
                
                     }else{if(res==0){
                      $('#respuestapv').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                      
                            }
                          }
                    }
            }

        });
          }else{
                $('#respuestapv').html('El correo no es valido.intentelo de nuevo..').css("color","red");
                $("#email-pv").focus().css("border-color","#000138");
          }
    }else{
      $('#respuestapv').html('Debe completar la informacion.').css("color","red");
    }
        
}



//ajax boton editar proveedores
function EditarDatospv(){
        var exp=/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
        var idpv = $("#id-pv").val();
        var nitpv = $("#nit-pv").val();
        var dvpv = $("#dv-pv").val();
        var ciiupv = $("#ciiu-pv").val();
        var razonpv = $("#razon-pv").val();
        var telpv = $("#tel-pv").val();
        var otropv = $("#otro-pv").val();
        var contpv = $("#cont-pv").val();
        var dirpv = $("#dir-pv").val();
        var ciudpv = $("#ciud-pv").val();
        var emailpv = $("#email-pv").val();
        var norete ="";
        var grancon ="";
        var rteiva ="";
        $('#respuestapv').html('');

          if($('.inp-cbox1-pv').prop('checked') ) {
              norete = "si";
          }else{
              norete ="no";
          }
          if($('.inp-cbox2-pv').prop('checked') ) {
              grancon = "si";
          }else{
              grancon ="no";
          }
          if($('.inp-cbox3-pv').prop('checked') ) {
              rteiva = "si";
          }else{
              rteiva ="no";
          }
          var plazopv = $("#plazo-pv").val();

          if(nitpv != "" && razonpv !=""){
            if(exp.test(emailpv)){
              $.ajax({
              type: 'POST',
              url: '../../control/proveedores/edit.php',
             data:('id_pv='+idpv+'&nit_pv='+nitpv+'&dv_pv='+dvpv+'&ciiu_pv='+ciiupv+'&razon_pv='+razonpv+'&tel_pv='+telpv+'&otro_pv='+otropv+'&cont_pv='+contpv+'&dir_pv='+dirpv+'&ciud_pv='+ciudpv+'&email_pv='+emailpv+'&norete_pv='+norete+'&grancon_pv='+grancon+'&rteiva_pv='+rteiva+'&plazo_pv='+plazopv),
              success: function(res){
                if(res==4){
                $('#respuestapv').html('los datos se modificaron correctamente').css("color","#28a745");
                $('#buscar-pv').val('');
                $("#nit-pv").val('');
                $("#dv-pv").val('');
                $("#ciiu-pv").val('');
                $("#razon-pv").val('');
                $("#tel-pv").val('');
                $("#otro-pv").val('');
                $("#cont-pv").val('');
                $("#dir-pv").val('');
                $("#ciud-pv").val('');
                $("#email-pv").val('');
                $('.inp-cbox1-pv').prop('checked',false);
                $('.inp-cbox2-pv').prop('checked',false);
                $('.inp-cbox3-pv').prop('checked',false);
                $("#plazo-pv").val(''); 
                $("#id-pv").val(''); 
                }else{ 
                  if(res==1){
                    $('#respuestapv').html('ERROR al modificar los datos, intente de nuevo..').css("color","red");
                   }else{
                    if(res==0){
                      $('#respuestapv').html('ERROR,falta alguna informacion intentelo de nuevo..').css("color","red");
                    }else{
                      if(res==2){
                        $('#respuestapv').html('ERROR cliente no existe.').css("color","red");
                        $("#nit-pv").focus().css("border-color","#000138");
                      }
                    }

                   }
                }
              } 
             });
            }else{
              $('#respuestapv').html('El correo no es valido.intentelo de nuevo..').css("color","red");
              $("#email-pv").focus().css("border-color","#000138");
            }
             
          

           
         
        }else{
          $('#respuestapv').html('Debe completar la informacion.').css("color","red");
        }

}

//ajax boton borrar proveedores
function BorrarDatospv(){
        var idpv = $("#id-pv").val();
        
        
        if(idpv != "" ){
          $.ajax({
            type: 'POST',
            url: '../../control/proveedores/delete.php',
            data:('id_pv='+idpv),
            success: function(res){
              if(res==4){
                $('#respuestapv').html('los datos se borraron correctamente').css("color","#28a745");
                $('#buscar-pv').val('');
                $("#nit-pv").val('');
                $("#dv-pv").val('');
                $("#ciiu-pv").val('');
                $("#razon-pv").val('');
                $("#tel-pv").val('');
                $("#otro-pv").val('');
                $("#cont-pv").val('');
                $("#dir-pv").val('');
                $("#ciud-pv").val('');
                $("#email-pv").val('');
                $('.inp-cbox1-pv').prop('checked',false);
                $('.inp-cbox2-pv').prop('checked',false);
                $('.inp-cbox3-pv').prop('checked',false);
                $("#plazo-pv").val('');       
              }else{if(res==1){
                $('#respuestapv').html('ERROR al borrar los datos, intente de nuevo..').css("color","red");
                
                     }else{if(res==0){
                      $('#respuestapv').html('ERROR,debe seleccionar el registro a borrar').css("color","red");
                      
                            }
                          }
                    }
            }

        });
        }else{
          $('#respuestapv').html('Debe especificar el archivo que va a borrar.');
        }
        
}

//ajax boton Cerrar Vista proveedores
function Cerrarvistapv(){
  $("#contenido_proveedores").empty();
  $("#contenido_proveedores").css("display", "none");

}

//ajax boton Limpiar campos proveedor
function ClearDatospv(){
  $('#respuestapv').html('');
  $('#buscar-pv').val('');
  $("#nit-pv").val('');
  $("#dv-pv").val('');
  $("#ciiu-pv").val('');
  $("#razon-pv").val('');
  $("#tel-pv").val('');
  $("#otro-pv").val('');
  $("#cont-pv").val('');
  $("#dir-pv").val('');
  $("#ciud-pv").val('');
  $("#email-pv").val('');
  $("#id-pv").val('');
  $('.inp-cbox1-pv').prop('checked',false);
  $('.inp-cbox2-pv').prop('checked',false);
  $('.inp-cbox3-pv').prop('checked',false);
  $("#plazo-pv").val('');
  $("#nit-pv").focus().css("border-color","#000138");    
  }

//FACTURACION//
function Buscarcl(){
        var buscl = $("#cod-cl-fa").val();
        $('#respuestafa').html('');
        $("#tele-cl").val('');
        $("#nomb-cl").val('');
        $("#dire-cl").val('');
           
        if(buscl !=""){
          $.ajax({
            type: 'POST',
            url: '../../control/facturacion/searchcl.php',
            data:('bus_cl='+buscl),
            dataType: "json",
            success: function(res){
              if(res!=1 && res !=0){
                var info = JSON.parse(JSON.stringify(res));
                $('#respuestafa').html('Informacion Encontrada.').css("color","#28a745");
                $("#tele-cl").val(info.cl_tel);
                $("#nomb-cl").val(info.cl_razon);
                $("#dire-cl").val(info.cl_dir);
            
                           
              }else{if(res==1){
                $('#respuestafa').html('No hay Resultados').css("color","red");
                
                     }else{if(res==0){
                      $('#respuestafa').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                      
                            }
                          }
                    }
            }

        });
        }else{
          $('#respuestafa').html('Debe llenar el campo de NIT/CC.').css("color","red");
        }
        
}

function OcultarBusqueda(){
  $("#Modalcompsave").modal("hide");
  $(".dataTables_wrapper .dataTables_filter input").blur();

}
function Ocultarsavefact(){
  $("#Modalfactclose").modal("hide");
  $("#contenido_facturacion").css("display", "none");
  $.ajax({
            type: 'POST',
            url: '../../control/facturacion/vaciartemparti.php',
            dataType: "json",
            success: function(res){
              if(res==4){
                $('#respuestafa').html('Informacion Borrada.').css("color","#28a745");
                           
              }else{if(res==1){
                $('#respuestafa').html('No se logro borrar la informacion.').css("color","red");
                
                     }else{if(res==0){
                      $('#respuestafa').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                      
                            }
                          }
                    }
            }

        });


}

function Ocultarsavecomp(){
  $("#Modalcompclose").modal("hide");
  $("#contenido_compras").css("display", "none");
  $("#cod-cl-co").blur();
  
  $.ajax({
            type: 'POST',
            url: '../../control/compras/vaciartemparti.php',
            dataType: "json",
            success: function(res){
              if(res==4){
                $('#respuestaco').html('Informacion Borrada.').css("color","#28a745");
                           
              }else{if(res==1){
                $('#respuestaco').html('No se logro borrar la informacion.').css("color","red");
                
                     }else{if(res==0){
                      $('#respuestaco').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                      
                            }
                          }
                    }
            }

        });


}


function Buscarcl2(){
  var buscl2 = $('input:radio[name=clientesbs]:checked').val();
      $(".dataTables_wrapper .dataTables_filter").css("display", "none");   
      $("#cod-cl-fa").val('');
      $("#tele-cl").val('');
      $("#nomb-cl").val('');
      $("#dire-cl").val('');
      $("#plazo-fact").val('');
      if(buscl2 !=""){
          $.ajax({
            type: 'POST',
            url: '../../control/facturacion/searchcl2.php',
            data:('bus_cl2='+buscl2),
            dataType: "json",
            success: function(res){
              if(res!=1 && res !=0){
                var info = JSON.parse(JSON.stringify(res));
                $('#resbuscl').html('Informacion Encontrada.').css("color","#28a745");
                $("#cod-cl-fa").val(info.cl_nit);
                $("#tele-cl").val(info.cl_tel);
                $("#nomb-cl").val(info.cl_razon);
                $("#dire-cl").val(info.cl_dir);
                $("#plazo-fact").val(info.cl_plazo);
                $("#codi-fact").focus().css("border-color","#000138");
            
                           
              }else{if(res==1){
                $('#resbuscl').html('No hay Resultados').css("color","red");
                
                     }else{if(res==0){
                      $('#resbuscl').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                      
                            }
                          }
                    }
            }

        });
        }else{
          $('#resbuscl').html('Debe llenar el campo de NIT/CC.').css("color","red");
        }
}
function Buscarcl2co(){
  var buscl2 = $('input:radio[name=clientesbs]:checked').val();
      $(".dataTables_wrapper .dataTables_filter").css("display", "none");   
      $("#cod-cl-co").val('');
      $("#tele-cl").val('');
      $("#nomb-cl").val('');
      $("#dire-cl").val('');
      $("#plazo-comp").val('');
      if(buscl2 !=""){
          $.ajax({
            type: 'POST',
            url: '../../control/compras/searchcl2.php',
            data:('bus_cl2='+buscl2),
            dataType: "json",
            success: function(res){
              if(res!=1 && res !=0){
                var info = JSON.parse(JSON.stringify(res));
                $('#resbuscl').html('Informacion Encontrada.').css("color","#28a745");
                $("#cod-cl-co").val(info.cl_nit);
                $("#tele-cl").val(info.cl_tel);
                $("#nomb-cl").val(info.cl_razon);
                $("#dire-cl").val(info.cl_dir);
                $("#plazo-comp").val(info.cl_plazo);
                $("#codi-comp").focus().css("border-color","#000138");
            
                           
              }else{if(res==1){
                $('#resbuscl').html('No hay Resultados').css("color","red");
                
                     }else{if(res==0){
                      $('#resbuscl').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                      
                            }
                          }
                    }
            }

        });
        }else{
          $('#resbuscl').html('Debe llenar el campo de NIT/CC.').css("color","red");
        }
}

function Buscarart2co(){
  var busart2 = $('input:radio[name=articulosbs]:checked').val();
      $(".dataTables_wrapper .dataTables_filter").css("display", "none");   
      $("#codi-comp").val('');
      $("#arti-comp").val('');
      $("#cant-comp").val('');
      $("#val-comp").val('');
      if(busart2 !=""){
          $.ajax({
            type: 'POST',
            url: '../../control/compras/searchart2.php',
            data:('bus_art2='+busart2),
            dataType: "json",
            success: function(res){
              if(res!=1 && res !=0){
                var info = JSON.parse(JSON.stringify(res));
                $('#resbuscl').html('Informacion Encontrada.').css("color","#28a745");
                $("#codi-comp").val(info.art_id);
                $("#arti-comp").val(info.art_nom);
                $("#cant-comp").val(0);
                $("#val-comp").val(info.art_pventa);
                $("#sutl-comp").val(info.subt_art).css("font-weight","bold");
                $("#cant-comp").focus().css("border-color","#000138");
                           
              }else{if(res==1){
                $('#resbuscl').html('No hay Resultados').css("color","red");
                
                     }else{if(res==0){
                      $('#resbuscl').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                      
                            }
                          }
                    }
            }

        });
        }else{
          $('#resbuscl').html('Debe llenar el campo de NIT/CC.').css("color","red");
        }
}
function Buscarart2(){
  var busart2 = $('input:radio[name=articulosbs]:checked').val();
      $(".dataTables_wrapper .dataTables_filter").css("display", "none");   
      $("#codi-fact").val('');
      $("#arti-fact").val('');
      $("#cant-fact").val('');
      $("#val-fact").val('');
      if(busart2 !=""){
          $.ajax({
            type: 'POST',
            url: '../../control/facturacion/searchart2.php',
            data:('bus_art2='+busart2),
            dataType: "json",
            success: function(res){
              if(res!=1 && res !=0){
                var info = JSON.parse(JSON.stringify(res));
                $('#resbuscl').html('Informacion Encontrada.').css("color","#28a745");
                $("#codi-fact").val(info.art_id);
                $("#arti-fact").val(info.art_nom);
                $("#cant-fact").val(0);
                $("#val-fact").val(info.art_pventa);
                $("#sutl-fact").val(info.subt_art).css("font-weight","bold");
                $("#cant-fact").focus().css("border-color","#000138");
                           
              }else{if(res==1){
                $('#resbuscl').html('No hay Resultados').css("color","red");
                
                     }else{if(res==0){
                      $('#resbuscl').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                      
                            }
                          }
                    }
            }

        });
        }else{
          $('#resbuscl').html('Debe llenar el campo de NIT/CC.').css("color","red");
        }
}

//busca articulo para facturacion
function Buscarcodi(){
        $("#codi-fact").css("border-color","#000138");
        var buscodi = $("#codi-fact").val();
        $('#respuestafa').html('');
        $("#arti-fact").val('');
        $("#cant-fact").val('');
        $("#val-fact").val('');
        if(buscodi !="" || buscodi!=null){
          $.ajax({
            type: 'POST',
            url: '../../control/facturacion/searchart.php',
            data:('bus_codi='+buscodi),
            dataType: "json",
            success: function(res){
              if(res!=1 && res !=0){
                var info = JSON.parse(JSON.stringify(res));
                $('#respuestafa').html('Informacion Encontrada.').css("color","#28a745");
                $("#arti-fact").val(info.art_nom);
                $("#cant-fact").val(0);
                $("#val-fact").val(info.art_pventa);
                $("#sutl-fact").val(info.subt_art).css("font-weight","bold");
                $("#cant-fact").focus().css("border-color","#000138");                          
              }else{if(res==1){
                $('#respuestafa').html('No hay Resultados').css("color","red");
                
                     }else{if(res==0){
                      $('#respuestafa').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                      
                            }
                          }
                    }
            }

        });
        }else{
          $('#respuestafa').html('Debe llenar el campo de codigo.').css("color","red");
          $("#codi-fact").focus().css("border-color","#000138");
        }
        
}
//busca articulo para compras
function Buscarcodico(){
        $("#codi-comp").css("border-color","#000138");
        var buscodi = $("#codi-comp").val();
        $('#respuestaco').html('');
        $("#arti-comp").val('');
        $("#cant-comp").val('');
        $("#val-comp").val('');
        $("#sutl-comp").val('');

        if(buscodi !="" || buscodi!=null){
          $.ajax({
            type: 'POST',
            url: '../../control/compras/searchart.php',
            data:('bus_codi='+buscodi),
            dataType: "json",
            success: function(res){
              if(res!=1 && res !=0){
                var info = JSON.parse(JSON.stringify(res));
                $('#respuestaco').html('Informacion Encontrada.').css("color","#28a745");
                $("#arti-comp").val(info.art_nom);
                $("#cant-comp").val(0);
                $("#val-comp").val(info.art_pventa);
                $("#sutl-comp").val(info.subt_art).css("font-weight","bold");
                $("#cant-comp").focus().css("border-color","#000138");                          
              }else{if(res==1){
                $('#respuestaco').html('No hay Resultados').css("color","red");
                
                     }else{if(res==0){
                      $('#respuestaco').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                      
                            }
                          }
                    }
            }

        });
        }else{
          $('#respuestaco').html('Debe llenar el campo de codigo.').css("color","red");
          $("#codi-comp").focus().css("border-color","#000138");
        }
        
}
// Cerrar Vista facturacion
function Cerrarvistaft(){
  $("#contenido_facturacion").css("display", "none");
}
// Cerrar Vista recibos
function Cerrarvistarb(){
  $("#contenido_recibo").empty();
  $("#contenido_recibo").css("display", "none");
}

// Cerrar Vista Anular factura
function Cerrarvistaftanul(){
  $("#contenido_anularfact").empty();
  $("#contenido_anularfact").css("display", "none");
}
//Cerrar Vista Imprimir factura
function Cerrarvistaftimpri(){
  $("#contenido_impresion").empty();
  $("#contenido_impresion").css("display", "none");
  
  location.reload(true);
   //$("#contenido_impresion").reload();
  //$("#contenido_facturacion").css("display", "block").delay(5000);
  //$("#contenido_facturacion").close();
  //$("#contenido_facturacion").reload();
  }
// Cerrar Vista compras
function Cerrarvistacm(){
  $("#contenido_compras").empty();
  $("#contenido_compras").css("display", "none");
}

// Cerrar Vista Anular compras
function Cerrarvistacmanul(){
  $("#contenido_anularcompr").empty();
  $("#contenido_anularcompr").css("display", "none");
}
//Cerrar Vista Imprimir compras
function Cerrarvistacmimpri(){
  $("#contenido_impresionco").empty();
  $("#contenido_impresionco").css("display", "none");
  
  location.reload(true);
   //$("#contenido_impresion").reload();
  //$("#contenido_facturacion").css("display", "block").delay(5000);
  //$("#contenido_facturacion").close();
  //$("#contenido_facturacion").reload();
  }

//btn agregar articulo facturacion
function AgregarArtfa(){
  $("#codi-fact").css("border-color","#000138");
 var codart = $("#codi-fact").val();
 var nufact = $("#nume-fact").val();
 var nomart = $("#arti-fact").val();
 var canart = $("#cant-fact").val();
 var valart = $("#val-fact").val();
 var ideusu = $("#vend-usu").val();
 $('#respuestafa').html('');
 $( "#cant-fact").focus().css("border-color","#000138");
 
   if(codart !="" && nomart !="" && ideusu !="" && nufact!=""){
      if(canart !="" && canart !=0 && valart !="" && valart !=0){

   $.ajax({
     type: 'POST',
     url: '../../control/facturacion/addart.php',
     data:('nu_fact='+nufact+'&art_cod='+codart+'&art_nom='+nomart+'&art_cant='+canart+'&art_valart='+valart+'&ide_usu='+ideusu),
     success: function(res){
          
       if(res==4){
         $('#respuestafa').html('ok').css("color","#28a745");
         $( "#codi-fact" ).focus().css("border-color","#000138");
         $("#codi-fact").val('');
         $("#arti-fact").val('');
         $("#cant-fact").val('');
         $("#val-fact").val('');
         $("#sutl-fact").val('');
         $('.contenedor-tabla-articulos').load('../../control/facturacion/tablaexterna.php');
         $('.input-subto-fact').load('../../control/facturacion/inputsubtoexterno.php');
         $('.input-total-fact').load('../../control/facturacion/inputtotalexterno.php');
         $('.btn-buscar').load('../../control/facturacion/btnllamafa.php');
         $('.input-numero-fact').load('../../control/facturacion/inpllamafa.php');
         
         }else{
              if(res==5){
               $('#respuestafa').html('cambio realizado').css("color","#28a745");
               $( "#cant-fact" ).focus().css("border-color","#000138");
               $("#codi-fact").val('');
               $("#arti-fact").val('');
               $("#cant-fact").val('');
               $("#val-fact").val('');
               $("#sutl-fact").val('');
               var fn=$("#nume-fact").val();
               $('.contenedor-tabla-articulos').load('../../control/facturacion/tablaexterna2.php?factu='+fn);
               $('.input-subto-fact').load('../../control/facturacion/inputsubtoexterno2.php?factu='+fn);
               $('.input-total-fact').load('../../control/facturacion/inputtotalexterno2.php?factu='+fn);
     
              }else{
                 if(res==1){
                           $('#respuestafa').html('verifique la informacion, intente de nuevo..').css("color","red");
                         }else{
                             if(res==2){
                               $("#cant-fact").focus().css("border-color","red");
                               $('#respuestafa').html('la cantidad debe ser menor al stock..').css("color","red");
                             }else{
                               if(res==0){
                                 $('#respuestafa').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                               }else{
                                 if(res==3){
                                   $('#respuestafa').html('La cantidad agregada debe ser menor.').css("color","red");
                                 } 
                               }
                             }
                         }
                       
               }
          }
     }
 });
      }else{
        $('#respuestafa').html('Debe completar la informacion de la cantidad o el valor.');
        $("#cant-fact").css("border-color","red");
        $("#codi-fact").css("border-color","#000138");
      }
 }else{
   $('#respuestafa').html('Debe completar la informacion del codigo.');
   $("#codi-fact").css("border-color","red");
   $("#cant-fact").css("border-color","#000138");
 }
 
}
//btn agregar articulo compras
function AgregarArtco(){
        $("#codi-comp").css("border-color","#000138");
        var codart = $("#codi-comp").val();
        var nucomp = $("#nume-comp").val();
        var nomart = $("#arti-comp").val();
        var canart = $("#cant-comp").val();
        var valart = $("#val-comp").val();
        var ideusu = $("#vend-usu").val();
        $('#respuestaco').html('');
        $( "#cant-comp").focus().css("border-color","#000138");
        
        if(codart !="" && nomart !="" && ideusu !="" && nucomp!=""){
           if(canart !="" && canart !=0 && valart !="" && valart !=0){
       
          $.ajax({
            type: 'POST',
            url: '../../control/compras/addart.php',
            data:('nu_comp='+nucomp+'&art_cod='+codart+'&art_nom='+nomart+'&art_cant='+canart+'&art_valart='+valart+'&ide_usu='+ideusu),
            success: function(res){
                 
              if(res==4){
                $('#respuestaco').html('ok').css("color","#28a745");
                $( "#codi-comp" ).focus().css("border-color","#000138");
                $("#codi-comp").val('');
                $("#arti-comp").val('');
                $("#cant-comp").val('');
                $("#val-comp").val('');
                $("#sutl-comp").val('');
                $('.contenedor-tabla-articulos').load('../../control/compras/tablaexterna.php');
                $('.input-subto-comp').load('../../control/compras/inputsubtoexterno.php');
                $('.input-total-comp').load('../../control/compras/inputtotalexterno.php');
                $('.btn-buscar').load('../../control/compras/btnllamaco.php');
                $('.input-numero-comp').load('../../control/compras/inpllamaco.php');
                
                }else{
                     if(res==5){
                      $('#respuestaco').html('cambio realizado').css("color","#28a745");
                      $( "#cant-comp" ).focus().css("border-color","#000138");
                      $("#codi-comp").val('');
                      $("#arti-comp").val('');
                      $("#cant-comp").val('');
                      $("#val-comp").val('');
                      $("#sutl-comp").val('');
                      var com=$("#nume-comp").val();
                      $('.contenedor-tabla-articulos').load('../../control/compras/tablaexterna2.php?compra='+com);
                      $('.input-subto-comp').load('../../control/compras/inputsubtoexterno2.php?compra='+com);
                      $('.input-total-comp').load('../../control/compras/inputtotalexterno2.php?compra='+com);
            
                     }else{
                        if(res==1){
                                  $('#respuestaco').html('verifique la informacion, intente de nuevo..').css("color","red");
                                }else{
                                    if(res==2){
                                      $("#cant-comp").focus().css("border-color","red");
                                      $('#respuestaco').html('la cantidad debe ser menor al stock..').css("color","red");
                                    }else{
                                      if(res==0){
                                        $('#respuestaco').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                                      }else{
                                        if(res==3){
                                          $('#respuestaco').html('La cantidad agregada debe ser menor.').css("color","red");
                                        } 
                                      }
                                    }
                                }
                              
                      }
                 }
            }
        });
           }else{
                $('#respuestaco').html('Debe completar la informacion de la cantidad o el valor.').css("color","red");
                $("#cant-comp").css("border-color","red");
                $("#codi-comp").css("border-color","#000138");
           }
        }else{
              $('#respuestaco').html('Debe completar la informacion del codigo.').css("color","red");
              $("#codi-comp").css("border-color","red");
              $("#cant-comp").css("border-color","#000138");
        }
        
}
//btn borrar articulo en articulo temporal de facturacion
function DelArt(idart){
  var idart;
$('#respuestafa').html('');

if(idart !=""){
 $.ajax({
    type: 'POST',
    url: '../../control/facturacion/delart.php',
    data:('art_cod='+idart),
    success: function(res){
      if(res==4){
        $('#respuestafa').html('los datos se borraron correctamente').css("color","#28a745");
        $("#codi-fact").val('');
        $("#arti-fact").val('');
        $("#cant-fact").val('');
        $("#val-fact").val('');
        $("#sutl-fact").val('');
        $('.contenedor-tabla-articulos').load('../../control/facturacion/tablaexterna.php');
        $('.input-subto-fact').load('../../control/facturacion/inputsubtoexterno.php');
        $('.input-total-fact').load('../../control/facturacion/inputtotalexterno.php');
        $('.btn-buscar').load('../../control/facturacion/btnllamafa.php');
        $('.input-numero-fact').load('../../control/facturacion/inpllamafa.php');

      }else{if(res==1){
        $('#respuestafa').html('verifique la informacion, intente de nuevo..').css("color","red");
        
             }else{if(res==0){
              $('#respuestafa').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
              
                    }
                  }
            }
    }

});
}else{
  $('#respuestafa').html('Debe completar la informacion.').css("color","red");
}

}
//btn borrar articulo en articulo temporal de compras
function DelArtco(idart){
  var idart;
$('#respuestaco').html('');

if(idart !=""){
 $.ajax({
    type: 'POST',
    url: '../../control/compras/delart.php',
    data:('art_cod='+idart),
    success: function(res){
      if(res==4){
        $('#respuestaco').html('los datos se borraron correctamente').css("color","#28a745");
        $("#codi-comp").val('');
        $("#arti-comp").val('');
        $("#cant-comp").val('');
        $("#val-comp").val('');
        $("#sutl-comp").val('');
        $('.contenedor-tabla-articulos').load('../../control/compras/tablaexterna.php');
        $('.input-subto-comp').load('../../control/compras/inputsubtoexterno.php');
        $('.input-total-comp').load('../../control/compras/inputtotalexterno.php');
        $('.btn-buscar').load('../../control/compras/btnllamaco.php');
        $('.input-numero-comp').load('../../control/compras/inpllamaco.php');

      }else{if(res==1){
        $('#respuestaco').html('verifique la informacion, intente de nuevo..').css("color","red");
        
             }else{if(res==0){
              $('#respuestaco').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
              
                    }
                  }
            }
    }

});
}else{
  $('#respuestaco').html('Debe completar la informacion.').css("color","red");
}

}
//btn borrar articulo en detallefactura temporal de facturacion
function DelArt2(idart){
  var idart;
  var nufact = $("#nume-fact").val();
$('#respuestafa').html('');

if(idart !="" && nufact != ""){
 $.ajax({
    type: 'POST',
    url: '../../control/facturacion/delart2.php',
    data:('art_cod='+idart+'&nu_fact='+nufact),
    success: function(res){
      if(res==4){
        $('#respuestafa').html('los datos se borraron correctamente').css("color","#28a745");
        $("#codi-fact").val('');
        $("#arti-fact").val('');
        $("#cant-fact").val('');
        $("#val-fact").val('');
        $("#sutl-fact").val('');
        var fn=$("#nume-fact").val();
        $('.contenedor-tabla-articulos').load('../../control/facturacion/tablaexterna2.php?factu='+fn);
        $('.input-subto-fact').load('../../control/facturacion/inputsubtoexterno2.php?factu='+fn);
        $('.input-total-fact').load('../../control/facturacion/inputtotalexterno2.php?factu='+fn);

      }else{if(res==1){
        $('#respuestafa').html('verifique la informacion, intente de nuevo..').css("color","red");
        
             }else{if(res==0){
              $('#respuestafa').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
              
                    }
                  }
            }
    }

});
}else{
  $('#respuestafa').html('Debe completar la informacion.').css("color","red");
}

}
//btn borrar articulo en detallefactura temporal de compras
function DelArtco2(idart){
  var idart;
  var nucomp = $("#nume-comp").val();
$('#respuestaco').html('');

if(idart !="" && nucomp != ""){
 $.ajax({
    type: 'POST',
    url: '../../control/compras/delart2.php',
    data:('art_cod='+idart+'&nu_comp='+nucomp),
    success: function(res){
      if(res==4){
        $('#respuestaco').html('los datos se borraron correctamente').css("color","#28a745");
        $("#codi-comp").val('');
        $("#arti-comp").val('');
        $("#cant-comp").val('');
        $("#val-comp").val('');
        $("#sutl-comp").val('');
        var com=$("#nume-comp").val();
        $('.contenedor-tabla-articulos').load('../../control/compras/tablaexterna2.php?compra='+com);
        $('.input-subto-comp').load('../../control/compras/inputsubtoexterno2.php?compra='+com);
        $('.input-total-comp').load('../../control/compras/inputtotalexterno2.php?compra='+com);

      }else{if(res==1){
        $('#respuestaco').html('verifique la informacion, intente de nuevo..').css("color","red");
        
             }else{if(res==0){
              $('#respuestaco').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
              
                    }
                  }
            }
    }

});
}else{
  $('#respuestaco').html('Debe completar la informacion.').css("color","red");
}

}


//actualizar campos cant y valor
function updateval(idart){
        var idart;
        var artcant = $("#artcant"+idart).val();
        var artpventa = $("#artpventa"+idart).val();
        $('#respuestafa').html('');
        $("#artcant"+idart).focus().css("border-color","#000138");
        $("#artpventa"+idart).focus().css("border-color","#000138");
        if(artcant !=""  && artcant !=0  ){
          if(artpventa !="" && artpventa !=0){
          $.ajax({
              type: 'POST',
              url: '../../control/facturacion/updart.php',
              data:('art_cod='+idart+'&art_cant='+artcant+'&art_valart='+artpventa),
              success: function(res){
                if(res==4){
                $('#respuestafa').html('ok').css("color","#28a745");;
                $( "#artcant"+idart).focus().css("border-color","#000138");
                $("#codi-fact").val('');
                $("#arti-fact").val('');
                $("#cant-fact").val('');
                $("#val-fact").val('');
                $("#sutl-fact").val('');
                $('.contenedor-tabla-articulos').load('../../control/facturacion/tablaexterna.php');
                $('.input-subto-fact').load('../../control/facturacion/inputsubtoexterno.php');
                $('.input-total-fact').load('../../control/facturacion/inputtotalexterno.php');
                $("#codi-fact").focus().css("border-color","#000138");
                }else{
                  if(res==1){
                   // $("#artpventa"+idart).focus().css("border-color","red");
                   // $("#artcant"+idart).focus().css("border-color","red");
                    $('#respuestafa').html('verifique la informacion, intente de nuevo..').css("color","red");
                  }else{
                    if(res==2){
                      $("#artpventa"+idart).focus().css("border-color","red"); 
                      $("#artcant"+idart).focus().css("border-color","red");
                      $('#respuestafa').html('la cantidad debe ser menor al stock..').css("color","red");
                     
                  
                    }else{
                      if(res==0){
                        $("#artpventa"+idart).focus().css("border-color","red"); 
                        $("#artcant"+idart).focus().css("border-color","red");                       
                        $('#respuestafa').html('Debe Completar La Informacion').css("color","red");
                      }
                    }
                  }
              }
             

            }

        });
          }else{
            $('#respuestafa').html('Debe completar la informacion del campo valor.').css("color","red");
            $("#artpventa"+idart).focus().css("border-color","red");
          }
        }else{
          $('#respuestafa').html('Debe completar la informacion del campo cantidad.').css("color","red");
          $("#artcant"+idart).focus().css("border-color","red");
        }
        
}
//actualizar campos cant y valor para compras
function updatevalco(idart){
        var idart;
        var artcant = $("#artcant"+idart).val();
        var artpventa = $("#artpventa"+idart).val();
        $('#respuestaco').html('');
        $("#artcant"+idart).focus().css("border-color","#000138");
        $("#artpventa"+idart).focus().css("border-color","#000138");
        if(artcant !=""  && artcant !=0  ){
          if(artpventa !="" && artpventa !=0){
          $.ajax({
              type: 'POST',
              url: '../../control/compras/updart.php',
              data:('art_cod='+idart+'&art_cant='+artcant+'&art_valart='+artpventa),
              success: function(res){
                if(res==4){
                $('#respuestaco').html('ok').css("color","#28a745");
                $( "#artcant"+idart).focus().css("border-color","#000138");
                $("#codi-comp").val('');
                $("#arti-comp").val('');
                $("#cant-comp").val('');
                $("#val-comp").val('');
                $("#sutl-comp").val('');
                $('.contenedor-tabla-articulos').load('../../control/compras/tablaexterna.php');
                $('.input-subto-comp').load('../../control/compras/inputsubtoexterno.php');
                $('.input-total-comp').load('../../control/compras/inputtotalexterno.php');
                $("#codi-comp").focus().css("border-color","#000138");
                }else{
                  if(res==1){
                   // $("#artpventa"+idart).focus().css("border-color","red");
                   // $("#artcant"+idart).focus().css("border-color","red");
                    $('#respuestaco').html('verifique la informacion, intente de nuevo..').css("color","red");
                  }else{
                    if(res==2){
                      $("#artpventa"+idart).focus().css("border-color","red"); 
                      $("#artcant"+idart).focus().css("border-color","red");
                      $('#respuestafa').html('la cantidad debe ser menor al stock..').css("color","red");
                     
                  
                    }else{
                      if(res==0){
                        $("#artpventa"+idart).focus().css("border-color","red"); 
                        $("#artcant"+idart).focus().css("border-color","red");                       
                        $('#respuestaco').html('Debe Completar La Informacion').css("color","red");
                      }
                    }
                  }
              }
             

            }

        });
          }else{
            $('#respuestaco').html('Debe completar la informacion del campo valor.').css("color","red");
            $("#artpventa"+idart).focus().css("border-color","red");
          }
        }else{
          $('#respuestaco').html('Debe completar la informacion del campo cantidad.').css("color","red");
          $("#artcant"+idart).focus().css("border-color","red");
        }
        
}
//actualizar campos cant y valor para consulta de compras
function updateval2co(idart){
        var idart;
        var numcomp = $("#nume-comp").val();
        var artcantf = $("#artcant"+idart).val();
        var artpventaf = $("#artpventa"+idart).val();
      
        $('#respuestaco').html('');
        $("#artcant"+idart).focus().css("border-color","#000138");
        if(idart !="" && artcantf !="" && artpventaf !=""){
          $.ajax({
              type: 'POST',
              url: '../../control/compras/updart2.php',
              data:('num_compf='+numcomp+'&art_codf='+idart+'&art_cantf='+artcantf+'&art_valartf='+artpventaf),
              success: function(res){
                if(res==4){
                $('#respuestaco').html('ok').css("color","#28a745");
                $( "#artcant"+idart).focus().css("border-color","#000138");
                $("#codi-comp").val('');
                $("#arti-comp").val('');
                $("#cant-comp").val('');
                $("#val-comp").val('');
                $("#sutl-comp").val('');
                var com=$("#nume-comp").val();
                $('.contenedor-tabla-articulos').load('../../control/compras/tablaexterna2.php?compra='+com);
                $('.input-subto-comp').load('../../control/compras/inputsubtoexterno2.php?compra='+com);
                $('.input-total-comp').load('../../control/compras/inputtotalexterno2.php?compra='+com);
                }else{
                  if(res==1){
                    $("#artcant"+idart).focus().css("border-color","red");
                    $('#respuestaco').html('verifique la informacion, intente de nuevo..').css("color","red");
                  }else{
                    if(res==2){
                      $("#artcant"+idart).focus().css("border-color","red");
                      $('#respuestaco').html('la cantidad debe ser menor al stock..').css("color","red");
                     
                  
                    }else{
                      if(res==3){
                        $( "#artcant"+idart).focus().css("border-color","red");
                        $('#respuestaco').html('No se pudo realizar la operacion.').css("color","red");
                      }else{
                        if(res==0){
                          $( "#artcant"+idart).focus().css("border-color","red");
                          $('#respuestaco').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                      }
                      }
                    }
                  }
              }
             

            }

        });
        }else{
          $('#respuestaco').html('Debe completar la informacion.').css("color","red");
        }
        
}
//actualizar campos cant y valor para consulta de facturas
function updateval2(idart){
        var idart;
        var numfact = $("#nume-fact").val();
        var artcantf = $("#artcant"+idart).val();
        var artpventaf = $("#artpventa"+idart).val();
      
        $('#respuestafa').html('');
        $("#artcant"+idart).focus().css("border-color","#000138");
        if(idart !="" && artcantf !="" && artpventaf !=""){
          $.ajax({
              type: 'POST',
              url: '../../control/facturacion/updart2.php',
              data:('num_factf='+numfact+'&art_codf='+idart+'&art_cantf='+artcantf+'&art_valartf='+artpventaf),
              success: function(res){
                if(res==4){
                $('#respuestafa').html('ok').css("color","#28a745");;
                $( "#artcant"+idart).focus().css("border-color","#000138");
                $("#codi-fact").val('');
                $("#arti-fact").val('');
                $("#cant-fact").val('');
                $("#val-fact").val('');
                $("#sutl-fact").val('');
                var fn=$("#nume-fact").val();
            
                $('.contenedor-tabla-articulos').load('../../control/facturacion/tablaexterna2.php?factu='+fn);
                $('.input-subto-fact').load('../../control/facturacion/inputsubtoexterno2.php?factu='+fn);
                $('.input-total-fact').load('../../control/facturacion/inputtotalexterno2.php?factu='+fn);
                }else{
                  if(res==1){
                    $("#artcant"+idart).focus().css("border-color","red");
                    $('#respuestafa').html('verifique la informacion, intente de nuevo..').css("color","red");
                  }else{
                    if(res==2){
                      $("#artcant"+idart).focus().css("border-color","red");
                      $('#respuestafa').html('la cantidad debe ser menor al stock..').css("color","red");
                     
                  
                    }else{
                      if(res==3){
                        $( "#artcant"+idart).focus().css("border-color","red");
                        $('#respuestafa').html('No se pudo realizar la operacion.').css("color","red");
                      }else{
                        if(res==0){
                          $( "#artcant"+idart).focus().css("border-color","red");
                          $('#respuestafa').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                      }
                      }
                    }
                  }
              }
             

            }

        });
        }else{
          $('#respuestapv').html('Debe completar la informacion.').css("color","red");
        }
        
}



function GuardarFact(){
        var fecha = $("#fecha-fact").val();
        var nitcl = $("#cod-cl-fa").val();
        var numfact = $("#nume-fact").val();
        var nomcl = $("#nomb-cl").val();
        var codvend = $("#vend-usu").val();
        var subtofact = $("#subto-fact").val();
        var totafact = $("#total-fact").val();
        var  formpagofact="";
        $('#respuestafa').html('');

        if(nitcl !="" && numfact !="" && nomcl !="" && codvend !="" && subtofact !="" && totafact !="" && subtofact !=0 && totafact !=0){
          if($('#inlineRadio1').prop('checked') ) {
            formpagofact = "Credito";
          }else{
            formpagofact ="Contado";
          }
         
          $.ajax({
            type: 'POST',
            url: '../../control/facturacion/savefact.php',
            data:('fecha_enca='+fecha+'&nitcl_enca='+nitcl+'&nomcl_enca='+nomcl+'&numfact_enca='+numfact+'&codvend_fact='+codvend+'&subto_enca='+subtofact+'&totafact_enca='+totafact+'&formpa_enca='+formpagofact),
            success: function(res){
              if(res==4){
                $('#respuestafa').html('Factura guardada.').css("color","#28a745");
                $("#cod-cl-fa").val("");
                $("#nomb-cl").val("");
                $("#vend-usu").val("");
                $("#subto-fact").val("");
                $("#total-fact").val("");
                $("#codi-fact").val('');
                $("#arti-fact").val('');
                $("#cant-fact").val('');
                $("#val-fact").val('');
                $("#sutl-fact").val('');
                $("#tele-cl").val('');
                $("#dire-cl").val('');
                $("#plazo-fact").val('');
                $("#contenido_facturacion").css("display", "none");
                $("#Modalfactsave").removeData('bs.modal');//actualizo modal
                $("#Modalfactsave").find('.modal-content').empty();//actualizo modal
                $("#contenido_impresion").load('../../control/facturacion/imprimir.php?factu='+numfact);
                $("#contenido_impresion").css("display", "block");   
                                    
                  
              }else{
                    if(res==2){
                      $('#respuestafa').html('ERROR en la operacion no existen articulos para facturar.').css("color","red");
                    }else{
                          if(res==1){
                            $('#respuestafa').html('verifique la informacion, intente de nuevo..').css("color","red");
                          }else{
                                if(res==0){
                                $('#respuestafa').html('ERROR en la operacion,esta factura ya esta guardada.').css("color","red");
                        }
                          }
                    }
              }
           }
        });
         
        }else{
          $('#respuestafa').html('Debe completar la informacion.').css("color","red");
        }
        
}

function Showmodalguardarfact(){
  $("#Modalfactsave").modal("show");
}
function Showmodalguardarcomp(){
  $("#Modalcompsave").modal("show");
}

function LlamarFact(){
    var numefact = $("#numero-fact").val();
    $('#respuestafa').html('');
    $("#numero-fact").focus().css("border-color","#000138");
        if(numefact !=""){
          $.ajax({
            type: 'POST',
            url: '../../control/facturacion/callfact.php',
            data:('nume_fact='+numefact),
            success: function(res){
              if(res!=1 && res !=0){
                  $('#respuestafa').html('Factura Encontrada.').css("color","#28a745");
                  var info = JSON.parse(JSON.stringify(res));
                  $("#fecha-fact").val(info.fecha_fact);
                  $("#cod-cl-fa").val(info.nit_fact);
                  $("#nomb-cl").val(info.nom_fact);
                  $("#nume-fact").val(info.num_fact);
                  $("#codi-fact").val('');
                  $("#arti-fact").val('');
                  $("#cant-fact").val('');
                  $("#cant-fact").val('');
                  $("#val-fact").val('');
                  $("#sutl-fact").val('');
                  $("#estado1").css("visibility","hidden");
                  $("#estado2").css("visibility","visible");
                  var fn=$("#nume-fact").val();
                  $('.contenedor-tabla-articulos').load('../../control/facturacion/tablaexterna2.php?factu='+fn);
                  $('.input-subto-fact').load('../../control/facturacion/inputsubtoexterno2.php?factu='+fn);
                  $('.input-total-fact').load('../../control/facturacion/inputtotalexterno2.php?factu='+fn);
                  
              }else{
                    if(res==1){
                      $('#respuestafa').html('No existe la factura').css("color","red");
                    }else{
                          if(res==0){
                            $('#respuestafa').html('verifique la informacion, intente de nuevo..').css("color","red");
                          }
                    }
              }
           }
        });
         
        }else{
          $("#numero-fact").focus().css("border-color","red");
          $('#respuestafa').html('Debe completar la informacion.').css("color","red");
        }
        
}
//boton llamar compra
function LlamarComp(){
    var numecomp = $("#numero-comp").val();
    $('#respuestaco').html('');
    $("#numero-comp").focus().css("border-color","#000138");
        if(numecomp !=""){
          $.ajax({
            type: 'POST',
            url: '../../control/compras/callcomp.php',
            data:('nume_comp='+numecomp),
            success: function(res){
              if(res!=1 && res !=0){
                  $('#respuestaco').html('Compra Encontrada.').css("color","#28a745");
                  var info = JSON.parse(JSON.stringify(res));
                  $("#fecha-comp").val(info.fecha_comp);
                  $("#cod-cl-co").val(info.nit_comp);
                  $("#nomb-cl").val(info.nom_comp);
                  $("#nume-comp").val(info.num_comp);
                  $("#codi-comp").val('');
                  $("#arti-comp").val('');
                  $("#cant-comp").val('');
                  $("#val-comp").val('');
                  $("#sutl-comp").val('');
                  $("#estado3").css("visibility","hidden");
                  $("#estado4").css("visibility","visible");
                  var com=$("#nume-comp").val();
                  $('.contenedor-tabla-articulos').load('../../control/compras/tablaexterna2.php?compra='+com);
                  $('.input-subto-comp').load('../../control/compras/inputsubtoexterno2.php?compra='+com);
                  $('.input-total-comp').load('../../control/compras/inputtotalexterno2.php?compra='+com);
                  
              }else{
                    if(res==1){
                      $('#respuestaco').html('No existe la compra').css("color","red");
                    }else{
                          if(res==0){
                            $('#respuestaco').html('verifique la informacion, intente de nuevo..').css("color","red");
                          }
                    }
              }
           }
        });
         
        }else{
          $("#numero-comp").focus().css("border-color","red");
          $('#respuestaco').html('Debe completar la informacion.').css("color","red");
        }
        
}
//calcular cantidad y valor al cambiar la cantidad o el valor en factura
function Calcularcant(){
        var canart = $("#cant-fact").val();
        var valart = $("#val-fact").val();
        if(valart !="" && valart !=0){
        var subto = canart * valart;
        $('#respuestafa').html('');
        
        var subtopro = new Intl.NumberFormat().format(subto);
         $("#sutl-fact").val(subtopro).css("font-weight","bold"); 
        }else{
          $('#respuestafa').html('El Valor No Puede Ser Cero').css("color","red");
        }
        
}
//calcular cantidad y valor al cambiar la cantidad o el valor en compra
function Calcularcantco(){
         //$('#respuestaco').html('');
        var canart = $("#cant-comp").val();
        var valart = $("#val-comp").val();
        if(valart !="" && valart !=0){
        var subto = canart * valart;
        $('#respuestaco').html('');
        
        var subtopro = new Intl.NumberFormat().format(subto);
         $("#sutl-comp").val(subtopro).css("font-weight","bold"); 
        }else{
          $('#respuestaco').html('El Valor No Puede Ser Cero').css("color","red");
        }
        
}


//boton guardar cambios factura
function GuardarCambiosfact(){
        
        var fecha = $("#fecha-fact").val();
        var nitcl = $("#cod-cl-fa").val();
        var numfact = $("#nume-fact").val();
        var nomcl = $("#nomb-cl").val();
        var codvend = $("#vend-usu").val();
        var subtofact = $("#subto-fact").val();
        var totafact = $("#total-fact").val();
       
    
        
        $('#respuestafa').html('');

        if(fecha !="" && nitcl !="" && numfact !="" && nomcl !="" && codvend !="" && subtofact !="" && totafact !="" && subtofact !=0 && totafact !=0){
          

          $.ajax({
            type: 'POST',
            url: '../../control/facturacion/savecambfact.php',
            data:('fecha_enca='+fecha+'&nitcl_enca='+nitcl+'&nomcl_enca='+nomcl+'&numfact_enca='+numfact+'&codvend_fact='+codvend+'&subto_enca='+subtofact+'&totafact_enca='+totafact),
            success: function(res){
              if(res==4){
                $("#estado1").css("visibility","visible");
                $("#estado2").css("visibility","hidden");
                $('#respuestafa').html('Factura Modificada.').css("color","#28a745");
                
                  $("#cod-cl-fa").val("");
                  $("#nomb-cl").val("");
                  $("#vend-usu").val("");
                  $("#subto-fact").val("");
                  $("#total-fact").val("");
                  $("#codi-fact").val('');
                  $("#arti-fact").val('');
                  $("#cant-fact").val('');
                  $("#val-fact").val('');
                  $("#sutl-fact").val('');
                  $("#tele-cl").val('');
                  $("#dire-cl").val('');
                  $("#plazo-fact").val('');
                  $("#contenido_facturacion").load("../../control/facturacion/index.php");
                  var fn=$("#nume-fact").val();
                  $('.contenedor-tabla-articulos').load('../../control/facturacion/tablaexterna2.php?factu='+fn);
                  $('.input-subto-fact').load('../../control/facturacion/inputsubtoexterno2.php?factu='+fn);
                  $('.input-total-fact').load('../../control/facturacion/inputtotalexterno2.php?factu='+fn);
                  $('.contenedor-tabla-articulos').empty();
                 
                  
              }else{
                    if(res==1){
                      $('#respuestafa').html('No se realizo ninguna modificacion.').css("color","red");
                      $("#estado1").css("visibility","hidden");
                      $("#estado2").css("visibility","visible");
                    }else{
                          if(res==2){
                            $('#respuestafa').html('verifique la informacion, intente de nuevo..').css("color","red");
                            $("#estado1").css("visibility","hidden");
                            $("#estado2").css("visibility","visible");
                          }else{
                                if(res==0){
                                $('#respuestafa').html('ERROR en la operacion,esta factura ya esta guardada.').css("color","red");
                                $("#estado1").css("visibility","hidden");
                                $("#estado2").css("visibility","visible");
                        }
                          }
                    }
              }
           }
        });
         
        }else{
          $('#respuestafa').html('Debe completar la informacion.').css("color","red");
          $("#estado1").css("visibility","hidden");
          $("#estado2").css("visibility","visible");
        }
        
}
//boton guardar cambios compras
function GuardarCambioscomp(){
        
        var fecha = $("#fecha-comp").val();
        var nitcl = $("#cod-cl-co").val();
        var numcomp = $("#nume-comp").val();
        var nomcl = $("#nomb-cl").val();
        var codvend = $("#vend-usu").val();
        var subtocomp = $("#subto-comp").val();
        var totacomp = $("#total-comp").val();
       
    
        
        $('#respuestaco').html('');

        if(fecha !="" && nitcl !="" && numcomp !="" && nomcl !="" && codvend !="" && subtocomp !="" && totacomp !="" && subtocomp !=0 && totacomp !=0){
          

          $.ajax({
            type: 'POST',
            url: '../../control/compras/savecambcomp.php',
            data:('fecha_enca='+fecha+'&nitcl_enca='+nitcl+'&nomcl_enca='+nomcl+'&numcomp_enca='+numcomp+'&codvend_comp='+codvend+'&subto_enca='+subtocomp+'&totacomp_enca='+totacomp),
            success: function(res){
              if(res==4){
                $("#estado3").css("visibility","visible");
                $("#estado4").css("visibility","hidden");
                $('#respuestaco').html('Compra Modificada.').css("color","#28a745");
                $("#cod-cl-co").val("");
                $("#nomb-cl").val("");
                $("#vend-usu").val("");
                $("#subto-comp").val("");
                $("#total-comp").val("");
                $("#codi-comp").val('');
                $("#arti-comp").val('');
                $("#cant-comp").val('');
                $("#val-comp").val('');
                $("#sutl-comp").val('');
                $("#tele-cl").val('');
                $("#dire-cl").val('');
                $("#plazo-comp").val('');
                $("#contenido_compras").load("../../control/compras/index.php");
                var com=$("#nume-comp").val();
                $('.contenedor-tabla-articulos').load('../../control/compras/tablaexterna2.php?compra='+com);
                $('.input-subto-comp').load('../../control/compras/inputsubtoexterno2.php?compra='+com);
                $('.input-total-comp').load('../../control/compras/inputtotalexterno2.php?compra='+com);
                $('.contenedor-tabla-articulos').empty();        
                  
              }else{
                    if(res==1){
                      $('#respuestaco').html('No se realizo ninguna modificacion.').css("color","red");
                      $("#estado3").css("visibility","hidden");
                      $("#estado4").css("visibility","visible");
                    }else{
                          if(res==2){
                            $('#respuestaco').html('verifique la informacion, intente de nuevo..').css("color","red");
                            $("#estado3").css("visibility","hidden");
                            $("#estado4").css("visibility","visible");
                          }else{
                                if(res==0){
                                $('#respuestaco').html('ERROR en la operacion.').css("color","red");
                                $("#estado3").css("visibility","hidden");
                                $("#estado4").css("visibility","visible");
                        }
                          }
                    }
              }
           }
        });
         
        }else{
          $('#respuestaco').html('Debe completar la informacion.').css("color","red");
          $("#estado3").css("visibility","hidden");
          $("#estado4").css("visibility","visible");
        }
        
}

function Showmodalguardarcambfact(){
  $("#Modalfactsavecamb").modal("show");
  $("#cod-cl-fa").blur()
}
function Showmodalguardarcerrarfact(){
  $("#Modalfactclose").modal("show");
  $("#cod-cl-fa").blur();
}
function Showmodalguardarcerrarcomp(){
  $("#Modalcompclose").modal("show");
  $("#cod-cl-co").blur();

}
function Showmodalguardarcambcomp(){
  $("#Modalcompsavecamb").modal("show");
  $("#cod-cl-co").blur();
}

//btn anular factura 
function DelFactanul(){
  var nufact = $('input:text[name=conf-anul-fact]').val();

$('#respuestanul').html('');
if(nufact !="" && nufact!=null){
 $.ajax({
    type: 'POST',
    url: '../../control/facturacion/delfact.php',
    data:('nu_fact='+nufact),
    success: function(res){
      if(res==4){
        $(".dataTables_wrapper .dataTables_filter").css("display", "block");
        $('.contenedor-tabla-facturas').load('../../control/facturacion/tablaexterna3.php');
        $('#respuestanul').html('Se anulo la factura correctamente').css("color","#28a745");

      }else{if(res==1){
        $('#respuestanul').html('verifique la informacion, intente de nuevo..').css("color","red");
        
             }else{if(res==2){
              $('#respuestanul').html('Factura ocupada, intentelo de nuevo..').css("color","red");
              
                    }else{if(res==0){
                    $('#respuestanul').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                                    }
                        }
                  }
            }
    }

});
}else{
  $('#respuestafa').html('Debe completar la informacion.').css("color","red");
}
}

//mostrar modal anulacion factura
function Showmodalanul(nufact){
  var nufact;
  $("#Modalfactanul").modal("show");
  $("#conf-anul-fact").val(nufact);
  
}
//mostrar modal anulacion compra
function Showmodalanul2(nucomp){
  var nucomp;
  $("#Modalcompanul").modal("show");
  $("#conf-anul-comp").val(nucomp);
  
}

function Imprifact(){
  $('#respuestafa').html('');
  var factu = $("#inp-dispo-fact").val().split('-');//parto la cadena para tomar solo el valor numerico
  var factur = parseInt(factu[0]);
  
  if(factur != "" && factur !=null){
    $.ajax({
    type: 'POST',
    url: '../../control/facturacion/validaimprimir.php',
    data:('nu_factur='+factur),
    success: function(res){
      if(res==4){
        $('#respuestafa').html('OK').css("color","green");
        $("#contenido_clientes").css("display", "none");
        $("#contenido_proveedores").css("display", "none");
        $("#contenido_usuarios").css("display", "none");
        $("#contenido_facturacion").css("display", "none");
        $("#contenido_anularfact").css("display", "none");
        $("#contenido_impresion").css("display", "block");
        $("#contenido_impresion").load('../../control/facturacion/imprimir.php?factu='+factur);
        $('#respuestafa').html('');
        $('#factudispo').load('../../control/facturacion/inputultfact.php');

      }else{if(res==1){
        $('#respuestafa').html('la factura no existe, intente de nuevo..').css("color","red");
        
             }else{if(res==0){
              $('#respuestafa').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
              
                    }
                  }
            }
    }

});
}else{
    $('#respuestafa').html('Debe Indicar El Numero De La Factura Que Se Va A Imprimir.').css("color","red");
    $("#inp-dispo-fact").focus().css("border-color","#000138");

  }
}

//FIN FACTURACION//

//COMPRAS
function Buscarclco(){
        var buscl = $("#cod-cl-co").val();
        $('#respuestaco').html('');
        $("#tele-cl").val('');
        $("#nomb-cl").val('');
        $("#dire-cl").val('');
           
        if(buscl !=""){
          $.ajax({
            type: 'POST',
            url: '../../control/compras/searchcl.php',
            data:('bus_cl='+buscl),
            dataType: "json",
            success: function(res){
              if(res!=1 && res !=0){
                var info = JSON.parse(JSON.stringify(res));
                $('#respuestaco').html('Informacion Encontrada.').css("color","#28a745");
                $("#tele-cl").val(info.cl_tel);
                $("#nomb-cl").val(info.cl_razon);
                $("#dire-cl").val(info.cl_dir);
            
                           
              }else{if(res==1){
                $('#respuestaco').html('No hay Resultados').css("color","red");
                
                     }else{if(res==0){
                      $('#respuestaco').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                      
                            }
                          }
                    }
            }

        });
        }else{
          $('#respuestaco').html('Debe llenar el campo de NIT/CC.').css("color","red");
        }
        
}

function Impricomp(){
  $('#respuestaco').html('');
  var compra = $("#inp-dispo-comp").val().split('-');//parto la cadena para tomar solo el valor numerico
  var com = parseInt(compra[0]);
  if(com != "" && com !=null){
    $.ajax({
    type: 'POST',
    url: '../../control/compras/validaimprimir.php',
    data:('compra='+com),
    success: function(res){
      if(res==4){
        $('#respuestaco').html('OK').css("color","green");
        $("#contenido_compras").css("display", "none");
        $("#contenido_impresionco").css("display", "block");
        $("#contenido_impresionco").load('../../control/compras/imprimir.php?compra='+com);
        $('#respuestaco').html('');
        $('#comprasdispo').load('../../control/compras/inputultcomp.php');

      }else{if(res==1){
        $('#respuestaco').html('la compra no existe, intente de nuevo..').css("color","red");
        
             }else{if(res==0){
              $('#respuestaco').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
              
                    }
                  }
            }
    }

});
}else{
    $('#respuestaco').html('Debe Indicar El Numero De La Compra Que Se Va A Imprimir.').css("color","red");
    $("#inp-dispo-comp").focus().css("border-color","#000138");
  }
}

// Cerrar Vista compras
function Cerrarvistacomp(){
  $("#contenido_compras").css("display", "none");
}

// Cerrar Vista Anular compra
function Cerrarvistacompanul(){
  $("#contenido_anularcompr").empty();
  $("#contenido_anularcompr").css("display", "none");
}
function GuardarComp(){
        var fecha = $("#fecha-comp").val();
        var nitcl = $("#cod-cl-co").val();
        var numcomp = $("#nume-comp").val();
        var nomcl = $("#nomb-cl").val();
        var codvend = $("#vend-usu").val();
        var subtocomp = $("#subto-comp").val();
        var totacomp = $("#total-comp").val();
        var formpagocomp = "";

        $('#respuestaco').html('');

        if(nitcl !="" && numcomp !="" && nomcl !="" && codvend !="" && subtocomp !="" && totacomp !="" && subtocomp !=0 && totacomp !=0){
          if($('#inlineRadio1').prop('checked') ) {
            formpagocomp = "Credito";
          }else{
            formpagocomp ="Contado";
          }

          $.ajax({
            type: 'POST',
            url: '../../control/compras/savecomp.php',
            data:('fecha_enca='+fecha+'&nitcl_enca='+nitcl+'&nomcl_enca='+nomcl+'&numcomp_enca='+numcomp+'&codvend_comp='+codvend+'&subto_enca='+subtocomp+'&totacomp_enca='+totacomp+'&formpa_enca='+formpagocomp),
            success: function(res){
              if(res==4){
                $('#respuestaco').html('Compra guardada.').css("color","#28a745");
                $("#cod-cl-co").val("");
                $("#nomb-cl").val("");
                $("#vend-usu").val("");
                $("#subto-comp").val("");
                $("#total-comp").val("");
                $("#codi-comp").val('');
                $("#arti-comp").val('');
                $("#cant-comp").val('');
                $("#val-comp").val('');
                $("#sutl-comp").val('');
                $("#tele-cl").val('');
                $("#dire-cl").val('');
                $("#plazo-comp").val('');
                $("#contenido_compras").css("display", "none");
                $("#Modalcompsave").removeData('bs.modal');//actualizo modal
                $("#Modalcompsave").find('.modal-content').empty();//actualizo modal
                $("#contenido_impresion").load('../../control/compras/imprimir.php?compra='+numcomp);
                $("#contenido_impresion").css("display", "block");   
                                    
                  
              }else{
                    if(res==2){
                      $('#respuestaco').html('ERROR en la operacion no existen articulos para comprar.').css("color","red");
                    }else{
                          if(res==1){
                            $('#respuestaco').html('verifique la informacion, intente de nuevo..').css("color","red");
                          }else{
                                if(res==0){
                                $('#respuestaco').html('ERROR en la operacion,esta compra ya esta guardada.').css("color","red");
                        }
                          }
                    }
              }
           }
        });
         
        }else{
          $('#respuestaco').html('Debe completar la informacion.').css("color","red");
        }
        
}
//btn anular compra
function DelCompanul(){
  var nucomp = $('input:text[name=conf-anul-comp]').val();

$('#respuestanulco').html('');
if(nucomp !="" && nucomp!=null){
 $.ajax({
    type: 'POST',
    url: '../../control/compras/delcomp.php',
    data:('nu_comp='+nucomp),
    success: function(res){
      if(res==4){
        $(".dataTables_wrapper .dataTables_filter").css("display", "block");
        $('.contenedor-tabla-compras').load('../../control/compras/tablaexterna3.php');
        $('#respuestanulco').html('Se anulo la compra correctamente').css("color","#28a745");

      }else{if(res==1){
        $('#respuestanulco').html('verifique la informacion, intente de nuevo..').css("color","red");
        
             }else{if(res==2){
              $('#respuestanulco').html('Compra ocupada, intentelo de nuevo..').css("color","red");
              
                    }else{if(res==0){
                    $('#respuestanulco').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                                    }
                        }
                  }
            }
    }

});
}else{
  $('#respuestanulco').html('Debe completar la informacion.').css("color","red");
}
}
//FIN COMPRAS//
//RECIBO DE CAJA//
function Buscarclrb(){
        var busclrb = $("#cod-cl-rb").val();
        $('#respuestarb').html('');
        $("#nomb-cl-rb").val('');
           
        if(busclrb !="" && busclrb !=null){
          $.ajax({
            type: 'POST',
            url: '../../control/recibos/searchclrb.php',
            data:('bus_clrb='+busclrb),
            dataType: "json",
            success: function(res){
              if(res!=1 && res !=0 && res!=2){
                var info = JSON.parse(JSON.stringify(res));
                $('.contenedor-tabla-factrb').load('../../control/recibos/tablaexterna.php');
                $('#respuestarb').html('Informacion Encontrada.').css("color","#28a745");
                $("#nomb-cl-rb").val(info.cl_razon);
                $('.contenedor-tabla-factapagarb').load('../../control/recibos/tablaexterna3.php');
                $('.input-total-rb').load('../../control/recibos/inputtotalexterno.php');
                $('.input-subto-rb').load('../../control/recibos/inputsubtoexterno.php');
              }else{if(res==1){
                $('#respuestarb').html('No hay Resultado para este cliente').css("color","red");
                $('#total-rb').val(0);
                $('.contenedor-tabla-factrb').load('../../control/recibos/vaciartablarb.php');
                $("#nomb-cl-rb").val('');
                
                     }else{if(res==0){
                      $('#respuestarb').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                      $('#total-rb').val(0);
                      $('.contenedor-tabla-factrb').load('../../control/recibos/vaciartablarb.php');
                      $("#nomb-cl-rb").val('');
                      
                            }else{if(res==2){
                              $('#respuestarb').html('No hay facturas pendientes').css("color","red"); 
                              $('#total-rb').val(0);
                              $('.contenedor-tabla-factrb').load('../../control/recibos/vaciartablarb.php');
                              $("#nomb-cl-rb").val('');
                                 }
                            }
                          }
                    }
            }

        });
        }else{
          $('#respuestarb').html('Debe llenar el campo de NIT/CC.').css("color","red");
        }
        
}
function Buscarcl2rb(){
  var busclrb = $('input:radio[name=clientesbs]:checked').val();
      $(".dataTables_wrapper .dataTables_filter").css("display", "none");   
      $('#respuestarb').html('');
      $("#nomb-cl-rb").val('');
      if(busclrb !="" && busclrb!=null){
          $.ajax({
            type: 'POST',
            url: '../../control/recibos/searchclrb.php',
            data:('bus_clrb='+busclrb),
            dataType: "json",
            success: function(res){
              if(res!=1 && res !=0){
                var info = JSON.parse(JSON.stringify(res));
                $('.contenedor-tabla-factrb').load('../../control/recibos/tablaexterna.php');
                $('.contenedor-tabla-factapagarb').load('../../control/recibos/tablaexterna3.php');
                $('#respuestarb').html('Informacion Encontrada.').css("color","#28a745");
                $("#nomb-cl-rb").val(info.cl_razon);
                $('.input-total-rb').load('../../control/recibos/inputtotalexterno.php');
                $('.input-subto-rb').load('../../control/recibos/inputsubtoexterno.php');
              }else{if(res==1){
                $('#respuestarb').html('No hay Resultado para este cliente').css("color","red");
                $('#total-rb').val(0);
                $('.contenedor-tabla-factrb').load('../../control/recibos/vaciartablarb.php');
                $("#nomb-cl-rb").val('');
                
                     }else{if(res==0){
                      $('#respuestarb').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
                      $('#total-rb').val(0);
                      $('.contenedor-tabla-factrb').load('../../control/recibos/vaciartablarb.php');
                      $("#nomb-cl-rb").val('');
                      
                            }else{if(res==2){
                              $('#respuestarb').html('No hay facturas pendientes').css("color","red"); 
                              $('#total-rb').val(0);
                              $('.contenedor-tabla-factrb').load('../../control/recibos/vaciartablarb.php');
                              $("#nomb-cl-rb").val('');
                                 }
                            }
                          }
                    }
            }

        });
        }else{
          $('#respuestarb').html('Debe llenar el campo de NIT/CC.').css("color","red");
        }
        
}
//actualizar campos en recibo de pagos
function updatevalrb(nfac){
        var nfac;
        var confacrb = $("#confacrb"+nfac).val();
        var valfacrb = $("#valfacrb"+nfac).val();
        var avefacrb = $("#avefacrb"+nfac).val();
        var desfacrb = $("#desfacrb"+nfac).val();
        var canfacrb = $("#canfacrb"+nfac).val();
        var flefacrb = $("#flefacrb"+nfac).val();
        var sobfacrb = $("#sobfacrb"+nfac).val();
        var salfacrb = $("#salfacrb"+nfac).val();
        $('#respuestarb').html('');
        $("#artcant"+nfac).focus().css("border-color","#000138");
        $("#artpventa"+nfac).focus().css("border-color","#000138");
        if(confacrb !=""  && confacrb !=0 && valfacrb !=""  && valfacrb !=0 && avefacrb !=""  && avefacrb !=0 && desfacrb !=""  && desfacrb !=0 && canfacrb !=""  && canfacrb !=0 && flefacrb !=""  && flefacrb !=0 && sobfacrb !=""  && sobfacrb !=0 && salfacrb !=""  && salfacrb !=0){
          
          $.ajax({
              type: 'POST',
              url: '../../control/recibos/updaterb.php',
              data:('num_farb='+nfac+'&confacrb_farb='+confacrb+'&valfacrb_farb='+valfacrb+'&avefacrb_farb='+avefacrb+'&desfacrb_farb='+desfacrb+'&canfacrb_farb='+canfacrb+'&flefacrb_farb='+flefacrb+'&sobfacrb_farb='+sobfacrb+'&salfacrb_farb='+salfacrb),
              success: function(res){
                if(res==4){
                $('#respuestarb').html('cambio ok').css("color","#28a745");
                $('.contenedor-tabla-factapagarb').load('../../control/recibos/tablaexterna3.php');
                $('.input-total-rb').load('../../control/recibos/inputtotalexterno.php');
                $('.input-subto-rb').load('../../control/recibos/inputsubtoexterno.php');

                }else{
                  if(res==1){
                    $('#respuestarb').html('verifique la informacion, intente de nuevo..').css("color","red");
                  }else{
                    if(res==2){
                      $('#respuestarb').html('la cantidad debe ser menor al stock..').css("color","red");
                     
                  
                    }else{
                      if(res==0){                    
                        $('#respuestarb').html('Debe Completar La Informacion').css("color","red");
                      }
                    }
                  }
              }
             

            }

        });
          }else{
            $('#respuestarb').html('Debe completar la Informacion.').css("color","red");
            
          }
       
}
//btn borrar factura de recibos pagos temporal
function Delfacrb(nfac){
  var nfac;
  
$('#respuestarb').html('');

if(nfac !="" && nfac !=null){
 $.ajax({
    type: 'POST',
    url: '../../control/recibos/delfarb.php',
    data:('num_farb='+nfac),
    success: function(res){
      if(res==4){
        $('#respuestarb').html('los datos se borraron correctamente').css("color","#28a745");
        $('.contenedor-tabla-factapagarb').load('../../control/recibos/tablaexterna3.php');
        $('.contenedor-tabla-factrb').load('../../control/recibos/tablaexterna.php');
        $('.input-total-rb').load('../../control/recibos/inputtotalexterno.php');
       $('.input-subto-rb').load('../../control/recibos/inputsubtoexterno.php');

      }else{if(res==1){
        $('#respuestarb').html('verifique la informacion, intente de nuevo..').css("color","red");
        
             }else{if(res==0){
              $('#respuestarb').html('ERROR en la operacion, intentelo de nuevo..').css("color","red");
              
                    }
                  }
            }
    }

});
}else{
  $('#respuestarb').html('Debe completar la informacion.').css("color","red");
}
}
function Showmodalguardarreci(){
  $("#Modalrecisave").modal("show");
}

function GuardarRecib(){
        var nitcl = $("#cod-cl-rb").val();
        var nomcl = $("#nomb-cl-rb").val();
        var fecha = $("#fecha-rb").val();
        var fechaela = $("#fechaela-rb").val();
        var numreci = $("#num-rb").val();
        
        
        var subtofact = $("#subto-fact").val();
        var totafact = $("#total-fact").val();
        var  formpagofact="";
        $('#respuestarb').html('');

        if(nitcl !="" && numfact !="" && nomcl !="" && codvend !="" && subtofact !="" && totafact !="" && subtofact !=0 && totafact !=0){
          if($('#inlineRadio1').prop('checked') ) {
            formpagofact = "Credito";
          }else{
            formpagofact ="Contado";
          }
         
          $.ajax({
            type: 'POST',
            url: '../../control/facturacion/savefact.php',
            data:('fecha_enca='+fecha+'&nitcl_enca='+nitcl+'&nomcl_enca='+nomcl+'&numfact_enca='+numfact+'&codvend_fact='+codvend+'&subto_enca='+subtofact+'&totafact_enca='+totafact+'&formpa_enca='+formpagofact),
            success: function(res){
              if(res==4){
                $('#respuestarb').html('Factura guardada.').css("color","#28a745");
                $("#cod-cl-rb").val("");
                $("#nomb-cl-rb").val("");
                $("#vend-usu").val("");
                $("#subto-fact").val("");
                $("#total-fact").val("");
                $("#codi-fact").val('');
                $("#arti-fact").val('');
                $("#cant-fact").val('');
                $("#val-fact").val('');
                $("#sutl-fact").val('');
                $("#tele-cl").val('');
                $("#dire-cl").val('');
                $("#plazo-fact").val('');
                $("#contenido_facturacion").css("display", "none");
                $("#Modalfactsave").removeData('bs.modal');//actualizo modal
                $("#Modalfactsave").find('.modal-content').empty();//actualizo modal
                $("#contenido_impresion").load('../../control/facturacion/imprimir.php?factu='+numfact);
                $("#contenido_impresion").css("display", "block");   
                                    
                  
              }else{
                    if(res==2){
                      $('#respuestarb').html('ERROR en la operacion no existen articulos para facturar.').css("color","red");
                    }else{
                          if(res==1){
                            $('#respuestarb').html('verifique la informacion, intente de nuevo..').css("color","red");
                          }else{
                                if(res==0){
                                $('#respuestarb').html('ERROR en la operacion,esta factura ya esta guardada.').css("color","red");
                        }
                          }
                    }
              }
           }
        });
         
        }else{
          $('#respuestarb').html('Debe completar la informacion.').css("color","red");
        }
        
}
//FIN RECIBO DE CAJA//
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script> 
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
  

</script>

<!-- Modal borrar usuario -->
<div class="modal fade" id="Modalus" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title title-modal" id="exampleModalCenterTitle">¿Quieres eliminar este usuario?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="javascript:BorrarDatosus();">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<!--/Modal borrar usuario-->
<!-- Modal editar usuario -->
<div class="modal fade" id="Modalus2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title title-modal" id="exampleModalCenterTitle">¿Quieres editar este usuario?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="javascript:EditarDatosus();">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<!--/Modal editar usuario-->
<!-- Modal borrar articulo -->
<div class="modal fade" id="Modalart" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title title-modal" id="exampleModalCenterTitle">¿Quieres eliminar este articulo?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="javascript:BorrarDatoart();">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<!--/Modal borrar articulo-->
<!-- Modal editar articulo -->
<div class="modal fade" id="Modalart2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title title-modal" id="exampleModalCenterTitle">¿Quieres editar este articulo?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="javascript:EditarDatoart();">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<!--/Modal editar articulo-->

<!-- Modal borrar cliente -->
<div class="modal fade" id="Modalcl" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title title-modal" id="exampleModalCenterTitle">¿Quieres eliminar este cliente?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="javascript:BorrarDatoscl();">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<!--/Modal borrar cliente-->
<!-- Modal editar cliente -->
<div class="modal fade" id="Modalcl2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title title-modal" id="exampleModalCenterTitle">¿Quieres modificar este cliente?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="javascript:EditarDatoscl();">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<!--/Modal editar cliente-->

<!-- Modal proveedor -->
<div class="modal fade" id="Modalpv" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title title-modal" id="exampleModalCenterTitle">¿Quieres eliminar este proveedor?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="javascript:BorrarDatospv();">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<!--/Modal proveedor-->
<!-- Modal editar proveedor -->
<div class="modal fade" id="Modalpv2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title title-modal" id="exampleModalCenterTitle">¿Quieres modificar este proveedor?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="javascript:EditarDatospv();">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<!--/Modal editar proveedor-->
</body>
</html>