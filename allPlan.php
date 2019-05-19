<?php 
$errMsg="";
try {
	require_once("connectDB.php");
	$sql = "SELECT * from `event` where entStatus =1 order by entNo";
    $event = $pdo -> query($sql);
    $event -> bindColumn('entName',$entName);
    $event -> bindColumn('entNo',$entNo);
    $event -> bindColumn('entPhoto',$entPhoto);
    $event -> bindColumn('entSurVal',$entSurVal);
    $event -> bindColumn('entHanVal',$entHanVal);
    $event -> bindColumn('entPcVal',$entPcVal);

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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/hbgClick.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <link rel="Shortcut Icon" type="image/x-icon" href="images/new/favicon.png" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/plan.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/svg_style.css">
    <link rel="stylesheet" href="css/allPlan.css">
    <title>森存者｜全部活動</title>
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
        
    <div class="background_head">
        <img id="bg_airballoon" src="images/airballoon.png" alt="熱氣球">
        <img id="bg_cloud2" src="images/Cloud1.png" alt="白雲">
        <img id="bg_airballoon3" src="images/airballoon.png" alt="熱氣球">        
    </div>   

    <div class="wrap">
        <div class="allPlan-header">
            <div class="all-plan-title">
                <img src="images/new/title_back_allPlan.png" alt="全部活動">
                <h2>全部活動</h2>            
            </div>
            <div class="explain-icons">
                <div class="icons-all icons-family">
                    <img src="images/value_family.png" alt="親子值"><span>親子值</span>
                </div>
                <div class="icons-all icons-handmade">
                    <img src="images/value_handmade.png" alt="手作值"><span>手作值</span>
                </div>
                <div class="icons-all icons-survive">
                    <img src="images/value_survive.png" alt="求生值"><span>求生值</span>
                </div>
            </div>
        </div>


        <div class="allPlan-content">
            <div class="allPlan-group">
                <?php
                while($event->fetch(PDO::FETCH_ASSOC)){
                ?>
                <div class="allPlan-box">
                    <h2><?php echo $entName;?></h2>
                    <input type="hidden" value="<?php echo $entNo;?>" class="eventNo" name="eventNo">
                    <div class="allPlan-pic">
                        <img src="images/plan/<?php echo $entPhoto;?>" alt="刀具製作">
                    </div>
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
                </div>
                <?php
                }               
                ?>
            </div>
        </div>
        <div id="infoContainer"></div>
    
        <a href="plan.php" id="goToPlan">立即規劃行程</a>
    </div>

    <script>
    TweenMax.to('#bg_airballoon',30,{
        right: '90%',
        top: '30px',
        repeat: -1,
        yoyo: true,
    });

    TweenMax.to('#bg_cloud2',50,{
        left: '1100px',
        top: '1500px',
        repeat: -1,
    });

    TweenMax.to('#bg_airballoon3',20,{
        right: '70%',
        top: '2600px',
        repeat: -1,
        yoyo: true,
    });

    </script>

    <script>
    
    //AJAX //點選活動顯示活動介紹燈箱
    $('.allPlan-content .allPlan-box').click(function(e){
        console.log($(this).find('input').val());

        var xhr = new XMLHttpRequest();
        xhr.addEventListener('load', (e) => {
            if (xhr.status == 200){

                $('#infoContainer').show();
                document.getElementById('infoContainer').innerHTML = xhr.responseText;
                // console.log(xhr.responseText);

                $('#Lightbox2_close').click(function(){
                    $('#infoContainer').hide();
                });

            }else{
                alert(xhr.status);
            }
        });

        xhr.open("GET", "plan_eventPop.php?entNo="+ $(this).find('input').val(), true);
        xhr.send(null);
    });
    
    </script>
    
    <!-- footer -->
    <?php include 'footer.php';?>
<!-- footer -->

<script src="js/sessionPage.js"></script>

</body>
</html>