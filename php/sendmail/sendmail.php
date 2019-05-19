<?php
include("class.phpmailer.php"); //匯入PHPMailer類別
// $Name=$_POST['sndname'];
// $Mail=$_POST['sendmail'];
// $Subject=$_POST['subject'];
// $Sendbody=$_POST['sendbody'];
$memMail=$_REQUEST['memMail'];
$msg=$_REQUEST['msg'];
$mail= new PHPMailer(); //建立新物件
$mail->IsSMTP(); //設定使用SMTP方式寄信
$mail->SMTPAuth = true; //設定SMTP需要驗證
$mail->SMTPSecure = "ssl"; // Gmail的SMTP主機需要使用SSL連線
$mail->Host = "smtp.gmail.com"; //Gamil的SMTP主機
$mail->Port = 465;  //Gamil的SMTP主機的埠號(Gmail為465)。
$mail->CharSet = "utf-8"; //郵件編碼
$mail->Username = "cd106g2@gmail.com"; //Gamil帳號
$mail->Password = "bvngbwqswgywulrb"; //Gmail密碼
$mail->From = $memMail; //寄件者信箱
$mail->FromName = "線上客服"; //寄件者姓名
$mail->Subject ="一封線上客服信";  //郵件標題
$mail->Body = "您的帳號:".$memMail."<br>密碼:".$msg."<br>";
// 主題:".$Subject."<br>回應內容:".$Sendbody; //郵件內容
$mail->IsHTML(true); //郵件內容為html ( true || false)
$mail->AddAddress($memMail); //收件者郵件及名稱
if(!$mail->Send()) {
    echo "發送錯誤: " . $mail->ErrorInfo;
} else {
    echo "<div align=center>感謝您的回覆，我們將會盡速處理!</div>";
}
?>