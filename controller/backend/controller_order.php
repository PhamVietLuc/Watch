<?php 
	class controller_order{
		public function __construct(){
			//--------------------
			$act= isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "delete":
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
					//xoa ban ghi co id truyen vao
					model::execute("delete from order_customer where order_id=$id");
					//di chuyen den trang order
					header("location:admin.php?controller=order");
				break;
			}
			//--------------------
			//tính tổng số bản ghi
			$total = model::num_rows("select * from order_customer inner join customer on order_customer.customer_id = customer.customer_id");
			//quy định số bản ghi trên 1 trang
			$record_per_page = 10;
			//Tính số trang = ceil(tổng số bản ghi/số bản ghi trên 1 trang)
			$num_page = ceil($total/$record_per_page);
			//Lấy biến p truyền trên url (là biến chỉ số trang hiện tại)
			$page = isset($_GET["p"])&&is_numeric($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1):0;
			//tính bản ghi bắt đầu hiển thị ở trang đó (ở trang nào, sẽ từ bản ghi nào đến bản ghi nào)
			$from = $page * $record_per_page;
			$arr = model::list_all("select * from order_customer inner join customer on order_customer.customer_id = customer.customer_id order by state,order_id desc limit $from,$record_per_page");
			//load view
			$arr_excel = model::list_all("select * from order_customer inner join customer on order_customer.customer_id = customer.customer_id");
			$tong = model::list_all("select * from order_customer where state=1");
			include "view/backend/order.php";
			//--------------------
		}
	}
	new controller_order();
 ?>