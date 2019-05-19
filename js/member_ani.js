// $(document).ready(function(){
  /*落花開始*/
  var falling = true;

  TweenLite.set("#container",{perspective:600})
  // TweenLite.set("img",{xPercent:"-50%",yPercent:"-50%"})

  var total = 30;
  var container = document.getElementById("container"),	w = window.innerWidth , h = window.innerHeight;
  
  for (i=0; i<total; i++){ 
    var Div = document.createElement('div');
    TweenLite.set(Div,{attr:{class:'dot'},x:R(0,w),y:R(-200,-150),z:R(-200,200)});
    container.appendChild(Div);
    animm(Div);
  }
  
  function animm(elm){   
    TweenMax.to(elm,R(6,15),{y:h+100,ease:Linear.easeNone,repeat:-1,delay:-15});
    TweenMax.to(elm,R(4,8),{x:'+=100',rotationZ:R(0,180),repeat:-1,yoyo:true,ease:Sine.easeInOut});
    TweenMax.to(elm,R(2,8),{rotationX:R(0,360),rotationY:R(0,360),repeat:-1,yoyo:true,ease:Sine.easeInOut,delay:-5});
  };

  function R(min,max) {return min+Math.random()*(max-min)};

  /*落花結束*/


  
  var ordStatus_index; 
  //訂單打開詳細框
  //判斷是否可評價及查看評價
  $('.currentList').click(function(){
    $(this).next('.currentListPanel').stop(true).not(':animated').slideToggle('slow'); //打開票卷內容
    $(this).find('i').toggleClass('downReset');//票卷的箭頭
    $(this).toggleClass('currentListBg') //變換票卷顏色
    ordStatus_index = $(this).parent().index();
    // console.log(ordStatus_index);
    // console.log($('.ordStatus').eq(ordStatus_index).text());
    if ($('.ordStatus').eq(ordStatus_index).text()=="1"){
    $('.Evaluation_btn').show();
    $('.Evaluation_look_btn').show();
    // console.log($('#ordStatus').text());
  }else{
    
    $('.Evaluation_btn').hide();
    $('.Evaluation_look_btn').hide();
  }  

  });
  
  var myindex;
  //打開Qrcode跳窗
  $('.qrCodeBtn').click(function(){
    myindex = $(this).parent().parent().parent().index();
    // console.log('myindex: ',myindex);
    $('#qrCodeModal').show();
    var ordNo = $('.orderNo').eq(myindex).text();
    // console.log('ordNo: ',ordNo);
    $('.qrCode_img').html(`<img src='https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://140.115.236.71/demo-projects/CD106/CD106G2/0_test/test_get.php?ordNo=${ordNo}&choe=UTF-8'></img>`)
  });

  //關掉Qrcode跳窗
  $('#qrCodeModal_close').click(function () {
    $('#qrCodeModal').hide();
  });

  //評價活動
  $('.Evaluation_btn').click(function(){
    $('#Evaluation').show();
  });

  //關掉評價燈箱
  $('#Evaluation_close').click(function(){
    // console.log("hi");
    $('#Evaluation').hide();
  });

  //打開查看評價
  $('.Evaluation_look_btn').click(function () {
    $('#EvaluationCheck').show();
  });

