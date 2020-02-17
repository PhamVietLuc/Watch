<div class="main_detail">
	 			<div class="container">
	 				<div class="cul_watch">
	 					<hr>
	 				</div>
	 				<div class="row">
	 					<div class="col-lg-6">
	 						<div class="big_img">
	 							<img src="public/upload/watch/<?php echo $record->img_watch ?>" alt="<?php echo $record->name_watch; ?>">
	 							<img src="public/upload/watch/<?php echo $record->img_watch2 ?>" alt="<?php echo $record->name_watch; ?>">
	 							<img src="public/upload/watch/<?php echo $record->img_watch3 ?>" alt="<?php echo $record->name_watch; ?>">
	 							<img src="public/upload/watch/<?php echo $record->img_watch4 ?>" alt="<?php echo $record->name_watch; ?>">
	 						</div>
	 						<div class="small_img">
	 							<img src="public/upload/watch/<?php echo $record->img_watch ?>" alt="<?php echo $record->name_watch; ?>">
	 							<img src="public/upload/watch/<?php echo $record->img_watch2 ?>" alt="<?php echo $record->name_watch; ?>">
	 							<img src="public/upload/watch/<?php echo $record->img_watch3 ?>" alt="<?php echo $record->name_watch; ?>">
	 							<img src="public/upload/watch/<?php echo $record->img_watch4 ?>" alt="<?php echo $record->name_watch; ?>">
	 						</div>
	 					</div>
	 					<div class="col-lg-6 info-detail">
	 						<ul>
	 							<li><?php echo $record->name_watch; ?></li>
	 							<li> Thương hiệu: <span><?php echo $record->brand_name_watch; ?></span></li>
	 							<li><?php echo number_format($record->price_watch) ?>đ</li>
	 							<li>Tình trạng: <span><?php if($record->count_watch!=0){?>
	 								<?php echo "Còn hàng( $record->count_watch)"; ?>
	 							<?php }else {?>
	 								<span style="color:red;">Hết hàng</span>
	 							<?php } ?>
	 							</span></li>
	 							<li>
	 								<li><a href="index.php?controller=cart&act=add&id=<?php echo $record->pk_watch_id; ?>"><h4>Thêm vào giỏ hàng</h4>
	 									<p>Đặt mua giao hàng tận nơi</p>
	 								</a>
	 							</li>
	 							<li>Gọi đặt mua:<a href="tel:0971881098">0971881098</a>(miễn phí 8:30 - 21:30)</li>
	 							<li><span class="fa fa-truck" aria-hidden="true"></span>MIỄN PHÍ VẬN CHUYỂN VỚI ĐƠN HÀNG <span>TỪ 700.000Đ</span></li>
	 							<li><span class="fa fa-shield" aria-hidden="true" ></span>BẢO HÀNH 10 NĂM DO LỖI NHÀ SẢN XUẤT</li>
	 							<li><span class="fa fa-registered" aria-hidden="true"></span>CAM KẾT 100% CHÍNH HÃNG</li>
	 						</ul>
	 					</div>
	 				</div>
	 				<div class="title_other_info">
	 					<ul class="nav nav-tabs">
	 						<li class="active"><a data-toggle="tab" href="#home">Mô tả</a></li>
	 						<li><a data-toggle="tab" href="#menu1">Giới thiệu</a></li>
	 					</ul>

	 					<div class="tab-content">
	 						<div id="home" class="tab-pane fade in active">
	 							<p><?php echo $record->short_description_watch; ?></p>
	 							<table border="1" cellpadding="20" width="100%" style="border-collapse: collapse;">
	 						<tr>
	 							<td>Loại máy</td>
	 							<td><?php echo $record->name_watch; ?></td>
	 						</tr>
	 						<tr>
	 							<td>Hiển thị</td>	
	 							<td><?php echo $record->display_watch; ?></td>
	 						</tr>
	 						<tr>
	 							<td>Màu sắc</td>
	 							<td><?php echo $record->color_watch; ?></td>
	 						</tr>
	 						<tr>
	 							<td>Chất liệu vỏ</td>
	 							<td><?php echo $record->material_watch; ?></td>
	 						</tr>
	 						<tr>
	 							<td>Độ dày vỏ</td>
	 							<td><?php echo $record->thickness_watch; ?>mm</td>
	 						</tr>
	 						<tr>
	 							<td>Bán kính </td>
	 							<td><?php echo $record->diameter_watch; ?>mm</td>
	 						</tr>
	 						<tr>
	 							<td>Chiều rộng dây đeo</td>
	 							<td><?php echo $record->width_strap_watch; ?>mm</td>
	 						</tr>
	 						<tr>
	 							<td>Chất liệu mặt kính</td>
	 							<td><?php echo $record->material_glass_watch; ?></td>
	 						</tr>
	 						<tr>
	 							<td>Khả năng chịu nước</td>
	 							<td><?php echo $record->water_resistant_watch; ?>ATM</td>
	 						</tr>
	 					</table>
	 						</div>
	 						<div id="menu1" class="tab-pane fade">
	 							<p><?php echo $record->info_detail_watch; ?>.</p>
	 						</div>
	 					</div>
	 				</div>
	 			</div>
	 		</div>
	 		<!-- comment -->
	 		<?php include "controller/frontend/controller_comment.php"; ?>
	 		<!-- watch relation -->
	 		<div class="new_watch container watch_relation ">
	 					<div class="title">
	 						<a ><p>Sản phẩm <b>Liên quan</b></p></a>
	 					</div>
	 					<div class="row slide_new_watch">
	 						<?php $cate = model::list_all("select * from product_watch where fk_category_watch_id=$record->fk_category_watch_id"); ?>
	 						<?php foreach($cate as $row): ?>
	 						<div class="new_pr col-lg-3"><a href="#"><img src="public/upload/watch/<?php echo $row->img_watch;?>" alt=""></a>
	 							<div class="img_new_pr_1"><a href="#"><img src="public/upload/watch/<?php echo $row->img_watch2;?>" alt=""></a></div>
	 							<div class="info_watch">
	 								<p><?php echo $row->name_watch; ?></p>
	 								<span><?php echo number_format($row->price_watch); ?>đ</span>
	 							</div>
	 							<div class="add_cart">	
	 								<a href="#">Thêm vào giỏ hàng</a>
	 							</div>
	 						</div>
	 					<?php endforeach; ?>
	 							<div class="add_cart">	
	 								<a href="#">Thêm vào giỏ hàng</a>
	 							</div>
	 						</div>
	 					</div>
	 			</div>