<?php 
 class controller_contact_customer{
 	public function __construct(){
 		$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
 		if($_SERVER["REQUEST_METHOD"] == "POST"){
 		$name = $_POST["name"];
		$comment = $_POST["comment"];
		model::execute("insert into contact_customer set name = '$name', comment='$comment', fk_watch_id =$id");
		echo "<script language='javascript'>location.href='index.php?controller=contact_customer&act=success';</script>";
 	}
 	include "view/frontend/contact_customer.php";
 	}
 }
 new controller_contact_customer();
 ?>