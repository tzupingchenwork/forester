<?php
try{
  require_once("connectBooks.php");
  $sql = "update member set memTotalPoint=memTotalPoint+:no where memNo=1";
  
  $member = $pdo->prepare( $sql );
  $member->bindValue(":no",$_REQUEST["no"]);
  $member->execute();  
 
}catch(PDOException $e){
  echo $e->getMessage();
}
?>
