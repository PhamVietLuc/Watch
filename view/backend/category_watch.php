<table class="container">
  <?php if($_SESSION["admin_id"]==1) { ?>
  <tr>
    <td style="text-align: center; padding: 0; background-color: #edbf7d; color: white;"><a href="admin.php?controller=category_watch&action=add"><h3>Thêm danh mục</h3></a></td>
  </tr>
  <?php } ?>
    <tr>
      <th><h1>Tên danh mục Đồng hồ</h1></th>
      <?php if($_SESSION["admin_id"]==1) { ?>
      <th><h1>Quản lý</h1></th>
    <?php } ?>
    </tr>
  <tbody>
    <?php foreach ($data as $rows): ?>
    <tr>
      <td><?php echo $rows->name; ?></td>
      <?php if($_SESSION["admin_id"]==1) { ?>
      <td style="text-align:center;">
            <a href="admin.php?controller=category_watch&action=edit&id=<?php echo $rows->pk_category_watch_id; ?>">Edit</a>&nbsp;
            <a href="admin.php?controller=category_watch&action=delete&id=<?php echo $rows->pk_category_watch_id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
          </td>
        <?php } ?>
    </tr>
    <!-- hien thi danh muc con -->
          <?php 
            $child = model::list_all("select * from category_watch where parent_id=$rows->pk_category_watch_id");
            foreach($child as $rows_child):
           ?>
           <tr>
          <td>----- <?php echo $rows_child->name; ?></td>
          <?php if($_SESSION["admin_id"]==1) { ?>
          <td style="text-align:center">
            <a href="admin.php?controller=category_watch&action=edit&id=<?php echo $rows_child->pk_category_watch_id; ?>">Edit</a>&nbsp;
            <a href="admin.php?controller=category_watch&action=delete&id=<?php echo $rows_child->pk_category_watch_id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
          </td>
        <?php } ?>
        </tr>
          <?php endforeach; ?> 
    <?php endforeach; ?>
    <tr>
    <td colspan="3"> <style type="text/css">
        .pagination{padding:0px; margin:0px;}
      </style>
      <ul class="pagination">
        <li class="page"><a class="page-item" href="#">Trang</a></li>
        <?php for($i = 1; $i <= $num_page; $i++): ?>
        <li class="page"><a class="page-item" href="admin.php?controller=category_watch&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php endfor; ?></td>
        </tr>
  </tbody>
</table>
