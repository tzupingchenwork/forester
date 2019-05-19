<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>森存者｜登入及註冊</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="Shortcut Icon" type="image/x-icon" href="images/new/favicon.png" />
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
 
</head>
 
<body>
  <!-- header -->
  <?php include 'header.php';?>
    <!-- header -->
    <div class="background">
        <div class="wrap">
            <div class="login-reg-panel">
                <div class="login-info-box">
                    <h3 class="title">嗨！很高興見到你回來！</h3>
                    <p class="desc">趕緊登入來規劃你的行程吧！</p>
                    <label id="label-register" for="log-reg-show">立即登入</label>
                    <input type="radio" name="active-log-panel" id="log-reg-show" checked="checked">
                    <img id="dropping-bear" src="images/member/drop.png" alt="降落熊">
                    <img id="dropping-bear2" src="images/member/drop.png" alt="降落熊">
                </div>


                <div class="register-info-box">
                    <h3 class="title">呼嘎嚇嘎！唷！新朋友</h3>
                    <p class="desc">花個一分鐘註冊你的會員資料就可享受森存者提供的服務</p>
                    <label id="label-login" for="log-login-show">立即註冊</label>
                    <input type="radio" name="active-log-panel" id="log-login-show">
                    <img id="flying-butterfly" src="images/member/fly1.gif" alt="飛蝴蝶">
                    <img id="flying-butterfly2" src="images/member/fly1.gif" alt="飛蝴蝶">
                    <img id="talking-bear" src="images/member/talk.png" alt="說話熊">
                </div>

                <div class="white-panel">
                    <div class="login-show">
                        <!-- <form action="php/login.php" method="post"> -->
                        <h3 class="title">會員登入</h3>
                        <label for="memMail">會員帳號 <span class="loginshowgsg" style="color:#a00;"></span></label>
                        <input id="loginid" type="text" name="memMail" placeholder="請輸入您的Email">
                        <label for="password">會員密碼</label>
                        <input id="loginpsw" type="password" name="memPsw" placeholder="請輸入您的密碼">
                        <a href="javascript:;" class="forgetpsw">忘記密碼</a>
                        <br>
                        <input id="loginbtn" type="submit" value="登入">
                        <!-- </form> -->
                    </div>
                    <div class="register-show ">
                        <!-- <form action="php/register.php" method="post"> -->
                        <h3 class="title">會員註冊</h3>
                        <label for="nikename">會員暱稱<span class="showmsg" style="color:#a00;" ;></span></label>
                        <input id="showid" type="text" name="memId" placeholder="請輸入您的暱稱">
                        <label for="nikename">會員帳號<span class="showmsg" style="color:#a00;" ;></span></label>
                        <input id="showemail" type="text" name="memMail" placeholder="請輸入您的Email">
                        <label for="password">會員密碼<span class="showmsg" style="color:#a00;" ;></span></label>
                        <input id="showpws" type="password" name="memPws" placeholder="請輸入您的密碼" class="pwschick ">
                        <label for="password">確認密碼 <span class="showmsg" style="color:#a00;" ;></span></label>
                        <input type="password" name="password" placeholder="請再次輸入您的密碼" class="pwschicki" id="repws">
                        <input id="showbtn" type="submit" value="註冊">
                        <!-- </form> -->
                    </div>
                </div>
            </div>

            <div class="login-reg-panel-rwd">
                <img id="flying-butterfly_rwd" src="images/member/fly1.gif" alt="飛蝴蝶">
                <img id="flying-butterfly2_rwd" src="images/member/fly1.gif" alt="飛蝴蝶">
                <div class="swithBtn">
                    <div class="loginSwitchBtn active"><a href="#">登入</a></div>
                    <div class="signUpSwitchBtn"><a href="#">註冊</a></div>
                </div>
                <div class="login-rwd">

                    <!-- <form action="php/login.php" method="post"> -->
                    <h3 class="title">會員登入</h3>
                    <label for="memMail">會員帳號 <span class="loginshowgsg" style="color:#a00;"></span></label>
                    <input class="rwdlogin" type="text" name="memMail" placeholder="請輸入您的Email">
                    <label for="password">會員密碼</label>
                    <input class="rwdlogin" type="password" name="memPsw" placeholder="請輸入您的密碼">
                    <a href="javascript:;" class="forgetpsw">忘記密碼</a>
                    <br>
                    <input class="rwdlogin" type="submit" value="登入">
                    <!-- </form> -->
                </div>
                <div class="register-rwd">
                    <!-- <form action="php/register.php" method="post"> -->
                    <h3 class="title">會員註冊</h3>
                    <label for="nikename">會員暱稱<span class="showmsg" style="color:#a00;"></span></label>
                    <input id="rwdshowid" type="text" name="memId" placeholder="請輸入您的暱稱">
                    <label for="nikename">會員帳號<span class="showmsg" style="color:#a00;"></span></label>
                    <input id="rwdshowemail" type="text" name="memMail" placeholder="請輸入您的Email">
                    <label for="password">會員密碼<span class="showmsg" style="color:#a00;"></span></label>
                    <input id="rwdshowpws" type="password" name="memPws" placeholder="請輸入您的密碼" class="pwschick ">
                    <label for="password">確認密碼 <span class="showmsg" style="color:#a00;"></span></label>
                    <input type="password" name="password" placeholder="請再次輸入您的密碼" class="pwschicki" id="rwdrepws">
                    <input id="rwdshowbtn" type="submit" value="註冊">
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </div>
    <div id="register-finish" class="finish">
        <div id="register-finishbox" class="finish-box">
            <p>恭喜你成為我們的會員</p>
        </div>
    </div>

    <div id="login-finish" class="finish">
        <div id="login-finishbox" class="finish-box">
            <p id="finishtext">asdasd</p>
        </div> 
    </div>

    <div id="forgetpsw" class="finish">
        <div id="forgetpswbox" class="finish-box">
            <span id="cancel"><img src="php/cancel.svg" alt=""></span>
            <p>忘記密碼了嗎，在這邊輸入帳號</p>
            <input type="text" placeholder="請輸入您的Email" id="mailtext">
            <p id="forgettext" style="color:#a00;"></p>
            <input id="forgetsend" value="確定" type="button">
        </div>
    </div>









    <script>
        var pwschick = document.getElementsByClassName("pwschick")[0];
        var pwschicki = document.getElementsByClassName("pwschicki")[0];
        var showmsg = document.getElementsByClassName("showmsg")[3];
        var pwschickr = document.getElementsByClassName("pwschick")[1];
        var pwschickir = document.getElementsByClassName("pwschicki")[1];
        var showmsgr = document.getElementsByClassName("showmsg")[7];
        var showpws = document.getElementById("showpws");
        showpws.addEventListener("click", function () {
            showmsg.innerText = "";
        });
        pwschicki.addEventListener("change", function () {
            if (pwschick.value != pwschicki.value) {
                showmsg.innerText = "密碼輸入錯誤唷";
                pwschick.value = "";
                pwschicki.value = "";
            } else {
                showmsg.innerText = "密碼輸入正確唷";
            }
        })
        pwschickir.addEventListener("change", function () {
            if (pwschickr.value != pwschickir.value) {
                showmsgr.innerText = "密碼輸入錯誤唷";
                pwschickr.value = "";
                pwschickir.value = "";
            } else {
                showmsgr.innerText = "密碼輸入正確唷";
            }
        })
    </script>

    <script>
        $(document).ready(function () {
            $('.login-info-box').fadeOut();
            $('.login-show').addClass('show-log-panel');
        });

        $('.login-reg-panel input[type="radio"]').on('change', function () {
            if ($('#log-login-show').is(':checked')) {
                $('.register-info-box').fadeOut();
                $('.login-info-box').fadeIn();

                $('.white-panel').addClass('right-log');
                $('.register-show').addClass('show-log-panel');
                $('.login-show').removeClass('show-log-panel');

            } else if ($('#log-reg-show').is(':checked')) {
                $('.register-info-box').fadeIn();
                $('.login-info-box').fadeOut();
                $('.white-panel').removeClass('right-log');
                $('.login-show').addClass('show-log-panel');
                $('.register-show').removeClass('show-log-panel');
            }
        });

        $('.signUpSwitchBtn').click(function () {
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
            $('.login-rwd').hide();
            $('.register-rwd').show();
        });

        $('.loginSwitchBtn').click(function () {
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
            $('.login-rwd').show();
            $('.register-rwd').hide();
        });
    </script>
    <script src="js/TweenMax.min.js"></script>
    <script>
        TweenMax.to('#dropping-bear', 4, {
            top: '250px',
            repeat: -1,
            rotation: '-10deg',
            ease: Power2.easeInOut,
            yoyo: true,
        });

        TweenMax.to('#dropping-bear2', 2.5, {
            top: '-150px',
            left: '70%',
            repeat: -1,
            rotation: '-2deg',
            ease: Sine.easeInOut,
            yoyo: true,
        });

        TweenMax.to('#flying-butterfly', 2.5, {
            top: '-60px',
            left: '300px',
            // repeat: -1,
            rotation: '20deg',
            ease: Sine.easeInOut,
            // yoyo: true,
        });

        TweenMax.to('#flying-butterfly2', 3, {
            top: '-100px',
            right: '300px',
            delay: 1,
            // repeat: -1,
            // rotation: '20deg',
            ease: Sine.easeInOut,
            // yoyo: true,
        });
    </script>

    <script src="php/register.js"></script>
    <script src="php/login.js"></script>
</body>

</html>