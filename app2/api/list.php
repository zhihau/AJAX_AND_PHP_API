<?php include_once "base.php";
$sql="SELECT `classroom` as '班級', count(`id`) as '人數' from `students` group by `classroom`";
$rows= $Stu->q($sql);
echo json_encode($rows);
// echo為 回應給客戶端的字串
// \u73ed\u7d1a   http對多語系做作的編碼方式

// $list="";
// foreach($rows as $row){
//     // $row="";
//     $list .= "<h5>{$row['班級']}</h5>";
//     $list .= "<h5>{$row['人數']}</h5>";
// }
// echo $list;
?>