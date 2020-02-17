<div class="col-md-8 col-xs-offset-2">	
	<div class="panel panel-primary">
		<div style="background-color: #335353;" class="panel-heading">Thêm sửa người dùng</div>
		<div class="panel-body">
		<form method="post" action="<?php echo $form_action; ?>">
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Username</div>
				<div class="col-md-10">
					<input type="text" value="<?php echo isset($record->username)?$record->username:""; ?>" name="username" class="form-control" required>
				</div>
			</div>
			<!-- end rows -->
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Email</div>
				<div class="col-md-10">
					<input type="email" value="<?php echo isset($record->email)?$record->email:""; ?>" name="email" class="form-control" <?php if(isset($record->email)): ?> disabled <?php else: ?> required <?php endif; ?>>
				</div>
			</div>
			<!-- end rows -->
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Password</div>
				<div class="col-md-10">
					<input type="password" name="password" class="form-control" <?php if(isset($record->email)): ?> placeholder="Không đổi password thì không nhập thông tin vào ô textbox này" <?php else: ?> required <?php endif; ?>>
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
			<!-- row -->
      <div class="row" style="margin-top:5px;">
        <div class="col-md-3"></div>
        <div class="col-md-9">
          <input type="checkbox" <?php if(isset($record->admin_id)&&$record->admin_id==1): ?> checked <?php endif; ?> name="admin_id" id="admin_id"> <label for="admin_id">Cấp quyền admin</label>
        </div>
      </div>
      <!-- end row -->
		</form>
		</div>
	</div>
</div>