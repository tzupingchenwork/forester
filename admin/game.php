
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
        $sql = "SELECT * FROM `adminslocation`";
        $admins = $pdo->query($sql);
        $adminsLoc = $pdo->query($sql);
    }catch(PDOException $e){
		$errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
		$errMsg .=  "錯誤行號" . $e->getLine() . "<br>";
	}
	echo $errMsg;
?>
<script>
  var globalVariable = <?php echo json_encode( $adminsLoc -> fetchAll());?>
</script>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">

                    <div class="col-lg-12">
                        <h2 class="page-header">尋找森存者遊戲管理<small> 在地圖上點擊以取得座標位置。</small></h2>

                        <div id="mapboard" class="mapboard">
                            <img id="map" class ="map" width="100%" src="../images/map.png" alt="map">
                        </div>

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
                                    <th>工作人員編號</th>
                                    <th>管理員編號</th>
                                    <th>座標</th>
                                    <th>異動</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr class="addInput">
                                        <form action="" method="post">
                                            <td></td>
                                            <td><input name="admNo" class="form-control form-control-sm" type="text" value="<?php echo $_SESSION['admNo']; ?>"></td>
                                            <td><input id="insetLoc" name="admLoc" class="form-control form-control-sm" type="text"></td>
                                            <td><input name="add" type="submit" class="btn btn-primary btn-sm" value="新增"></td>
                                        </form>
                                    </tr>


                                    <?php 
                                        if( isset($_GET['edit']) ){
                                            $staffNo = $_GET['edit'];
                                            $errMsg = ""; 
                                            try{
                                                $sql = "SELECT * FROM `adminslocation` WHERE staffNo='{$staffNo}'";
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
                                            <input type="hidden" name="staffNo" value="<?php echo $editRow['staffNo'] ?>">
                                            <td><?php echo $editRow['staffNo'] ?></td>
                                            <td><input name="admNo" class="form-control form-control-sm" type="text" value="<?php echo $editRow['admNo'] ?>"></td>
                                            <td><input name="admLoc" class="form-control form-control-sm" type="text" value="<?php echo $editRow['admLoc'] ?>"></td>
                                            <td><input name="update" name="submit" type="submit" class="btn btn-primary btn-sm saveBtn" value="儲存"></td>
                                        </form>
                                    </tr>

                                    <?php
                                        }
                                    ?>

                                    <?PHP while( $adminRow = $admins->fetch() ){ ?>    

                                    <tr class="showInput">
                                        <td><?PHP echo $adminRow['staffNo']; ?></td>
                                        <td><?PHP echo $adminRow['admNo']; ?></td>
                                        <td><?PHP echo $adminRow['admLoc']; ?></td>
                                        <td>
                                            <a href="game.php?delete=<?PHP echo $adminRow['staffNo']; ?>" class="btn btn-danger btn-sm">刪除</a>
                                            <a href="game.php?edit=<?PHP echo $adminRow['staffNo']; ?>" class="btn btn-success btn-sm editBtn">編輯</a>
                                        </td>
                                    </tr>
                                    <?php } ?>    
                                    
                                    <?php 
                                        if(isset($_GET['delete'])){
                                            $staffNo = $_GET['delete'];
                                            try{
                                                $sql = "DELETE FROM `adminslocation` WHERE staffNo = :staffNo";
                                                $statement =  $pdo-> prepare($sql);
                                                $statement -> bindValue(':staffNo', $staffNo);
                                                $deleteRow = $statement->execute();
                                                header("Location: game.php");
                                            }catch(PDOException $e){
                                                $errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
                                                $errMsg .=  "錯誤行號" . $e->getLine() . "<br>";
                                            }
                                            echo $errMsg;
                                        }




                                        if( isset($_POST['update']) ){
                                            $staffNo =  $_POST['staffNo'];
                                            $admNo = $_POST['admNo'];
                                            $admLoc = $_POST['admLoc'];                                      
                                            try{
                                                $sql = "UPDATE `adminslocation` SET admNo=:admNo, admLoc=:admLoc WHERE staffNo = :staffNo";
                                                $statement =  $pdo-> prepare($sql);
                                                $statement -> bindValue(':staffNo', $staffNo);
                                                $statement -> bindValue(':admNo', $admNo);
                                                $statement -> bindValue(':admLoc', $admLoc);
                                                $updateRow = $statement->execute();
                                                header("Location: game.php");
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
