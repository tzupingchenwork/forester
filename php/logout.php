<?php
session_start();
if(isset($_SESSION["memId"])==1){
	session_destroy();
	echo "成功";
}

?>