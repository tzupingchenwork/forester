var click = document.getElementById("showbtn");
var xhr = new XMLHttpRequest();
click.addEventListener("click", function () {
    var memId = document.getElementById("showid").value;
    var memMail = document.getElementById("showemail").value;
    var memPsw = document.getElementById("showpws").value;
    var repws= document.getElementById("repws").value;
    if (memId == "" || memMail == "" || memPsw == ""|| repws == "") {
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
        xhr.open("get", "php/register.php?memId=" + memId + "&memMail=" + memMail + "&memPsw=" + memPsw, true);
        xhr.send(null)

        function showMember(msg) {
            if (msg == "此帳號已有人創建，請重新輸入") {
                var showmsg = document.getElementsByClassName("showmsg")[1];
                showmsg.innerHTML = "此帳號已有人創建，請重新輸入";
            } 
            else if(msg=="新增成功"){
                
            document.getElementById("register-finish").style.display="block";  

            setTimeout(function(){ 
                if(sessionStorage["frompage"] != undefined){
                    location.href = sessionStorage["frompage"];
                }},500);
               
            }


            showemail.addEventListener("click", function () {
                // let showemail=document.getElementById("showemail");
                showmsg.innerHTML = "";
                showemail.value = "";
            })
        };     


    }
})







var click = document.getElementById("rwdshowbtn");
var xhr = new XMLHttpRequest();
click.addEventListener("click", function () {
    var memId = document.getElementById("rwdshowid").value;
    var memMail = document.getElementById("rwdshowemail").value;
    var memPsw = document.getElementById("rwdshowpws").value;
    var repws= document.getElementById("rwdrepws").value;
    if (memId == "" || memMail == "" || memPsw == ""|| repws == "") {
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
        xhr.open("get", "php/register.php?memId=" + memId + "&memMail=" + memMail + "&memPsw=" + memPsw, true);
        xhr.send(null)

        function showMember(msg) {
            if (msg == "此帳號已有人創建，請重新輸入") {
                var showmsg = document.getElementsByClassName("showmsg")[5];
                showmsg.innerHTML = "此帳號已有人創建，請重新輸入";
            } 
            else if(msg=="新增成功"){
                
            document.getElementById("register-finish").style.display="block";  

            setTimeout(function(){ 
                if(sessionStorage["frompage"] != undefined){
                    location.href = sessionStorage["frompage"];
                }},500);
               
            }


            showemail.addEventListener("click", function () {
                // let showemail=document.getElementById("showemail");
                showmsg.innerHTML = "";
                showemail.value = "";
            })
        };     


    }
})