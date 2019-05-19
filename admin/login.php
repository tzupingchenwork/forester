
<!-- header -->
<?php include "includes/header.php"; ?>

<?php 

    if(isset($_SESSION['admNo'])){
        header("Location: admin.php");	
    }else{
        ;	
    }

?>

<div id="wrapper">

    <!-- navigation -->
    <?php include "includes/navigation.php"; ?>

    <div id="page-wrapper">

        <div class="container-fluid">

        <!-- Page Heading -->
            <div class="row">

                <div class="col-lg-12">

                    <form action="login_checkid.php" method="post">

                        <h2>後端管理系統</h2>

                        <label>帳號 <input type="text" class="form-control form-control-sm" name="admId"  autofocus required></label>
                        <br>
                        <label>密碼 <input type="password" class="form-control form-control-sm" name="admPsw" required></label>
                        <br>
                        <input type="submit" name="login" class="btn btn-primary btn-md " value="登入">
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include "includes/footer.php"; ?>