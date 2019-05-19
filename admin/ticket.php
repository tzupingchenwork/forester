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
        $sql = "SELECT * FROM `ticket`";
        $ticket = $pdo->query($sql);    
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
                        <h2 class="page-header">門票管理<small></small></h2>

                        <?php 
                            if(isset($_POST['add'])){
                                $tktName = $_POST['tktName'];
                                $tktDesc = $_POST['tktDesc'];
                                $tktPrice = $_POST['tktPrice'];
                                $tktQuan = $_POST['tktQuan'];
                                $tktStatus = $_POST['tktStatus'];
                                if(( $tktName == "" || empty($tktName)) ||
                                ( $tktDesc == "" || empty($tktDesc)) ||
                                ( $tktPrice == "" || empty($tktPrice)) || 
                                ( $tktQuan == "" || empty($tktQuan)) ){
                                    echo "<h4 style='color:red'>新增時，請輸入完整資訊</h4>";
                                }else{
                                    try{
                                        $sql = "INSERT INTO `ticket` (tktName,tktDesc,tktPrice,tktQuan,tktStatus)";
                                        $sql .= "VALUE(:tktName,:tktDesc,:tktPrice,:tktQuan,:tktStatus)";
                                        $statement =  $pdo-> prepare($sql);
                                        $statement -> bindValue(':tktName', $tktName);
                                        $statement -> bindValue(':tktDesc', $tktDesc);
                                        $statement -> bindValue(':tktPrice', $tktPrice);
                                        $statement -> bindValue(':tktQuan', $tktQuan);
                                        $statement -> bindValue(':tktStatus', $tktStatus);
                                        $insertRow = $statement->execute();
                                        header("Location: ticket.php");	
                                    }catch(PDOException $e){
                                        $errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
                                        $errMsg .=  "錯誤行號" . $e->getLine() . "<br>";
                                    }
                                    echo $errMsg;
                                }
                            }
                        ?> 

                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>票種編號</th>
                                        <th>票種名稱</th>
                                        <th>票種敘述</th>
                                        <th>票種價格</th>
                                        <th>票種數量</th>
                                        <th>票種狀態</th>
                                        <th>票種狀態異動</th>
                                    </tr>
                                </thead>
                                <tbody>      

                                <tr class="addInput">
                                        <form action="" method="post">
                                            <input type="hidden" name="tktStatus" value="1">
                                            <td></td>
                                            <td><input name="tktName" class="form-control form-control-sm" type="text"></td>
                                            <td><input name="tktDesc" class="form-control form-control-sm" type="text"></td>
                                            <td><input name="tktPrice" class="form-control form-control-sm" type="text"></td>
                                            <td><input name="tktQuan" class="form-control form-control-sm" type="text"></td>
                                            <td></td>
                                            <td><input name="add" type="submit" class="btn btn-primary btn-sm" value="新增"></td>
                                        </form>
                                    </tr>


                                    <?php 
                                        if( isset($_GET['edit']) ){
                                            $tktNo = $_GET['edit'];
                                            $errMsg = ""; 
                                            try{
                                                $sql = "SELECT * FROM `ticket` WHERE tktNo='{$tktNo}'";
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
                                                <input type="hidden" name="tktNo" value="<?php echo $editRow['tktNo'] ?>">
                                                <td><?php echo $editRow['tktNo'] ?></td>
                                                <td><input name="tktName" class="form-control form-control-sm" type="text" value="<?php echo $editRow['tktName'] ?>"></td>
                                                <td><input name="tktDesc" class="form-control form-control-sm" type="text" value="<?php echo $editRow['tktDesc'] ?>"></td>
                                                <td><input name="tktPrice" class="form-control form-control-sm" type="text" value="<?php echo $editRow['tktPrice'] ?>"></td>
                                                <td><input name="tktQuan" class="form-control form-control-sm" type="text" value="<?php echo $editRow['tktQuan'] ?>"></td>
                                                <td>
                                                    <select name="tktStatus" id="tktStatus" class="form-control form-control-sm">
                                                        <option <?php if( $editRow['tktStatus'] == 0 ) echo 'selected' ;?> value="0">下架</option>
                                                        <option <?php if( $editRow['tktStatus'] == 1 ) echo 'selected' ;?> value="1">正常</option>
                                                    </select>
                                                </td>
                                                <td><input name="update" name="submit" type="submit" class="btn btn-primary btn-sm saveBtn" value="儲存"></td>
                                            </form>
                                        </tr>

                                    <?php
                                        }
                                    ?>

                                    <?php while($tktRow = $ticket->fetch()){?>
                                        <tr>
                                            <td><?php echo $tktRow['tktNo']; ?></td>
                                            <td><?php echo $tktRow['tktName']; ?></td>
                                            <td><?php echo $tktRow['tktDesc']; ?></td>
                                            <td><?php echo $tktRow['tktPrice']; ?></td>
                                            <td><?php echo $tktRow['tktQuan']; ?></td>
                                            <td>
                                            <?php
                                                if($tktRow['tktStatus'] == 0){
                                                echo '下架';
                                                }else if($tktRow['tktStatus'] == 1){
                                                echo '正常';
                                                }
                                            ?>      
                                            </td>
                                            <td>
                                                <a href="ticket.php?delete=<?PHP echo $tktRow['tktNo']; ?>" class="btn btn-danger btn-sm">下架</a>
                                                <a href="ticket.php?edit=<?PHP echo $tktRow['tktNo']; ?>" class="btn btn-success btn-sm editBtn">編輯</a>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                    <?php 
                                        if(isset($_GET['delete'])){
                                            $tktNo = $_GET['delete'];
                                            $tktStatus = 0;
                                            try{
                                                $sql = "UPDATE `ticket` SET tktStatus = :tktStatus WHERE tktNo = :tktNo";
                                                $statement =  $pdo-> prepare($sql);
                                                $statement -> bindValue(':tktNo', $tktNo);
                                                $statement -> bindValue(':tktStatus', $tktStatus);
                                                $deleteRow = $statement->execute();
                                                header("Location: ticket.php");
                                            }catch(PDOException $e){
                                                $errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
                                                $errMsg .=  "錯誤行號" . $e->getLine() . "<br>";
                                            }
                                            echo $errMsg;
                                        }

                                        if( isset($_POST['update']) ){
                                            $tktNo =  $_POST['tktNo'];
                                            $tktName = $_POST['tktName'];
                                            $tktDesc = $_POST['tktDesc']; 
                                            $tktPrice = $_POST['tktPrice'];     
                                            $tktQuan = $_POST['tktQuan'];                                      
                                            $tktStatus = $_POST['tktStatus'];
                                            try{
                                                $sql = "UPDATE `ticket` SET tktName=:tktName, tktDesc=:tktDesc, tktPrice=:tktPrice, tktQuan=:tktQuan, tktStatus=:tktStatus WHERE tktNo=:tktNo";
                                                $statement =  $pdo-> prepare($sql);
                                                $statement -> bindValue(':tktNo', $tktNo);
                                                $statement -> bindValue(':tktName', $tktName);
                                                $statement -> bindValue(':tktDesc', $tktDesc);
                                                $statement -> bindValue(':tktPrice', $tktPrice);
                                                $statement -> bindValue(':tktQuan', $tktQuan);
                                                $statement -> bindValue(':tktStatus', $tktStatus);
                                                $updateRow = $statement->execute();
                                                header("Location: ticket.php");
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





