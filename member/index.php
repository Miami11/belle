<?php
include '../common/common.php';
include '../common/login_checker.php';
include '../view/header.php';



    $sql = "SELECT * FROM `member` WHERE `account` = '$account' LIMIT 0,1";
    $result = $con->query($sql);

    while ($row = mysqli_fetch_array($result)) {
        $list[] = [
            "name" => $row['name'],
            "nickname" => $row['nickname'],
            "phone" => $row['phone'],
            "bday" => $row['bday'],
            "password" => $row['password'],
            "image" => $row['image'],


        ];
    }



?>
    <!--====member====-->

    <div class="mempage">
        <div class="container">
            <div class="col-xs-12 col-sm-12">
                <div class="text-lg">
                    <div class="textmid textcenter">

                        <p>歡迎來到 <?= $_SESSION['name'] ?> 會員頁面</p>
                        <div class="textHr"></div>
               <div>
                   <ul class="tabs">
                       <li class="tab-link current" data-tab="tab-1">會員基本資料</li>
                       <li class="tab-link" data-tab="tab-2">購買紀錄</li>
                       <li class="tab-link" data-tab="tab-3">收藏紀錄</li>
                       <li class="tab-link" data-tab="tab-4">檔案上傳</li>
                   </ul>

                   <div id="tab-1" class="tab-content current">
                       <tr>
                           <th><img src="../storage/images/cat.png" alt=""></th>
                           <th>姓名</th>
                           <th>暱稱</th>
                           <th>電話</th>
                           <th>生日</th>
                           <th>密碼</th>
                           <th>確認密碼</th>
                       </tr>
                       <?php foreach ($list as $item): ?>
                       <tr>
                           <td><img src="../storage/images/<?php echo $item['image'] ?>.png" alt=""></td>
                           <td><?php echo $item['name'] ?></td>
                           <td><?php echo $item['nickname'] ?></td>
                           <td><?php echo $item['phone'] ?></td>
                           <td><?php echo $item['bday'] ?></td>
                           <td><?php echo $item['password'] ?></td>
                           <td><span id="checkPsw">ing</span></td>
s
                       </tr>
                       <?php endforeach; ?>
                   </div>
                   <div id="tab-2" class="tab-content">
                       Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                   </div>
                   <div id="tab-3" class="tab-content">
                       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                   </div>
                   <div id="tab-4" class="tab-content">
                       <form method="post" action="" enctype="multipart/form-data">
                           <input type="hidden" name="MAX_FILE_SIZE" value="500000">
                           上傳檔案<input type="file" name="upFile">
                           <input type="submit" value="送出">
                       </form>
                   </div>
               </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>


    <!--====buy====-->
<?php
switch ($_FILES["upFile"]["error"]){
    case 0:
        $dir ="../storage/images";
        if(file_exists($dir)===false){
            mkdir($dir);
        }
        $from = $_FILES["upFile"]["tmp_name"];
        $to = $dir."//".mb_convert_encoding($_FILES["upFile"]["name"],"big5","utf-8");
        copy($from,$to);
        echo "拷貝成功<br>";
        break;
    case 1:
        echo "上傳檔太大,不可超過", ini_get("upload_max_filesize"),"<br>";
        break;
    case 2:
        echo "上傳檔太大,不可超過", $_REQUEST["MAX_FILE_SIZE"],"bytes<br>";
        break;
    case 3:
        echo "上傳過程有誤";
        break;
    case 4:
        echo"未選檔案<br>";
        break;


}
?>
<?php include '../view/footer.php'; ?>

