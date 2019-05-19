<?php 
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


<?php 
$errMsg="";
try {
	require_once("connectDB.php");
	$sql = "SELECT * from `event` order by entScoTime limit 3";
    $hotEvent = $pdo -> query($sql);
	$howEventRows = $hotEvent -> fetchAll();
	
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
    <link rel="stylesheet" href="css/svg_style.css">
    <link rel="stylesheet" href="css/planRWD.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="Shortcut Icon" type="image/x-icon" href="images/new/favicon.png" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>森存者｜活動規劃RWD</title>
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
    
<!-- ===================================RWD============================================== -->
<div class="RWD_plan_div">
    <div class="wrap">
        <!-- 第一步：篩選霸 -->
        <div class="header_title_background">
                <img src="images/new/title_back_process.png" alt="活動規劃">
                <h2>熱門活動</h2>
            </div>
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
                                    <input type="text" id="amount-family" style="border:0; color:#f3994f; font-weight:bold; background-color: antiquewhite">
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
                                    <input type="text" id="amount-handmade" style="border:0; color:#f3994f; font-weight:bold; background-color: antiquewhite">
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
                                    <input type="text" id="amount-survive" style="border:0; color:#f3994f; font-weight:bold; background-color: antiquewhite">
                                </p>
                                <div id="survive-range"></div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>

        <!-- <div class="confirm-buy-btn-box">
            <button id="next-btn-pick-my-event">挑選活動去</button>
        </div>   -->

        <!-- 第二步：活動拖拉 -->
        <div class="plan-container-step-two">
            <h3>選擇行程好簡單</h3>
            
            <!-- 活動列表 -->
            <div class="all-event-container">
                <div id="fixedAddCart">
                    <img src="images/icon_cart.png" alt="" id="addCart">       
                    <p class="addCartTxt">收藏</p>
                    <p id="showNumber"></p>
                    <div class="showEventDiv">
                        <table class="showEventTable">
                            <tr>
                                <th>名稱</th>
                                <th>價格</th>
                            </tr>
                            <!-- <tr>
                                <td>捕魚樹</td>
                                <td>500</td>
                            </tr>
                            <tr>
                                <td>捕魚樹</td>
                                <td>500</td>
                            </tr>
                            <tr>
                                <td>捕魚樹</td>
                                <td>500</td>
                            </tr>
                            <tr>
                                <td>捕魚樹</td>
                                <td>500</td>
                            </tr>
                            <tr>
                                <td>捕魚樹</td>
                                <td>500</td>
                            </tr> -->
                        </table>
                    </div>
                </div>
                
                <a href="allPlan.php" target="_blank" class="checkAllPlan">查看全部活動</a>
                <div class="buttonGroup">
                    <button id="eventNewest">最新活動</button>
                    <button id="eventHotest">熱門活動</button>
                </div>
            <form action="planUploadOrderRWD.php" method="POST" enctype="multipart/form-data" id="planForm">
                <div class="event-detail-group">
                <!-- 刀具製作 makeKnife -->
                <?php
                while($event->fetch(PDO::FETCH_ASSOC)){
                ?>
                <div class="event-detail-box">
                    <div class="event-cover cover-bgi-knife">
                        <img src="images/plan/<?php echo $entPhoto;?>" alt="活動圖片">
                    </div>
                    <div class="event-txt-box">
                        <h4 id="eventName"><?php echo $entName;?><i class="far fa-eye"></i></h4>
                        <input type="hidden" value="<?php echo $entNo;?>" class="entNo" name="entNo[]">
                        <input type="hidden" value="<?php echo $entPrice;?>" name="entPrice" id="entPrice">
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
                            <i class="fas fa-plus-circle addToCart"></i>
                        </div>                                
                    </div>
                </div>
                <?php
                }
                ?>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div id="infoContainer"></div>

        <!-- 第三步：命名及封面照 -->
        <div class="plan-container-step-three">
            <h3>行程命名及封面照</h3>
            <div class="name-cover-container">
				<div class="name-your-plan-container">
                    <div>我的行程名稱為：<input type="text" maxlength="15" id="plan_name" name="planName"></div>
                    <p>尚有<span id="textFeedback"></span>個字可以填寫</p>
                </div>                
				<div class="plan-cover-container">
					<p>選擇行程封面照片</p>
					<div class="RWD_choose-cover-box">
						<div class="big_cover_post" >
                            <img src="images/plan/cover_handmade_big.jpg" alt="行程封面照片" id="cover_check">
                            <input type="hidden" name="picSelected" value="" id="picSelected">									
						</div>
						<div class="small-cover-pick-box">
							<div class="small_cover_pic" id="cover_pic_family">
								<img src="images/plan/cover_family_small.jpg" alt="親子封面照片">
							</div>
							<div class="small_cover_pic" id="cover_pic_handmade">
								<img src="images/plan/cover_handmade_small.jpg" alt="手作封面照片">
							</div>
							<div class="small_cover_pic" id="cover_pic_survive">
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
            <div class="clearfix"></div>
        </div>
        <div class="confirm-buy-btn-box">
            <!-- <input type="submit" id="btn_confirm_my_plan" value="儲存此次行程"> -->
            <div id="add_to_plan_list">
                <div class="lightbox-add-to-plan-list">
                    <img src="images/new/lightbox_up_frame.png" alt="">
                    <h4>成功儲存</h4>
                    <hr>
                    <p>您的行程已成功加入至會員專區，<br>可以至<a href="javascript:;">我的行程</a>查看喔</p>
                    <div class="btn-box-index-order">    
                        <a id="btn-go-to-index" href="index.php">回到首頁</a>
                        <a id="btn-go-to-order" href="order.php">前往訂票</a>
                    </div>
                </div>       
            </div>
            <input type="submit" name="submit" id="btn_confirm_and_buy_ticket" value="儲存並立即購票">
        </div>
    </div>
</div>


<input type="hidden" name="totalPrice" id="totalPrice">

</form>
</div>

<!-- ===================================RWD============================================== -->

    
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
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.ui.touch-punch.min.js"></script>
<script src="js/planRWD.js"></script>

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