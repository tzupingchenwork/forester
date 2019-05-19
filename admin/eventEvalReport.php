
<!-- header -->
<?php include "includes/header.php"; ?>

<?php 

    if(isset($_SESSION['admNo'])){
        ;	
    }else{
        header("Location: login.php");	
    }

?>

<!-- Set Sqlquery -->
<?php
	$errMsg = ""; 
    try{
        $sql = "SELECT * FROM `eventevaluationreport`";
        $admins = $pdo->query($sql);    
    }catch(PDOException $e){
		$errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
		$errMsg .=  "錯誤行號" . $e->getLine() . "<br>";
	}
	echo $errMsg;
?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">

                    <div class="col-lg-12">

                        <h2 class="page-header">活動評價檢舉管理<small></small></h2>

                        <?php 
                            if(isset($_POST['add'])){
                                $admNo = $_POST['admNo'];
                                $admLoc = $_POST['admLoc'];
                                if(( $admNo == "" || empty($admNo)) ||
                                ( $admLoc == "" || empty($admLoc))){
                                    echo "<h4 style='color:red'>新增時，請輸入完整資訊</h4>";
                                }else{
                                    try{
                                        $sql = "INSERT INTO `adminslocation` (admNo,admLoc)";
                                        $sql .= "VALUE(:admNo,:admLoc)";
                                        $statement =  $pdo-> prepare($sql);
                                        $statement -> bindValue(':admNo', $admNo);
                                        $statement -> bindValue(':admLoc', $admLoc);                                        $insertRow = $statement->execute();
                                        header("Location: game.php");	
                                    }catch(PDOException $e){
                                        $errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
                                        $errMsg .=  "錯誤行號" . $e->getLine() . "<br>";
                                    }
                                    echo $errMsg;
                                }
                            }
                        ?> 

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover table-sm">
                                <thead>
                                <tr>
                                    <th>活動評價檢舉編號</th>
                                    <th>評價內容</th>
                                    <th>檢舉原因</th>
                                    <th>檢舉狀態</th>
                                    <th>檢舉狀態異動</th>
                                </tr>
                                </thead>
                                <tbody>


                                    <?PHP while( $adminRow = $admins->fetch() ){ ?>    

                                    <tr class="showInput">
                                        <td><?PHP echo $adminRow['entEvalRepNo']; ?></td>
                                        <td><?PHP echo $adminRow['entEvalContent']; ?></td>
                                        <td><?PHP echo $adminRow['entEvalRepReason']; ?></td>
                                        <td>
                                            <?PHP if( $adminRow['entEvalRepStatus'] == '0'){
                                                echo "未處理";
                                            }else{
                                                echo "已處理";
                                            }?>
                                        </td>
                                        <td>
                                        <?php 
                                            if( $adminRow['entEvalRepStatus'] == '0'){
                                                echo "<a href='eventEvaReport.php?delete=<?PHP echo {$adminRow['entEvalNo']}; ?>&photoNo=<?PHP echo {$adminRow['entEvalRepNo']}; ?>' class='btn btn-danger btn-sm'>刪除評價</a>";
                                            }else{
                                                echo "<a href='javascript:;' class='btn btn-success btn-sm'>已處裡評價</a>";
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <?php } ?>    
                                    
                                    <?php 
                                        if( isset($_GET['delete']) ){
                                            // 更新狀態 eventevaluationreport 狀態
                                            $entEvalRepNo =  $_GET['delete'];
                                            $entEvalNo = $_GET['entEvalNo'];

                                            try{
                                                $sql = "UPDATE `eventevaluationreport` SET entEvalRepStatus=1 WHERE entEvalRepNo=:entEvalRepNo";
                                                $statement =  $pdo-> prepare($sql);
                                                $statement -> bindValue(':entEvalRepNo', $entEvalRepNo);
                                                $updateRow = $statement->execute();
                                            }catch(PDOException $e){
                                                $errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
                                                $errMsg .=  "錯誤行號" . $e->getLine() . "<br>";
                                            }

                                            // 刪除 eventevaluation 評價
                                            try{
                                                $sql = "UPDATE `eventevaluation` SET entEvalStatus=0 WHERE entEvalNo=:entEvalNo";
                                                $statement =  $pdo-> prepare($sql);
                                                $statement -> bindValue(':entEvalNo', $entEvalNo);
                                                $deleteRow = $statement->execute();
                                            }catch(PDOException $e){
                                                $errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
                                                $errMsg .=  "錯誤行號" . $e->getLine() . "<br>";
                                            }

                                            echo $errMsg;
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include "includes/footer.php"; ?>
