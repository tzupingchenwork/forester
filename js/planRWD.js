countEntPrice = 0;
var controller = new ScrollMagic.Controller();
var a ="";

//步驟緩衝出現
var plan_container_staggerFromTo = TweenMax.staggerFromTo('.plan_container_staggerFromTo', 1, {
    y: 0,
    alpha: 0
}, {
    y: 30,
    alpha: 1
}, .2)

var plan_screen = new ScrollMagic.Scene({
        triggerElement: "#desk_plan_div",
        reverse: false,
        offset: 900,
        // triggerHook: 0

    }).setTween(plan_container_staggerFromTo)
    .addIndicators()
    .addTo(controller)

//背景熱氣球
TweenMax.to('#bg_airballoon',30,{
    right: '80%',
    top: '1500px',
    repeat: -1,
    yoyo: true,
});

TweenMax.to('#bg_cloud',40,{
    left: '1900px',
    top: '2000px',
    repeat: -1,
});

TweenMax.to('#bg_airballoon2',20,{
    right: '60%',
    top: '3500px',
    repeat: -1,
    yoyo: true,
});

TweenMax.to('#bg_cloud2',30,{
    left: '-1000px',
    top: '3800px',
    repeat: -1,
});

TweenMax.to('#bg_airballoon3',15,{
    right: '80%',
    top: '5000px',
    repeat: -1,
    yoyo: true,
});


//拖拉 //
// $(function(){

//     $('.event-detail-box').draggable({
//         appenTo: "parent",
//         helper: "clone",
//     });

//     $('.event-drop-area').droppable({
//         activeClass: "ui-state-default",
//         hoverClass: "ui-state-hover",
//         accept: ":not(.ui-sortable-helper)",
//         drop: function(event, ui){

//             $('<div></div>').addClass('eventItem').html(ui.draggable.html()).appendTo(this);
//             $('table').remove('.eventItem .allPlan-value-table');
//             $('div').remove('.eventItem .value-pic-box');
//             $('.eventItem .event-txt-box').css({
//                 width: '48%',
//                 marginLeft: '2%',
//             });
//             $('.eventItem .event-cover').css({
//                 width:'50%',
//                 overflow: 'hidden',
//             });
//             $('.eventItem .event-cover img').css({
//                 width:'110%',
//             });
//             $('.eventItem .event-hour-price').css({
//                 fontFamily: '微軟正黑體',
//                 fontSize: '15px',
//                 color: '#232323',
//                 letterSpacing: '1.5',
//                 lineHeight: '1.5',
//                 marginLeft: '2%',
//             });
//             $('.eventItem').css({
//                 width: '88%',
//                 height: '100px',
//                 border: '5px solid black',
//                 borderRadius: '13px',
//                 cursor: 'default',
//                 margin: '5% 2%',
//                 padding: '2%',
//                 position: 'relative',
//                 display: 'flex',
//             });
//             $('.event-txt-box h4').css({
//                 fontFamily: '微軟正黑體',
//                 fontSize: '24px',
//                 color: '#718cc6',
//                 fontWeight: 'bold',
//                 letterSpacing: '1.5',
//                 margin: '2%',
//             });

            //checkPrice
            // var priceTotal = 0;
            // var priceAmount = document.querySelectorAll('.eventItem .event-price');
            // for( i = 0; i < priceAmount.length; i++){
            //     var checkPrice = $(this).find('.eventItem').eq(i).find('.event-price').text();
            //     priceTotal += parseInt(checkPrice);
            // }
            // console.log(checkPrice);
            // document.getElementById('event_price').innerText = priceTotal;
            // document.getElementById('myEventPrice').value = priceTotal;

            //checkHour
            // var hourTotal = 0;
            // var hourAmount = document.querySelectorAll('.eventItem .event-hour');
            // for( i = 0; i < hourAmount.length; i++){
            //     var checkHour = $(this).find('.eventItem').eq(i).find('.event-hour').text();
            //     hourTotal += parseInt(checkHour);
            // }
                // console.log(checkPrice);
            //     document.getElementById('event_hour').innerText = hourTotal;
            //     document.getElementById('myEventHour').value = hourTotal;

            // $('.eventItem').hover(function(){
            //     $(this).find('.fas.fa-trash-alt').css('display','block');
            // },function(){
            //     $(this).find('.fas.fa-trash-alt').css('display','none');
            // });

            // $('.eventItem .fas.fa-trash-alt').click(function(e){
            //     var event_drop_zone = document.getElementById('event_drop_zone');
            //     var trash = e.target;

             //...................   
                // var prevPrice = $(this).parents('event-detail-box').find('.event-price').text();
                // console.log($(this).hasClass('event-detail-box'));
                // priceTotal -= parseInt(prevPrice);

                // document.getElementById('event_price').innerText = priceTotal;
                // document.getElementById('myEventPrice').value = priceTotal;
                // $(this).parent('.eventItem').remove();
            //................... 
            
            //抓dropZone裡的價格
