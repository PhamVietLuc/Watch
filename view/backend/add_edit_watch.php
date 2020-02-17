<div class="col-md-8 col-xs-offset-2">
	<div class="panel panel-primary">
		<div style="background-color: #335353;" class="panel-heading">Thêm sản phẩm</div>
		<div class="panel-body">
			<!-- muon upload anh thi trong the form phai co thuoc tinh: enctype="multipart/form-data" -->
			<form method="post" action="<?php echo $form_action; ?>" enctype= "multipart/form-data">
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Tiêu đề</div>
				<div class="col-md-9">
					<input type="text" name="name_watch" class="form-control" value="<?php echo isset($record->name_watch)?$record->name_watch:""; ?>">
			</div>
			</div>
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Màu sắc</div>
				<div class="col-md-9">
					<input type="text" name="color_watch" class="form-control" value="<?php echo isset($record->color_watch)?$record->color_watch:""; ?>">
			</div>
			</div>
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Màn hình hiển thị</div>
				<div class="col-md-9">
					<input type="text" name="display_watch" class="form-control" value="<?php echo isset($record->display_watch)?$record->display_watch:""; ?>">
			</div>
			</div>
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Đường kính</div>
				<div class="col-md-9">
					<input type="text" name="diameter_watch" class="form-control" value="<?php echo isset($record->diameter_watch)?$record->diameter_watch:""; ?>">
			</div>
			</div>
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Độ dày</div>
				<div class="col-md-9">
					<input type="text" name="thickness_watch" class="form-control" value="<?php echo isset($record->thickness_watch)?$record->thickness_watch:""; ?>">
			</div>
			</div>
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Chiều rộng dây</div>
				<div class="col-md-9">
					<input type="text" name="width_strap_watch" class="form-control" value="<?php echo isset($record->width_strap_watch)?$record->width_strap_watch:""; ?>">
			</div>
			</div>
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Chất liệu mặt kính</div>
				<div class="col-md-9">
					<input type="text" name="material_glass_watch" class="form-control" value="<?php echo isset($record->material_glass_watch)?$record->material_glass_watch:""; ?>">
			</div>
			</div>
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Độ chống nước</div>
				<div class="col-md-9">
					<input type="text" name="water_resistant_watch" class="form-control" value="<?php echo isset($record->water_resistant_watch)?$record->water_resistant_watch:""; ?>">
			</div>
			</div>
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Chất liệu</div>
				<div class="col-md-9">
					<input type="text" name="material_watch" class="form-control" value="<?php echo isset($record->material_watch)?$record->material_watch:""; ?>">
			</div>
			</div>
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Thương hiệu</div>
				<div class="col-md-9">
					<input type="text" name="brand_name_watch" class="form-control" value="<?php echo isset($record->brand_name_watch)?$record->brand_name_watch:""; ?>">
			</div>
			</div>
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Giá</div>
				<div class="col-md-9">
					<input type="text" name="price_watch" class="form-control" value="<?php echo isset($record->price_watch)?$record->price_watch:""; ?>">
				</div>
			</div>
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Số lượng</div>
				<div class="col-md-9">
					<input type="text" name="count_watch" class="form-control" value="<?php echo isset($record->count_watch)?$record->count_watch:""; ?>">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Thuộc danh mục</div>
				<div class="col-md-9">
					<select name="fk_category_watch_id">
						<?php 
							$list = model::list_all("select * from category_watch where parent_id=0");
							foreach($list as $rows):
						 ?>
						<option <?php if(isset($record->fk_category_watch_id)&&$record->fk_category_watch_id==$rows->pk_category_watch_id): ?> selected <?php endif; ?> value="<?php echo $rows->pk_category_watch_id; ?>"><?php echo $rows->name; ?></option>
						<!-- cap con  -->
						<?php 
							$list_child = model::list_all("select * from category_watch where parent_id=$rows->pk_category_watch_id");
							foreach($list_child as $rows_child):
						 ?>
						<option <?php if(isset($record->fk_category_watch_id)&&$record->fk_category_watch_id==$rows_child->pk_category_watch_id): ?> selected <?php endif; ?> value="<?php echo $rows_child->pk_category_watch_id; ?>">-----<?php echo $rows_child->name; ?></option>
						<!-- cap con  -->
						
						<?php endforeach; ?>
						<?php endforeach; ?>				
					</select>
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Miêu tả</div>
				<div class="col-md-9">
					<textarea name="short_description_watch" class="form-control" style="height:250px;">	
					<?php echo isset($record->short_description_watch)?$record->short_description_watch:""; ?>					
					</textarea>
					<script type="text/javascript">
						CKEDITOR.replace("short_description_watch");
					</script>
				</div>
			</div>
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Nội dung</div>
				<div class="col-md-9">
					<textarea name="info_detail_watch" class="form-control" style="height:250px;">	
					<?php echo isset($record->info_detail_watch)?$record->info_detail_watch:""; ?>					
					</textarea>
					<script type="text/javascript">
						CKEDITOR.replace("info_detail_watch");
					</script>
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Ảnh 1</div>
				<div class="col-md-9">
					<input type="file" name="img_watch">
				</div>
			</div>
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Ảnh 2</div>
				<div class="col-md-9">
					<input type="file" name="img_watch2">
				</div>
			</div>
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Ảnh 3</div>
				<div class="col-md-9">
					<input type="file" name="img_watch3">
				</div>
			</div>
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Ảnh 4</div>
				<div class="col-md-9">
					<input type="file" name="img_watch4">
				</div>
			</div>
			<!-- end row -->			
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3"></div>
				<div class="col-md-9">
					<input style="background-color: #335353;" type="submit" class="btn btn-primary" value="Process">
				</div>
			</div>
			<!-- end row -->
			</form>
		</div>
	</div>
</div>