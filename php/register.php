<?php 
$memId=$_REQUEST["memId"];
$memMail=$_REQUEST["memMail"];
$memPsw=$_REQUEST["memPsw"];
$errMsg="";


try {
	//   if($memId==""||$memMail==""||$memPsw=="") {
	//   echo "輸入資料有誤，請重新輸入"
	// }

	// else {
	require_once("connect.php");
	$sql="select memMail from member where memMail=:memMail";
	$member=$pdo->prepare($sql);
	$member->bindValue(":memMail", $memMail);
	$member->execute();

	if($member->rowCount()==0) {
		//找不到  

		$sqll="INSERT INTO member VALUES (NULL , :memId , :memMail , :memPsw , NULL , 1 , 0)";
		$member=$pdo->prepare($sqll);
		$member->bindValue(":memId", $memId);
		$member->bindValue(":memMail", $memMail);
		$member->bindValue(":memPsw", $memPsw);
		$member->execute();

		if($member->rowCount()==1){
		$sql="select * from member where memMail=:memMail";	
		$member=$pdo->prepare($sql);
		$member->bindValue(":memMail", $memMail);
		$member->execute();
		
		$memRow = $member->fetch(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION["memNo"] = $memRow["memNo"];
        $_SESSION["memId"] = $memRow["memId"];
        $_SESSION["memMail"] = $memRow["memMail"];
        $_SESSION["memImg"] = $memRow["memImg"];
        $_SESSION["memTotalPoint"] = $memRow["memTotalPoint"];}
	
		echo "新增成功";
	}

	else {
		
 

		echo "此帳號已有人創建，請重新輸入";
	}

}

// }

catch(PDOException $e) {
	echo $e->getMessage();
}



?>