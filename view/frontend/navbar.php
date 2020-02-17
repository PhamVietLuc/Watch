<div class="navbar">
	<ul>
		<li><a href="index.php">Trang chủ</a></li>
		<li><a href="#">Giới thiệu</span></a>
		</li>
		<?php 
		$list_man = model::list_all("select * from  category_watch where parent_id=1")?>
		<li><a href="index.php?controller=category_watch_man&id=1">Nam <span class="fa fa-angle-down" aria-hidden="true"></span> </a>
			<div class="dropdown-content">
				<?php foreach($list_man as $rows): 
					?>
					<a href="index.php?controller=category_watch_child_man&id=<?php echo $rows->pk_category_watch_id; ?>"><?php echo $rows->name; ?></a>
					<hr>
				<?php endforeach; ?>
				<hr>
			</div>
		</li>
		<?php $list_woman = model::list_all("select * from  category_watch where parent_id=2")?> 
		<li><a href="index.php?controller=category_watch_woman&id=2">Nữ <span class="fa fa-angle-down" aria-hidden="true"></span> </a>
			<div class="dropdown-content">
				<?php foreach($list_woman as $rows): 
					?>
					<a href="index.php?controller=category_watch_child_woman&id=<?php echo $rows->pk_category_watch_id; ?>"><?php echo $rows->name; ?></a>
					<hr>
				<?php endforeach; ?>
			</div>
		</li>
		<?php $list_spare_part = model::list_all("select * from  category_watch where parent_id=3")?> 
		<li><a href="index.php?controller=category_spare_part&id=3">Phụ kiện <span class="fa fa-angle-down" aria-hidden="true"></span> </a>
			<div class="dropdown-content">
				<?php foreach($list_spare_part as $rows): 
					?>
					<a href="index.php?controller=category_child_spare_part&id=<?php echo $rows->pk_category_watch_id; ?>"><?php echo $rows->name; ?></a>
					<hr>
				<?php endforeach; ?>
			</div>
		</li>
		<li><a href="#">Tin tức <span class="fa fa-angle-down" aria-hidden="true"></span> </a>
			<div class="dropdown-content">
				<a href="#">Tin tức</a>
				<hr>
				<a href="#">Tin tức</a>
				<hr>
				<a href="#">Tin tức</a>
				<hr>
				<a href="#">Tin tức</a>
				<hr>
				<a href="#">Tin tức</a>
			</div>
		</li>
		<li><a href="index.php?controller=contact_customer">Liên hệ</a></li>
	</ul>
</div>