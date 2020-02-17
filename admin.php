<?php 
	//start session
	session_start();
	//load file config.php
	include "config.php";
	//load file model.php
	include "model/model.php";
	//-----
	//kiem tra xem user da dang nhap chua, neu chua dang nhap thi load MVC dang nhap, neu da dang nhap roi thi load file layout.php
	if(isset($_SESSION["email"])==false){
		//load MVC login
		include "controller/backend/controller_login.php";
	}else{
		//---
		//lay bien controller truyen tu url
		$controller = isset($_GET["controller"])?$_GET["controller"]:"";
		//noi chuoi vao bien controller de ra duong dan thuc cua file controller can load
		$controller="controller/backend/controller_$controller.php";
		//---
		//load file template
		include "view/backend/layout.php";
	}
	//-----
 ?>