//             var prevPrice = trash.previousElementSibling.querySelector(".event-price").innerText;
//             // console.log(prevPrice)
//             priceTotal -= parseInt(prevPrice);
//             document.getElementById('event_price').innerText = priceTotal;

//             var prevHour = trash.previousElementSibling.querySelector(".event-hour").innerText;
//             console.log(prevHour)
//             hourTotal -= parseInt(prevHour);
//             document.getElementById('event_hour').innerText = hourTotal;

//             $(this).parent('.eventItem').remove();
//             });
//         }
//     }).sortable({
//         sort: function(){
//             $(this).removeClass('ui-state-default');
//         }
//     });
// });


//點小圖換大圖--RWD //ok!
var imgs = document.querySelectorAll('.small_cover_pic img');
var cover_check = document.getElementById('cover_check');
for (var i = 0; i < imgs.length; i++){
imgs[i].addEventListener('click',function(e){
    cover_check.src = e.target.src.replace('small','big');
    })
}


//剩餘字數 //ok!
$(document).ready(function(){
    var textMax = 15;
    $('#textFeedback').text(`${textMax}`);

    $('#plan_name').keyup(function(){
        var textLength = $(this).val().length;
        var textRemain = textMax - textLength;

        $('#textFeedback').text(`${textRemain}`);
    })
});

//上傳圖片確認副檔名  //ok!
var uploadBtn = document.getElementById('upload_cover_pic');
uploadBtn.addEventListener('change',function(e){
    var picStr = uploadBtn.value;
    var picName, picExt;
    var picType = ['bmp', 'jpg', 'png', 'gif'];

    console.log(picStr);

    var dotPos = picStr.lastIndexOf('.');
    var slashPos = picStr.lastIndexOf('\\');

    picName = picStr.substring(slashPos+1,dotPos);
    picExt = picStr.substr(dotPos+1);

    if( picType.indexOf(picExt) == -1 ){
        alert('請重新上傳格式為bmp、jpg、png或gif的圖片檔案喔！')
        e.preventDefault();
        e.target.value="";
    }
});

//篩選霸--手機 //ok!!
//親子值
$(function() {
    $('#family-range').slider({
        range: false,
        min: 0,
        max: 3,
        values: [ 2 ],
        slide: function( event, ui ) {
    $('#amount-family').val(ui.values[ 0 ]);
    }
});
    $('#amount-family').val($('#family-range').slider('values', 0 ));
});

//手作值
$(function() {
    $('#handmade-range').slider({
        range: false,
        min: 0,
        max: 3,
        values: [ 2 ],
        slide: function( event, ui ) {
    $('#amount-handmade').val(ui.values[ 0 ]);
    }
});
    $('#amount-handmade').val($('#handmade-range').slider('values', 0 ));
});

//求生值
$(function() {
    $('#survive-range').slider({
        range: false,
        min: 0,
        max: 3,
        values: [ 2 ],
        slide: function( event, ui ) {
    $('#amount-survive').val(ui.values[ 0 ]);
    }
});
    $('#amount-survive').val($('#survive-range').slider('values', 0 ));
});


