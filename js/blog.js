function $id(id){
    return document.getElementById(id);
}

function addCheck() {
    var xhr = new XMLHttpRequest();
    xhr.onload = function () {
        if (xhr.status == 200) {
            if (xhr.responseText == 'login') {
                // alert();
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
//寫手札前看有沒有登入
function checkSession() {
  var xhr = new XMLHttpRequest();
  xhr.onload = function () {
      if (xhr.status == 200) {
          console.log(xhr.responseText);
          if (xhr.responseText == 'login') {
              window.location.href = 'blogShare.php';
          }else if (xhr.responseText == 'noplan') {
            alert('快去新增行程吧');
        }else if (xhr.responseText == 'logout') {
            alert('請登入會員');
          }
      } else {
          alert(xhr.status);
      }
  }
//   url = "BlogWriteSession.php";
  url = 'session.php';
  xhr.open("Get", url, true);
  xhr.send(null);
};
//最新
function sendFormShare(){
    // event.preventDefault();
    $id('NewShare').style.color='red';
    $id('NewShare').style.backgroundColor='yellow';
    $id('HighScore').style.color='gray';
    $id('HighScore').style.backgroundColor='black';
      var xhr = new XMLHttpRequest();
    //   alert('share');
      xhr.onreadystatechange = function (){
        if( xhr.readyState == 4){
        if( xhr.status == 200 ){
          $id("container").innerHTML = xhr.responseText;
          console.log(xhr.responseText);
          //按讚
          $id("addCheck").onclick = function clickLike(e){
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
        
        // //   瀑布流
        //   $('#container').masonry({
        //     itemSelector: '.blog-item',
        //     columnWidth: 0,
        //     animate:true
        // });
            
            init();

        }else{
          alert( xhr.status );
        }
      }
  }
      xhr.open("post", "blogNewShare.php", true);
      xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
      
      var data;
      xhr.send(data);    
    }


//最熱門
function sendFormScore(){
    // event.preventDefault();
    $id('HighScore').style.color='red';
    $id('HighScore').style.backgroundColor='yellow';
    $id('NewShare').style.color='gray';
    $id('NewShare').style.backgroundColor='black';
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function (){
    if( xhr.readyState == 4){
    if( xhr.status == 200 ){
      $id("container").innerHTML = xhr.responseText;
      console.log(xhr.responseText);
      //按讚
      $id("addCheck").onclick = function clickLike(e){
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
      //瀑布流
    //   $('#container').masonry({
    //     itemSelector: '.blog-item',
    //     columnWidth: 0,
    //     animate:true
    // });
      init();

    }else{
      alert( xhr.status );
    }
  }
}
  xhr.open("post", "blogHighScore.php", true);
  xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
  
  var data;
  xhr.send(data);    
}

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
    $id("addCheck").onclick = addCheck;
    $id("blogShareBtn").onclick =checkSession;
    $id("HighScore").onclick = sendFormScore;
    $id("NewShare").onclick = sendFormShare;
//     $('#container').masonry({
//             itemSelector: '.blog-item',
//             columnWidth: 0,
//             animate:true
//         });

//熱門活動燈箱
$('.blogRanking-event').click(function(e){
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
//瀑布流活動燈箱
$('.event-item').click(function(e){
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
}
window.addEventListener('load',init);
