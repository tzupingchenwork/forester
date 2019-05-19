<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/blogShare.css">
    <link rel="stylesheet" href="css/svg_style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="Shortcut Icon" type="image/x-icon" href="images/new/favicon.png" />
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
    <script src="js/hbgClick.js"></script>
    <title>森存者｜分享手札</title>
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

    <div class="header_title_background"><img src="images/blogShare/title_back_edit.png" alt=""></div> 
    <!-- blog share -->
    <div class="blogShare">
        <div class="blogShare-board">
            <img src="images/blogShare/edit_blog_paper-01.png" alt="board">
        </div>
        <!-- heading -->
       
        <div class="previewPlan">
            <div class="selectPlan">
                <div>選擇你想分享的行程</div>
                    <select name="YourPlan">
                　      <option value="plan-1">plan-1</option>
                　      <option value="plan-2">plan-2</option>
                    </select>
            </div>
            <div class="plan-photo">
                <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="行程圖片">
            </div> 
            <!-- event -->
            <div class="event-wrap">
                     <div class="event-item">
                        <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動照片">
                        <h3>基本求生</h3>
                     </div>
                     <div class="event-item">
                        <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動照片">
                        <h3>生火術</h3>
                     </div>
                     <div class="event-item">
                        <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動照片">
                        <h3>淨水術</h3>
                     </div>
                     <div class="event-item">
                        <img src="images/event/Basic-Survival-Skills-Every-Man-Should-Know.jpg" alt="活動照片">
                        <h3>基本求生</h3>
                     </div>
            </div>
        </div>   

        <!-- ckediter -->
        <div class="blogSummit">
            <div class="blogSummit-pin">
                <img src="images/pin.png" alt="圖釘">
            </div>
            
                <form id="form" runat="server">
                        <input type="text" placeholder="輸入你的手札名稱" id="typeBlogName">    
                           <div class="blogTextarea">
                               <textarea id="editor" placeholder="輸入你的手札" maxlength="200" ></textarea>
                           </div>
                       <script>
                           ClassicEditor
                               .create(document.querySelector('#editor'))
                               .then(editor => {
                                   console.log(editor);
                               })
                       </script>
               
                       <div class="blogShare-btnContainer">
                           <button>發布手札</button>
                       </div>
                </form>
        </div>
       
        


    </div>
</div>

<script src="js/sessionPage.js"></script>
</body>
</html>