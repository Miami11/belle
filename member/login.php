<?php

include '../common/common.php';

//接收參數
$account = isset($_POST['account']) ? $_POST['account'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

//跳脫特殊字元
$account = mysqli_real_escape_string($con, $account);


//判定有無輸入帳號密碼，有則進行資料比對
if ($account != '' && $password != '') {

    $sql = "SELECT `account`,`password`,`name` FROM `member` WHERE `account` = '$account' LIMIT 0,1";
    $result = $con->query($sql);

    if ($result->num_rows <= 0) {
        echo '查無此帳號...<br><a href="login.php">回上一頁</a>';
        return;
    }

    while ($row = mysqli_fetch_array($result)) {

        if ($row['password'] == $password) {
            $_SESSION['name'] = $row['name'];
            header("Location: http://".$_SERVER['HTTP_HOST']."/member/");

        } else {
            echo '警告：密碼錯誤';
        }
    }
}

?>

<?php
//引入view
include '../view/header.php';
?>

<div class="login-background">
    <div class="logincolor container">
        <div class="loginContent">
            <div class=" col-xs-12 col-sm-6">
                <div class="textcenter">
                <h2>會員登入</h2>
                <div class="room"></div>
                <form action="" method="post">
                    <div class="form-group">
                        <label class="control-label" for="account">帳號</label>
                        <input type="text" class="form-control" id="account" name="account">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="password">密碼</label>
                        <input class="form-control input-sm" type="password" id="password" name="password">
                    </div>
                    <button type="submit" class="mainBtn">確認送出</button>
                </form>
                </div>
            </div>
                <div class=" col-xs-12 col-sm-6">
                    <div class="textcenter">
                        <h2>會員註冊</h2>
                        <div class="room"></div>
                        <p class="smalltext">
                            歡迎您進入Belle Spa官方網站，我們藉由結合最新的皮膚科學，打造真正屬於肌膚的魔法，讓您在新的每一天，都能更輕鬆的追求美麗的無限可能喔。進行購物前，請務必先確認是否為施舒雅美容世界之會員，才能順利登入驗證，並開始選購商品。
                            加入會員不但簡單方便，還可以享有多項的優惠。我們將審慎確保您的會員資料隱私，請您放心。
                        </p>
                        <a class="mainBtn" href="addmemb.php">加入會員</a>
                    </div>


                </div>
            </div>
        <div class="clearfix"></div>
        </div>
    </div>


</div>

<!--<script src="../assets/js/bootstrap.min.js"></script>-->

<?php include '../view/footer.php'; ?>
