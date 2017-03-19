<?php
//開啟php錯誤回報
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

//資料庫連線
$con = mysqli_connect("localhost", "root", "fzwV9d4G", "belle");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die();
}
