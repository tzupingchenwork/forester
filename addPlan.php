<?php
require_once("connectDb.php");
//等登入功能好要刪掉下面
$memNo=$_SESSION["memNo"];
// $memNo=1;
$planName = $_REQUEST["planName"];
$planList = $_REQUEST["planList"];
$planPhoto = $_REQUEST["planPhoto"];
  try {

      
      $sql="INSERT INTO `plan` (memNo,planName,planPhoto,planStatus,planList) VALUES(:memNo,:planName,:planPhoto,'1',:planList)";
      $plan = $pdo -> prepare($sql);
      $plan -> bindValue(":memNo",$memNo);
      $plan -> bindValue(":planName",$planName);
      $plan -> bindValue(":planPhoto",$planPhoto);
      $plan -> bindValue(":planList",$planList);
      $plan -> execute();
      echo "<script>alert('加入成功!即將跳轉頁面'); location.href = 'blog.php';</script>";
    //   header("Location:blog.php"); 
  } catch (PDOException $e) {
      echo "失敗",$e->getMessage(),"<br>";
      echo "行號",$e->getLine();
  }
?>