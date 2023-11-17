<section class="dm-list">
<div class="slideshow-container">

<div class="mySlides fade">

  <img src="view/image/shop1.jpg" style="height: 300px; width: 100%">

</div>



<div class="mySlides fade">

  <img src="view/image/shop23.jpg" style="height: 400px; width: 100%">

</div>



</div>
<br>

<div style="text-align:center">
<span class="dot"></span>
<span class="dot"></span>
<span class="dot"></span>
<span class="dot"></span>


</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  // setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>
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
    * {
    box-sizing: border-box;
  }

  body {
    font-family: Verdana, sans-serif;
  }

  .mySlides {
    display: none;
  }

  img {
    vertical-align: middle;
  }

  /* Slideshow container */
  .slideshow-container {
    max-width: 100%;
    position: relative;
    margin: auto;
    height: 260px;
    background-color: white;
    margin-top: 0px;
  }

  /* 
/* Caption text */
  */

  /* .text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;o
 
  bottom: 8px;
  width: 100%;
  text-align: center;
}

Number text (1/3 etc)
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
} */


  /* The dots/bullets/indicators */
  .dot {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }

  .active {
    background-color: #717171;
  }

  /* Fading animation */
  .fade {
    animation-name: fade;
    animation-duration: 1.5s;
  }

  @keyframes fade {
    from {
      opacity: .4
    }

    to {
      opacity: 1
    }
  }

  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .text {
      font-size: 11px
    }
  }
  </style>
<body>



</section>

<h2 class="topyeuthich">TOP SẢN PHẨM YÊU THÍCH</h2>
<article>
  <!-- hiển thị top 10 sản phẩm yêu thích nhất -->

  <section class="top10">

    <?php
    foreach ($dstop10 as $sp) {
      extract($sp);
      $linksp = "index.php?act=sanphamct&idsp=" . $id;
      $img = $img_path . $img;
      echo '  <div class="top10-list">
                    
                    <div class="anh">
                    <a href="' . $linksp . '"><img src="' . $img . '"  class="image"></a>
                    </div>
                    <h5 class="top10-name"><a href="">$' . $price . '</a></h5>
                    <h5 class="top10-name"> <a href="' . $linksp . '">' . $name . '</a></h5>
                   <div class="top10-cn">
                   <form action="index.php?act=addtocart" method="post">
                      <input type="hidden" name="id" value="' . $id . '">
                      <input type="hidden" name="name" value="' . $name . '">
                      <input type="hidden" name="img" value="' . $img . '">
                      <input type="hidden" name="price" value="' . $price . '">
                      <input type="submit" class="text" name="addtocart" value="Thêm giỏ hàng">
                    </form>
                   
                   <a href="' . $linksp . '"> <input type="submit" class="text" value="Xem chi tiết"> </a>
                  
                   
                   </div>
                </div>';
    }
    ?>




  </section>