$(function(){
    familyRange = 2;
    handmadeRange = 2;
    surviveRange = 2;

    $('#family-range').slider({
        change: function (e, ui) { 
            familyRange = ui.values[ 0 ];
            autoChangeEvent();
        } 
    });
    $('#handmade-range').slider({
        change: function (e, ui) {
            handmadeRange = ui.values[ 0 ];
            autoChangeEvent();
        } 
    });
    $('#survive-range').slider({
        change: function (e, ui) {
            surviveRange = ui.values[ 0 ];
            autoChangeEvent();
        } 
    });
});


//AJAX //依篩選霸結果抓資料
function autoChangeEvent(){
    // console.log(1);
    // console.log(familyRange+" "+ handmadeRange+" "+ surviveRange);

    var xhr = new XMLHttpRequest();
    xhr.addEventListener('load', (e) => {
        if (xhr.status == 200){
            document.getElementsByClassName('event-detail-group')[0].innerHTML=xhr.responseText;
            // console.log(xhr.responseText);
            // draggable();
            //=======================顯示活動燈箱
            $('.event-detail-box #eventName').click(function(e){
                // console.log('hi');
                var xhr = new XMLHttpRequest();
                xhr.addEventListener('load', (e) => {
                    if (xhr.status == 200){
                        $('#infoContainer').show();
                        document.getElementById('infoContainer').innerHTML = xhr.responseText;
                        $('#Lightbox2_close').click(function(){
                            $('#infoContainer').hide();
                        });
                    }else{
                        alert(xhr.status);
                    }
                });
                xhr.open("GET", "plan_eventPop.php?entNo="+ $(this).next('input').val(), true);
                xhr.send(null);
            });
            //=======================顯示活動燈箱

            //=======================收藏資料
            // var entAmt = 1;
            // $('#showNumber').text(0);
            $('.event-hour-price').click(function(){
                // console.log('hi')
                // console.log($(this.parentNode).find('#eventName').text())
                // console.log($(this).text())
                var entName = $(this.parentNode).find('#eventName').text();
                var entPrice = $(this).find('.event-price').text();
                console.log(entPrice);
                            
                $.ajax({
                    url: "addEventAction.php",
                    data: {
                        entNo: $(this.parentNode).find('input[type=hidden]').val(),
                        // entPrice: $(this).text(),
                    },
                    type:"GET",
                    dataType:'text',

                    success: function(data){
                        if (data == 'false') {
                            alert('你已經加入過此活動囉！');

                        }else {
                            $('#showNumber').text(entAmt++);
                            var table = document.querySelector('.showEventTable');
                            var tr = document.createElement('tr');
                            tr.innerHTML = `<td>${entName}</td><td>${entPrice}</td>`;
                            table.appendChild(tr);
                            countEntPrice += parseInt(entPrice);
                            // $('#myEventPrice').val() = parseInt(countEntPrice);

                        }
                    },
                    error:function(xhr, ajaxOptions, thrownError){ 
                        alert(xhr.status); 
                        alert(thrownError); 
                    }
                })
            });
            //=======================收藏資料
        }else{
            alert(xhr.status);
        }
    });
    xhr.open("GET", "plan_autoChangeEventRWD.php?familyRange=" + familyRange + "&handmadeRange="+ handmadeRange + "&surviveRange=" + surviveRange, true);
    xhr.send(null);
}


