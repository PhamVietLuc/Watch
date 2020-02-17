<div class="col-md-10 col-xs-offset-1">	
	<div class="panel panel-primary">
		<div style="background-color: #335353;" class="panel-heading">Quản lý đơn hàng</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<tr style="background-color: black; color:white">
					<th>Tên khách hàng</th>
					<th>Ngày mua</th>
					<th>Đơn giá</th>
					<th style="width: 150px;">Trạng thái</th>
					<th style="width: 200px">Quản lý</th>
					<th>Xuất hóa đơn ra excel</th>
				</tr>
				<?php 
					foreach($arr as $rows)
					{
				 ?>
				<tr>
					<td><?php echo $rows->fullname_customer; ?></td>
					<td style="text-align: center;">
					<?php 
						$date = date_create($rows->time_buying);
						echo date_format($date,"d/m/Y"); 
					?></td>
					<td style="text-align: center;"><?php echo number_format($rows->cost); ?>đ</td>
					<td style="text-align: center;">
						<?php echo $rows->state==1?"Đã giao hàng":"<span style='color:red;'>Chưa giao hàng</span>" ?>
					</td>
					<td style="text-align: center;">
					<a href="admin.php?controller=order_detail&order_id=<?php echo $rows->order_id; ?>">Chi tiết</a>
					&nbsp;&nbsp;
						<a onclick="return window.confirm('Are you sure?');" href="admin.php?controller=order&act=delete&id=<?php echo $rows->order_id; ?>">Delete</a>
					</td>
					<td style="text-align: center;">
						<a href="export.php?order_id=<?php echo $rows->order_id; ?>">Xuất</a>
					</td>
				</tr>
				<?php } ?>
			</table>
			<style type="text/css">
				.pagination{padding: 0px; margin:0px;}
			</style>
			<ul class="pagination pull-right">
				<li><a href="#">Trang</a></li>
				<?php 
					for($i = 1; $i<=$num_page; $i++)
					{
				 ?>
				<li <?php echo isset($_GET["p"])&&$_GET["p"]==$i ? "class='active'":""; ?> ><a href="admin.php?controller=order&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php } ?>
			</ul>
			<style type="text/css">
				.Tonggia li{
					display: inline-block;
					list-style-type: none;
				}
			</style>
			<ul class="Tonggia">
				<li><h3>Doanh thu:</h3></li>
				<li>
					<?php 
					  $total = 0;
		    foreach($tong as $rows){
		        $total +=$rows->cost;
		    }
		    echo "<h3>".number_format($total)."đ"."</h3>";
					 ?>
				</li>
			</ul>
		</div>
	</div>
</div>