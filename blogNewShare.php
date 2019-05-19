<?php
    ob_start();
    // session_start();

try {
    require_once("connectDb.php");
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

    while($blogNewRow = $blogNew ->fetch(PDO::FETCH_ASSOC)){
?>          
            <div class='blog-item'>
            <div class="blog-item-before"></div>
                <div class='blog-img'>
                    <a href='blogContent.php?planNo={$blogNewRow['planNo']}'><img src="images/plan/<?php echo $planPhoto;?>" alt="手札圖片"></a>
                </div>
                
                <div class='blog-info'>
                    <div class='blog-author'>
                        <img src="images/member/<?php echo $memImg;?>" alt="大頭貼">
                       <!-- <img src="images/blog/big_head1.png" alt="大頭貼"> -->
                       <span class='authorName'><?php  echo $memId;?></span>
                    </div>  
                     <span class='blogDate'><?php echo $noteDate;?></span>
                </div>
                
                <div class='blog-name'>
                    <a href='blogContent.php?planNo=<?php echo $planNo;?>'><h2><?php echo $noteName;?></h2></a>
                </div>
                
                <!-- event -->
                <div class='event-wrap'>
                <?php
                $sqlevent = "select * from `event` where entNo in ({$blogNewRow['planList']})";
                $event = $pdo -> query($sqlevent);
                $event -> bindColumn('entNo',$entNo);
                $event -> bindColumn('entName',$entName);
                $event -> bindColumn('entPhoto',$entPhoto);
                while($event ->fetch(PDO::FETCH_ASSOC)){
                ?>
                     <div class='event-item'>
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
                      <img src="images/blog/留言.png" alt="comment">
                      <span class="commNum" id="commNum"><?php echo $noteMsgTime[0];?></span>  
                    </div>
                </div>
                <div class="blog-item-after"></div>
            </div>
            <?php
    }
    
} catch (PDOException $e) {
	echo "錯誤 : ", $e -> getMessage(), "<br>";
	echo "行號 : ", $e -> getLine(), "<br>";
}
?>