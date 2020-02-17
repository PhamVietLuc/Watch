	 <!DOCTYPE html>
	 <html>
	 <head>
	 	<title>LNS watch</title>
	 	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	 	<link rel="stylesheet" href="public/frontend/slick-1.8.1/slick/slick.css">
	 	<link rel="stylesheet" href="public/frontend/slick-1.8.1/slick/slick-theme.css">
	 	<link rel="stylesheet" href="public/frontend/css/bootstrap.css">
	 	<link rel="stylesheet" href="public/frontend/css/animate.css">
	 	<link rel="icon" href="public/upload/watch/logo.gif">
	 	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	 	<link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Display&display=swap" rel="stylesheet">
	 	<link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
	 	<link rel="stylesheet" href="public/frontend/lns.css?v1.2">
	 </head>
	 <body>
	 	<!-- header -->
	 	<div class="container header">
	 		<!-- header top -->
	 		<div class="row header-top">	
	 			<div class="col-lg-4 hotline">
	 				<span>	HOTLINE ĐẶT HÀNG:</span><a href="#">&nbsp; 0123 456 789</a>	
	 			</div>
	 			<div class="col-lg-4 logo">
	 				<a href="index.php"><img src="public/upload/watch/logo.gif" alt="">
	 					<p>Watch</p>
	 				</a></div>
	 				<div class="col-lg-4 login-shop">
	 					<ul>
	 						<li>
	 						<?php if(isset($_SESSION["email_customer"]))
            {
           ?>
           Xin chào <?php echo $_SESSION["fullname_customer"]; ?>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?controller=login&act=logout" style="background: #d1d1d1; border-radius: 3px;">Logout</a> <hr> <br>
           <?php }else{ ?>
	 							<a href="#">TÀI KHOẢN
	 							<div class="dropdown-content">
	 								<a href="index.php?controller=login">Đăng nhập</a>
	 								<hr>
	 								<a href="index.php?controller=register">Đăng ký</a>
	 							</div>
	 						</a>
	 					<?php } ?>
	 					</li>
	 						<li class="logo_cart"><a href="index.php?controller=cart">GIỎ HÀNG <span class="fa fa-shopping-cart" aria-hidden="true"></span>
	 							<p><?php echo isset($_SESSION["cart"])?count($_SESSION["cart"]):""; ?></p>
	 						</a></li>
	 						<li class="fa fa-search" aria-hidden="true">&nbsp;&nbsp;&nbsp;
	 							<form method="post" action="index.php?controller=search">
							<div class="dropdown-content dr_search">
	 								<input name="key" type="text"><input type="submit" value="Tìm">
	 							</div>
	 							</form>
	 						</li>
	 					</ul>
	 				</div>		
	 			</div>
	 			<!-- end header top -->
	 			<hr>
	 			<!-- navbar -->
	 			<?php include "view/frontend/navbar.php"; ?>
	 			<!-- end navbar -->
	 		</div>
	 		<!-- end header -->
	 		<!-- main -->
	 		 <?php
                    //neu ton tai duong dan khi lay bien controller tu url xuong(ghep thanh duong dan vat ly cua file controlle) thi load controller do ra
            if(file_exists($controller))
                include $controller;
            ?>
	 		<!-- end main -->
	 			
	 					<!-- footer -->
	 			<footer>
	 				<div class="container">
	 					<div class="row adr_lns">
	 						<div class="col-lg-4 adr_watch">
	 							<a href="#"><img src="public/upload/watch/logo.gif" alt="#">
	 								<p>WATCH</p>
	 							</a>
	 							<div class="adr_title">
	 								<ul>
	 									<li class="fa fa-map-marker" aria-hidden="true"><span>&nbsp;Số 18/245, Ngõ 245, đường Kênh, Phường Lộc Vượng, TP.Ninh Bình </span></li>
	 									<li class="fa fa-phone" aria-hidden="true"><a href="tel:0971881098"><span>&nbsp;0123456789</span></a></li>
	 									
	 								</ul>
	 							</div>
	 						</div>
	 						<div class="col-lg-4 list_product_ft">
	 							<b>Mua hàng</b>
	 							<ul>
	 								<li><a href="index.php?controller=category_watch_man">Nam</a></li>
	 								<li><a href="index.php?controller=category_watch_woman">Nữ</a></li>
	 								<li><a href="index.php?controller=category_spare_part">Phụ kiện</a></li>
	 								<li><a href="index.php?controller=all_category_watch">Sản phẩm mới</a></li>
	 							</ul>
	 						</div>
	 						
	 				<div onclick="topFunction()" id="myTop" title="Go to top"><p>Lên đầu trang --></p></div>

	 			</footer>
	 			<div class="lns">
	 					<p>LUC CUL</p>
	 				</div>
	 			<!-- end footer -->
	 		</body>
	 		<script type="text/javascript" src="public/frontend/js/jquery.js"></script>
	 		<script type="text/javascript" src="public/frontend/js/bootstrap.js"></script>
	 		<script type="text/javascript" src="public/frontend/js/wow.min.js"></script>
	 		<script type="text/javascript" src="public/frontend/slick-1.8.1/slick/slick.min.js"></script>
	 		<script type="text/javascript" src="public/frontend/slick-1.8.1/slick/slick.js"></script>
	 		<script type="text/javascript">		
	 			$(document).ready(function(){

	 				$('.slide').slick({
	 					slidesToShow: 1,
	 					slidesToScroll: 1,
	 					autoplay: true,
	 					autoplaySpeed: 3000,
	 					prevArrow: '',
	 					nextArrow: '',
	 				});
	 			});
	 				$(document).ready(function(){

	 				$('.slide_new_watch').slick({
	 					slidesToShow: 4,
	 					slidesToScroll: 1,
	 					autoplay: false,
	 					autoplaySpeed: 3000,
	 				});
	 			});
	 			$(document).ready(function(){

	 				$('.big_img').slick({
	 					slidesToShow: 1,
	 					slidesToScroll: 1,
	 					arrows: false,
	 					fade: true,
	 					asNavFor: '.small_img'
	 				});
	 				$('.small_img').slick({
	 					slidesToShow:4,
	 					slidesToScroll: 1,
	 					asNavFor: '.big_img',
	 					centerMode: true,
	 					prevArrow: '',
	 					nextArrow: '',
	 					focusOnSelect: true
	 				});
	 			});
	 				 			//Get the button:
mybutton = document.getElementById("myTop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0; 
}
	 		</script>
	 		</html>