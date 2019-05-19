
<?php
session_start();
if(isset($_REQUEST['newpsd']) && isset($_REQUEST['oldpsd'])){
}else{
    $_REQUEST['newpsd']="";
    $_REQUEST['oldpsd']="";
    // echo "?";
}

require_once("php/member_info.php"); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/member.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/svg_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="Shortcut Icon" type="image/x-icon" href="images/new/favicon.png" />

    <title>森存者｜會員專區</title>
</head>

<body>
    
      <!-- header -->
<?php include 'header.php';?>
<!-- header -->
<!-- beeeat -->
<?php include 'playeatbeeicon.php';?>
<!-- beeeat -->
<!-- robot -->
<?php include 'robot.php';?>
<!-- robot -->
        
        <!-- 背景落花 -->
        <div class="hide">
            <div id="container"></div>
        </div>
        <!-- 修改成功燈箱 -->
        <div id="confirm_psw">
            <div class="confirm_psw_content">
                <i class="far fa-times-circle" id="confirm_close"></i>
                <p>修改成功!</p>
            </div>
        </div>
        <!-- 大頭貼燈箱 -->
        <div id="confirm_photo">
            <div class="confirm_photo_content">
                <i class="far fa-times-circle" id="confirm_photo_close"></i>
                <p>確定更換?</p>
                <div id="confirm_photo_content_yes">確定</div>
            </div>
        </div>
        <!-- 刪除行程燈箱 -->
        <div id="confirm_plan">
            <div class="confirm_plan_content">
                <i class="far fa-times-circle" id="confirm_plan_close"></i>
                <p>確定刪除?</p>
                <div id="confirm_plan_content_yes">確定</div>
            </div>
        </div>
        <!-- 刪除手札燈箱 -->
        <div id="confirm_note">
            <div class="confirm_note_content">
                <i class="far fa-times-circle" id="confirm_note_close"></i>
                <p>確定刪除?</p>
                <div id="confirm_note_content_yes">確定</div>
            </div>
        </div>
        <!-- 評價燈箱 -->
        <div id="Evaluation">
            <div class="Evaluation_event">
                <div class="Evaluation_event_title">
                評價活動
                <i class="far fa-times-circle" id="Evaluation_close"></i>  
                </div>
<?php 
require_once("php/member_Evaluation.php");
while($EvaluationCheck_readyRow = $EvaluationCheck_ready->fetch(PDO::FETCH_ASSOC)){
?>                 
                <div class="Evaluation_event_all">
                <p class="event"><?php echo $EvaluationCheck_readyRow["entName"];?></p> 
                    <ul class="fire">
                        <li><img src="images/member/emptyFire.png" alt="火"></li>
                        <li><img src="images/member/emptyFire.png" alt="火"></li>
                        <li><img src="images/member/emptyFire.png" alt="火"></li>
                        <li><img src="images/member/emptyFire.png" alt="火"></li>
                        <li><img src="images/member/emptyFire.png" alt="火"></li>
                    </ul>
                    <div class="comment">
                        <textarea name="" class="talk" cols="30" rows="4" maxlength="150" minlength="0" placeholder="想說的話"></textarea>
                    </div>                
                    <p class="feedback"></p>
                    <input type="submit" value="送出評價" class="Evaluation_event_all_submit">              
                </div>
<?php
}
?>  
            </div>
        </div>
        <!-- 查看評價燈箱 -->
        <div id="EvaluationCheck">
            <div class="EvaluationCheck_event">
                <div class="EvaluationCheck_event_title">
                查看評價
                <i class="far fa-times-circle" id="EvaluationCheck_close"></i>  
                </div>
