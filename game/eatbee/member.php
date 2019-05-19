<?php
// session_start();
// $errMsg = "";
// if( isset($_SESSION["memId"]) === false){ //尚未登入
// //    echo "尚未登入, <a href='login.html'>請登入</a><br>";
// // echo "<script>
// // 		window.alert('尚未登入，請登入');
// // 		location.href='login.html';
// // 	</script>";
//    $_SESSION["where"] = $_SERVER["PHP_SELF"];//當前正在執行的網頁檔案名稱
// }else{
// 	// $orderMemNo = $_SESSION["memNo"];
// 	// $email = $_SESSION["email"];
// 	try {
// 		$sql = "select * from member where memMail=sam@gmail.com";
// 	    $mem=$pdo->query($sql);  //下指令
	
// 	} catch (PDOException $e) {
// 		$errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
// 	    $errMsg .=  "錯誤行號" . $e->getLine() . "<br>";  	
// 	}	
// }
$errMsg = "";
try {
    require_once("php/connect.php");
    $sql = "select * from member where memMail='sam@gmail.com'";
    $mem = $pdo -> query($sql);  //下指令
    $memRow = $mem->fetch(PDO::FETCH_ASSOC);
    echo json_encode($memRow);
    print_r($memRow);
} catch (PDOException $e) {
    $errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
    $errMsg .=  "錯誤行號" . $e->getLine() . "<br>";  	
}	
echo $errMsg; 
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
    <link rel="stylesheet" href="css/header.css">
    <link rel="Shortcut Icon" type="image/x-icon" href="images/new/favicon.png" />

    <title>森存者｜會員專區</title>
</head>

