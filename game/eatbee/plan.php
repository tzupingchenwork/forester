<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/svg_style.css">
    <link rel="stylesheet" href="css/plan.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="Shortcut Icon" type="image/x-icon" href="images/new/favicon.png" />
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/hbgClick.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <title>森存者｜活動規劃</title>
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
        <!-- 一屏：三項熱門活動介紹 -->
        <div class="plan-screen-first">
            <div class="header_title_background">
                <img src="images/title_back_hotPlan.png" alt="">
                <!-- <h2>熱門活動</h2> -->
            </div>
            
            <!-- <button id="btn-go-plan-now">立即規劃行程</button> -->
            <div id="hot-event-container">
                <input type="radio" name="slider" id="s1">
                <input type="radio" name="slider" id="s2" checked>
                <input type="radio" name="slider" id="s3">
                <label for="s1" id="slide1">
                    <div class="hot-event-box">
                        <div class="hot-event-img event-image-second"></div>
                        <h3>野炊</h3>
                        <p>野外活動中利用地形地物建野炊灶是野外生活很重要的一種技能，是野炊的基礎和必備條件。</p>
                        <div class="euqal-add-box">
                            <div class="equal-value">平均
                                <img src="images/plan/fire.png" alt="評分火數">
                                <img src="images/plan/fire.png" alt="評分火數">
                                <img src="images/plan/fire.png" alt="評分火數">
                                <img src="images/plan/fire.png" alt="評分火數">
                            </div>
                            <button>加入至預定行程</button>
                        </div>
                    </div>
                </label>

                <label for="s2" id="slide2">
                    <div class="hot-event-box">
                        <div class="hot-event-img event-image-first"></div>
                        <h3>生火術</h3>
                        <p>讓你在找不到點火器具的時候可以快速利用現場材料來生火！</p>
                        <div class="euqal-add-box">
                            <div class="equal-value">平均
                                <img src="images/plan/fire.png" alt="評分火數">
                                <img src="images/plan/fire.png" alt="評分火數">
                                <img src="images/plan/fire.png" alt="評分火數">
                                <img src="images/plan/fire.png" alt="評分火數">
                                <img src="images/plan/fire.png" alt="評分火數">
                            </div>
                            <button>加入至預定行程</button>
                        </div>
                    </div>                
                </label>

                <label for="s3" id="slide3">
                    <div class="hot-event-box">
                        <div class="hot-event-img event-image-third"></div>
                        <h3>結繩術</h3>
                        <p>一條細細的繩子，可以做出千變萬化的繩結，可以運用在日常生活，戶外活動，野外求生等。</p>
                        <div class="euqal-add-box">
                            <div class="equal-value">平均
                                <img src="images/plan/fire.png" alt="評分火數">
                                <img src="images/plan/fire.png" alt="評分火數">
                                <img src="images/plan/fire.png" alt="評分火數">
                            </div>
                            <button>加入至預定行程</button>
                        </div>
                    </div>
                </label>
            </div>
        </div>

        <!-- 二屏：活動選擇頁面 -->
        <!-- 篩選霸：上排 -->
        <div class="plan-screen-second">
            <h2>開始規劃</h2>
            <!-- <button>回上一頁</button>
            <button>繼續規劃</button>         -->
                <div class="plan-container-step-one">
                    <div class="choose-bar-container">
                        <h3><span class="plan-step">第一步</span>篩選霸拉拉看<span class="plan-explaination">依照自訂的單位值找出合適的活動</span></h3>
                        <div class="bar-img-container">
                            <div class="bar-img-box">
                                <p class="value-item">親子值</p>                                
                                <div class="bar-value">
                                    <span>0</span>
                                    <span>1</span>
                                    <span>2</span>
                                    <span>3</span>
                                </div>
                                <div class="drag-img-box">
                                    <img src="images/value_family.png" alt="親子值">
                                    <div class="drag-value-bar"></div>
                                </div>
                            </div>

                            <div class="bar-img-box">
                                <p class="value-item">手作值</p>                                
                                <div class="bar-value">
                                    <span>0</span>
                                    <span>1</span>
                                    <span>2</span>
                                    <span>3</span>
                                </div>
                                <div class="drag-img-box">
                                    <img src="images/value_handmade.png" alt="手作值">
                                    <div class="drag-value-bar"></div>
                                </div>
                            </div>

                            <div class="bar-img-box">
                                <p class="value-item">求生值</p>                                
                                <div class="bar-value">
                                    <span>0</span>
                                    <span>1</span>
                                    <span>2</span>
                                    <span>3</span>
                                </div>
                                <div class="drag-img-box">
                                    <img src="images/value_survive.png" alt="求生值">
                                    <div class="drag-value-bar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            <!-- 活動規劃區：下左 -->
            <div class="plan-container-step-two">
                <h3><span class="plan-step">第二步</span>123拖拉行程好簡單<span class="plan-explaination">將右邊的活動拖至左方規劃區</span></h3>
                <div class="second-screen-flex-group">
                    <div class="event-drop-area">
                        <p>總時數為：<span></span></p>
                        <p>總金額為：<span></span></p>
                        <div class="event-drop-circle">1</div>
                        <div class="event-drop-circle">2</div>
                        <div class="event-drop-circle">3</div>
                        <div class="event-drop-circle">4</div>
                    </div>
                <!-- 活動列表：下右 -->
                    <div class="all-event-container">
                        <div class="plan-option-list">
                            <span><a href="allPlan.html">查看全部活動</a></span>
                            <select name="listPlan" id="list-plan">
                                <option value="">最新活動</option>
                                <option value="">熱門活動</option>
                                <!-- <option value=""><a href="allPlan.html">全部活動</a></option> -->
                            </select>
                        </div>

                        <div class="event-detail-group">
                            <!-- 刀具製作 makeKnife -->
                            <div class="event-detail-box">
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
                
                            <!-- 結繩術 rope -->
                            <div class="event-detail-box">
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
                
                            <!-- 器具術 appliance -->
                            <div class="event-detail-box">
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
    
                            <!-- 吹箭術 blowingArr -->
                            <div class="event-detail-box">
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
                
                            <!-- 弓箭術 bowArr -->
                            <div class="event-detail-box">
                                <div class="event-cover cover-bgi-bowArr"></div>
                                <div class="event-txt-box">
                                    <h4>弓箭術</h4>
                                    <table class="allPlan-value-table">
                                        <tr>
                                            <td><img src="images/value_family.png" alt="親子值"></td>
                                            <td>1</td>
                                            <td><img src="images/value_handmade.png" alt="手作值"></td>
                                            <td>3</td>
                                            <td><img src="images/value_survive.png" alt="求生值"></td>
                                            <td>3</td>
                                        </tr>
                                    </table>                        
                                    <div class="value-pic-box">平均
                                        <img src="images/plan/fire.png" alt="評分火數">
                                        <img src="images/plan/fire.png" alt="評分火數">
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
                    
                            <!-- 野炊術 wildCook -->
                            <div class="event-detail-box">
                                <div class="event-cover cover-bgi-wildCook"></div>
                                <div class="event-txt-box">
                                    <h4>野炊術</h4>
                                    <table class="allPlan-value-table">
                                        <tr>
                                            <td><img src="images/value_family.png" alt="親子值"></td>
                                            <td>3</td>
                                            <td><img src="images/value_handmade.png" alt="手作值"></td>
                                            <td>2</td>
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

                            <!-- 生火術 makeFire -->
                            <div class="event-detail-box">
                                <div class="event-cover cover-bgi-makeFire"></div>
                                <div class="event-txt-box">
                                    <h4>生火術</h4>
                                    <table class="allPlan-value-table">
                                        <tr>
                                            <td><img src="images/value_family.png" alt="親子值"></td>
                                            <td>0</td>
                                            <td><img src="images/value_handmade.png" alt="手作值"></td>
                                            <td>3</td>
                                            <td><img src="images/value_survive.png" alt="求生值"></td>
                                            <td>3</td>
                                        </tr>
                                    </table>                        
                                    <div class="value-pic-box">平均
                                        <img src="images/plan/fire.png" alt="評分火數">
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

                            <!-- 可食動植物 eatable -->
                            <div class="event-detail-box">
                                <div class="event-cover cover-bgi-eatable"></div>
                                <div class="event-txt-box">
                                    <h4>可食動植物</h4>
                                    <table class="allPlan-value-table">
                                        <tr>
                                            <td><img src="images/value_family.png" alt="親子值"></td>
                                            <td>2</td>
                                            <td><img src="images/value_handmade.png" alt="手作值"></td>
                                            <td>0</td>
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
                                        <span class="event-hour">2小時</span>
                                        <span class="event-price">$7500</span>
                                    </div>                                
                                </div>
                            </div>

                            <!-- 植物編織 weave -->
                            <div class="event-detail-box">
                                <div class="event-cover cover-bgi-weave"></div>
                                <div class="event-txt-box">
                                    <h4>植物編織</h4>
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
                                        <img src="images/plan/fire.png" alt="評分火數">
                                        <img src="images/plan/fire.png" alt="評分火數">
                                    </div>    
                                    <div class="event-hour-price">
                                        <span class="event-hour">3小時</span>
                                        <span class="event-price">$1000</span>
                                    </div>                                
                                </div>
                            </div>

                            <!-- 方位判定 direction -->
                            <div class="event-detail-box">
                                <div class="event-cover cover-bgi-direction"></div>
                                <div class="event-txt-box">
                                    <h4>方位判定</h4>
                                    <table class="allPlan-value-table">
                                        <tr>
                                            <td><img src="images/value_family.png" alt="親子值"></td>
                                            <td>2</td>
                                            <td><img src="images/value_handmade.png" alt="手作值"></td>
                                            <td>1</td>
                                            <td><img src="images/value_survive.png" alt="求生值"></td>
                                            <td>3</td>
                                        </tr>
                                    </table>                        
                                    <div class="value-pic-box">平均
                                        <img src="images/plan/fire.png" alt="評分火數">
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
        
                            <!-- 基本求生 basicSur -->
                            <div class="event-detail-box">
                                <div class="event-cover cover-bgi-basicSur"></div>
                                <div class="event-txt-box">
                                    <h4>基本求生</h4>
                                    <table class="allPlan-value-table">
                                        <tr>
                                            <td><img src="images/value_family.png" alt="親子值"></td>
                                            <td>2</td>
                                            <td><img src="images/value_handmade.png" alt="手作值"></td>
                                            <td>1</td>
                                            <td><img src="images/value_survive.png" alt="求生值"></td>
                                            <td>3</td>
                                        </tr>
                                    </table>                        
                                    <div class="value-pic-box">平均
                                        <img src="images/plan/fire.png" alt="評分火數">
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

                            <!-- 陷阱製作 makeTrap -->
                            <div class="event-detail-box">
                                <div class="event-cover cover-bgi-makeTrap"></div>
                                <div class="event-txt-box">
                                    <h4>陷阱製作</h4>
                                    <table class="allPlan-value-table">
                                        <tr>
                                            <td><img src="images/value_family.png" alt="親子值"></td>
                                            <td>1</td>
                                            <td><img src="images/value_handmade.png" alt="手作值"></td>
                                            <td>2</td>
                                            <td><img src="images/value_survive.png" alt="求生值"></td>
                                            <td>2</td>
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
    
                            <!-- 淨水術 cleanWater -->
                            <div class="event-detail-box">
                                <div class="event-cover cover-bgi-cleanWater"></div>
                                <div class="event-txt-box">
                                    <h4>淨水術</h4>
                                    <table class="allPlan-value-table">
                                        <tr>
                                            <td><img src="images/value_family.png" alt="親子值"></td>
                                            <td>2</td>
                                            <td><img src="images/value_handmade.png" alt="手作值"></td>
                                            <td>2</td>
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
                                        <span class="event-price">$750</span>
                                    </div>                                
                                </div>
                            </div>
    
                            <!-- 隱蔽偽裝術 hide -->
                            <div class="event-detail-box">
                                <div class="event-cover cover-bgi-hide"></div>
                                <div class="event-txt-box">
                                    <h4>隱蔽偽裝術</h4>
                                    <table class="allPlan-value-table">
                                        <tr>
                                            <td><img src="images/value_family.png" alt="親子值"></td>
                                            <td>2</td>
                                            <td><img src="images/value_handmade.png" alt="手作值"></td>
                                            <td>1</td>
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
                                        <span class="event-hour">2小時</span>
                                        <span class="event-price">$750</span>
                                    </div>                                
                                </div>
                            </div>
        
                            <!-- 搭建庇身所 shelter -->
                            <div class="event-detail-box">
                                <div class="event-cover cover-bgi-shelter"></div>
                                <div class="event-txt-box">
                                    <h4>搭建庇身所</h4>
                                    <table class="allPlan-value-table">
                                        <tr>
                                            <td><img src="images/value_family.png" alt="親子值"></td>
                                            <td>0</td>
                                            <td><img src="images/value_handmade.png" alt="手作值"></td>
                                            <td>3</td>
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
                                        <span class="event-hour">3小時</span>
                                        <span class="event-price">$1000</span>
                                    </div>                                
                                </div>
                            </div>

                            <!-- 急救術 firstAid -->
                            <div class="event-detail-box">
                                <div class="event-cover cover-bgi-firstAid"></div>
                                <div class="event-txt-box">
                                    <h4>急救術</h4>
                                    <table class="allPlan-value-table">
                                        <tr>
                                            <td><img src="images/value_family.png" alt="親子值"></td>
                                            <td>3</td>
                                            <td><img src="images/value_handmade.png" alt="手作值"></td>
                                            <td>0</td>
                                            <td><img src="images/value_survive.png" alt="求生值"></td>
                                            <td>2</td>
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
    
                            <!-- 自我防衛術 selfDef -->
                            <div class="event-detail-box">
                                <div class="event-cover cover-bgi-selfDef"></div>
                                <div class="event-txt-box">
                                    <h4>自我防衛術</h4>
                                    <table class="allPlan-value-table">
                                        <tr>
                                            <td><img src="images/value_family.png" alt="親子值"></td>
                                            <td>1</td>
                                            <td><img src="images/value_handmade.png" alt="手作值"></td>
                                            <td>0</td>
                                            <td><img src="images/value_survive.png" alt="求生值"></td>
                                            <td>3</td>
                                        </tr>
                                    </table>                        
                                    <div class="value-pic-box">平均
                                        <img src="images/plan/fire.png" alt="評分火數">
                                        <img src="images/plan/fire.png" alt="評分火數">
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
    
                            <!-- 捕魚術 catchFish -->
                            <div class="event-detail-box">
                                <div class="event-cover cover-bgi-catchFish"></div>
                                <div class="event-txt-box">
                                    <h4>捕魚術</h4>
                                    <table class="allPlan-value-table">
                                        <tr>
                                            <td><img src="images/value_family.png" alt="親子值"></td>
                                            <td>2</td>
                                            <td><img src="images/value_handmade.png" alt="手作值"></td>
                                            <td>2</td>
                                            <td><img src="images/value_survive.png" alt="求生值"></td>
                                            <td>1</td>
                                        </tr>
                                    </table>                        
                                    <div class="value-pic-box">平均
                                        <img src="images/plan/fire.png" alt="評分火數">
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
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

        <!-- 三屏：地圖座標 -->
        <!-- <button>回上一頁</button>
        <button>確認並儲存行程</button> -->
        <div class="plan-container-step-three">
            <h3><span class="plan-step">第三步</span>瞧瞧活動位置<span class="plan-explaination">顯示上方所選擇活動的營區內位置</span></h3>
            <div class="check-map-container">
                <div class="check-map-box">
                    <img src="images/Australia_map.png" alt="地圖">
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

        <!-- 四屏：命名及封面照 -->
        <div class="plan-container-step-four">
            <h3><span class="plan-step">第四步</span>打造專屬行程::命名及封面照<span class="plan-explaination">為行程命名並選擇行程封面照</span></h3>
            <div class="name-cover-container">
                <div class="name-your-plan-container">
                    <div>我的行程名稱為：<input type="text"></div>
                </div>
                <div class="plan-cover-container">
                    <p>選擇行程封面照片</p>
                    <div class="choose-cover-box">
                        <div class="big-cover-post">
                            <img src="images/plan/cover_family.jpg" alt="行程封面照片">
                        </div>
                        <div class="small-cover-pick-box">
                            <div class="small-cover-pic cover-pic-family"></div>
                            <div class="small-cover-pic cover-pic-handmade"></div>
                            <div class="small-cover-pic cover-pic-survive"></div>
                        </div>
                    </div>
                    <div class="upload-cover-box">
                        <span>上傳自己的照片</span>
                        <input type="file" class="upload-cover-pic" name="" id="upload-cover-pic" value="上傳檔案">
                    </div>
                </div>
            </div> 
        </div>
        <button id="finalize-my-plan">確定活動規劃並再次檢視</button>
        </div>

        <!-- 確認行程 -->
        <div class="plan-screen-confirmation">
            <h2>確認行程</h2>
            <div class="plan-container-confirmation">
                <h3><span class="plan-step">第五步</span>確認行程內容<span class="plan-explaination">再次確認活動規劃各項內容</span></h3>
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
                                        <img src="images/plan/fire.png" alt="評分火術">
                                        <img src="images/plan/fire.png" alt="評分火術">
                                        <img src="images/plan/fire.png" alt="評分火術">
                                        <img src="images/plan/fire.png" alt="評分火術">
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
                                        <img src="images/plan/fire.png" alt="評分火術">
                                        <img src="images/plan/fire.png" alt="評分火術">
                                        <img src="images/plan/fire.png" alt="評分火術">
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
                                        <img src="images/plan/fire.png" alt="評分火術">
                                        <img src="images/plan/fire.png" alt="評分火術">
                                        <img src="images/plan/fire.png" alt="評分火術">
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
                                        <img src="images/plan/fire.png" alt="評分火術">
                                        <img src="images/plan/fire.png" alt="評分火術">
                                        <img src="images/plan/fire.png" alt="評分火術">
                                        <img src="images/plan/fire.png" alt="評分火術">
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
                                            <img src="images/plan/cover_family.jpg" alt="行程封面">
                                        </div>
                                    </div>
                                </div>    
                            </div>
                            <div class="check-map-box confirmation-check-map-box">
                                <p>行程位置標示</p>
                                <img src="images/Australia_map.png" alt="地圖">
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
            
        <div class="confirm-buy-btn-box">
            <a href="javascript:;" id="confirm-my-plan">儲存行程</a>
            <a href="order.html" id="confirm-and-buy-ticket">儲存並立即購票</a>
        </div>
        <div class="clearfix"></div>
    </div>
    </div>
    
    <!-- footer-try-image -->
    <!-- <div class="footer-try-image">
        <embed src="images/footer_try.svg" type="image/svg+xml" />
    </div> -->



<!-- footer -->
    <!-- <div id="jsi-flying-fish-container" class="container"></div> -->
<!-- footer -->
        <!-- footer會再修改就先不放囉 -->
    <!-- <script src="js/footer-flyfish.js"></script> -->


    <script src="js/sessionPage.js"></script>
</body>

</html>