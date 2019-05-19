<!-- header -->
<?php include "includes/header.php"; ?>

<?php 

    if(isset($_SESSION['admNo'])){
        ;	
    }else{
        header("Location: login.php");	
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
                        <h2 class="page-header">編輯活動管理<small></small></h2>

                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="entNo"  >
                            <div class="form-group row">
                                <label for="entName" class="col-sm-1 col-form-label" >活動名稱</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="entName"  >
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
                                    <input type="text" class="form-control" id="entBrief" name="entBrief" >
                                </div>

                                <div class="col-sm-2">
                                </div>
                                <label for="entPrice" class="col-sm-1 col-form-label">活動單價</label>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control" name="entPrice" >
                                </div>
                                <div class="col-sm-2">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="entDate" class="col-sm-1 col-form-label">活動時間</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="entDate" id="entDate" required>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>

                                <div class="col-sm-2">
                                </div>
                                <label for="entDate" class="col-sm-1 col-form-label">狀態</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="entStatus" >
                                        <option value="0">下架</option>
                                        <option value="1">正常</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="entLoc" class="col-sm-1 col-form-label">活動座標</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="entLoc" >
                                </div>

                                <div class="col-sm-2">
                                </div>
                                <label for="entDesc" class="col-sm-1 col-form-label">活動詳述</label>
                                <div class="col-sm-3">
                                    <textarea name="entDesc" id="entDesc" class="form-control" ></textarea>
                                </div>
                                <div class="col-sm-2">
                                </div>
                            </div>
                            <div class="form-group row">
                                <p class="col-sm-1 col-form-label"><strong>求生值</strong></p>
                                <div class="col-sm-2">
                                    <label class="radio-inline"><input type="radio" name="entSurVal" value="0">0</label>
                                    <label class="radio-inline"><input type="radio" name="entSurVal" value="1">1</label>
                                    <label class="radio-inline"><input type="radio" name="entSurVal" value="2">2</label>
                                    <label class="radio-inline"><input type="radio" name="entSurVal" value="3">3</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <p class="col-sm-1  col-form-label"><strong>手作值</strong></p>
                                <div class="col-sm-2">
                                    <label class="radio-inline"><input type="radio" name="entHanVal" value="0">0</label>
                                    <label class="radio-inline"><input type="radio" name="entHanVal" value="1">1</label>
                                    <label class="radio-inline"><input type="radio" name="entHanVal" value="2">2</label>
                                    <label class="radio-inline"><input type="radio" name="entHanVal" value="3">3</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <p class="col-form-label col-sm-1 pt-0"><strong>親子值</strong></legend>
                                <div class="col-sm-2">
                                    <label class="radio-inline"><input type="radio" name="entPcVal" value="0">0</label>
                                    <label class="radio-inline"><input type="radio" name="entPcVal" value="1">1</label>
                                    <label class="radio-inline"><input type="radio" name="entPcVal" value="2">2</label>
                                    <label class="radio-inline"><input type="radio" name="entPcVal" value="3">3</label>
                                </div>

                                <div class="col-sm-6">
                                </div>
                                <div class="col-sm-1">
                                <button name="insert" type="submit" class="btn btn-primary ">新增</button>
                                </div>
                            </div>
                        </form>

                        <?php 
                            $errMsg = "";
                            if(isset($_POST['insert'])){
                                $entName = $_POST['entName'];
                                $entBrief = $_POST['entBrief'];
                                $entDesc = $_POST['entDesc'];
                                $entDate = $_POST['entDate'];
                                $entLoc = $_POST['entLoc'];
                                $entPrice = $_POST['entPrice'];
                                $entSurVal = $_POST['entSurVal'];
                                $entHanVal = $_POST['entHanVal'];
                                $entPcVal = $_POST['entPcVal'];
                                $entStatus = 1;


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
                                            echo "没選送檔案<br>";
                                            break;
                                    default:
                                            echo "請聯絡網站維護人員<br>";
                                            echo "error code : ", $_FILES['upFile']['error'],"<br>";
                                } // switch()



                                if(( $entName == "" || empty($entName)) || ( $entBrief == "" || empty($entBrief)) ||
                                ( $entDesc == "" || empty($entDesc)) || ( $entDate == "" || empty($entDate)) ||
                                ( $entPrice == "" || empty($entPrice)) ||  ( $entLoc == "" || empty($entLoc))){
                                    echo "<h4 style='color:red'>新增時，請輸入完整資訊</h4>";
                                }else{
                                    try{
                                        $sql = "INSERT INTO `event` (entName,entPhoto,entBrief,entDesc,entDate,entPrice,entLoc,entSurVal,entHanVal,entPcVal,entStatus)";
                                        $sql .= "VALUE(:entName,:entPhoto,:entBrief,:entDesc,:entDate,:entPrice,:entLoc,:entSurVal,:entHanVal,:entPcVal,:entStatus)";
                                        $statement =  $pdo-> prepare($sql);
                                        $statement -> bindValue(':entName', $entName);
                                        $statement -> bindValue(':entPhoto', $entPhoto);
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