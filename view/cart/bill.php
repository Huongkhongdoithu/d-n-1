<?php
if (isset($_SESSION['muahang'])) {
    unset($_SESSION['muahang']);
}
if (isset($_GET['idsp'])) {
    $loadonesp = loadone_sanpham($_GET['idsp']);
    $_SESSION['muahang'] = $loadonesp;
}
?>

<form action="index.php?act=billconfirm" method="post">
    <h3>Thông tin đặt hàng</h3>

    <div class="formdathang">
        <div>
            <td>Người đặt hàng</td> <br>
            <td><input type="text" name="name"></td>
        </div>
        <div>
            <td>Địa chỉ</td><br>
            <td><input type="text" name="address"></td>
        </div>
        <div>
            <td>Email</td><br>
            <td><input type="text" name="email"></td>
        </div>
        <div>
            <td>Số điện thoại</td><br>
            <td><input type="text" name="tel"></td>
        </div>

    </div>
    <br>

    <div class="pt_thanhtoan">
        <p>Phương thức thanh toán</p>

        <tr>
            <td><input type="radio" value="1" name="pttt" id="" checked>Trả tiền khi nhận hàng</td>
            <td><input type="radio" value="2" name="pttt" id="">Chuyển khoản ngân hàng</td>
            <td><input type="radio" value="3" name="pttt" id="">Thanh toán online</td>
        </tr>

    </div> <br>
    <style>
        .formdathang {
            margin-left: 200px;
        }

        .formdathang div {
            margin-top: 10px;
        }

        .formdathang input {
            width: 760px;
            height: 35px;
            border-radius: 5px;
            border: 1px solid gray;
        }

        .pt_thanhtoan {
            margin-left: 200px;
        }

        .pt_thanhtoan input {
            margin-top: 10px;
            /* margin-left: 10px; */
        }
    </style>

    <div class="thongtinsanpham">
        <table>
            <tr>

                <th>Tên sản phẩm</th>
                <th>Hình</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Thao tác</th>
            </tr>
            <?php
            if (isset($_GET['idsp']) && (isset($_SESSION['muahang']))) {
                global $img_path;
                $tong = 0;
                $i = 0;
                $cart = $_SESSION['muahang'];
                # code...
                $hinh = $img_path . $cart['img'];
                $thanhtien = $cart['price'];
                $tong += $thanhtien;
                echo ' 
        <tr>
        <td> ' . $cart['name'] . ' </td>
        <td><img src=" ' . $hinh . ' " alt="" width="70"></td>
        <td> ' . $cart['price'] . ' </td>
        <td> ' . 1 . ' </td>
        <td> ' . $thanhtien . ' </td>
        
    </tr>
        ';
                $i += 1;
                echo '
    <tr>
            <th colspan="4">Tổng đơn hàng</th>
            <td> ' . $tong . ' </td>
            <td> </td>
    </tr>
    ';
            } else {
                viewcart(0, $_SESSION['mycart']);
            }
            ?>
        </table>
    </div>

    <br>

    <div class="dongydathang">
        <input type="submit" value="Đồng ý đặt hàng" name="dongydathang">
        <input type="reset" value="Nhập lại" name="nhaplai">
    </div>
</form>

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

    .dongydathang input {
        width: 150px;
        height: 35px;
        border-radius: 5px;
        border: 1px solid gray;
        float: right;
        margin-left: 10px;
        background-color: black;
        color: white;
    }

    .dongydathang input:hover {
        background-color: white;
        color: black;
    }
</style>