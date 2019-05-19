<!-- 抓熱門活動資料 -->
<?php 
$errMsg="";
try {
	require_once("connectDB.php");
	$sql = "SELECT * from `event` order by entScoTime limit 3";
    $hotEvent = $pdo -> query($sql);
	$hotEventRows = $hotEvent -> fetchAll();
	
} catch (PDOException $e) {
	$errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
	$errMsg .=  "錯誤行號" . $e->getLine() . "<br>";
}
echo $errMsg;  
?>

<!-- 抓本月主打活動資料 -->
<?php 
$errMsg="";
try {
	require_once("connectDB.php");
	$sql = "SELECT * from `event` order by entPcVal desc limit 3 ";
    $monthlyEvent = $pdo -> query($sql);
	$monthlyEventRows = $monthlyEvent -> fetchAll();
	
} catch (PDOException $e) {
	$errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
	$errMsg .=  "錯誤行號" . $e->getLine() . "<br>";
}
echo $errMsg;  
?>

<!-- 抓門票資料 -->
<?php 
$errMsg="";
try {
	require_once("connectDB.php");
	$sql = "SELECT * from `ticket` order by tktNo";
    $tkt = $pdo -> query($sql);
	$tktRows = $tkt -> fetchAll();
	
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
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <!-- <link rel="stylesheet" href="css/svg_style.css"> -->
    <link rel="stylesheet" href="css/index2.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="Shortcut Icon" type="image/x-icon" href="images/new/favicon.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>森存者｜首頁</title>
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
    <div class="index_RWD">
        <!-- 第一屏--首頁 -->
        <div class="screen-index">
            <div class="section_Intor">
                <div class="intro " data-0="display:block" data-1950="" data-2000="display:none">
                    <img class="green1-1" src="images/index_front_leaf1.png" alt="leaf" data-0="margin-left:35%;bottom:10%"
                        data-800="margin-left:-50%; bottom:-100%">
                    <img id="rwd_ticket"  src="images/index_ticket.png" alt="leaf" data-0="margin-left:35%;bottom:12%"
                        data-800="margin-left:-40%; bottom:-100%">
                    <img class="green1-3" src="images/index_front_leaf2.png" alt="leaf" data-0="margin-left:35%;bottom:10%"
                        data-800="margin-left:130%; bottom:-100%">
                    <img class="green2-1" src="images/index_front_leaf7.png" alt="leaf" data-0="margin-left:15%;bottom:10%"
                        data-800="margin-left:-65%;bottom:-25%">
                    <img class="green2-2" src="images/index_front_leaf5.png" alt="leaf" data-0="margin-left:20%;bottom:0%"
                        data-800="margin-left:-60%;bottom:-30%">
                    <img id="rwd_backpack"  src="images/index_backpack.png" alt="leaf" data-0="margin-left:10%;bottom:10%"
                        data-800="margin-left:-40%;bottom:-30%">
                    <img class="green3-1" src="images/index_front_leaf8.png" alt="leaf" data-0="margin-left:60%;bottom:5%"
                        data-800="margin-left:100%;bottom:-50%">
                    <img id="rwd_notebook"  src="images/index_notebook.png" alt="leaf" data-0="margin-left:65%;bottom:10%"
                        data-800="margin-left:140%;bottom:-20%">
                    <img id="rwd_map" src="images/index_map.png" alt="leaf" data-0="margin-left:65%;bottom:10%"
                        data-800="margin-left:110%;bottom:-20%">
                    <img class="slogan" src="images/index_slogan.png" alt="slogan" data-0="opacity:1" data-900="opacity:0">
                    <img class="posleft" src="images/index_moutain.png" alt="moutain" data-0="margin-left:10%;"
                        data-800="margin-left:-50%;">
                    <img class="posright" src="images/index_trees.png" alt="trees" data-0="margin-left:65%;"
                        data-800="margin-left:120%;">
                    <div class="scrollinfo " data-0="opacity:1" data-900="opacity:0;">
                        <div class="img">請向下滾動滑鼠<img src="images/scrolldown.gif" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- 第二屏--熱門活動 -->
        <div class="screen-hot-plan">
            <div class="title_box">
                <h2 class="title"><img src="images/title_back_hotPlan.png" alt="popularplan">熱門活動</h2>
            </div>
    
            <div class="hot_plan_slider">
        
                <div class="cardFrame leftCardFrame">
                    <div class="card">
                        <div class="imgborder">
                            <img src="images/plan/<?php echo $hotEventRows[1]['entPhoto'];?>" alt="">
                        </div>
                        <h3 class="subTitle"><?php echo $hotEventRows[1]['entName'];?></h3>
                        <p class="desc"><?php echo $hotEventRows[1]['entBrief'];?></p>
                        <div class="starPlanGroup">
                            <div class="equalValue">平均&nbsp;
                                <?php
                                for( $i=0; $i<$hotEventRows[1]['entSco']; $i++){
                                ?>
                                    <img src="images/plan/fire.png" alt="評分火數">
                                <?php	
                                }
                                ?>
                            </div>
                            <a class="addToPlan" href="#">+</a>
                        </div>
                    </div>
                </div>
            
    
            
                <div class="cardFrame middleCardFrame">
                    <div class="card">
                        <div class="imgborder">
                            <img src="images/plan/<?php echo $hotEventRows[0]['entPhoto'];?>" alt="">
                        </div>
                        <h3 class="subTitle"><?php echo $hotEventRows[0]['entName'];?></h3>
                        <p class="desc"><?php echo $hotEventRows[0]['entBrief'];?></p>
                        <div class="starPlanGroup">
                            <div class="equalValue">平均&nbsp;
                                <?php
                                for( $i=0; $i<$hotEventRows[0]['entSco']; $i++){
                                ?>
                                    <img src="images/plan/fire.png" alt="評分火數">
                                <?php	
                                }
                                ?>
                            </div>
                            <a class="addToPlan" href="#">+</a>
                        </div>
                    </div>
                </div>
            
    
            
                <div class="cardFrame rightCardFrame">
                    <div class="card">
                        <div class="imgborder">
                            <img src="images/plan/<?php echo $hotEventRows[2]['entPhoto'];?>" alt="">
                        </div>
                        <h3 class="subTitle"><?php echo $hotEventRows[2]['entName'];?></h3>
                        <p class="desc"><?php echo $hotEventRows[2]['entBrief'];?></p>
                        <div class="starPlanGroup">
                            <div class="equalValue">平均&nbsp;
                                <?php
                                for( $i=0; $i<$hotEventRows[2]['entSco']; $i++){
                                ?>
                                    <img src="images/plan/fire.png" alt="評分火數">
                                <?php	
                                }
                                ?>
                            </div>
                            <a class="addToPlan" href="#">+</a>
                        </div>
                    </div>
                </div>
            
            <div class="btn_group">
                <div id="leftBtn"><i class="fas fa-chevron-circle-left"></i></div>
                <div id="rightBtn"><i class="fas fa-chevron-circle-right"></i></div>
            </div>
        </div>
        </div>
    
        <!-- 第三屏--本月主打 -->
        <div class="screen-monthly">
            <div class="title_box">
                <h2 class="title"><img src="images/title_back_monthly.png" alt="本月主打">本月主打</h2>
            </div>
            <div class="monthly-event-title">
                <h2>親子動一動</h2>
                <p class="monthly_desc">本月主打推薦親子行程！和孩子一起動手、動腳、動腦，和孩子一同歡笑、學習、成長，不同年齡層的親子活動，等你們來探索。</p>
            </div>
            <div class="event">
                <h3 class="subtitle"><?php echo $monthlyEventRows[0]['entName'];?></h3>
                <img src="images/plan/<?php echo $monthlyEventRows[0]['entPhoto'];?>" alt="活動照片">
                <p class="desc">
                    <?php echo $monthlyEventRows[0]['entBrief'];?>  
                </p>
            </div>
            <div class="event">
                <h3 class="subtitle"><?php echo $monthlyEventRows[1]['entName'];?></h3>
                <img src="images/plan/<?php echo $monthlyEventRows[1]['entPhoto'];?>" alt="活動照片">
                <p class="desc"><?php echo $monthlyEventRows[1]['entBrief'];?></p>
            </div>
            <div class="event">
                <h3 class="subtitle"><?php echo $monthlyEventRows[2]['entName'];?></h3>
                <img src="images/plan/<?php echo $monthlyEventRows[2]['entPhoto'];?>" alt="活動照片">
                <p class="desc"><?php echo $monthlyEventRows[2]['entBrief'];?></p>
            </div>
    
            <a class="event makeplans" href="javascript:;">前往活動規劃</a>
        </div>
    
        <!-- 第四屏--線上訂票 -->
        <div class="screen-order">
            <div class="title_box">
                <h2 class="title"><img src="images/title_back_order.png" alt="線上訂票">線上訂票</h2>
            </div>
            
            <div class="ticketsBord">
                <div class="tickFrame">
                    <div class="tickLeftBox">
                        <div class="tickPic">
                            <img class="bear" src="images/babyBear.png" alt="">
                        </div>
                        <div class="tickTxt">
                            <h3><?php echo $tktRows[0]['tktName'];?></h3>
                            <p class="tickRange"><?php echo $tktRows[0]['tktDesc'];?></p>
                            <p class="tickPrice"><?php echo $tktRows[0]['tktPrice'];?><span>元</span></p>
                        </div>
                    </div>
                    <div class="tickAmt">
                        <button class="tickLess"><i class="fas fa-minus"></i></button>
                        <span> 0 </span>
                        <button class="tickAdd"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
                <div class="tickFrame">
                    <div class="tickLeftBox">
                        <div class="tickPic">
                            <img class="bear" src="images/youngBear.png" alt="">
                        </div>
                        <div class="tickTxt">
                            <h3><?php echo $tktRows[1]['tktName'];?></h3>
                            <p class="tickRange"><?php echo $tktRows[1]['tktDesc'];?></p>
                            <p class="tickPrice"><?php echo $tktRows[1]['tktPrice'];?><span>元</span></p>
                        </div>
                    </div>
                    <div class="tickAmt">
                        <button class="tickLess"><i class="fas fa-minus"></i></button>
                        <span> 0 </span>
                        <button class="tickAdd"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
                <div class="tickFrame">
                    <div class="tickLeftBox">
                        <div class="tickPic">
                            <img class="bear" src="images/oldBear.png" alt="">
                        </div>
                        <div class="tickTxt">
                            <h3><?php echo $tktRows[2]['tktName'];?></h3>
                            <p class="tickRange"><?php echo $tktRows[2]['tktDesc'];?></p>
                            <p class="tickPrice"><?php echo $tktRows[2]['tktPrice'];?><span>元</span></p>
                        </div>
                    </div>
                    <div class="tickAmt">
                        <button class="tickLess"><i class="fas fa-minus"></i></button>
                        <span> 0 </span>
                        <button class="tickAdd"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
            </div>
            <img class="bk_bear" src="images/backpack_bear.png" alt="">
            <a class="event goOrder" href="javascript:;">立即訂票</a>
        </div>
    
        <!-- 第五屏--手札推薦 -->
        <div class="screen-blog">
            <div class="title_box">
                <h2 class="title"><img src="images/title_back_order.png" alt="線上訂票">線上訂票</h2>
            </div>        
            <div class="blogBoard blogRanking">
                <div class="blog-left-container">
                    <a href="blogContent.html">
                        <h2>原來山泉水這麼甜!!</h2>
                    </a>
                    
                    <div class="blogRanking-info">
                        <div class="blogRanking-author">
                            <img src="images/blog/big_head1.png" alt="大頭貼">
                            <span>董董</span>
                            <span>2019-04-09</span>
                        </div>
                        <div class="blogRanking-share">
                            <input type="text" name="" id="copyurl" value="www.google.com">
                            <!-- <button type="button" id="copybtn"><img src="images/blog/Share.png" alt="分享"></button> -->
                            <img src="images/blog/Share.png" alt="分享" id="copybtn">
                        </div>
                    </div>
                </div>
            
                <div class="blogRanking-main-content">
                    <div class="blogRanking-article-left-group">
                        <div class="blogRanking-article-left">
                            <div class="blogRanking-photo">
                                <img id="blog-cover" src="images/event/Best-Survival-Schools.jpg" alt="手札圖片">
                            </div>
                            <p>這個活動真是太神奇了，我們把髒兮兮的泥巴水變成可以喝的清水，一定要推一下的拉!!!一定要推一下的拉!!!一定要推一下的拉!!!一定要推一下的拉!!!一定要推一下的拉!!!一定要推一下的拉!!!
                                <a href="blogContent.html"><span class="readMore">...繼續閱讀</span></a>
                            </p>
                        </div>
    
                    </div>
        
                    <div class="blogRanking-event-wrap">
                        <div class="blogRanking-event event">
                            <div class="blogRanking-event-info">
                                <h3 class="event-name">基本求生</h3>
                                <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片">
                            </div>
                        </div>
            
                        <div class="blogRanking-event event">
                            <div class="blogRanking-event-info">
                                <h3 class="event-name">基本求生</h3>
                                <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片">
                            </div>
                        </div>
            
                        <div class="blogRanking-event event">
                            <div class="blogRanking-event-info">
                                <h3 class="event-name">基本求生</h3>
                                <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片">
                            </div>
                        </div>
            
                        <div class="blogRanking-event event">
                            <div class="blogRanking-event-info">
                                <h3 class="event-name">基本求生</h3>
                                <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片">
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="eventaddBtnBox">
                    <div class="blogRanking-btnContainer">
                        <div class="blogLikeBtn">
                            <img src="images/blog/愛心.png" alt="like">
                            <span class="likeNum" id="likeNum">100</span>
                            <img src="images/blog/留言.png" alt="comment">
                            <span class="commNum" id="commNum">100</span>                    </div>
                    </div>                
                    <div class="blogCommentBtn">
                        <button id="eventaddBtn">加入至預定行程</button>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/MorphSVGPlugin.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="node_modules/scrollmagic/scrollmagic/minified/ScrollMagic.min.js"></script>
    <script src="node_modules/scrollmagic/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>
    <script src="node_modules/scrollmagic/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
    <script src="js/tweenMax.js"></script>
    <script src="js/skrollr.js"></script>
    <script src="js/index.js"></script>


    <script type="text/javascript">
        var s = skrollr.init();
    </script>

    <!-- footer -->
    <?php include 'footer.php';?>
<!-- footer -->

<script src="js/sessionPage.js"></script>
</body>

</html>