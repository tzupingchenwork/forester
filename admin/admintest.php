
<!-- header -->
<?php include "includes/header.php"; ?>

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

                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
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
                                            <button class="btn btn-success btn-sm editBtn">編輯</button>
                                            <button class="btn btn-success btn-sm saveBtn">儲存</button>
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
<script>
    // var editBtns = document.getElementsByClassName("editBtn");
    // for (let i = 0; i < editBtns.length; i++) {
    //     editBtns[i].addEventListener('click', editRow);
    // }

    // function editRow(e) {
    //     console.log(this);
    //     let tr = this.parentNode.parentNode;
    //     console.log(tr);
    //     // let admNo = tr.children[0].innerHTML;
    //     let admId = tr.children[1].innerHTML;
    //     let admPsw = tr.children[2].innerHTML;
    //     let admPer = tr.children[3].innerHTML;
    //     let admStatus = tr.children[4].innerHTML;
    //     console.log(admPsw)

    //     // 修改為input button
    //     tr.children[1].innerHTML = `<input type="text" class="form-control form-control-sm" name="admId" value=${admId}>`;
    //     tr.children[2].innerHTML = `<input type="text" class="form-control form-control-sm" name="admPsw" value=${admPsw}>`;
    //     tr.children[3].innerHTML = `<input type="text" class="form-control form-control-sm" name="admPer" value=${admPer}>`;
    //     tr.children[4].innerHTML = `<input type="text" class="form-control form-control-sm" name="admStatus" value=${admStatus}>`;
    // }


    // var saveBtns = document.getElementsByClassName("saveBtn");
    // for( let i = 0 ; i < saveBtns.length ; i++ ){
    //     saveBtns[i].addEventListener('click',saveRow);
    // }

    // function saveRow(e){

    //     console.log(this);
    //     let tr = this.parentNode.parentNode;
    //     console.log(tr);

    //     // ('td:nth-child(3)')


    //     let admNo = tr.children[0].value;
    //     let admId = tr.children[1].value;
    //     let admPsw = tr.children[2].value;
    //     let admPer = tr.children[3].value;
    //     let admStatus = tr.children[4].value;

    //     // 修改為text
    //     tr.children[1].innerHTML = admId;
    //     tr.children[2].innerHTML = admPsw;
    //     tr.children[3].innerHTML = admPer;
    //     tr.children[4].innerHTML = admStatus;

    // }






</script>
<?php include "includes/footer.php"; ?>