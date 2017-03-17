<?php
include 'common/common.php';
include 'view/header.php';

echo $_GET['product_id'];

?>


<!--progress animate-->

<div class="wholecolor">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>


<!--====buyme====-->
<div class="product-background">
    <div class="buyme">
        <div class="buycolor textcenter container">
            <div class="col-sm-6 col-xs-12">
                <img src="assets/images/product/b1b.jpg" alt="">
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="textGroup">
                    <h2>愛魅玫瑰活機淡香氛 </h2>
                    <h3 class="product-color">Rose Roll-On Fragrance </h3>
                    <h4>NT1,000</h4>
                    <a href="#"><h6>  <i class="fa fa-shopping-cart" aria-hidden="true"></i>  &nbsp;點我加入購物車</h6></a>
                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'product')" id="defaultOpen">產品說明</button>
                        <button class="tablinks" onclick="openCity(event, 'ship')">運送須知</button>
                    </div>

                    <div id="product" class="tabcontent">
                        <h3>珍選玫瑰 純淨迷人</h3>
                        <p class="productinner">玫瑰香氛純淨天然，取自珍貴的中東與歐洲玫瑰品種，利用超過一萬片玫瑰花瓣提煉而成，並融合天然植物油潤膚成份。於肌膚上滑動滾珠瞬間，即散發迷人玫瑰香氣，帶來奢華的感官魅力。 無酒精、矽成份、對羥基苯甲酸酯、PEG和人工色素。對肌膚皆不造成負擔，可隨時使用、不沾染衣物。</p>
                    </div>

                    <div id="ship" class="tabcontent">
                        <h3>訂購滿NT5000免運費</h3>
                        <p>Paris is the capital of France.</p>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

</div>
<div class="room"></div>

<?php include 'view/footer.php'; ?>


<script>
    $(function() {

    });

    $(window).on( "load", function() {
        $('.wholecolor').css("display","none");
    });


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

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>



</body>
</html>