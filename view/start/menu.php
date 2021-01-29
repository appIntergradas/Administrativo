<style>
  * {
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin:auto;
        font-family:Arial, Helvetica, sans-serif;
        position: relative;
        left: 65px;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#007bff;
				color:#fff;
				text-decoration:none;
				padding:10px 12px;
        display:block;
        position: relative;
        right: 465px;
			}
			
			.nav li a:hover {
				background-color:#000138;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
      }
      .subm{
        z-index:1;
      }
      .subm2{
        z-index:2;
      }
      .suan{
        width:180px;
      }
      

@media (max-width: 1500px) {                                                      
.inp-sutl-fact{
  width: 97px;
  right: 97px;
}
.titulo5 h4{
  width:1125px;
  color:white;
}
.btncerrarf {
  left:1050px;

}
.btncerrar .btnc{
  position: relative;
 right: 275px;
  }
  
}
      
      @media (max-width: 900px) {
        #header{
        width:205px;
      }
       }
</style>
<nav class="navbar navbar-expand-md col-xl-10">
            <a class="navbar-brand" href="#"><img src="../../view/img/logo.jpg" class="logo" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
<div id="header">
              <ul class="nav">
              <li><a href="#">Facturacion</a>
                  <ul>
                  <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-facturacion" id="llamar_facturacion">Cotizacion Venta</span></a></li>
                  <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-facturacion" id="llamar_facturacion">Reimprimir</span></a></li>
                  <li class="subopciones"><a style="<?=$peranul?>" href="#"><i class="fas fa-chart-bar"></i><span class="link-anularfact" id="llamar_anularfact">Anular Venta</span></a></li>
                  <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-facturacion" id="llamar_facturacion">Devolucion Venta</span></a></li>
                  <li class="subopciones"><a href="#" ><i class="fas fa-angle-right"></i> Recibos De Caja</a>
                    <ul>
                      <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Generar Recibo De Caja</span></a></li>
                      <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Reimprimir Recibo De Caja</span></a></li>
                      <li class="subopciones"><a style="<?=$peranul?>" href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Anular Recibo De Caja</span></a></li>
                      <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Listar Recibo De Caja</span></a></li>
                      <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Listar Recibo De Caja Por Banco</span></a></li>
                      <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Modificar Banco En Recibo</span></a></li>
                      <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Modificar Fceha En Recibo</span></a></li>
                    </ul>
                  </li>
                 
                  </ul>
                </li>
                <li><a href="#">Compras</a>
                  <ul>
                  <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-compras" id="llamar_compras">Cotizacion Compra</span></a></li>
                  <li class="subopciones"><a style="<?=$peranul?>" href="#"><i class="fas fa-chart-bar"></i><span class="link-anularcompr" id="llamar_anularcompr">Anular Compra</span></a></li>
                  <li class="subopciones"><a href="#" ><i class="fas fa-angle-right"></i> Ordenes De Pago</a>
                    <ul>
                      <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Generar Orden De pago</span></a></li>
                      <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Reimprimir Orden De pago</span></a></li>
                      <li class="subopciones"><a style="<?=$peranul?>" href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Anular Orden De pago</span></a></li>
                      <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Listar Orden De pago</span></a></li>
                    </ul>
                  </li>
                  </ul>
                </li>
                <li><a href="#">Informes</a>
                  <ul>
                  <li class="subopciones"><a href="#" ><i class="fas fa-angle-right"></i> Informe De Venta</a>
                    <ul class="subm">
                      <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Informe De Venta</span></a></li>
                      <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Informe De Venta Por Nit</span></a></li>
                      <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Informe De Venta Por Documento</span></a></li>
                      <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Informe De Venta Por Credito</span></a></li>
                      <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Informe De Venta Por Contado</span></a></li>
                    </ul>
                  </li> 
                  <li class="subopciones"><a href="#" ><i class="fas fa-angle-right"></i> Informe De Compra</a>
                    <ul class="subm2">
                      <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Informe De Compra</span></a></li>
                      <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Informe De Compra Por Nit</span></a></li>
                      <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Informe De Compra Por Documento</span></a></li>
                      <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Informe De Compra Por Credito</span></a></li>
                      <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Informe De Compra Por Contado</span></a></li>
                    </ul>
                  </li> 
                  <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-compras" id="llamar_compras">Informes Por Comision</span></a></li>
                  <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-compras" id="llamar_compras">Informes Por Devolucion</span></a></li>
                   
                  </ul>
                </li>
                <li><a href="#">Utilidades</a>
                  <ul>
                    <li class="subopciones"><a href="#" ><i class="fas fa-briefcase"></i><span class="link-clientes" id="llamar_clientes">Clientes</span></a></li>
                    <li class="subopciones"><a href="#"><i class="fas fa-chart-bar"></i><span class="link-prove" id="llamar_proveedores">Proveedores</span></a></li>
                    <li class="subopciones"><a href="#"><i class="fas fa-chart-bar"></i><span class="link-usu" id="llamar_usuarios">Usuarios</span></a></li>
                    <li class="subopciones"><a href="#"><i class="fas fa-chart-bar"></i><span class="link-usu" id="llamar_usuarios">Bancos</span></a></li>
                    <li class="subopciones"><a href="#"><i class="fas fa-chart-bar"></i><span class="link-usu" id="llamar_usuarios">Vendedores</span></a></li>
                     
                  </ul>
                </li>
                <li><a href="#">Inventarios</a>
                  <ul>
                    <li class="subopciones"><a href="#"><i class="fas fa-chart-bar"></i><span class="link-art" id="llamar_articulos">Articulos</span></a></li> 
                    <li class="subopciones"><a href="#" ><i class="fas fa-briefcase"></i><span class="link-clientes" id="llamar_clientes">Reporte Inventarios</span></a></li>
                    <li class="subopciones"><a href="#"><i class="fas fa-chart-bar"></i><span class="link-prove" id="llamar_proveedores">Descargar Averias</span></a></li>
                    <li class="subopciones"><a href="#"><i class="fas fa-chart-bar"></i><span class="link-usu" id="llamar_usuarios">Inventario Al Dia</span></a></li>
                  </ul>
                </li>
                <li><a href="#">Cartera</a>
                  <ul class="suan">
                    <li class="subopciones"><a href="#" ><i class="fas fa-angle-right"></i> Cartera Por Cobrar</a>
                      <ul class="subm">
                        <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Cartera Por Corte</span></a></li>
                        <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Cartera General</span></a></li>
                        <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Cartera Por Nit</span></a></li>
                        <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Cartera Por Documento</span></a></li>
                      </ul>
                    </li> 
                    <li class="subopciones"><a href="#" ><i class="fas fa-angle-right"></i> Cartera Por Pagar</a>
                      <ul class="subm2">
                        <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Cartera General</span></a></li>
                        <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Cartera Por Nit</span></a></li>
                        <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-recibo" id="llamar_recibo">Cartera Por Documento</span></a></li>
                      </ul>
                    </li> 
                  </ul>
                </li>
                
               
                
              </ul>
