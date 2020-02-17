<?php 
	class controller_login{
		public function __construct(){
			//---
			//khi user an nut submit
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$email = $_POST["email"];
				$password = $_POST["password"];
				//ma hoa password theo md5
				$password = md5($password);
				$check = model::get_a_record("select * from user where email='$email'");
				if(isset($check->email)){
					//kien tra password
					if($check->password == $password){
						//dang nhap thanh cong
						$_SESSION["email"] = $email;
						$_SESSION["admin_id"] = $check->admin_id;
						$_SESSION["username"] = $check->username;
						//quay tro lai trang admin.php
						header("location:admin.php");
					}
				}
			}
			//---
			//load view
			include "view/backend/login.php";
		}
	}
	new controller_login();
 ?>