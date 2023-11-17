<div class="dangky">
    <form action="index.php?act=doimk" method="post">
        <h1>Đổi mật khẩu</h1>
        <div>
            <input type="text" name="user" placeholder="   Tên đăng nhập">
        </div>
        <div>
            <input type="password" name="passcu" placeholder="   Mật khẩu cũ">
        </div>
        <div>
            <input type="password" name="passmoi" placeholder="   Mật khẩu mới">
        </div>
        
        <div class="khac">
          <div class="submit">
          <input type="submit" value="Đổi mật khẩu" name="doimk">
          </div>
           <div class="reset">
           <input type="reset" value="Nhập lại">
           </div>
        </div>
    </form>
    <p class="thongbao">
    <?php
   if (isset($thongbao) && ($thongbao != "")) {
    echo '<script> alert("'.$thongbao.'")</script>';
  }
    ?>
    </p>
   
</div>

<style>
  .thongbao{
    margin-top: 5px;
  }
    .dangky {
    width: 450px;
    margin: auto;
    margin-top: 20px;

  }

  .dangky h1 {
    text-align: center;
  }

  .dangky input {
    margin-top: 20px;
    margin-left: 20px;
    width: 400px;
    height: 35px;
  }
  .khac {
    display: grid;
    grid-template-columns: 200px 200px;
  }
  .khac input{
    width: 198px;
    margin-top: 20px;
    
  }
  .submit input{
    background-color: black;
    color: white;
  }
  .khac input:hover{
    background-color: white;
    color: black;
  }
  .reset input{
    background-color: white;
    color: black;
  }
  .reset input:hover{
    background-color: black;
    color: white;
  }
</style>