</div>

















            <!--
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav">
             
                <li class="dropdown">
                  <a class="dropdown-toggle opc" data-toggle="dropdown" href="#">Utilidades<span class="caret"></span></a>
                  <ul class="dropdown-menu submenu">
                    <li class="subopciones"><a href="#" ><i class="fas fa-briefcase"></i><span class="link-clientes" id="llamar_clientes">Clientes</span></a></li>
                    <li class="subopciones"><a href="#"><i class="fas fa-chart-bar"></i><span class="link-prove" id="llamar_proveedores">Proveedores</span></a></li>
                    <li class="subopciones"><a href="#"><i class="fas fa-chart-bar"></i><span class="link-usu" id="llamar_usuarios">Usuarios</span></a></li>
                    <li class="subopciones"><a href="#"><i class="fas fa-chart-bar"></i><span class="link-art" id="llamar_articulos">Articulos</span></a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a class="dropdown-toggle opc" data-toggle="dropdown" href="#">Facturacion<span class="caret"></span></a>
                  <ul class="dropdown-menu submenu">
                    <li class="subopciones"><a href="#" ><i class="fas fa-chart-bar"></i><span class="link-facturacion" id="llamar_facturacion">Facturacion</span></a></li>
                    <li class="subopciones"><a style="<?=$peranul?>" href="#"><i class="fas fa-chart-bar"></i><span class="link-anularfact" id="llamar_anularfact">Anular Factura</span></a></li>
                  </ul>
                </li>
                
                <li class="dropdown">
                  <a class="dropdown-toggle opc" data-toggle="dropdown" href="#">Ingresos<span class="caret"></span></a>
                  <ul class="dropdown-menu submenu">
                    <li><a href="#">Destacados</a></li>
                    <li><a href="#">Noticias</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">Imágenes</a></li>
                    <li><a href="#">Documentos</a></li>
                    <li><a href="#">Agenda</a></li>
                    <li><a href="#">Argumentos populares</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a class="dropdown-toggle opc" data-toggle="dropdown" href="#">Egresos<span class="caret"></span></a>
                  <ul class="dropdown-menu submenu">
                    <li><a href="#">Cómo colaborar</a></li>
                    <li><a href="#">En Internet</a></li>
                    <li><a href="#">Suscríbete</a></li>
                    <li><a href="#">Donaciones</a></li>
                    <li><a href="#">Únete</a></li>
                  </ul>
                </li> 
               
              </ul>
            </div>   --> 
        </nav>