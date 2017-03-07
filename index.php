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
    <div class="container top">


        <div class="clearfix"></div>
    </div>
    <hr>
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

                if(isset($_SESSION['name']))
                {
                    echo '<li><a class="login" href="#">'.$_SESSION['name']. '會員您好 <span><a href="member/logout.php">登出</a><span></a></li>';
                }else{
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
                            <button class="mainBtn" type="submit" value="SEARCH">SEARCH</button>
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
                <img src="assets/images/g1.jpg" alt="">
                <div class="text">
                    <h2>With Swimming Pool</h2>
                    <h4>32properties</h4>
                    <div>
                        <button class="sBtn" type="submit" value="SEARCH">CHOOSE AN APARTMENT</button>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-sm-6 col-lg-3 p2">
            <div class="picmove">
                <img src="assets/images/g2.jpg" alt="">
                <div class="text">
                    <h2>Cozy Houses</h2>
                    <h4>32properties</h4>
                    <div>
                        <button class="sBtn" type="submit" value="SEARCH">CHOOSE AN APARTMENT</button>
                    </div>
                </div>

            </div>
        </div>
        <div class=" col-sm-6 col-lg-3 p3">
            <div class="picmove">
                <img src="assets/images/g3.jpg" alt="">
                <div class="text">
                    <h2>Studio Apartments</h2>
                    <h4>32properties</h4>
                    <div>
                        <button class="sBtn" type="submit" value="SEARCH">CHOOSE AN APARTMENT</button>
                    </div>
                </div>

            </div>
        </div>
        <div class=" col-sm-6 col-lg-3 p4">
            <div class="picmove">
                <img src="assets/images/g4.jpg" alt="">
                <div class="text">
                    <h2>Luxury Houses</h2>
                    <h4>32properties</h4>
                    <div>
                        <button class="sBtn" type="submit" value="SEARCH">CHOOSE AN APARTMENT</button>
                    </div>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--====recent properties====-->
<div class="container recent">
    <div class="textcenter">
        <h2 class="textBold">Recent Properties</h2>
        <hr class="room">
    </div>

    <div class="HouseGroup">
        <div class="col-lg-4 col-sm-4 col-xs-12 ">
            <img src="assets/img/recent1.jpeg" alt="">
            <div class="textG">
                <a href="#">AVA Nob Hill</a>
                <h5>$1199.00/mon</h5>
                <ul>
                    <li>1200sq ft</li>
                    <li><i class="fa fa-square"></i>4 bedrooms</li>
                    <li><i class="fa fa-square"></i>2 bathrooms</li>
                </ul>
                <p>AVA Nob Hill includes studios and 1 and 2 bedroom apartments that feature an urban-inspired
                    design that extends beyond your walls and throughout the entire community.</p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-xs-12 ">
            <img src="assets/img/recent2.jpeg" alt="">
            <div class="textG">
                <a href="#">AVA Nob Hill</a>
                <h5>$1199.00/mon</h5>
                <ul>
                    <li>1200sq ft</li>
                    <li><i class="fa fa-square"></i>4 bedrooms</li>
                    <li><i class="fa fa-square"></i>2 bathrooms</li>
                </ul>
                <p>Ashton San Francisco offers luxury apartments, eco-friendly features, and remarkable on-site
                    resident amenities. Enjoy premier services and access to our state-of-the-art fitness center,
                    clubhouse, business center, and outdoor fire pit lounge..</p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-xs-12 ">
            <img src="assets/img/recent3.jpeg" alt="">
            <div class="textG">
                <a href="#">AVA Nob Hill</a>
                <h5>$1199.00/mon</h5>
                <ul>
                    <li>1200sq ft</li>
                    <li><i class="fa fa-square"></i>4 bedrooms</li>
                    <li><i class="fa fa-square"></i>2 bathrooms</li>
                </ul>
                <p>The Presidio Residences offer a unique opportunity to live in a national park setting and enjoy quiet
                    neighborhoods, convenient location, beautiful open spaces, and outstanding recreational amenities.ut
                    the entire community.</p>
            </div>
        </div>
        <div class="clearfix"></div>


        <div class="col-lg-4 col-sm-4 col-xs-12 ">
            <img src="assets/img/recent4.jpeg" alt="">
            <div class="textG">
                <a href="#">AVA Nob Hill</a>
                <h5>$1199.00/mon</h5>
                <ul>
                    <li>1200sq ft</li>
                    <li><i class="fa fa-square"></i>4 bedrooms</li>
                    <li><i class="fa fa-square"></i>2 bathrooms</li>
                </ul>
                <p>One month FREE on select apartment homes for a limited time.</p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-xs-12 ">
            <img src="assets/img/recent5.jpeg" alt="">
            <div class="textG">
                <a href="#">AVA Nob Hill</a>
                <h5>$1199.00/mon</h5>
                <ul>
                    <li>1200sq ft</li>
                    <li><i class="fa fa-square"></i>4 bedrooms</li>
                    <li><i class="fa fa-square"></i>2 bathrooms</li>
                </ul>
                <p>AAvalon at Mission Bay located in San Francisco near the San Francisco Caltrain Station offers
                    thoughtfully designed studio, 1, 2 and 3 bedroom apartments and town homes.</p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-xs-12 ">
            <img src="assets/img/recent6.jpeg" alt="">
            <div class="textG">
                <a href="#">AVA Nob Hill</a>
                <h5>$1199.00/mon</h5>
                <ul>
                    <li>1200sq ft</li>
                    <li><i class="fa fa-square"></i>4 bedrooms</li>
                    <li><i class="fa fa-square"></i>2 bathrooms</li>
                </ul>
                <p>Pick your pleasure from a vantage point that puts all the best of the city's lively South Beach
                    neighborhood within easy reach.</p>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="textcenter">
            <button class="mBtn" type="submit" value="SEARCH">VIEW ALL PROPERTIES</button>
        </div>

    </div>
</div>

<!--====real estate tools====-->
<div class="wrapperReal">
    <div class="pic">
        <div class="container textcenter">

            <h2 class="textBold">Real Estate Tools and Resources</h2>
            <hr class="room">

            <div class="realGroup textcenter ">
                <div class="col-lg-4 col-sm-4 col-xs-12 ">
                    <div class="round">
                        <i class="fa fa-commenting-o" aria-hidden="true"></i>
                    </div>
                    <div class="textG">
                        <h3>MORE LISTINGS</h3>
                        <p>Check up to 40% more houses for sale. See pictures of your new life at a new place.
                            See maps,
                            markets, etc.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12 ">
                    <div class="round">
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="textG">
                        <h3>MORE LISTINGS</h3>
                        <p>Check up to 40% more houses for sale. See pictures of your new life at a new place.
                            See maps,
                            markets, etc.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12 ">
                    <div class="round">
                        <i class="fa fa-building" aria-hidden="true"></i>
                    </div>
                    <div class="textG">
                        <h3>MORE LISTINGS</h3>
                        <p>Check up to 40% more houses for sale. See pictures of your new life at a new place.
                            See maps,
                            markets, etc.</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>


        </div>
    </div>

</div>
<!--====Agents====-->
<div class="container">
    <div class="row">

    </div>
</div>
<!--====testimonials====-->
<div class="container">
    <div class="row">

    </div>
</div>
<!--====getintouch====-->
<div class="container">
    <div class="row">

    </div>
</div>
<!--====footer====-->
<div class="container">
    <div class="row">

    </div>
</div>


</body>
</html>