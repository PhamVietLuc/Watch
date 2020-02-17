<?php 
	class controller_slide_top{
		public function __construct(){
			//lay bien action truyen tu url
			$action = isset($_GET["action"])?$_GET["action"]:"";
			switch($action){				
				case "edit":
					//chuc nang sua ban ghi
					$id = isset($_GET["id"])?$_GET["id"]:0;
					//goi ham de thuc hien chuc nang edit
					$this->edit_slide_top($id);
				break;
				case "do_edit":
					$id = isset($_GET["id"])?$_GET["id"]:0;
					//goi ham do_edit de update ban ghi
					$this->do_edit($id);
				break;
				case "add":
					//goi ham de thuc hien chuc nang edit
					$this->add_slide_top();
				break;
				case "do_add":
					//goi ham do_add de add ban ghi
					$this->do_add();
				break;
				case "delete":
					$id = isset($_GET["id"])?$_GET["id"]:0;
					//goi ham delete slide_top
					$this->delete($id);
				break;
				default:
					$this->list_slide_top();
				break;
			}
		}
		public function list_slide_top(){
			//-----
			//phan trang
			//quy dinh so ban ghi tren mot trang
			$record_per_page = 6;
			//tinh tong so ban ghi
			$total_record = model::num_rows("select slide_id from slide_top");
			//tinh so trang
			$num_page = ceil($total_record/$record_per_page);
			//lay bien p truyen tu url (bien nay se chi trang hien tai)
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? $_GET["p"]-1:0;
			//xac dinh lay tu ban ghi nao
			$from = $p*$record_per_page;
			//sql
			$data = model::list_all("select * from slide_top order by slide_id desc limit $from,$record_per_page");
			//load view
			include "view/backend/slide_top.php";
			//-----
		}
		//edit slide_top
		public function edit_slide_top($id){
			//tao bien form_action de dieu phoi thuoc tinh action cua the form
			$form_action = "admin.php?controller=slide_top&action=do_edit&id=$id";
			//lay mot ban ghi tuong ung voi id truyen vao
			$record = model::get_a_record("select * from slide_top where slide_id=$id");
			//load view
			include "view/backend/add_edit_slide_top.php";
		}
		//add slide_top
		public function add_slide_top(){
			//tao bien form_action de dieu phoi thuoc tinh action cua the form
			$form_action = "admin.php?controller=slide_top&action=do_add";
			//load view
			include "view/backend/add_edit_slide_top.php";
		}
		//do_edit
		public function do_edit($id){
			// nếu người dùng chọn file upload 
			if($_FILES["img"]["name"]!=""){
				//lấy tên file gán vào một biến
				$img = time().$_FILES["img"]["name"];
				move_uploaded_file($_FILES["img"]["tmp_name"], "public/upload/slide_top/$img");
				//update bản ghi
				model::execute("update slide_top set img='$img' where slide_id=$id");
			}
			//quay tro lai controller slide_top
			header("location:admin.php?controller=slide_top");
		}
		//do_add
		public function do_add(){
			$img = "";
			if($_FILES["img"]["name"]!=""){
				//lấy tên file gán vào một biến
			$img = time().$_FILES["img"]["name"];
			move_uploaded_file($_FILES["img"]["tmp_name"], "public/upload/slide_top/$img");
			}
			model::execute("insert into slide_top set img='$img'");
			//quay tro lai slide_top
			header("location:admin.php?controller=slide_top");
		}	
		//delete slide_top
		public function delete($id){
			model::execute("delete from slide_top where slide_id=$id");
			//quay tro lai controller slide_top
			header("location:admin.php?controller=slide_top");
		}	
	}
	new controller_slide_top();
 ?>