
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
        $sql = "SELECT * FROM `robot`";
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
                        <h2 class="page-header">關鍵字管理<small></small></h2>

                        <?php 
                            if(isset($_POST['add'])){
                                $rbtName = $_POST['rbtName'];
                                $rbtAns = $_POST['rbtAns'];
                                $rbtStatus = $_POST['rbtStatus'];
                                if(( $rbtName == "" || empty($rbtName)) ||
                                ( $rbtAns == "" || empty($rbtAns)) ||
                                ( $rbtStatus == "" || empty($rbtStatus))){
                                    echo "<h4 style='color:red'>新增時，請輸入完整資訊</h4>";
                                }else{
                                    try{
                                        $sql = "INSERT INTO `robot` (rbtName,rbtAns,rbtStatus)";
                                        $sql .= "VALUE(:rbtName,:rbtAns,:rbtStatus)";
                                        $statement =  $pdo-> prepare($sql);
                                        $statement -> bindValue(':rbtName', $rbtName);
                                        $statement -> bindValue(':rbtAns', $rbtAns);
                                        $statement -> bindValue(':rbtStatus', $rbtStatus);
                                        $insertRow = $statement->execute();
                                        header("Location: keyword.php");	
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
                                        <th>關鍵字編號</th>
                                        <th>關鍵字</th>
                                        <th>關鍵字回應</th>
                                        <th>狀態</th>
                                        <th>狀態異動</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="addInput">
                                        <form action="" method="post">
                                            <input type="hidden" name="rbtStatus" value="1">
                                            <td></td>
                                            <td><input name="rbtName" class="form-control form-control-sm" type="text"></td>
                                            <td><input name="rbtAns" class="form-control form-control-sm" type="text"></td>
                                            <td></td>
                                            <td><input name="add" type="submit" class="btn btn-primary btn-sm" value="新增"></td>
                                        </form>
                                    </tr>


                                    <?php 
                                        if( isset($_GET['edit']) ){
                                            $rbtNo = $_GET['edit'];
                                            $errMsg = ""; 
                                            try{
                                                $sql = "SELECT * FROM `robot` WHERE rbtNo='{$rbtNo}'";
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
                                            <input type="hidden" name="rbtNo" value="<?php echo $editRow['rbtNo'] ?>">
                                                <td><?php echo $editRow['rbtNo'] ?></td>
                                                <td><input name="rbtName" class="form-control form-control-sm" type="text" value="<?php echo $editRow['rbtName'] ?>"></td>
                                                <td><input name="rbtAns" class="form-control form-control-sm" type="text" value="<?php echo $editRow['rbtAns'] ?>"></td>
                                                <td>
                                                    <select name="rbtStatus" id="rbtStatus" class="form-control form-control-sm">
                                                        <option <?php if( $editRow['rbtStatus'] == 0 ) echo 'selected' ;?> value="0">下架</option>
                                                        <option <?php if( $editRow['rbtStatus'] == 1 ) echo 'selected' ;?> value="1">正常</option>
                                                    </select>
                                                </td>
                                                <td><input name="update" name="submit" type="submit" class="btn btn-primary btn-sm saveBtn" value="儲存"></td>
                                            </form>
                                        </tr>

                                    <?php
                                        }
                                    ?>

                                    <?PHP while( $adminRow = $admins->fetch() ){ ?>    

                                    <tr class="showInput">
                                        <td><?PHP echo $adminRow['rbtNo']; ?></td>
                                        <td><?PHP echo $adminRow['rbtName']; ?></td>
                                        <td><?PHP echo $adminRow['rbtAns']; ?></td>
                                        <td><?PHP 
                                                if( $adminRow['rbtStatus'] == 0 ){
                                                    echo "下架";
                                                }else{
                                                    echo "正常";
                                                }
                                         ?></td>
                                        <td>
                                            <a href="keyword.php?delete=<?PHP echo $adminRow['rbtNo']; ?>" class="btn btn-danger btn-sm">下架</a>
                                            <a href="keyword.php?edit=<?PHP echo $adminRow['rbtNo']; ?>" class="btn btn-success btn-sm editBtn">編輯</a>
                                        </td>
                                    </tr>
                                    <?php } ?>    
                                    
                                    <?php 
                                        if(isset($_GET['delete'])){
                                            $rbtNo = $_GET['delete'];
                                            $rbtStatus = 0;
                                            try{
                                                $sql = "UPDATE `robot` SET rbtStatus = :rbtStatus WHERE rbtNo = :rbtNo";
                                                $statement =  $pdo-> prepare($sql);
                                                $statement -> bindValue(':rbtNo', $rbtNo);
                                                $statement -> bindValue(':rbtStatus', $rbtStatus);
                                                $deleteRow = $statement->execute();
                                                header("Location: keyword.php");
                                            }catch(PDOException $e){
                                                $errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
                                                $errMsg .=  "錯誤行號" . $e->getLine() . "<br>";
                                            }
                                            echo $errMsg;
                                        }




                                        if( isset($_POST['update']) ){
                                            $rbtNo =  $_POST['rbtNo'];
                                            $rbtName = $_POST['rbtName'];
                                            $rbtAns = $_POST['rbtAns'];                                      
                                            $rbtStatus = $_POST['rbtStatus'];
                                            try{
                                                $sql = "UPDATE `robot` SET rbtName=:rbtName, rbtAns=:rbtAns, rbtStatus=:rbtStatus WHERE rbtNo = :rbtNo";
                                                $statement =  $pdo-> prepare($sql);
                                                $statement -> bindValue(':rbtNo', $rbtNo);
                                                $statement -> bindValue(':rbtName', $rbtName);
                                                $statement -> bindValue(':rbtAns', $rbtAns);
                                                $statement -> bindValue(':rbtStatus', $rbtStatus);
                                                $updateRow = $statement->execute();
                                                header("Location: keyword.php");
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

