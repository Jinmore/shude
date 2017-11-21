<?php
defined('IN_PHPCMS') or exit('No permission resources.');
class ImportExcel
{
		/**
	 * 析构函数
	 * @param $ps_api_url 接口域名
	 * @param $ps_auth_key 加密密匙
	 */
	public function __construct()
	 {
		require_once 'Classes/PHPExcel.php';
		require_once 'Classes/PHPExcel/IOFactory.php';
		require_once 'Classes/PHPExcel/Reader/Excel5.php';
	}
	
	/**
	 *读取表格从第二行开始
	 */

	public function read($filename,$ext='xls'){
		if(!file_exists($filename)) return false;
		$objReader = PHPExcel_IOFactory::createReader('Excel5');//use excel2007 for 2007 format 
		$excelRow=array();
		$objPHPExcel = $objReader->load($filename); 
		$sheet = $objPHPExcel->getSheet(0); 
		$highestRow = $sheet->getHighestRow();           //取得总行数 
		$highestColumn = $sheet->getHighestColumn(); //取得总列数
		/* 第二种方法*/
		$objWorksheet = $objPHPExcel->getActiveSheet();
		$highestRow = $objWorksheet->getHighestRow(); 
		//echo 'highestRow='.$highestRow;
		$highestColumn = $objWorksheet->getHighestColumn();
		$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);//总列数
		//echo 'highestColumnIndex='.$highestColumnIndex;
		$headtitle=array();
		for ($row = 2;$row <= $highestRow;$row++){
			$strs=array();
			for ($col = 0;$col < $highestColumnIndex;$col++){
				$strs[$col] =$objWorksheet->getCellByColumnAndRow($col, $row)->getValue();
				$cell =$objWorksheet->getCellByColumnAndRow($col, $row);
				if($cell->getDataType()==PHPExcel_Cell_DataType::TYPE_NUMERIC){  
					 $cellstyleformat=$cell->getParent()->getStyle( $cell->getCoordinate() )->getNumberFormat(); 
						  $formatcode=$cellstyleformat->getFormatCode(); 
							   if (preg_match('/^(\[\$[A-Z]*-[0-9A-F]*\])*[hmsdy]/i', $formatcode)) {  
									 $strs[$col]=gmdate("Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($strs[$col])); 
							   }else{  

									 $strs[$col]=PHPExcel_Style_NumberFormat::toFormattedString($strs[$col],$formatcode);  

							   }  

							} 

						}
						$excelRow[$row]=$strs;

				}
	   return $excelRow;
			
	}


	}