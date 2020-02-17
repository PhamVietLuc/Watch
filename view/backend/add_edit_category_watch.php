<div class="col-md-8 col-xs-offset-2">	
	<div class="panel panel-primary">
		<div style="background-color: #335353;" class="panel-heading">Thêm sửa danh mục</div>
		<div class="panel-body">
		<form method="post" action="<?php echo $form_action; ?>">
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Name</div>
				<div class="col-md-10">
					<input type="text" value="<?php echo isset($record->name)?$record->name:''; ?>" name="name" class="form-control" required>
				</div>
			</div>
			<!-- end rows -->
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Danh mục cha</div>
				<div class="col-md-10">
					<select name="parent_id" class="form-control" style="width: 150px;">
					<option value="0"></option>
					<?php 
						//cap 0
					if(isset($record->parent_id))
						$parent = model::list_all("select * from category_watch where parent_id=0 and pk_category_watch_id <> $record->pk_category_watch_id");
					else
						$parent = model::list_all("select * from category_watch where parent_id=0");
						//print_r($parent);
						foreach($parent as $rows_parent):
					 ?>
						<option <?php if(isset($record->parent_id) && $rows_parent->pk_category_watch_id==$record->parent_id): ?> selected <?php endif; ?> value="<?php echo $rows_parent->pk_category_watch_id; ?>"><?php echo $rows_parent->name; ?></option>						
					<?php endforeach; ?>
					</select>
				</div>
			</div>
			<!-- end rows -->			
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2"></div>
				<div class="col-md-10">
					<input style="background-color: #335353;" type="submit" value="Process" class="btn btn-primary">
				</div>
			</div>
			<!-- end rows -->
		</form>
		</div>
	</div>
</div>