<?php
    session_start();
    $entNo = $_GET['entNo'];
    
    if(isset($_SESSION['entNo'][$entNo]) === false){
        $_SESSION['entNo'][$entNo] = $entNo;
        echo ($entNo);
    }else{
        echo 'false';
        // $entNo.exit();
    }
    // try {
    //     require_once("connectDb.php");
    //     $sql="SELECT * from `event` where entNo=:entNo";
    //     $event = $pdo->prepare($sql);
    //     $event -> bindValue(':entNo',$entNo);
    //     $event -> execute();

    //     // $_SESSION['entNo'] = array();           
    //     // if(isset($_SESSION['entNo']) == 1){
    //     //     echo 'false';
    //     // }else{

    //     $eventRows = $event->fetch(PDO::FETCH_ASSOC);
        
    //     // array_push($_SESSION['entNo'],$eventRows['entNo']);
    //     $_SESSION['entNo'] =$eventRows['entNo'];        
    //     $a =$_SESSION['entNo'];
    //     echo  $a;
    //     // }

    // } catch (PDOException $e) {
    //     echo "失敗",$e->getMessage(),"<br>";
    //     echo "行號",$e->getLine();
    // }
?>