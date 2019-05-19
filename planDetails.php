<!-- 抓行程資料 -->
<?php 
$planNo = 2;
$errMsg="";
try {
	require_once("connectDB.php");
	$sql = "SELECT * from `plan` where planNo=$planNo";
    $plan = $pdo -> query($sql);
    $plan -> bindColumn('planNo',$planNo);
    $plan -> bindColumn('planName',$planName);
    $plan -> bindColumn('planPhoto',$planPhoto);
    $plan -> bindColumn('planPrice',$planPrice);
    $plan -> bindColumn('planList',$planList);
    // $plan ->execute();
    // $plan->fetch(PDO::FETCH_ASSOC);
  

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
    <link rel="stylesheet" href="css/svg_style.css">
    <link rel="stylesheet" href="css/planDetails.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="Shortcut Icon" type="image/x-icon" href="images/new/favicon.png" />
    <title>森存者｜查看行程內容</title>
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
        <!-- 確認行程 -->
        <?php
        while( $plan->fetch(PDO::FETCH_ASSOC)){
        ?>
        <div class="plan-screen-confirmation">
            <div class="header_title_background">
                <img src="images/title_back_planDetails.png" alt="看看行程">
                <h2>看看行程</h2>
            </div>            
            <div class="plan-container-confirmation">
                <h3>行程內容如下</h3>
                <div class="confirmation-screen-flex-group">

                    <div class="event-drop-area confirmation-event-drop-area">
                        <p>總時數為：
                            <span class="event_hour" id="event_hour">
                            <?php
                                // $eventArr = explode(",",$planList);
                                $sql = "SELECT sum(entDate) as totalHours from `event` where entNo in ($planList)";
                                // $sql = "SELECT * from `event` where entNo in ($planList)";
                                $entHours = $pdo->query($sql);
                                $entHoursRow = $entHours->fetch(PDO::FETCH_ASSOC);
                                $totalHours = $entHoursRow["totalHours"];
                                echo $totalHours;
                                // echo $planList;
                            ?>
                            </span>
                            <input type="hidden" name="myEventHour" id="myEventHour">
                            <span>小時</span>
                        </p>
                        <p>總金額為：
                            <span class="event_price" id="event_price"><?php echo $planPrice;?></span>
                            <input type="hidden" name="myEventPrice" id="myEventPrice">
                            <span>元</span>
                        </p>

                        <!-- <div class="confirmation-event-oder-details-container"> -->
                            <!-- <div class="confirmation-event-order">
                                <span>1</span>
                            </div> -->
                            <!-- 刀具製作 makeKnife -->
                            <!-- <div class="event-detail-box confirmation-event-detail-box">
                                <div class="event-cover cover-bgi-knife"></div>
                                <div class="event-txt-box">
                                    <h4>刀具製作</h4>
                                    <table class="allPlan-value-table">
                                        <tr>
                                            <td><img src="images/value_family.png" alt="親子值"></td>
                                            <td>2</td>
                                            <td><img src="images/value_handmade.png" alt="手作值"></td>
                                            <td>3</td>
                                            <td><img src="images/value_survive.png" alt="求生值"></td>
                                            <td>2</td>
                                        </tr>
                                    </table>                        
                                    <div class="value-pic-box">平均
                                        <img src="images/plan/fire.png" alt="評分火數">
                                        <img src="images/plan/fire.png" alt="評分火數">
                                        <img src="images/plan/fire.png" alt="評分火數">
                                        <img src="images/plan/fire.png" alt="評分火數">
                                    </div>    
                                    <div class="event-hour-price">
                                        <span class="event-hour">3小時</span>
                                        <span class="event-price">$1000</span>
                                    </div>                                
                                </div>
                            </div>
                        </div>-->

                        <div class="event-detail-group">
                        <?php
                            $eventArr = explode(",",$planList);
                            // for($i=0; $i<count($eventArr); $i++){
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
                            <div class="event-detail-box">
                                <div class="event-cover">
                                    <img src="images/plan/<?php echo $entPhoto;?>" alt="活動圖片">
                                </div>
                                <div class="event-txt-box">
                                    <h4><?php echo $entName;?></h4>
                                    <input type="hidden" value="<?php echo $entNo;?>" id="eventNo">
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
                            </div>
                            <?php
                            }
                            ?>
                        </div>

                        <!-- <div class="confirmation-event-oder-details-container"> -->
                            <!-- <div class="confirmation-event-order">
                                <span>2</span>
                            </div> -->
                            <!-- 結繩術 rope -->
                            <!-- <div class="event-detail-box confirmation-event-detail-box">
                                <div class="event-cover cover-bgi-rope"></div>
                                <div class="event-txt-box">
                                    <h4>結繩術</h4>
                                    <table class="allPlan-value-table">
                                        <tr>
                                            <td><img src="images/value_family.png" alt="親子值"></td>
                                            <td>3</td>
                                            <td><img src="images/value_handmade.png" alt="手作值"></td>
                                            <td>3</td>
                                            <td><img src="images/value_survive.png" alt="求生值"></td>
                                            <td>1</td>
                                        </tr>
                                    </table>                        
                                    <div class="value-pic-box">平均
                                        <img src="images/plan/fire.png" alt="評分火數">
                                        <img src="images/plan/fire.png" alt="評分火數">
                                        <img src="images/plan/fire.png" alt="評分火數">
                                    </div>    
                                    <div class="event-hour-price">
                                        <span class="event-hour">1小時</span>
                                        <span class="event-price">$500</span>
                                    </div>                                
                                </div>
                            </div>
                        </div> -->

                        <!-- <div class="confirmation-event-oder-details-container"> -->
                            <!-- <div class="confirmation-event-order">
                                <span>3</span>
                            </div> -->
                            <!-- 器具術 appliance -->
                            <!-- <div class="event-detail-box confirmation-event-detail-box">
                                <div class="event-cover cover-bgi-appliance"></div>
                                <div class="event-txt-box">
                                    <h4>器具術</h4>
                                    <table class="allPlan-value-table">
                                        <tr>
                                            <td><img src="images/value_family.png" alt="親子值"></td>
                                            <td>2</td>
                                            <td><img src="images/value_handmade.png" alt="手作值"></td>
                                            <td>3</td>
                                            <td><img src="images/value_survive.png" alt="求生值"></td>
                                            <td>1</td>
                                        </tr>
                                    </table>                        
                                    <div class="value-pic-box">平均
                                        <img src="images/plan/fire.png" alt="評分火數">
                                        <img src="images/plan/fire.png" alt="評分火數">
                                        <img src="images/plan/fire.png" alt="評分火數">
                                    </div>    
                                    <div class="event-hour-price">
                                        <span class="event-hour">2小時</span>
                                        <span class="event-price">$750</span>
                                    </div>                                
                                </div>
                            </div>
                        </div>-->

                        <!-- <div class="confirmation-event-oder-details-container"> -->
                            <!-- <div class="confirmation-event-order">
                                <span>4</span>
                            </div> -->

                            <!-- 吹箭術 blowingArr -->
                            <!-- <div class="event-detail-box confirmation-event-detail-box">
                                <div class="event-cover cover-bgi-blowingArr"></div>
                                <div class="event-txt-box">
                                    <h4>吹箭術</h4>
                                    <table class="allPlan-value-table">
                                        <tr>
                                            <td><img src="images/value_family.png" alt="親子值"></td>
                                            <td>1</td>
                                            <td><img src="images/value_handmade.png" alt="手作值"></td>
                                            <td>2</td>
                                            <td><img src="images/value_survive.png" alt="求生值"></td>
                                            <td>3</td>
                                        </tr>
                                    </table>                        
                                    <div class="value-pic-box">平均
                                        <img src="images/plan/fire.png" alt="評分火數">
                                        <img src="images/plan/fire.png" alt="評分火數">
                                        <img src="images/plan/fire.png" alt="評分火數">
                                        <img src="images/plan/fire.png" alt="評分火數">
                                    </div>    
                                    <div class="event-hour-price">
                                        <span class="event-hour">1小時</span>
                                        <span class="event-price">$500</span>
                                    </div>                                
                                </div>
                            </div> -->

                        <!-- </div> -->
                    </div>

                    <div class="confirmation-right-container">
                        <div class="name-your-plan-container confirmation-name-your-plan-container">
                            <div>行程名稱<input type="text" value="<?php echo $planName;?>"></div>
                            <input type="hidden" value="<?php echo $planNo;?>">
                        </div>
                        <div class="confirmation-cover-map-container">
                            <div class="name-cover-container confirmation-name-cover-container">
                                <div class="plan-cover-container confirmation-plan-cover-container">
                                    <p>行程封面照片</p>
                                    <div class="choose-cover-box">
                                        <div class="big-cover-post confirmation-big-cover-post">
                                            <img src="images/plan/<?php echo $planPhoto;?>" alt="">
                                        </div>
                                    </div>
                                </div>    
                            </div>
                            <div class="check-map-box confirmation-check-map-box">
                                <p>行程位置標示</p>
                                <img src="images/Australia_map.png" alt="">
                                <!-- <div>放置pin的圖與號碼
                                <img src="" alt="">
                                <span></span>
                                </div>
                                <div>放置pin的圖與號碼
                                    <img src="" alt="">
                                    <span></span>
                                </div>
                                <div>放置pin的圖與號碼
                                    <img src="" alt="">
                                    <span></span>
                                </div> -->
                            </div>        
                        </div>
                    </div>
                </div>
            </div>
            <button id="go-to-pre-page">回到上一頁</button>
        </div>

        <?php
        }
        ?>
    </div>
   
    <!-- footer -->
    <?php include 'footer.php';?>
<!-- footer -->

<script src="js/sessionPage.js"></script>
        <!-- footer會再修改就先不放囉 -->
    <!-- <script src="js/footer-flyfish.js"></script> -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/hbgClick.js"></script>
    <script src="js/TweenMax.min.js"></script>

</body>
</html>