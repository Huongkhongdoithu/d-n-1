<?php
if (isset($bill) && (is_array($bill))) {
    extract($bill);
}

?>
<?php
// if (isset($_SESSION['muahang'])) {
//     unset($_SESSION['muahang']);
// }
if (isset($_GET['idsp'])) {
    $loadonesp = loadone_sanpham($_GET['idsp']);
    $_SESSION['muahang'] = $loadonesp;
}
?>

<div>
    <h1>
        MÃ ĐƠN HÀNG: <?= $bill['id'] ?>
    </h1>
</div>


<div>
    <div>
        <td>Người đặt hàng:</td>
        <td><?= $bill['bill_name'] ?></td>
    </div>
    <div>
        <td>Địa chỉ:</td>
        <td><?= $bill['bill_address'] ?></td>
    </div>
    <div>
        <td>Email:</td>
        <td><?= $bill['bill_email'] ?></td>
    </div>
    <div>
        <td>Số điện thoại:</td>
        <td><?= $bill['bill_tel'] ?></td>
    </div>

</div>

<table>
    <?php
    bill_chi_tiet($billct);
    ?>
</table>



<div class="thongbao">
    <h1>Chúc mừng bạn đã đặt hàng thành công!!!</h1>
</div>

<style>
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
</style>