<?php
include 'common/common.php';
//include 'common/login_checker.php';
include 'view/header.php';

//取得商品資料
$products = array();

$sql = "SELECT * FROM `products` LIMIT 0,50";
$result = $con->query($sql);

if ($result->num_rows <= 0) {
    echo '查無此帳號...<br><a href="login.php">回上一頁</a>';
    return;
}

while ($row = mysqli_fetch_array($result)) {
    $products[] = $row;
}

?>
<!--====banner====-->
<div class="productSection">
    <div class="prlx_lyr_1 pic col-xs-12 col-sm-12">
        <div class="text-col1">
            <div id="content_layer" class="textmid">
                <div class="textarea textcenter">

                    <h5 class="bannerTxt">The Best body care</h5>
                    <h1 class="bannerTxt2">Luxury Product</h1>
                    <div class="textHr">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

<!--====product====-->
<div class="product">
    <div class="container">
        <div class="productGroup">

            <?php
            foreach ($products as $item) {
                echo "<div class='col-sm-4 col-xs-12'>";
                echo "<div class='product-holder'>";
                echo "<a href='buyme.php?product_id=" . $item['product_id'] . "'>";
                echo "<img src='assets/images/product/" . $item['image'] . ".jpeg' alt=''>";
                echo "</a>";
                echo "</div>";
                echo "<div class='product-text'>";
                echo "<h5>" . $item['name_ch'] . "</h5>";
                echo "<h5>" . $item['name_en'] . "</h5>";
                echo "<h6>NT$" . $item['price'] . "</h6>";
                echo "</div>";
                echo "</div>";
            }

            ?>


        </div>
    </div>
</div>

<!--====more====-->

<div class="more">
    <div class="container">
        <div class="col-xs-12 col-sm-12">
            <div class="textcenter">
                <img src="assets/images/product/banner.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
</div>

<?php include 'view/footer.php'; ?>
