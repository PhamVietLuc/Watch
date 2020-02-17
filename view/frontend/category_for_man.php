<div class="new_product container">
	 				<form action="#">
	 					<div class="title">
	 						<a href="index.php?controller=category_watch_man&id=1"><p>Dành cho <b>Nam</b></p></a>
	 						<div class="list_new_product">
	 							<a href="index.php?controller=category_watch_man&id=1">Nam</a>/
	 							<a href="index.php?controller=category_watch_woman&id=2">Nữ</a>/
	 							<a href="index.php?controller=category_spare_part&id=3">Phụ kiện</a>/
	 							<a href="index.php?controller=all_category_watch">Sản phẩm mới</a>
	 						</div>
	 					</div>
	 				</form>
	 				<form action="#">
	 					<div class="row slide_new_product">
	 						<?php
	 					$list_man = model::list_all("select * from  category_watch where parent_id=1");
	 					foreach ($list_man as $rows): 		
	 					?>
						<?php $data = model::list_all("select * from product_watch where fk_category_watch_id=$rows->pk_category_watch_id order by pk_watch_id"); ?>
	 						<?php foreach ($data as $rows):
                             ?>
	 						<div class="new_pr col-lg-3"><a href="index.php?controller=detail_watch&id=<?php echo $rows->pk_watch_id; ?>"><img src="public/upload/watch/<?php echo $rows->img_watch ?>" alt=""></a>
	 							<div class="img_new_pr_1"><a href="index.php?controller=detail_watch&id=<?php echo $rows->pk_watch_id; ?>"><img src="public/upload/watch/<?php echo $rows->img_watch2 ?>" alt=""></a></div>
	 							<div class="info_product">
	 								<p><?php echo $rows->name_watch; ?></p>
	 								<span><?php echo number_format($rows->price_watch); ?></span>
	 							</div>
	 							<div class="add_cart">	
	 								<a href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_watch_id; ?>">Thêm vào giỏ hàng</a>
	 							</div>
	 						</div>
	 					<?php endforeach; ?>
	 					<?php endforeach; ?>
	 					</div>
	 					<div class="watch_all_product">
	 						<a href="index.php?controller=cart&act=add&id=<?php echo $record->pk_watch_id; ?>">Xem tất cả dành cho nam</a>
	 					</div>
	 				</form>
	 				<hr>
	 			</div>