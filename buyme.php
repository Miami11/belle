<?php
include 'common/common.php';
include 'view/header.php';

$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : "";

//消毒
$product_id = mysqli_real_escape_string($con,$product_id);

//取得商品資料
$detail = array();
$sql = "SELECT * FROM `products` WHERE `product_id` = '$product_id' LIMIT 0,50";
$result = $con->query($sql);

while ($row = mysqli_fetch_array($result)) {
    $detail['name_ch'] = $row['name_ch'];
    $detail['name_en'] = $row['name_en'];
    $detail['price'] = $row['price'];
    $detail['image'] = $row['image'];
}

?>


<!--progress animate-->

<!--<div class="wholecolor">-->
<!--    <div class="spinner">-->
<!--        <div class="bounce1"></div>-->
<!--        <div class="bounce2"></div>-->
<!--        <div class="bounce3"></div>-->
<!--    </div>-->
<!--</div>-->


<!--====buyme====-->
<div class="product-background fixtop">
    <div class="buyme">
        <div class="buycolor textcenter container">
            <div class="col-sm-6 col-xs-12">
                <?php echo '<img src="assets/images/product/'.$detail['image'].'b.jpg" alt="">'; ?>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="textGroup">
                    <h2><?php echo $detail['name_ch']; ?> </h2>
                    <h3 class="product-color"><?php echo $detail['name_en']; ?></h3>
                    <h4>NT<?php echo $detail['price']; ?></h4>
                    <a href="#"><h6>  <i class="fa fa-shopping-cart" aria-hidden="true"></i>  &nbsp;點我加入購物車</h6></a>
                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'product')" id="defaultOpen">產品說明</button>
                        <button class="tablinks" onclick="openCity(event, 'ship')">使用方法</button>
                    </div>

                    <div id="product" class="tabcontent">
                        <h3>珍選玫瑰 純淨迷人</h3>
                        <p class="productinner">玫瑰香氛純淨天然，取自珍貴的中東與歐洲玫瑰品種，利用超過一萬片玫瑰花瓣提煉而成，並融合天然植物油潤膚成份。於肌膚上滑動滾珠瞬間，即散發迷人玫瑰香氣，帶來奢華的感官魅力。 無酒精、矽成份、對羥基苯甲酸酯、PEG和人工色素。對肌膚皆不造成負擔，可隨時使用、不沾染衣物。</p>
                    </div>

                    <div id="ship" class="tabcontent">
                        <h3>使用方法</h3>
                        <p>

                            直接塗抹於香氣容易飄散的之處，如：頸側、手腕內側、耳後或胸口位置。建議配合使用其他玫瑰香味保養品，可令香氣層次更豐富。</p>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

</div>


<!--<script>-->
<!--    $(function() {-->
<!---->
<!--    });-->
<!---->
<!--    $(window).on( "load", function() {-->
<!--        $('.wholecolor').css("display","none");-->
<!--    });-->
<!---->
<!---->
<!--</script>-->

<?php include 'view/footer.php'; ?>



