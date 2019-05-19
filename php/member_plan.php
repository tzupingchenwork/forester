<?php
require_once("connect.php");
// session_start();
$memNo=$_SESSION["memNo"];
$errMsg = "";

try {

    //全部行程
    $sql_plan = "select * from plan where planStatus=1 and memNo=$memNo";
    $plan = $pdo -> query($sql_plan);
    
    //刪除行程
    if(isset($_REQUEST['planNo'])===true){
        $planNo = $_REQUEST['planNo'];
        $sql_deletePlan = "update plan set planStatus=0 where planNo=$planNo";
        $deletePlan = $pdo -> exec($sql_deletePlan);
        echo "已刪除";
    }

    
} catch (PDOException $e) {
    $errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
    $errMsg .=  "錯誤行號" . $e->getLine() . "<br>";  	
}	

echo $errMsg; 






?>