//AJAX //依最新活動結果抓資料
var eventNewest = document.getElementById('eventNewest');
eventNewest.addEventListener('click',function(){
    var xhr = new XMLHttpRequest();
    xhr.addEventListener('load', (e) => {
        if (xhr.status == 200){
            document.getElementsByClassName('event-detail-group')[0].innerHTML=xhr.responseText;
            //=======================顯示活動燈箱
            $('.event-detail-box #eventName').click(function(e){
                var xhr = new XMLHttpRequest();
                xhr.addEventListener('load', (e) => {
                    if (xhr.status == 200){
                        $('#infoContainer').show();
                        document.getElementById('infoContainer').innerHTML = xhr.responseText;
                        $('#Lightbox2_close').click(function(){
                            $('#infoContainer').hide();
                        });
                    }else{
                        alert(xhr.status);
                    }
                });
                xhr.open("GET", "plan_eventPop.php?entNo="+ $(this).next('input').val(), true);
                xhr.send(null);
            });
            //=======================顯示活動燈箱

            //=======================收藏資料
            $('.event-hour-price').click(function(){
                var entName = $(this.parentNode).find('#eventName').text();
                var entPrice = $(this).find('.event-price').text();
                            
                $.ajax({
                    url: "addEventAction.php",
                    data: {
                        entNo: $(this.parentNode).find('input[type=hidden]').val(),
                    },
                    type:"GET",
                    dataType:'text',
            
                    success: function(data){
                        if (data == 'false') {
                            alert('你已經加入過此活動囉！');
                        }else {
                            $('#showNumber').text(entAmt++);
                            var table = document.querySelector('.showEventTable');
                            var tr = document.createElement('tr');
                            tr.innerHTML = `<td>${entName}</td><td class="entPriceTd">${entPrice}</td>`;
                            table.appendChild(tr);
                            countEntPrice += parseInt(entPrice);
                        }
                    },
                    error:function(xhr, ajaxOptions, thrownError){ 
                        alert(xhr.status); 
                        alert(thrownError); 
                    }
                })
            });
            //=======================收藏資料
            
        }else{
            alert(xhr.status);
        }
    });
    xhr.open("GET", "plan_changeEventNewestRWD.php", true);
    xhr.send(null);
});

//AJAX //依熱門活動結果抓資料
var eventHotest = document.getElementById('eventHotest');
eventHotest.addEventListener('click',function(){
    // console.log('hi');
    var xhr = new XMLHttpRequest();
    xhr.addEventListener('load', (e) => {
        if (xhr.status == 200){
            document.getElementsByClassName('event-detail-group')[0].innerHTML=xhr.responseText;
            // console.log(xhr.responseText);
            // draggable();
            // var eventName = document.getElementById('eventName');
            // eventName.addEventListener('click', popEvent);

            //=======================顯示活動燈箱
            $('.event-detail-box #eventName').click(function(e){
                // console.log('hi');
                var xhr = new XMLHttpRequest();
                xhr.addEventListener('load', (e) => {
                    if (xhr.status == 200){
                        $('#infoContainer').show();
                        document.getElementById('infoContainer').innerHTML = xhr.responseText;
                        $('#Lightbox2_close').click(function(){
                            $('#infoContainer').hide();
                        });
                    }else{
                        alert(xhr.status);
                    }
                });
                xhr.open("GET", "plan_eventPop.php?entNo="+ $(this).next('input').val(), true);
                xhr.send(null);
            });
            //=======================顯示活動燈箱

            //=======================收藏資料
            // var entAmt = 1;
            // $('#showNumber').text(0);
            $('.event-hour-price').click(function(){
                // console.log('hi')
                // console.log($(this.parentNode).find('#eventName').text())
                // console.log($(this).text())
                var entName = $(this.parentNode).find('#eventName').text();
                var entPrice = $(this).find('.event-price').text();
                            
                $.ajax({
                    url: "addEventAction.php",
                    data: {
                        entNo: $(this.parentNode).find('input[type=hidden]').val(),
                        // entPrice: $(this).text(),
                    },
                    type:"GET",
                    dataType:'text',
            
                    success: function(data){
                        if (data == 'false') {
                            alert('你已經加入過此活動囉！');
                        }else {
                            $('#showNumber').text(entAmt++);
                            var table = document.querySelector('.showEventTable');
                            var tr = document.createElement('tr');
                            tr.innerHTML = `<td>${entName}</td><td class="entPriceTd">${entPrice}</td>`;
                            table.appendChild(tr);
                            countEntPrice += parseInt(entPrice);
                            // $('#myEventPrice').val() = parseInt(countEntPrice);
                        }
                    },
                    error:function(xhr, ajaxOptions, thrownError){ 
                        alert(xhr.status); 
                        alert(thrownError); 
                    }
                })
            });
            //=======================收藏資料
            
        }else{
            alert(xhr.status);
        }
    });
    xhr.open("GET", "plan_changeEventHotestRWD.php", true);
    xhr.send(null);
});


