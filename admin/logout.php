<?php session_start(); ?>

<?php 

$_SESSION["admNo"] = null;
$_SESSION["admId"] = null;
// $_SESSION["admPsw"] = $admRow["admPsw"];
$_SESSION["admPer"] = null;
// $_SESSION["admStatus"] = $admRow["admStatus"];
header("Location: login.php");

?>