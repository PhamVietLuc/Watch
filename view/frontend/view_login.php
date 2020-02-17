<div class="container">
<div class="row">
        <div class="col-sm-12 col-md-12 title">
            <h1>Đăng nhập</h1>
        </div>
    </div>
<div class="template-customer">
          <?php if(isset($_GET["act"])&&$_GET["act"]=="fail"){ ?>
          <p style="color:red">Đăng nhập chưa thành công</p>
          <?php }else{ ?>
          <p><h2>Nếu bạn có tài khoản xin vui lòng đăng nhập</h2></p>
          <?php } ?>
          <div class="row" style="margin-top:50px;">
            <div class="col-md-6">
              <div class="wrapper-form">
                <form method='post' action="">
                  <p class="title"><span><h3>Đăng nhập tài khoản</h3></span></p>
                  <div class="form-group">
                    <label>Email:<b id="req">*</b></label>
                    <input type="email" class="input-control" name="email_customer" required>
                  </div>
                  <div class="form-group">
                    <label>Mật khẩu:<b id="req">*</b></label>
                    <input type="password" class="input-control" name="password" required>
                  </div>
                  <input class="register" type="submit" class="button" value="Đăng nhập">
                </form>
              </div>
            </div>
            <div class="col-md-6" style="margin-top: 26px;">
              <div class="wrapper-form">
                <h3 class="title"><span>Tạo tài khoản mới</span></h3>
                <p>Đăng ký tài khoản để mua hàng nhanh hơn. Theo dõi đơn đặt hàng, vận chuyển. Cập nhật các sự kiện và chương trình giảm giá của chúng tôi.</p>
                <a href="index.php?controller=register" class="button_dn">Đăng ký</a> </div>
            </div>
          </div>
        </div>
        </div>
          <br>
            <br>
</div>