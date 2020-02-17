<?php 
class controller_watch{
	public function __construct(){
			//lay bien action truyen tu url
		$action = isset($_GET["action"])?$_GET["action"]:"";
		switch($action){				
			case "edit":
					//chuc nang sua ban ghi
			$id = isset($_GET["id"])?$_GET["id"]:0;
					//goi ham de thuc hien chuc nang edit
			$this->edit_watch($id);
			break;
			case "do_edit":
			$id = isset($_GET["id"])?$_GET["id"]:0;
					//goi ham do_edit de update ban ghi
			$this->do_edit($id);
			break;
			case "add":
					//goi ham de thuc hien chuc nang edit
			$this->add_watch();
			break;
			case "do_add":
					//goi ham do_add de add ban ghi
			$this->do_add();
			break;
			case "delete":
			$id = isset($_GET["id"])?$_GET["id"]:0;
					//goi ham delete watch
			$this->delete($id);
			break;
			default:
			$this->category_watch();
			break;
		}
	}
	public function category_watch(){
			//-----
			//phan trang
			//quy dinh so ban ghi tren mot trang
		$record_per_page = 6;
			//tinh tong so ban ghi
		$total_record = model::num_rows("select pk_watch_id from product_watch");
			//tinh so trang
		$num_page = ceil($total_record/$record_per_page);
			//lay bien p truyen tu url (bien nay se chi trang hien tai)
		$p = isset($_GET["p"])&&$_GET["p"]>0 ? $_GET["p"]-1:0;
			//xac dinh lay tu ban ghi nao
		$from = $p*$record_per_page;
			//sql
		$data = model::list_all("select * from product_watch order by pk_watch_id desc limit $from,$record_per_page");
			//load view
		include "view/backend/watch.php";
			//-----
	}
		//edit watch
	public function edit_watch($id){
			//tao bien form_action de dieu phoi thuoc tinh action cua the form
		$form_action = "admin.php?controller=watch&action=do_edit&id=$id";
			//lay mot ban ghi tuong ung voi id truyen vao
		$record = model::get_a_record("select * from product_watch where pk_watch_id=$id");
			//load view
		include "view/backend/add_edit_watch.php";
	}
		//add watch
	public function add_watch(){
			//tao bien form_action de dieu phoi thuoc tinh action cua the form
		$form_action = "admin.php?controller=watch&action=do_add";
			//load view
		include "view/backend/add_edit_watch.php";
	}
		//do_edit
	public function do_edit($id){
		$name_watch = $_POST["name_watch"];
		$price_watch = $_POST["price_watch"];
		$color_watch = $_POST["color_watch"];
		$fk_category_watch_id = $_POST["fk_category_watch_id"];
		$short_description_watch = $_POST["short_description_watch"];
		$material_watch = $_POST["material_watch"];
		$brand_name_watch = $_POST["brand_name_watch"];
		$info_detail_watch = $_POST["info_detail_watch"];
		$count_watch = $_POST["count_watch"];
		$display_watch = $_POST["display_watch"];
		$diameter_watch = $_POST["diameter_watch"];
		$thickness_watch = $_POST["thickness_watch"];
		$width_strap_watch = $_POST["width_strap_watch"];
		$material_glass_watch = $_POST["material_glass_watch"];
		$water_resistant_watch = $_POST["water_resistant_watch"];
		$hot_watch = isset($_POST["hot_watch"])? 1:0;
		model::execute("update product_watch set name_watch='$name_watch', price_watch='$price_watch', info_detail_watch='$info_detail_watch', short_description_watch='$short_description_watch', fk_category_watch_id=$fk_category_watch_id, material_watch='$material_watch', color_watch='$color_watch', brand_name_watch='$brand_name_watch', hot_watch=$hot_watch, count_watch=$count_watch,display_watch='$display_watch',diameter_watch=$diameter_watch,thickness_watch=$thickness_watch,width_strap_watch=$width_strap_watch,material_glass_watch='$material_glass_watch',water_resistant_watch=$water_resistant_watch where pk_watch_id=$id");
			// nếu người dùng chọn file upload 
		if($_FILES["img_watch"]["name"]!=""){
				//lấy tên file gán vào một biến
			$img_watch = time().$_FILES["img_watch"]["name"];
			move_uploaded_file($_FILES["img_watch"]["tmp_name"], "public/upload/watch/$img_watch");
				//update bản ghi
			model::execute("update product_watch set img_watch='$img_watch' where pk_watch_id=$id");
		}
		if($_FILES["img_watch2"]["name"]!=""){
				//lấy tên file gán vào một biến
			$img_watch2 = time().$_FILES["img_watch2"]["name"];
			move_uploaded_file($_FILES["img_watch2"]["tmp_name"], "public/upload/watch/$img_watch2");
				//update bản ghi
			model::execute("update product_watch set img_watch2='$img_watch2' where pk_watch_id=$id");
		}
		if($_FILES["img_watch3"]["name"]!=""){
				//lấy tên file gán vào một biến
			$img_watch3 = time().$_FILES["img_watch3"]["name"];
			move_uploaded_file($_FILES["img_watch3"]["tmp_name"], "public/upload/watch/$img_watch3");
				//update bản ghi
			model::execute("update product_watch set img_watch3='$img_watch3' where pk_watch_id=$id");
		}
		if($_FILES["img_watch4"]["name"]!=""){
				//lấy tên file gán vào một biến
			$img_watch4 = time().$_FILES["img_watch4"]["name"];
			move_uploaded_file($_FILES["img_watch4"]["tmp_name"], "public/upload/watch/$img_watch4");
				//update bản ghi
			model::execute("update product_watch set img_watch4='$img_watch4' where pk_watch_id=$id");
		}
			//quay tro lai controller watch
		header("location:admin.php?controller=watch");
	}
		//do_add
	public function do_add(){
		$name_watch = $_POST["name_watch"];
		$price_watch = $_POST["price_watch"];
		$color_watch = $_POST["color_watch"];
		$material_watch = $_POST["material_watch"];
		$brand_name_watch = $_POST["brand_name_watch"];
		$fk_category_watch_id = $_POST["fk_category_watch_id"];
		$count_watch = $_POST["count_watch"];
		$short_description_watch = $_POST["short_description_watch"];
		$info_detail_watch = $_POST["info_detail_watch"];
		$hot_watch = isset($_POST["hot_watch"])? 1:0;
		$display_watch = $_POST["display_watch"];
		$diameter_watch = $_POST["diameter_watch"];
		$thickness_watch = $_POST["thickness_watch"];
		$width_strap_watch = $_POST["width_strap_watch"];
		$material_glass_watch = $_POST["material_glass_watch"];
		$water_resistant_watch = $_POST["water_resistant_watch"];
		$img_watch = "";
		$img_watch2 = "";
		$img_watch3 = "";
		$img_watch4 = "";
		if($_FILES["img_watch"]["name"]!=""){
				//lấy tên file gán vào một biến
			$img_watch = time().$_FILES["img_watch"]["name"];
			move_uploaded_file($_FILES["img_watch"]["tmp_name"], "public/upload/watch/$img_watch");
		}
		if($_FILES["img_watch2"]["name"]!=""){
				//lấy tên file gán vào một biến
			$img_watch2 = time().$_FILES["img_watch2"]["name"];
			move_uploaded_file($_FILES["img_watch2"]["tmp_name"], "public/upload/watch/$img_watch2");
		}
		if($_FILES["img_watch3"]["name"]!=""){
				//lấy tên file gán vào một biến
			$img_watch3 = time().$_FILES["img_watch3"]["name"];
			move_uploaded_file($_FILES["img_watch3"]["tmp_name"], "public/upload/watch/$img_watch3");
		}
		if($_FILES["img_watch4"]["name"]!=""){
				//lấy tên file gán vào một biến
			$img_watch4 = time().$_FILES["img_watch4"]["name"];
			move_uploaded_file($_FILES["img_watch4"]["tmp_name"], "public/upload/watch/$img_watch4");
		}
		model::execute("insert into product_watch set name_watch='$name_watch', price_watch='$price_watch', short_description_watch='$short_description_watch', info_detail_watch='$info_detail_watch', fk_category_watch_id=$fk_category_watch_id, hot_watch=$hot_watch, img_watch='$img_watch',img_watch2='$img_watch2',img_watch3='$img_watch3',img_watch4='$img_watch4',color_watch='$color_watch', material_watch='$material_watch', brand_name_watch='$brand_name_watch',count_watch=$count_watch,display_watch='$display_watch',diameter_watch=$diameter_watch,thickness_watch=$thickness_watch,width_strap_watch=$width_strap_watch,material_glass_watch='$material_glass_watch',water_resistant_watch=$water_resistant_watch ");
			//quay tro lai watch
		header("location:admin.php?controller=watch");
	}	
		//delete watch
	public function delete($id){
		model::execute("delete from product_watch where pk_watch_id=$id");
			//quay tro lai controller watch
		header("location:admin.php?controller=watch");
	}	
}
new controller_watch();
?>