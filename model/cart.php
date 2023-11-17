<?php

function viewcart($del)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        # code...
        $hinh = $cart[2];
        $thanhtien = $cart[3] * $cart[4];
        $tong += $thanhtien;
        if ($del == 1) {

            $xoasp = '<a href="index.php?act=delcart&idcart=' . $i . '" ><input type="button" class="xoa" value="Xoá"></a>';
            $muasp = '<a href="index.php?act=bill" ><input type="button" class="xoa" value="Mua"></a>';
        } else {
            $xoasp = '';
            $muasp = '';
        }

        echo ' 
        <tr>
        <td> ' . $cart[1] . ' </td>
        <td><img src=" ' . $hinh . ' " alt="" width="70"></td>
        <td> ' . $cart[3] . ' </td>
        <td> ' . $cart[4] . ' </td>
        <td> ' . $thanhtien . ' </td>
        <td> ' . $xoasp . ' </td>
        <td> ' . $muasp . ' </td>
        
    </tr>
        ';
        $i += 1;
    }
    echo '
    <tr>
            <th colspan="4">Tổng đơn hàng</th>
            <td> ' . $tong . ' </td>
            <td> </td>
    </tr>
    ';
}
function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        # code...
        $thanhtien = $cart[3] * $cart[4];
        $tong += $thanhtien;
    }
    return $tong;
}


function bill_chi_tiet($listbill)
{
    global $img_path;
    $tong = 0;
    $i = 0;

    echo ' <tr>

    <th>Tên sản phẩm</th>
    <th>Hình</th>
    <th>Đơn giá</th>
    <th>Số lượng</th>
    <th>Thành tiền</th>
  
</tr>';
    foreach ($listbill as $cart) {
        extract($cart);
   
        $hinh = $cart['img'];

        $tong += $cart['thanhtien'];

        echo '
            <tr>
            <td> ' . $cart['name'] . ' </td>
            <td><img src=" ' . $hinh . ' " alt="" width="70"></td>
            <td> ' . $cart['price'] . ' </td>
            <td> ' . $cart['soluong'] . ' </td>
            <td> ' . $cart['thanhtien'] . ' </td>
          
        </tr>
            ';
        $i += 1;
    }
    echo '
        <tr>
                <th colspan="4">Tổng đơn hàng</th>
                <td> ' . $tong . ' </td>
              
        </tr>
        ';
}


function insert_bill($name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "insert into bill (bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,tongdonhang) 
    values ('$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_lastInsertID($sql);
}
function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "insert into cart (iduser,idpro,img,name,price,soluong,thanhtien,idbill) 
    values ('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien', '$idbill')";
    pdo_execute($sql);
}
function loadone_bill($id)
{
    $sql = "select * from bill where id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadone_cart($id)
{
    $sql = "select * from cart where id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_cart($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_cart_count($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}

function loadall_bill($kyw = "", $iduser = 0)
{
    $sql = "select * from bill where 1";
    if ($iduser > 0) $sql .= " AND iduser=" . $iduser;
    if ($kyw != "") $sql .= " AND id like '%" . $kyw . "%' ";
    $sql .= " order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}
function loadall_thongke()
{
    $sql = "select danhmuc.id as madm,danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice ";
    $sql .= " from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
    $sql .= " group by danhmuc.id order by danhmuc.id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
function delete_bill($id){
    $delete="delete from bill where id =" .$id;
    pdo_execute($delete);
}