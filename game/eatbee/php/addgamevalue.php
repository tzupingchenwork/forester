<?php
session_start();
$memNo=$_SESSION["memNo"];
try{
  require_once("connectBooks.php");
  $sql = "update member set memTotalPoint=memTotalPoint+:no where memNo=:memNo";
  
  $member = $pdo->prepare( $sql );
  $member->bindValue(":no",$_REQUEST["no"]);
  $member->bindValue(":memNo",$memNo);
  $member->execute();  
 
}catch(PDOException $e){
  echo $e->getMessage();
}
?>
