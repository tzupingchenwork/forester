
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
        $sql = "SELECT a.noteCommRepNo AS noteCommRepNo,
                       a.noteCommNo AS noteCommNo,
                       a.noteCommRepReason AS noteCommRepReason,
                       a.noteCommRepStatus AS noteCommRepStatus, 
                       b.noteCommContent AS noteCommContent
                FROM `notecommentreport` a
                INNER JOIN `notecomment` b ON a.noteCommNo = b.noteCommNo
                ORDER BY a.noteCommRepNo";

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

                        <h2 class="page-header">手札留言檢舉管理<small></small></h2>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover table-sm">
                                <thead>
                                <tr>
                                    <th>手札留言檢舉編號</th>
                                    <th>留言內容</th>
                                    <th>檢舉原因</th>
                                    <th>檢舉狀態</th>
                                    <th>檢舉狀態異動</th>
                                </tr>
                                </thead>
                                <tbody>


                                    <?PHP while( $adminRow = $admins->fetch() ){ ?>    

                                    <tr class="showInput">
                                        <td><?PHP echo $adminRow['noteCommRepNo']; ?></td>
                                        <td><?PHP echo $adminRow['noteCommContent']; ?></td>
                                        <td><?PHP echo $adminRow['noteCommRepReason']; ?></td>
                                        <td>
                                            <?PHP if( $adminRow['noteCommRepStatus'] == '0'){
                                                echo "未處理";
                                            }else{
                                                echo "已處理";
                                            }?>
                                        </td>
                                        <td>
                                        <?php 
                                            if( $adminRow['noteCommRepStatus'] == '0'){
                                                echo "<a href='gamePhotoReport.php?delete=<?PHP echo {$adminRow['noteCommRepNo']}; ?>&photoNo=<?PHP echo {$adminRow['noteCommNo']}; ?>' class='btn btn-danger btn-sm'>刪除評價</a>";
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
                                            $noteCommRepNo =  $_GET['delete'];
                                            $noteCommNo = $_GET['noteCommNo'];

                                            try{
                                                $sql = "UPDATE `notecommentreport` SET noteCommRepStatus=1 WHERE noteCommRepNo=:noteCommRepNo";
                                                $statement =  $pdo-> prepare($sql);
                                                $statement -> bindValue(':noteCommRepNo', $noteCommRepNo);
                                                $updateRow = $statement->execute();
                                            }catch(PDOException $e){
                                                $errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
                                                $errMsg .=  "錯誤行號" . $e->getLine() . "<br>";
                                            }

                                            // 刪除 eventevaluation 評價
                                            try{
                                                $sql = "UPDATE `notecomment` SET noteCommStatus=0 WHERE noteCommNo=:noteCommNo";
                                                $statement =  $pdo-> prepare($sql);
                                                $statement -> bindValue(':noteCommNo', $noteCommNo);
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
