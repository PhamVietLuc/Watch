<?php $search_name = isset($_POST["search_name"]) ? $_POST["search_name"] : ""; ?>
	<div class="col-lg-3">
	 						<!-- end list detail product -->
	 						<div class="classify">
	 							<div class="content_classify">
	 								<p>Tìm kiếm theo</p>
	 							</div>
	 							<div class="classify_detail">
	 								<div class="title_classify">Thương hiệu</div>
	 								<form method="post" action="index.php?controller=search_name&search_name=<?php echo $search_name; ?>">
	 								<ul>
	 									<li><label for="hublot"><input name="search_name" type="radio" value="Hublot">Hublot</label></li>
	 									<li><label for="Casio"><input name="search_name" type="radio" value="Casio">Casio</label></li>
	 									<li><label for="Disney"><input name="search_name" type="radio" value="Disney">Disney</label></li>
	 									<li><label for="Avenger"><input name="search_name" type="radio" value="Avenger">Avenger</label></li>
	 									<li><label for="Curnon"><input name="search_name" type="radio" value="Curnon">Curnon</label></li>
	 									<input type="submit" value="Tìm kiếm">
	 								</ul>
	 								</form>
	 							</div>
	 						</div>
	 							<div class="classify_detail">
	 								<div class="title_classify">Giá sản phẩm</div>
	 								<form action="index.php?controller=search_price" method="post">
	 								<ul>
	 									<li><label for="price-1-000-000d-4-000-000"><input name="search_price" type="radio" value="100000 AND 1000000">100.000đ - 1.000.000đ</label></li>
	 									<li><label for="price-4-000-000d-8-000-000"><input name="search_price" type="radio" value="1000000 AND 10000000">1.000.000đ - 10.000.000đ</label></li>
	 									<li><label for="price-1-000-000d-4-000-000"><input name="search_price" type="radio" value="10000000 AND 100000000">10.000.000đ - 100.000.000đ</label></li>
	 									<li><label for="price-12-000-000d-16-000-000"><input name="search_price" type="radio" value="100000000 AND 1000000000">100.000.000đ - 1tỷ đ</label></li>
	 									<li><label for="price-1-000-000d-4-000-000"><input name="search_price" type="radio" value="1000000000 AND 10000000000">1tỷ đ - 100 tỷ đ</label></li>
	 									<input type="submit" value="Tìm kiếm">
	 								</ul>
	 								</form>
	 							</div>
	 							<div class="classify_detail">
	 								<div class="title_classify">Chất liệu</div>
	 								<form action="index.php?controller=search_material" method="post">
	 								<ul>
	 									<li><label for="Bạc"><input name="search_material"  type="radio" value="Bạc">Bạc</label></li>
	 									<li><label for="Vàng"><input name="search_material"  type="radio" value="Vàng">Vàng</label></li>
	 									<li><label for="Thép không gỉ"><input name="search_material"  type="radio" value="Thép không gỉ">Thép không gỉ</label></li>
	 									<input type="submit" value="Tìm kiếm">
	 								</ul>
	 								</form>
	 							</div>
	 						</div>