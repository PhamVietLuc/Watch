<div class="cart container">
	<div class="title_cart">
		<p>Giỏ hàng</p>
	</div>
		<div class="info_cart_order">
			<div class="row">
				<?php if(count($_SESSION["cart"]) > 0) { ?>
				<form method="post" action="index.php?controller=cart&act=update">
					<div class="img_product col-lg-9">
						<?php foreach ($_SESSION["cart"] as $rows) : ?>
							<ul>
								<li><a href="index.php?controller=detail_watch&id=<?php echo $rows["pk_watch_id"]; ?>"><img src="public/upload/watch/<?php echo $rows["img_watch"]; ?>" alt=""></a></li>
								<li><a href="index.php?controller=detail_watch&id=<?php echo $rows["pk_watch_id"]; ?>"><?php echo $rows["name_watch"]; ?></a><br>
									<a style="color: #c86fc9; font-size: 12px;"  href="index.php?controller=cart&act=delete&id=<?php echo $rows["pk_watch_id"]; ?>">Xóa</a>
								</li>
								<!-- price -->
								<li><a href=""><?php echo number_format($rows["price_watch"]); ?>đ</a></li>
								<!-- count -->
								<li><input type="number" min="1" class="input-control" value="<?php echo $rows["number"]; ?>" name="watch_<?php echo $rows["pk_watch_id"]; ?>" required="Không thể để trống"></li>
								<!-- cost -->
								<li>---><?php echo number_format($rows["price_watch"]*$rows["number"]); ?>đ</li>
							</ul>
						<?php endforeach; ?>
						<div class="del_all"><a href="index.php?controller=cart&act=destroy"><i class="fa fa-trash" aria-hidden="true"> Xóa hết</i></a>
							<input style="background-color: #c86fc9; color: white;"   type="submit" class="button pull-right" value="Cập nhật giá">
						</div>
					</div>	
					<div class="payment_cart col-lg-3">
						<div class="into_money">
							<span>Tổng thanh toán:</span> <span><?php echo number_format($this->cart_total()); ?>đ</span>
						</div>
						<div class="watch_all_product" style="text-align: center;">
							<?php if(count($_SESSION["cart"]) > 0): ?><a href="index.php?controller=checkout">Đặt hàng</a><?php endif; ?>
						</div>
						<div class="watch_all_product" style="text-align: center;" >
							<a href="index.php">Tiếp tục mua hàng</a>
						</div>
					</div>
				</form>
				<?php } else {?>
					<h1 style="text-align: center; color: ">Ôi không!!</h1>
					<h1 style="text-align: center;">Chả có sản phẩm nào ở giỏ hàng =))))</h1>
					<p style="text-align: center;">Vui lòng chọn <a href="index.php?controller=all_category_watch"><b>SẢN PHẨM</b></a> vào giỏ hàng</p>
	<?php } ?>
			</div>
		</div>
</div>