<?php
include_once '../../generic/Permisos.php';
include_once '../../generic/config/config.php';
include_once '../../generic/DB.php';
include_once '../../model/dao/DAORol.php';
include_once '../../model/dao/DAOModulosxRol.php';
include_once '../../model/dao/DAOUsuario.php';
include_once '../../model/business/Usuario.php';
include_once '../../model/dao/DAOArticulos.php';
include_once '../../model/business/Articulos.php';
include_once '../../model/dao/DAOArticulos_temp.php';
include_once '../../model/business/Articulos_temp.php';
include_once '../../model/dao/DAOClientes.php';
include_once '../../model/business/Clientes.php';
include_once '../../model/dao/DAOEncabezadofactu.php';
include_once '../../model/business/Encabezadofactu.php';
include_once '../../model/dao/DAORecibopagar_temp.php';
include_once '../../model/business/Recibopagar_temp.php';
include_once '../../model/dao/DAOFacturb.php';
include_once '../../model/business/Facturb.php';

    
session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
    $ident =  $_SESSION['usuario']->get_usu_identificacion();

    $bitTablapagarb='';   
    $totalfinal=0;
    $subtotalrb=0;
    
    $numfa=$_GET['nufa'];
    $valfa=$_GET['vafa'];
    $ftrb = new Facturb();
    $recipat = new Recibopagarb_temp();
    $recipat->set_num_factrb($numfa);
    $recipat->set_concepto_factrb("pago factura");
    $recipat->set_valor_factrb($valfa);
    $recipat->set_averias_factrb(1000);
    $recipat->set_descu_factrb(10);
    $recipat->set_cance_factrb($valfa);
    $recipat->set_flete_factrb(100);
    $recipat->set_sobra_factrb($valfa);
    $recipat->set_saldar_factrb($valfa);
    $recipat->set_nom_vende_factrb($nameuser);
    $recipat->InserRecipago();
    $ftrb->set_nfact($numfa);
    $ftrb->DeleFacturb();
    $reci=$recipat->ListarRecipago();
                 
    
  

    $bitTablapagarb='
    <html>
        <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
        <link rel="stylesheet" href="../../view/css/stylesfact.css">
        </head>
       </head>
       <style>
        .dataTables_wrapper .dataTables_length{
        display:none;
        }
      </style> 
       <body>
    <table id="factapagarb2" class="display" style="width:100%">
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
    <tbody>';
    foreach ($reci as $key => $value8) {
      $subtotalrb=$subtotalrb + $value8['valor_factrb'];
      $bitTablapagarb.='<tr>
                            <td style="text-align: left;">'.$value8['num_factrb'].'</td>
                            <td style="text-align: left;"><input type="text" class="inpartcant" name="artcant" id="confacrb'.$value8['num_factrb'].'" value="'.$value8['concepto_factrb'].'" onkeyup="javascript: updatevalrb('.$value8['num_factrb'].');"></td>
                            <td style="text-align: left;"><input type="text" class="inpartcant" name="artcant" id="valfacrb'.$value8['num_factrb'].'" value="'.$value8['valor_factrb'].'" onkeyup="javascript: updatevalrb('.$value8['num_factrb'].');"></td>
                            <td style="text-align: left;"><input type="text" class="inpartcant" name="artcant" id="avefacrb'.$value8['num_factrb'].'" value="'.$value8['averias_factrb'].'" onkeyup="javascript: updatevalrb('.$value8['num_factrb'].');"></td>
                            <td style="text-align: left;"><input type="text" class="inpartcant" name="artcant" id="desfacrb'.$value8['num_factrb'].'" value="'.$value8['descu_factrb'].'" onkeyup="javascript: updatevalrb('.$value8['num_factrb'].');"></td>
                            <td style="text-align: left;"><input type="text" class="inpartcant" name="artcant" id="canfacrb'.$value8['num_factrb'].'" value="'.$value8['cance_factrb'].'" onkeyup="javascript: updatevalrb('.$value8['num_factrb'].');"></td>
                            <td style="text-align: left;"><input type="text" class="inpartcant" name="artcant" id="flefacrb'.$value8['num_factrb'].'" value="'.$value8['flete_factrb'].'" onkeyup="javascript: updatevalrb('.$value8['num_factrb'].');"></td>
                            <td style="text-align: left;"><input type="text" class="inpartcant" name="artcant" id="sobfacrb'.$value8['num_factrb'].'" value="'.$value8['sobra_factrb'].'" onkeyup="javascript: updatevalrb('.$value8['num_factrb'].');"></td>
                            <td style="text-align: left;"><input type="text" class="inpartcant" name="artcant" id="salfacrb'.$value8['num_factrb'].'" value="'.$value8['saldar_factrb'].'" onkeyup="javascript: updatevalrb('.$value8['num_factrb'].');"></td>
                            <td style="text-align: center;"><button onClick="javascript: Delfacrb('.$value8['num_factrb'].');" class="btn btn-danger taico"><i class="fas fa-trash" aria-hidden="true"></i></button></td>
                       </tr>';
    }
    $bitTablapagarb.='</tbody>
    <tfoot>
        
    </tfoot>
  </table>
  
  <script>
  var table=$("#factapagarb2").DataTable( {
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
                  
</script>
  </body>
  </html>';
  echo $bitTablapagarb;
  
}  else {
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/login.php');</script>";
  }