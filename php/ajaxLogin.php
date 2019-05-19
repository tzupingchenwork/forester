<?php
try{
  require_once("connectBooks.php");
  $sql = "select * from robot where locate(rbtName,:no)>0";
  $member = $pdo->prepare( $sql );
  $member->bindValue(":no", $_GET["no"]);
  $member->execute();  
  if( $member->rowCount() == 0 ){//找不到    
    echo "我不懂你在說甚麼";
  }else{//如果找得資料,將會員資料送出
    $memRow = $member->fetch(PDO::FETCH_ASSOC);
    //將各欄位內容串接起來
    $str =$memRow["rbtAns"];
    echo $str;
  }
}catch(PDOException $e){
  echo $e->getMessage();
}
?>
