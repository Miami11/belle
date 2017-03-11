<?php
include 'common/common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>service</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/mainstyle.css">

</head>
<body>

<!--====nav====-->
<div class="container nav">
    <input type="checkbox" id="ham">
    <input type="checkbox" id="point">

    <div class="header">
        <div class="holder">
            <label for="ham" class="toggle-btn">
                <span class="bar1"></span>
                <span class="bar2"></span>
                <span class="bar3"></span>
            </label>
            <label for="point" class="panel-toggle">
                <span class="point1"></span>
                <span class="point2"></span>
                <span class="point3"></span>

            </label>
        </div>
        <nav>


            <a href="index.php">
                <div class="logo active">
                    <img src="assets/images/belle_logo.png" alt="">
                </div>
                <div class="clearfix"></div>
            </a>

            <a class="btn btn-2" href="service.php" >服 務</a>
            <a class="btn btn-2" href="environment.html">環 境</a>
            <a class="btn btn-2" href="about.html" style="color: #c54c82">商 品 </a>
            <a class="btn btn-2" href="contact.html">聯 絡</a>
        </nav>
        <div id="loginhead" class="loginhead">
            <ul>

                <?php

                if (isset($_SESSION['name'])) {
                    echo '<li><a class="login" href="index.php">' . $_SESSION['name'] . '會員您好 <span><a
                    href="member/logout.php">登出</a><span></a></li>
                ';
                } else {
                    echo '
                <li><a class="login" href="member/login.php">會員登入</a></li>
                ';
                }

                ?>
                <li><a class="login" href="buy.html"><span id="number"></span>個商品</a></li>
                <li><a class="login" href="info.html">訂閱電子報</a></li>

            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

<!--====banner====-->
<div class="productSection">
    <div class="prlx_lyr_1 pic col-xs-12 col-sm-12">
        <div class="text-col1">
            <div id="content_layer" class="textmid">
                <div class="textarea textcenter">

                    <h5 class="bannerTxt">The Best body care</h5>
                    <h1 class="shadow">Our luxury Product</h1>
                    <div class="textHr">

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<!--====product====-->
<div class="product">
    <div class="container">
        <div class="productGroup">
            <div class="col-sm-4 col-xs-12">

                <div class="product-holder">
                    <a href="buyme.php">
                    <img src="assets/images/product/b1.jpeg" alt="">
                    </a>
                </div>
                <div class="product-text">
                    <h5>愛魅玫瑰活機淡香氛 </h5>
                    <h5>Rose Roll-On Fragrance Oil</h5>
                    <h6>NT$1000</h6>

                </div>

            </div>
            <div class="col-sm-4 col-xs-12">
                    <div class="product-holder">
                        <a href="">

                        <img src="assets/images/product/b2.jpeg" alt="">
                        </a>

                    </div>
                    <div class="product-text">
                        <h5>玫瑰沐浴露  </h5>
                        <h5>Rose Shower Gel </h5>
                        <h6>NT$950</h6>

                    </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                    <div class="product-holder">
                        <a href="">
                        <img src="assets/images/product/b3.jpeg" alt="">
                        </a>

                    </div>
                    <div class="product-text">
                        <h5>柑橘沐浴露 </h5>
                        <h5>Citrus Shower Gel</h5>
                        <h6>NT$950</h6>

                    </div>
            </div>

        </div>
    </div>
</div>

<!--====more====-->

<div class="more">
    <div class="col-xs-12 col-sm-12">
        <div class="textcenter">
            <h1>More </h1>
            <img src="assets/images/product/banner.jpg" alt="">
        </div>
    </div>
    <div class="clearfix"></div>
</div>

<!--====footer====-->
<div class="footer">
    <div class="container textcenter">
        <div class="col-lg-4 col-sm-4 col-xs-12 ">
            <div>
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <div><span>地址</span></div>
                <div>桃園市中壢區中大路300號</div>
            </div>

        </div>
        <div class="col-lg-4 col-sm-4 col-xs-12 ">
            <div>
                <i class="fa fa-phone" aria-hidden="true"></i>
                <div><span>電話</span></div>
                <div>03-4227151</div>
            </div>

        </div>
        <div class="col-lg-4 col-sm-4 col-xs-12 ">
            <div>
                <i class="fa fa-fax" aria-hidden="true"></i>
                <div><span>傳真</span></div>
                <div> 03-4226062</div>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>

</div>

<!--====icon====-->
<div class="iconSection">
    <div class="container textcenter">
        <div class="icon">
            <a href="https://www.facebook.com" target="_blank"><p class="fa fa-facebook"></p></a>
            <a href="https://www.google.com.tw/" target="_blank"><p class="fa fa-google-plus" aria-hidden="true"></p>
            </a>
            <a href="https://twitter.com/login" target="_blank"><p class="fa fa-twitter" aria-hidden="true"></p></a>
        </div>
    </div>
</div>

</body>
</html>