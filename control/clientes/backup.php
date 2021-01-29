<?php

ini_set('memory_limit', '-1');
    include_once '../../generic/Permisos.php';
    include_once '../../generic/config/config.php';
    include_once '../../generic/DB.php';
    include_once '../../model/dao/DAOImport.php';
    include_once '../../model/business/Import.php';   
    include_once '../../model/dao/DAOExport.php';
    include_once '../../model/business/Export.php'; 
    include_once '../../model/dao/DAOUsuario.php';
    include_once '../../model/business/Usuario.php';
    
session_start();
$per = new Permisos();
if($per->Autorizar($_SESSION['usuario']->get_permisos(),10)!= false){
    $nameuser = $_SESSION['usuario']->get_usu_nombre();  
    $roluser = $_SESSION['usuario']->get_rol_id();
    $date='';
    setlocale(LC_ALL,"es_ES@euro","es_ES","esp","es");
    $date=strftime("%A %d de %B del %Y");
    
    $exp = new Export();
    $countrecords=$exp->ContarRegistros()[0];
    $auxconteo=0;
    $auxguardar=1;
    if($countrecords <= 65530){
        $clientes=$exp->ListarClientes();
        $count= $exp->ContarRegistros()[0];
        $aux=2;
        require_once '../../lib/excelphp/Classes/PHPExcel.php';
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->
                getProperties()
                        ->setCreator("Soluciones en Cartera")
                        ->setLastModifiedBy("Soluciones en Cartera")
                        ->setTitle("Soluciones en Cartera")
                        ->setSubject("Soluciones en Cartera Copia")
                        ->setDescription("Copia Soluciones en Cartera Soft")
                        ->setCategory("reportes");

        $objActSheet = $objPHPExcel->getActiveSheet(); 
        $objActSheet->getColumnDimension('A')->setAutoSize(true);
        $objActSheet->getColumnDimension('B')->setAutoSize(true);
        $objActSheet->getColumnDimension('C')->setAutoSize(true);
        $objActSheet->getColumnDimension('D')->setAutoSize(true);
        $objActSheet->getColumnDimension('E')->setAutoSize(true);
        $objActSheet->getColumnDimension('F')->setAutoSize(true);
        $objActSheet->getColumnDimension('G')->setAutoSize(true);
        $objActSheet->getColumnDimension('H')->setAutoSize(true);
        $objActSheet->getColumnDimension('I')->setAutoSize(true);
        $objActSheet->getColumnDimension('J')->setAutoSize(true);
        $objActSheet->getColumnDimension('K')->setAutoSize(true);
        $objActSheet->getColumnDimension('L')->setAutoSize(true);
        $objActSheet->getColumnDimension('M')->setAutoSize(true);
        $objActSheet->getColumnDimension('N')->setAutoSize(true);
        $objActSheet->getColumnDimension('O')->setAutoSize(true);
        $objActSheet->getColumnDimension('P')->setAutoSize(true);
        $objActSheet->getColumnDimension('Q')->setAutoSize(true);
        $objActSheet->getColumnDimension('R')->setAutoSize(true);
        $objActSheet->getColumnDimension('S')->setAutoSize(true);
        $objActSheet->getColumnDimension('T')->setAutoSize(true);
        $objActSheet->getColumnDimension('U')->setAutoSize(true);
        $objActSheet->getColumnDimension('V')->setAutoSize(true);
        $objActSheet->getColumnDimension('W')->setAutoSize(true);
        $objActSheet->getColumnDimension('X')->setAutoSize(true);
        $objActSheet->getColumnDimension('Y')->setAutoSize(true);
        $objActSheet->getColumnDimension('Z')->setAutoSize(true);
        $objActSheet->getColumnDimension('AA')->setAutoSize(true);

        $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A1', 'NIT O CEDULA')
                    ->setCellValue('B1', 'NOMBRE')
                    ->setCellValue('C1', 'CIUDAD')
                    ->setCellValue('D1', 'DIRECCION 1')
                    ->setCellValue('E1', 'DIRECCION 2')
                    ->setCellValue('F1', 'CORREO 1')
                    ->setCellValue('G1', 'CORREO 2')
                    ->setCellValue('H1', 'TELEFONO 1')
                    ->setCellValue('I1', 'TELEFONO 2')
                    ->setCellValue('J1', 'TELEFONO 3')
                    ->setCellValue('K1', 'TELEFONO 4')
                    ->setCellValue('L1', 'TELEFONO 5')
                    ->setCellValue('M1', 'TELEFONO 6')
                    ->setCellValue('N1', 'TELEFONO 7')
                    ->setCellValue('O1', 'TELEFONO 8')
                    ->setCellValue('P1', 'TELEFONO 9')
                    ->setCellValue('Q1', 'TELEFONO 10')
                    ->setCellValue('R1', 'CELULAR 1')
                    ->setCellValue('S1', 'CELULAR 2')
                    ->setCellValue('T1', 'CELULAR 3')
                    ->setCellValue('U1', 'CELULAR 4')
                    ->setCellValue('V1', 'CELULAR 5')
                    ->setCellValue('W1', 'CELULAR 6')
                    ->setCellValue('X1', 'CELULAR 7')
                    ->setCellValue('Y1', 'CELULAR 8')
                    ->setCellValue('Z1', 'CELULAR 9')
                    ->setCellValue('AA1', 'CELULAR 10');

        $styleArray = array(
        'font'  => array(
            'bold'  => true,
            'color' => array('rgb' => 'FF0000')
        ));
        foreach ($clientes as $key => $value) {
            $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValueExplicit('A'.$aux, $value['nit'], PHPExcel_Cell_DataType::TYPE_STRING)
                    ->setCellValueExplicit('B'.$aux, $value['nombre'], PHPExcel_Cell_DataType::TYPE_STRING)
                    ->setCellValueExplicit('C'.$aux, $value['ciudad'], PHPExcel_Cell_DataType::TYPE_STRING)
                    ->setCellValueExplicit('D'.$aux, $value['dir1'], PHPExcel_Cell_DataType::TYPE_STRING)
                    ->setCellValueExplicit('E'.$aux, $value['dir2'], PHPExcel_Cell_DataType::TYPE_STRING)
                    ->setCellValueExplicit('F'.$aux, $value['mail1'], PHPExcel_Cell_DataType::TYPE_STRING)
                    ->setCellValueExplicit('G'.$aux, $value['mail2'], PHPExcel_Cell_DataType::TYPE_STRING)
                    ->setCellValueExplicit('H'.$aux, $value['tel1'], PHPExcel_Cell_DataType::TYPE_STRING)
                    ->setCellValueExplicit('I'.$aux, $value['tel2'], PHPExcel_Cell_DataType::TYPE_STRING)
                    ->setCellValueExplicit('J'.$aux, $value['tel3'], PHPExcel_Cell_DataType::TYPE_STRING)
                    ->setCellValueExplicit('K'.$aux, $value['tel4'], PHPExcel_Cell_DataType::TYPE_STRING)
                    ->setCellValueExplicit('L'.$aux, $value['tel5'], PHPExcel_Cell_DataType::TYPE_STRING)
                    ->setCellValueExplicit('M'.$aux, $value['tel6'], PHPExcel_Cell_DataType::TYPE_STRING)
                    ->setCellValueExplicit('N'.$aux, $value['tel7'], PHPExcel_Cell_DataType::TYPE_STRING)
                    ->setCellValueExplicit('O'.$aux, $value['tel8'], PHPExcel_Cell_DataType::TYPE_STRING)
                    ->setCellValueExplicit('P'.$aux, $value['tel9'], PHPExcel_Cell_DataType::TYPE_STRING)
                    ->setCellValueExplicit('Q'.$aux, $value['tel10'], PHPExcel_Cell_DataType::TYPE_STRING)
                    ->setCellValueExplicit('R'.$aux, $value['cel1'], PHPExcel_Cell_DataType::TYPE_STRING)
                    ->setCellValueExplicit('S'.$aux, $value['cel2'], PHPExcel_Cell_DataType::TYPE_STRING)
                    ->setCellValueExplicit('T'.$aux, $value['cel3'], PHPExcel_Cell_DataType::TYPE_STRING)
                    ->setCellValueExplicit('U'.$aux, $value['cel4'], PHPExcel_Cell_DataType::TYPE_STRING)
                    ->setCellValueExplicit('V'.$aux, $value['cel5'], PHPExcel_Cell_DataType::TYPE_STRING)
                    ->setCellValueExplicit('W'.$aux, $value['cel6'], PHPExcel_Cell_DataType::TYPE_STRING)
                    ->setCellValueExplicit('X'.$aux, $value['cel7'], PHPExcel_Cell_DataType::TYPE_STRING)
                    ->setCellValueExplicit('Y'.$aux, $value['cel8'], PHPExcel_Cell_DataType::TYPE_STRING)
                    ->setCellValueExplicit('Z'.$aux, $value['cel9'], PHPExcel_Cell_DataType::TYPE_STRING)
                    ->setCellValueExplicit('AA'.$aux, $value['cel10'], PHPExcel_Cell_DataType::TYPE_STRING);

            if($value['tel1_status'] == 2){
                $objPHPExcel->getActiveSheet()->getStyle('H'.$aux)->applyFromArray($styleArray);
            }
            if($value['tel2_status'] == 2){
                $objPHPExcel->getActiveSheet()->getStyle('I'.$aux)->applyFromArray($styleArray);
            }
            if($value['tel3_status'] == 2){
                $objPHPExcel->getActiveSheet()->getStyle('J'.$aux)->applyFromArray($styleArray);
            }
            if($value['tel4_status'] == 2){
                $objPHPExcel->getActiveSheet()->getStyle('K'.$aux)->applyFromArray($styleArray);
            }
            if($value['tel5_status'] == 2){
                $objPHPExcel->getActiveSheet()->getStyle('L'.$aux)->applyFromArray($styleArray);
            }
            if($value['tel6_status'] == 2){
                $objPHPExcel->getActiveSheet()->getStyle('M'.$aux)->applyFromArray($styleArray);
            }
            if($value['tel7_status'] == 2){
                $objPHPExcel->getActiveSheet()->getStyle('N'.$aux)->applyFromArray($styleArray);
            }
            if($value['tel8_status'] == 2){
                $objPHPExcel->getActiveSheet()->getStyle('O'.$aux)->applyFromArray($styleArray);
            }
            if($value['tel9_status'] == 2){
                $objPHPExcel->getActiveSheet()->getStyle('P'.$aux)->applyFromArray($styleArray);
            }
            if($value['tel10_status'] == 2){
                $objPHPExcel->getActiveSheet()->getStyle('Q'.$aux)->applyFromArray($styleArray);
            }
            if($value['cel1_status'] == 2){
                $objPHPExcel->getActiveSheet()->getStyle('E'.$aux)->applyFromArray($styleArray);
            }
            if($value['cel2_status'] == 2){
                $objPHPExcel->getActiveSheet()->getStyle('S'.$aux)->applyFromArray($styleArray);
            }
            if($value['cel3_status'] == 2){
                $objPHPExcel->getActiveSheet()->getStyle('T'.$aux)->applyFromArray($styleArray);
            }
            if($value['cel4_status'] == 2){
                $objPHPExcel->getActiveSheet()->getStyle('U'.$aux)->applyFromArray($styleArray);
            }
            if($value['cel5_status'] == 2){
                $objPHPExcel->getActiveSheet()->getStyle('V'.$aux)->applyFromArray($styleArray);
            }
            if($value['cel6_status'] == 2){
                $objPHPExcel->getActiveSheet()->getStyle('W'.$aux)->applyFromArray($styleArray);
            }
            if($value['cel7_status'] == 2){
                $objPHPExcel->getActiveSheet()->getStyle('X'.$aux)->applyFromArray($styleArray);
            }
            if($value['cel8_status'] == 2){
                $objPHPExcel->getActiveSheet()->getStyle('Y'.$aux)->applyFromArray($styleArray);
            }
            if($value['cel9_status'] == 2){
                $objPHPExcel->getActiveSheet()->getStyle('Z'.$aux)->applyFromArray($styleArray);
            }
            if($value['cel10_status'] == 2){
                $objPHPExcel->getActiveSheet()->getStyle('AA'.$aux)->applyFromArray($styleArray);
            }
            $aux++;
        }
        $objPHPExcel->getActiveSheet()->setTitle('Clientes');
        $objPHPExcel->setActiveSheetIndex(0);
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="solucion es encarterasoft copia.xls"');
        header('Cache-Control: max-age=0');

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');

        //include '../../view/backup/backup.php';
        if($objWriter->save('php://output')){
            echo "<script languaje='javascript'>alert('La copia de seguridad se ha realizado con exito!'); window.location = ('../../controller/start/admin.php');</script>";
        }
        exit;
    }else{
        $qty=round($countrecords, 0, PHP_ROUND_HALF_UP);
        for ($index = 0; $index < $qty; $index++) {
            $clientes=$exp->ListarClientesCantidades($auxconteo);
            $count= $exp->ContarRegistros()[0];
            $aux=2;
            require_once '../../lib/excelphp/Classes/PHPExcel.php';
            $objPHPExcel = new PHPExcel();
            $objPHPExcel->
                    getProperties()
                            ->setCreator("Soluciones en Cartera")
                            ->setLastModifiedBy("Soluciones en Cartera")
                            ->setTitle("Soluciones en Cartera")
                            ->setSubject("Soluciones en Cartera Copia")
                            ->setDescription("Copia Soluciones en Cartera Soft")
                            ->setCategory("reportes");

            $objActSheet = $objPHPExcel->getActiveSheet(); 
            $objActSheet->getColumnDimension('A')->setAutoSize(true);
            $objActSheet->getColumnDimension('B')->setAutoSize(true);
            $objActSheet->getColumnDimension('C')->setAutoSize(true);
            $objActSheet->getColumnDimension('D')->setAutoSize(true);
            $objActSheet->getColumnDimension('E')->setAutoSize(true);
            $objActSheet->getColumnDimension('F')->setAutoSize(true);
            $objActSheet->getColumnDimension('G')->setAutoSize(true);
            $objActSheet->getColumnDimension('H')->setAutoSize(true);
            $objActSheet->getColumnDimension('I')->setAutoSize(true);
            $objActSheet->getColumnDimension('J')->setAutoSize(true);
            $objActSheet->getColumnDimension('K')->setAutoSize(true);
            $objActSheet->getColumnDimension('L')->setAutoSize(true);
            $objActSheet->getColumnDimension('M')->setAutoSize(true);
            $objActSheet->getColumnDimension('N')->setAutoSize(true);
            $objActSheet->getColumnDimension('O')->setAutoSize(true);
            $objActSheet->getColumnDimension('P')->setAutoSize(true);
            $objActSheet->getColumnDimension('Q')->setAutoSize(true);
            $objActSheet->getColumnDimension('R')->setAutoSize(true);
            $objActSheet->getColumnDimension('S')->setAutoSize(true);
            $objActSheet->getColumnDimension('T')->setAutoSize(true);
            $objActSheet->getColumnDimension('U')->setAutoSize(true);
            $objActSheet->getColumnDimension('V')->setAutoSize(true);
            $objActSheet->getColumnDimension('W')->setAutoSize(true);
            $objActSheet->getColumnDimension('X')->setAutoSize(true);
            $objActSheet->getColumnDimension('Y')->setAutoSize(true);
            $objActSheet->getColumnDimension('Z')->setAutoSize(true);
            $objActSheet->getColumnDimension('AA')->setAutoSize(true);

            $objPHPExcel->setActiveSheetIndex(0)
                        ->setCellValue('A1', 'NIT O CEDULA')
                        ->setCellValue('B1', 'NOMBRE')
                        ->setCellValue('C1', 'CIUDAD')
                        ->setCellValue('D1', 'DIRECCION 1')
                        ->setCellValue('E1', 'DIRECCION 2')
                        ->setCellValue('F1', 'CORREO 1')
                        ->setCellValue('G1', 'CORREO 2')
                        ->setCellValue('H1', 'TELEFONO 1')
                        ->setCellValue('I1', 'TELEFONO 2')
                        ->setCellValue('J1', 'TELEFONO 3')
                        ->setCellValue('K1', 'TELEFONO 4')
                        ->setCellValue('L1', 'TELEFONO 5')
                        ->setCellValue('M1', 'TELEFONO 6')
                        ->setCellValue('N1', 'TELEFONO 7')
                        ->setCellValue('O1', 'TELEFONO 8')
                        ->setCellValue('P1', 'TELEFONO 9')
                        ->setCellValue('Q1', 'TELEFONO 10')
                        ->setCellValue('R1', 'CELULAR 1')
                        ->setCellValue('S1', 'CELULAR 2')
                        ->setCellValue('T1', 'CELULAR 3')
                        ->setCellValue('U1', 'CELULAR 4')
                        ->setCellValue('V1', 'CELULAR 5')
                        ->setCellValue('W1', 'CELULAR 6')
                        ->setCellValue('X1', 'CELULAR 7')
                        ->setCellValue('Y1', 'CELULAR 8')
                        ->setCellValue('Z1', 'CELULAR 9')
                        ->setCellValue('AA1', 'CELULAR 10');

            $styleArray = array(
            'font'  => array(
                'bold'  => true,
                'color' => array('rgb' => 'FF0000')
            ));
            foreach ($clientes as $key => $value) {
                $objPHPExcel->setActiveSheetIndex(0)
                        ->setCellValueExplicit('A'.$aux, $value['nit'], PHPExcel_Cell_DataType::TYPE_STRING)
                        ->setCellValueExplicit('B'.$aux, $value['nombre'], PHPExcel_Cell_DataType::TYPE_STRING)
                        ->setCellValueExplicit('C'.$aux, $value['ciudad'], PHPExcel_Cell_DataType::TYPE_STRING)
                        ->setCellValueExplicit('D'.$aux, $value['dir1'], PHPExcel_Cell_DataType::TYPE_STRING)
                        ->setCellValueExplicit('E'.$aux, $value['dir2'], PHPExcel_Cell_DataType::TYPE_STRING)
                        ->setCellValueExplicit('F'.$aux, $value['mail1'], PHPExcel_Cell_DataType::TYPE_STRING)
                        ->setCellValueExplicit('G'.$aux, $value['mail2'], PHPExcel_Cell_DataType::TYPE_STRING)
                        ->setCellValueExplicit('H'.$aux, $value['tel1'], PHPExcel_Cell_DataType::TYPE_STRING)
                        ->setCellValueExplicit('I'.$aux, $value['tel2'], PHPExcel_Cell_DataType::TYPE_STRING)
                        ->setCellValueExplicit('J'.$aux, $value['tel3'], PHPExcel_Cell_DataType::TYPE_STRING)
                        ->setCellValueExplicit('K'.$aux, $value['tel4'], PHPExcel_Cell_DataType::TYPE_STRING)
                        ->setCellValueExplicit('L'.$aux, $value['tel5'], PHPExcel_Cell_DataType::TYPE_STRING)
                        ->setCellValueExplicit('M'.$aux, $value['tel6'], PHPExcel_Cell_DataType::TYPE_STRING)
                        ->setCellValueExplicit('N'.$aux, $value['tel7'], PHPExcel_Cell_DataType::TYPE_STRING)
                        ->setCellValueExplicit('O'.$aux, $value['tel8'], PHPExcel_Cell_DataType::TYPE_STRING)
                        ->setCellValueExplicit('P'.$aux, $value['tel9'], PHPExcel_Cell_DataType::TYPE_STRING)
                        ->setCellValueExplicit('Q'.$aux, $value['tel10'], PHPExcel_Cell_DataType::TYPE_STRING)
                        ->setCellValueExplicit('R'.$aux, $value['cel1'], PHPExcel_Cell_DataType::TYPE_STRING)
                        ->setCellValueExplicit('S'.$aux, $value['cel2'], PHPExcel_Cell_DataType::TYPE_STRING)
                        ->setCellValueExplicit('T'.$aux, $value['cel3'], PHPExcel_Cell_DataType::TYPE_STRING)
                        ->setCellValueExplicit('U'.$aux, $value['cel4'], PHPExcel_Cell_DataType::TYPE_STRING)
                        ->setCellValueExplicit('V'.$aux, $value['cel5'], PHPExcel_Cell_DataType::TYPE_STRING)
                        ->setCellValueExplicit('W'.$aux, $value['cel6'], PHPExcel_Cell_DataType::TYPE_STRING)
                        ->setCellValueExplicit('X'.$aux, $value['cel7'], PHPExcel_Cell_DataType::TYPE_STRING)
                        ->setCellValueExplicit('Y'.$aux, $value['cel8'], PHPExcel_Cell_DataType::TYPE_STRING)
                        ->setCellValueExplicit('Z'.$aux, $value['cel9'], PHPExcel_Cell_DataType::TYPE_STRING)
                        ->setCellValueExplicit('AA'.$aux, $value['cel10'], PHPExcel_Cell_DataType::TYPE_STRING);

                if($value['tel1_status'] == 2){
                    $objPHPExcel->getActiveSheet()->getStyle('H'.$aux)->applyFromArray($styleArray);
                }
                if($value['tel2_status'] == 2){
                    $objPHPExcel->getActiveSheet()->getStyle('I'.$aux)->applyFromArray($styleArray);
                }
                if($value['tel3_status'] == 2){
                    $objPHPExcel->getActiveSheet()->getStyle('J'.$aux)->applyFromArray($styleArray);
                }
                if($value['tel4_status'] == 2){
                    $objPHPExcel->getActiveSheet()->getStyle('K'.$aux)->applyFromArray($styleArray);
                }
                if($value['tel5_status'] == 2){
                    $objPHPExcel->getActiveSheet()->getStyle('L'.$aux)->applyFromArray($styleArray);
                }
                if($value['tel6_status'] == 2){
                    $objPHPExcel->getActiveSheet()->getStyle('M'.$aux)->applyFromArray($styleArray);
                }
                if($value['tel7_status'] == 2){
                    $objPHPExcel->getActiveSheet()->getStyle('N'.$aux)->applyFromArray($styleArray);
                }
                if($value['tel8_status'] == 2){
                    $objPHPExcel->getActiveSheet()->getStyle('O'.$aux)->applyFromArray($styleArray);
                }
                if($value['tel9_status'] == 2){
                    $objPHPExcel->getActiveSheet()->getStyle('P'.$aux)->applyFromArray($styleArray);
                }
                if($value['tel10_status'] == 2){
                    $objPHPExcel->getActiveSheet()->getStyle('Q'.$aux)->applyFromArray($styleArray);
                }
                if($value['cel1_status'] == 2){
                    $objPHPExcel->getActiveSheet()->getStyle('E'.$aux)->applyFromArray($styleArray);
                }
                if($value['cel2_status'] == 2){
                    $objPHPExcel->getActiveSheet()->getStyle('S'.$aux)->applyFromArray($styleArray);
                }
                if($value['cel3_status'] == 2){
                    $objPHPExcel->getActiveSheet()->getStyle('T'.$aux)->applyFromArray($styleArray);
                }
                if($value['cel4_status'] == 2){
                    $objPHPExcel->getActiveSheet()->getStyle('U'.$aux)->applyFromArray($styleArray);
                }
                if($value['cel5_status'] == 2){
                    $objPHPExcel->getActiveSheet()->getStyle('V'.$aux)->applyFromArray($styleArray);
                }
                if($value['cel6_status'] == 2){
                    $objPHPExcel->getActiveSheet()->getStyle('W'.$aux)->applyFromArray($styleArray);
                }
                if($value['cel7_status'] == 2){
                    $objPHPExcel->getActiveSheet()->getStyle('X'.$aux)->applyFromArray($styleArray);
                }
                if($value['cel8_status'] == 2){
                    $objPHPExcel->getActiveSheet()->getStyle('Y'.$aux)->applyFromArray($styleArray);
                }
                if($value['cel9_status'] == 2){
                    $objPHPExcel->getActiveSheet()->getStyle('Z'.$aux)->applyFromArray($styleArray);
                }
                if($value['cel10_status'] == 2){
                    $objPHPExcel->getActiveSheet()->getStyle('AA'.$aux)->applyFromArray($styleArray);
                }
                $aux++;
            }
            $objPHPExcel->getActiveSheet()->setTitle('Clientes');
            $objPHPExcel->setActiveSheetIndex(0);
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="solucion es encarterasoft copia '.$auxguardar.'.xls"');
            header('Cache-Control: max-age=0');

            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');

            //include '../../view/backup/backup.php';
            if($objWriter->save('php://output')){
                echo "<script languaje='javascript'>alert('La copia de seguridad se ha realizado con exito!'); window.location = ('../../controller/start/admin.php');</script>";
            }
            $auxguardar++;
            $auxconteo+=65530;
            exit;
        }
    }
}  else {
   echo "<script languaje='javascript'>alert('[ERROR!] Usted no posee permisos suficientes para ingresar a esta página.'); window.location = ('../../controller/start/login.php');</script>";
}
