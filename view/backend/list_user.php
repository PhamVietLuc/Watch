<table class="container">
  <tr>
    <td style="text-align: center; padding: 0; background-color: #edbf7d; color: white;"><a href="admin.php?controller=user&action=add"><h3>Thêm người dùng</h3></a></td>
  </tr>
    <tr>
      <th><h1>Họ và tên</h1></th>
      <th><h1>Email</h1></th>
      <?php if ($_SESSION["admin_id"] == 1) {?>
      <th><h1>Quản lý</h1></th>
    <?php }?>
    </tr>
  <tbody>
    <?php foreach ($data as $rows): ?>
    <tr>
      <td><?php echo $rows->username; ?></td>
      <td><?php echo $rows->email; ?></td>
      <?php if ($_SESSION["admin_id"] == 1) {?>
      <td style="text-align:center;">
            <a href="admin.php?controller=user&action=edit&id=<?php echo $rows->user_id; ?>">Edit</a>&nbsp;
            <a href="admin.php?controller=user&action=delete&id=<?php echo $rows->user_id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
          </td>
          <?php }?>
    </tr>
    <?php endforeach;?>
    <tr>
    <td colspan="3"> <style type="text/css">
        .pagination{padding:0px; margin:0px;}
      </style>
      <ul class="pagination">
        <li class="page"><a class="page-item" href="#">Trang</a></li>
        <?php for ($i = 1; $i <= $num_page; $i++): ?>
        <li class="page"><a class="page-item" href="admin.php?controller=user&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php endfor;?></td>
        </tr>
  </tbody>
</table>
