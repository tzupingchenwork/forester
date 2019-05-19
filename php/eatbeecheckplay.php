<?php
session_start();
$memNo=$_SESSION["memNo"];
$pointDate=$_REQUEST["pointDate"];
try{
  require_once("connectBooks.php");
  $sql = "select * from memberpoint where memNo=:memNo and pointDate=:pointDate";
  
  $member = $pdo->prepare( $sql );
  $member->bindValue(":memNo",$memNo);
  $member->bindValue(":pointDate",$pointDate);
  $member->execute();  

  if($member->rowCount()==0) {
    echo "沒玩過";

    }else {

    echo "玩過";

    }
 
}catch(PDOException $e){
  echo $e->getMessage();
}
?>