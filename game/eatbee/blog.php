<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/svg_style.css">
    <link rel="stylesheet" href="css/header.css">  
    <link rel="Shortcut Icon" type="image/x-icon" href="images/new/favicon.png" />
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/hbgClick.js"></script>
    <title>森存者｜手札分享</title>
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
    <!-- blog rank -->
    <div class="blog-heading">
        <!-- <h2>熱門手札</h2> -->
    </div>
    <div class="blogRanking">
        <a href="blogContent.html"><h2>原來山泉水這麼甜!!</h2></a>
        <div class="blogRanking-info">
            <div class="blogRanking-author">
                <img src="images/blog/big_head1.png" alt="大頭貼">
                <span>董董</span>
                <span>2019-04-09</span>
            </div>
            <div class="blogRanking-share">
                <input type="text" name="" id="copyurl" value="www.google.com" > 
                <!-- <button type="button" id="copybtn"><img src="images/blog/Share.png" alt="分享"></button> -->
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
        <div class="blogRanking-article">
            <div class="blogRanking-article-left">
                <div class="blogRanking-photo">
                    <img src="images/event/Best-Survival-Schools.jpg" alt="手札圖片">
                </div>
                <p>這個活動真是太神奇了，我們把髒兮兮的泥巴水變成可以喝的清水，一定要推一下的拉!!!一定要推一下的拉!!!一定要推一下的拉!!!一定要推一下的拉!!!一定要推一下的拉!!!一定要推一下的拉!!!
                    <a href="blogContent.html"><span class="readMore" >繼續閱讀</span></a> </p>
            </div>
            
          
          <!-- event -->
            <div class="blogRanking-event-wrap">
            <div class="blogRanking-event">
                 <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片">
                 <div class="blogRanking-event-info">
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

            <div class="blogRanking-event">
                 <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片">
                 <div class="blogRanking-event-info">
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
            
            <div class="blogRanking-event">
                 <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片">
                 <div class="blogRanking-event-info">
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

            <div class="blogRanking-event">
                 <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片">
                 <div class="blogRanking-event-info">
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
            
            
        </div>

         <div class="blogRanking-btnContainer">
            <div class="blogLikeBtn">
               <img src="images/blog/愛心.png" alt="like">
               <span class="likeNum" id="likeNum">100</span> 
            </div>
            <div class="blogCommentBtn">
              <img src="images/blog/留言.png" alt="comment">
              <span class="commNum" id="commNum">100</span>  
            </div>
         </div>



        
        <div class="addBtn">
            <button>加入我的行程</button>
        </div>
    </div>
   
    <!-- blog share -->
    <div class="blogShare">
        <button class="blogShareBtn"><a href="blogShare.html">編寫手札</a></button>
        <img src="images/blog/back.png" alt="手札分享" class="blogShareImg">
        <div class="blogShare-beforehover">
            你是不是很想寫下你的美好經驗！
        </div>
        <div class="blogShare-afterhover">
            點下去就可以實現你的願望！
        </div>
    </div>
    <script>
    //換圖片
    $(document).ready(function(){
         $(".blogShareBtn").hover(
            function() {
               $(".blogShareImg").attr("src","images/blog/bear.png");
            },
            function() {
               $(".blogShareImg").attr("src","images/blog/back.png");
            }
         );
      });
      $(document).ready(function(){
         $(".blogShareBtn").hover(
            function() {
               $(".blogShare-beforehover").css("visibility","hidden");
               $(".blogShare-afterhover").css("visibility","inherit");
            },
            function() {
                $(".blogShare-beforehover").css("visibility","inherit");
               $(".blogShare-afterhover").css("visibility","hidden");
            }
         );
      });
    </script>
    <!-- blog forum -->
    <div class="blogForum">
        <div class="blogForum-optContainer">
            <!-- 下拉選單 -->
            <select name="blogForum-option">
                <option value="optHigh">依熱門排列</option>
                <option value="optNew">依時間排列</option>
            </select>
        </div>

        <!-- 瀑布文章 -->
        <div id="container">
            <div class="blog-item">
                <div class="blog-img">
                   <a href="blogContent.html"><img src="images/event/Best-Survival-Schools.jpg" alt="手札圖片"></a>
                </div>
                
                <div class="blog-info">
                    <div class="blog-author">
                       <img src="images/blog/big_head1.png" alt="大頭照">
                       <span class="authorName">董董</span>
                    </div>  
                     <span class="blogDate">2019-04-09</span>
                </div>
                
                <div class="blog-name">
                    <a href="blogContent.html"><h2>原來山泉水這麼甜!!</h2></a>
                </div>
                
                <!-- event -->
                <div class="event-wrap">
                     <div class="event-item">
                        <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片">
                        <h3>基本求生</h3>
                     </div>
                     <div class="event-item">
                        <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片">
                        <h3>生火術</h3>
                     </div>
                     <div class="event-item">
                        <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片">
                        <h3>淨水術</h3>
                     </div>
                     <div class="event-item">
                        <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片">
                        <h3>基本求生</h3>
                     </div>
                </div>
               
                <div class="blog-item-btnContainer">
                    <div class="blogLikeBtn">
                       <img src="images/blog/愛心.png" alt="like">
                       <span class="likeNum" id="likeNum">100</span> 
                    </div>
                    <div class="blogCommentBtn">
                      <img src="images/blog/留言.png" alt="comment">
                      <span class="commNum" id="commNum">100</span>  
                    </div>
                </div>
            </div>

            <div class="blog-item">
                <div class="blog-img">
                    <img src="images/event/Best-Survival-Schools.jpg" alt="手札圖片">
                </div>
                
                <div class="blog-info">
                    <div class="blog-author">
                       <img src="images/event/Best-Survival-Schools.jpg" alt="大頭照">
                       <span class="authorName">sam</span>
                    </div>  
                     <span class="blogDate">2019-04-09</span>
                </div>

                <div class="blog-name">
                    <h2>手札名稱</h2>
                </div>
                
                <!-- event -->
                <div class="event-wrap">
                     <div class="event-item">
                        <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片">
                        <h3>基本求生</h3>
                     </div>
                     <div class="event-item">
                        <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片">
                        <h3>生火術</h3>
                     </div>
                     <div class="event-item">
                        <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片">
                        <h3>淨水術</h3>
                     </div>
                     <div class="event-item">
                        <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片">
                        <h3>基本求生</h3>
                     </div>
                </div>
               
                <div class="blog-item-btnContainer">
                    <div class="blogLikeBtn">
                       <img src="images/blog/愛心.png" alt="like">
                       <span class="likeNum" id="likeNum">100</span> 
                    </div>
                    <div class="blogCommentBtn">
                      <img src="images/blog/留言.png" alt="comment">
                      <span class="commNum" id="commNum">100</span>  
                    </div>
                </div>
            </div>

            <div class="blog-item">
                <div class="blog-img">
                    <img src="images/event/Best-Survival-Schools.jpg" alt="手札圖片">
                </div>
                
                <div class="blog-info">
                    <div class="blog-author">
                       <img src="images/event/Best-Survival-Schools.jpg" alt="大頭照">
                       <span class="authorName">sam</span>
                    </div>  
                     <span class="blogDate">2019-04-09</span>
                </div>

                <div class="blog-name">
                    <h2>手札名稱</h2>
                </div>
                
                <!-- event -->
                <div class="event-wrap">
                     <div class="event-item">
                        <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片">
                        <h3>基本求生</h3>
                     </div>
                     <div class="event-item">
                        <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片">
                        <h3>生火術</h3>
                     </div>
                     <div class="event-item">
                        <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片">
                        <h3>淨水術</h3>
                     </div>
                    
                </div>
               
                <div class="blog-item-btnContainer">
                    <div class="blogLikeBtn">
                       <img src="images/blog/愛心.png" alt="like">
                       <span class="likeNum" id="likeNum">100</span> 
                    </div>
                    <div class="blogCommentBtn">
                      <img src="images/blog/留言.png" alt="comment">
                      <span class="commNum" id="commNum">100</span>  
                    </div>
                    
                </div>
            </div>

            <div class="blog-item">
                <div class="blog-img">
                    <img src="images/event/Best-Survival-Schools.jpg" alt="手札圖片">
                </div>
                
                <div class="blog-info">
                    <div class="blog-author">
                       <img src="images/event/Best-Survival-Schools.jpg" alt="大頭照">
                       <span class="authorName">sam</span>
                    </div>  
                     <span class="blogDate">2019-04-09</span>
                </div>

                <div class="blog-name">
                    <h2>手札名稱</h2>
                </div>
                
                <!-- event -->
                <div class="event-wrap">
                     <div class="event-item">
                        <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片">
                        <h3>基本求生</h3>
                     </div>
                     <div class="event-item">
                        <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片">
                        <h3>生火術</h3>
                     </div>
                     <div class="event-item">
                        <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片">
                        <h3>淨水術</h3>
                     </div>
                     <div class="event-item">
                        <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動圖片">
                        <h3>基本求生</h3>
                     </div>
                </div>
               
                <div class="blog-item-btnContainer">
                    <div class="blogLikeBtn">
                       <img src="images/blog/愛心.png" alt="like">
                       <span class="likeNum" id="likeNum">100</span> 
                    </div>
                    <div class="blogCommentBtn">
                      <img src="images/blog/留言.png" alt="comment">
                      <span class="commNum" id="commNum">100</span>  
                    </div>
                </div>
            </div>
        </div>



    </div>
    <script>
        // 瀑布流
        $('#container').masonry({
            itemSelector: '.blog-item',
            columnWidth: 0,
            animate:true
        });

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
    </div>
    
    
<!-- copylink lightbox -->
<div id="copyok">
        <p>複製成功<br>3秒後關閉。</p>
</div>
<script src="js/sessionPage.js"></script>
</body>
</html>