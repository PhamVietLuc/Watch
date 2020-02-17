<div class="col-md-8 col-xs-offset-2">	
	<div class="panel panel-primary">
		<div style="background-color: #335353;" class="panel-heading">Thêm khách hàng</div>
		<div class="panel-body">
		<form method="post" action="<?php echo $form_action; ?>">
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Họ và tên</div>
				<div class="col-md-10">
					<input type="text" value="<?php echo isset($record->fullname_customer)?$record->fullname_customer:""; ?>" name="fullname_customer" class="form-control" required>
				</div>
			</div>
			<!-- end rows -->
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Số điện thoại</div>
				<div class="col-md-10">
					<input type="text" value="<?php echo isset($record->phone_number_customer)?$record->phone_number_customer:""; ?>" name="phone_number_customer" class="form-control" required>
				</div>
			</div>
			<!-- end rows -->
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Địa chỉ</div>
				<div class="col-md-10">
					<input type="text" value="<?php echo isset($record->address_customer)?$record->address_customer:""; ?>" name="address_customer" class="form-control" required>
				</div>
			</div>
			<!-- end rows -->
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Email</div>
				<div class="col-md-10">
					<input type="email" value="<?php echo isset($record->email_customer)?$record->email_customer:""; ?>" name="email_customer" class="form-control" >
				</div>
			</div>
			<!-- end rows -->
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Password</div>
				<div class="col-md-10">
					<input type="password" name="password" class="form-control" <?php if(isset($record->email)): ?> placeholder="Không đổi password thì không nhập thông tin vào ô này" <?php endif; ?>>
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