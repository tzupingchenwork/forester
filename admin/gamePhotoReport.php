
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
        $sql = "SELECT * FROM `photoreport`";
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

                        <h2 class="page-header">尋找森存者遊戲照片檢舉管理<small></small></h2>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover table-sm">
                                <thead>
                                <tr>
                                    <th>照片檢舉編號</th>
                                    <th>照片</th>
                                    <th>檢舉原因</th>
                                    <th>檢舉狀態</th>
                                    <th>檢舉狀態異動</th>
                                </tr>
                                </thead>
                                <tbody>


                                    <?PHP while( $adminRow = $admins->fetch() ){ ?>    

                                    <tr class="showInput">
                                        <td><?PHP echo $adminRow['photoRepNo']; ?></td>
                                        <td><img style="width:200px" src="../images/<?PHP echo $adminRow['photoWForester']; ?>" alt="<?PHP echo $adminRow['photoWForester']; ?>"></td>
                                        <td><?PHP echo $adminRow['photoRepReason']; ?></td>
                                        <td>
                                            <?PHP if( $adminRow['photoRepStatus'] == '0'){
                                                echo "未處理";
                                            }else{
                                                echo "已處理";
                                            }?>
                                        </td>
                                        <td>
                                            <?php 
                                                if( $adminRow['photoRepStatus'] == '0'){
                                                    echo "<a href='gamePhotoReport.php?delete=<?PHP echo {$adminRow['photoRepNo']}; ?>&photoNo=<?PHP echo {$adminRow['photoNo']}; ?>' class='btn btn-danger btn-sm'>刪除評價</a>";
                                                }else{
                                                    echo "<a href='javascript:;' class='btn btn-success btn-sm'>已處裡評價</a>";
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                    <?php } ?>    
                                    
                                    <?php 
                                        if( isset($_GET['delete']) ){
                                            // 更新狀態 photoreport 狀態
                                            $photoRepNo =  $_GET['delete'];
                                            $photoNo = $_GET['photoNo'];

                                            try{
                                                $sql = "UPDATE `photoreport` SET photoRepStatus=1 WHERE photoRepNo=:photoRepNo";
                                                $statement =  $pdo-> prepare($sql);
                                                $statement -> bindValue(':photoRepNo', $photoRepNo);
                                                $updateRow = $statement->execute();
                                            }catch(PDOException $e){
                                                $errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
                                                $errMsg .=  "錯誤行號" . $e->getLine() . "<br>";
                                            }

                                            // 更新 photo 狀態
                                            try{
                                                $sql = "UPDATE `photo` SET photoStatus=0 WHERE photoNo=:photoNo";
                                                $statement =  $pdo-> prepare($sql);
                                                $statement -> bindValue(':photoNo', $photoNo);
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
