<?php
require_once("connectDb.php");
// session_start();
//等登入功能好要刪掉下面
$memNo=$_SESSION["memNo"];
// $memNo=1;
$planNo = $_REQUEST["planNo"];
// $noteName = $_REQUEST["noteName"];
// $noteContent = $_REQUEST["noteContent"];
// $planNo =1;
// $noteName =123; 
// $noteContent =123;
try {
    
    $sql="UPDATE `plan`SET noteName ='',noteContent ='',noteStatus=0,noteDate=Now() where planNo=:planNo and memNo =:memNo";
    $noteSub = $pdo -> prepare($sql);
    $noteSub -> bindValue(":memNo",$memNo);
    $noteSub -> bindValue(":planNo",$planNo);
    // $noteSub -> bindValue(":noteName",$noteName);
    // $noteSub -> bindValue(":noteContent",$noteContent);
    $noteSub -> execute();
    header("Location:blog.php"); 
} catch (PDOException $e) {
    echo "失敗",$e->getMessage(),"<br>";
    echo "行號",$e->getLine();
}
?>