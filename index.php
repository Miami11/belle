<?php
include 'common/common.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/mainstyle.css">
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


            <a href="#">
                <div class="logo active">
                    <img src="assets/images/belle_logo.png" alt="">
                </div>
                <div class="clearfix"></div>
            </a>

            <a class="btn btn-2" href="service.html">服 務</a>
            <a class="btn btn-2" href="environment.html">環 境</a>
            <a class="btn btn-2" href="about.html">商 品 </a>
            <a class="btn btn-2" href="contact.html">聯 絡</a>
        </nav>
        <div id="loginhead" class="loginhead">
            <ul>

                <?php

                if (isset($_SESSION['name'])) {
                    echo '<li><a class="login" href="#">' . $_SESSION['name'] . '會員您好 <span><a href="member/logout.php">登出</a><span></a></li>';
                } else {
                    echo '<li><a class="login" href="member/login.php">會員登入</a></li>';
                }

                ?>
                <li><a class="login" href="buy.html"><span id="number"></span>個商品</a></li>
                <li><a class="login" href="info.html">訂閱電子報</a></li>

            </ul>
        </div>
    </div>
</div>

<!--====banner====-->
<div class="section">
    <div class="col-xs-12 col-sm-12 pic">
        <div class="banner">
            <div class="txt shell">

                <h5 class="bannerTxt">VISIT ONE OF OUR MULTIPLE</h5>
                <h1 class="shadow">Sessions of Relaxation</h1>
                <hr class="room">
                <div class="wrapperGroup">

                    <div class="clearfix"></div>
                    <div class="wrapper">

                        <div>
                            <button class="mainBtn" type="submit" value="SEARCH">BOOK NOW</button>
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

</div>

<!--====title====-->
<div class="container">
    <div class="bookingtitle">
        <h5 class="SectionTitle">WELCOME</h5>
        <h2 class="Btitle">極致舒緩</h2>

        <div class="smalltext bookingSize">
            <br> Belle Spa 於泰國普吉島、印尼、馬爾地夫等度假聖地等高級飯店均設有分店，以其悅椿學院之細膩按摩技法，享譽全球。
        </div>

        <div class="textHr"></div>
    </div>
</div>


<!--====house====-->

<div class="section2">


    <div class="groupBox">
        <div class=" col-sm-6 col-lg-3 p1">
            <div class="picmove">
                <div class="picholder">
                    <img src="assets/images/g1.jpg" alt="">
                </div>
                <h4 class="Sstitle"><br>Belle 精選</h4>
                <h2 class="smalltext"><br>悅椿精華系列Spa護理配套，爲您的身、心、靈帶來無限放鬆

            </div>
        </div>
        <div class=" col-sm-6 col-lg-3 p2">
            <div class="picmove">
                <div class="picholder">
                    <img src="assets/images/g2.jpg" alt="">
                </div>
                <h4 class="Sstitle"><br>Belle 精選</h4>
                <h2 class="smalltext"><br>悅椿精華系列Spa護理配套，爲您的身、心、靈帶來無限放鬆


            </div>
        </div>
        <div class=" col-sm-6 col-lg-3 p3">
            <div class="picmove">
                <div class="picholder">
                    <img src="assets/images/g3.jpg" alt="">
                </div>
                <h4 class="Sstitle"><br>Belle 精選</h4>
                <h2 class="smalltext"><br>悅椿精華系列Spa護理配套，爲您的身、心、靈帶來無限放鬆


            </div>
        </div>
        <div class=" col-sm-6 col-lg-3 p4">
            <div class="picmove">
                <div class="picholder">
                    <img src="assets/images/g4.jpg" alt="">
                </div>

                <h4 class="Sstitle"><br>Belle 精選</h4>
                <h2 class="smalltext"><br>悅椿精華系列Spa護理配套，爲您的身、心、靈帶來無限放鬆


            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--====join us====-->
