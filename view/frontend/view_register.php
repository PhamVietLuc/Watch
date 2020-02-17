<div class="container">
<div class="template-customer">
          <h2>Đăng ký tài khoản</h2>
          <?php
    if (isset($_GET["act"]) && $_GET["act"] == "success") {
        ?>
        <p style="color:red;">Bạn đã đăng ký thành công!</p>
    <?php } else { ?>
        <p style="font-style: italic; color: #34abab">Nếu bạn chưa có tài khoản, hãy đăng ký ngay để nhận thông tin ưu đãi cùng những ưu đãi từ cửa hàng.</p>
    <?php } ?>
    <?php 
      if (isset($_GET["act"]) && $_GET["act"] == "fail") {
        ?>
        <p style="color:red;">Mật khẩu nhập lại không khớp!</p>
     <?php } ?>
          <div class="row" style="margin-top:50px;">
            <div class="col-md-6">
              <div class="wrapper-form">
                <form method='post' action="">
                  <div class="form-group">
                    <label>Họ và tên:</label>
                    <br>
                    <input type="text" name="fullname_customer" class="input-control"required>
                  </div>
                  <div class="form-group">
                    <label>Email:<b id="req">*</b></label>
                    <br>
                    <input type="text" name="email_customer" class="input-control" required>
                  </div>
                  <div class="form-group">
                    <label>Địa chỉ:</label>
                    <br>
                    <input type="text" name="address_customer" class="input-control"required>
                  </div>
                  <div class="form-group">
                    <label>Điện thoại:</label>
                    <br>
                    <input type="text" name="phone_number_customer" class="input-control"required>
                  </div>
                  <div class="form-group">
                    <label>Mật khẩu:<b id="req">*</b></label>
                    <br>
                    <input type="password" name="password" class="input-control" required="">
                  </div>
                  <div class="form-group">
                    <label> Nhập mật khẩu:<b id="req">*</b></label>
                    <br>
                    <input type="password" name="repassword" class="input-control" required="">
                  </div>
                  <div class="form-group">
                    <input class="register" type="submit" class="button" value="Đăng ký">
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-6">
              <div class="wrapper-form">
                <h3 class="title"><span>Đăng nhập</span></h3>
                <p style="letter-spacing: 1.5px;">Đăng nhập tài khoản nếu bạn đã có tài khoản. Đăng nhập tài khoản để theo dõi đơn đặt hàng, vận chuyển và đặt hàng được thuận lợi.</p>
                <a href="index.php?controller=login" class="button_dn">Đăng nhập</a> </div>
            </div>
          </div>
        </div>
            </div>
          <br>
            <br>