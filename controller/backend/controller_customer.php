<?php 
	class controller_customer{
		public function __construct(){
			//lay bien action truyen tu url
			$action = isset($_GET["action"])?$_GET["action"]:"";
			switch($action){				
				case "edit":
					//chuc nang sua ban ghi
					$id = isset($_GET["id"])?$_GET["id"]:0;
					//goi ham de thuc hien chuc nang edit
					$this->edit_customer($id);
				break;
				case "do_edit":
					$id = isset($_GET["id"])?$_GET["id"]:0;
					//goi ham do_edit de update ban ghi
					$this->do_edit($id);
				break;
				case "add":
					//goi ham de thuc hien chuc nang edit
					$this->add_customer();
				break;
				case "do_add":
					//goi ham do_add de add ban ghi
					$this->do_add();
				break;
				case "delete":
					$id = isset($_GET["id"])?$_GET["id"]:0;
					//goi ham delete customer
					$this->delete($id);
				break;
				default:
					$this->customer();
				break;
			}
		}
		public function customer(){
			//-----
			//phan trang
			//quy dinh so ban ghi tren mot trang
			$record_per_page = 3;
			//tinh tong so ban ghi
			$total_record = model::num_rows("select customer_id from customer");
			//tinh so trang
			$num_page = ceil($total_record/$record_per_page);
			//lay bien p truyen tu url (bien nay se chi trang hien tai)
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? $_GET["p"]-1:0;
			//xac dinh lay tu ban ghi nao
			$from = $p*$record_per_page;
			//sql
			$data = model::list_all("select * from customer order by customer_id desc limit $from,$record_per_page");
			//load view
			include "view/backend/customer.php";
			//-----
		}
		//edit customer
		public function edit_customer($id){
			//tao bien form_action de dieu phoi thuoc tinh action cua the form
			$form_action = "admin.php?controller=customer&action=do_edit&id=$id";
			//lay mot ban ghi tuong ung voi id truyen vao
			$record = model::get_a_record("select * from customer where customer_id=$id");
			//load view
			include "view/backend/add_edit_customer.php";
		}
		//add customer
		public function add_customer(){
			//tao bien form_action de dieu phoi thuoc tinh action cua the form
			$form_action = "admin.php?controller=customer&action=do_add";
			//load view
			include "view/backend/add_edit_customer.php";
		}
		//do_edit
		public function do_edit($id){
			$fullname_customer = $_POST["fullname_customer"];
			$phone_number_customer = $_POST["phone_number_customer"];
			$address_customer = $_POST["address_customer"];
			$email_customer = $_POST["email_customer"];
			$password = $_POST["password"];
			//update fullname_customer
			model::execute("update customer set fullname_customer='$fullname_customer',phone_number_customer='$phone_number_customer',address_customer='$address_customer', email_customer='$email_customer' where customer_id=$id");
			//neu password khong rong thi update password
			if($password != ""){
				//ma hoa password
				model::execute("update customer set password='$password' where customer_id=$id");
			}
			//quay tro lai controller customer
			header("location:admin.php?controller=customer");
		}
		//do_add
		public function do_add(){
			$fullname_customer = $_POST["fullname_customer"];
			$phone_number_customer = $_POST["phone_number_customer"];
			$address_customer = $_POST["address_customer"];
			$email_customer = $_POST["email_customer"];
			$password = $_POST["password"];
			//ma hoa password
			model::execute("insert into customer set fullname_customer='$fullname_customer',phone_number_customer='$phone_number_customer',address_customer='$address_customer' ,password='$password', email_customer='$email_customer'");
			//quay tro lai controller customer
			header("location:admin.php?controller=customer");
		}	
		//delete customer
		public function delete($id){
			model::execute("delete from customer where customer_id=$id");
			//quay tro lai controller customer
			header("location:admin.php?controller=customer");
		}	
	}
	new controller_customer();
 ?>