<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="js/hbgClick.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="js/masonry.pkgd.min.js"></script>
        <link rel="Shortcut Icon" type="image/x-icon" href="images/new/favicon.png" />
        <link rel="stylesheet" href="css/game.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/svg_style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
        <title>森存者｜尋找森存者</title>
    </head>
          <!-- header -->
    <?php include 'header.php';?>
    <!-- header -->

    <body>
                <div class="wrap">
                    <!-- bg fly -->
                        <div id="scene1">
                            <div data-depth="0.8" class="fly1"><img src="images/blog/fly1.gif" alt="蝴蝶"></div>
                        </div>
                        <script>
                            parallaxInstance = new Parallax(document.getElementById("scene1"));
                        </script>
                        <!-- map -->
                            <div class="game-container">
                                <div class="game-map"><img src="images/game/island-map.png" alt="營區地圖"></div>
                                <!-- 地圖按鈕 -->
                                    <div class="game-rule"><img src="images/game/mapbtn.png"
                                            alt="遊戲規則按鈕"><span>遊戲規則</span></div>
                                    <div class="game-rule-content">
                                        <div id="close">X</div>
                                        <h2>遊戲規則</h2>
                                        <p>看地圖尋找到營區裡的森存者，和他合照並上傳，即可獲得點數</p><img src="images/blog/talk.png" alt="熊">
                                        <div class="game-rule-bearTalk">快來找我喔！</div>
                                    </div>
                            </div>
                            <script>
                                $("#close").click(function () {
                                        $(".game-rule-content").hide();
                                    }

                                );

                                $(".game-rule").click(function () {
                                        $(".game-rule-content").show();
                                    }

                                );
                            </script>
                            <!-- bg fly -->
                                <div id="scene2">
                                    <div data-depth="0.5" class="fly1"><img src="images/blog/drop.png" alt="蝴蝶"></div>
                                </div>
                                <script>
                                    parallaxInstance = new Parallax(document.getElementById("scene2"));
                                </script>
                                <!-- photo wall -->
                                    <div class="photoWall">
                                        <div class="header_title_background"><img src="images/game/title_back_album.png"
                                                alt=""></div>
                                        <div class="photoWall-container">
                                            <!-- bgfly -->
                                                <div id="scene3">
                                                    <div data-depth="0.5" class="fly1"><img src="images/blog/fly1.gif"
                                                            alt="蝴蝶"></div>
                                                </div>
                                                <script>
                                                    parallaxInstance = new Parallax(document.getElementById("scene3"));
                                                </script>
                                                <div class="photoWall-upload"><button>上傳與森存者合照</button></div>
                                        </div>
                                        <div id="container">
                                            <div class="photo-item">
                                                <div class="photo-img"><img src="images/event/Best-Survival-Schools.jpg"
                                                        alt="活動圖片"></div>
                                                <div class="photo-author"><img src="images/blog/big_head1.png"
                                                        alt="大頭照"><span class="authorName">懂不懂</span></div>
                                                <div class="photoBtn">
                                                    <div class="photoLikeBtn"><img src="images/blog/愛心.png"
                                                            alt="like"><span class="likeNum" id="likeNum">100</span>
                                                    </div>
                                                    <div class="photoRepBtn"><img src="images/game/alert.png"
                                                            alt="like"></div>
                                                </div>
                                            </div>
                                            <div class="photo-item">
                                                <div class="photo-img"><img src="images/event/Best-Survival-Schools.jpg"
                                                        alt="活動圖片"></div>
                                                <div class="photo-author"><img src="images/blog/big_head1.png"
                                                        alt="大頭照"><span class="authorName">懂不懂</span></div>
                                                <div class="photoBtn">
                                                    <div class="photoLikeBtn"><img src="images/blog/愛心.png"
                                                            alt="like"><span class="likeNum" id="likeNum">100</span>
                                                    </div>
                                                    <div class="photoRepBtn"><img src="images/game/alert.png"
                                                            alt="like"></div>
                                                </div>
                                            </div>
                                            <div class="photo-item">
                                                <div class="photo-img"><img src="images/event/Best-Survival-Schools.jpg"
                                                        alt="活動圖片"></div>
                                                <div class="photo-author"><img src="images/blog/big_head1.png"
                                                        alt="大頭照"><span class="authorName">懂不懂</span></div>
                                                <div class="photoBtn">
                                                    <div class="photoLikeBtn"><img src="images/blog/愛心.png"
                                                            alt="like"><span class="likeNum" id="likeNum">100</span>
                                                    </div>
                                                    <div class="photoRepBtn"><img src="images/game/alert.png"
                                                            alt="like"></div>
                                                </div>
                                            </div>
                                            <div class="photo-item">
                                                <div class="photo-img"><img src="images/event/Best-Survival-Schools.jpg"
                                                        alt="活動圖片"></div>
                                                <div class="photo-author"><img src="images/blog/big_head1.png"
                                                        alt="大頭照"><span class="authorName">懂不懂</span></div>
                                                <div class="photoBtn">
                                                    <div class="photoLikeBtn"><img src="images/blog/愛心.png"
                                                            alt="like"><span class="likeNum" id="likeNum">100</span>
                                                    </div>
                                                    <div class="photoRepBtn"><img src="images/game/alert.png"
                                                            alt="like"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        // 瀑布流

                                        $('#container').masonry({
                                                itemSelector: '.photo-item',
                                                columnWidth: 0,
                                                animate: true
                                            }

                                        );
                                    </script>
                </div>
                <script src="js/sessionPage.js"></script>
    </body>

    </html>