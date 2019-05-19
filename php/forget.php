<?php
// $memMail=$_REQUEST["memMail"];
$memMail=$_REQUEST["memMail"];
$errMsg="";
try {

	require_once("connect.php");
		$sql="select * from member where memMail=:memMail";
		$member=$pdo->prepare($sql);
		$member->bindValue(":memMail", $memMail);
		$member->execute();
		
		// $memRow = $member->fetch(PDO::FETCH_ASSOC);

	if($member->rowCount()==0) {
		echo "找不到";

	}else {
		$i = 0;
		$i = rand(1000,9999);
		$sql="update member set memPsw= $i where memMail=:memMail";
		$member=$pdo->prepare($sql);
		$member->bindValue(":memMail",$memMail);
		$member->execute();

	echo $i;
	}
}

// }

catch(PDOException $e) {
	echo $e->getMessage();
}


?>