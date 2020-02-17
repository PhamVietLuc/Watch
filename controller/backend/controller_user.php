<?php 
	class controller_user{
		public function __construct(){
			//lay bien action truyen tu url
			$action = isset($_GET["action"])?$_GET["action"]:"";
			switch($action){				
				case "edit":
					//chuc nang sua ban ghi
					$id = isset($_GET["id"])?$_GET["id"]:0;
					//goi ham de thuc hien chuc nang edit
					$this->edit_user($id);
				break;
				case "do_edit":
					$id = isset($_GET["id"])?$_GET["id"]:0;
					//goi ham do_edit de update ban ghi
					$this->do_edit($id);
				break;
				case "add":
					//goi ham de thuc hien chuc nang edit
					$this->add_user();
				break;
				case "do_add":
					//goi ham do_add de add ban ghi
					$this->do_add();
				break;
				case "delete":
					$id = isset($_GET["id"])?$_GET["id"]:0;
					//goi ham delete user
					$this->delete($id);
				break;
				default:
					$this->list_user();
				break;
			}
		}
		public function list_user(){
			//-----
			//phan trang
			//quy dinh so ban ghi tren mot trang
			$record_per_page = 3;
			//tinh tong so ban ghi
			$total_record = model::num_rows("select user_id from user");
			//tinh so trang
			$num_page = ceil($total_record/$record_per_page);
			//lay bien p truyen tu url (bien nay se chi trang hien tai)
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? $_GET["p"]-1:0;
			//xac dinh lay tu ban ghi nao
			$from = $p*$record_per_page;
			//sql
			$data = model::list_all("select * from user order by user_id desc limit $from,$record_per_page");
			//load view
			include "view/backend/list_user.php";
			//-----
		}
		//edit user
		public function edit_user($id){
			//tao bien form_action de dieu phoi thuoc tinh action cua the form
			$form_action = "admin.php?controller=user&action=do_edit&id=$id";
			//lay mot ban ghi tuong ung voi id truyen vao
			$record = model::get_a_record("select * from user where user_id=$id");
			//load view
			include "view/backend/add_edit_user.php";
		}
		//add user
		public function add_user(){
			//tao bien form_action de dieu phoi thuoc tinh action cua the form
			$form_action = "admin.php?controller=user&action=do_add";
			//load view
			include "view/backend/add_edit_user.php";
		}
		//do_edit
		public function do_edit($id){
			$username = $_POST["username"];
			$password = $_POST["password"];
			$admin_id = isset($_POST["admin_id"])? 1:0;
			//update username
			model::execute("update user set username='$username',admin_id=$admin_id where user_id=$id");
			//neu password khong rong thi update password
			if($password != ""){
				//ma hoa password
				$password = md5($password);
				model::execute("update user set password='$password' where user_id=$id");
			}
			//quay tro lai controller user
			header("location:admin.php?controller=user");
		}
		//do_add
		public function do_add(){
			$username = $_POST["username"];
			$password = $_POST["password"];
			$admin_id = isset($_POST["admin_id"])? 1:0;
			$email = $_POST["email"];
			//ma hoa password
			$password = md5($password);
			model::execute("insert into user set username='$username', password='$password', email='$email',admin_id=$admin_id");
			//quay tro lai controller user
			header("location:admin.php?controller=user");
		}	
		//delete user
		public function delete($id){
			model::execute("delete from user where user_id=$id");
			//quay tro lai controller user
			header("location:admin.php?controller=user");
		}	
	}
	new controller_user();
 ?>