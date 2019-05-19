<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/svg_style.css">
    <link rel="stylesheet" href="css/blogContent.css">
    <link rel="stylesheet" href="css/header.css">  
    <link rel="Shortcut Icon" type="image/x-icon" href="images/new/favicon.png" />
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/hbgClick.js"></script>
    <title>森存者｜手札內頁</title>
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
    <!--blogContent  -->  
    <div class="blogContent">
        <div class="blogContent-heading">
            <h2>原來山泉水這麼甜!!</h2>
        </div>
        <div class="blogContent-info">
            <div class="blogContent-author">
                <img src="images/blog/big_head1.png" alt="大頭貼">
                <span>董懂</span>
                <span>2019-04-09</span>
            </div>

            <div class="blogContent-share">
                <input type="text" name="" id="copyurl" value="www.google.com" >   
                <img src="images/blog/Share.png" alt="分享" id="copybtn">
            </div>

        </div>
        <script>
                //燈箱
                var copybtn=document.getElementById("copybtn");
           
               copybtn.addEventListener("click",function(){
           
               var copyurl = document.getElementById("copyurl");    
               copyurl.select();    
               document.execCommand("copy");
               document.getElementById("copyok").style.display="inline-block"; 
           
               setTimeout(function(){ document.getElementById("copyok").style.display="none";  }, 3000);
               });
        </script>    

        <!-- 內文 -->
        <div class="blogContent-photo">
            <img src="images/event/Best-Survival-Schools.jpg" alt="手札圖片">
        </div>

        <div class="blogContent-wrap">
        <div class="blogContent-content">
            <p>這個活動真是太神奇了，我們把髒兮兮的泥巴水變成可以喝的清水，一定要推一下的拉!!!一定要推一下的拉!!!一定要推一下的拉!!!一定要推一下的拉!!!一定要推一下的拉!!!一定要推一下的拉!!!一定要推一下的拉!!!一定要推一下的拉!!!一定要推一下的拉!!!一定要推一下的拉!!!一定要推一下的拉!!!一定要推一下的拉!!!一定要推一下的拉!!!一定要推一下的拉!!!一定要推一下的拉!!!一定要推一下的拉!!!一定要推一下的拉!!!一定要推一下的拉!!!</p>
        </div>
        <div class="blogContent-graphic">
 <!-- event -->
            <div class="blogContent-event-wrap">
            <div class="blogContent-event">
                 <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片">
                 <div class="blogContent-event-info">
                    <h3 class="event-name">基本求生</h3>
                    <span class="event-hr">2小時</span>
                       <div class="event-value">
                        <table class="event-value-table">
                            <tr>
                                <td><img src="images/blog/value_family.png" alt="親子值"></td>
                                <td>2</td>
                                <td><img src="images/blog/value_handmade.png" alt="手作值"></td>
                                <td>3</td>
                                <td><img src="images/blog/value_survive.png" alt="生存值"></td>
                                <td>2</td>
                            </tr>
                        </table> 
                      </div>
                      <div class="avgScore">
                          <span>平均</span>
                          <img src="images/blog/fire.png" alt="評分火數">
                          <img src="images/blog/fire.png" alt="評分火數">
                          <img src="images/blog/fire.png" alt="評分火數">
                          <img src="images/blog/fire.png" alt="評分火數">
                          <img src="images/blog/fire.png" alt="評分火數">
                      </div>
                      <div class="event-price">$1000</div>
                 </div>    
            </div>

            <div class="blogContent-event">
                 <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片">
                 <div class="blogContent-event-info">
                    <h3 class="event-name">基本求生</h3>
                    <span class="event-hr">2小時</span>
                       <div class="event-value">
                        <table class="event-value-table">
                            <tr>
                                <td><img src="images/blog/value_family.png" alt="親子值"></td>
                                <td>2</td>
                                <td><img src="images/blog/value_handmade.png" alt="手作值"></td>
                                <td>3</td>
                                <td><img src="images/blog/value_survive.png" alt="生存值"></td>
                                <td>2</td>
                            </tr>
                        </table> 
                      </div>
                      <div class="avgScore">
                          <span>平均</span>
                          <img src="images/blog/fire.png" alt="評分火數">
                          <img src="images/blog/fire.png" alt="評分火數">
                          <img src="images/blog/fire.png" alt="評分火數">
                          <img src="images/blog/fire.png" alt="評分火數">
                          <img src="images/blog/fire.png" alt="評分火數">
                      </div>
                      <div class="event-price">$1000</div>
                 </div>    
            </div>
            
            <div class="blogContent-event">
                 <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片">
                 <div class="blogContent-event-info">
                    <h3 class="event-name">基本求生</h3>
                    <span class="event-hr">2小時</span>
                       <div class="event-value">
                        <table class="event-value-table">
                            <tr>
                                <td><img src="images/blog/value_family.png" alt="親子值"></td>
                                <td>2</td>
                                <td><img src="images/blog/value_handmade.png" alt="手作值"></td>
                                <td>3</td>
                                <td><img src="images/blog/value_survive.png" alt="生存值"></td>
                                <td>2</td>
                            </tr>
                        </table> 
                      </div>
                      <div class="avgScore">
                          <span>平均</span>
                          <img src="images/blog/fire.png" alt="評分火數">
                          <img src="images/blog/fire.png" alt="評分火數">
                          <img src="images/blog/fire.png" alt="評分火數">
                          <img src="images/blog/fire.png" alt="評分火數">
                          <img src="images/blog/fire.png" alt="評分火數">
                      </div>
                      <div class="event-price">$1000</div>
                 </div>    
            </div>

            <div class="blogContent-event">
                 <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片">
                 <div class="blogContent-event-info">
                    <h3 class="event-name">基本求生</h3>
                    <span class="event-hr">2小時</span>
                       <div class="event-value">
                        <table class="event-value-table">
                            <tr>
                                <td><img src="images/blog/value_family.png" alt="親子值"></td>
                                <td>2</td>
                                <td><img src="images/blog/value_handmade.png" alt="手作值"></td>
                                <td>3</td>
                                <td><img src="images/blog/value_survive.png" alt="生存值"></td>
                                <td>2</td>
                            </tr>
                        </table> 
                      </div>
                      <div class="avgScore">
                          <span>平均</span>
                          <img src="images/blog/fire.png" alt="評分火數">
                          <img src="images/blog/fire.png" alt="評分火數">
                          <img src="images/blog/fire.png" alt="評分火數">
                          <img src="images/blog/fire.png" alt="評分火數">
                          <img src="images/blog/fire.png" alt="評分火數">
                      </div>
                      <div class="event-price">$1000</div>
                 </div>    
            </div>
            </div> 

            <!-- 活動座標 -->
            <div class="blogContent-location">
                <img src="images/Australia_map.png" alt="地圖">
            </div>
        </div>
    </div>

        <div class="blogContent-btnContainer">
            <div class="blogLikeBtn">
               <img src="images/blog/愛心.png" alt="like">
               <span class="likeNum" id="likeNum">100</span> 
            </div>
            <div class="blogCommentBtn">
              <img src="images/blog/留言.png" alt="comment">
              <span class="commNum" id="commNum">100</span>  
            </div>
            <button>加入我的行程</button>
         </div>
        

         <div class="comment">
        <div class="comment-item">
            <div class="comment-author">
                <img src="images/blog/big_head2.png" alt="大頭貼">
                <div>董董</div>
            </div>
            
            <div class="comment-SendContent">
                <div>推推推推推起來</div>
                <div class="comment-date">2019-04-09</div>
            </div>

            <img src="images/game/alert.png" alt="檢舉" class="commentRep">
        </div>
        
        
            <div class="comment-input">
                <form>
                    <textarea name="" id=""></textarea>
                    <input type="button" class="content-send" value="留言">
                </form>
            </div>

            
        
    </div>
        <div class="blogContent-seemore">
                <button>加入我的行程</button>
                <button id="readMoreBlog">看看其他手札</button>
        </div>
    
    </div>
</div>

<!-- copylink lightbox -->
<div id="copyok">
        <p>複製成功<br>3秒後關閉。</p>
</div>


<script src="js/sessionPage.js"></script>
</body>
</html>