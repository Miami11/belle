<?php

include '../common/common.php';

//接收參數
$account = isset($_POST['account']) ? $_POST['account'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';


//資料庫連線
$con = mysqli_connect("localhost", "root", "root", "belle");

//跳脫特殊字元
$account = mysqli_real_escape_string($con,$account);


if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die();
}


//判定有無輸入帳號密碼，有則進行資料比對
if ($account != '' && $password != '') {

    $sql = "SELECT `account`,`password`,`name` FROM `member` WHERE `account` = '$account' LIMIT 0,1";
    $result = $con->query($sql);

    if($result->num_rows <= 0)
    {
        echo '查無此帳號...<br><a href="login.php">回上一頁</a>';
        return;
    }

    while($row = mysqli_fetch_array($result)) {



        if($row['password'] == $password)
        {
            $_SESSION['name'] = $row['name'];
            header("Location: http://localhost/");

        }else{
            echo '警告：密碼錯誤';
        }
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4 well">
            <form action="" method="post">
                <div class="form-group">
                    <label class="control-label" for="account">帳號</label>
                    <input type="text" class="form-control" id="account" name="account">
                </div>
                <div class="form-group">
                    <label class="control-label" for="password">密碼</label>
                    <input class="form-control input-sm" type="password" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>