<body>
    <!-- header --> 
    <nav>
        <div class="icon" id="icon">
            <div class="hamburger" id="hamburger"></div>  
        </div>

        <div id="small-forester_logo">
                <a href="index.html"><h1><img src="images/logo.svg" alt="手機板森存者商標" ></h1></a>
        </div>
        <div id="header-member" >
            <a href="login.html" ><img src="images/icon_user.png" alt="會員大頭像"></a>
        </div>
        
        <div class="cloud">
            <div class="doc doc--bg2">
                <canvas id="canvas" width="1444" height="119"></canvas>
            </div>
        </div>
        <!--  -->

        <div class="header-background-cloud">
            <span id="show_span" >
                <ul><li></li>
                    <li><a href="plan.html">活動規劃</a></li>
                    <li><a href="order.html">線上訂票</a></li>
                    <li><a href="index.html"><h1> <img id="forester_logo" src="images/logo.svg" alt="森存者商標"></h1></a></li>
                    <li><a href="blog.html">手札分享</a></li>
                    <li><a href="game.html">尋找森存者</a></li> 
                    <li class="header-member"><a href="login.html" ><img src="images/icon_user.png" alt="會員大頭像"></a></li>
                </ul>                 
            </span>
        </div>        
    </nav>
    <!-- header -->
    <script src="js/header.js"></script>
        
        <!-- 背景落花 -->
        <div class="hide">
            <div id="container"></div>
        </div>
        <div class="background">
            <div class="wrap">
                <div class=" justify-content-space-evenly container">
                    <div class="memberInfo col-sm-12 col-md-4.5">
                        <div class="member-info-box">
                            <form action="php/fileUpload.php" method="post" enctype="multipart/form-data">
                            <div class="circle">
                                <img src="images/member/member1.jpg" alt="member" id="mem_photo">
                            </div>
                            
                                <label>
                                    <input type="file" name="upFile" id="upFile">                                
                                    <i class="fas fa-camera" id="camera"></i>
                                </label>                            
                            </form>    
                            
                            <?php 
                            // while( $memRow = $mem->fetch(PDO::FETCH_ASSOC)){
                            ?>
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
                            <a class="tablinks-member" href="#">我的資料</a>
                            <a class="tablinks-plans" href="#">全部行程</a>
                            <a class="tablinks-blogs" href="#">生存手札</a>
                            <a class="tablinks-orders" href="#">訂票紀錄</a>
                        </div>

                        <form id="member" class="member col-sm-12 col-md-12">
                            <table class="">
                                <tr>
                                    <th>帳號</th>
                                    <td><?php echo $memRow["memMail"];?></td>
                                </tr>
                                <tr>
                                    <th>暱稱</th>
                                    <td><input type="text" name="email" value="<?php echo $memRow["memId"];?>"></td>
                                </tr>
                                <tr>
                                    <th>舊密碼</th>
                                    <td><input type="password" name="oldpsd" value="" placeholder="如要修改請輸入密碼" id="oldpsd"></td>
                                </tr>
                                <?php
                                // }
                                ?> 
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
                            <div class="planInfo col-sm-12 col-md-4">
                                <a href="blogContent.html">
                                    <div class="planBorder">
                                        <img src="images/member/plan1.jpg" alt="plan1">
        
                                        <h4>行程名稱 : <span>我、小明與小明的阿姨</span><a href="javascript:;"><i class="far fa-trash-alt"></i></a></h4>
                                        <p>建立日期 : <span>2019/03/14</span></p>
                                        <div class="share-blog-url-box">
                                            <a class="share-blog" href="#">分享行程至手札</a>
                                            <a class="share-url" href="#">分享連結</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="planInfo col-sm-12 col-md-4">
                                <a href="blogContent.html">                                
                                    <div class="planBorder">
                                        <img src="images/member/plan2.jpg" alt="plan2">
        
                                        <h4>行程名稱 : <span>清明假期不掃墓的話</span><a href="javascript:;"><i class="far fa-trash-alt"></i></a></h4>
                                        <p>建立日期 : <span>2019/03/14</span></p>
                                        <div class="share-blog-url-box">
                                            <a class="share-blog" href="#">分享行程至手札</a>
                                            <a class="share-url" href="#">分享連結</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="planInfo col-sm-12 col-md-4">
                                <a href="blogContent.html"> 
                                    <div class="planBorder">
                                        <img src="images/member/plan3.jpg" alt="plan3">
        
                                        <h4>行程名稱 : <span>五年三班陳志與手工薯條</span><a href="javascript:;"><i class="far fa-trash-alt"></i></a></h4>
                                        <p>建立日期 : <span>2019/03/14</span></p>
                                        <div class="share-blog-url-box">
                                            <a class="share-blog" href="#">分享行程至手札</a>
                                            <a class="share-url" href="#">分享連結</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="planInfo col-sm-12 col-md-4">
                                <a href="blogContent.html">                            
                                    <div class="planBorder">
                                        <img src="images/member/plan1.jpg" alt="plan1">
        
                                        <h4>行程名稱 : <span>兩天三夜遠離都市計畫</span><a href="javascript:;"><i class="far fa-trash-alt"></i></a></h4>
                                        <p>建立日期 : <span>2019/03/14</span></p>
                                        <div class="share-blog-url-box">
                                            <a class="share-blog" href="#">分享行程至手札</a>
                                            <a class="share-url" href="#">分享連結</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div id="blogs" class="blogs col-sm-12 col-md-12">
                            <table>
                                <thead>
                                    <tr class="blogtitle">
                                        <td class="">手札標題</td>
                                        <td class="">編輯時間</td>
                                        <td class="width3">異動</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="blog">
                                        <td>生火術有養眼的教練。</td>
                                        <td>2019/03/14 11:03</td>
                                        <td><input type="button" value="修改"><input type="button" value="刪除"></td>
                                    </tr>
                                    <tr class="blog">
                                        <td>不是的！這不是我印象中的毒蛇！ </td>
                                        <td>2019/02/28 19:17</td>
                                        <td><input type="button" value="修改"><input type="button" value="刪除"></td>
                                    </tr>
                                    <tr class="blog">
                                        <td>充滿野味的親子餐，喔一洗!</td>
                                        <td>2019/03/14 11:03</td>
                                        <td><input type="button" value="修改"><input type="button" value="刪除"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div id="orders" class="orders col-sm-12 col-md-12">
                            <ul id="myOrderList">
                                <li>
                                    <div class="listControl currentList">
                                        <span class="orderNo">訂單編號&nbsp62</span>
                                        <!-- <span class="orderTitle"></span> -->
                                        <span><i class="down"></i></span> 
                                    </div>
                                    <div class="currentListPanel">
                                        <div class="ticket col-md-12">
                                            <h3>入營及參加活動時，請出示 QR Code 票卷。</h3>
                                            <a href="#" class="button1 qrCodeBtn">QR Code</a>
                                            <input type="hidden" value="62">
                                            <div class="qrCodeModal">
                                                <div class="qrCodeContent col-md-12"></div>                                    
                                            </div>
                                        </div>
                                        <table class="ticketInfo currentDetail col-md-12 clearfix">
                                            <tr>
                                                <td class="col-lg-4 col-md-4">入營日期</td>
                                                <td>2019-04-24</td>
                                            </tr>
                                    
                                            <tr>
                                                <td class="col-lg-4 col-md-4">訂購票種</td>
                                                <td>半票&nbsp2張<br>幼兒票&nbsp1張<br></td>                                                                    
                                            </tr>
                                                <td class="col-lg-4 col-md-4">行程名稱</td>
                                                <td colspan="2">無任何活動</td>                                                                        
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4 col-md-4">總金額</td>
                                                <td colspan="2">3,250元</td>                                                                         
                                            </tr>
                                        </table>
                                        <a href="officialPlanItem.php?oPlanNo=" class="button1 planDetail">評價活動</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!--wrap-->


         </div><!--background -->
        
        <!-- <tr class="order">
            <td><i class="fas fa-qrcode fa-2x"></i><a href="#">列印</a></td>
            <td>清明假期跟爸媽</td>
            <td>2019/02/28 19:17</td>
            <td>NTD <span>2700</span></td>
            <td><a href="#"><i class="fas fa-plus"></i></a></td>
        </tr> -->
        
            <script src="js/jquery-3.3.1.min.js"></script>
            <script src="js/hbgClick.js"></script>
            <script src="js/TweenMax.min.js"></script>
            <script src="js/member_ani.js"></script>
            <!-- <script src="js/member_info.js"></script> -->
            <script>

                $(document).ready(function () {

                    $(".list a").click( function() {
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
        <!-- footer -->
        <!-- <div id="jsi-flying-fish-container" class="container"></div> -->
        <!-- footer -->
        <!-- footer會再修改就先不放囉 -->
        <!-- <script src="js/footer-flyfish.js"></script> -->


</body>

</html>