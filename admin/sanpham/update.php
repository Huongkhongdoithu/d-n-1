<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpart = "../upload/" . $img;
if (is_file($hinhpart)) {
    $hinh = "<img src='" . $hinhpart . "' height='80'>";
} else {
    $hinh = "No Photo";
}
?>

<div class="row">
    <div class="row frmtitle">
        <h1>CẬP NHẬT LOẠI HÀNG HOÁ</h1>
    </div>
</div>
<div class="row frmcontent">
    <form action="index.php?act=updatesp" enctype="multipart/form-data" method="post">
        <div class="row mb10">
            <select name="iddm">
                <option value="0" selected>Tất cả</option>
                <?php
                echo $listdanhmuc;
                foreach ($listdanhmuc as $danhmuc) {
                    // extract($danhmuc);
                    if ($iddm == $danhmuc['id']) echo '<option value="' . $danhmuc['id'] . '" selected > ' . $danhmuc['name'] . ' </optinon>';
                    else echo '<option value="' . $danhmuc['id'] . '"  > ' . $danhmuc['name'] . ' </optinon>';
                } ?>

            </select>
        </div>

            Tên SP <br>
            <input type="text" name="tensp" value="<?= $name ?>">
        </div>
        <div class="row mb10">
            Giá <br>
            <input type="text" name="giasp" value="<?= $price ?>">
        </div>
        <div class="row mb10">
            Số lượng <br>
            <input type="text" name="soluong" value="<?= $soluong ?>">
        </div>
        <div class="row mb10">
            Hình <br>
            <input type="file" name="hinh">
            <?= $hinh ?>
        </div>
        <div class="row mb10">
            Mô tả <br>
            <textarea name="mota" cols="30" rows="10"><?= $mota ?></textarea>
        </div>
        <div class="row mb10">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="submit" name="capnhat" value="CẬP NHẬT">
            <input type="reset" value="NHẬP LẠI">
            <a href="index.php?act=listsp"> <input type="button" value="DANH SÁCH"></a>
        </div>
        <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao; ?>
    </form>
</div>
</div>