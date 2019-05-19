function $id(id){
    return document.getElementById(id);
}
// 顯示所有活動在圖上
function getAllEntLoc(e){

    let mapboard = document.getElementById('mapboard');

    console.log( typeof globalVariable);
    console.log(globalVariable);
    console.log(globalVariable.length);

    for(let i = 0 ; i < globalVariable.length ; i++){

        console.log(globalVariable[i]["entLoc"]);

        let locationXandY = (globalVariable[i]["entLoc"]).split(",");

        let percX = locationXandY[0];
        let percY = locationXandY[1];

        // 建一個img節點
        let entpoint = document.createElement("img");

        // 設定point屬性
        entpoint.classList.add("allEntPoint");
        entpoint.setAttribute("width", "40");
        entpoint.setAttribute("src", "images/bear_run.gif");
        entpoint.style.position = "absolute";
        entpoint.style.zIndex = "1";
        entpoint.style.transform ="translate(-50%,-50%)";                
        entpoint.style.top = percY +"%";
        entpoint.style.left = percX +"%";
        // 放置到地圖上
        mapboard.appendChild(entpoint);
    }
};

//加入行程前看有沒有登入
function addCheck() {
    var xhr = new XMLHttpRequest();
    xhr.onload = function () {
        if (xhr.status == 200) {
            if (xhr.responseText == 'login') {
              document.getElementById("addPlanArea").style.display = 'block';
            } else if (xhr.responseText == 'logout') {
                alert('請登入會員');
            }
        } else {
            alert(xhr.status);
        }
    }
    url = 'session.php';
    xhr.open("Get", url, true);
    xhr.send(null);
};	

function clickLike(e){
    // alert();
    if(e.target.className == 'like'){
        // alert();
        var planNo = e.target.id.split("|")[1];
        // console.log(photoNo);
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(e){
        if( xhr.readyState == 4){
            if( xhr.status == 200){
                document.querySelector("#likeNum"+planNo).innerHTML = xhr.responseText; 
            }
            else{
                alert( xhr.status );
            }
            
        } 
            
    }
            url = "noteDoLike.php?planNo=" + planNo;
            xhr.open("Get", url, true);
            xhr.send(null);
    e.target.className ='liked';
    }else{
        var planNo = e.target.id.split("|")[1]; 
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4){
                if( xhr.status == 200){
                    document.querySelector("#likeNum"+planNo).innerHTML = xhr.responseText; 
                }
            else{
                alert( xhr.status );
            }
        }
            
        }
            url = "noteDeletLike.php?planNo=" + planNo;
            xhr.open("Get", url, true);
            xhr.send(null);
    e.target.className ='like';
    }
  }
  //檢舉
  function commRep(e){
    var noteCommNo = e.target.id.split("|")[1];
    console.log(noteCommNo);
    $id("hiddennoteCommNo").value = noteCommNo;
  }
//註冊
function init(){
    //按讚
    var like = document.getElementsByClassName("like");
      for(var i = 0; i < like.length; i++){
          like[i].addEventListener("click",clickLike,false);
      }
      var liked = document.getElementsByClassName("liked");
      for(var i = 0; i < liked.length; i++){
          liked[i].addEventListener("click",clickLike,false);
      }
      //檢舉
      var commentRep = document.getElementsByClassName("commentRep");
      for(var i = 0; i < commentRep.length; i++){
        commentRep[i].addEventListener("click",commRep,false);
      } 
    
      $id("addCheck").onclick = addCheck;
      
      //活動燈箱
    $('.blogContent-event').click(function(e){
    // console.log($(this).find('input').val());

    var xhr = new XMLHttpRequest();
    xhr.addEventListener('load', (e) => {
        if (xhr.status == 200){
            $('#infoContainer').show();
            document.getElementById('infoContainer').innerHTML = xhr.responseText;
            // console.log(xhr.responseText);

            $('#Lightbox2_close').click(function(){
                $('#infoContainer').hide();
            });

        }else{
            alert(xhr.status);
        }
    });

    xhr.open("GET", "plan_eventPop.php?entNo="+ $(this).find('input').val(), true);
    xhr.send(null);
});
      
      // 顯示所有活動在圖上
      getAllEntLoc();
  }
  window.addEventListener('load',init);