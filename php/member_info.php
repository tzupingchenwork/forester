<?php
require_once("connect.php");
// session_start();
$memNo=$_SESSION["memNo"];

$errMsg = "";


try {

    //我的資料
    $sql_mem = "select * from member where memNo = $memNo;";
    $mem = $pdo -> query($sql_mem);  //下指令
    $memRow = $mem->fetch(PDO::FETCH_ASSOC);   
    //訂票紀錄-訂單編號、訂單狀態、入營日期、票種張數、行程名稱、訂單金額
    $sql_ord = "select * 
    from `order` o
    left outer join(
        select ordNo, tktNo tktNo1,tktPrice tktPrice1,buyQuan buyQuan1
        from orderdetail
        limit 0,1)as t1 using(ordNo)
    left outer join(
        select ordNo, tktNo tktNo2,tktPrice tktPrice2,buyQuan buyQuan2
        from orderdetail
        limit 1,1)as t2 using(ordNo)
    left outer join(
        select ordNo, tktNo tktNo3,tktPrice tktPrice3,buyQuan buyQuan3
        from orderdetail
        limit 2,1)as t3 using(ordNo)
    left outer join (select planNo,memNo,planName from plan) p using(planNo)
    left outer join (
                select ordNo, entNo entNo1,entUseStatus entUseStatus1,entName entName1
                from eveninplan
                left outer join (select *
                                from `event`) e using(entNo)
                limit 0,1)as e1 using(ordNo) 
    left outer join (
                select ordNo, entNo entNo2,entUseStatus entUseStatus2,entName entName2
                from eveninplan
                left outer join (select *
                                from `event`) e using(entNo)
                limit 1,1)as e2 using(ordNo)
    left outer join (
                select ordNo, entNo entNo3,entUseStatus entUseStatus3,entName entName3
                from eveninplan
                left outer join (select *
                                from `event`) e using(entNo)
                limit 2,1)as e3 using(ordNo)
    left outer join (
                select ordNo, entNo entNo4,entUseStatus entUseStatus4,entName entName4
                from eveninplan
                left outer join (select *
                                from `event`) e using(entNo)
                limit 3,1)as e4 using(ordNo)
    left outer join (
                select ordNo, entNo entNo5,entUseStatus entUseStatus5,entName entName5
                from eveninplan
                left outer join (select *
                                from `event`) e using(entNo)
                limit 4,1)as e5 using(ordNo)
    where o.memNo=$memNo";
    $ord = $pdo -> query($sql_ord);
  
    
    
    $data = $_REQUEST['oldpsd'];
    $data1 = $_REQUEST['newpsd'];
    
    if($data == $memRow["memPsw"]){
              
        $sql = "update member set memPsw = $data1 where memNo = $memNo";
        $mem = $pdo -> exec($sql);  //下指令
        echo "修改密碼成功!";
     
        // echo $mem->rowCount();
    }else if($data != $memRow["memPsw"] && $data!=null){
        echo "舊密碼錯誤，修改失敗!";
    }
        
        // echo json_encode($memRow);
        // print_r($memRow);
} catch (PDOException $e) {
    $errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
    $errMsg .=  "錯誤行號" . $e->getLine() . "<br>";  	
}	

echo $errMsg; 
?>
