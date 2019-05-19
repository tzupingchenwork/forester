<?php
session_start();
$memNo=$_SESSION["memNo"];
$pointDate=$_REQUEST["pointDate"];
$point=$_REQUEST["point"];
try{
  require_once("connectBooks.php");
  $sql = "update member set memTotalPoint=memTotalPoint+:point where memNo=:memNo";
  
  $member = $pdo->prepare( $sql );
  $member->bindValue(":point",$point);
  $member->bindValue(":memNo",$memNo);
  $member->execute();  

  $sql ="INSERT INTO memberpoint VALUES (NULL , :memNo , :pointDate , 1 , :point)";
  $member = $pdo->prepare( $sql );
  $member->bindValue(":memNo",$memNo);
  $member->bindValue(":pointDate",$pointDate);
  $member->bindValue(":point",$point);
  $member->execute(); 
 
}catch(PDOException $e){
  echo $e->getMessage();
}
?>
