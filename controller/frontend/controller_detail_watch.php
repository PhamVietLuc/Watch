<?php 
	class controller_detail_watch{
		public function __construct(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
			//lay mot ban ghi
			$record = model::get_a_record("select * from product_watch where pk_watch_id=$id");
			//load view
			include "view/frontend/detail_watch.php";
		}
	}
	new controller_detail_watch();
 ?>