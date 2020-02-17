<?php 
	class controller_register{
		public function __construct(){
			//----------
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$fullname_customer = $_POST["fullname_customer"];
				$email_customer = $_POST["email_customer"];
				$address_customer = $_POST["address_customer"];
				$phone_number_customer = $_POST["phone_number_customer"];
				$password = $_POST["password"];
				$repassword = $_POST["repassword"];
				$password = md5($password);
				$repassword = md5($repassword);
				if($password == $repassword){
				//insert thong tin vao csdl
				model::execute("insert into customer(fullname_customer,phone_number_customer,address_customer,email_customer,password) values('$fullname_customer','$phone_number_customer','$address_customer','$email_customer','$password')");
				//header("location:index.php?controller=register&act=success");
				echo "<script language='javascript'>location.href='index.php?controller=register&act=success';</script>";
				}
				else {
					echo "<script language='javascript'>location.href='index.php?controller=register&act=fail';</script>";
				}
			}
			//----------
			//load view
			include "view/frontend/view_register.php";
		}
	}
	new controller_register();
 ?>