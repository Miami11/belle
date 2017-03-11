<?php
include 'common/common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BodyCare</title>
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

<!--<div class="room"></div>-->
<!--====buyme====-->
<div class="product-background">
    <div class="buyme">
        <div class="buycolor container textcenter">
            <div class="col-sm-6 col-xs-12">
                <img src="assets/images/product/b1b.jpg" alt="">
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="textGroup">
                    <h2>愛魅玫瑰活機淡香氛 </h2>
                    <h3 class="product-color">Rose Roll-On Fragrance <Oil></Oil></h3>
                    <h4>NT1,000</h4>
                    <a href="#"><h6>  <i class="fa fa-shopping-cart" aria-hidden="true"></i>  &nbsp;點我加入購物車</h6></a>
                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'London')">產品資訊</button>
                        <button class="tablinks" onclick="openCity(event, 'Paris')">訂購資訊</button>
                    </div>

                    <div id="London" class="tabcontent">
                        <h3>珍選玫瑰 純淨迷人</h3>
                        <p class="productinner">玫瑰香氛純淨天然，取自珍貴的中東與歐洲玫瑰品種，利用超過一萬片玫瑰花瓣提煉而成，並融合天然植物油潤膚成份。於肌膚上滑動滾珠瞬間，即散發迷人玫瑰香氣，帶來奢華的感官魅力。 無酒精、矽成份、對羥基苯甲酸酯、PEG和人工色素。對肌膚皆不造成負擔，可隨時使用、不沾染衣物。</p>
                    </div>

                    <div id="Paris" class="tabcontent">
                        <h3>Paris</h3>
                        <p>Paris is the capital of France.</p>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

</div>

<div class="room"></div>
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


<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>



</body>
</html>