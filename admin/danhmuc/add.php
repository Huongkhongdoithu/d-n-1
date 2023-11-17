<div class="row">
    <div class="row frmtitle">
        <h1>THÊM MỚI LOẠI HÀNG HOÁ</h1>
    </div>
</div>
<div class="row frmcontent">
    <form action="index.php?act=adddm" method="post">
        <div class="row1 mb10">
            Mã loại <br>
            <input type="text" name="maloai" disabled placeholder="Auto Number">
        </div>
        <div class="row1 mb10">
            Tên loại <br>
            <input type="text" name="tenloai">
        </div>
        <div class="row2 mb10">

            <input type="submit" name="themmoi" value="THÊM MỚI">
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