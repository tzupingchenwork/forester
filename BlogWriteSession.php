<?php

require_once("connectDb.php");
$memNo= $_SESSION['memNo'];
$sql="SELECT * FROM `plan` where memNo = $memNo";
$plan = $pdo -> query($sql);
$plan -> bindColumn("planNo",$planNo);
$planRow = $plan->fetch(PDO::FETCH_ASSOC);
try {
    
    //檢查是否有登入
    if(isset($_SESSION['memNo'])){
        if(isset($planRow['planNo'])){
             echo "login";
        }else{
            echo "noplan";
        }
    
    }else if(isset($_SESSION['memNo'])==false){
        echo "logout";
    }
   
}

catch (PDOException $e) {
    echo "失敗",$e->getMessage(),"<br>";
    echo "行號",$e->getLine();
}
?>