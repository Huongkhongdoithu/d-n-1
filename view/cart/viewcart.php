<div class="giohang">
  <h3>Giỏ hàng</h3>
  <table>
    <tr>

      <th>Tên sản phẩm</th>
      <th>Hình</th>
      <th>Đơn giá</th>
      <th>Số lượng</th>
      <th>Thành tiền</th>
    </tr>
    <?php
    viewcart(1);
    ?>
  </table>

  <div class="bill">
    <a href="index.php?act=bill"> <input type="button" value="Đồng ý đặt hàng"></a>

    <a href="index.php?act=delcart"><input type="button" value="Xoá giỏ hàng"></a>
  </div>
</div>

<style>
  h3 {
    margin-top: 20px;
    margin-bottom: 20px;
    text-align: center;
    font-size: 25px;
  }

  table {
    width: 100%;
    text-align: center;
    border-collapse: collapse;

  }

  table,
  td,
  th {
    border: 1px solid black;
  }

  th {
    padding: 15px;
  }

  .xoa {
    width: 50px;
    height: 25px;
    background-color: white;
    border: 1px solid gray;
    border-radius: 3px;
  }

  .xoa:hover {
    text-decoration: underline;
  }

  .bill {
    margin-top: 20px;
  }

  .bill input {
    height: 30px;
    background-color: white;
    border: 1px solid gray;
    border-radius: 5px;
    margin-left: 5px;
  }

  .bill input:hover {
    text-decoration: underline;
  }
</style>