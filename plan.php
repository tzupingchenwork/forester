<!-- 抓活動框 -->
<?php 
session_start();
$errMsg="";
try {
	require_once("connectDB.php");
	$sql = "SELECT * from `event` where entStatus =1 order by entNo";
    $event = $pdo -> query($sql);
    $event -> bindColumn('entNo',$entNo);
    $event -> bindColumn('entName',$entName);
    $event -> bindColumn('entPhoto',$entPhoto);
    $event -> bindColumn('entBrief',$entBrief);
    $event -> bindColumn('entDesc',$entDesc);
    $event -> bindColumn('entDate',$entDate);
    $event -> bindColumn('entLoc',$entLoc);
    $event -> bindColumn('entSco',$entSco);
    $event -> bindColumn('entPrice',$entPrice);
    $event -> bindColumn('entSurVal',$entSurVal);
	$event -> bindColumn('entHanVal',$entHanVal);
    $event -> bindColumn('entPcVal',$entPcVal);

} catch (PDOException $e) {
	$errMsg .=  "錯誤原因" . $e->getMessage() . "<br>"; 
	$errMsg .=  "錯誤行號" . $e->getLine() . "<br>";
}
echo $errMsg;  
?>  

<!-- 抓熱門活動 -->
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


<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- <link rel="stylesheet" href="css/svg_style.css"> -->
    <link rel="stylesheet" href="css/plan.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="Shortcut Icon" type="image/x-icon" href="images/new/favicon.png" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>森存者｜活動規劃</title>
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
    

    <div id="desk_plan_div">
		<div id="backgounrd_animation">
			<div class="head_tree_group_left">
				<img id="head_trunk_left" src="images/trunk_left.svg" alt="">
				<img id="head_tree_left_leaf" src="images/trunk_left_leaf.svg" alt="">
			</div>
			<div class="head_tree_group_right">
				<img id="head_trunk_right" src="images/trunk_right.svg" alt="">
				<img id="head_tree_right_leaf" src="images/trunk_right_leaf.svg" alt="">
			</div>
		</div>

		<div class="background_airballoon">
			<img id="bg_airballoon" src="images/airballoon.png" alt="熱氣球">
			<img id="bg_cloud" src="images/Cloud1.png" alt="白雲">
			<img id="bg_airballoon2" src="images/airballoon.png" alt="熱氣球">        
			<!-- <img id="bg_cloud2" src="images/Cloud1.png" alt="白雲">
			<img id="bg_airballoon3" src="images/airballoon.png" alt="熱氣球">         -->
		</div>   
		
		<div class="wrap">
			<!-- 一屏：三項熱門活動介紹 -->
			<div class="plan-screen-first">
				<div class="header_title_background">
					<img src="images/title_back_hotPlan.png" alt="熱門活動">
					<h2>熱門活動</h2>
				</div>
				
				<!-- <button id="btn-go-plan-now">立即規劃行程</button> -->
				<div id="hot-event-container">
					<input type="radio" name="slider" id="s1">
					<input type="radio" name="slider" id="s2" checked>
					<input type="radio" name="slider" id="s3">
					<label for="s1" id="slide1">
						<div class="hot-event-box">
							<div class="hot-event-img event-image-second">
								<img src="images/plan/<?php echo $hotEventRows[1]['entPhoto'];?>" alt="活動圖片">
							</div>
							<h3><?php echo $hotEventRows[1]['entName'];?></h3>
							<p><?php echo $hotEventRows[1]['entBrief'];?></p>
							<div class="euqal-add-box">
								<div class="equal-value">平均
									<?php
									for( $i=0; $i<$hotEventRows[1]['entSco']; $i++){
									?>
										<img src="images/plan/fire.png" alt="評分火數">
									<?php	
									}
									?>
								</div>
								<!-- <button>加入至預定行程</button> -->
							</div>
						</div>
					</label>
	
					<label for="s2" id="slide2">
						<div class="hot-event-box">
							<div class="hot-event-img event-image-first">
								<img src="images/plan/<?php echo $hotEventRows[0]['entPhoto'];?>" alt="活動圖片">
							</div>
							<h3><?php echo $hotEventRows[0]['entName'];?></h3>
							<p><?php echo $hotEventRows[0]['entBrief'];?></p>
							<div class="euqal-add-box">
								<div class="equal-value">平均
									<?php
									for( $i=0; $i<$hotEventRows[0]['entSco']; $i++){
									?>
										<img src="images/plan/fire.png" alt="評分火數">
									<?php	
									}
									?>
								</div>
								<!-- <button>加入至預定行程</button> -->
							</div>
						</div>                
					</label>
	
					<label for="s3" id="slide3">
						<div class="hot-event-box">
							<div class="hot-event-img event-image-third">
								<img src="images/plan/<?php echo $hotEventRows[2]['entPhoto'];?>" alt="活動圖片">
							</div>
							<h3><?php echo $hotEventRows[2]['entName'];?></h3>
							<p><?php echo $hotEventRows[2]['entBrief'];?></p>
							<div class="euqal-add-box">
								<div class="equal-value">平均
									<?php
									for( $i=0; $i<$hotEventRows[2]['entSco']; $i++){
									?>
										<img src="images/plan/fire.png" alt="評分火數">
									<?php	
									}
									?>
								</div>
								<!-- <button>加入至預定行程</button> -->
							</div>
						</div>
					</label>
				</div>
			</div>
	




			<!-- 二屏：活動選擇頁面 -->
			<!-- 篩選霸：上排 -->
			<div class="plan-screen-second">
				<div class="header_title_background">
					<img src="images/new/title_back_process.png" alt="開始規劃">
					<h2>開始規劃</h2>
				</div>
				<!-- <button>回上一頁</button>
				<button>繼續規劃</button> -->
					<div class="plan_container_staggerFromTo">
						<div class="plan-container-step-one">
							<div class="choose-bar-container">
								<h3>篩選霸拉拉看<span class="plan-explaination">依照自訂的單位值找出合適的活動</span></h3>
								<div class="bar-img-container">
									<div class="bar-img-box">
										<img src="images/value_family.png" class="value-pic" alt="">
										<span class="value-item">親子值</span>                                
										<div class="drag-img-box">
											<p>
												<label for="amount">選取數字為：</label>
												<input type="text" id="amount-family" style="border:0; color:#f3994f; font-weight:bold;">
											</p>
											<div id="family-range"></div>
										</div>
									</div>
		
									<div class="bar-img-box">
										<img src="images/value_handmade.png" class="value-pic" alt="">
										<span class="value-item">手作值</span>                                
										<div class="drag-img-box">
											<p>
												<label for="amount">選取數字為：</label>
												<input type="text" id="amount-handmade" style="border:0; color:#f3994f; font-weight:bold;">
											</p>
											<div id="handmade-range"></div>
										</div>
									</div>
		
									<div class="bar-img-box">
										<img src="images/value_survive.png" class="value-pic" alt="">
										<span class="value-item">求生值</span>                                
										<div class="drag-img-box">
											<p>
												<label for="amount">選取數字為：</label>
												<input type="text" id="amount-survive" style="border:0; color:#f3994f; font-weight:bold;">
											</p>
											<div id="survive-range"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				<!-- 活動規劃區：下左 -->
			<form action="planUploadOrder.php" method="POST" enctype="multipart/form-data" id="planForm">
				<div class="plan_container_staggerFromTo">
					<div class="plan-container-step-two">
						<h3>123拖拉行程好簡單<span class="plan-explaination">將右邊的活動拖至左方規劃區</span></h3>
						<div class="second-screen-flex-group">
							<div class="event-drop-area" id="event-drop-area" >
								<!-- <input type="hidden" id="eventSelected" value=""> -->
								<p>總時數為：
									<span class="event_hour" id="event_hour"></span>
									<!-- <input type="hidden" name="myEventHour" id="myEventHour"> -->
									<span>小時</span>
								</p>
								<p>總金額為：
									<span class="event_price" id="event_price"></span>
									<input type="hidden" name="myEventPrice" id="myEventPrice">
									<span>元</span>
								</p>
								<div id="event_drop_zone">

								</div>
							</div>
						<!-- 活動列表：下右 -->
							<div class="all-event-container">
								<div class="plan-option-list">
									<span class="check_all_plan"><a href="allPlan.php" target="_blank">查看全部活動</a></span>
									<select name="" id="list-plan">
										<option id="eventNewest" value="eventNewest">最新活動</option>
										<option id="eventHotest" value="eventHotest">熱門活動</option>
										<!-- <option value=""><a href="allPlan.html">全部活動</a></option> -->
									</select>
								</div>

								<div class="event-detail-group">
                                    <!-- 刀具製作 makeKnife -->
                                    <?php
                                    while($event->fetch(PDO::FETCH_ASSOC)){
                                    ?>
									<div class="event-detail-box">
										<div class="event-cover">
      										<img src="images/plan/<?php echo $entPhoto;?>" alt="活動圖片">
										</div>
										<div class="event-txt-box">
											<h4><?php echo $entName;?></h4>
											<!-- <span style="display: block" class="entNoSpan"><?php //echo $entNo;?></span> -->
											<input type="hidden" value="<?php echo $entLoc;?>" class="eventLoc" name="eventLoc">
											<!-- 不要動input順序 -->
											<input type="hidden" value="<?php echo $entNo;?>" class="eventNo" name="eventNo">
											<table class="allPlan-value-table">
												<tr>
													<td><img src="images/value_family.png" alt="親子值"></td>
													<td><?php echo $entPcVal;?></td>
													<td><img src="images/value_handmade.png" alt="手作值"></td>
													<td><?php echo $entHanVal;?></td>
													<td><img src="images/value_survive.png" alt="求生值"></td>
													<td><?php echo $entSurVal;?></td>
												</tr>
											</table>                        
											<div class="value-pic-box">平均
                                                <?php
                                                for($i=0;$i<$entSco;$i++){
                                                ?>
                                                    <img src="images/plan/fire.png" alt="評分火數">
                                                <?php
                                                }
                                                ?>
											</div>    
											<div class="event-hour-price">
												<span class="event-hour"><?php echo $entDate;?></span><span class="event-hour-mark">小時</span>
												<span class="event-price-mark">$</span><span class="event-price"><?php echo $entPrice;?></span>
											</div>                                
										</div>
										<i class="fas fa-trash-alt"></i>
									</div>
                                    <?php
                                    }
                                    ?>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			<div id="infoContainer"></div>
	
			<!-- 三屏：地圖座標 -->
			<div class="plan_container_staggerFromTo">
				<div class="plan-container-step-three">
					<h3>瞧瞧活動位置<span class="plan-explaination">顯示上方所選擇活動的營區內位置</span></h3>
					<div class="check-map-container">
						<div class="check-map-box">
							<div id="mapboard" class="mapboard">
								<img id="map" class ="map" width="100%" src="images/Australia_map.png" alt="map">
							</div>
						</div>
					</div>        
				</div>
			</div>
	
			<!-- 四屏：命名及封面照 -->
			<div class="plan_container_staggerFromTo">
				<div class="plan-container-step-four">
					<h3>打造專屬行程::命名及封面照<span class="plan-explaination">為行程命名並選擇行程封面照</span></h3>
					<div class="name-cover-container">
						<div class="name-your-plan-container">
							<div>我的行程名稱為：<input type="text" maxlength="15" id="plan_name" name="planName"></div>
							<p>尚有<span id="textFeedback"></span>個字可以填寫</p>
						</div>
						<div class="plan-cover-container">
							<p>選擇行程封面照片</p>
							<div class="choose-cover-box">
								<div class="big_cover_post" >
									<img src="images/plan/cover_handmade_big.jpg" alt="行程封面照片" id="dt_cover_check">
									<input type="hidden" name="picSelected" value="" id="picSelected">									
								</div>
								<div class="small-cover-pick-box">
									<div class="dt_small_cover_pic" id="cover_pic_family">
										<img src="images/plan/cover_family_small.jpg" alt="親子封面照片">
									</div>
									<div class="dt_small_cover_pic" id="cover_pic_handmade">
										<img src="images/plan/cover_handmade_small.jpg" alt="手作封面照片">
									</div>
									<div class="dt_small_cover_pic" id="cover_pic_survive">
										<img src="images/plan/cover_survive_small.jpg" alt="求生封面照片">
									</div>
								</div>
							</div>
							<div class="upload-cover-box">
								<span>上傳自己的照片</span>
								<input type="file" class="upload-cover-pic" name="upFile" id="upload_cover_pic" value="上傳檔案">
							</div>
						</div>
					</div> 
				</div>
				<!-- <button id="finalize-my-plan">確定活動規劃並再次檢視</button>
				<div class="clearfix"></div> -->
			</div>
		</div>
	
		</div>
		<div class="confirm-buy-btn-box">
			<!-- <input type="submit" name="submit" id="btn_confirm_my_plan" value="儲存此次行程"> -->
			<div id="add_to_plan_list">
				<div class="lightbox-add-to-plan-list">
					<img src="images/new/lightbox_up_frame.png" alt="燈箱裝飾圖">
					<h4>成功儲存</h4>
					<hr>
					<p>您的行程已成功加入至會員專區，可以至<a href="javascript:;">我的行程</a>查看喔</p>
					<div class="btn-box-index-order">    
					<a id="btn-go-to-index" href="index.php">回到首頁</a>
					<a id="btn-go-to-order" href="order.php">前往訂票</a>
					</div>
				</div>       
			</div>
			<input type="submit" name="submit" id="btn_confirm_and_buy_ticket" value="儲存並立即購票">
		</div>
		<div class="clearfix"></div>
		</div>
	</div>
	</form>

		<?php
			// if(isset($_GET['submit'])){
			// 	echo '<h1>hi</h1>';
			// }

		?>

    
    <!-- footer-try-image -->
    <!-- <div class="footer-try-image">
        <embed src="images/footer_try.svg" type="image/svg+xml" />
    </div> -->



<!-- footer -->
    <!-- <div id="jsi-flying-fish-container" class="container"></div> -->
<!-- footer -->
        <!-- footer會再修改就先不放囉 -->
    <!-- <script src="js/footer-flyfish.js"></script> -->
<!-- <script>
	var Lightbox_click = document.getElementById("add_to_plan_list");
	Lightbox_click.addEventListener("click",function(){
		document.getElementById("add_to_plan_list").style.display="block";
	});
</script> -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/hbgClick.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="node_modules/scrollmagic/scrollmagic/minified/ScrollMagic.min.js"></script>
<script src="node_modules/scrollmagic/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
<script src="node_modules/scrollmagic/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>
<script src="js/plan.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.ui.touch-punch.min.js"></script>

<script>
	var Lightbox_click=document.getElementById("btn_confirm_my_plan");
	Lightbox_click.addEventListener("click",function(){
		document.getElementById("add_to_plan_list").style.display="block";
	});
</script>




    <!-- footer -->
    <?php include 'footer.php';?>
<!-- footer -->
<script src="js/sessionPage.js"></script>
</body>

</html>