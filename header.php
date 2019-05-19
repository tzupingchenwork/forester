
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>森存者｜登入及註冊</title>
    <link rel="stylesheet" href="css/header.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

</head>

<body>
    <!-- header -->
    <nav>
        <div class="icon" id="icon">
            <div class="hamburger" id="hamburger"></div>
        </div>
        <div id="small-forester_logo">
            <a href="index.php">
                <h1><img src="images/logo.png" alt="手機版森存者商標"></h1>
            </a>
        </div>
        <div id="header-member">
        <?php 
            if(isset($_SESSION["memId"])==1) {
                echo "<a href='member.php'><img src='images/icon_user.png'
                alt='會員大頭像'></a>"; 
                }else{
                    echo "<a href='login.php'><img src='images/icon_user.png'
                    alt='會員大頭像'></a>";
                }
                ?>
        </div>
  



        <!-- 雲 -->
        <div class="cloud">
            <div class="doc doc--bg2">
                <canvas id="canvas" width="1444" height="119"></canvas>
            </div>
        </div>
        <!--  -->


        <div class="header-background-cloud">
            <span id="show_span">
                <ul>
                    <li class="noshow"></li>
                    <li><a href="plan.php"  class="header_item">活動規劃<img class="heafer_leaf" src="images/leaf2.png"
                                alt="標題裝飾"></a></li>
                    <li><a href="order.php" class="header_item">線上訂票<img class="heafer_leaf" src="images/leaf2.png"
                                alt="標題裝飾"></a></li>
                    <li class="noshow"> <a href="index.php">
                            <h1><img id="forester_logo" src="images/logo.png" alt="森存者商標"></h1>
                        </a></li>
                    <li><a href="blog.php" class="header_item">手札分享<img class="heafer_leaf" src="images/leaf2.png"
                                alt="標題裝飾"></a></li>
                    <li><a href="game.php" class="header_item">尋找森存者<img class="heafer_leaf" src="images/leaf2.png"
                                alt="標題裝飾"></a></li>
                    <li class="header-member noshow">
                        <?php 
                        if(isset($_SESSION["memId"])==1) {
                            echo "<a href='member.php'><img src='images/icon_user.png'
                            alt='會員大頭像'>",
                            $_SESSION['memId'],"<br></a><a  href='' id='logout'>登出
                            </a>"; 
                            }else{
                                echo "<a href='login.php'><img src='images/icon_user.png'
                                alt='會員大頭像'></a>";
                            }
                            ?>

                    </li>
                </ul>
            </span>
        </div>
    </nav>
    <!-- 手機NAV -->
    <nav id="navMob" class="navMob">
        <div class="navMobTop"></div>
        <div class="navMobCon" style="display: flex;">

            <a href="plan.php" class="navMobConDiv navMobConDiv1" id="navMobConDiv1">
                <p>活動規劃</p>
                <img src="images/index_backpack.png" alt="">
            </a>
            <a href="order.php" class="navMobConDiv navMobConDiv2" id="navMobConDiv2">
                <p>線上訂票</p>
                <img src="images/index_ticket.png" alt="">
            </a>

            <a href="blog.php" class="navMobConDiv navMobConDiv3" id="navMobConDiv3">
                <p>手札分享</p>
                <img src="images/index_notebook.png" alt="">
            </a>
            <a href="game.php" class="navMobConDiv navMobConDiv4" id="navMobConDiv4">
                <p>尋找森存者</p>
                <img src="images/index_map.png" alt="">
            </a>
            <a href="javascript:" class="navMobConDiv navMobConDiv5" id="navMobConDiv5">
                <p>QR-code</p>
                <img src="images/index_qrcode.png" alt="">
            </a>
            <a href="javascript:" class="navMobConDiv navMobConDiv6" id="navMobConDiv6">
                <img id='rwdlogout' src="images/logout.svg" alt="">
        </div>
    </nav>
    <script>
        $(document).ready(function () {
            $('.icon').click(function () {
                $('.icon').toggleClass('active');
            });
        });
    </script>
    <script src="js/header.js"></script>
    
    <!-- header -->

</body>

</html>