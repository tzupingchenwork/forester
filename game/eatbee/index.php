<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="/js/sessionPage.js"></script>
    
    <!-- <link rel="stylesheet" href="header.css"> -->
    <script>
        $(document).ready(function(){
            $('.icon').click(function(){
                $('.icon').toggleClass('active');
            });
        });
    </script>
    <link rel="stylesheet" href="./sass/layout/header.css">
    <!-- <link rel="stylesheet" href="./sass/layout/footer-flyfish.css"> -->
    <title>Document</title>
</head>
<body>
<!-- header --> 
    <nav>
        <div class="icon" id="icon">
            <div class="hamburger" id="hamburger"></div>  
        </div>

        <div id="small-forester_logo">
                <a href="index.html"><h1><img src="images/logo_green.svg" alt="手機板森存者商標" ></h1></a>
        </div>
        <div id="header-member" >
            <a href="" ><img src="images/icon_user.png" alt="會員大頭像"></a>
        </div>
        
        <div class="cloud">
            <div class="doc doc--bg2">
                <canvas id="canvas" width="1444" height="119"></canvas>
            </div>
        </div>
        <!--  -->

        <div class="header-background-cloud">
            <span id="show_span" >
                <ul><li></li>
                    <li><a href="page/plan.html">活動規劃</a></li>
                    <li><a href="page/order.html">線上訂票</a></li>
                    <li><a href="index.html"><h1> <img id="forester_logo" src="images/logo_green.svg" alt="森存者商標"></h1></a></li>
                    <li><a href="page/blog.html">手札分享</a></li>
                    <li><a href="page/game.html">尋找森存者</a></li> 
                    <li class="header-member"><a href="page/login.html" ><img src="images/icon_user.png" alt="會員大頭像"></a></li>
                </ul>                 
            </span>
        </div>        
    </nav>
<!-- header -->
  
    <div class="wrap"></div> 
    



    <script src="./sass/layout/header_js.js">
    </script>
    

    
    <script src="js/sessionPage.js"></script>
</body>
</html>