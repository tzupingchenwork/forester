<?php
require_once("connectDb.php");
// session_start();
//等登入功能好要刪掉下面
$memNo=$_SESSION['memNo'];
$planNo =$_REQUEST['planNo'];
// $memNo=1;
  try {
      
      if(isset($_SESSION['memNo'])){
          $sql="INSERT INTO `notecomment` (memNo,planNo,noteCommContent,noteCommDate,noteCommStatus)VALUES($memNo,'$_REQUEST[planNo]','$_REQUEST[noteCommContent]',CURDATE(),'1')";
          $pdo->exec($sql);
        //   header("Location:blogContent.php?planNo=$planNo"); 
        echo "<script>alert('留言成功!'); location.href = 'blogContent.php?planNo={$planNo}';</script>";
      }else{
        // echo "<script>alert('請先登入在進行留言！'); location.href = 'blogContent.php?planNo={$planNo}';</script>";
        echo "<script>alert('請先登入在進行留言！'); location.href = 'login.php';</script>";
      }
      
      
      
  } catch (PDOException $e) {
      echo "失敗",$e->getMessage(),"<br>";
      echo "行號",$e->getLine();
  }
?>