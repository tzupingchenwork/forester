<?php
session_start();

if(isset($_SESSION["memNo"])==0){
  echo "登入";
}else{
  echo "play";
}
?>
