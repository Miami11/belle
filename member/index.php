<?php
include '../common/common.php';
include '../common/login_checker.php';


include '../view/header.php';

?>
<!--====member====-->

<div class="mempage">
    <div class="container">
        <div class="col-xs-12 col-sm-12">
            <div class="text-lg">
                <div class="textmid textcenter">

                    <p>歡迎來到 <?= $_SESSION['name'] ?> 會員頁面</p>
                        <div class="room"></div>
                    <table class="buyframe">
                        <tr>
                            <th>商品名稱</th>
                            <th>單價</th>
                            <th>數量</th>
                            <th>小計</th>
                            <th>刪除</th>
                        </tr>
                        <tr>
                            <td>
                                <div class="buyitem"><img src="../assets/images/product/b1.jpeg" alt=""></div>
                                <div class="buytxt">愛魅玫瑰活機淡香氛</div>
                            </td>
                            <td>NT$ 1,000

                            </td>
                            <td>1</td>
                            <td>NT$ 1,000</td>
                            <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
</div>


<!--====buy====-->

<?php include '../view/footer.php'; ?>
