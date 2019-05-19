<?php
    // session_start();

try {
    //先取得memNo
    
    // 下面登入功能寫好要刪掉
    // $memNo =1;
   
    // $planNo =1;
    require_once("connectDb.php");
    $memNo = $_SESSION['memNo'];
    $planNo = $_REQUEST["planNo"];
    //內容
    $sql = "SELECT * FROM `plan` where memNo = :memNo and planNo=:planNo";
    $planSelect = $pdo -> prepare($sql);
    $planSelect -> bindValue(":memNo",$memNo);
    $planSelect -> bindValue(":planNo",$planNo);
    $planSelect -> bindColumn("planName",$planName);
    $planSelect -> bindColumn("planPhoto",$planPhoto);
    $planSelect -> bindColumn("planList",$planList);
    $planSelect -> bindColumn("noteName",$noteName);
    $planSelect -> bindColumn("noteContent",$noteContent);

    $planSelect ->execute();
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
    <link rel="stylesheet" href="css/blogShare.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/robot.css">
    <link rel="stylesheet" href="css/bee.css">
    <link rel="Shortcut Icon" type="image/x-icon" href="images/new/favicon.png" />
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/hbgClick.js"></script>
    <script src="js/blogEdit.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>
    <script src="https://cdn.quilljs.com/1.0.0/quill.min.js"></script>
    <link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.0.0/quill.bubble.css" rel="stylesheet">
    <title>森存者｜分享手札</title>
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
        <div data-depth="0.8" class="fly1"><img src="images/blog/fly1.gif" alt="蝴蝶"></div>
    </div>
       <script>
          parallaxInstance = new Parallax( document.getElementById( "scene1" ));
      </script> 
    <div class="header_title_background"><img src="images/blogShare/title_back_edit.png" alt=""></div> 
    <!-- blog share -->
     <!-- bg fly -->
     <div id="scene2">
        <div data-depth="0.6" class="fly1"><img src="images/blog/drop.png" alt="fly"></div>
    </div>
       <script>
          parallaxInstance = new Parallax( document.getElementById( "scene2" ));
      </script>
    <div class="blogShare">
        <div class="blogShare-board">
            <img src="images/blogShare/edit_blog_paper-01.png" alt="board">
        </div>
        <div class="previewPlan" id="previewPlan">
            <div class="selectPlan">
                <div>選擇你想分享的行程</div>
                    <select name="planNo" id="selectPlanNo" >
                    <?php
                    while($planSelect->fetch(PDO::FETCH_ASSOC)){
                    ?>
                　      <option value="<?php echo $planNo;?>"><?php echo $planName;?></option>
                    <?php
                    } 
                    ?>
                    </select>
            </div>
            <div id="selectPlan">
            <div class="plan-photo">
                <!-- <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="行程圖片"> -->
                <img src="images/plan/<?php echo $planPhoto;?>" alt="手札圖片">
            </div> 
            <!-- event -->
            <div class="event-wrap">
                <?php
                    $sqlevent = "select * from `event` where entNo in ($planList)";
                    $event = $pdo -> query($sqlevent);
                    $event -> bindColumn('entName',$entName);
                    $event -> bindColumn('entPhoto',$entPhoto);
                    $event -> bindColumn('entNo',$entNo);
                while($event ->fetch(PDO::FETCH_ASSOC)){
                ?>
                     <div class='event-item'>
                     <input type="hidden" value="<?php echo $entNo;?>" class="eventNo" name="eventNo">
                        <!-- <img src='images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg'> -->
                        <img src="images/event/<?php echo $entPhoto;?>" alt="活動圖片">
                        <h3><?php echo $entName;?></h3>
                     </div>
                <?php
                }
                ?> 
            </div>
            </div>
        </div>   
        

        <div class="blogSummit">
            <div class="blogSummit-pin">
                <img src="images/pin.png" alt="圖釘">
            </div>
            
                <form action="noteSubmit.php" id="noteform" method="post">
                        <input type="hidden" name="planNo" value="<?php echo $planNo;?>" id="hiddenplanNo">
                        <input type="text" placeholder="輸入你的手札名稱" id="typeBlogName" name="noteName" value="<?php echo $noteName; ?>">    
                        <div class="blogTextarea" id="blogTextarea">
                            <?php echo $noteContent; ?>
                        </div>
                        <textarea name="noteContent" id="noteContent" cols="30" rows="10" style="display:none;"></textarea>
                        <div class="blogShare-btnContainer">
                           <button id="noteSubmitbtn">發布手札</button>
                        </div>
                </form>
              <!-- bg fly -->
                <div id="scene3">
                    <div data-depth="0.2" class="fly1"><img src="images/blog/fly1.gif" alt="蝴蝶"></div>
                </div>
                <script>
                    parallaxInstance = new Parallax( document.getElementById( "scene3" ));
                </script> 
        </div>
    </div>
  
<!-- event lightbo -->
<div id="infoContainer"></div>     
</div>
<script>
var quill = new Quill("#blogTextarea", {
			theme: "snow", // 模板
			modules: {
				toolbar: [
					// 工具列列表[註1]
					[{ 'color': [] }],
					[{ 'background': [] }], // 顏色          
					['bold'],
					['italic'],
					['underline'], // 粗體、斜體、底線和刪節線
					[{ 'list': 'ordered' }],
					[{ 'list': 'bullet' }], // 清單
					['image'],
					[{ 'header': [1, 2, 3, 4, 5, 6, false] }],// 標題
				
				]
			}
		})
</script>
</body>
</html>