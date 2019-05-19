function $id(id){
    return document.getElementById(id);
}	

function selectPlan(){
    // event.preventDefault();
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function (){
    if( xhr.readyState == 4){
    if( xhr.status == 200 ){
      document.getElementById("selectPlan").innerHTML = xhr.responseText;  
      
      init();

    }else{
      alert( xhr.status );
    }
  }
}
  url = "selectPlan.php?planNo=" + $id("selectPlanNo").value;
  xhr.open("Get", url, true);
  xhr.send(null);
  console.log($id("selectPlanNo").value); 
  $id("hiddenplanNo").value =$id("selectPlanNo").value;   
};
function saveNote(){
  // alert();
  console.log(document.querySelector("#noteContent").value);
  document.querySelector("#noteContent").value = document.querySelector(".ql-editor").innerHTML;
}


//註冊
function init(){
    $id("selectPlanNo").onchange = selectPlan;
    // $id("selectPlanNo").onchange = changePlan;
    $id("noteSubmitbtn").onclick = saveNote;
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