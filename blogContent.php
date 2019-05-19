<?php

try {
    //先取得planNo
    require_once("connectDb.php");
     $planNo = $_REQUEST['planNo'];
    //內容
    $sql="SELECT * FROM `plan` as p JOIN `member` as m ON p.memNo = m.memNo where planNo=:planNo";
    $blogContent = $pdo -> prepare($sql);
    $blogContent -> bindColumn("planPhoto",$planPhoto);
    $blogContent -> bindColumn("planList",$planList);
    $blogContent -> bindColumn("noteName",$noteName);
    $blogContent -> bindColumn("noteContent",$noteContent);
    $blogContent -> bindColumn("noteLikeTime",$noteLikeTime);
    $blogContent -> bindColumn("noteMsgTime",$noteMsgTime);
    $blogContent -> bindColumn("noteDate",$noteDate);
    $blogContent -> bindColumn("memNo",$memNo);
    $blogContent -> bindColumn("memId",$memId);
    $blogContent -> bindColumn("memImg",$memImg);

    $blogContent ->bindValue(':planNo',$planNo);
    $blogContent ->execute();

    //留言
    // $sqlMsg="SELECT * FROM `noteComment` n join `member` m  on n.memNo = m.memNo where n.planNo = :planNo";
    // $msg = $pdo -> prepare($sqlMsg);
    // $msg ->bindColumn('noteCommTit',$noteCommTit);
    // $msg ->bindColumn('noteCommContent',$noteCommContent);
    // $msg ->bindColumn('noteCommDate',$noteCommDate);
    // $msg -> bindColumn("memId",$memId);
    // $msg -> bindColumn("memImg",$memImg);

    // $msg ->bindValue(':planNo',$planNo);
    // $msg ->execute();
   

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
    <link rel="stylesheet" href="css/svg_style.css">
    <link rel="stylesheet" href="css/blogContent.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/robot.css">
    <link rel="stylesheet" href="css/bee.css"> 
    <link rel="Shortcut Icon" type="image/x-icon" href="images/new/favicon.png" />
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/hbgClick.js"></script>
    <!-- <script src="js/blogContent.js"></script> -->
    <!-- <script src="js/copyLink.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <title>森存者｜手札內頁</title>
</head>
<body>
      <!-- header -->
      <!-- <?php include 'header.php';?> -->
     <!-- <?php require_once("header.php");?> -->
      
    <!-- header -->

    <div class="wrap">
    <!-- bg fly -->
    <div id="scene1">
        <div data-depth="0.5" class="fly1"><img src="images/blog/drop.png" alt="蝴蝶"></div>
    </div>
        <script>
            parallaxInstance = new Parallax( document.getElementById( "scene1" ));
        </script>  

     <?php	
        while($blogContent->fetch(PDO::FETCH_ASSOC)){
    ?>
    <div class="blogContent">
        <div class="blogContent-heading">
            <h2><?php echo $noteName;?></h2>
        </div>
        <div class="blogContent-info">
            <div class="blogContent-author">
                <!-- <img src="images/blog/big_head1.png" alt="大頭貼"> -->
                <img src="images/member/<?php echo $memImg;?>" alt="大頭貼">
                <span><?php echo $memId;?></span>
                <span><?php echo $noteDate;?></span>
            </div>

            <!-- <div class="blogContent-share">
                <input type="text" id="copyurl" value="blogContent.php?planNo=<?php echo $planNo;?>" >
                <img src="images/blog/Share.png" alt="分享" id="copybtn">
            </div> -->

        </div>
        <script>
               var copybtn=document.getElementById("copybtn");
           
               copybtn.addEventListener("click",function(){
           
               var copyurl = document.getElementById("copyurl");    
               copyurl.select();    
               document.execCommand("copy");
               document.getElementById("copyok").style.display="inline-block"; 
           
               setTimeout(function(){ document.getElementById("copyok").style.display="none";  }, 3000);
               });
        </script>    

        <!-- 內文 -->
        <div class="blogContent-photo">
            <!-- <img src="images/event/Best-Survival-Schools.jpg" alt="手札圖片"> -->
            <img src="images/plan/<?php echo $planPhoto;?>" alt="手札圖片">
        </div>

        <div class="blogContent-wrap">
        <div class="blogContent-content">
            <p><?php echo $noteContent;?></p>
        </div>
        <div class="blogContent-graphic">
 <!-- event -->
        <div class="blogContent-event-wrap">
            
            <?php
            $eventArr = explode(",",$planList);
            for($i=0;$i<count($eventArr);$i++){
                $sqlevent ="SELECT * FROM `event` where entNo =$eventArr[$i]";
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
                $event -> bindColumn("entLoc",$entLoc);
                $event ->fetch(PDO::FETCH_ASSOC)
            ?>
            <div class="blogContent-event">
            <input type="hidden" value="<?php echo $entNo;?>" class="eventNo" name="eventNo">
                 <!-- <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片"> -->
                 <img src="images/event/<?php echo $entPhoto;?>" alt="活動圖片">
                 <div class="blogContent-event-info">
                    <h3 class="event-name"><?php echo $entName;?></h3>
                    <span class="event-hr"><?php echo $entDate;?>小時</span>
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
                      <div class="avgScore">
                          <span>平均</span>
                        <?php
                          for($j=0;$j<$entSco;$j++){
                        ?>
                          <img src="images/blog/fire.png" alt="評分火數">
                        <?php
                         }
                        ?>
                      </div>
                      <div class="event-price">$<?php echo $entPrice;?></div>
                 </div>    
            </div>
            <!-- <script>
                var globalVariable = <?php echo $entLoc;?>
            </script> -->
            <?php
            }
            ?> 
        </div> 

            <!-- 活動座標 -->
            <?php
                $sql2 = "SELECT entNo,entLoc FROM `event` where entNo in ($planList)";
                $entLoc = $pdo->query($sql2);
            ?>
            <script>
                var globalVariable = <?php echo json_encode( $entLoc -> fetchAll());?>
            </script>
            <h3 class="entHeading">活動座標</h3>
            <div class="blogContent-location" id="mapboard">
                <img src="images/blog/island-map.png" alt="地圖" class="map">
            </div>
        </div>
    </div>

        <div class="blogContent-btnContainer">
            <div class="blogLikeBtn">
               <img src="images/blog/愛心.png" class="like" id="like<?php echo "|".$planNo?>">
               <span id="likeNum<?php echo $planNo;?>"><?php echo $noteLikeTime;?></span> 
            </div>
            <?php
            // $sqlMsg = "SELECT COUNT(noteCommNo)  FROM noteComment WHERE noteCommStatus=1 AND planNo = $planNo";
            // $noteMsgTime = $pdo -> query($sqlMsg);
            $con =mysqli_connect("localhost","cd106g2","cd106g2","cd106g2"); 
            $sqlMsg = "SELECT COUNT(noteCommNo)  FROM noteComment WHERE noteCommStatus=1 AND planNo = $planNo";
            $result = mysqli_query($con,$sqlMsg);
            $noteMsgTime = mysqli_fetch_array($result);
            ?>
            <div class="blogCommentBtn">
              <img src="images/blog/留言.png" alt="comment">
              <span class="commNum" id="commNum"><?php echo $noteMsgTime[0];?></span>  
            </div>
            <button id="addCheck">加入我的行程</button>

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
    <!-- </div>        -->
    <?php
    }
    ?>
     <script>
        $("#close").click(function(){
            $("#addPlanArea").hide();
        });
    </script> 
    <!-- bg fly -->
    <div id="scene2">
        <div data-depth="0.5" class="fly1"><img src="images/blog/fly1.gif" alt="蝴蝶"></div>
    </div>
    <script>
        parallaxInstance = new Parallax( document.getElementById( "scene2" ));
    </script> 



        <div class="comment">
            <?php
            $sqlMsg="SELECT * FROM `noteComment` n join `member` m  on n.memNo = m.memNo where n.planNo = :planNo and noteCommStatus = 1 order by noteCommNo desc";
            $msg = $pdo -> prepare($sqlMsg);
            $msg ->bindColumn('noteCommNo',$noteCommNo);
            $msg ->bindColumn('noteCommTit',$noteCommTit);
            $msg ->bindColumn('noteCommContent',$noteCommContent);
            $msg ->bindColumn('noteCommDate',$noteCommDate);
            $msg -> bindColumn("memNo",$memNo);
            $msg -> bindColumn("memId",$memId);
            $msg -> bindColumn("memImg",$memImg);
        
            $msg ->bindValue(':planNo',$planNo);
            $msg ->execute();
            if($noteCommNo = null){
                echo '目前沒有留言，快去下面留言吧';            
            }
            else{
            while($msg ->fetch(PDO::FETCH_ASSOC)){
            ?>
            <div class="comment-item">
                <div class="comment-author">
                    <!-- <img src="images/blog/big_head2.png" alt="大頭貼"> -->
                    <img src="images/member/<?php echo $memImg;?>" alt="大頭貼">
                    <div><?php echo $memId;?></div>
                </div>
            
                <div class="comment-SendContent">
                    <div><?php echo $noteCommContent;?></div>
                    <div class="comment-date"><?php echo $noteCommDate;?></div>
                </div>

                <!-- <a href="notecommReport.php?planNo=<?php echo $planNo;?>&noteCommNo=<?php echo $noteCommNo;?>"><img src="images/game/alert.png" alt="檢舉" class="commentRep"></a> -->
                <img src="images/game/alert.png" alt="檢舉" class="commentRep" id="commentRep<?php echo "|".$noteCommNo?>">
            </div>
            <?php
            }}
            ?>
        
            <div class="comment-input">
                <form action="noteComment.php" method="get" id="noteCommentForm">
                    <input type="hidden" value="<?php echo $planNo;?>" name="planNo">
                    <textarea name="noteCommContent" placeholder="輸入你的留言" maxlength="250"></textarea>
                    <button  id="commSubmit" type="submit" form="noteCommentForm">留言</button>
                </form>
            </div>

        </div>

        <div class="blogContent-seemore">
            <!-- bg fly -->
            <div id="scene3">
                <div data-depth="0.5" class="fly1"><img src="images/blog/fly1.gif" alt="蝴蝶"></div>
            </div>
            <script>
                parallaxInstance = new Parallax( document.getElementById( "scene3" ));
            </script> 
            <!-- <button>加入我的行程</button> -->
            <button id="readMoreBlog"><a href="blog.php"> 看看其他手札</a></button>
        </div>
    
        </div>
</div>
<!-- event lightbo -->
<div id="infoContainer"></div> 
<!-- copylink lightbox -->
<div id="copyok">
        <p>複製成功3秒後關閉。</p>
</div>
<div class="reportArea" id="reportArea">
<div id="closeRep"></div>
    <h2>檢舉原因</h2>
    <form action="notecommReport.php" method="get" id="noteCommReportForm">
        <input type="hidden" value="" name="noteCommNo" id="hiddennoteCommNo">
        <textarea id="noteCommRepReason" name="noteCommRepReason"cols="30" rows="7" maxlength="150" placeholder="輸入檢舉原因"></textarea>
        <button  id="repSubmit" type="submit" form="noteCommReportForm">確認送出</button>
    </form>
</div>





    <!-- footer -->
    <?php include 'footer.php';?>
<!-- footer -->
<script>
    $("#closeRep").click(function(){
        $(".reportArea").hide();
    });
    $(".commentRep").click(function(){
        $(".reportArea").show();
    });
</script>
</body>
<script src="js/blogContent.js"></script>

<script src="js/sessionPage.js"></script>
</html>
