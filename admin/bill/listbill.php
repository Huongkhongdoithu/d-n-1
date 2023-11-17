<div class="row frmtitle">
    <H1>DANH SÁCH ĐƠN HÀNG</H1>
</div>
<div class="row frmcontent">

    <form action="index.php?act=listbill" method="post">
        <input type="text" name="kyw" id="" placeholder="Nhập mã đơn hàng">
        <input type="submit" value="GO">
    </form>

    <div class="row mb10 frmdsloai">
        <table>
            <tr>
                <th></th>
                <th>MÃ ĐƠN Hàng</th>
                <th>KHÁCH HÀNG</th>
                <th>SỐ LƯỢNG HÀNG</th>
                <th>GIÁ TRỊ ĐƠN HÀNG</th>
                <th>NGÀY ĐẶT HÀNG</th>

                <th>THAO TÁC</th>

            </tr>

            <?php
            foreach ($listbill as $bill) {
                # code...
                extract($bill);
                $suabill = "index.php?act=suabill&id=" . $id;
                $xoabill = "index.php?act=xoabill&id=" . $id;
                $kh = $bill["bill_name"] . '
                <br> ' . $bill["bill_email"] . '
                <br> ' . $bill["bill_address"] . '
                <br> ' . $bill["bill_tel"];
                $countsp = loadall_cart_count($bill["id"]);
                echo '
                    <tr>
                    <td> <input type="checkbox" > </td>
                    <td>' . $bill['id'] . '</td>
                    <td> ' . $kh . ' </td>
                    <td> ' . $countsp . ' </td>
                    <td> ' . $bill['tongdonhang'] . ' </td>
                    <td> ' . $bill['ngaydathang'] . ' </td>
                    <td> <a href=""><input type="button" value="Sửa" class="sua"></a>
                            <a href="' . $xoabill . '"><input type="button" value="Xóa" class="xoa"> </a></td> 
                    </tr>
        ';
            }

            ?>



        </table>
    </div>

    <style>
        .xoa,
        .sua {
            width: 60px;
            height: 25px;
            margin-top: 5px;
            margin-left: 15px;
        }

        .xoa {
            background-color: white;
            color: black;
            border: 1px solid gray;
        }

        .xoa:hover {
            background-color: black;
            color: white;
        }

        .sua {
            background-color: black;
            border: 1px solid gray;
            color: white;
            /* margin-left: 90px; */
        }

        .sua:hover {
            background-color: white;
            color: black;
        }

        .row2 input {
            width: 100px;
            height: 35px;
            background-color: black;
            color: white;
            border: 1px solid gray;
        }

        .row2 input:hover {
            background-color: white;
            color: black;
        }
    </style>