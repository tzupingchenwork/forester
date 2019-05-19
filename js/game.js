function clickLike(e){
    // alert();
    if(e.target.className == 'like'){
        // alert();
        var photoNo = e.target.id.split("|")[1];
        // console.log(photoNo);
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(e){
        if( xhr.readyState == 4){
            if( xhr.status == 200){
                // document.getElementsByClassName("likeNum").innerHTML = xhr.responseText; 
                // console.log(xhr.responseText);
                document.querySelector("#likeNum"+photoNo).innerHTML = xhr.responseText; 
                // likeTime = e.target.nextSibling.innerHTML;
                // likeTime = document.querySelector("#likeNum"+photoNo).innerHTML;
                // addlike = parseInt(likeTime)+1;
                // document.getElementById("likeNum").innerHTML = addlike;
            }
            else{
                alert( xhr.status );
            }
            
        } 
            
    }
            url = "photoDoLike.php?photoNo=" + photoNo;
            xhr.open("Get", url, true);
            xhr.send(null);
    e.target.className ='liked';
    }else{
        var photoNo = e.target.id.split("|")[1]; 
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4){
                if( xhr.status == 200){
                    // document.getElementsByClassName("likeNum").innerHTML = xhr.responseText;
                    // likeTime = document.querySelector("#likeNum"+photoNo).innerHTML;
                    // dislike = parseInt(likeTime)-1;
                    // document.getElementById("likeNum").innerHTML = dislike;
                    document.querySelector("#likeNum"+photoNo).innerHTML = xhr.responseText; 
                }
            else{
                alert( xhr.status );
            }
    
            
        }
            
        }
            url = "photoDeletLike.php?photoNo=" + photoNo;
            xhr.open("Get", url, true);
            xhr.send(null);
    e.target.className ='like';
    }
}

//上傳照片前看有沒有登入
function uploadCheck() {
  var xhr = new XMLHttpRequest();
  xhr.onload = function () {
      if (xhr.status == 200) {
          if (xhr.responseText == 'login') {
            //   alert();
            document.getElementById("photoUploadArea").style.display = 'inline-block';
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
// 顯示所有工作人員在圖上
function getAllStuffLoc(e){

    let mapboard = document.getElementById('mapboard');

    console.log( typeof globalVariable);
    console.log(globalVariable);
    console.log(globalVariable.length);

    for(let i = 0 ; i < globalVariable.length ; i++){

        console.log(globalVariable[i]["admLoc"]);

        let locationXandY = (globalVariable[i]["admLoc"]).split(",");

        let percX = locationXandY[0];
        let percY = locationXandY[1];

        // 建一個img節點
        let stuffpoint = document.createElement("img");

        // 設定point屬性
        stuffpoint.classList.add("allStuffPoint");
        stuffpoint.setAttribute("width", "50");
        stuffpoint.setAttribute("src", "images/bear_run.gif");
        stuffpoint.style.position = "absolute";
        stuffpoint.style.zIndex = "1";
        stuffpoint.style.transform ="translate(-50%,-50%)";                
        stuffpoint.style.top = percY +"%";
        stuffpoint.style.left = percX +"%";
        // 放置到地圖上
        mapboard.appendChild(stuffpoint);
    }
};

function init(){
    var like = document.getElementsByClassName("like");
    for(var i = 0; i < like.length; i++){
        like[i].addEventListener("click",clickLike,false);
    }
    var liked = document.getElementsByClassName("liked");
    for(var i = 0; i < liked.length; i++){
        liked[i].addEventListener("click",clickLike,false);
    }
    //上傳照片
    document.getElementById("uploadCheck").onclick = uploadCheck;
    document.getElementById("upFile").onchange = function(e){
        var file = e.target.files[0];
		var reader = new FileReader();
		reader.onload = function(e){
		document.getElementById("imgPreview").src = reader.result;
		}
		reader.readAsDataURL(file);
    }
    // 顯示所有工作人員在圖上
    getAllStuffLoc();

    // 瀑布流
    // $('#container').masonry({
    //     itemSelector: '.photo-item',
    //     columnWidth: 0,
    //     animate:true
    // });
}

window.addEventListener("load",init,false);

