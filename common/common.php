<?php
//開啟php錯誤回報
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

//初始化購物車
$_SESSION['cart'] = "{
  \"cart\": [
    {
      \"product_id\": \"F002\",
      \"count\": 1
    },
    {
      \"product_id\": \"S002\",
      \"count\": 2
    },
    {
      \"product_id\": \"S001\",
      \"count\": 2
    }
  ],
  \"last_time\": \"20170202\",
  \"ip\": \"192.0.0.1\",
  \"country\": \"USA\"
}";



//資料庫連線
$con = mysqli_connect("localhost", "root", "fzwV9d4G", "belle");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die();
}
mysqli_set_charset($con, "utf8");

