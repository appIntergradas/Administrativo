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
include_once '../../model/dao/DAODetallefactu_temp.php';
include_once '../../model/business/Detallefactu_temp.php';
include_once '../../model/dao/DAODetallefactu.php';
include_once '../../model/business/Detallefactu.php';

    
session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),1)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();
    $permiso = $_SESSION['usuario']->get_usu_permiso();
    $userRol = $_SESSION['usuario']->get_rol_codigo();
    $ident =  $_SESSION['usuario']->get_usu_identificacion();

    $bitArticulosTabla='';
    $bitArticulosTablabs='';
    $bitClientesTablabs='';
    $bitFact ='';
    $nofact=[];
    $ultfact=[];
    $subtot=0;
    $subtotfinal=0;
    $comilla="'";
    if(isset($_GET['factu'])){
            $factn=$_GET['factu'];
            $deta = new Detallefactu();
            $detat = new Detallefactutemp();
            //llevo los articulos a detallesfact_temp
            $deta->set_num_fact($factn);
            $info3=$deta->InfoDetafact();
            foreach ($info3 as $key => $value4) {
                //guardo articulos en detallefactura
                $detat->set_cod_articulo($value4['cod_articulo']);
                $detat->set_nom_articulo($value4['nom_articulo']);
                $detat->set_valorve_articulo($value4['valorve_articulo']);
                $detat->set_canti_articulo($value4['canti_articulo']);
                $detat->set_subtotal_articulo($value4['subtotal_articulo']);
                $detat->set_num_fact($value4['num_fact']);
                $info4=$detat->Infodetalletemp();
                if(empty($info4)){
                  $detat->InserDetallefact();
                }
            }
            $detat->set_num_fact($factn);
            $facturas=$detat->InfoDetafact();
        
            
            $bitArticulosTabla='
            <html>
                <head>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
                <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
                <link rel="stylesheet" href="../../view/css/stylesfact.css">
                </head>
            </head>
            <body>
            <table id="articulos3" class="display" style="width:100%">
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
            <tbody>';
            foreach ($facturas as $key => $value) {
                $subtot = $value['canti_articulo'] * $value['valorve_articulo'];
                $subtotfinal=$subtotfinal+$subtot; 
                $bitArticulosTabla.='<tr>
                                <td style="text-align: left;">'.$value['cod_articulo'].'</td>
                                <td style="text-align: left;">'.$value['nom_articulo'].'</td>
                                <td style="text-align: left;"><input type="text" class="inpartcant" name="artcant" id="artcant'.$value['cod_articulo'].'" value="'.$value['canti_articulo'].'" onkeyup="javascript: updateval2('.$value['cod_articulo'].');"></td>
                                <td style="text-align: left;"><input type="text" class="inpartpventa" name="artpventa" id="artpventa'.$value['cod_articulo'].'" value="'.$value['valorve_articulo'].'" onkeyup="javascript: updateval2('.$value['cod_articulo'].');"></td>
                                <td style="text-align: left;">'.$subtot.'</td>
                                <td style="text-align: center;"><button onClick="javascript:DelArt2('.$value['cod_articulo'].');" class="btn btn-danger taico"><i class="fas fa-trash" aria-hidden="true"></i></button></td>
                            </tr>';
            }
            $bitArticulosTabla.='</tbody>
            <tfoot>
                
            </tfoot>
            </table>
            <script>
            $("#articulos3").DataTable( {
                            responsive: true,
                            "scrollY":        "1500px",
                            "autoWidth": true,
                            "scrollCollapse": true,
                            "pageLength": 5,
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
            echo $bitArticulosTabla;
            }else{
                echo 1;
            }
    
}  else {
    echo "<script languaje='javascript'>alert('[ERROR 404!] You do not have permission to access this page'); window.location = ('../../control/start/login.php');</script>";
  }