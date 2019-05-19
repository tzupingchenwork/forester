//--------------------------------------------- 
var show_span = document.getElementById("show_span");
var icon = document.getElementById("icon");
var forester_logo = document.getElementById("forester_logo");
var canvas = document.getElementsByClassName("cloud");
var navMob = document.getElementById("navMob");
var navMobConDiv1 = document.getElementById("navMobConDiv1");
var navMobConDiv2 = document.getElementById("navMobConDiv2");
var navMobConDiv3 = document.getElementById("navMobConDiv3");
var navMobConDiv4 = document.getElementById("navMobConDiv4");
var navMobConDiv5 = document.getElementById("navMobConDiv5");


icon.addEventListener("click", function () {
    console.log("HI");
    if (navMob.style.display != "block") {
        navMob.style.display = "block";
        //  navMob.style.animation=" show_span 1s ";
        canvas.style.display = "none";
        navMobConDiv1.classList.remove("smove5");
        navMobConDiv2.classList.remove("smove4");
        navMobConDiv3.classList.remove("smove5");
        navMobConDiv4.classList.remove("smove4");
        navMobConDiv5.classList.remove("smove6");
        //  增加
        navMobConDiv1.classList.add("smove2");
        navMobConDiv2.classList.add("smove1");
        navMobConDiv3.classList.add("smove2");
        navMobConDiv4.classList.add("smove1");
        navMobConDiv5.classList.add("smove3");


    } else {
        canvas.style.display = "block";
        // show_span.style.animation=" noshow_span 1s ";
        navMobConDiv1.classList.remove("smove2");
        navMobConDiv2.classList.remove("smove1");
        navMobConDiv3.classList.remove("smove2");
        navMobConDiv4.classList.remove("smove1");
        navMobConDiv5.classList.remove("smove3");

        navMobConDiv1.classList.add("smove5");
        navMobConDiv2.classList.add("smove4");
        navMobConDiv3.classList.add("smove5");
        navMobConDiv4.classList.add("smove4");
        navMobConDiv5.classList.add("smove6");

        setTimeout(function () {
            navMob.style.display = "none";
        }, 200);
    }
});

window.addEventListener("resize", function () {
    if ($(window).width() > 767) {
        show_span.style.display = "block";
        navMob.style.display = "none";
        canvas.style.display = "block";
        // show_span.style.animation=" show_span 1s ";
        // JavaScript here 
        // 當視窗寬度小於767px時執行
    } else {
        show_span.style.display = "none";
        // show_span.style.animation=" noshow_span 1s ";
    }

});


// -----------------header雲的動畫--------------------------------------
var canvas = document.getElementById('canvas');
var ctx = canvas.getContext('2d');
canvas.width = canvas.parentNode.offsetWidth;
canvas.height = canvas.parentNode.offsetHeight;


function cloudResize() {
    //如果浏览器支持requestAnimFrame则使用requestAnimFrame否则使用setTimeout  
    window.requestAnimFrame = (function () {
        return window.requestAnimationFrame ||
            window.webkitRequestAnimationFrame ||
            window.mozRequestAnimationFrame ||
            function (callback) {
                //-----------波浪秒數設定-----------
                window.setTimeout(callback, 1);
            };
    })();

    window.onresize = function () {
        canvas.width = canvas.parentNode.offsetWidth;
        canvas.height = canvas.parentNode.offsetHeight;
    }

    //初始角度为0  
    var step = 0;
    //定义三条不同波浪的颜色  
    // var lines = ["rgba(0,222,255, 0.3)",
    //             "rgba(157,192,249, 0.3)",
    //             "rgba(0,168,255, 0.3)"
    //             ];
    var lines = ["#fff",
        "fdfbfb",
        "rgba(235,237,238, 0.5)"

    ];
    if (window.screen.width > 768) {
        function loop() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            step++;
            //画3个不同颜色的矩形  
            for (var j = lines.length - 1; j >= 0; j--) {
                ctx.fillStyle = lines[j];
                //每个矩形的角度都不同，每个之间相差45度  
                var angle = (step + j * 90) * Math.PI / 180;
                // console.log(angle);
                //-------------波浪幅度設定(原設定50->35)-------------------
                var deltaHeight = Math.sin(angle) * 25;
                var deltaHeightRight = Math.cos(angle) * 25;
                ctx.beginPath();
                ctx.moveTo(0, canvas.height / 2.6 + deltaHeight);
                ctx.bezierCurveTo(canvas.width / 2.6, canvas.height / 2.6 + deltaHeight - 30, canvas.width / 2.6, canvas.height / 2.6 + deltaHeightRight - 30, canvas.width, canvas.height / 2.6 + deltaHeightRight);
                ctx.lineTo(canvas.width, canvas.height);
                ctx.lineTo(0, canvas.height);
                ctx.lineTo(0, canvas.height / 2.6 + deltaHeight);
                ctx.closePath();
                ctx.fill();
            }
            requestAnimFrame(loop);
        }
        loop();
    } else {
        function loop() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            step++;
            //画3个不同颜色的矩形  
            for (var j = lines.length - 1; j >= 0; j--) {
                ctx.fillStyle = lines[j];
                //每个矩形的角度都不同，每个之间相差45度  
                var angle = (step + j * 110) * Math.PI / 180;
                // console.log(angle);
                //-------------波浪幅度設定(原設定50->35)-------------------
                var deltaHeight = Math.sin(angle) * 7;
                var deltaHeightRight = Math.cos(angle) * 7;
                ctx.beginPath();
                ctx.moveTo(0, canvas.height / 3.5 + deltaHeight);
                ctx.bezierCurveTo(canvas.width / 3.5, canvas.height / 3.5 + deltaHeight - 22, canvas.width / 3.5, canvas.height / 3.5 + deltaHeightRight - 22, canvas.width, canvas.height / 3.5 + deltaHeightRight);
                ctx.lineTo(canvas.width, canvas.height);
                ctx.lineTo(0, canvas.height);
                ctx.lineTo(0, canvas.height / 3.5 + deltaHeight);
                ctx.closePath();
                ctx.fill();
            }
            requestAnimFrame(loop);
        }
        loop();
    }
}

function init4() {
    cloudResize();
    window.addEventListener('resize', cloudResize);
}

window.addEventListener("load", init4);


var logout=document.getElementById("logout");
logout.addEventListener("click",function(){
    console.log("logout");
    var xhr = new XMLHttpRequest();
    xhr.onload = function () {
        if (xhr.status == 200) {
            logout(xhr.responseText);
            // alert( xhr.responseText);
        } else {
            alert(xhr.status);
        }
    }
    xhr.open("get", "php/logout.php", true);
    xhr.send(null)
    function logout(msg){
        if(msg=="成功"){
        location.reload();
    
        }
    }
});



var rwdlogout=document.getElementById("rwdlogout");
rwdlogout.addEventListener("click",function(){
    console.log("rwdlogout");
    var xhr = new XMLHttpRequest();
    xhr.onload = function () {
        if (xhr.status == 200) {
            rwdlogout(xhr.responseText);
            // alert( xhr.responseText);
        } else {
            alert(xhr.status);
        }
    }
    xhr.open("get", "php/logout.php", true);
    xhr.send(null)

    function rwdlogout(msg){
        console.log(msg);
        if(msg=="成功"){
        location.reload();
    
        }
    }

});


