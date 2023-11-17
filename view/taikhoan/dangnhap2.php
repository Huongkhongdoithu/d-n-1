<?php
  if (isset($_SESSION['user'])) {
    //extract($_SESSION['user']);
  ?>
    <a href="index.php?act=viewcart">Đơn hàng của tôi</a> <br>
    <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a> <br>
    <a href="admin/index.php">Đăng nhập Admin</a> <br>
    <a href="index.php?act=doimk">Đổi mật khẩu</a> <br>
    <a href="index.php?act=quenmk">Lấy lại mật khẩu</a> <br>
    <a href="index.php?act=thoat">Đăng xuất</a>
  <?php } else { ?>
<div class="outer-container">
  <div class="inner-container" id="container">
    <div class="form-container sign-up">
      <form method="POST">
        <h1>Tạo tài khoản</h1>
        <div class="social-icons">
          <a href="#" class="icon"><i class="fa-brand qs fa-google-plus-g"></i></a>
          <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
          <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <input type="text" placeholder="Tên đăng nhập" />
        <input type="email" placeholder="Email" />
        <input type="password" placeholder="Mật khẩu" />
        <button>Đăng ký</button>
      </form>
    </div>
    <div class="form-container sign-in">
      <form action="index.php?act=dangnhap" method="POST">
        <h1>Đăng nhập</h1>
        <div class="social-icons">
          <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
          <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
          <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <input type="text" name="user" placeholder="Tên đăng nhập" />
        <input type="password" name="pass" placeholder="Mật khẩu" />
        <a href="index.php?act=quenmk">Quên mật khẩu?</a>
        <button name="dangnhap">Đăng nhập</button>
      </form>
    </div>
    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-panel toggle-left">
          <h1>Chào mừng bạn đã trở lại!</h1>
          <p>
            Nhập thông tin cá nhân của bạn để sử dụng tất cả các tính năng của
            trang web
          </p>
          <button class="hidden" id="login">Đăng nhập</button>
        </div>
        <div class="toggle-panel toggle-right">
          <h1>Chào bạn!</h1>
          <p>
            Đăng ký với thông tin cá nhân của bạn để sử dụng tất cả các tính
            năng của trang web
          </p>
          <button class="hidden" id="register">Đăng ký</button>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="view/js/slideshow.js"></script>
<?php } ?>

  <p class="thongbao">
        <?php
        if (isset($thongbao) && ($thongbao != "")) {
          echo $thongbao;
        }
        ?>
      </p>