               
               function init(){
               var copybtn=document.getElementById("copybtn");
                
               copybtn.addEventListener("click",function(){
               // var copyurl = document.getElementById("copyurl");
               // console.log(copyurl);
              
               document.getElementById("copyurl").select();
               if (document.execCommand('copy')) {
                  document.execCommand('copy');
                  console.log('成功');
               }
               document.getElementById("copyok").style.display="inline-block"; 
           
               setTimeout(function(){ document.getElementById("copyok").style.display="none";  }, 3000);
               });  
            }
               window.addEventListener('load',init);