//AJAX //點選活動顯示活動介紹燈箱
$('.event-detail-box #eventName').click(function(e){
    var xhr = new XMLHttpRequest();
    xhr.addEventListener('load', (e) => {
        if (xhr.status == 200){
            $('#infoContainer').show();
            document.getElementById('infoContainer').innerHTML = xhr.responseText;
            $('#Lightbox2_close').click(function(){
                $('#infoContainer').hide();
            });
        }else{
            alert(xhr.status);
        }
    });
    xhr.open("GET", "plan_eventPop.php?entNo="+ $(this).next('input').val(), true);
    xhr.send(null);
});


//收藏資料
var entAmt = 1;
$('#showNumber').text(0);

$('.addToCart').click(function(){

    //取得活動編號
    console.log($(this.parentNode.parentNode).find('input[type=hidden]').val());
    //取得活動名稱
    console.log($(this.parentNode.parentNode).find('#eventName').text());
    var entName = $(this.parentNode.parentNode).find('#eventName').text();
    //取得活動價格
    console.log($(this).prev().text());
    var entPrice = $(this).prev().text();

    // var table = document.querySelector('.showEventTable');
    // var tr = document.createElement('tr');
    // tr.innerHTML = `<td>${entName}</td><td>${entPrice}</td>`;
    // table.appendChild(tr);

    // $('#myEventPrice').val() = parseInt(countEntPrice);
    
    $.ajax({
        url: "addEventAction.php",
        data: {
            entNo: $(this.parentNode.parentNode).find('input[type=hidden]').val(),
            // entPrice: $(this).prev().text(),
        },
        type:"GET",
        dataType:'text',

        //============還沒想好底下的
        success: function(data){
            if (data == 'false') {
                alert('你已經加入過此活動囉！');
            }else {
                $('#showNumber').text(entAmt++);

                var table = document.querySelector('.showEventTable');
                var tr = document.createElement('tr');
                tr.innerHTML = `<td>${entName}</td><td class="entPriceTd">${entPrice}</td>`;
                table.appendChild(tr);
                countEntPrice += parseInt(entPrice);
                console.log(countEntPrice);
                // $('#myEventPrice').val() = countEntPrice;
            }
        },

        error:function(xhr, ajaxOptions, thrownError){ 
            alert(xhr.status); 
            alert(thrownError); 
        }
    })

});

//顯示自選圖片
var uploadCover = document.getElementById('upload_cover_pic');

uploadCover.addEventListener('change',function(e){
        var reader = new FileReader();
        reader.addEventListener('load',function(){
            var planCover = document.getElementById('cover_check');
            planCover.src = reader.result;
        });
        reader.readAsDataURL(event.target.files[0]);
});

if( document.getElementById('upload_cover_pic').files.length == 0){
    var filename = document.getElementById('cover_check').src.split("/").pop();
    console.log(filename);
    var picSelected = document.getElementById('picSelected');
    picSelected.value = filename;
}else{
    var filename = document.getElementById('upload_cover_pic').files[0].name;
    console.log(filename);
    var picSelected = document.getElementById('picSelected');
    picSelected.value = filename;
}

//給entPrice值
$('#btn_confirm_and_buy_ticket').click(function(){

    $('#totalPrice').val(parseInt(countEntPrice)) ;
});

//收藏資料顯示框
$('#fixedAddCart').click(function(){
    $('.showEventDiv').animate({right:'toggle'});
});






