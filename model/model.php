<?php 
	class model{
		//lay tat ca cac ban ghi trong table
		public static function list_all($sql){
			//khai bao bien $db thanh bien toan cuc de su dung o day
			global $db;
			$result = mysqli_query($db,$sql) or die("Không truy vấn được 1");			
			$arr = array();
			//duyet cac phan tu cua object $result, moi phan tu nem vao thanh 1 phan tu cua array
			while($rows = mysqli_fetch_object($result))
				$arr[] = $rows;
			return $arr;
		}
		//thuc hien cau truy van
		public static function execute($sql){
			global $db;
			$insert_id = 0;
			if(mysqli_query($db,$sql))
				$insert_id = mysqli_insert_id($db);
			return $insert_id;

		}
		//lay mot ban ghi
		public static function get_a_record($sql){
			global $db;
			$result = mysqli_query($db,$sql) or die("Không truy vấn được 3");
			$record = mysqli_fetch_object($result);
			return $record;
		}
		//dem so luong ban ghi
		public static function num_rows($sql){
			global $db;
			$result = mysqli_query($db,$sql) or die("Không truy vấn được 4");
			return mysqli_num_rows($result);
		}
	}
 ?>