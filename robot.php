<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0,viewport-fit=cover">

    <link rel="stylesheet" href="css/robot.css">
    <script src="js/jquery-3.3.1.min.js" >
    </script>




</head>

<body style="">
    <!-- 聊天機器人============== -->
    <section class="introRobotBox" style="height: unset;">
        <div class="introRobotCome" style="display: none;">
            <p>
                你好!有任何問題都可以問我!!!
            </p>
        </div>
        <div class="introRobot1">
            <div class="drimg">
                <img src="images/doctor_bear.svg" alt="">
            </div>
            <h3>生存熊博士(在線)</h3>
            <div class="robotToggle" >
                <span>+</span>
            </div>
        </div>
        <div class="introRobot2" style="display: block;">

        </div>
        <div class="introRobot3" style="display: block;">
            <ul>
                <li><p class="autotext" >開放時間</p></li>
                <li><p class="autotext" >價格</p></li>
                <li><p class="autotext" >有甚麼活動</p></li>

            </ul>
        </div>
        <div class="introRobot4" style="display: flex;">
            <textarea name="say" id="say" cols="30" rows="5" placeholder="請輸入你想問的問題"></textarea>
            <button id="submit" type="button">送出</button>
        </div>
    </section>

    <script src="js/robot.js"></script>
    <!-- 聊天機器人結束============ -->



</body>

</html>