<div  class="join">

    <div class="color col-xs-12 col-sm-6 ">
        <div class=" text-col2 ">
            <div class="textmid">
                <div class="textarea">
                    <h5> 加入我們! </h5>
                    <h2>Belle Spa 煥發新生活力</h2>
                    <p>
                        Spa擅於以純粹天然的花果及香料調製成不同功效的敷料，並以健康自然的元素融合觀、聽、聞、觸、嚐等感覺，五感合一臻於藝術境界，體驗前所未有的身心靈Spa！
                        奢華東方Spa的開創者。<br>

                        崇尚純粹的手法和技藝，而非借助高科技的儀器，運用天然草藥和香料來詮釋傳統亞式療法。</p>
                    <div>
                        <button class="sBtn" type="submit" value="SEARCH">BOOK NOW</button>
                    </div>
                </div>
            </div>


        </div>


    </div>
    <div class="mia col-xs-12 col-sm-6 ">

    </div>
    <div class="clearfix"></div>

</div>


<!--====expert====-->
<div class="expert">
    <div class="pic">
        <div class="container textcenter">

            <h5 class="titleColor">SPECIALISTS</h5>
            <h2 class="Btitle">專家團隊</h2>
            <div class="textHr"></div>
            <div class="realGroup textcenter ">
                <div class="col-lg-4 col-sm-4 col-xs-12 ">


                    <div class="pixFrame2"><img class="pplimg" src="assets/images/expertgigi.jpg">
                    </div>
                    <div class="tableGroup">
                        <h4 class="Sstitle"><br>Sera<span class="xstext">/學院長</span></h4>
                        <h5 class="smalltext"><br>作爲亞洲領先的Spa運營商以及熱帶花園Spa概念的先鋒，Belle學院特別重視護療師的培訓及發展。

                        </h5>
                    </div>


                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12 ">
                    <div class="pixFrame2"><img class="pplimg" src="assets/images/expertb.jpg" alt=""></div>
                    <div class="tableGroup">
                        <h4 class="Sstitle"><br>Lily<span class="xstext">/護理長</span></h4>
                        <h5 class="smalltext"><br>Belle挑選護療師時還會考慮工作態度及服務意識。其他重要的標準還包括對於工作的熱情、開發自我潛能的意願以及服務爲先的態度。

                        </h5>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12 ">
                    <div class="pixFrame2"><img class="pplimg" src="assets/images/expert4.jpg"></div>
                    <div class="tableGroup">
                        <h4 class="Sstitle"><br>Mimi<span class="xstext">/培訓師</span></h4>
                        <h5 class="smalltext"><br>培訓项目涵蓋了Spa護療的全方面，包括人體解剖學知識、重要的穴位、傳统及現代的按摩技藝、適用於不同體重的不同技法。
                        </h5>
                    </div>


                </div>
                <div class="clearfix"></div>
            </div>


        </div>
    </div>

</div>
<!--====book now====-->
<div class="book">
    <div class="col-xs-12 col-sm-12">
        <div class="text-lg">
            <div class="textmid">
                <div class="textarea textcenter">
                    <h5>OUR SPECIAL OFFER</h5>
                    <h2 class="Wtitile">頂級禮遇</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque doloremque doloribus dolorum
                        magnam provident saepe veniam. Aliquam deleniti molestias neque.

                    </p>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>

<script>

    new Waypoint({
        element: document.getElementById('element-waypoint'),
        handler: function (direction) {
            //notify(this.element.id + ' triggers at ' + this.triggerPoint)
            var item = document.getElementById("mainBtn");
            item.className += " animated";
            item.className += " zoomIn";

        },
        offset: '75%'
    })

    new Waypoint({
        element: document.getElementById('introduce'),
        handler: function (direction) {

            var obj = document.getElementById('introduce');
            obj.style.opacity = 1;
            var item_array = [];
            item_array.push(document.getElementById("introduce_item_0"));
            item_array.push(document.getElementById("introduce_item_1"));
            item_array.push(document.getElementById("introduce_item_2"));

            for (var num in item_array) {
                item_array[num].className += " animated";
                item_array[num].className += " zoomIn";
            }

        },
        offset: '75%'
    })


    new Waypoint({
        element: document.getElementById('expert'),
        handler: function (direction) {

            var obj = document.getElementById('expert');
            obj.style.opacity = 1;
            var item_array = [];
            item_array.push(document.getElementById("expert_item_0"));
            item_array.push(document.getElementById("expert_item_1"));
            item_array.push(document.getElementById("expert_item_2"));

            for (var num in item_array) {
                item_array[num].className += " animated";
                item_array[num].className += " zoomIn";
            }

        },
        offset: '75%'
    })

</script>


</body>
</html>