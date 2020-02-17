<?php 
	class controller_contact_customer{
		public function __construct(){
			//lay bien action truyen tu url
			$action = isset($_GET["action"])?$_GET["action"]:"";
			switch($action){				
				case "edit":
					//chuc nang sua ban ghi
					$id = isset($_GET["id"])?$_GET["id"]:0;
					//goi ham de thuc hien chuc nang edit
					$this->edit_contact_customer($id);
				break;
				case "do_edit":
					$id = isset($_GET["id"])?$_GET["id"]:0;
					//goi ham do_edit de update ban ghi
					$this->do_edit($id);
				break;
				case "add":
					//goi ham de thuc hien chuc nang edit
					$this->add_contact_customer();
				break;
				case "do_add":
					//goi ham do_add de add ban ghi
					$this->do_add();
				break;
				case "delete":
					$id = isset($_GET["id"])?$_GET["id"]:0;
					//goi ham delete contact_customer
					$this->delete($id);
				break;
				default:
					$this->contact_customer();
				break;
			}
		}
		public function contact_customer(){
			//-----
			//phan trang
			//quy dinh so ban ghi tren mot trang
			$record_per_page = 3;
			//tinh tong so ban ghi
			$total_record = model::num_rows("select contact_id from contact_customer");
			//tinh so trang
			$num_page = ceil($total_record/$record_per_page);
			//lay bien p truyen tu url (bien nay se chi trang hien tai)
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? $_GET["p"]-1:0;
			//xac dinh lay tu ban ghi nao
			$from = $p*$record_per_page;
			//sql
			$data = model::list_all("select * from contact_customer order by contact_id desc limit $from,$record_per_page");
			//load view
			include "view/backend/contact_customer.php";
			//-----
		}
		//edit contact_customer
		public function edit_contact_customer($id){
			//tao bien form_action de dieu phoi thuoc tinh action cua the form
			$form_action = "admin.php?controller=contact_customer&action=do_edit&id=$id";
			//lay mot ban ghi tuong ung voi id truyen vao
			$record = model::get_a_record("select * from contact_customer where contact_id=$id");
			//load view
			include "view/backend/add_edit_contact_customer.php";
		}
		//add contact_customer
		public function add_contact_customer(){
			//tao bien form_action de dieu phoi thuoc tinh action cua the form
			$form_action = "admin.php?controller=contact_customer&action=do_add";
			//load view
			include "view/backend/add_edit_contact_customer.php";
		}
		//do_edit
		public function do_edit($id){
			$name = $_POST["name"];
			$comment = $_POST["comment"];
			//update name
			model::execute("update contact_customer set name='$name',comment='$comment' where contact_id=$id");
			header("location:admin.php?controller=contact_customer");
		}
		//do_add
		public function do_add(){
			$name = $_POST["name"];
			$comment = $_POST["comment"];
			//ma hoa password
			model::execute("insert into contact_customer set name='$name',comment='$comment'");
			//quay tro lai controller contact_customer
			header("location:admin.php?controller=contact_customer");
		}	
		//delete contact_customer
		public function delete($id){
			model::execute("delete from contact_customer where contact_id=$id");
			//quay tro lai controller contact_customer
			header("location:admin.php?controller=contact_customer");
		}	
	}
	new controller_contact_customer();
 ?>