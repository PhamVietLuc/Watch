<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="public/backend/css/bootstrap.min.css">
  <!-- load ckeditor -> ckeditor.com -->
  <script type="text/javascript" src="public/backend/ckeditor/ckeditor.js"></script>
	<link rel="stylesheet" href="public/backend/css_admin/style.css">
</head>
<body class="container-fluid">
  <?php if(isset($_SESSION["email"])){ ?>
    <h2 style="font-size: 20px; color:#335353; font-weight: bold; ">Xin chào: <?php echo $_SESSION["username"]; ?> nha!!</h2>
    <?php if($_SESSION["admin_id"]==1){ ?>
      <p style="text-align: center;">Bạn là Admin</p>
    <?php }else{ ?>
      <p style="text-align: center; color: purple; letter-spacing: 1.5px; ">Bạn là Nhân Viên</p>
  <?php } ?>
   <?php } ?>
<ul class="menu cf">
  <li class="logo" style="margin-right: 40px; background-color: white;"><a href="index.php"><img src="public/upload/watch/logo.gif" >watch</a></li>
  <li><a href="admin.php?controller=category_watch">Danh mục sản phẩm</a></li>
  <li><a href="admin.php?controller=watch">Sản phẩm </a></li>
  <li><a href="admin.php?controller=category_news">Danh mục tin tức</a></li>
  <li><a href="admin.php?controller=news">Tin tức</a></li>
  <li><a href="admin.php?controller=slide_top">Slide_top</a></li>
  <?php if($_SESSION["admin_id"]==1) { ?>
  <li><a href="admin.php?controller=user">Quản lý user</a></li>
  <li><a href="admin.php?controller=customer">Khách hàng</a></li>
  <?php } ?>
  <li><a href="admin.php?controller=order">Order khách hàng</a></li>
  <li><a href="admin.php?controller=contact_customer">Liên hệ khách hàng</a></li>
  <li><a href="admin.php?controller=logout">Đăng xuất</a></li>
</ul>
<div class="container" style="margin-top:70px;">
   	<?php 
        //kiem tra xem duong dan controller co ton tai khong, neu co ton tai thi load file do ra
        if(file_exists($controller))
          include $controller;//include "controller/backend/controller_user.php"
     ?>
   </div>
</body>
</html>
