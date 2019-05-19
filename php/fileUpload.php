<?php 
require_once("connect.php");

switch($_FILES['upFile']['error']){
	case 0:
			$dir = "../images/member//";
			$file = "1".$_FILES['upFile']['name'];
			if( file_exists($dir) === false){
				mkdir( $dir ); //make directory
			}
			$from = $_FILES['upFile']['tmp_name'];
			$to = $dir . $file;
			copy($from, $to);
			// echo $file;
			
			$errMsg = "";
			try {
			
				$sql = "update member set memImg = '$file' where memMail='sam@gmail.com'";
				$mem = $pdo -> exec($sql);  //下指令
				// echo "修改密碼成功!";
				

			} catch (PDOException $e) {
				$errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
				$errMsg .=  "錯誤行號" . $e->getLine() . "<br>";  	
			}	

			echo $errMsg; 	


			// header("Location: ../member.php");			
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
}





// echo "memName: " , $_POST['memName'], "<br>";

// echo "['error']: " , $_FILES['upFile']['error'] , "<br>";
// echo "['name']: " , $_FILES['upFile']['name'] , "<br>";
// echo "['tmp_name']: " , $_FILES['upFile']['tmp_name'] , "<br>";
// echo "['type']: " , $_FILES['upFile']['type'] , "<br>";
// echo "['size']: " , $_FILES['upFile']['size'] , "<br>";
?>