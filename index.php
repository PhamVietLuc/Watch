<?php 
	//start session
	session_start();
	//load file config.php
	include "config.php";
	//load file model.php
	include "model/model.php";
	//-----
	//---
	//lay bien controller truyen tu url
	$controller = isset($_GET["controller"])?$_GET["controller"]:"";
	//noi chuoi vao bien controller de ra duong dan thuc cua file controller can load
	$controller="controller/frontend/controller_$controller.php";
	//kiem tra neu ton tai duong dan file cua $controller thi load layout_trangtrong.php, neu khong thi load layout.php
	//load file template
	if(file_exists($controller)){
		include "view/frontend/layout_trangtrong.php";
	}
	else{
		include "view/frontend/layout_trangchu.php";
	}
 ?>