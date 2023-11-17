<div class="row">
    <div class="row frmtitle">
        <H1>DANH SÁCH BÌNH LUẬN</H1>
    </div>
    <div class="row frmcontent">

        <div class="row1 mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>HỌ TÊN</th>
                    <th>NỘI DUNG BÌNH LUẬN</th>
                    <th>TÊN ĐĂNG NHẬP</th>
                    <th>ID SẢN PHẨM</th>
                    <th>NGÀY BÌNH LUẬN</th>
                    <th></th>
                </tr>
                <?php
                // echo "lol";
                foreach ($listbinhluan as $binhluan) {
                    extract($binhluan);
                    $suabl = "index.php?act=suabl&id=" . $id;
                    $xoabl = "index.php?act=xoabl&id=" . $id;
                    echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $id . '</td>
                            <td> ' . $name . ' </td>
                            <td>' . $noidung . '</td>
                            <td> ' . $nameuser . ' </td>
                            <td>' . $idpro . '</td>
                            <td>' . $ngaybinhluan . '</td>
                            <td> <a href="' . $suabl . '"><input type="button" value="Sửa" class="sua">  </a> 
                            <a href="' . $xoabl . '"><input type="button" value="Xóa" class="xoa"></td> </a>
                        </tr>';
                }
                ?>



            </table>
        </div>
        <div class="row2 mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
           
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