<?php 
require_once("php/member_Evaluation.php");
while($EvaluationCheckRow = $EvaluationCheck->fetch(PDO::FETCH_ASSOC)){
?>                
                <div class="EvaluationCheck_event_all">
                    <p id="Check_event"><?php echo $EvaluationCheckRow["entName"];?></p>                     
                    <ul>
<?php 
$fire=$EvaluationCheckRow["entSco"];
    for($x=0;$x<=$fire-1;$x++){?>
        <li><img src="images/member/fire.png" alt="火"></li>
    <?php
    }?>
      
                    </ul>
                    <div class="Check_comment">
                        <p id="Check_talk"><?php echo $EvaluationCheckRow["entEvalContent"];?></p>
                    </div>                
                </div>
<?php
}
?>
            </div>

        </div>  
        <div class="background">
            <div class="wrap">
                <div class=" justify-content-space-evenly container">
                    <div class="memberInfo col-sm-12 col-md-4.5">
                        <div class="member-info-box">
                            <form action="php/fileUpload.php" method="post" enctype="multipart/form-data" id="fileUpload">
                            <div class="circle">
                                <img src="images/member/<?php echo $memRow["memImg"];?>" alt="member" id="mem_photo">
                            </div>
                            
                                <label>
                                    <input type="file" name="upFile" id="upFile">                                
                                    <i class="fas fa-camera" id="camera"></i>
                                </label>                            
                            </form>    
                        
                            <p id="memId"><?php echo $memRow["memId"];?></p>

                           
                        </div>
                        <div class="bonus-point-explain-box">
                            <p>您的成就點數為<span id="bonus-point"><?php echo $memRow["memTotalPoint"];?></span>點</p>
                           
                            <p>10點成就點數可折抵消費現金1元</p>
                        </div>
                        <div class="get-bonus-point-box">
                            <p>如何獲得成就點數</p>
                            <table>
                                <tr>
                                    <td><i class="fas fa-pencil-alt"></i></td>
                                    <td><i class="fas fa-gamepad"></i></td>
                                    <td><i class="fas fa-eye"></i></td>
                                </tr>
                                <tr>
                                    <td> 分享手札 </td>
                                    <td> 玩小遊戲 </td>
                                    <td> 搜救熊森 </td>
                                </tr>
                            </table>
                        </div>
        
                    </div><!-- memberInfo-->
                

                    <!-- ====================================== -->
                    <div class="col-sm-12 col-md-7.5">
                        <div class="list col-sm-12">
                            <p class="tablinks-member" href="#">我的資料</p>
                            <p class="tablinks-plans" href="#">全部行程</p>
                            <p class="tablinks-blogs" href="#">生存手札</p>
                            <p class="tablinks-orders" href="#">訂票紀錄</p>
                        </div>

                        <form id="member" class="member col-sm-12 col-md-12">
                            <table class="">
                                <tr>
                                    <th>帳號</th>
                                    <td><?php echo $memRow["memMail"];?></td>
                                </tr>
                                <tr>
                                    <th>舊密碼</th>
                                    <td><input type="password" name="oldpsd" value="" placeholder="如要修改請輸入密碼" id="oldpsd"></td>
                                </tr>
                                <tr>
                                    <th>新密碼</th>
                                    <td><input type="password" name="newpsd" id="newpsd"></td>
                                </tr>
                                <tr>
                                    <th>確認密碼</th>
                                    <td><input type="password" name="newpsdagain" id="newpsdagain"></td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td id="warning"></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="button" value="修改" id="member_send">
                                    </td>
                                </tr>
                            </table>
                        </form>

                        <div id="plans" class="plans col-sm-12 container">
<?php
require_once("php/member_plan.php");  
while($planRow = $plan->fetch(PDO::FETCH_ASSOC)){
?>                             
                            <div class="planInfo col-sm-12 col-md-4">
                                    <div class="planBorder">
                                        <input type="image" src="images/member/trash-solid.svg" alt="刪除" class="delete_plan" name="delete_plan" value="<?php echo $planRow["planNo"];?>">
                                        <input type="image" src="images/member/pen-solid.svg" alt="修改" class="change_plan" name="change_plan" value="<?php echo $planRow["planNo"];?>">
                                        <!-- <div id="planBorder_img"> -->
                                        <!-- <div id="planBorder_img"> -->
                                            <img src="images/plan/<?php echo $planRow["planPhoto"];?>" alt="plan_img">
                                        <!-- </div> -->
                                                
                                        <h4>行程名稱 : <span><?php echo $planRow["planName"];?></span></h4>

                                        <!-- <p>建立日期 : <span>2019/03/14</span></p> -->
                                        <div class="share-blog-url-box">
                                            <p class="share-blog" href="#">分享行程至手札</p>
                                            <!-- <p class="share-url" href="#">分享連結</p> -->
                                        </div>
                                    </div>                               
                            </div>
<?php
}
?>                            
                        </div>

                        <div id="blogs" class="blogs col-sm-12 col-md-12">
                            <table>
                                <thead>
                                    <tr class="blogtitle">
                                        <td class="width1">手札標題</td>
                                        <td class="width2">發佈時間</td>
                                        <td class="width3">異動</td>
                                    </tr>
                                </thead>
                                <tbody>
<?php
require_once("php/member_note.php");  
while($noteRow = $note->fetch(PDO::FETCH_ASSOC)){
?>                                    
                                    <tr class="blog">
                                        <td><?php echo $noteRow["noteName"];?></td>
                                        <td><?php echo $noteRow["noteDate"];?></td>
                                        <td>
                                            <p class="blog_note"><?php echo $noteRow["planNo"];?></p>
                                            <i class="fas fa-pen change_note"></i><i class="fas fa-trash delete_note"></i>
                                        </td>
                                    </tr>
<?php
}
?>                                    

                                </tbody>
                            </table>
                        </div>

                        <div id="orders" class="orders col-sm-12 col-md-12">

                            <ul id="myOrderList">
