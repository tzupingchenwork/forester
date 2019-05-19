<?php

function insert_admin(){
    $errMsg = ""; 
    global $pdo;

    if(isset($_POST['add'])){
        $admId = $_POST['admId'];
        $admPsw = $_POST['admPsw'];
        $admPer = $_POST['admPer'];
        $admStatus = $_POST['admStatus'];
        if(( $admId == "" || empty($admId)) ||
        ( $admPsw == "" || empty($admPsw)) ){
            echo "<h4 style='color:red'>新增時，請輸入完整資訊</h4>";
        }else{
            try{
                $sql = "INSERT INTO `admins` (admId,admPsw,admPer,admStatus)";
                $sql .= "VALUE(:admId,:admPsw,:admPer,:admStatus)";
                $statement =  $pdo-> prepare($sql);
                $statement -> bindValue(':admId', $admId);
                $statement -> bindValue(':admPsw', $admPsw);
                $statement -> bindValue(':admPer', $admPer);
                $statement -> bindValue(':admStatus', $admStatus);
                $insertRow = $statement->execute();
                header("Location: admin.php");	
            }catch(PDOException $e){
                $errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
                $errMsg .=  "錯誤行號" . $e->getLine() . "<br>";
            }
            echo $errMsg;
        }
    }
}


function delete_admin(){
    $errMsg = ""; 
    global $pdo;
    if(isset($_GET['delete'])){
        $admNo = $_GET['delete'];
        $admStatus = 0;
        try{
            $sql = "UPDATE `admins` SET admStatus = :admStatus WHERE admNo = :admNo";
            $statement =  $pdo-> prepare($sql);
            $statement -> bindValue(':admNo', $admNo);
            $statement -> bindValue(':admStatus', $admStatus);
            $deleteRow = $statement->execute();
            header("Location: admin.php");
        }catch(PDOException $e){
            $errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
            $errMsg .=  "錯誤行號" . $e->getLine() . "<br>";
        }
        echo $errMsg;
    }
}


function update_admin(){
    $errMsg = ""; 
    global $pdo;
    if( isset($_POST['update']) ){
        $admNo =  $_POST['admNo'];
        $admId = $_POST['admId'];
        $admPsw = $_POST['admPsw'];  
        $admPer = $_POST['admPer'];                                          
        $admStatus = $_POST['admStatus'];
        try{
            $sql = "UPDATE `admins` SET admId=:admId, admPsw=:admPsw, admPer=:admPer, admStatus=:admStatus WHERE admNo = :admNo";
            $statement =  $pdo-> prepare($sql);
            $statement -> bindValue(':admNo', $admNo);
            $statement -> bindValue(':admId', $admId);
            $statement -> bindValue(':admPsw', $admPsw);
            $statement -> bindValue(':admPer', $admPer);
            $statement -> bindValue(':admStatus', $admStatus);
            $updateRow = $statement->execute();
            header("Location: admin.php");
        }catch(PDOException $e){
            $errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
            $errMsg .=  "錯誤行號" . $e->getLine() . "<br>";
        }
        echo $errMsg;
    }
}

?>
