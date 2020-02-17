<div class="list_product container">
	 				<div class="row">
	 					<?php include "view/frontend/list_menu.php"; ?>
	 					<!-- product -->
	 					<div class="col-lg-9">
	 						<?php foreach ($data as $rows):
                             ?>
						<div class="new_pr col-lg-4"><a href="index.php?controller=detail_watch&id=<?php echo $rows->pk_watch_id; ?>"><img src="public/upload/watch/<?php echo $rows->img_watch; ?>" alt=""></a>
	 							<div class="img_new_pr_1"><a href="index.php?controller=detail_watch&id=<?php echo $rows->pk_watch_id; ?>"><img src="public/upload/watch/<?php echo $rows->img_watch2; ?>" alt=""></a></div>
	 							<div class="info_product">
	 								<p><?php echo $rows->name_watch; ?></p>
	 								<span><?php echo number_format($rows->price_watch); ?>đ</span>
	 							</div>
	 							<div class="add_cart">	
	 								<a href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_watch_id; ?>">Thêm vào giỏ hàng</a>
	 							</div>
	 						</div>
	 					<?php endforeach; ?>
	 					</div>
	 					<div class="pagination" style="float: right;">
	 					 <ul class="pagination pull-right" style="margin-top: 0px !important; padding-right: 15px;">
                    <li><a href="">Trang</a></li>
                    <?php for($i = 1; $i<=$num_page; $i++): ?>
                    <li><a href="index.php?controller=category_watch_child_man&id=<?php echo $id; ?>&p=<?php echo $i;?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
	 				</div>
	 			</div>
	 			</div>