<div class="sanphamct">
    <?php

    extract($onesp);

    ?>

    <div class="row boxcontent">
        <?php
        $img = $img_path . $img;
        echo '<div class="row mb spct"><img src= "' . $img . '"><br></div>';
        ?>
    </div>
    <div class="boxtitle">
        <h1 class="name">
            <?= $name ?>
        </h1>
        <p><strong>Thương hiệu: </strong>Khác | <strong>Loại: </strong>Khác</p>
        <h1 class="price">
            $<?= $price ?>
        </h1>




        <div class="mua">

            
            <?php

            $linksp = "index.php?act=bill&idsp=" . $id;
            echo ' <form action="' . $linksp . '"  method="post">
                <input type="hidden" name="id" value="' . $id . '">
                <input type="hidden" name="name" value="' . $name . '">
                <input type="hidden" name="img" value="' . $img . '">
                <input type="hidden" name="price" value="' . $price . '">
                <a href="' . $linksp . '"><input type="submit"  name="addtocart" value="    Mua hàng 
                Giao hàng miễn phí hoặc nhận tại shop"> </a>
              </form>
          
              ';

            ?>


            <?php

            ?>
        </div>
        <div class="chucnangct">
            <div class="tragop0">
                <button>
                    <h4 style="margin-bottom:5px ;">Trả góp</h4>Duyệt nhanh qua điện thoại
                </button>
            </div>
            <div class="tragopvisa">
                <button>
                    <h4 style="margin-bottom:5px ;">Trả góp qua thẻ</h4>Visa, Master, Card, JCB, AMEX
                </button>
            </div>
        </div>



    </div>

</div>

<style>
    .sanphamct {
        display: grid;
        grid-template-columns: 1fr 1fr;
        margin-top: 30px;

    }

    .price {
        color: red;
        margin-top: 20px;
    }

    .chucnangct {
        display: grid;
        grid-template-columns: 300px 300px;
    }

    .chucnangct {
        margin-top: 20px;
    }

    .chucnangct button {
        width: 298px;
        height: 50px;
        background-color: white;
        color: black;

    }

    .chucnangct button:hover {
        background-color: black;
        color: white;
    }

    .mua {
        margin-top: 20px;
    }

    .mua input {
        width: 600px;
        height: 50px;
        background-color: black;
        color: white;
    }

    .mua input:hover {
        background-color: white;
        color: black;
    }
</style>
<div class="motact">
    <?= $mota ?>
</div>

<!-- Thư viện jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- tải nội dung từ tệp tin "binhluanform.php" và chèn nó vào phần tử có id "binhluan"  -->
<script>
    $(document).ready(function() {
        $("#binhluan").load("view/binhluan/binhluanform.php", {
            idpro: <?= $id ?>
        });
    });
</script>

<div id="binhluan" style="margin-top:100px ;">

</div>

<div class="sanphamcungloai">
    <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
    <div class="boxcungloai">
        <?php
        foreach ($sp_cungloai as $sp_cung_loai) {
            # code...
            extract($sp_cung_loai);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            echo '<li> <a href="' . $linksp . '">' . $name . '</a> </li>';
        }
        ?>
    </div>
</div>

<style>
    .sanphamcungloai {
        margin-top: 100px;
    }

    .boxcungloai li {
        display: inline-block;
        margin-top: 20px;
    }

    .boxcungloai li a {
        text-decoration: none;
        font-size: 18px;
        color: black;
        font-weight: bold;
    }

    .boxcungloai li a:hover {
        text-decoration: underline;
        color: red;
    }
</style>