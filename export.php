<?php 
include "config.php";
include "model/model.php";
require "public/Classes/PHPExcel.php";
$order_id= isset($_GET["order_id"])?$_GET["order_id"]:0;
if(isset($_POST['btnExport'])){
	$objExcel = new PHPExcel;
	$objExcel->setActiveSheetIndex(0);
	$sheet = $objExcel->getActiveSheet()->setTitle('customer');
	// title
	$sheet->setCellValue('A1','Hóa đơn thanh toán');
	$sheet->getStyle('A1')->getFont()->setSize(20)->setBold(true);
	$sheet->mergeCells('A1:E1');

	// infomation customer
	$sheet->setCellValue('A2','Thông tin khách hàng');
	$sheet->setCellValue('A5','Thông tin đơn hàng');
	$phpColor = new PHPExcel_Style_Color();
	$phpColor->setRGB('FF0000'); 
	$sheet->getStyle('A2')->getFont()->setSize(12)->setItalic(true)->setColor($phpColor);
	$sheet->getStyle('A5')->getFont()->setSize(12)->setItalic(true)->setColor($phpColor);
	$sheet->mergeCells('A2:E2');
	$sheet->mergeCells('A5:E5');

	$rowCount = 3;
	$sheet->setCellValue('A'.$rowCount,'Họ tên khách hàng');
	$sheet->setCellValue('B'.$rowCount,'Số điện thoại');
	$sheet->setCellValue('C'.$rowCount,'Địa chỉ');
	$sheet->setCellValue('D'.$rowCount,'Email');
	$sheet->setCellValue('E'.$rowCount,'Ngày mua');
	$phpColor1 = new PHPExcel_Style_Color();
	$phpColor1->setRGB('32abaa');
	$sheet->getStyle('A3:E3')->getFont()->setSize(12)->setItalic(true)->setColor($phpColor1);

	$result = model::list_all("select * from order_customer inner join customer on order_customer.customer_id = customer.customer_id where order_id=$order_id");
	foreach($result as $row){
		$rowCount++;
		$sheet->setCellValue('A'.$rowCount,$row->fullname_customer);
		$sheet->setCellValue('B'.$rowCount,$row->phone_number_customer);
		$sheet->setCellValue('C'.$rowCount,$row->address_customer);
		$sheet->setCellValue('D'.$rowCount,$row->email_customer);
		$sheet->setCellValue('E'.$rowCount,$row->time_buying);
	}

	$rowCount2 = 6;
	$sheet->setCellValue('A'.$rowCount2,'Tên sản phẩm');
	$sheet->setCellValue('B'.$rowCount2,'Màu sắc');
	$sheet->setCellValue('C'.$rowCount2,'Số lượng');
	$sheet->setCellValue('D'.$rowCount2,'Đơn giá');
	$sheet->setCellValue('E'.$rowCount2,'Thành tiền');
	$phpColor1 = new PHPExcel_Style_Color();
	$phpColor1->setRGB('32abaa');
	$sheet->getStyle('A6:E6')->getFont()->setSize(12)->setItalic(true)->setColor($phpColor1);


	$order_detail = model::list_all("select * from order_detail where order_id=$order_id ");
	foreach ($order_detail as $value) {
		$watch = model::get_a_record("select * from product_watch where pk_watch_id=".$value->fk_watch_id);
		$total = model::get_a_record("select * from order_customer where order_id = $order_id");
		$rowCount2++;
		$sheet->setCellValue('A'.$rowCount2,$watch->name_watch);
		$sheet->setCellValue('B'.$rowCount2,$watch->color_watch);
		$sheet->setCellValue('C'.$rowCount2,$value->order_number);
		$sheet->setCellValue('D'.$rowCount2,number_format($watch->price_watch).'đ');
		$sheet->setCellValue('E'.$rowCount2,number_format($value->order_number*$watch->price_watch).'đ');	
	}
	$sheet->setCellValue('A'.($rowCount2+1),'Tổng thanh toán:');
		$sheet->mergeCells('A'.($rowCount2+1).':'.'D'.($rowCount2+1));
		$sheet->setCellValue('E'.($rowCount2+1),number_format($total->cost).'đ');

		// set style for row title
	$sheet->getColumnDimension('A')->setAutoSize(true);
	$sheet->getColumnDimension('B')->setAutoSize(true);
	$sheet->getColumnDimension('C')->setAutoSize(true);
	$sheet->getColumnDimension('D')->setAutoSize(true);
	$sheet->getColumnDimension('E')->setAutoSize(true);

	// set size title excel

	$sheet->getStyle('A1:E1')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('0042cccc');


		// set style for row data
	$styleArray = array(
		'borders' => array(
			'allborders' => array(
				'style' => PHPExcel_Style_Border::BORDER_THIN
			)
		)
	);
	$sheet->getStyle('A1:' . 'E'.($rowCount2+1))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	$sheet->getStyle('A1:' . 'E'.($rowCount2+1))->applyFromArray($styleArray);

	$objWriter = new PHPExcel_Writer_Excel2007($objExcel);
	$filename = 'hoadon '.$order_id.'.xlsx';
	$objWriter->save($filename);

	header('Content-Disposition: attachment; filename=" '.$filename.'" ');
	header('Content-Type: application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet');
	header('Content-Length:' .filesize($filename));
	header('Content-Transfer-Encoding: binary');
	header('Cache-Control: must-revalidate');
	header('Pragma: no-cache');
	readfile($filename);
	return;
}
?>
<style type="text/css">
	.ahihi{
		position: absolute;
		top:40%;
		left: 40%;
	}
	.ahihi button{
		width: 300px;
		height: 100px;
		font-size: 30px;
		background: #2db417;
		color: white;
		font-weight: bold;
		transition: ease-in 0.5s;
		border: none;
		border-radius: 20px;
	}
	.ahihi button:hover{
		background: #410e44;
		box-shadow: 0 0 0 2000px #410e44;
		border: 1px solid #2db417;
	}
</style>
<form class="ahihi" method="post" enctype="multipart/form-data">
	<button type="submit" name="btnExport">Xuất hóa đơn ngay và luôn</button>
</form>