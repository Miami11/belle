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

            <a class="btn btn-2" href="service.php" style="color: #c54c82">服 務</a>
            <a class="btn btn-2" href="environment.html">環 境</a>
            <a class="btn btn-2" href="about.html">商 品 </a>
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
</div>

<!--====banner====-->
<div class="serviceSection">
    <div class="prlx_lyr_1 pic col-xs-12 col-sm-12">
        <div class="text-col1">
            <div id="content_layer" class="textmid">
                <div class="textarea textcenter">

                    <h5 class="bannerTxt">VISIT ONE OF OUR MULTIPLE</h5>
                    <h1 class="shadow">Our luxury Service</h1>
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
                    <img src="assets/images/product/assets/j1.jpeg" alt="">

                </div>
                <div class="product-text">
                    <h3>Body Care</h3>
                    <h5>$1000</h5>
                    <button class="xsBtn" type="submit" value="buy">SHOP NOW</button>

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
            <h2>General information</h2>
            <p>Welcome to our Privacy Policy page! When you use our store services, you trust us with your information. This Privacy Policy is meant to help you understand what data we collect, why we collect it, and what we do with it. When you share information with us, we can make our services even better for you. For instance, we can show you more relevant search results and ads, help you connect with people or to make sharing with others quicker and easier. As you use our services, we want you to be clear how we’re using information and the ways in which you can protect your privacy. This is important; we hope you will take time to read it carefully. Remember, you can find controls to manage your information and protect your privacy and security. We’ve tried to keep it as simple as possible.</p>

        </div>
    </div>
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