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
        $sql = "SELECT a.ordNo AS ordNo,
                       a.memNo AS memNo,
                       a.ordStatus AS ordStatus,
                       b.memId AS memId 
                FROM `order` a
                INNER JOIN `member` b ON a.memNo = b.memNo
                ORDER BY a.ordNo";

        $order = $pdo->query($sql);    
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

                        <h2 class="page-header">訂單管理<small></small></h2>

                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>訂單編號 </th>
                                        <th>會員帳號 </th>
                                        <th>訂單狀態 </th>
                                        <th>狀態異動</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php 
                                        if( isset($_GET['edit']) ){
                                            $ordNo = $_GET['edit'];
                                            $memId = $_GET['memId'];
                                            $errMsg = ""; 
                                            try{
                                                $sql = "SELECT * FROM `order` WHERE ordNo='{$ordNo}'";
                                                $statement = $pdo->query($sql);    
                                                $editRow = $statement->fetch();
                                            }catch(PDOException $e){
                                                $errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
                                                $errMsg .=  "錯誤行號" . $e->getLine() . "<br>";
                                            }
                                            echo $errMsg;
                                    ?>

                                        <tr class="editInput">
                                            <form action="" method="post">
                                                <input type="hidden" name="ordNo" value=<?php echo $ordNo ?>>
                                                <td><?php echo $ordNo ?></td>
                                                <td><?php echo $memId ?></td>
                                                <td>
                                                    <select name="ordStatus" id="ordStatus" class="form-control form-control-sm">
                                                        <option <?php if( $editRow['ordStatus'] == 0 ) echo 'selected' ;?> value="0">未使用</option>
                                                        <option <?php if( $editRow['ordStatus'] == 1 ) echo 'selected' ;?> value="1">已使用</option>
                                                        <option <?php if( $editRow['ordStatus'] == 2 ) echo 'selected' ;?> value="2">已退票</option>
                                                    </select>
                                                </td>
                                                <td><input name="update" name="submit" type="submit" class="btn btn-primary btn-sm saveBtn" value="儲存"></td>
                                            </form>
                                        </tr>

                                    <?php
                                        }
                                    ?>

                                    <?php while($ordRow = $order->fetch()){?>
                                        <tr>
                                            <td><?php echo $ordRow['ordNo']; ?></td>
                                            <td><?php echo $ordRow['memId']; ?></td>
                                            <td>
                                                <?php
                                                    if($ordRow['ordStatus'] == 0){
                                                        echo '未使用';
                                                    }else if($ordRow['ordStatus'] == 1){
                                                        echo '已使用';
                                                    }else if($ordRow['ordStatus'] == 2){
                                                        echo '已過期';
                                                    }
                                                ?>      
                                            </td>
                                            <td>
                                                <a href="order.php?edit=<?PHP echo $ordRow['ordNo']; ?>&memId=<?PHP echo $ordRow['memId']; ?>" class="btn btn-success btn-sm editBtn">編輯</a>
                                            </td>
                                        </tr>
                                    <?php } ?>


                                    <?php 
                                        if( isset($_POST['update']) ){
                                            $ordNo =  $_POST['ordNo'];
                                            $ordStatus =  $_POST['ordStatus'];
                                            try{
                                                $sql = "UPDATE `order` SET ordStatus=:ordStatus WHERE ordNo=:ordNo";
                                                $statement =  $pdo-> prepare($sql);
                                                $statement -> bindValue(':ordNo', $ordNo);
                                                $statement -> bindValue(':ordStatus', $ordStatus);
                                                $updateRow = $statement->execute();
                                                header("Location:order.php");
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