<?php
session_start();
$point=$_SESSION['memNo'];
try{
  require_once("connectBooks.php");
  $sql = "update member set memTotalPoint=memTotalPoint+:no where memNo=:point";
  
  $member = $pdo->prepare( $sql );
  $member->bindValue(":no",$_REQUEST["no"]);
  $member->bindValue(":point",$point);

  $member->execute();  
 
}catch(PDOException $e){
  echo $e->getMessage();
}
?>
