<table class="container-fluid">
  <tr>
    <td style="text-align: center; padding: 0; background-color: #edbf7d; color: white;"><a href="admin.php?controller=shoptop&action=add"><h3>Add shoptop</h3></a></td>
  </tr>
    <tr>
      <th><h1>STT</h1></th>
      <th><h1>Ảnh</h1></th>
      <th><h1>Tiêu đề 1</h1></th>
      <th><h1>Tiêu đề 2</h1></th>
      <th><h1>Quản lý</h1></th>
    </tr>
    <?php $stt = isset($_GET["p"]) ? ($_GET["p"]-1)*$record_per_page : 0; ?>
				<?php foreach($data as $rows): ?>
				<?php $stt++;  ?>
				<tr>
					<td style="text-align:center;"><?php echo $stt; ?></td>
					<td style="text-align:center;">
						<?php if(file_exists("public/upload/shoptop/".$rows->img)): ?>
							<img src="public/upload/shoptop/<?php echo $rows->img; ?>" style="width: 100px;">
						<?php endif; ?>
					</td>
					<td><?php echo $rows->title_1; ?></td>
					<td><?php echo $rows->title_2; ?></td>
					<td style="text-align:center;">
						<a href="admin.php?controller=shoptop&action=edit&id=<?php echo $rows->pk_shoptop_id; ?>">Edit</a>&nbsp;
						<a href="admin.php?controller=shoptop&action=delete&id=<?php echo $rows->pk_shoptop_id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
					</td>
				</tr>
    <?php endforeach; ?>
    <tr>
    <td colspan="3"> <style type="text/css">
        .pagination{padding:0px; margin:0px;}
      </style>
      <ul class="pagination">
        <li class="page"><a class="page-item" href="#">Trang</a></li>
        <?php for($i = 1; $i <= $num_page; $i++): ?>
        <li class="page"><a class="page-item" href="admin.php?controller=shoptop&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php endfor; ?></td>
        </tr>
</table>
