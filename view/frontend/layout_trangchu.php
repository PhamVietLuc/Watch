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
	 				<span>	HOTLINE ĐẶT HÀNG:</span><a href="tel:0123456789">&nbsp; 0123 456 789</a>	
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
	 		<?php include "controller/frontend/controller_slide_top.php"; ?>
	 		<!-- main -->
	 		<div class="main">	
	 			<!-- new product -->
	 			<?php include "controller/frontend/controller_category_watch_new.php";?>
	 			<!-- end new product -->
	 			<!-- see more -->
	 			<?php include "view/frontend/see_more_watch.php"; ?>
	 			<!-- end see more -->
	 			<!-- for man -->
	 			<?php include "view/frontend/category_for_man.php"; ?>
	 			<!-- end for man -->
	 			<!-- sale_product -->
	 			<div class="sale_product container">
	 				<form action="#">
	 					<div class="title">
	 						<a href=""><p>Sản phẩm <b>Khuyến mãi</b></p></a>
	 						<div class="list_sale_product">
	 							<a href="#">Nam</a>/
	 							<a href="#">Nữ</a>/
	 							<a href="#">Phụ kiện</a>/
	 							<a href="#">Sản phẩm nổi bật</a>/
	 							<a href="#">Sản phẩm mới</a>
	 						</div>
	 					</div>
	 				</form>
	 				<form action="#">
	 					<div class="row slide_sale_product">
	 						<div class="sale_pr col-lg-3 col-sm-6 col-xs-12"><a href="#"><img src="image/dong-ho-mvmt-magnolia-master.jpg" alt=""></a>
	 							<div class="box_sale_pr">
	 								<p>-50%</p>
	 							</div>
	 							<div class="img_sale_pr_1"><a href="#"><img src="image/dong-ho-mvmt-magnolia-2-master.jpg" alt=""></a></div>
	 							<div class="info_product">
	 								<p>Gumental Rose</p>
	 								<span>1.999.999đ</span>
	 							</div>
	 							<div class="add_cart">	
	 								<a href="#">Thêm vào giỏ hàng</a>
	 							</div>
	 						</div>
	 						<div class="sale_pr col-lg-3 col-sm-6 col-xs-12"><a href="#"><img src="image/dong-ho-mvmt-magnolia-master.jpg" alt=""></a>
	 							<div class="box_sale_pr">
	 								<p>-50%</p>
	 							</div>
	 							<div class="img_sale_pr_1"><a href="#"><img src="image/dong-ho-mvmt-magnolia-2-master.jpg" alt=""></a></div>
	 							<div class="info_product">
	 								<p>Gumental Rose</p>
	 								<span>1.999.999đ</span>
	 							</div>
	 							<div class="add_cart">	
	 								<a href="#">Thêm vào giỏ hàng</a>
	 							</div>
	 						</div>
	 						<div class="sale_pr col-lg-3 col-sm-6 col-xs-12"><a href="#"><img src="image/dong-ho-mvmt-magnolia-master.jpg" alt=""></a>
	 							<div class="box_sale_pr">
	 								<p>-50%</p>
	 							</div>
	 							<div class="img_sale_pr_1"><a href="#"><img src="image/dong-ho-mvmt-magnolia-2-master.jpg" alt=""></a></div>
	 							<div class="info_product">
	 								<p>Gumental Rose</p>
	 								<span>1.999.999đ</span>
	 							</div>
	 							<div class="add_cart">	
	 								<a href="#">Thêm vào giỏ hàng</a>
	 							</div>
	 						</div>
	 						<div class="sale_pr col-lg-3 col-sm-6 col-xs-12"><a href="#"><img src="image/dong-ho-mvmt-magnolia-master.jpg" alt=""></a>
	 							<div class="box_sale_pr">
	 								<p>-50%</p>
	 							</div>
	 							<div class="img_sale_pr_1"><a href="#"><img src="image/dong-ho-mvmt-magnolia-2-master.jpg" alt=""></a></div>
	 							<div class="info_product">
	 								<p>Gumental Rose</p>
	 								<span>1.999.999</span>
	 							</div>
	 							<div class="add_cart">	
	 								<a href="#">Thêm vào giỏ hàng</a>
	 							</div>
	 						</div>
	 						<div class="sale_pr col-lg-3 col-sm-6 col-xs-12"><a href="#"><img src="image/dong-ho-mvmt-magnolia-master.jpg" alt=""></a>
	 							<div class="box_sale_pr">
	 								<p>-50%</p>
	 							</div>
	 							<div class="img_sale_pr_1"><a href="#"><img src="image/dong-ho-mvmt-magnolia-2-master.jpg" alt=""></a></div>
	 							<div class="info_product">
	 								<p>Gumental Rose</p>
	 								<span>1.999.999đ</span>
	 							</div>
	 							<div class="add_cart">	
	 								<a href="#">Thêm vào giỏ hàng</a>
	 							</div>
	 						</div>
	 						<div class="sale_pr col-lg-3 col-sm-6 col-xs-12"><a href="#"><img src="image/dong-ho-mvmt-magnolia-master.jpg" alt=""></a>
	 							<div class="box_sale_pr">
	 								<p>-50%</p>
	 							</div>
	 							<div class="img_sale_pr_1"><a href="#"><img src="image/dong-ho-mvmt-magnolia-2-master.jpg" alt=""></a></div>
	 							<div class="info_product">
	 								<p>Gumental Rose</p>
	 								<span>1.999.999đ</span>
	 							</div>
	 							<div class="add_cart">	
	 								<a href="#">Thêm vào giỏ hàng</a>
	 							</div>
	 						</div>
	 						<div class="sale_pr col-lg-3 col-sm-6 col-xs-12"><a href="#"><img src="image/dong-ho-mvmt-magnolia-master.jpg" alt=""></a>
	 							<div class="box_sale_pr">
	 								<p>-50%</p>
	 							</div>
	 							<div class="img_sale_pr_1"><a href="#"><img src="image/dong-ho-mvmt-magnolia-2-master.jpg" alt=""></a></div>
	 							<div class="info_product">
	 								<p>Gumental Rose</p>
	 								<span>1.999.999đ</span>
	 							</div>
	 							<div class="add_cart">	
	 								<a href="#">Thêm vào giỏ hàng</a>
	 							</div>
	 						</div>
	 					</div>
	 					<div style="text-align: center;" class="watch_all_product watch_sale">
	 						<a href="#">Xem tất cả sản phẩm khuyến mãi</a>
	 					</div>
	 				</form>
	 				<hr>
	 			</div>
	 			<!-- end sale_product -->
	 			<!-- banner -->
	 			<div class="banner_product">
	 				<div class="content_banner">
	 					<p>LNS watch</p>
	 				</div>
	 			</div>
	 			<div class="container"><hr></div>
	 			<!-- end banner -->
	 			<!-- news -->
	 			<div class="news">
	 				<div class="title">
	 					<a href="#"><p>Tin tức <b>LNS watch</b></p></a>
	 				</div>
	 				<div class="list_news_lns container">
	 					<form action="" method="post">
	 					<div class="row">
	 							<div class="col-lg-3 news_col">
	 								<div class="img_news">
	 									<a href="#"><img src="public/upload/watch/shop-dong-ho-seiko-chinh-hang-2-e1507789314715.jpg" alt=""></a>
	 								</div>
	 								<div class="content_news">
	 									<a href="#">
	 										<span>
	 											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, debitis.
	 										</span>
	 									</a>
	 								</div>
	 							</div>
	 							<div class="col-lg-3 news_col">
	 								<div class="img_news">
	 									<a href="#"><img src="public/upload/watch/shop-dong-ho-seiko-chinh-hang-2-e1507789314715.jpg" alt=""></a>
	 								</div>
	 								<div class="content_news">
	 									<a href="#">
	 										<span>
	 											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, debitis.
	 										</span>
	 									</a>
	 								</div>
	 							</div>
	 							<div class="col-lg-3 news_col">
	 								<div class="img_news">
	 									<a href="#"><img src="public/upload/watch/shop-dong-ho-seiko-chinh-hang-2-e1507789314715.jpg" alt=""></a>
	 								</div>
	 								<div class="content_news">
	 									<a href="#">
	 										<span>
	 											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, debitis.
	 										</span>
	 									</a>
	 								</div>
	 							</div>
	 							<div class="col-lg-3 news_col">
	 								<div class="img_news">
	 									<a href="#"><img src="public/upload/watch/shop-dong-ho-seiko-chinh-hang-2-e1507789314715.jpg" alt=""></a>
	 								</div>
	 								<div class="content_news">
	 									<a href="#">
	 										<span>
	 											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, debitis.
	 										</span>
	 									</a>
	 								</div>
	 							</div>
	 							
	 					</div>	
	 					<div style="text-align: center;" class="watch_all_product watch_news">
	 						<a href="#">Xem tất cả tin</a>
	 					</div>	
	 					</form>
	 				</div>
	 				<!-- end new -->
	 			</div>
	 			<footer>
	 				<div class="container">
	 					<div class="row adr_lns">
	 						<div class="col-lg-4 adr_watch">
	 							<a href="#"><img src="public/upload/watch/logo.gif" alt="#">
	 								<p>WATCH</p>
	 							</a>
	 							<div class="adr_title">
	 								<ul>
	 									<li class="fa fa-map-marker" aria-hidden="true"><span>&nbsp;Đại học Kinh tế Kỹ thuật - Công Nghiệp </span></li>
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
	 						
	 					</div>
	 				</div>
	 				
	 			</footer>
	 			<div class="lns">
	 					<p>LUC CUL</p>
	 				</div>
	 			<!-- Back to top -->
	 			<div onclick="topFunction()" id="myTop" title="Go to top"><p>Lên đầu trang --></p></div>
	 			<!-- end back to top -->
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

	 				$('.slide_new_product').slick({
	 					slidesToShow: 4,
	 					slidesToScroll: 1,
	 					autoplay: false,
	 					autoplaySpeed: 3000,
	 				});
	 			});
	 			$(document).ready(function(){

	 				$('.slide_sale_product').slick({
	 					slidesToShow: 4,
	 					slidesToScroll: 1,
	 					autoplay: false,
	 					autoplaySpeed: 3000,
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
  document.body.scrollTop = 0
  document.documentElement.scrollTop = 0; 
}
	 		</script>
	 		</html>