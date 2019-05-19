<?php
    ob_start();
    // session_start();

try {
    require_once("connectDb.php");
    //第一名手札
    $sqlranking="SELECT * FROM `plan` as p JOIN `member` as m ON p.memNo = m.memNo where noteStatus = 1  order by noteLikeTime desc limit 1";
    $ranking = $pdo -> query($sqlranking);
    $ranking -> bindColumn("planNo",$planNo);
    $ranking -> bindColumn("noteName",$noteName);
    $ranking -> bindColumn("noteDate",$noteDate);
    $ranking -> bindColumn("planPhoto",$planPhoto);
    $ranking -> bindColumn("planList",$planList);
    $ranking -> bindColumn("noteContent",$noteContent);
    $ranking -> bindColumn("noteLikeTime",$noteLikeTime);
    $ranking -> bindColumn("noteMsgTime",$noteMsgTime);
    $ranking -> bindColumn("memNo",$memNo);
    $ranking -> bindColumn("memId",$memId);
    $ranking -> bindColumn("memImg",$memImg);
    //最新排列手札
    $sqlNewblog = "SELECT * FROM `plan` p LEFT JOIN `member` m ON p.memNo = m.memNo where noteStatus = 1 order by noteTime desc,noteDate desc";
    $blogNew = $pdo -> query($sqlNewblog);
    $blogNew -> bindColumn("planNo",$planNo);
    $blogNew -> bindColumn("noteName",$noteName);
    $blogNew -> bindColumn("noteDate",$noteDate);
    $blogNew -> bindColumn("planPhoto",$planPhoto);
    $blogNew -> bindColumn("planList",$planList);
    $blogNew -> bindColumn("noteContent",$noteContent);
    $blogNew -> bindColumn("noteLikeTime",$noteLikeTime);
    $blogNew -> bindColumn("noteMsgTime",$noteMsgTime);
    $blogNew -> bindColumn("memNo",$memNo);
    $blogNew -> bindColumn("memId",$memId);
    $blogNew -> bindColumn("memImg",$memImg);
    //熱門排列手札
    $sqlHotblog = "SELECT * FROM `plan` p LEFT JOIN `member` m ON p.memNo = m.memNo where noteStatus = 1 order by noteLikeTime";
    $blogHot = $pdo -> query($sqlHotblog);
    $blogHot -> bindColumn("planNo",$planNo);
    $blogHot -> bindColumn("noteName",$noteName);
    $blogHot -> bindColumn("noteDate",$noteDate);
    $blogHot -> bindColumn("planPhoto",$planPhoto);
    $blogHot -> bindColumn("planName",$planName);
    $blogHot -> bindColumn("planList",$planList);
    $blogHot -> bindColumn("noteContent",$noteContent);
    $blogHot -> bindColumn("noteLikeTime",$noteLikeTime);
    $blogHot -> bindColumn("noteMsgTime",$noteMsgTime);
    $blogHot -> bindColumn("memNo",$memNo);
    $blogHot -> bindColumn("memId",$memId);
    $blogHot -> bindColumn("memImg",$memImg);
    //活動
    // $sqlevent ="SELECT * FROM `event`";
    // $event = $pdo -> query($sqlevent);
    // $event -> bindColumn("entNo",$entNo);
    // $event -> bindColumn("entName",$entName);
    // $event -> bindColumn("entPhoto",$entPhoto);
    // $event -> bindColumn("entDate",$entDate);
    // $event -> bindColumn("entPrice",$entPrice);
    // $event -> bindColumn("entSco",$entPrice);
    // $event -> bindColumn("entSurVal",$entSurVal);
    // $event -> bindColumn("entHanVal",$entHanVal);
    // $event -> bindColumn("entPcVal",$entPcVal);

} catch (PDOException $e) {
	echo "錯誤 : ", $e -> getMessage(), "<br>";
	echo "行號 : ", $e -> getLine(), "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/svg_style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/robot.css">
    <link rel="stylesheet" href="css/bee.css">
    <link rel="Shortcut Icon" type="image/x-icon" href="images/new/favicon.png" />
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- <script src="js/masonry.pkgd.min.js"></script> -->
    <script src="js/hbgClick.js"></script>
    <!-- <script src="js/blog.js"></script> -->
    <script src="js/copyLink.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <title>森存者｜手札分享</title>
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
    
    <div class="wrap">
    <!-- bg fly -->
    <div id="scene1">
        <div data-depth="0.2" class="fly1"><img src="images/Cloud1.png" alt="蝴蝶"></div>
    </div>
       <script>
          parallaxInstance = new Parallax( document.getElementById( "scene1" ));
      </script>


    <div class="blogRanking">
    <?php
    while($ranking->fetch(PDO::FETCH_ASSOC)){
    ?>
        
        <a href="blogContent.php?planNo=<?php echo $planNo;?>"><h2><?php echo $noteName;?></h2></a>
        <div class="blogRanking-info">
            <div class="blogRanking-author">
                <!-- <img src="images/blog/big_head1.png" alt="大頭貼"> -->
                <img src="images/member/<?php echo $memImg;?>" alt="大頭貼">
                <span><?php echo $memId;?></span>
                <span><?php echo $noteDate;?></span>
            </div>
            <!-- <div class="blogRanking-share">
                <input type="text" id="copyurl" value="blogContent.php?planNo=<?php echo $planNo;?>" >
                 <img src="images/blog/Share.png" alt="分享" id="copybtn"> -->
            <!-- </div> --> 
        </div>
        <div class="blogRanking-article">
            <div class="blogRanking-article-left">
                <div class="blogRanking-photo">
                    <!-- <img src="images/event/Best-Survival-Schools.jpg" alt="手札圖片"> -->
                    <img src="images/plan/<?php echo $planPhoto;?>" alt="手札圖片">
                </div>
                <p><?php echo $noteContent;?>
                    <a href="blogContent.php?planNo=<?php echo $planNo;?>"><span class="readMore">繼續閱讀</span></a>
                </p>

                <?php
                // $sqlMsg = "SELECT COUNT(noteCommNo)  FROM noteComment WHERE noteCommStatus=1 AND planNo = $planNo";
                // $noteMsgTime = $pdo -> query($sqlMsg);
                $con =mysqli_connect("localhost","cd106g2","cd106g2","cd106g2"); 
                $sqlMsg = "SELECT COUNT(noteCommNo)  FROM noteComment WHERE noteCommStatus=1 AND planNo = $planNo";
                $result = mysqli_query($con,$sqlMsg);
                $noteMsgTime = mysqli_fetch_array($result);
                ?>
                <div class="blogRanking-btnContainer">
                    <div class="blogLikeBtn">
                        <img src="images/blog/愛心.png" class="like" id="rankinglike<?php echo "|".$planNo?>">
                        <span id="likeNum<?php echo $planNo;?>"><?php echo $noteLikeTime;?></span> 
                    </div>
                    <div class="blogCommentBtn">
                        <a href="blogContent.php?planNo=<?php echo $planNo;?>#noteCommentForm"><img src="images/blog/留言.png" alt="comment"></a>
                        <span class="commNum" id="commNum"><?php echo $noteMsgTime[0];?></span>  
                    </div>
                </div>
            </div>
            
          
          <!-- event -->
            <div class="blogRanking-event-wrap">
    
            <?php
            $eventArr = explode(",",$planList);
            // for($i=0;$i<count($eventArr);$i++){
                $sqlevent ="SELECT * FROM `event` where entNo in ($planList)";
                $event = $pdo -> query($sqlevent);
                $event -> bindColumn("entNo",$entNo);
                $event -> bindColumn("entName",$entName);
                $event -> bindColumn("entPhoto",$entPhoto);
                $event -> bindColumn("entDate",$entDate);
                $event -> bindColumn("entPrice",$entPrice);
                $event -> bindColumn("entSco",$entSco);
                $event -> bindColumn("entSurVal",$entSurVal);
                $event -> bindColumn("entHanVal",$entHanVal);
                $event -> bindColumn("entPcVal",$entPcVal);
                while($event ->fetch(PDO::FETCH_ASSOC)){
            ?>
            <div class="blogRanking-event">
            <input type="hidden" value="<?php echo $entNo;?>" class="eventNo" name="eventNo">
                 <!-- <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片"> -->
                 <div class="blogRanking-event-info">
                     <h3 class="event-name"><?php echo $entName;?></h3>
                     <img src="images/event/<?php echo $entPhoto;?>" alt="活動圖片">
                       <div class="event-value">
                        <table class="event-value-table">
                            <tr>
                                <td><img src="images/blog/value_family.png" alt="親子值"></td>
                                <td><?php echo $entPcVal;?></td>
                                <td><img src="images/blog/value_handmade.png" alt="手作值"></td>
                                <td><?php echo $entHanVal;?></td>
                                <td><img src="images/blog/value_survive.png" alt="生存值"></td>
                                <td><?php echo $entSurVal;?></td>
                            </tr>
                        </table> 
                      </div>

                        <div class="backface-info">
                            <p class="event-hr"><span><?php echo $entDate;?></span>小時</p>
                            <p class="price">$<span><?php echo $entPrice;?></span></p>
                            <div class="avgScore">
                                <span>平均</span>
                                <?php
                                    for( $i=0; $i<$entSco; $i++){
                                    ?>
                                        <img class="scoFire" src="images/plan/fire.png" alt="評分火數">
                                    <?php	
                                    }
                                    ?>
                            </div>
                        </div>
                 </div>    
            </div>
             <?php
            }
            ?> 
          
        </div>





        
        <div class="addBtn">
            <button id="addCheck">加入我的行程</button>
        </div>
        <div id="addPlanArea" style="display:none;">
            <div id="close"></div>
            <h2>加入的行程將會存入會員中心</h2>
                <form action="addPlan.php" method="post">
                    <input type="text" name="planName" placeholder="輸入行程名稱" id="addplanName">
                    <input type="hidden" name="planList" value="<?php echo $planList?>">
                    <input type="hidden" name="planPhoto" value="cover_family_big.jpg">
                    <br>
                    <input type="submit" value="加入行程" id="planSub">
               </form>
        </div>
    </div>
    <?php  }?>
    </div>
    <script>
        $("#close").click(function(){
            $("#addPlanArea").hide();
        });
    </script>
   <!-- bg fly -->
    <div id="scene2">
        <div data-depth="0.6" class="fly1"><img src="images/Cloud1.png" alt="蝴蝶"></div>
    </div>
    <script>
        parallaxInstance = new Parallax( document.getElementById( "scene2" ));
    </script>
    <!-- blog share -->
    <div class="blogShare">
        <button class="blogShareBtn" id="blogShareBtn">編著手札</button>
        <img src="images/blog/back.png" alt="手札分享" class="blogShareImg" data-mobile="images/blog/bear.png" data-desktop="images/blog/back.png">
        <div class="blogShare-beforehover">
            你是不是很想寫下你的美好經驗！
        </div>
        <div class="blogShare-afterhover">
            點下去就可以實現你的願望！
        </div>
    </div>
    <script>
    //jquery rwd
    $(function(){ 
    var device = $(window).width() > 767 ? "desktop" : "mobile";
    $(".blogShareImg").each(function() {
    $(this).attr("src", $(this).data(device));
    });
    //改變尺寸
    $(window).resize(function()
    { 
    var device = $(window).width() > 767 ? "desktop" : "mobile";
    $("img").each(function() {
    $(this).attr("src", $(this).data(device));
    });
    }); 
    });
    //換圖片
    $(document).ready(function(){
         $(".blogShareBtn").hover(
            function() {
               $(".blogShareImg").attr("src","images/blog/bear.png");
            },
            function() {
               $(".blogShareImg").attr("src","images/blog/back.png");
            }
         );
      });
      $(document).ready(function(){
         $(".blogShareBtn").hover(
            function() {
               $(".blogShare-beforehover").css("visibility","hidden");
               $(".blogShare-afterhover").css("visibility","inherit");
            },
            function() {
                $(".blogShare-beforehover").css("visibility","inherit");
               $(".blogShare-afterhover").css("visibility","hidden");
            }
         );
      });
    </script>
    <!-- <div id="scene3">
        <div data-depth="1" class="fly1"><img src="images/blog/fly1.gif" alt="蝴蝶"></div>
    </div> -->
        <!-- <script>
            parallaxInstance = new Parallax( document.getElementById( "scene3" ));
        </script> -->
    <!-- blog forum -->
    <div class="blogForum">
        <div class="blogForum-optContainer">
            <button id="NewShare" >最新分享</button>
            <button id="HighScore">最高評分</button>
        </div>
        <div id="scene4">
            <div data-depth="1" class="fly1"><img src="images/blog/fly1.gif" alt="蝴蝶"></div>
        </div>
        <script>
            parallaxInstance = new Parallax( document.getElementById( "scene4" ));
        </script>

        <!-- 瀑布文章 -->
        <div id="container">
        <?php
        while($blogNew ->fetch(PDO::FETCH_ASSOC)){
        ?>
            <div class="blog-item">
            <div class="blog-item-before"></div>
                <div class="blog-img">
                    <a href="blogContent.php?planNo=<?php echo $planNo;?>">
                    <img src="images/plan/<?php echo $planPhoto;?>" alt="手札圖片"></a>
                </div>
                
                <div class="blog-info">
                    <div class="blog-author">
                        <img src="images/member/<?php echo $memImg;?>" alt="大頭貼">
                       <!-- <img src="images/blog/big_head1.png" alt="大頭貼"> -->
                       <span class="authorName"><?php echo $memId;?></span>
                    </div>  
                     <span class="blogDate"><?php echo $noteDate;?></span>
                </div>
                
                <div class="blog-name">
                    <a href="blogContent.php?planNo=<?php echo $planNo;?>"><h2><?php echo $noteName;?></h2></a>
                </div>
                
                <!-- event -->
                <div class="event-wrap">
                <?php
                $eventArr = explode(",",$planList);
                for($i=0;$i<count($eventArr);$i++){
                    $sqlevent ="SELECT * FROM `event` where entNo =$eventArr[$i]";
                    $event = $pdo -> query($sqlevent);
                    $event -> bindColumn("entNo",$entNo);
                    $event -> bindColumn("entName",$entName);
                    $event -> bindColumn("entPhoto",$entPhoto);
                    // $event -> bindColumn("entDate",$entDate);
                    // $event -> bindColumn("entPrice",$entPrice);
                    // $event -> bindColumn("entSco",$entSco);
                    // $event -> bindColumn("entSurVal",$entSurVal);
                    // $event -> bindColumn("entHanVal",$entHanVal);
                    // $event -> bindColumn("entPcVal",$entPcVal);
                    $event ->fetch(PDO::FETCH_ASSOC)
                ?>
                     <div class="event-item">
                        <input type="hidden" value="<?php echo $entNo;?>" class="eventNo" name="eventNo">
                        <img src="images/event/<?php echo $entPhoto;?>" alt="活動圖片">
                        <h3><?php echo $entName;?></h3>
                     </div>
                <?php
                    }
                ?> 
                </div>

                <div class="blog-item-btnContainer">
                    <div class="blogLikeBtn">
                       <img src="images/blog/愛心.png" class="like" id="like<?php echo "|".$planNo?>">
                       <span id="likeNum<?php echo $planNo;?>"><?php echo $noteLikeTime;?></span> 
                    </div>
                    <?php
                    $con =mysqli_connect("localhost","cd106g2","cd106g2","cd106g2"); 
                    $sqlMsg = "SELECT COUNT(noteCommNo)  FROM noteComment WHERE noteCommStatus=1 AND planNo = $planNo";
                    $result = mysqli_query($con,$sqlMsg);
                    $noteMsgTime = mysqli_fetch_array($result);
                    ?>
                    <div class="blogCommentBtn">
                        <a href="blogContent.php?planNo=<?php echo $planNo;?>#noteCommentForm"><img src="images/blog/留言.png" alt="comment"></a>
                        <span class="commNum" id="commNum"><?php echo $noteMsgTime[0];?></span>  
                    </div>
                </div>
                <!-- <div class="blog-item-after"></div> -->
            </div>
            <?php  }?>
        </div>



    </div>
    <script>
        // // 瀑布流
        // $('#container').masonry({
        //     itemSelector: '.blog-item',
        //     columnWidth: 0,
        //     animate:true
        // });

        // //燈箱
        // var copybtn=document.getElementById("copybtn");
    
        // copybtn.addEventListener("click",function(){
        
        // var copyurl = document.getElementById("copyurl");    
        // copyurl.select();    
        // document.execCommand("copy");
        // document.getElementById("copyok").style.display="inline-block"; 
        
        // setTimeout(function(){ document.getElementById("copyok").style.display="none";  }, 3000);
        // });

    </script>
    </div>

<!-- event lightbo -->
<div id="infoContainer"></div> 
<!-- copylink lightbox -->
<div id="copyok">
        <p>複製成功! 3秒後關閉。</p>
</div>




    <!-- footer -->
    <?php include 'footer.php';?>
<!-- footer -->
</body>
<script src="js/blog.js"></script>

<script src="js/sessionPage.js"></script>
</html>