<?php
//處理查詢資料的請求
include_once "base.php";
$q=$_GET['q'];
$rows=$Stu->q("select * from students where `name` like '%$q%'");
echo json_encode($rows);
?>