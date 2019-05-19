
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
        $sql = "SELECT * FROM `member`";
        $member = $pdo->query($sql);    
    }catch(PDOException $e){
		$errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
		$errMsg .=  "錯誤行號" . $e->getLine() . "<br>";
	}
	echo $errMsg;
?>

<?php
    $errMsg = "";
    if( isset($_GET['update']) ){
        $memNo =  $_GET['update'];                                  
        $memStatus = $_GET['memStatus'];
        try{
            $sql = "UPDATE `member` SET memStatus=:memStatus WHERE memNo=:memNo";
            $statement =  $pdo-> prepare($sql);
            $statement -> bindValue(':memNo', $memNo);
            $statement -> bindValue(':memStatus', $memStatus);
            $updateRow = $statement->execute();
            header("Location: member.php");
        }catch(PDOException $e){
            $errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
            $errMsg .=  "錯誤行號" . $e->getLine() . "<br>";
        }
        echo $errMsg;
    }
?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">

                    <div class="col-lg-12">
                        <h2 class="page-header">會員帳號管理<small></small></h2>

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
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>會員編號</th>
                                        <th>會員帳號</th>
                                        <th>會員狀態</th>
                                        <th>狀態異動</th>
                                    </tr>
                                </thead>
                                <tbody>           
                                    <?php 
                                        while($memRow = $member->fetch()){
                                            $memNo = $memRow['memNo'];
                                            $memId = $memRow['memId'];
                                            $memStatus = $memRow['memStatus'];
                                    ?>
                                    <tr>
                                        <td><?php echo $memNo; ?></td>
                                        <td><?php echo $memId; ?></td>
                                        <td>
                                            <?php
                                                if( $memStatus == 0){
                                                    echo '停權';
                                                }else if( $memStatus == 1){
                                                    echo '正常';
                                                }
                                            ?>      
                                        </td>
                                        <td>
                                            <?php 
                                                if( $memStatus == 0){
                                                    echo "<a href='member.php?update={$memRow['memNo']}&memStatus=1' class='btn btn-success btn-sm saveBtn'>恢復正常</a>";
                                                }else if($memStatus  == 1){
                                                    echo "<a href='member.php?update={$memRow['memNo']}&memStatus=0' class='btn btn-danger btn-sm editBtn'>停權</a>";
                                                }                            
                                            ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
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





