<div style="height: 700px;" class="container contact_customer ">
		<div class="title"><h1 style="font-size: 50px;">Liên hệ</h1></div>
		<h3>Mọi thắc mắc xin liên hệ tới số điện thoại <b>0971881098</b> và <b>0123456789</b>
		hoặc liên hệ tới hòm thư <b>lnswatch@gmail.com</b>
		</h3>
		<br>
		<br>
		<br>
		<br>
	<form action="" method="post">
		<div class="contact_online row">
			<div class="col-lg-12"><h1>
				<?php  if (isset($_GET["act"]) && $_GET["act"] == "success"){?>
						<h1 style="color: #e06a32;">Cảm ơn bạn đã ghóp ý với chúng tôi</h1>
						<br>
						<br>
						<br>
				<?php } ?>
			</h1></div>
			<div>
				<h3>Hoặc bạn có thể liên hệ trực tiếp:</h3>
			</div>
			<br>
						<br>
						<br>
			<div class="col-lg-3"><b>Tên khách hàng</b></div>
			<div class="col-lg-9"><input style="width: 500px; margin-bottom: 50px; height: 40px; font-size: 18px;" type="text" name="name"></div>
			<div class="col-lg-3"><b>Yêu cầu ghóp ý</b></div>
			<div class="col-lg-9"><textarea style="width: 500px; margin-bottom: 50px; height: 40px; font-size: 18px;" type="text" name="comment"></textarea></div>
			<div class="col-lg-3"></div>
			<div class="col-lg-9"><input class="button_dn" style="background: #86e5ee; width: 200px; text-align: center; border: none;" type="submit" value="Gửi"></div>
		</div>
	</form>
</div>