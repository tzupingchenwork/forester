

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
            <a href=""><img src="images/icon_user.png" alt=""></a>
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
                    <li><a href="plan.html" class="header_item">活動規劃<img class="heafer_leaf" src="images/leaf2.png" alt="標題裝飾"></a></li>
                    <li><a href="order.html" class="header_item">線上訂票<img class="heafer_leaf" src="images/leaf2.png" alt="標題裝飾"></a></li>
                    <li class="noshow"> <a href="index.html">
                        <h1><img id="forester_logo" src="images/logo.png" alt="森存者商標"></h1>
                        </a></li>
                    <li><a href="blog.html" class="header_item">手札分享<img class="heafer_leaf" src="images/leaf2.png" alt="標題裝飾"></a></li>
                    <li><a href="game.html" class="header_item">尋找森存者<img class="heafer_leaf" src="images/leaf2.png" alt="標題裝飾"></a></li>
                    <li id="qr_code"><a href="game.html">QR-code</a></li>
                    <li class="header-member noshow"><a href="login.html"><img src="images/icon_user.png" alt=""></a><span>會員</span><span>您好</span><br><span>成就點數</span><span>200</span><span>點</span></li>
                    <!-- <li class="header-cart noshow"><img src="images/icon_cart.png" alt=""><span>收藏</span></li> -->
                </ul>
            </span>
        </div>
    </nav>
    <!-- 手機NAV -->
    <nav id="navMob" class="navMob">
        <div class="navMobTop"></div>
        <div class="navMobCon" style="display: flex;">

            <a href="javascript:" class="navMobConDiv navMobConDiv1" id="navMobConDiv1">
				<p>活動規劃</p>
				<img src="images/index_backpack.png" alt="">
            </a>
            <a href="javascript:" class="navMobConDiv navMobConDiv2" id="navMobConDiv2">
				<p>線上訂票</p>
				<img src="images/index_ticket.png" alt="">				
            </a>

            <a href="javascript:" class="navMobConDiv navMobConDiv3" id="navMobConDiv3">
				<p>手札分享</p>
				<img src="images/index_notebook.png" alt="">				
            </a>
            <a href="javascript:" class="navMobConDiv navMobConDiv4" id="navMobConDiv4">
				<p>尋找森存者</p>
				<img src="images/index_map.png" alt="">				
            </a>
            <a href="javascript:" class="navMobConDiv navMobConDiv5" id="navMobConDiv5">
				<p>QR-code</p>
				<img src="images/index_qrcode.png" alt="">				
            </a>
        </div>
    </nav>
    <!-- header -->
    <script src="js/header.js"></script>
</body>

</html>