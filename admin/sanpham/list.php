<div class="row">
    <div class="row frmtitle mb">
        <H1>DANH SÁCH LOẠI HÀNG</H1>
    </div>
    <div class="row frmcontent">

        <div class="row mb10 frmdsloai">
            <form action="index.php?act=listsp" method="post">
                <input type="text" name="kyw" id="">
                <select name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo "<option value='" . $id . "'>$name</option>";
                    } ?>
                </select>
                <input type="submit" name="listok" value="OK">
            </form>
            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN LOẠI</th>
                    <th>HÌNH</th>
                    <th>GIÁ</th>
                    <th>SỐ LƯỢNG</th>
                    <th>LƯỢT XEM</th>
                    <th>THAO TÁC</th>
                </tr>
                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $xoasp = "index.php?act=xoasp&id=" . $id;
                    $hinhpart = "../upload/" . $img;
                    if (is_file($hinhpart)) {
                        $hinh = "<img src='" . $hinhpart . "' height='80'>";
                    } else {
                        $hinh = "No Photo";
                    }
                    echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>' . $hinh . '</td>
                            <td>' . $price . '</td>
                            <td>' . $soluong . '</td>
                            <td>' . $luotxem . '</td>
                            <td> <a href="' . $suasp . '"><input type="button" value="Sửa" class="sua"></a>
                            <a href="' . $xoasp . '"><input type="button" value="Xóa" class="xoa"></td> </a>
                        </tr>';
                }
                ?>



            </table>
        </div>
        <div class="row2 mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
        </div>
    </div>
</div>
</div>

<style>
    .xoa,
    .sua {
        width: 60px;
        height: 25px;
        margin-top: 10px;
        margin-left: 25px;

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