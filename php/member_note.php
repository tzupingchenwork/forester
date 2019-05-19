<?php
require_once("connect.php");
// session_start();
$memNo=$_SESSION["memNo"];
$errMsg = "";

try {

    //全部手札
    $sql_note = "select * from plan where NoteStatus=1 and memNo=$memNo";
    $note = $pdo -> query($sql_note);
    
    //刪除手札
    if(isset($_REQUEST['planNo_note'])===true){
        $planNo_note = $_REQUEST['planNo_note'];
        $sql_deleteNote = "update plan set noteStatus=0 where planNo=$planNo_note";
        $deleteNote = $pdo -> exec($sql_deleteNote);
        echo "已刪除";
    }

    
} catch (PDOException $e) {
    $errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
    $errMsg .=  "錯誤行號" . $e->getLine() . "<br>";  	
}	

echo $errMsg; 






?>