<?php 
while($ordRow = $ord->fetch(PDO::FETCH_ASSOC)){
?>     
                      
                                <li>                                   
                                    <div class="listControl currentList">
                                        <span class="orderNo">訂單編號 <?php echo $ordRow["ordNo"];?></span>
                                        <span id="orderTitle"> - <?php echo $ordRow["planName"];?></span>
                                        <span class="ordStatus"><?php echo $ordRow["ordStatus"];?></span>
                                        
                                        <span><i class="down"></i></span> 
                                    </div>

                                    <div class="currentListPanel">
                                    <img id="talking-bear" src="images/member/talk.png" alt="說話熊">
                                        <div class="ticket col-md-12">
                                            <h3>入營及參加活動時，請出示 QR Code 票卷。</h3>
                                            <a href="#" class="button1 qrCodeBtn">QR Code</a>                    
                                            <input type="hidden" value="62">
                                            <div id="qrCodeModal">
                                                <div class="qrCodeContent">
                                                    <i class="far fa-times-circle" id="qrCodeModal_close"></i>
                                                    <div class="qrCode_img"></div>
                                                </div>                                    
                                            </div>
                                        </div>
                                        <table class="ticketInfo currentDetail col-md-12 clearfix">
                                            <tr>
                                                <td class="col-lg-4 col-md-4">入營日期</td>
                                                <td><?php echo $ordRow["ordDate"];?></td>
                                            </tr>
<?php
$tkt=array($ordRow["tktNo1"],$ordRow["tktNo2"],$ordRow["tktNo3"]);
for($i=0;$i<=2;$i++){
    switch($tkt[$i]){
        case 1:
            $tkt[$i]="一般票 X";
            break;
        case 2:
            $tkt[$i]="學生票 X";
            break;
        case 3:
            $tkt[$i]="愛心票 X";
            break;
    }
}

?>                       
                                            <tr>
                                                <td class="col-lg-4 col-md-4">訂購票種</td>
                                                <td><?php if($tkt[0]!=null){echo $tkt[0],$ordRow["buyQuan1"],"<br>";}?><?php if($tkt[1]!=null){echo $tkt[1],$ordRow["buyQuan2"],"<br>";}?><?php if($tkt[2]!=null){echo $tkt[2],$ordRow["buyQuan3"];}?></td>                                                                    
                                            </tr>
<?php
$event=array($ordRow["entUseStatus1"],$ordRow["entUseStatus2"],$ordRow["entUseStatus3"],$ordRow["entUseStatus4"],$ordRow["entUseStatus5"]);
for($j=0;$j<=4;$j++){
    if($event[$j]!=null){
        switch($event[$j]){
        case 0:
            $event[$j]="(已參加)";
            break;
        case 1:
            $event[$j]="(未參加)";
            break;
        }
    }
    
}

?>                       
                                                 
                                            <tr>
                                                <td class="col-lg-4 col-md-4">活動項目</td>
                                                <td><?php if($ordRow["entName1"]!=null){echo $ordRow["entName1"],$event[0],"<br>";}?><?php if($ordRow["entName2"]!=null){echo $ordRow["entName2"],$event[1],"<br>";}?><?php if($ordRow["entName3"]!=null){echo $ordRow["entName3"],$event[2],"<br>";}?><?php if($ordRow["entName4"]!=null){echo $ordRow["entName4"],$event[3],"<br>";}?><?php if($ordRow["entName5"]!=null){echo $ordRow["entName5"],$event[4];}?></td>                                                                                                                                           
                                            </tr> 
                                            <tr>
                                                <td class="col-lg-4 col-md-4">總金額</td>
                                                <td colspan="2"><?php echo $ordRow["ordTotal"];?></td>                                                                         
                                            </tr>
                                        </table>
                                        <div class="Evaluation_btns">
                                            <p class="button1 planDetail Evaluation_btn">評價活動</p>
                                            <p class="button1 planDetail Evaluation_look_btn">查看評價</p>
                                        </div>                                  
                                    </div>
                             </li>
<?php
}
?>
       
                            </ul>
                        </div>
                    </div><!--justify-content-space-evenly container-->
                </div><!--wrap-->


         </div><!--background -->
        
            <script src="js/jquery-3.3.1.min.js"></script>
            <script src="js/hbgClick.js"></script>
            <script src="js/TweenMax.min.js"></script>
            <script src="js/member_ani.js"></script>
            
            <script>

                $(document).ready(function () {
                    

                    $(".list p").click( function() {
                        $(this).css({"background-color":"#A57351","color":"#fff"}).siblings().css({"background-color":"#fff","color":"#947f70"}); 
                    });

                    $('.tablinks-member').click(function () {
                        $('#member').show();
                        $('#plans').hide();
                        $('#blogs').hide();
                        $('#orders').hide();
                    });

                    $('.tablinks-plans').click(function () {
                        $('#member').hide();
                        $('#plans').css('display', 'flex');
                        $('#blogs').hide();
                        $('#orders').hide();        
                    });
                    $('.tablinks-blogs').click(function () {
                        $('#member').hide();
                        $('#plans').hide();
                        $('#blogs').show();
                        $('#orders').hide();
                    });
                    $('.tablinks-orders').click(function () {
                        $('#member').hide();
                        $('#plans').hide();
                        $('#blogs').hide();
                        $('#orders').show();
                    });

                    $('.btn').click(function () {
                        $(".orderlist >td").toggle();
                    });

                    $('.icon').click(function () {
                        $('.icon').toggleClass('active');
                    });

                });
               
            </script>
        </div>
        <!-- <script src="js/footer-flyfish.js"></script> -->

       
<script src="js/sessionPage.js"></script>
    <!-- footer -->
    <?php include 'footer.php';?>
<!-- footer -->
</body>

</html>