//關掉查看評價
$('#EvaluationCheck_close').click(function () {
  $('#EvaluationCheck').hide();
});

  //滑鼠移到火顯示
  var a,b,c;//定義變數a,b,c
  c = -1;//c給予一個初始值-1,,不然後面第1個火始終是被點亮的
  var img = $(".fire img");
  img.hover(function(){
      img.attr("src","images/member/emptyFire.png");
      a = img.index(this);
      for(b=0;b<=a;b++){
        img.eq(b).attr("src","images/member/fire.png");
      }
    },function(){
        img.attr("src","images/member/emptyFire.png")
        for(b=0;b<=c;b++){//根據最終值c值來確定點亮幾個火
          img.eq(b).attr("src","images/member/fire.png");
        }
    });

  //記錄使用者給予的火數
  $(".fire img").click(function(){ 
    c = img.index(this);
    score=c+1;
    console.log(score);
  })
 
  
  
  //輸入留言
  $('textarea').click(function(){
    // $(this).attr('rows',5).attr('cols',25);
    $(this).attr({
      rows: 6,//用逗號隔開
    });
  });

  //算剩餘字數
  var feedback_index;  
  var textMax = 150;
  $('.feedback').html(`剩餘 <span style="color:red;">${textMax}</span> 字`);
  $('.talk').keyup(function(){
    var textLength = $(this).val().length;
    var textRemaining = textMax - textLength;
    $(this).parent().siblings('.feedback').html(`剩餘 <span style="color:red;">${textRemaining}</span> 字`);

  });


  var old_src;  
  //換大頭照
  function $id(id){
    return document.getElementById(id);
  }	
     
    $id("upFile").onchange = function(e){
      old_src = $("#mem_photo").attr("src");
      // console.log(old_src);
      var file = e.target.files[0];
      var arr = ["image/png", "image/jpeg"];
      console.log( file.type);
      if( arr.indexOf(file.type) == -1){
        alert("format error");
        return;
      }
      
      //if( file.type )

      var reader = new FileReader();
      reader.readAsDataURL(file);
      
      reader.onload = function(e){//換圖
        $id("mem_photo").src = reader.result;
        $("#confirm_photo").show();
        // console.log($id("mem_photo").src);
        $('#confirm_photo_content_yes').click(function(){ 
          // console.log("hi");
          $('#confirm_photo').hide();
          $("#confirm_psw").show();
          var xhr = new XMLHttpRequest();
          xhr.onload=function (){
            if( xhr.status == 200 ){
              // $id("showPanel").innerHTML = xhr.responseText;
              console.log(xhr.responseText);
            }else{
              alert( xhr.status );
            }
          }
          
          var myData = new FormData( $id("fileUpload") );
        
          var url = "php/fileUpload.php";
          xhr.open("Post", url, true);
          xhr.send( myData );
        });
      }
      
    }

    //不換大頭照
    $('#confirm_photo_close').click(function () {
      $("#mem_photo").attr("src", old_src);
      $('#confirm_photo').hide(); 
    });
    
    //關掉修改成功燈箱
    $('#confirm_close').click(function () {
      $('#confirm_psw').hide();
    });


  //修改密碼
  $('#member_send').click(function(){
      if($('#newpsdagain').val() != $('#newpsd').val()){
        $('#warning').text("密碼不一致");
      }else if($('#newpsdagain').val() != "" && $('#newpsd').val() != ""){
        console.log("here");
        $('#warning').text("密碼一致");
        $.ajax({
          url: './php/member_info.php',
          type: 'GET',
          data:{
            oldpsd:$('#oldpsd').val(),
            newpsd:$('#newpsd').val()
          },
          success: function(response) {
            console.log(response);
            if(response=="修改密碼成功!"){
              $('#confirm_psw').show();
              $('#confirm_close').click(function(){
                $('#confirm_psw').hide();
              });
            }else{
              $('#warning').text(response);
            }
            // window.alert(response);
            // var psd = JSON.parse(response);
            // console.log(psd['memPsw']);
            // if($('#oldpsd').val() == psd['memPsw']){
            //   console.log("ok");
            },
          
          error: function(xhr) {
            alert(xhr.status);
          },
      });
    }
  }); 

var index;
//打開刪除行程燈箱
$('.delete_plan').click(function () {
  index = $(this).parent().parent().index();
  // console.log('before delete plan val: ', $(".delete_plan").eq(index).val());
  $('#confirm_plan').show();
});

//關閉刪除行程燈箱
$('#confirm_plan_close').click(function () {
  $('#confirm_plan').hide();
});

//刪除行程
$('#confirm_plan_content_yes').click(function () {
  $('#confirm_plan').hide();
  // console.log('delete plan val: ',$(".delete_plan").eq(index).val());
  $.ajax({
    url: 'php/member_plan.php',
    type: 'GET',
    data: {
      planNo: $(".delete_plan").eq(index).val(),
    },
    success: function (response) {
      console.log(response);
      if (response == "已刪除") {
        $('.delete_plan').eq(index).parent().parent().remove();
      }
    },
// closest('.planBorder')
    error: function (xhr) {
      alert(xhr.status);
    },
  });


});


var note_index;
//打開刪除手札燈箱
$('.delete_note').click(function () {
  note_index = $(this).parent().parent().index();
  // console.log(note_index);
  $('#confirm_note').show();
});

//關閉刪除手札燈箱
$('#confirm_note_close').click(function () {
  $('#confirm_note').hide();
});


//刪除手札
$('#confirm_note_content_yes').click(function () {
  $('#confirm_note').hide();
  // console.log($(".blog_note").eq(note_index).text());
  $.ajax({
    url: 'php/member_note.php',
    type: 'GET',
    data: {
      planNo_note: $(".blog_note").eq(note_index).text(),
    },
    success: function (response) {
      console.log(response);
      if (response == "已刪除") {
        $('.delete_note').eq(note_index).parent().parent().remove();
      }
    },
    // closest('.planBorder')
    error: function (xhr) {
      alert(xhr.status);
    },
  });


});



// })