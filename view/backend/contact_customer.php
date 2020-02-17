<table class="container">
    <tr>
      <th><h1>Họ và tên</h1></th>
      <th><h1>Liên hệ của khách hàng</h1></th>
      <?php if($_SESSION["admin_id"]==1) { ?>
      <th>
        <h1>Quản lý</h1>
      </th>
    <?php } ?>
    </tr>
  <tbody>
    <?php foreach ($data as $rows): ?>
    <tr>
      <td><?php echo $rows->name; ?></td>
      <td><?php echo $rows->comment; ?></td>
      <?php if($_SESSION["admin_id"]==1) { ?>
      <td style="text-align:center;">
            <a href="admin.php?controller=contact_customer&action=delete&id=<?php echo $rows->contact_id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
          </td>
        <?php } ?>
    </tr>
    <?php endforeach; ?>
    <tr>
    <td colspan="2"> <style type="text/css">
        .pagination{padding:0px; margin:0px;}
      </style>
      <ul class="pagination">
        <li class="page"><a class="page-item" href="#">Trang</a></li>
        <?php for($i = 1; $i <= $num_page; $i++): ?>
        <li class="page"><a class="page-item" href="admin.php?controller=contact_customer&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php endfor; ?></td>
        </tr>
  </tbody>
</table>
