<?php

/**
 *  导出数据excel
 *  info 为数据
 */
function exportUserExcel($info) {
    $filename = '';

    Vendor ( 'PHPExcel.Classes.PHPExcel' );
    Vendor ( 'PHPExcel.Classes.PHPExcel.IOFactory' );
    Vendor ( 'PHPExcel.Classes.PHPExcel.Reader.Excel5' );

    $objPHPExcel = new PHPExcel ();
    $objPHPExcel->getProperties ()->setCreator ( "ctos" )->setLastModifiedBy ( "ctos" )->setTitle ( "Office 2007 XLSX Test Document" )->setSubject ( "Office 2007 XLSX Test Document" )->setDescription ( "Test document for Office 2007 XLSX, generated using PHP classes." )->setKeywords ( "office 2007 openxml php" )->setCategory ( "Test result file" );

    // set width
    $objPHPExcel->getActiveSheet ()->getColumnDimension ( 'A' )->setWidth ( 20 );
    $objPHPExcel->getActiveSheet ()->getColumnDimension ( 'B' )->setWidth ( 20 );
    $objPHPExcel->getActiveSheet ()->getColumnDimension ( 'C' )->setWidth ( 20 );
    $objPHPExcel->getActiveSheet ()->getColumnDimension ( 'D' )->setWidth ( 20 );
    $objPHPExcel->getActiveSheet ()->getColumnDimension ( 'E' )->setWidth ( 30 );
    $objPHPExcel->getActiveSheet ()->getColumnDimension ( 'F' )->setWidth ( 20 );
    $objPHPExcel->getActiveSheet ()->getColumnDimension ( 'J' )->setWidth ( 20 );
    $objPHPExcel->getActiveSheet ()->getColumnDimension ( 'K' )->setWidth ( 20 );
    $objPHPExcel->getActiveSheet ()->getColumnDimension ( 'H' )->setWidth ( 20 );

    // 设置行高度
    $objPHPExcel->getActiveSheet ()->getRowDimension ( '1' )->setRowHeight ( 29 );

    // $objPHPExcel->getActiveSheet()->getRowDimension('2')->setRowHeight(29);

    // set font size bold
    $objPHPExcel->getActiveSheet ()->getDefaultStyle ()->getFont ()->setSize ( 13 );
    $objPHPExcel->getActiveSheet ()->getStyle ( 'A1:L1' )->getFont ()->setBold ( true );

    $objPHPExcel->getActiveSheet ()->getStyle ( 'A1:L1' )->getAlignment ()->setVertical ( PHPExcel_Style_Alignment::VERTICAL_CENTER );
    $objPHPExcel->getActiveSheet ()->getStyle ( 'A1:L1' )->getBorders ()->getAllBorders ()->setBorderStyle ( PHPExcel_Style_Border::BORDER_THIN );

    // 设置水平居中
    $objPHPExcel->getActiveSheet ()->getStyle ( 'A1' )->getAlignment ()->setHorizontal ( PHPExcel_Style_Alignment::HORIZONTAL_LEFT );
    $objPHPExcel->getActiveSheet ()->getStyle ( 'A' )->getAlignment ()->setHorizontal ( PHPExcel_Style_Alignment::HORIZONTAL_CENTER );
    $objPHPExcel->getActiveSheet ()->getStyle ( 'B' )->getAlignment ()->setHorizontal ( PHPExcel_Style_Alignment::HORIZONTAL_CENTER );
    $objPHPExcel->getActiveSheet ()->getStyle ( 'C' )->getAlignment ()->setHorizontal ( PHPExcel_Style_Alignment::HORIZONTAL_CENTER );
    $objPHPExcel->getActiveSheet ()->getStyle ( 'D' )->getAlignment ()->setHorizontal ( PHPExcel_Style_Alignment::HORIZONTAL_CENTER );

    $objPHPExcel->setActiveSheetIndex ( 0 )->setCellValue ( 'A1', '编号' )->setCellValue ( 'B1', '职位' )->setCellValue ( 'C1', '姓名' )->setCellValue ( 'D1', '性别' )->setCellValue ( 'E1', '用户等级' )->setCellValue ( 'F1', '所属单位' )->setCellValue ( 'G1', '所属机构' )->setCellValue ( 'H1', '第一次考试成绩' )->setCellValue ( 'I1', '第二次考试成绩' )->setCellValue ( 'J1', '第三次考试成绩' );


    for($i = 0; $i < count ( $info ); $i ++) {
         

        $objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('A'.($i+2),$info[$i]['id'])
        ->setCellValue('B'.($i+2),$info[$i]['position'])
        ->setCellValue('C'.($i+2),$info[$i]['username'])
        ->setCellValue('D'.($i+2),$info[$i]['sex'])
        ->setCellValue('E'.($i+2),$info[$i]['level'])
        ->setCellValue('F'.($i+2),$info[$i]['bank_name'])
        ->setCellValue('G'.($i+2),$info[$i]['me_name'])
        ->setCellValue('H'.($i+2),'')
        ->setCellValue('I'.($i+2),'')
        ->setCellValue('J'.($i+2),'');
    }

    $objPHPExcel->setActiveSheetIndex ( 0 );

    ob_end_clean (); // 清除缓冲区,避免乱码
    // Redirect output to a client’s web browser (Excel5)
    header ( 'Content-Type: application/vnd.ms-excel' );
    $filenames = $filename . '(' . date ( 'Ymd-His' ) . ').xls';
    header ( "Content-Disposition: attachment;filename={$filenames}" );
    header ( 'Cache-Control: max-age=0' );

    $objWriter = PHPExcel_IOFactory::createWriter ( $objPHPExcel, 'Excel5' );
    $objWriter->save ( 'php://output' );
}

	
	

	 /**
	  *  导出数据excel
	  *  info 为数据
	  */
	 function exportStationExcel($info) {
	     $filename = '';
	 
	     Vendor ( 'PHPExcel.Classes.PHPExcel' );
	     Vendor ( 'PHPExcel.Classes.PHPExcel.IOFactory' );
	     Vendor ( 'PHPExcel.Classes.PHPExcel.Reader.Excel5' );
	 
	     $objPHPExcel = new PHPExcel ();    
	     $objPHPExcel->getProperties ()->setCreator ( "ctos" )->setLastModifiedBy ( "ctos" )->setTitle ( "Office 2007 XLSX Test Document" )->setSubject ( "Office 2007 XLSX Test Document" )->setDescription ( "Test document for Office 2007 XLSX, generated using PHP classes." )->setKeywords ( "office 2007 openxml php" )->setCategory ( "Test result file" );
	 
	     
	     // set width
	     $objPHPExcel->getActiveSheet ()->getColumnDimension ( 'A' )->setWidth ( 50 );
	     $objPHPExcel->getActiveSheet ()->getColumnDimension ( 'B' )->setWidth ( 20 );
	     $objPHPExcel->getActiveSheet ()->getColumnDimension ( 'C' )->setWidth ( 20 );
	     $objPHPExcel->getActiveSheet ()->getColumnDimension ( 'D' )->setWidth ( 20 );
	     $objPHPExcel->getActiveSheet ()->getColumnDimension ( 'E' )->setWidth ( 30 );
	     $objPHPExcel->getActiveSheet ()->getColumnDimension ( 'F' )->setWidth ( 20 );
	     $objPHPExcel->getActiveSheet ()->getColumnDimension ( 'J' )->setWidth ( 20 );
	     $objPHPExcel->getActiveSheet ()->getColumnDimension ( 'K' )->setWidth ( 20 );
	     $objPHPExcel->getActiveSheet ()->getColumnDimension ( 'H' )->setWidth ( 20 );
	     $objPHPExcel->getActiveSheet ()->getColumnDimension ( 'k' )->setWidth ( 20 );
	     // 设置行高度
	     $objPHPExcel->getActiveSheet ()->getRowDimension ( '1' )->setRowHeight ( 29 );
	 
	     // $objPHPExcel->getActiveSheet()->getRowDimension('2')->setRowHeight(29);
	 
	     // set font size bold
	     $objPHPExcel->getActiveSheet ()->getDefaultStyle ()->getFont ()->setSize ( 13 );
	     $objPHPExcel->getActiveSheet ()->getStyle ( 'A1:L1' )->getFont ()->setBold ( true );
	 
	     $objPHPExcel->getActiveSheet ()->getStyle ( 'A1:L1' )->getAlignment ()->setVertical ( PHPExcel_Style_Alignment::VERTICAL_CENTER );
	     $objPHPExcel->getActiveSheet ()->getStyle ( 'A1:L1' )->getBorders ()->getAllBorders ()->setBorderStyle ( PHPExcel_Style_Border::BORDER_THIN );
	 
	     // 设置水平居中
	     $objPHPExcel->getActiveSheet ()->getStyle ( 'A1' )->getAlignment ()->setHorizontal ( PHPExcel_Style_Alignment::HORIZONTAL_LEFT );
	     $objPHPExcel->getActiveSheet ()->getStyle ( 'A' )->getAlignment ()->setHorizontal ( PHPExcel_Style_Alignment::HORIZONTAL_CENTER );
	     $objPHPExcel->getActiveSheet ()->getStyle ( 'B' )->getAlignment ()->setHorizontal ( PHPExcel_Style_Alignment::HORIZONTAL_CENTER );
	     $objPHPExcel->getActiveSheet ()->getStyle ( 'C' )->getAlignment ()->setHorizontal ( PHPExcel_Style_Alignment::HORIZONTAL_CENTER );
	     $objPHPExcel->getActiveSheet ()->getStyle ( 'D' )->getAlignment ()->setHorizontal ( PHPExcel_Style_Alignment::HORIZONTAL_CENTER );
	 
	     $objPHPExcel->setActiveSheetIndex ( 0 )->setCellValue ( 'A1', '项目名称' )->setCellValue ( 'B1', '金额' )->setCellValue ( 'C1', '成功率' )->setCellValue ( 'D1', '成功率后金额' )->setCellValue ( 'E1', '款源' )->setCellValue ( 'F1', '预计确认时间' )->setCellValue ( 'G1', '计划回款时间' )->setCellValue ( 'H1', '跟踪负责人' )->setCellValue ( 'I1', '建设单位' )->
	 
	     setCellValue ( 'J1', '创建时间' )->setCellValue ( 'k1', '创建人' )->setCellValue ( 'L1', '隶属公司' );
	 
	      		for($i = 0; $i < count ( $info ); $i ++) {
	     	         /*
	      			$str = "";
	     	
	      			if ($info [$i] ['u_level'] == '00') {
	      				$str = "普通用户";
	      			} else if ($info [$i] ['u_level'] == '03') {
	      				$str = "三级用户";
	      			}else if ($info [$i] ['u_level'] == '02') {
	      			    $str = "二级用户";
	      			}else if ($info [$i] ['u_level'] == '02') {
	      			    $str = "一级用户";
	      			}else {
	      				$str = '特技用户';
	      			}
	     	         */
	      			$objPHPExcel->setActiveSheetIndex(0)
        			->setCellValue('A'.($i+2),$info[$i]['p_name'])
        			->setCellValue('B'.($i+2),$info[$i]['f_money'])
        			->setCellValue('C'.($i+2),$info[$i]['c_success'])
        			->setCellValue('D'.($i+2),$info[$i]['s_success_money'])
        			->setCellValue('E'.($i+2),$info[$i]['c_source'])
        			->setCellValue('F'.($i+2),$info[$i]['c_ok_time'])
        			->setCellValue('G'.($i+2),$info[$i]['c_rm_time'])
        			->setCellValue('H'.($i+2),$info[$i]['name'])
        			->setCellValue('I'.($i+2),$info[$i]['str_c_name'])
	      			->setCellValue('J'.($i+2),$info[$i]['c_time'])
	      			->setCellValue('K'.($i+2),$info[$i]['user_name'])
	      			->setCellValue('L'.($i+2),$info[$i]['c_name']);
	      		}
	 
	     $objPHPExcel->setActiveSheetIndex ( 0 );
	 
	     ob_end_clean (); // 清除缓冲区,避免乱码
	     // Redirect output to a client’s web browser (Excel5)
	     header ( 'Content-Type: application/vnd.ms-excel' );
	     $filenames = $filename . '(' . date ( 'Ymd-His' ) . ').xls';
	     header ( "Content-Disposition: attachment;filename={$filenames}" );
	     header ( 'Cache-Control: max-age=0' );
	 
	     $objWriter = PHPExcel_IOFactory::createWriter ( $objPHPExcel, 'Excel5' );
	     $objWriter->save ( 'php://output' );
	 }
	 
	 /**
	  * 按站导出保修记录Excel
	  *
	  * @param unknown $dataInfo
	  */
