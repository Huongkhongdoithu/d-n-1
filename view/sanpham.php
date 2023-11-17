<section class="dm-list">
    <h2>DANH MỤC SẢN PHẨM</h2>

    <?php
    foreach ($dsdm as $dm) {
        extract($dm);
        $linkdm = "index.php?act=sanpham&iddm=" . $id;
        echo '<li>
                <a href="' . $linkdm . '">' . $name . '</a>
             </li>';
    }
    ?>

    <style>
        .dm-list {
            text-align: center;
            margin-top: 40px;
        }

        h2 {
            margin-bottom: 30px;
        }

        .dm-list li {
            display: inline-block;
        }

        .dm-list li a {
            text-decoration: none;
            color: black;
            padding: 0px 20px 0 20px;
            font-size: 18px;
        }

        .dm-list li a:hover {
            color: red;
            text-decoration: underline;
            font-weight: bold;
        }
    </style>

</section>
<strong><?= $tendm ?></strong>

<section class="product-new">
    <?php
    $i = 0;
    foreach ($dssp as $sp) {
        extract($sp);
        $linksp = "index.php?act=sanphamct&idsp=" . $id;
        $hinh = $img_path . $img;
        if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
            $mr = "";
        } else {
            $mr = "mr";
        }
        echo '  <div class="product-list ' . $mr . ' ">
          
                          <div class="anh">
                          <a href="' . $linksp . '"><img src="' . $hinh . '"  class="image"></a>
                          </div>
                          <h5 class="product-name"><a href="">$' . $price . '</a></h5>
                          <h5 class="product-name"> <a href="' . $linksp . '">' . $name . '</a></h5>
                         <div class="product-cn">
                         <input type="submit" class="text" value="Thêm giỏ hàng">
                         <a href="' . $linksp . '"> <input type="submit" class="text" value="Xem chi tiết"> </a>
                        
                         </div>
                      </div>';


        $i += 1;
    }
    ?>
</section>





</div>