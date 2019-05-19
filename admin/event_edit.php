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
    $entNo = $_GET['edit'] ; 
    try{
        $sql = "SELECT * FROM `event` WHERE entNo='{$entNo}'";

        $statement = $pdo->query($sql);    
        $eventRow = $statement->fetch();
        $entNo = $eventRow['entNo'] ; 
        $entName = $eventRow['entName'];
        $entBrief = $eventRow['entBrief'];
        $entDesc = $eventRow['entDesc'];
        $entDate = $eventRow['entDate'];
        $entPrice = $eventRow['entPrice'];
        $entLoc = $eventRow['entLoc'];
        $entSurVal = $eventRow['entSurVal'];
        $entHanVal = $eventRow['entHanVal'];
        $entPcVal = $eventRow['entPcVal'];
        $entStatus =  $eventRow['entStatus'];

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
                        <h2 class="page-header">編輯活動管理<small></small></h2>

                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="entNo" value="<?php echo $entNo; ?>" >
                            <div class="form-group row">
                                <label for="entName" class="col-sm-1 col-form-label" >活動名稱</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="entName" value="<?php echo $entName; ?>" >
                                </div>
                                <div class="col-sm-2">
                                </div>
                                <label for="entPhoto" class="col-sm-1 col-form-label">活動圖片</label>
                                <div class="col-sm-3">
                                    <input type="file" id="entPhoto" name="entPhoto" >
                                </div>
                                <div class="col-sm-2">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="entBrief" class="col-sm-1 col-form-label">活動簡述</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="entBrief" name="entBrief" value="<?php echo $entBrief; ?>">
                                </div>

                                <div class="col-sm-2">
                                </div>
                                <label for="entPrice" class="col-sm-1 col-form-label">活動單價</label>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control" name="entPrice" value="<?php echo $entPrice; ?>" >
                                </div>
                                <div class="col-sm-2">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="entDate" class="col-sm-1 col-form-label">活動時間</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="entDate" id="entDate" required>
                                        <option <?php if( $entDate == 1 ) echo 'selected' ;?> value="1">1</option>
                                        <option <?php if( $entDate == 2 ) echo 'selected' ;?> value="2">2</option>
                                        <option <?php if( $entDate == 3 ) echo 'selected' ;?> value="3">3</option>
                                        <option <?php if( $entDate == 4 ) echo 'selected' ;?> value="4">4</option>
                                        <option <?php if( $entDate == 5 ) echo 'selected' ;?> value="5">5</option>
                                        <option <?php if( $entDate == 6 ) echo 'selected' ;?> value="6">6</option>
                                        <option <?php if( $entDate == 7 ) echo 'selected' ;?> value="7">7</option>
                                        <option <?php if( $entDate == 8 ) echo 'selected' ;?> value="8">8</option>
                                    </select>
                                </div>

                                <div class="col-sm-2">
                                </div>
                                <label for="entDate" class="col-sm-1 col-form-label">狀態</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="entStatus" >
                                        <option <?php if( $entStatus == 0 ) echo 'selected' ;?> value="0">下架</option>
                                        <option <?php if( $entStatus == 1 ) echo 'selected' ;?> value="1">正常</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="entLoc" class="col-sm-1 col-form-label">活動座標</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="entLoc" value="<?php echo $entLoc; ?>">
                                </div>

                                <div class="col-sm-2">
                                </div>
                                <label for="entDesc" class="col-sm-1 col-form-label">活動詳述</label>
                                <div class="col-sm-3">
                                    <textarea name="entDesc" id="entDesc" class="form-control" ><?php echo $entDesc; ?></textarea>
                                </div>
                                <div class="col-sm-2">
                                </div>
                            </div>
                            <div class="form-group row">
                                <p class="col-sm-1 col-form-label"><strong>求生值</strong></p>
                                <div class="col-sm-2">
                                    <label class="radio-inline"><input <?php if( $entSurVal == 0 ) echo 'checked' ;?> type="radio" name="entSurVal" value="0">0</label>
                                    <label class="radio-inline"><input <?php if( $entSurVal == 1 ) echo 'checked' ;?> type="radio" name="entSurVal" value="1">1</label>
                                    <label class="radio-inline"><input <?php if( $entSurVal == 2 ) echo 'checked' ;?> type="radio" name="entSurVal" value="2">2</label>
                                    <label class="radio-inline"><input <?php if( $entSurVal == 3 ) echo 'checked' ;?> type="radio" name="entSurVal" value="3">3</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <p class="col-sm-1  col-form-label"><strong>手作值</strong></p>
                                <div class="col-sm-2">
                                    <label class="radio-inline"><input <?php if( $entHanVal == 0 ) echo 'checked' ;?> type="radio" name="entHanVal" value="0">0</label>
                                    <label class="radio-inline"><input <?php if( $entHanVal == 1 ) echo 'checked' ;?> type="radio" name="entHanVal" value="1">1</label>
                                    <label class="radio-inline"><input <?php if( $entHanVal == 2 ) echo 'checked' ;?> type="radio" name="entHanVal" value="2">2</label>
                                    <label class="radio-inline"><input <?php if( $entHanVal == 3 ) echo 'checked' ;?> type="radio" name="entHanVal" value="3">3</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <p class="col-form-label col-sm-1 pt-0"><strong>親子值</strong></legend>
                                <div class="col-sm-2">
                                    <label class="radio-inline"><input <?php if( $entPcVal == 0 ) echo 'checked' ;?> type="radio" name="entPcVal" value="0">0</label>
                                    <label class="radio-inline"><input <?php if( $entPcVal == 1 ) echo 'checked' ;?> type="radio" name="entPcVal" value="1">1</label>
                                    <label class="radio-inline"><input <?php if( $entPcVal == 2 ) echo 'checked' ;?> type="radio" name="entPcVal" value="2">2</label>
                                    <label class="radio-inline"><input <?php if( $entPcVal == 3 ) echo 'checked' ;?> type="radio" name="entPcVal" value="3">3</label>
                                </div>

                                <div class="col-sm-6">
                                </div>
                                <div class="col-sm-1">
                                <button name="update" type="submit" class="btn btn-primary ">修改</button>
                                </div>
                            </div>
                        </form>

                        <?php 
                            if(isset($_POST['update'])){
                                $entNo = $_POST['entNo'];
                                $entName = $_POST['entName'];
                                $entBrief = $_POST['entBrief'];
                                $entDesc = $_POST['entDesc'];
                                $entDate = $_POST['entDate'];
                                $entLoc = $_POST['entLoc'];
                                $entPrice = $_POST['entPrice'];
                                $entSurVal = $_POST['entSurVal'];
                                $entHanVal = $_POST['entHanVal'];
                                $entPcVal = $_POST['entPcVal'];
                                $entStatus = $_POST['entStatus'];
                                $noFile = true;

                                // echo $entNo.$entName.$entBrief.$entDesc.$entDate. $entLoc.$entPrice. $entSurVal.$entHanVal. $entPcVal.$entStatus;


                                // 先判斷photo裡面有沒有檔案，沒有檔案就不上傳，有檔案再上傳
                                if( !file_exists($_FILES['entPhoto']['tmp_name']) || !is_uploaded_file($_FILES['entPhoto']['tmp_name'])) {
                                    $noFile = true;
                                }else{
                                    $noFile = false;

                                    // 有檔案，要控管
                                    $entPhoto = $_FILES['entPhoto']['name'];
    
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
                                                break;
                                        default:
                                                echo "請聯絡網站維護人員<br>";
                                                echo "error code : ", $_FILES['upFile']['error'],"<br>";
                                    } // switch()
                                } // else()


                                if(( $entName == "" || empty($entName)) || ( $entBrief == "" || empty($entBrief)) ||
                                ( $entDesc == "" || empty($entDesc)) || ( $entDate == "" || empty($entDate)) ||
                                ( $entPrice == "" || empty($entPrice)) ||  ( $entLoc == "" || empty($entLoc))){
                                    echo "<h4 style='color:red'>新增時，請輸入完整資訊</h4>";
                                }else{
                                    try{
                                        
                                        if( $noFile ){
                                            $sql = "UPDATE `event` SET entName=:entName,entBrief=:entBrief,";
                                            $sql .= "entDesc=:entDesc,entDate=:entDate,entPrice=:entPrice,entLoc=:entLoc,";
                                            $sql .= "entSurVal=:entSurVal,entHanVal=:entHanVal,entPcVal=:entPcVal,entStatus=:entStatus ";
                                            $sql .= "WHERE entNo=:entNo";
                                        }else{
                                            $sql = "UPDATE `event` SET entName=:entName,entPhoto=:entPhoto,entBrief=:entBrief,";
                                            $sql .= "entDesc=:entDesc,entDate=:entDate,entPrice=:entPrice,entLoc=:entLoc,";
                                            $sql .= "entSurVal=:entSurVal,entHanVal=:entHanVal,entPcVal=:entPcVal,entStatus=:entStatus ";
                                            $sql .= "WHERE entNo=:entNo";
                                        }

                                        $statement =  $pdo-> prepare($sql);
                                        $statement -> bindValue(':entNo', $entNo);
                                        $statement -> bindValue(':entName', $entName);

                                        if( !$noFile ){
                                            $statement -> bindValue(':entPhoto', $entPhoto);
                                        }

                                        $statement -> bindValue(':entBrief', $entBrief);
                                        $statement -> bindValue(':entDesc', $entDesc);
                                        $statement -> bindValue(':entDate', $entDate);
                                        $statement -> bindValue(':entPrice', $entPrice);
                                        $statement -> bindValue(':entLoc', $entLoc);
                                        $statement -> bindValue(':entSurVal', $entSurVal);
                                        $statement -> bindValue(':entHanVal', $entHanVal);
                                        $statement -> bindValue(':entPcVal', $entPcVal);                                   
                                        $statement -> bindValue(':entStatus', $entStatus);

                                        $insertRow = $statement->execute();
                                        header("Location: event.php");	
                                    }catch(PDOException $e){
                                        $errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
                                        $errMsg .=  "錯誤行號" . $e->getLine() . "<br>";
                                    }
                                    echo $errMsg;
                                }
                            }
                        ?> 
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include "includes/footer.php"; ?>