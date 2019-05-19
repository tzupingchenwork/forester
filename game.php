<?php
    ob_start();

try {
    require_once("connectDb.php");
    $sql="SELECT * FROM `photo` as p JOIN `member` as m ON p.memNo = m.memNo where photoStatus =1 order by photoNo desc";
    $photo = $pdo -> query($sql);
    $photo -> bindColumn("photoNo",$photoNo);
    $photo -> bindColumn("photoWForester",$photoWForester);
    $photo -> bindColumn("photoLikeCnt",$photoLikeCnt);
    $photo -> bindColumn("memNo",$memNo);
    $photo -> bindColumn("memId",$memId);
    $photo -> bindColumn("memImg",$memImg);
    $photo -> execute();

    $sql2 = "SELECT * FROM `adminslocation`";
    $adminsLoc = $pdo->query($sql2);
    

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
    <!-- <script src="js/hbgClick.js"></script> -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <!-- <script src="js/game.js"></script> -->
    <link rel="Shortcut Icon" type="image/x-icon" href="images/new/favicon.png" />
    <link rel="stylesheet" href="css/game.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/robot.css">
    <link rel="stylesheet" href="css/bee.css">
    <link rel="stylesheet" href="css/svg_style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.js"></script>
    <title>森存者｜尋找森存者</title>
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
            <div data-depth="0.2" class="fly1"><img src="images/game/cloud.png"></div>
    </div>
       <script>
          parallaxInstance = new Parallax( document.getElementById( "scene1" ));
      </script> 
    <!-- map -->
    <script>
        var globalVariable = <?php echo json_encode( $adminsLoc -> fetchAll());?>
    </script>
    <div class="game-container">
        <div class="game-map" id="mapboard">
            <img src="images/game/island-map.png" id="map" class ="map" width="100%" alt="營區地圖">
        </div>
        <!-- 地圖按鈕 -->
        <div class="game-rule">
            <img src="images/game/mapbtn.png" alt="遊戲規則按鈕">
        </div>

        <div class="game-rule-content">
            <div id="close"></div>
            <h2>遊戲規則</h2>
            <p>看地圖尋找到營區裡的熊森，和他合照並上傳即可獲得驚喜</p>
            <!-- <img src="images/blog/talk.png" alt="熊"> -->
            <div class="game-rule-bearTalk">
                <span>快來找我喔！</span>
            </div>
        </div>
    </div>
    <script>
    $("#close").click(function(){
        $(".game-rule-content").hide();
    });
    $(".game-rule").click(function(){
        $(".game-rule-content").show();
    });
    </script>
    <!-- bg fly -->
     <div id="scene2">
            <div data-depth="0.5" class="fly1"><img src="images/game/cloud2.png" alt="蝴蝶"></div>
    </div>
        <script>
            parallaxInstance = new Parallax( document.getElementById( "scene2" ));
        </script>
    <!-- photo wall -->
    <div class="photoWall">
        <div class="header_title_background"><img src="images/game/title_back_album.png" alt=""></div> 
        <div class="photoWall-container">
        <!-- bgfly -->
        <div id="scene3">
            <div data-depth="0.2" class="fly1"><img src="images/game/cloud.png" alt="蝴蝶"></div>
        </div>
        <script>
              parallaxInstance = new Parallax( document.getElementById( "scene3" ));                  
        </script> 
            <div class="photoWall-upload">
                <button id="uploadCheck">上傳與熊森合照</button>
            </div>
            <div id="photoUploadArea">
            <div id="closeUpload"></div>
                <form action="uploadPhoto.php" method="post" enctype="multipart/form-data">
                    <img src="images/game/Photoupload.png" alt="" id="imgPreview">
                    <input type="file" name="photoWForester" id="upFile">
                    <input type="submit" value="送出照片" id="photoSub">
               </form>
            </div>
        </div>
        <script>
        $("#closeUpload").click(function(){
            $("#photoUploadArea").hide();
        });
    </script>
        <div id="container">
        <?php
        while($photo ->fetch(PDO::FETCH_ASSOC)){
        ?>
            <div class="photo-item">
                <div class="photo-img">
                    <!-- <img src="images/event/Best-Survival-Schools.jpg" alt="活動圖片"> -->
                    <img src="images/game/<?php echo $memNo;?>/<?php echo $photoWForester;?>" alt="遊戲">
                </div>
            
                
                    <div class="photo-author">
                        <!-- <img src="images/blog/big_head1.png" alt="大頭照"> -->
                        <img src="images/member/<?php echo $memImg;?>" alt="大頭貼">
                        <span class="authorName"><?php echo $memId;?></span>
                    </div>
                <div class="photoBtn">
                        <div class="photoLikeBtn">
                            <img src="images/blog/愛心.png" class="like" id="like<?php echo "|".$photoNo?>">
                            <span id="likeNum<?php echo $photoNo;?>"><?php echo $photoLikeCnt;?></span>  
                        </div>
                        <div class="photoRepBtn">
                           <a href="photoReport.php?photoNo=<?php echo $photoNo;?>"><img src="images/game/alert.png" alt="like"></a>
                        </div>
                        
                </div>
            </div>
        <?php 
        }
        ?>

        </div>

        
    </div>
    <script>
// 瀑布流
 
        // $('#container').masonry({
        //     itemSelector: '.photo-item',
        //     columnWidth: 0,
        //     animate:true
        // });


    </script>
    <script type='text/javascript'>
            var container = document.querySelector('#container');
            var msnry = new Masonry( container, {
            itemSelector: '.photo-item',
            columnWidth: '.photo-item',
            animate:true,
            percentPosition: true
});          
</script>
</div>




    <!-- footer -->
    <?php include 'footer.php';?>
<!-- footer -->
<script src="js/sessionPage.js"></script>
</body>
<script src="js/game.js"></script>

<script src="js/sessionPage.js"></script>
</html>