/*	 
	 function read($filename, $encode = 'utf-8') {
	     Vendor ( 'PHPExcel.Classes.PHPExcel' );
	 
	     $objPHPExcel = PHPExcel_IOFactory::load ( $filename );
	 
	     $sheet = $objPHPExcel->getSheet ( 0 );
	     $highestRow = $sheet->getHighestRow (); // 取得总行数
	     $highestColumn = $sheet->getHighestColumn ();
	 
	     $data [] = array ();
	 
	     for($i = 2; $i <= $highestRow; $i ++) {
	         	
	         $data [$i - 2] ['tra_number'] = $objPHPExcel->getActiveSheet ()->getCell ( "A" . $i )->getValue ();
	         	
	         $data [$i - 2] ['u_name'] = $objPHPExcel->getActiveSheet ()->getCell ( "B" . $i )->getValue ();
	         	
	         $data [$i - 2] ['tra_name'] = $objPHPExcel->getActiveSheet ()->getCell ( "C" . $i )->getValue ();
	         	
	         $data [$i - 2] ['u_tel'] = $objPHPExcel->getActiveSheet ()->getCell ( "D" . $i )->getValue ();
	         	
	         $data [$i - 2] ['m_name'] = $objPHPExcel->getActiveSheet ()->getCell ( "E" . $i )->getValue ();
	         	
	         $data [$i - 2] ['j_name'] = $objPHPExcel->getActiveSheet ()->getCell ( "F" . $i )->getValue ();
	         	
	         $data [$i - 2] ['c_time'] = $objPHPExcel->getActiveSheet ()->getCell ( "G" . $i )->getValue ();
	         	
	         $data [$i - 2] ['u_recom'] = $objPHPExcel->getActiveSheet ()->getCell ( "H" . $i )->getValue ();
	         	
	         $data [$i - 2] ['n_status'] = $objPHPExcel->getActiveSheet ()->getCell ( "I" . $i )->getValue ();
	     }
	 
	     return $data;
	 }
*/	
	 /**
	  * 读取Excel数据
	  * 项目信息
	  * @param unknown $dataInfo
	  */
	 function read($filename, $encode = 'utf-8') {
	     Vendor ( 'PHPExcel.Classes.PHPExcel' );
	 
	     $objPHPExcel = PHPExcel_IOFactory::load ( $filename );
	 
	     $sheet = $objPHPExcel->getSheet ( 0 );
	     $highestRow = $sheet->getHighestRow (); // 取得总行数
	     $highestColumn = $sheet->getHighestColumn ();
	 
	     $data [] = array ();
	 
	     for($i = 2; $i <= $highestRow; $i ++) {
	          
	         $data [$i - 2] ['Jobname'] = (string)$objPHPExcel->getActiveSheet ()->getCell ( "A" . $i )->getValue ();
	          
	         $data [$i - 2] ['Camount'] = $objPHPExcel->getActiveSheet ()->getCell ( "B" . $i )->getValue ();
	          
	         $data [$i - 2] ['Pamount'] = $objPHPExcel->getActiveSheet ()->getCell ( "C" . $i )->getValue ();
	 
	     }
	 
	     return $data;
	 }
	 
	 
	 
	 /**
	  * 读取Excel数据
	  * 项目信息(项目所有基本信息)
	  * @param unknown $dataInfo
	  */
	 function read_project($filename, $encode = 'utf-8') {
	     Vendor ( 'PHPExcel.Classes.PHPExcel' );
	 
	     $objPHPExcel = PHPExcel_IOFactory::load ( $filename );
	 
	     $sheet = $objPHPExcel->getSheet ( 0 );
	     $highestRow = $sheet->getHighestRow (); // 取得总行数
	     $highestColumn = $sheet->getHighestColumn ();
	 
	     $data [] = array ();
	 
	     for($i = 2; $i <= $highestRow; $i ++) {
	          
	         $data [$i - 2] ['jobcode'] = (string)$objPHPExcel->getActiveSheet ()->getCell ( "A" . $i )->getValue ();
	          
	         $data [$i - 2] ['Jobname'] = $objPHPExcel->getActiveSheet ()->getCell ( "B" . $i )->getValue ();
	          
	         $data [$i - 2] ['Camount'] = $objPHPExcel->getActiveSheet ()->getCell ( "C" . $i )->getValue ();
	         
	         $data [$i - 2] ['ComId'] = $objPHPExcel->getActiveSheet ()->getCell ( "D" . $i )->getValue ();
	         
	         $data [$i - 2] ['cnumber'] = $objPHPExcel->getActiveSheet ()->getCell ( "E" . $i )->getValue ();
	         
	         $data [$i - 2] ['strjia'] = $objPHPExcel->getActiveSheet ()->getCell ( "F" . $i )->getValue ();
	         
	         $data [$i - 2] ['protype'] = $objPHPExcel->getActiveSheet ()->getCell ( "G" . $i )->getValue ();
	         
	         $data [$i - 2] ['buttype'] = $objPHPExcel->getActiveSheet ()->getCell ( "H" . $i )->getValue ();
	         
	         $data [$i - 2] ['source'] = $objPHPExcel->getActiveSheet ()->getCell ( "I" . $i )->getValue ();
	         
	 
	     }
	 
	     return $data;
	 }
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 /**
	  * 读取Excel数据
	  * 回款记录
	  * @param unknown $dataInfo
	  */
	 function read_payment($filename, $encode = 'utf-8') {
	     Vendor ( 'PHPExcel.Classes.PHPExcel' );
	 
	     $objPHPExcel = PHPExcel_IOFactory::load ( $filename );
	 
	     $sheet = $objPHPExcel->getSheet ( 0 );
	     $highestRow = $sheet->getHighestRow (); // 取得总行数
	     $highestColumn = $sheet->getHighestColumn ();
	 
	     $data [] = array ();
	 
	     for($i = 2; $i <= $highestRow; $i ++) {
	          
	         $data [$i - 2] ['Jobname'] = $objPHPExcel->getActiveSheet ()->getCell ( "A" . $i )->getValue ();
	          
	         $data [$i - 2] ['p_money'] = $objPHPExcel->getActiveSheet ()->getCell ( "B" . $i )->getValue ();
	          
	         $data [$i - 2] ['p_time'] = $objPHPExcel->getActiveSheet ()->getCell ( "C" . $i )->getValue ();
	 
	         $data [$i - 2] ['p_remark'] = $objPHPExcel->getActiveSheet ()->getCell ( "D" . $i )->getValue ();
	 
	     }
	 
	     return $data;
	 }	 
	 
	 
	 /**
	  * 读取Excel数据
	  * 项目名，公司名
	  * @param unknown $dataInfo
	  */
	 function read_projectinfo($filename, $encode = 'utf-8') {
	     Vendor ( 'PHPExcel.Classes.PHPExcel' );
	 
	     $objPHPExcel = PHPExcel_IOFactory::load ( $filename );
	 
	     $sheet = $objPHPExcel->getSheet ( 0 );
	     $highestRow = $sheet->getHighestRow (); // 取得总行数
	     $highestColumn = $sheet->getHighestColumn ();
	 
	     $data [] = array ();
	 
	     for($i = 2; $i <= $highestRow; $i ++) {
	          
	         $data [$i - 2] ['Jobname'] = $objPHPExcel->getActiveSheet ()->getCell ( "A" . $i )->getValue ();
	          
	         $data [$i - 2] ['com_name'] = $objPHPExcel->getActiveSheet ()->getCell ( "B" . $i )->getValue ();
	          
	       
	 
	     }
	 
	     return $data;
	 }
	

	 /**
	  * 读取Excel数据
	  * 项目名，项目经理
	  * @param unknown $dataInfo
	  */
	 function read_promanager($filename, $encode = 'utf-8') {
	     Vendor ( 'PHPExcel.Classes.PHPExcel' );
	 
	     $objPHPExcel = PHPExcel_IOFactory::load ( $filename );
	 
	     $sheet = $objPHPExcel->getSheet ( 0 );
	     $highestRow = $sheet->getHighestRow (); // 取得总行数
	     $highestColumn = $sheet->getHighestColumn ();
	 
	     $data [] = array ();
	 
	     for($i = 2; $i <= $highestRow; $i ++) {
	          
	         $data [$i - 2] ['Jobname'] = (string)$objPHPExcel->getActiveSheet ()->getCell ( "A" . $i )->getValue ();
	          
	         $data [$i - 2] ['pro_manager'] = (string)$objPHPExcel->getActiveSheet ()->getCell ( "B" . $i )->getValue ();
	          
	 
	 
	     }
	 
	     return $data;
	 }



	 /**
	  * 读取Excel数据
	  * 项目信息(向项目表中补充数据)
	  * @param unknown $dataInfo
	  */
	 function read_project_add($filename, $encode = 'utf-8') {
	     Vendor ( 'PHPExcel.Classes.PHPExcel' );
	 
	     $objPHPExcel = PHPExcel_IOFactory::load ( $filename );
	 
	     $sheet = $objPHPExcel->getSheet ( 0 );
	     $highestRow = $sheet->getHighestRow (); // 取得总行数
	     $highestColumn = $sheet->getHighestColumn ();
	 
	     $data [] = array ();
	 
	     for($i = 2; $i <= $highestRow; $i ++) {
	          
	         $data [$i - 2] ['jobcode'] = (string)$objPHPExcel->getActiveSheet ()->getCell ( "A" . $i )->getValue ();
	         
	         $data [$i - 2] ['Begindate'] = $objPHPExcel->getActiveSheet ()->getCell ( "B" . $i )->getValue ();

			 $time = ((($data [$i - 2] ['Begindate'])-25569)*24*60*60); //获得秒数
			 $data [$i - 2] ['Begindate']=date('Y-m-d H:i:s', $time);
			 
			 $date=explode(' ',$data [$i - 2] ['Begindate']);
	          
			 $data [$i - 2] ['Begindate']=$date[0];

	         $data [$i - 2] ['c_money'] = $objPHPExcel->getActiveSheet ()->getCell ( "C" . $i )->getValue ();
	 
	         $data [$i - 2] ['c_yj'] = $objPHPExcel->getActiveSheet ()->getCell ( "D" . $i )->getValue ();
	 
	// var_dump($data);
	 //exit;
	         /*
	         $data [$i - 2] ['cnumber'] = $objPHPExcel->getActiveSheet ()->getCell ( "E" . $i )->getValue ();
	 
	         $data [$i - 2] ['strjia'] = $objPHPExcel->getActiveSheet ()->getCell ( "F" . $i )->getValue ();
	 
	         $data [$i - 2] ['protype'] = $objPHPExcel->getActiveSheet ()->getCell ( "G" . $i )->getValue ();
	 
	         $data [$i - 2] ['buttype'] = $objPHPExcel->getActiveSheet ()->getCell ( "H" . $i )->getValue ();
	 
	         $data [$i - 2] ['source'] = $objPHPExcel->getActiveSheet ()->getCell ( "I" . $i )->getValue ();
	          */
	 
	     }
	 
	     return $data;
	 }