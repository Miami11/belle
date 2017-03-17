<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
<!--    <link rel="stylesheet" href="../assets/css/bootstrap.css">-->
<!---->
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="../assets/css/mainstyle.css">

</head>
<body>

<!--====nav====-->
<div class="container nav">
    <input type="checkbox" id="ham">
    <input type="checkbox" id="point">
    <!--    <div class="container top">-->
    <!---->
    <!---->
    <!--        <div class="clearfix"></div>-->
    <!--    </div>-->
    <!--    <hr>-->
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


            <a href="../index.php">
                <div class="logo">
                    <img src="../assets/images/belle_logo.png" alt="">
                </div>
                <div class="clearfix"></div>
            </a>
            <a class="btn btn-2" href="../service.php">服 務</a>
            <a class="btn btn-2" href="../environment.php">環 境</a>
            <a class="btn btn-2" href="../product.php">商 品 </a>
            <a class="btn btn-2" href="../contact.php">聯 絡</a>

        </nav>
        <div id="loginhead" class="loginhead">
            <ul>

                <?php

                if (isset($_SESSION['name'])) {
                    echo '<li><a class="login" href="#">' . $_SESSION['name'] . '會員您好 <span><a href="../member/logout.php">登出</a><span></a></li>';
                } else {
                    echo '<li><a class="login" href="../member/login.php">會員登入</a></li>';
                }

                ?>
                <li><a class="login" href="../member/index.php"><span id="number"></span>個商品</a></li>
                <li><a class="login" href="../member/">購物車</a></li>
                <li><a class="login" href="info.html">訂閱電子報</a></li>

            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
