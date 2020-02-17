<div class="new_product container">
	 					<div class="title">
	 						<a href="index.php?controller=all_category_watch"><p>Sản phẩm <b>Mới</b></p></a>
	 						<div class="list_new_product">
	 							<a href="index.php?controller=category_watch_man&id=1">Nam</a>/
	 							<a href="index.php?controller=category_watch_woman&id=2">Nữ</a>/
	 							<a href="index.php?controller=category_spare_part&id=3">Phụ kiện</a>/
	 							<a href="#">Sản phẩm mới</a>
	 						</div>
	 					</div>
	 					<div class="row slide_new_product">
	 						<?php foreach ($data as $rows):
	 							?>
	 						<div class="new_pr col-lg-3"><a href="index.php?controller=detail_watch&id=<?php echo $rows->pk_watch_id; ?>"><img src="public/upload/watch/<?php echo $rows->img_watch; 
	 						 ?>" alt=""></a>
	 							<div class="img_new_pr_1"><a href="index.php?controller=detail_watch&id=<?php echo $rows->pk_watch_id; ?>"><img src="public/upload/watch/<?php echo $rows->img_watch2; 
	 						 ?>" alt=""></a></div>
	 							<div class="info_product">
	 								<p><?php echo $rows->name_watch; ?></p>
	 								<span><?php echo number_format($rows->price_watch);  ?>đ</span>
	 							</div>
	 							<div class="add_cart">	
	 								<a href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_watch_id; ?>">Thêm vào giỏ hàng</a>
	 							</div>
	 						</div>
	 					<?php endforeach; ?>
	 					</div>
	 					<div class="watch_all_product">
	 						<a href="index.php?controller=all_category_watch">Xem tất cả sản phẩm mới</a>
	 					</div>
	 			</div>
	 			</div>