<?php 
	class controller_order_detail{
		public function __construct(){
			//--------------------
			$order_id= isset($_GET["order_id"])?$_GET["order_id"]:0;
			$act= isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "sent":
					//update cot trang thai
					model::execute("update order_customer set state=1 where order_id=$order_id");
					header("location:admin.php?controller=order_detail&order_id=$order_id");
					$arrr = model::list_all("select * from order_detail where order_id=$order_id");
					foreach ($arrr as $count) {
						$watch = model::get_a_record("select * from product_watch where pk_watch_id=".$count->fk_watch_id);
							$ss = $watch->count_watch - $count->order_number;
						model::execute("update product_watch set count_watch=$ss where pk_watch_id=".$count->fk_watch_id);
					}
				break;
			}
			//--------------------
			//tính tổng số bản ghi
			$total = model::num_rows("select * from order_detail where order_id=$order_id");
			//quy định số bản ghi trên 1 trang
			$record_per_page = 10;
			//Tính số trang = ceil(tổng số bản ghi/số bản ghi trên 1 trang)
			$num_page = ceil($total/$record_per_page);
			//Lấy biến p truyền trên url (là biến chỉ số trang hiện tại)
			$page = isset($_GET["p"])&&is_numeric($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1):0;
			//tính bản ghi bắt đầu hiển thị ở trang đó (ở trang nào, sẽ từ bản ghi nào đến bản ghi nào)
			$from = $page * $record_per_page;
			$arr = model::list_all("select * from order_detail where order_id=$order_id limit $from,$record_per_page");
			//load view
			include "view/backend/order_detail.php";
			//--------------------
		}
	}
	new controller_order_detail();
 ?>