<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

if (PHP_SAPI == 'cli'){
	die('This example should only be run from a Web Browser');
}
        try{
                //instantiate a database ]
                $hostname='localhost';
                $database_name= 'sassie_bee';
                $username= 'sassie_bees';
                $password='Dancers1';
                $db = new PDO("mysql:host=$hostname;dbname=$database_name",
                              $username, $password);
                 //echo 'Connected to database';
                }
                catch(PDOException $e)
                {
                    echo $e->getMessage();
                    
                }
                 // make model available
       require 'model/beesampleModel.php';
        
        // create an instance
        $bsModel = new BeesampleModel($db);
        
        //get the list of beesamples
        
        $bsList = $bsModel->getAllObservation();
        
        //showing the view
        //include 'view/observation-list.php';
        
        // including PHPExcel
           require_once dirname(__FILE__) . '/Classes/PHPExcel.php'; 
        
        //create PHPexcel
          $objExcel = new PHPExcel();
          
        //creating loop
        $rowNumber = 1;
        
        foreach($bsList as $row){
            
            $objExcel->setActiveSheetIndex(0)
                     ->setCellValue("A$rowNumber", $row['hive_id'])
                     ->setCellValue("B$rowNumber", $row['collection_date'])
                     ->setCellValue("C$rowNumber", $row['sample_period'])
                     ->setCellValue("D$rowNumber",  $row['mite_count']);
                     
        $rowNumber++;
        }
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
    $objExcel->setActiveSheetIndex(0);
    
    
    // Redirect output to a client�s web browser (Excel2007)
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="01simple.xlsx"');
    header('Cache-Control: max-age=0');
    // If you're serving to IE 9, then the following may be needed
    header('Cache-Control: max-age=1');
    
    // If you're serving to IE over SSL, then the following may be needed
    header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
    header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
    header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
    header ('Pragma: public'); // HTTP/1.0
    
    $objWriter = PHPExcel_IOFactory::createWriter($objExcel, 'Excel2007');
    $objWriter->save('php://output');
    exit;
?>