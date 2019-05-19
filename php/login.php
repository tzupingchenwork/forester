<?php
session_start();
$memMail=$_REQUEST["memMail"];
$memPsw=$_REQUEST["memPsw"];
$errMsg="";
try {

	require_once("connect.php");
		$sql="select * from member where memMail=:memMail and memPsw=:memPsw";
		$member=$pdo->prepare($sql);
		$member->bindValue(":memMail", $memMail);
		$member->bindValue(":memPsw", $memPsw);
		$member->execute();
		
		$memRow = $member->fetch(PDO::FETCH_ASSOC);
        $_SESSION["memNo"] = $memRow["memNo"];
        $_SESSION["memId"] = $memRow["memId"];
        $_SESSION["memMail"] = $memRow["memMail"];
        $_SESSION["memImg"] = $memRow["memImg"];
        $_SESSION["memTotalPoint"] = $memRow["memTotalPoint"];

	if($member->rowCount()==0) {
		echo "找不到";

	}else {

	echo "新增成功";

	}



}

// }

catch(PDOException $e) {
	echo $e->getMessage();
}


?>