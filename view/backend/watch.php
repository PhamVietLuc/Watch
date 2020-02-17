<table class="container-fluid">
	 <?php if($_SESSION["admin_id"]==1) { ?>
  <tr>
    <td style="text-align: center; padding: 0; background-color: #edbf7d; color: white;"><a href="admin.php?controller=watch&action=add"><h3>Thêm sản phẩm</h3></a></td>
  </tr>
<?php } ?>
    <tr>
      <th><h1>STT</h1></th>
      <th><h1>Ảnh</h1></th>
      <th><h1>Ảnh 2</h1></th>
      <th><h1>Ảnh 3</h1></th>
      <th><h1>Ảnh 4</h1></th>
      <th><h1>Tiêu đề</h1></th>
      <th><h1>Màu sắc</h1></th>
      <th><h1>Màn hình hiển thị</h1></th>
      <th><h1>Đường kính</h1></th>
      <th><h1>Độ dày</h1></th>
      <th><h1>Chiều rộng dây</h1></th>
      <th><h1>Chất liệu mặt kính</h1></th>
      <th><h1>Độ kháng nước</h1></th>
      <th><h1>Chất liệu</h1></th>
      <th><h1>Thương hiệu</h1></th>
      <th><h1>Giá</h1></th>
      <th><h1>Số lượng</h1></th>
      <th><h1>Thuộc danh mục sản phẩm</h1></th>
      <?php if($_SESSION["admin_id"]==1) { ?>
      <th><h1>Quản lý</h1></th>
  <?php } ?>
    </tr>
    <?php $stt = isset($_GET["p"]) ? ($_GET["p"]-1)*$record_per_page : 0; ?>
				<?php foreach($data as $rows): ?>
				<?php $stt++;  ?>
				<tr>
					<td><?php echo $stt; ?></td>
					<td >
						<?php if(file_exists("public/upload/watch/".$rows->img_watch)): ?>
							<img src="public/upload/watch/<?php echo $rows->img_watch; ?>" style="width: 100px;">
						<?php endif; ?>
					</td>
					<td >
						<?php if(file_exists("public/upload/watch/".$rows->img_watch2)): ?>
							<img src="public/upload/watch/<?php echo $rows->img_watch2; ?>" style="width: 100px;">
						<?php endif; ?>
					</td>
					<td >
						<?php if(file_exists("public/upload/watch/".$rows->img_watch3)): ?>
							<img src="public/upload/watch/<?php echo $rows->img_watch3; ?>" style="width: 100px;">
						<?php endif; ?>
					</td>
					<td >
						<?php if(file_exists("public/upload/watch/".$rows->img_watch4)): ?>
							<img src="public/upload/watch/<?php echo $rows->img_watch4; ?>" style="width: 100px;">
						<?php endif; ?>
					</td>
					<td><?php echo $rows->name_watch; ?></td>
					<td><?php echo $rows->color_watch; ?></td>
					<td><?php echo $rows->display_watch; ?></td>
					<td><?php echo $rows->diameter_watch; ?>mm</td>
					<td><?php echo $rows->thickness_watch; ?>mm</td>
					<td><?php echo $rows->width_strap_watch; ?>mm</td>
					<td><?php echo $rows->material_glass_watch; ?></td>
					<td><?php echo $rows->water_resistant_watch; ?>ATM</td>
					<td><?php echo $rows->material_watch; ?></td>
					<td><?php echo $rows->brand_name_watch; ?></td>
					<td><?php echo number_format($rows->price_watch); ?></td>
					<td><?php echo $rows->count_watch; ?></td>
					<td >
						<?php 
							//lay 1 ban ghi
							$product = model::get_a_record("select name from category_watch where pk_category_watch_id=$rows->fk_category_watch_id");
							echo isset($product->name)?$product->name:"";
						 ?>
					</td>
					<?php if($_SESSION["admin_id"]==1) { ?>
					<td>
						<a href="admin.php?controller=watch&action=edit&id=<?php echo $rows->pk_watch_id; ?>">Edit</a>&nbsp;
						<a href="admin.php?controller=watch&action=delete&id=<?php echo $rows->pk_watch_id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
					</td>
				<?php } ?>
				</tr>
    <?php endforeach; ?>
    <tr>
    <td colspan="4"> <style type="text/css">
        .pagination{padding:0px; margin:0px;}
      </style>
      <ul class="pagination">
        <li class="page"><a class="page-item" href="#">Trang</a></li>
        <?php for($i = 1; $i <= $num_page; $i++): ?>
        <li class="page"><a class="page-item" href="admin.php?controller=watch&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php endfor; ?>
    </ul>
<ul class="Tonggia">
				<li><h3>Tổng tiền:</h3></li>
				<li>
					<?php 
					  $total = 0;
		    foreach($data as $rows){
		        $total +=$rows->price_watch;
		    }
		    echo "<h3>".number_format($total)."đ"."</h3>";
					 ?>
				</li>
			</ul></td>
        </tr>
    
</table>
