<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="view/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="introduct">
        <a href=""><i class="fa-solid fa-check" style="color: #49c133;"></i> Giá cả nhiều ưu đãi hấp dẫn</a>
        <a href=""><i class="fa-solid fa-plane" style="color: #49c133;"></i> Giao hàng nhanh chóng</a>
        <a href=""><i class="fa-solid fa-star" style="color: #49c133;"></i> Sản phẩm đa dạng đạt tiêu chuẩn</a>
    </div>
    <div class="container">

        <header>
            <div class="logo">
                <a href="index.php"><img src="view/image/logo3.png" alt=""></a>
            </div>
            <!-- Form tìm kiếm -->
            <div class="timkiem">
                <form action="index.php?act=sanpham" method="post">
                    <input type="text" name="kyw" placeholder="  Tìm kiếm sản phẩm...">
                    <button type="submit" name="timkiem">Tìm kiếm</button>
                </form>
            </div>
            <!-- Login -->
            <?php
            if (isset($_SESSION['user'])) {
            ?>
                <div class="login">
                    <a href="index.php?act=dangnhap"><img src="view/image/logowangly.png" width="30px" style="border: 5px;" alt=""></a>
                </div>
            <?php } else {  ?>
                <div class="login">
                    <a href="index.php?act=dangnhap"><i class="fa-solid fa-user" style="color: #ffffff;"></i></a>
                </div>
            <?php } ?>
            <!-- Giỏ hàng -->
            <div class="giohang">
                <a href="index.php?act=viewcart"><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i></a>
            </div>
        </header>
        
        <div class="menu">
            <div class="menu1">
            <a href="index.php">Trang chủ</a>
            <a href="index.php?act=sanpham">Cửa hàng</a>
            <a href="index.php?act=gioithieu">Giới thiệu</a>
            <a href="index.php?act=lienhe">Liên hệ</a>
            </div>
            <div class="icon">
                <a href=""><i class="fa-brands fa-facebook" style="color: #ffffff;"></i></a>
                <a href=""><i class="fa-brands fa-youtube" style="color: #ffffff;"></i></a>
                <a href=""><i class="fa-brands fa-twitter" style="color: #ffffff;"></i></a>

            </div>
        </div>
    </div>
</body>