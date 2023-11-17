<div class="dangnhap">

    <form action="index.php?act=quenmk" method="post">
    <h1>Lấy lại mật khẩu</h1>
    <div>
      <input type="email" placeholder="   Email" name="email">
    </div>
    
    <div class="submit">
      <input type="submit" value="Lấy lại mật mật" name="guiemail">
    </div>
  
  </form>
  <p class="thongbao">
    <?php
    if (isset($thongbao) && ($thongbao != "")) {
        echo $thongbao;
    }
    ?>
    </p>

 


</div>
<style>
    .thongbao{
        color: red;
        font-weight: bold;
    }
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
  .khac input{
    width: 198px;
    margin-top: 5px;
    background-color: white;
    color: black;
  }
  .khac input:hover{
    background-color: black;
    color: white;
  }

  
</style>