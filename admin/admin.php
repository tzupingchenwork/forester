
<!-- header -->
<?php include "includes/header.php"; ?>
<?php include "includes/admin_functions.php"; ?>

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
        $sql = "SELECT * FROM `admins`";
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
                        <h2 class="page-header">管理員帳號管理<small>最高權限管理員才有刪除的權限。</small></h2>

                        <!-- Insert Admin -->
                        <?php  insert_admin() ?> 

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>管理員編號</th>
                                        <th>管理員帳號</th>
                                        <th>管理員密碼</th>
                                        <th>管理員權限</th>
                                        <th>管理員狀態</th>
                                        <th>狀態異動</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="addInput">
                                        <form action="" method="post">
                                            <input type="hidden" name="admStatus" value="1">
                                            <td></td>
                                            <td><input name="admId" class="form-control form-control-sm" type="text"></td>
                                            <td><input name="admPsw" class="form-control form-control-sm" type="password"></td>
                                            <!-- <td><input name="admPer" class="form-control form-control-sm" type="text"></td> -->
                                            <td>
                                                <select name="admPer" id="admPer" class="form-control form-control-sm">
                                                    <option value="0">一般權限</option>
                                                    <option value="1">最高權限</option>
                                                </select>
                                            </td>
                                            <td></td>
                                            <td><input name="add" type="submit" class="btn btn-primary btn-sm" value="新增"></td>
                                        </form>
                                    </tr>


                                    <?php 
                                        if( isset($_GET['edit']) ){
                                            $admNo = $_GET['edit'];
                                            $errMsg = ""; 
                                            try{
                                                $sql = "SELECT * FROM `admins` WHERE admNo='{$admNo}'";
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
                                            <input type="hidden" name="admNo" value="<?php echo $editRow['admNo'] ?>">
                                                <td><?php echo $editRow['admNo'] ?></td>
                                                <td><input name="admId" class="form-control form-control-sm" type="text" value="<?php echo $editRow['admId'] ?>"></td>
                                                <td><input name="admPsw" class="form-control form-control-sm" type="text" value="<?php echo $editRow['admPsw'] ?>"></td>
                                                
                                                <td>
                                                    <select name="admPer" id="admPer" class="form-control form-control-sm">
                                                        <option <?php if( $editRow['admPer'] == 0 ) echo 'selected' ;?> value="0">一般權限</option>
                                                        <option <?php if( $editRow['admPer'] == 1 ) echo 'selected' ;?> value="1">最高權限</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="admStatus" id="admStatus" class="form-control form-control-sm">
                                                        <option <?php if( $editRow['admStatus'] == 0 ) echo 'selected' ;?> value="0">停權</option>
                                                        <option <?php if( $editRow['admStatus'] == 1 ) echo 'selected' ;?> value="1">正常</option>
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
                                        <td><?PHP echo $adminRow['admNo']; ?></td>
                                        <td><?PHP echo $adminRow['admId']; ?></td>
                                        <td><?PHP echo $adminRow['admPsw']; ?></td>
                                        <td><?PHP 
                                                if( $adminRow['admPer'] == 0 ){
                                                    echo "一般權限";
                                                }else{
                                                    echo "最高權限";
                                                }
                                         ?></td>
                                        <td><?PHP 
                                                if( $adminRow['admStatus'] == 0 ){
                                                    echo "停權";
                                                }else{
                                                    echo "正常";
                                                }
                                        ?></td>
                                        <td>
                                            <a href="admin.php?edit=<?PHP echo $adminRow['admNo']; ?>" class="btn btn-success btn-sm editBtn">編輯</a>
                                        </td>
                                    </tr>
                                    <?php } ?>    
                                    
                                    <?php 
                                        delete_admin();
                                        update_admin();
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