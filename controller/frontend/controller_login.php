<?php 
	class controller_login{
		public function __construct(){
			//---------
			//logout
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "logout":
					$_SESSION["customer_id"] = null;
					$_SESSION["email_customer"] = null;
					echo "<script language='javascript'>location.href='index.php';</script>";
				break;
			}
			//---------
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$email_customer = $_POST["email_customer"];
				$password = $_POST["password"];
				$password = md5($password);
				//kiem tra thong tin trong csdl
				$arr = model::get_a_record("select customer_id,fullname_customer,email_customer,password from customer where email_customer='$email_customer'");
				if(isset($arr->email_customer)){
					//kiem tra password
					if($password == $arr->password){
						//dang nhap thanh cong
						$_SESSION["customer_id"] = $arr->customer_id;
						$_SESSION["fullname_customer"] = $arr->fullname_customer;
						$_SESSION["email_customer"]= $email_customer;
						echo "<script language='javascript'>location.href='index.php';</script>";
					}else{
						echo "<script language='javascript'>location.href='index.php?controller=login&act=fail';</script>";
					}
				}else{
					echo "<script language='javascript'>location.href='index.php?controller=login&act=fail';</script>";
				}
				echo "<script language='javascript'>location.href='index.php';</script>";
			}
			//---------
			//load view
			include "view/frontend/view_login.php";
		}
	}
	new controller_login();
 ?>