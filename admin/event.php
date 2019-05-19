<!-- header -->
<?php include "includes/header.php"; ?>

<?php 

    if(isset($_SESSION['admNo'])){
        ;	
    }else{
        header("Location: login.php");	
    }

?>

<?php
	$errMsg = ""; 
    try{
        $sql = "SELECT * FROM `event`";
        $event = $pdo->query($sql);    
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
                        <h2 class="page-header">活動管理<small></small></h2>


                        <a href="event_insert.php" class="btn btn-primary btn-sm">新增活動</a>

                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>活動編號</th>
                                        <th>活動名稱</th>
                                        <th>活動圖片</th>
                                        <th>活動簡述</th>
                                        <th>活動詳述</th>
                                        <th>活動所需時間</th>
                                        <th>活動單價</th>
                                        <th>活動座標</th>
                                        <th>活動求生值</th>
                                        <th>活動手作值</th>
                                        <th>活動親子值</th>
                                        <th>活動狀態</th>
                                        <th>活動狀態異動</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php while($eventRow = $event->fetch()){
                                        $entNo = $eventRow['entNo'];
                                        $entName = $eventRow['entName'];
                                        $entPhoto = $eventRow['entPhoto'];
                                        $entBrief = $eventRow['entBrief'];
                                        $entDesc = $eventRow['entDesc'];
                                        $entDate = $eventRow['entDate'];
                                        $entPrice = $eventRow['entPrice'];
                                        $entLoc = $eventRow['entLoc'];
                                        $entSurVal = $eventRow['entSurVal'];
                                        $entHanVal = $eventRow['entHanVal'];
                                        $entPcVal = $eventRow['entPcVal'];
                                        $entStatus = $eventRow['entStatus'];
                                    ?>

                                    <tr>
                                        <td><?php echo $entNo; ?></td>
                                        <td><?php echo $entName; ?></td>
                                        <td><img style="width:50px" src="..//images//<?php echo $entPhoto?>" alt="<?php echo $entPhoto?>"></td>
                                        <td><?php echo $entBrief; ?></td>
                                        <td><?php echo $entDesc; ?></td>
                                        <td><?php echo $entDate; ?></td>
                                        <td><?php echo $entPrice; ?></td>
                                        <td><?php echo $entLoc; ?></td>
                                        <td><?php echo $entSurVal; ?></td>
                                        <td><?php echo $entHanVal; ?></td>
                                        <td><?php echo $entPcVal; ?></td>
                                        <td>
                                            <?php
                                                if($entStatus == 0){
                                                    echo '下架';
                                                }else if($entStatus == 1){
                                                    echo '正常';
                                                }
                                            ?>      
                                        </td>
                                        <td><a href="event_edit.php?edit=<?PHP echo $entNo; ?>" class="btn btn-success btn-sm editBtn">編輯</a></td>
                                    </tr>
                                <?php } ?>


                                <?php 
                                    if( isset($_POST['update']) ){
                                        $entNo =  $_POST['entNo'];
                                        $entName = $_POST['entName'];
                                        $entBrief = $_POST['entBrief'];
                                        $entDesc = $_POST['entDesc'];
                                        $entDate = $_POST['entDate'];
                                        $entPrice = $_POST['entPrice'];
                                        $entLoc = $_POST['entLoc'];
                                        $entSurVal = $_POST['entSurVal'];
                                        $entHanVal = $_POST['entHanVal'];
                                        $entPcVal = $_POST['entPcVal'];
                                        $entStatus = $_POST['entStatus'];


                                        switch($_FILES['entPhoto']['error']){
                                            case 0:
                                                    $dir = "..//images//";
                                                    if( file_exists($dir) === false){
                                                        mkdir( $dir ); //make directory
                                                    }
                                                    $from = $_FILES['entPhoto']['tmp_name'];
                                                    $to = $dir . $_FILES['entPhoto']['name'];
                                                    copy($from, $to);
                                                    echo "上傳成功<br>";
                                                    break;	
                                            case 1:
                                                    echo "上傳檔案太大, 不得超過", ini_get("upload_max_filesize") ,"<br>";
                                                    break;
                                            case 2:
                                                    echo "上傳檔案太大, 不得超過", $_POST["MAX_FILE_SIZE"], "位元組<br>";
                                                    break;
                                            case 3:
                                                    echo "上傳檔案不完整<br>";
                                                    break;
                                            case 4:
                                                    echo "没選送檔案<br>";
                                                    break;
                                            default:
                                                    echo "請聯絡網站維護人員<br>";
                                                    echo "error code : ", $_FILES['upFile']['error'],"<br>";
                                        } 


                                        try{
                                            $sql = "UPDATE `event` SET entName=:entName, entBrief=:entBrief,"; 
                                            $sql .= "entDesc=:entDesc,entDate=:entDate, entPrice=:entPrice,"; 
                                            $sql .= "entDesc=:entDesc,entLoc=:entLoc, entSurVal=:entSurVal,"; 
                                            $sql .= "entHanVal=:entHanVal, entPcVal=:entPcVal, entStatus=:entStatus WHERE entNo =:entNo";
                                            $statement =  $pdo-> prepare($sql);
                                            $statement -> bindValue(':entNo', $entNo);
                                            $statement -> bindValue(':entName', $entName);
                                            $statement -> bindValue(':entBrief', $entBrief);
                                            $statement -> bindValue(':entDesc', $entDesc);
                                            $statement -> bindValue(':entDate', $entDate);
                                            $statement -> bindValue(':entPrice', $entPrice);
                                            $statement -> bindValue(':entLoc', $entLoc);
                                            $statement -> bindValue(':entSurVal', $entSurVal);
                                            $statement -> bindValue(':entHanVal', $entHanVal);
                                            $statement -> bindValue(':entPcVal', $entPcVal);
                                            $statement -> bindValue(':entStatus', $entStatus);
                                            $updateRow = $statement->execute();
                                            header("Location: event.php");
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

