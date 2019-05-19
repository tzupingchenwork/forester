<?php
require_once("connect.php");
// session_start();
$memNo=$_SESSION["memNo"];
$errMsg = "";

try {
    //查看評價
    $sql_EvaluationCheck = "select o.ordNo, o.memNo, ev.entNo, ev.entName, e.entSco, e.entEvalContent from `order` o
    join eveninplan p on o.ordNo = p.ordNo
    join eventevaluation e on e.entNo = p.entNo
    join `event` ev on ev.entNo = e.entNo
    where o.memNo = $memNo";
    $EvaluationCheck = $pdo -> query($sql_EvaluationCheck); 

    //顯示可評價活動項目
    $sql_EvaluationCheck_ready = "SELECT temp.* FROM (SELECT E.* FROM `order` AS O
    INNER JOIN (SELECT EP.*, E.entName AS entName  FROM eveninplan AS EP 
    INNER JOIN event AS E ON EP.entNo = E.entNo ) E ON E.ordNo = O.ordNo  
    WHERE memNo = $memNo ) AS temp WHERE entEvalNo IS NULL AND entUseStatus = 0";
    $EvaluationCheck_ready = $pdo -> query($sql_EvaluationCheck_ready); 
    

    
} catch (PDOException $e) {
    $errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
    $errMsg .=  "錯誤行號" . $e->getLine() . "<br>";  	
}	

echo $errMsg; 

