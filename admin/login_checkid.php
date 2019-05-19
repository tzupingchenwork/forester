<?php
session_start();

if( $_POST['login']){
		$admId = $_POST["admId"];
		$admPsw = $_POST["admPsw"];
		$errMsg = "";
		try {
				require_once("includes/connectDB.php");
				$sql = "SELECT * FROM admins WHERE admId=:admId AND admPsw=:admPsw";
				$admin = $pdo->prepare($sql);
				$admin->bindValue(":admId", $admId);
				$admin->bindValue(":admPsw", $admPsw);
				$admin->execute();
				
				if($admin->rowCount() == 0){
					header("Location: login.php");
				}else{
					$admRow = $admin->fetch(PDO::FETCH_ASSOC);

					// $_SESSION["admPsw"] = $admRow["admPsw"];
					// $_SESSION["admStatus"] = $admRow["admStatus"];
					$_SESSION["admNo"] = $admRow["admNo"];
					$_SESSION["admId"] = $admRow["admId"];
					$_SESSION["admPer"] = $admRow["admPer"];

					header("Location: admin.php");
				}
		} catch (PDOException $e) {
				$errMsg .= "錯誤 : ".$e -> getMessage()."<br>";
				$errMsg .= "行號 : ".$e -> getLine()."<br>";
		}

}
?>