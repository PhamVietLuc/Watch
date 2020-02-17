<div class="col-md-8 col-xs-offset-2">	
	<div class="panel panel-primary">
		<div style="background-color: #335353;" class="panel-heading">S</div>
		<div class="panel-body">
		<form method="post" action="<?php echo $form_action; ?>">
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Họ và tên</div>
				<div class="col-md-10">
					<input type="text" value="<?php echo isset($record->name)?$record->name:""; ?>" name="name" class="form-control" required>
				</div>
			</div>
			<!-- end rows -->
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Liên hệ của khách hàng</div>
				<div class="col-md-10">
					<input type="text" value="<?php echo isset($record->comment)?$record->comment:""; ?>" name="comment" class="form-control" required>
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