</article>
<!-- hiển thị sản phẩm mới ra mắt -->
<aside>

  <h2>SẢN PHẨM </h2>
  <section class="product-new">

    <?php

    foreach ($spnew as $sp) {
      extract($sp);
      $linksp = "index.php?act=sanphamct&idsp=" . $id;
      $img = $img_path . $img;

      echo '  <div class="product-list">
                <!-- hiển thị top 10 sản phẩm yêu thích nhất -->
                <div class="anh">
                <a href="' . $linksp . '"><img src="' . $img . '"  class="image"></a>
                </div>
                <h5 class="product-name"><a href="">$' . $price . '</a></h5>
                <h5 class="product-name"> <a href="' . $linksp . '">' . $name . '</a></h5>
               <div class="product-cn">
               <form action="index.php?act=addtocart" method="post">
                      <input type="hidden" name="id" value="' . $id . '">
                      <input type="hidden" name="name" value="' . $name . '">
                      <input type="hidden" name="img" value="' . $img . '">
                      <input type="hidden" name="price" value="' . $price . '">
                      <input type="submit" class="text" name="addtocart" value="Thêm giỏ hàng">
                    </form>
                   <a href="' . $linksp . '"> <input type="submit" class="text" value="Xem chi tiết"> </a>
               </div>
            </div>
';
    }
    ?>






  </section>
  <div id="hbacktop" onclick="backToTop()">
  <i class="fa-solid fa-arrow-up"></i>
  </div>
  <script>
    //backtop
    function backToTop() {
      window.scrollTo({
        top: 0,
        behavior: "smooth"
      })
    }
    const backTop = document.getElementById('hbacktop')
    window.onscroll = function() {
      if (window.pageYOffset > 100) {
        backTop.style.visibility = 'visible'
      } else {
        backTop.style.visibility = 'hidden'
      }
    }
  </script>
  <div class="phone">
    <a href="tel:0363691084"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.70016 4.66634C6.02716 4.66634 4.66683 6.02667 4.66683 7.69967C4.66683 16.319 11.6797 23.333 20.3002 23.333C21.972 23.333 23.3335 21.9727 23.3335 20.2997C23.3335 20.1702 23.3253 20.043 23.309 19.917L17.919 18.6803C17.8117 18.8857 17.6938 19.1085 17.5865 19.3162C17.0545 20.3312 16.6695 21.0685 15.6872 20.673C11.8302 19.3197 8.68133 16.1697 7.3105 12.266C6.894 11.3502 7.68733 10.9348 8.693 10.4098C8.89716 10.3025 9.11766 10.187 9.3195 10.082L8.08283 4.69084C7.95333 4.67451 7.82733 4.66634 7.70016 4.66634ZM20.3002 25.6663C10.3928 25.6663 2.3335 17.607 2.3335 7.69967C2.3335 4.73984 4.74033 2.33301 7.70016 2.33301C8.0035 2.33301 8.30333 2.35867 8.59383 2.40884C8.87733 2.45434 9.162 2.52667 9.43966 2.62234C9.81883 2.75417 10.1047 3.07267 10.1945 3.46467L11.7917 10.4227C11.8803 10.8053 11.7695 11.2067 11.4965 11.4913C11.3378 11.657 11.3343 11.6605 9.88766 12.4177C11.059 14.954 13.0948 16.9828 15.5798 18.1145C16.3382 16.6667 16.3428 16.662 16.5085 16.5033C16.7932 16.2303 17.1968 16.1242 17.5772 16.2082L24.5363 17.8053C24.9272 17.8952 25.2457 18.1798 25.3763 18.559C25.472 18.8343 25.5443 19.119 25.5922 19.4118C25.6412 19.7 25.6668 19.9987 25.6668 20.2997C25.6668 23.2595 23.2588 25.6663 20.3002 25.6663Z" fill="currentColor"></path></svg></a>
  </div>
  <div class="zalo">
    <a href="https://zalo.me/0363691084" class="btn-icon HomeShopInfo_zalo__1fjNT"><svg width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg" style="border-radius: 4px;"><path d="M3.95063 19.1929C3.86457 19.1526 3.80242 19.1072 3.90282 19.0165C3.96497 18.9662 4.03191 18.9208 4.09884 18.8755C4.72514 18.4471 5.3132 17.9785 5.70045 17.2882C6.02556 16.7137 5.97297 16.3761 5.56659 15.9529C3.30042 13.5644 2.30598 10.7073 2.8032 7.33125C3.08528 5.42653 3.91238 3.7788 5.11718 2.34774C5.84388 1.48104 6.70923 0.780628 7.65586 0.196111C7.71323 0.160839 7.79451 0.150761 7.80407 0.0600602C7.78495 0.00967079 7.75148 0.0247876 7.72279 0.0247876C6.11162 0.0247876 4.50044 -0.010485 2.89404 0.0348655C1.35458 0.0852548 0.0254748 1.33995 0.0302558 3.13885C0.0398177 8.39446 0.0302558 13.6501 0.0302558 18.9107C0.0302558 20.5433 1.21115 21.9089 2.75539 21.9694C4.06059 22.0248 5.36579 21.9794 6.67577 21.9744C6.77139 21.9794 6.867 21.9845 6.96262 21.9845H13.8663C15.5874 21.9845 17.3086 21.9946 19.0297 21.9845C20.6266 21.9845 21.9222 20.624 21.9222 18.946V18.9158V15.968C21.9222 15.8974 21.9461 15.8219 21.9031 15.7463C21.817 15.7513 21.7835 15.8269 21.7357 15.8773C20.8082 16.8599 19.7134 17.651 18.5134 18.2103C15.5731 19.5759 12.5802 19.6716 9.54433 18.5731C9.28138 18.4723 8.99452 18.4623 8.72201 18.5328C8.32041 18.6386 7.92359 18.7646 7.52677 18.8906C6.36022 19.2735 5.16977 19.4449 3.95063 19.1929ZM7.41681 10.7023C7.49809 10.5914 7.54112 10.5259 7.58893 10.4604C8.21523 9.62396 8.84153 8.7875 9.46784 7.946C9.64951 7.70413 9.83119 7.45722 9.94593 7.16496C10.0798 6.83239 9.93637 6.51998 9.61127 6.39904C9.46784 6.35369 9.31485 6.33354 9.16186 6.34361C8.31085 6.33858 7.45506 6.33858 6.60405 6.34361C6.48453 6.34361 6.36501 6.35873 6.25026 6.38896C5.98253 6.45951 5.81998 6.74673 5.88691 7.03395C5.93472 7.22543 6.07815 7.3766 6.25982 7.42195C6.37457 7.45218 6.49409 7.4673 6.61362 7.46226C7.12996 7.4673 7.65108 7.46226 8.16742 7.4673C8.22479 7.4673 8.29651 7.42699 8.33953 7.51769C8.29651 7.57815 8.25348 7.63862 8.21045 7.69405C7.4694 8.68168 6.73314 9.67435 5.99209 10.662C5.81042 10.9089 5.7148 11.181 5.84866 11.4833C5.98253 11.7857 6.25504 11.8411 6.53234 11.8612C6.75226 11.8764 6.97697 11.8663 7.20167 11.8663C7.97618 11.8663 8.74592 11.8713 9.52043 11.8612C9.93159 11.8562 10.1515 11.5942 10.1085 11.1911C10.075 10.8736 9.86944 10.7073 9.48696 10.7023C8.81285 10.6973 8.13874 10.7023 7.41681 10.7023ZM12.9627 8.05181C12.3651 7.50257 11.7053 7.4673 11.0599 7.87041C10.2758 8.35415 9.98896 9.14526 10.0846 10.0623C10.1754 10.919 10.5292 11.6194 11.3802 11.9066C11.9109 12.088 12.4033 12.0225 12.8384 11.6496C12.9531 11.5539 12.9866 11.574 13.0679 11.6798C13.2257 11.8915 13.4982 11.9721 13.7372 11.8764C13.9763 11.8008 14.134 11.569 14.134 11.307C14.1388 10.2992 14.1436 9.29139 14.134 8.2836C14.1293 7.88049 13.7707 7.6235 13.3978 7.70413C13.1922 7.74948 13.0775 7.89561 12.9627 8.05181ZM16.2759 9.92126C16.2568 11.181 17.2464 12.1334 18.4895 12.0023C19.6321 11.8814 20.3732 10.9794 20.3349 9.70459C20.2967 8.44485 19.4074 7.58319 18.1883 7.6235C17.0456 7.65878 16.2377 8.62625 16.2759 9.92126ZM15.8552 8.91851C15.8552 8.1274 15.86 7.34132 15.8552 6.55021C15.8552 6.1471 15.6114 5.89515 15.248 5.90019C14.8942 5.90523 14.6599 6.15717 14.6552 6.54517C14.6504 6.782 14.6552 7.01379 14.6552 7.25062V11.2566C14.6552 11.569 14.8368 11.8411 15.0759 11.9066C15.4058 12.0023 15.7452 11.7957 15.8313 11.4481C15.8456 11.3876 15.8552 11.3271 15.8504 11.2616C15.86 10.4806 15.8552 9.69955 15.8552 8.91851Z" fill="#215DD8"></path><path d="M6.67102 21.9791C5.36583 21.9791 4.05585 22.0245 2.75065 21.9741C1.20641 21.9086 0.0255127 20.543 0.0255127 18.9155C0.0255127 13.6598 0.0350746 8.40423 0.0255127 3.14358C0.0255127 1.34468 1.3594 0.0899815 2.89408 0.0446311C4.50048 -0.000719335 6.11165 0.0345532 7.72283 0.0345532C7.75152 0.0345532 7.78977 0.0194364 7.80411 0.0698258C7.79455 0.160527 7.70849 0.170605 7.6559 0.205877C6.70927 0.790394 5.84392 1.49081 5.11722 2.3575C3.9172 3.78856 3.08532 5.43125 2.80324 7.34101C2.30602 10.7121 3.30524 13.5742 5.56663 15.9626C5.96823 16.3909 6.02082 16.7235 5.70049 17.298C5.31324 17.9883 4.72518 18.4569 4.09888 18.8852C4.03194 18.9255 3.96501 18.9759 3.89808 19.0213C3.79768 19.112 3.85983 19.1573 3.94589 19.1976C3.96501 19.243 3.98892 19.2833 4.0176 19.3236C4.56741 19.8376 5.08853 20.3868 5.62878 20.9109C5.88217 21.1578 6.13556 21.4148 6.37939 21.6717C6.47979 21.7675 6.64712 21.7977 6.67102 21.9791Z" fill="#215DD8"></path><path d="M6.67073 21.9789C6.64682 21.8026 6.47949 21.7724 6.37909 21.6665C6.13526 21.4045 5.88187 21.1526 5.62848 20.9057C5.08823 20.3816 4.56711 19.8324 4.0173 19.3184C3.98862 19.2781 3.96471 19.2378 3.94559 19.1924C5.16473 19.4444 6.35518 19.273 7.52651 18.8951C7.92333 18.7691 8.32015 18.6432 8.72175 18.5374C8.99427 18.4618 9.28112 18.4769 9.54407 18.5777C12.5752 19.6762 15.5681 19.5754 18.5131 18.2149C19.7131 17.6555 20.808 16.8695 21.7355 15.8869C21.7833 15.8365 21.8168 15.7609 21.9028 15.7559C21.9458 15.8264 21.9219 15.902 21.9219 15.9776V18.9254C21.9315 20.6084 20.6502 21.9789 19.0534 21.9941H19.0295C17.3083 22.0041 15.5872 21.9941 13.866 21.9941H6.95758C6.86196 21.984 6.76634 21.9789 6.67073 21.9789Z" fill="#215DD8"></path><path d="M7.41656 10.7031C8.13849 10.7031 8.81738 10.6981 9.4915 10.7031C9.86919 10.7082 10.0748 10.8744 10.113 11.1919C10.1561 11.59 9.93613 11.857 9.52497 11.8621C8.75045 11.8722 7.98072 11.8671 7.2062 11.8671C6.9815 11.8671 6.76157 11.8772 6.53687 11.8621C6.25957 11.847 5.98706 11.7865 5.85319 11.4842C5.71933 11.1818 5.81494 10.9097 5.99662 10.6628C6.73289 9.67518 7.47394 8.68251 8.21498 7.69488C8.25801 7.63441 8.30104 7.57394 8.34407 7.51852C8.29626 7.43285 8.22933 7.47317 8.17196 7.46813C7.65561 7.46309 7.13449 7.46813 6.61814 7.46309C6.49862 7.46309 6.3791 7.44797 6.26435 7.42278C5.99184 7.35727 5.82451 7.07005 5.88666 6.78787C5.92969 6.59639 6.07312 6.44018 6.25479 6.39483C6.36954 6.3646 6.48906 6.34948 6.60858 6.34948C7.45959 6.34444 8.31538 6.34444 9.16639 6.34948C9.31939 6.34444 9.4676 6.3646 9.6158 6.40491C9.94091 6.52081 10.0796 6.83826 9.95047 7.17083C9.83573 7.45805 9.65405 7.70496 9.47238 7.95186C8.84607 8.79337 8.21977 9.62983 7.59346 10.4613C7.54087 10.5268 7.49306 10.5923 7.41656 10.7031Z" fill="#215DD8"></path><path d="M12.9624 8.05292C13.0772 7.89671 13.1967 7.75058 13.3927 7.71027C13.7704 7.62964 14.1242 7.88663 14.129 8.28975C14.1433 9.29754 14.1386 10.3053 14.129 11.3131C14.129 11.5751 13.9664 11.8069 13.7322 11.8825C13.4931 11.9783 13.2206 11.9027 13.0628 11.686C12.9816 11.5802 12.9481 11.56 12.8334 11.6558C12.3983 12.0286 11.9059 12.0942 11.3752 11.9128C10.5242 11.6205 10.1752 10.9201 10.0795 10.0685C9.97913 9.14637 10.2708 8.36029 11.0548 7.87655C11.7051 7.4684 12.3648 7.50367 12.9624 8.05292ZM11.27 9.89213C11.2795 10.1138 11.3465 10.3255 11.4708 10.5018C11.729 10.8646 12.2214 10.9402 12.5704 10.6681C12.6278 10.6228 12.6804 10.5674 12.7282 10.5018C12.9959 10.1189 12.9959 9.48902 12.7282 9.10606C12.5943 8.90954 12.3839 8.79364 12.1592 8.7886C11.6333 8.75333 11.2652 9.18164 11.27 9.89213ZM16.2756 9.92237C16.2374 8.62736 17.0454 7.65988 18.1928 7.62461C19.4119 7.58429 20.3012 8.44595 20.3394 9.70569C20.3777 10.9805 19.6366 11.8825 18.494 12.0035C17.2462 12.1345 16.2565 11.1821 16.2756 9.92237ZM17.4757 9.80143C17.4661 10.0534 17.5378 10.3003 17.6812 10.5069C17.9442 10.8697 18.4366 10.9402 18.7808 10.6581C18.8334 10.6177 18.8765 10.5674 18.9195 10.517C19.1968 10.134 19.1968 9.48902 18.9243 9.10606C18.7904 8.91458 18.58 8.79364 18.3553 8.7886C17.839 8.75837 17.4757 9.17156 17.4757 9.80143ZM15.8549 8.91962C15.8549 9.70065 15.8597 10.4817 15.8549 11.2627C15.8597 11.6205 15.592 11.9178 15.2525 11.9279C15.1951 11.9279 15.133 11.9228 15.0756 11.9077C14.8366 11.8422 14.6549 11.5751 14.6549 11.2577V7.25172C14.6549 7.01489 14.6501 6.7831 14.6549 6.54627C14.6597 6.15827 14.8939 5.90632 15.2477 5.90632C15.6111 5.90129 15.8549 6.15323 15.8549 6.55635C15.8597 7.34243 15.8549 8.13354 15.8549 8.91962Z" fill="#215DD8"></path><path d="M11.2699 9.89132C11.2652 9.18083 11.6333 8.75252 12.1544 8.78275C12.3791 8.79283 12.5895 8.90872 12.7234 9.10524C12.9911 9.48316 12.9911 10.1181 12.7234 10.501C12.4652 10.8638 11.9727 10.9394 11.6237 10.6673C11.5664 10.622 11.5138 10.5665 11.466 10.501C11.3464 10.3247 11.2795 10.113 11.2699 9.89132ZM17.4756 9.80062C17.4756 9.17579 17.839 8.75756 18.3553 8.78779C18.58 8.79283 18.7904 8.91376 18.9242 9.10524C19.1968 9.4882 19.1968 10.1382 18.9195 10.5161C18.6517 10.8739 18.1545 10.9344 17.8151 10.6522C17.7625 10.6119 17.7194 10.5615 17.6812 10.5061C17.5378 10.2995 17.4708 10.0526 17.4756 9.80062Z" fill="white"></path></svg></a>
  </div>
</aside>

</head>

