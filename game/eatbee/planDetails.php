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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/hbgClick.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <title>森存者｜查看行程內容</title>
</head>

<body>
    <!-- header --> 
    <nav>
        <div class="icon" id="icon">
            <div class="hamburger" id="hamburger"></div>  
        </div>

        <div id="small-forester_logo">
                <a href="index.html"><h1><img src="images/logo.svg" alt="手機板森存者商標" ></h1></a>
        </div>
        <div id="header-member" >
            <a href="login.html" ><img src="images/icon_user.png" alt="會員大頭像"></a>
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
                    <li><a href="plan.html">活動規劃</a></li>
                    <li><a href="order.html">線上訂票</a></li>
                    <li><a href="index.html"><h1> <img id="forester_logo" src="images/logo.svg" alt="森存者商標"></h1></a></li>
                    <li><a href="blog.html">手札分享</a></li>
                    <li><a href="game.html">尋找森存者</a></li> 
                    <li class="header-member"><a href="login.html" ><img src="images/icon_user.png" alt="會員大頭像"></a></li>
                </ul>                 
            </span>
        </div>        
    </nav>
    <!-- header -->
    <script src="js/header.js"></script>


    <div class="wrap">
        <!-- 確認行程 -->
        <div class="plan-screen-confirmation">
            <h2>檢視行程</h2>
            <div class="plan-container-confirmation">
                <h3>行程內容如下</h3>
                <div class="confirmation-screen-flex-group">

                    <div class="event-drop-area confirmation-event-drop-area">
                        <p>總時數為：</span><span></p>
                        <p>總金額為：</span><span></p>

                        <div class="confirmation-event-oder-details-container">
                            <div class="confirmation-event-order">
                                <span>1</span>
                            </div>
                            <!-- 刀具製作 makeKnife -->
                            <div class="event-detail-box confirmation-event-detail-box">
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
                        </div>

                        <div class="confirmation-event-oder-details-container">
                            <div class="confirmation-event-order">
                                <span>2</span>
                            </div>
                            <!-- 結繩術 rope -->
                            <div class="event-detail-box confirmation-event-detail-box">
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
                        </div>

                        <div class="confirmation-event-oder-details-container">
                            <div class="confirmation-event-order">
                                <span>3</span>
                            </div>
                            <!-- 器具術 appliance -->
                            <div class="event-detail-box confirmation-event-detail-box">
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
                        </div>

                        <div class="confirmation-event-oder-details-container">
                            <div class="confirmation-event-order">
                                <span>4</span>
                            </div>

                            <!-- 吹箭術 blowingArr -->
                            <div class="event-detail-box confirmation-event-detail-box">
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
                            </div>

                        </div>
                    </div>

                    <div class="confirmation-right-container">
                        <div class="name-your-plan-container confirmation-name-your-plan-container">
                            <div>行程名稱<input type="text"></div>
                        </div>
                        <div class="confirmation-cover-map-container">
                            <div class="name-cover-container confirmation-name-cover-container">
                                <div class="plan-cover-container confirmation-plan-cover-container">
                                    <p>行程封面照片</p>
                                    <div class="choose-cover-box">
                                        <div class="big-cover-post confirmation-big-cover-post">
                                            <img src="images/plan/cover_family.jpg" alt="">
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

    </div>
<!-- footer -->
    <!-- <div id="jsi-flying-fish-container" class="container"></div> -->
<!-- footer -->
        <!-- footer會再修改就先不放囉 -->
    <!-- <script src="js/footer-flyfish.js"></script> -->


    <script src="js/sessionPage.js"></script>
</body>
</html>