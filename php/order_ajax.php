<?php
ob_start();
session_start();
$errMsg = "";
$memNo = $_SESSION["memNo"];
$_SESSION["buyPlanNo"] = $_REQUEST["planNo"];

try{
    require_once("connect_order.php");
    $planlist=$_REQUEST["planlist"];
    
    $sql5 = "select * from `event` where entNo in ($planlist)";
    // exit($sql4);
    $plan = $pdo->query($sql5);
    $html = "";
    ?>
    <table>
        <thead>
            <tr>
                <th>活動</th>
                <th>小計</th>
            </tr>
        </thead>
        <tbody>
    <?php while( $planRow = $plan->fetch(PDO::FETCH_ASSOC)){ 
    ?>
            <tr>
                <td><?php echo $planRow["entName"]?></td>
                <td class="act_price"><?php echo $planRow["entPrice"]?></td>
            </tr>
    <?php
        }
    ?>
        </tbody>
    </table>
<?php  
}catch(PDOException $e){
    $errMsg .= "錯誤原因" . $e->getMessage() . "<br>";
    $errMsg .= "錯誤行號" . $e->getLine() . "<br>";
    echo $errMsg;
}
?>