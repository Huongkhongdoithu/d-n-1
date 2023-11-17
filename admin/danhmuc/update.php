<?php
if (is_array($dm)) {
    extract($dm);
}
?>

<div class="row">
    <div class="row frmtitle">
        <h1>CẬP NHẬT LOẠI HÀNG HOÁ</h1>
    </div>
</div>
<div class="row frmcontent">
    <form action="index.php?act=updatedm" method="post">
        <div class="row1 mb10">
            Mã loại <br>
            <input type="text" name="maloai" disabled>
        </div>
        <div class="row1 mb10">
            Tên loại <br>
            <input type="text" name="tenloai" value="<?php if (isset($name) && ($name != "")) echo $name; ?>">
        </div>
        <div class="row2 mb10">
            <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
            <input type="submit" name="capnhat" value="CẬP NHẬT">
            <input type="reset" value="NHẬP LẠI">
            <a href="index.php?act=listdm"> <input type="button" value="DANH SÁCH"></a>
        </div>
        <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao; ?>
    </form>
</div>
</div>
<style>
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