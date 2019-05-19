var click = document.getElementById("loginbtn");
var xhr = new XMLHttpRequest();
click.addEventListener("click", function () {
    var memMail = document.getElementById("loginid").value;
    var memPsw = document.getElementById("loginpsw").value;

    if (memMail == "" || memPsw == "") {
        // alert("輸入資料有誤，請重新輸入");
    } else {
        xhr.onload = function () {
            if (xhr.status == 200) {
                showMember(xhr.responseText);
                // alert( xhr.responseText);
            } else {
                alert(xhr.status);
            }
        }
        xhr.open("get", "php/login.php?memMail=" + memMail + "&memPsw=" + memPsw, true);
        xhr.send(null)

        function showMember(msg) {
            if (msg == "找不到") {
                // alert("密碼或帳號錯誤");

                var loginshowgsg = document.getElementsByClassName("loginshowgsg")[0];
                loginshowgsg.innerHTML = "密碼或帳號錯誤";
            } else if (msg == "新增成功") {

                // alert("登入成功");
                let showname=document.getElementById("finishtext");
                
                let memMail = document.getElementById("loginid");
                showname.innerHTML=memMail.value+",你好";
                document.getElementById("login-finish").style.display = "block";

                setTimeout(function () {
                    if (sessionStorage["frompage"] != undefined) {
                        location.href = sessionStorage["frompage"];
                    }
                }, 500);

            }


            var memPsw = document.getElementById("loginpsw");
            loginid.addEventListener("click", function () {
                // let loginid=document.getElementById("loginid");
                loginshowgsg.innerHTML = "";
                loginid.value = "";
                memPsw.value = "";
            })
        };


    }
})






var click = document.getElementsByClassName("rwdlogin")[2];
var xhr = new XMLHttpRequest();
click.addEventListener("click", function () {
    var memMail = document.getElementsByClassName("rwdlogin")[0].value;
    var memPsw = document.getElementsByClassName("rwdlogin")[1].value;

    if (memMail == "" || memPsw == "") {
        alert("輸入資料有誤，請重新輸入");
    } else {
        xhr.onload = function () {
            if (xhr.status == 200) {
                showMember(xhr.responseText);
                // alert( xhr.responseText);
            } else {
                alert(xhr.status);
            }
        }
        xhr.open("get", "php/login.php?memMail=" + memMail + "&memPsw=" + memPsw, true);
        xhr.send(null)

        function showMember(msg) {
            if (msg == "找不到") {
                // alert("密碼或帳號錯誤");

                var loginshowgsg = document.getElementsByClassName("loginshowgsg")[1];
                loginshowgsg.innerHTML = "帳號或密碼錯誤";
            } else if (msg == "新增成功") {

                // alert("登入成功");
                let showname=document.getElementById("finishtext");                
                let memMail = document.getElementsByClassName("rwdlogin")[0];

                showname.innerHTML=memMail.value+",你好";
                document.getElementById("login-finish").style.display = "block";
                
                setTimeout(function () {
                    if (sessionStorage["frompage"] != undefined) {
                        location.href = sessionStorage["frompage"];
                    }
                }, 500);

            }


            var memMail = document.getElementsByClassName("rwdlogin")[0];
            var memPsw = document.getElementsByClassName("rwdlogin")[1];
            memMail.addEventListener("click", function () {
                // let loginid=document.getElementById("loginid");
                loginshowgsg.innerHTML = "";
                memMail.value = "";
                memPsw.value = "";
            })
        };


    }
})





var forget = document.querySelectorAll(".forgetpsw");
var forgettext = document.getElementById("forgettext");
var cancel = document.getElementById("cancel");
var mailtext = document.getElementById("mailtext");
cancel.addEventListener("click", function () {
    forgetpsw.style.display = "none";
});
for (i = 0; i < forget.length; i++) {
    forget[i].addEventListener("click", function () {
        var forgetpsw = document.getElementById("forgetpsw");
        forgetpsw.style.display = "block";
        mailtext.value="";
        forgettext.innerHTML = "";
    });
};
var forgetsend = document.getElementById("forgetsend");
var memMail;
forgetsend.addEventListener("click", function () {
    var memMail=mailtext.value;
    // console.log(memMail);
    var xhr = new XMLHttpRequest()
 
        xhr.onload=function(){
            if(xhr.status==200){
                showMember(xhr.responseText);
            }else{
                alert(xhr.status);
            }
        }         
        xhr.open("get","php/forget.php?memMail="+memMail,true);
        xhr.send(null);
    
   
    function showMember(msg){
        
    // console.log(msg);
        if(msg=="找不到"){ 
            forgettext.innerHTML = "E-mail輸入錯誤或查無此帳號";
        }else{
        var xhr = new XMLHttpRequest() 
        xhr.onload=function(){
            if(xhr.status==200){
                showMember(xhr.responseText);
            }else{
                alert(xhr.status);
            }
        }
        xhr.open("get","php/sendmail/sendmail.php?memMail=" + memMail + "&msg="+ msg ,true);
        xhr.send(null); 
        }
        function  showMember(){
            alert("密碼已寄出");
            
            forgetpsw.style.display = "none";
        }
        
    }
    

});