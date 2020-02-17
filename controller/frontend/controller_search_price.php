<?php 
	class controller_search_price{
		public function __construct(){
			//-----
			$search_price = isset($_POST["search_price"]) ? $_POST["search_price"] : "";
			//phan trang
			//quy dinh so ban ghi tren mot trang
			$record_per_page = 6;
			//tinh tong so ban ghi
			$total_record = model::num_rows("select pk_watch_id from product_watch where price_watch between $search_price");
			//tinh so trang
			$num_page = ceil($total_record/$record_per_page);
			//lay bien p truyen tu url (bien nay se chi trang hien tai)
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? $_GET["p"]-1:0;
			//xac dinh lay tu ban ghi nao
			$from = $p*$record_per_page;
			//sql
			$data = model::list_all("select * from product_watch where price_watch between $search_price order by pk_watch_id desc limit $from,$record_per_page");
			//load view
			include "view/frontend/search_price.php";
			//-----
		}
	}
	new controller_search_price();
 ?>