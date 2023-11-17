<div class="row">
    <div class="row frmtitle">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
</div>
<div class="row frmcontent">
    <form action="index.php?act=addsp" enctype="multipart/form-data" method="post">
        <div class="row1 mb10">
            Danh mục sản phẩm <br>
            <select name="iddm" id="">
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo "<option value='" . $id . "'>$name</option>";
                } ?>

            </select>
        </div>
        <div class="row1 mb10">
            Tên loại <br>
            <input type="text" name="tensp">
        </div>
        <div class="row1 mb10">
            Giá <br>
            <input type="text" name="giasp">
        </div>
        <div class="row1 mb10">
            Số lượng <br>
            <input type="text" name="soluong">
        </div>
        <div class="row1 mb10">
            Hình <br>
            <input type="file" name="hinh">
        </div>
        <div class="row1 mb10">
            Mô tả <br>
            <textarea name="mota" cols="30" rows="10"></textarea>
        </div>
        <div class="row2 mb10">

            <input type="submit" name="themmoi" value="THÊM MỚI">
            <input type="reset" value="NHẬP LẠI">
            <a href="index.php?act=listsp"> <input type="button" value="DANH SÁCH"></a>
        </div>
        <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao; ?>
    </form>
</div>
</div>


<style>
    .row1 select,
    .row1 textarea {
        width: 500px;
        height: 35px;
    }

    .row1 textarea {
        width: 500px;
        height: 150px;
    }

    .row1 input {
        width: 500px;
        height: 35px;
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