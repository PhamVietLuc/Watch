<?php 
	include "config.php";
	require "public/Classes/PHPExcel.php";
	if(isset($_POST['btnGui'])){
		$file = $_FILES['file']['tmp_name'];
		$objReader = PHPExcel_IOFactory::createReaderForFile($file);
		$objReader->setLoadSheetsOnly('customer');
		$objExcel = $objReader->load($file);
		$sheetData = $objExcel->getActiveSheet()->toArray('null',true,true,true);
		$hightestRow = $objExcel->setActiveSheetIndex()->getHighestRow();

		for($row = 2; $row<=$hightestRow; $row++){
		$fullname_customer = $sheetData[$row]['A'];
		$phone_number_customer = $sheetData[$row]['B'];
		$address_customer = $sheetData[$row]['C'];
		$email_customer = $sheetData[$row]['D'];
		$password = $sheetData[$row]['E'];
		$sql = "INSERT INTO customer(fullname_customer,phone_number_customer,address_customer,email_customer,password) VALUES ('$fullname_customer',$phone_number_customer,'$address_customer','$email_customer','$password')";
		mysqli_query($db,$sql);
		}
			echo 'Insert';
	}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Import database</title>
 </head>
 <body>
 <form method="post" enctype="multipart/form-data">
 	<input type="file" name="file">
 	<button type="submit" name="btnGui">Import</button>
 </form>
 </body>
 </html>