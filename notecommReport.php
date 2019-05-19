<?php
// $noteCommNo = $_REQUEST["noteCommNo"];
// $noteCommRepReason = $_REQUEST["noteCommRepReason"];
  try {
      require_once("connectDb.php");
      $sql="INSERT INTO `notecommentreport` (noteCommNo,noteCommRepReason,noteCommRepStatus) VALUES('$_REQUEST[noteCommNo]','$_REQUEST[noteCommRepReason]','0')";
      $pdo->exec($sql);

        echo "<script>alert('檢舉成功!即將跳轉頁面'); location.href = 'blog.php';</script>";
    //   header("Location:blogContent.php?planNo=$_REQUEST[planNo]"); 
  } catch (PDOException $e) {
      echo "失敗",$e->getMessage(),"<br>";
      echo "行號",$e->getLine();
    }
    ?>