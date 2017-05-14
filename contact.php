<?php
include 'common/common.php';
include 'view/header.php';
?>

<!--====banner====-->
<div class="serviceSection fixtop">
    <div class="prlx_lyr_1 pic col-xs-12 col-sm-12">
        <div class="text-lg">
            <div id="content_layer" class="textmid">
                <div class="textareaW100 textcenter">

                    <h5 class="bannerTxt">CONTACTS</h5>
                    <h1 class="bannerTxt2">Find and Call</h1>
                    <div class="textHr">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

<!--====time====-->
<div class="aboutus">
    <div class="container">
        <div class="contacts textcenter">

            <div class="col-lg-4 col-sm-4 col-xs-12 ">
                <div>
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                    <div><span class="titleColor">關於我們</span></div>
                    <br>
                    <div>Belle Spa <br>亞洲領先的Spa<br>世界頂級島嶼飯店聯盟成員</div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-xs-12 ">
                <div>
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <div><span class="titleColor">營業時間</span></div>
                    <br>
                    <div>一至五：9am~9pm<br>六和日：1pm~9pm<br>國定假日不營業</div>
                </div>

            </div>
            <div class="col-lg-4 col-sm-4 col-xs-12 ">
                <div>
                    <i class="fa fa-fax" aria-hidden="true"></i>
                    <div><span class="titleColor">聯絡資訊</span></div>
                    <br>
                    <div> Tel:03-4227151<br>Email: info@belle.com<br>桃園市中壢區中大路300號</div>
                </div>

            </div>

        </div>
        <div class="clearfix"></div>
    </div>

</div>

<!--====place====-->
<div class="map">
    <div class="container">

        <div class="col-xs-12">
            <img src="assets/images/map.png" alt="">
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--====book====-->

<div class="ServiceBook">
    <div class="col-xs-12 col-sm-12">
        <div class="text-lg">
            <div class="fb-comments" data-href="http://localhost/contact.php" data-width="600px"
                 data-numposts="5"></div>
        </div>
    </div>
</div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script src="assets/js/main.js"></script>

<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.9&appId=292919224484626";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
