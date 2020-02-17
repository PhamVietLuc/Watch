<div class="container comment_box">
	 			<div class="row">
	 				<div class="h3">Đánh giá</div>
	 				<div class="csroll" style="overflow: scroll; height: 300px;">
	 					<?php foreach($cmt as $row): ?>
	 						<?php $getname = model::get_a_record("select fullname_customer from customer where customer_id = $row->customer_id "); ?>
	 						<b><?php echo $getname->fullname_customer; ?>:&nbsp;&nbsp;&nbsp;&nbsp;</b><?php echo $row->content; ?><br><br>
	 					<?php endforeach; ?>
	 					</div>
	 				<form action="" method="post">
	 					<textarea name="content" id="" cols="50" rows="1" placeholder="Viết đánh giá"></textarea>
	 					<br>
	 					<input type="submit" value="Đánh giá">
	 				</form>
	 			</div>
	 		</div>