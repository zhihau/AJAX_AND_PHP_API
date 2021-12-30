<?php
//處理刪除資料的請求
include_once "base.php";
$id=$_POST['id'];
$stu=$Stu->find($id);
echo $classnum=$stu['classroom'];
$Stu->del($id);

echo $classnum;
?>