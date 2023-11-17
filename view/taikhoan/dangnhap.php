<div class="dangnhap">
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
    <form action="index.php?act=dangnhap" method="post">
      <h1>Đăng nhập</h1>
      <div>
        <input type="text" placeholder="   Tên đăng nhập" name="user">
      </div>
      <div>
        <input type="password" name="pass" placeholder="   Mật khẩu">
      </div>
      <div class="submit">
        <input type="submit" value="Đăng nhập" name="dangnhap">
      </div>

      
      <div>
        <p>Bạn quên mật khẩu? <a href="index.php?act=quenmk">Lấy lại mật khẩu</a></p>
        <p>Bạn chưa có tài khoản? <a href="index.php?act=dangky">Đăng kí tài khoản</a></p>
      </div>
      <h5>Hoặc</h5>
      <div class="khac">
        <a href=""><input type="submit" value="Facebook"></a>
        <a href=""><input type="submit" value="Google"></a>
      </div>
    </form>
    
  <?php } ?>

  <p class="thongbao">
        <?php
        if (isset($thongbao) && ($thongbao != "")) {
          echo $thongbao;
        }
        ?>
      </p>




</div>
<style>
  .dangnhap {
    width: 450px;
    margin: auto;
    margin-top: 20px;

  }

  .dangnhap h1 {
    text-align: center;
  }

  .dangnhap input {
    margin-top: 20px;
    margin-left: 20px;
    width: 400px;
    height: 35px;
  }

  .submit input {
    width: 408px;
    margin-left: 20px;
    margin-top: 20px;
    height: 40px;
    background-color: black;
    color: white;
  }

  .submit input:hover {
    background-color: white;
    color: black;
  }

  .dangnhap p {
    margin-left: 20px;
    margin-top: 10px;
  }

  .dangnhap a {
    text-decoration: none;
    color: black;
    font-weight: bold;

  }

  .dangnhap a:hover {
    color: red;
    text-decoration: underline;
  }

  .dangnhap h5 {
    text-align: center;
    margin-top: 10px;
    margin-bottom: 10px;
    color: red;
  }

  .khac {
    display: grid;
    grid-template-columns: 200px 200px;
  }

  .khac input {
    width: 198px;
    margin-top: 5px;
    background-color: white;
    color: black;
  }

  .khac input:hover {
    background-color: black;
    color: white;
  }
</style>