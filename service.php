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
            <a class="btn btn-2" href="product.php">商 品 </a>
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


<!-- =====banner===== -->

<div class="join">

    <div class="container">
        <div class="service-color col-xs-12 col-sm-6 ">
            <div class=" text-col2 ">
                <div class="textmid">
                    <div class="textarea">
                        <h2 class="titleColor">精華體驗</h2>
                        <p>
                            在這美麗的國度，有源於世界三地的全新數位手技，搭配針對需求調製的頂級花草精油，讓妳紓解僵硬已久的肌肉，撫癒煩悶的心靈並深度釋放壓力，重回安然、安逸、寧靜與和諧的心境。</p>
                        <br>
                        <h4><i class="fa fa-plus" aria-hidden="true"></i>120分鐘護理加上30分鐘茶點及靜心時間</h4>
                        <h3><i class="fa fa-plus" aria-hidden="true"></i>TWD 5,200 + 10% /人</h3>
                        <button class="xsBtn" type="submit" value="SEARCH">READ MORE</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-mia col-xs-12 col-sm-6 "></div>
    </div>
    <div class="clearfix"></div>
</div>


<!--====book now====-->
<div class="ServiceBook">
    <div class="col-xs-12 col-sm-12">
        <div class="text-lg">
            <div class="textmid">
                <div class="textarea textcenter">
                    <h5>RESERVATION</h5>
                    <h1>線上諮詢系統</h1>
<!--                    <div class="textHr">-->
                    <div class="room"></div>
                <table>
                    <form action="">
                        <tr>
                            <td>    <input type="text" placeholder="Name*"></td>
                        </tr>
                        <tr>
                            <td>    <input type="text" placeholder="Tele*"></td>
                        </tr>
                        <tr>
                            <td>    <input type="text" placeholder="E-mail*"></td>
                        </tr>
                        <tr>
                            <td>    <input type="text" placeholder="Message*"></td>
                        </tr>
                    </form>
                </table>
                    <button class="xsBtn" type="submit" value="SEARCH">Submit</button>

                </div>
            </div>
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


<!--===old============================================================-->
<!--<div class="container banner">-->
<!--<div class="bar"></div>-->
<!--<div class="boxGroup">-->
<!--<div class="box pix1"></div>-->
<!--<div class="box tt1">-->
<!--<h2>精華體驗</h2>-->
<!--<div class="Text2 box"><h4>TWD 5,200 +10%<span class="xstext">/人</span></h4>-->
<!--<a href="contact.html">-->
<!--<button class="Sbtn">立即預約</button>-->
<!--</a>-->
<!--</div>-->

<!--<div class="Text1 box"><span class="Stitle">120分鐘護理加上30分鐘茶點</span>-->
<!--<p class="Stext">女士護理配套呈現特色療程，特別針對現代女士獨家定制，護理精粹 60分鐘身體按摩 • 60分鐘面部護理或身體護理</p>-->
<!--</div>-->
<!--</div>-->

<!--<div class="clear"></div>-->
<!--</div>-->
<!--<div class="bar"></div>-->

<!--<div class="boxGroup">-->

<!--<div class="box tt1">-->
<!--<h2>精華體驗</h2>-->
<!--<div class="Text2 box"><h4>TWD 5,200 +10%<span class="xstext">/人</span></h4>-->
<!--<a href="contact.html">-->
<!--<button class="Sbtn">立即預約</button>-->
<!--</a>-->
<!--</div>-->

<!--<div class="Text1 box"><span class="Stitle">120分鐘護理加上30分鐘茶點</span>-->
<!--<p class="Stext">女士護理配套呈現特色療程，特別針對現代女士獨家定制，護理精粹 60分鐘身體按摩 • 60分鐘面部護理或身體護理</p>-->
<!--</div>-->
<!--</div>-->
<!--<div class="box pix2"></div>-->
<!--<div class="clear"></div>-->
<!--</div>-->

<!--<div class="bar"></div>-->


<!--<div class="boxGroup">-->
<!--<div class="box pix3"></div>-->
<!--<div class="box tt1">-->
<!--<h2>精華體驗</h2>-->
<!--<div class="Text2 box"><h4>TWD 5,200 +10%<span class="xstext">/人</span></h4>-->
<!--<a href="contact.html">-->
<!--<button class="Sbtn">立即預約</button>-->
<!--</a>-->
<!--</div>-->

<!--<div class="Text1 box"><span class="Stitle">120分鐘護理加上30分鐘茶點</span>-->
<!--<p class="Stext">女士護理配套呈現特色療程，特別針對現代女士獨家定制，護理精粹 60分鐘身體按摩 • 60分鐘面部護理或身體護理</p>-->
<!--</div>-->
<!--</div>-->

<!--<div class="clear"></div>-->
<!--</div>-->


<!--<div class="bar"></div>-->

<!--<div class="boxGroup">-->

<!--<div class="box tt1">-->
<!--<h2>精華體驗</h2>-->
<!--<div class="Text2 box"><h4>TWD 5,200 +10%<span class="xstext">/人</span></h4>-->
<!--<a href="contact.html">-->
<!--<button class="Sbtn">立即預約</button>-->
<!--</a>-->
<!--</div>-->

<!--<div class="Text1 box"><span class="Stitle">120分鐘護理加上30分鐘茶點</span>-->
<!--<p class="Stext">女士護理配套呈現特色療程，特別針對現代女士獨家定制，護理精粹 60分鐘身體按摩 • 60分鐘面部護理或身體護理</p>-->
<!--</div>-->
<!--</div>-->
<!--<div class="box pix4"></div>-->
<!--<div class="clear"></div>-->
<!--</div>-->
<!--<div class="bar"></div>-->


<!--<div class="clear"></div>-->
<!--</div>-->

<!--&lt;!&ndash;===subbanner===&ndash;&gt;-->
<!--<div class="container subbanner">-->
<!--<div class="holder">-->
<!--<div class="item-col1"></div>-->
<!--</div>-->

<!--</div>-->


<!--&lt;!&ndash; =====footer===== &ndash;&gt;-->

<!--<div class="container footer">-->
<!--<div class="contacts">-->

<!--<div class="item-col3">-->
<!--<div>-->
<!--<i class="fa fa-map-marker" aria-hidden="true"></i>-->
<!--<div><span>地址</span></div>-->
<!--<div>桃園市中壢區中大路300號</div>-->
<!--</div>-->
<!--</div>-->
<!--<div class="item-col3">-->
<!--<div>-->
<!--<i class="fa fa-phone" aria-hidden="true"></i>-->
<!--<div><span>電話</span></div>-->
<!--<div>03-4227151</div>-->
<!--</div>-->

<!--</div>-->
<!--<div class="item-col3">-->
<!--<div>-->
<!--<i class="fa fa-fax" aria-hidden="true"></i>-->
<!--<div><span>傳真</span></div>-->
<!--<div> 03-4226062</div>-->
<!--</div>-->

<!--</div>-->

<!--</div>-->
<!--<div class="icon">-->
<!--<a href="https://www.facebook.com" target="_blank"><p class="fa fa-facebook"></p></a>-->
<!--<a href="https://www.google.com.tw/" target="_blank"><p class="fa fa-google-plus" aria-hidden="true"></p></a>-->
<!--<a href="https://twitter.com/login" target="_blank"><p class="fa fa-twitter" aria-hidden="true"></p></a>-->
<!--</div>-->
<!--</div>-->


</body>
</html>