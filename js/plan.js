// import { mkdir, copyFile } from "fs";

// import { get } from "https";

var controller = new ScrollMagic.Controller();

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
    // .addIndicators()
    .addTo(controller)


//左樹木出現
TweenMax.to('#head_trunk_left', 1, {
    opacity: 1, 
    top: '28%',
    // transformOrigin: '50% 50%', 
    // scale:0, 
    ease: Back.easeOut
},2);

//左樹葉出現
TweenMax.to('#head_tree_left_leaf', 1.2, {
    opacity: 1, 
    left: '3%',
    // transformOrigin: '50% 50%', 
    ease: Sine.easeOut
},'-=1');

//右樹木出現
TweenMax.to('#head_trunk_right', 1.3, {
    opacity: 1, 
    right: '8%',
    // transformOrigin: '50% 50%', 
    // scale:0, 
    ease: Cubic.easeOut
},3);

//右樹葉出現
TweenMax.to('#head_tree_right_leaf', 1.5, {
    opacity: 1, 
    right: '5%',
    // transformOrigin: '50% 50%', 
    // scale:0, 
    ease: Sine.easeOut
},'-=1');


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
$(document).ready(function(){

    $('.event-detail-box').draggable({
        appenTo: "parent",
        helper: "clone",
    });

    //.........

    //.........
    $('.event-drop-area').droppable({
        activeClass: "ui-state-default",
        hoverClass: "ui-state-hover",
        accept: ":not(.ui-sortable-helper)",
        drop: function(event, ui){

                    //  console.log(event)
            //==========================地圖================================
            // setStuffLoc();
            

            //==========================地圖================================

            $('<div></div>').addClass('eventItem').html(ui.draggable.html()).appendTo(this);

            
            // ==========================================================
            let inputVal = $(this).find('.event-txt-box > input[type=hidden]:last').val();
            $(this).find('.event-txt-box > input[type=hidden]:last').attr('name', inputVal);

             // ==========================================================


            $('table').remove('.eventItem .allPlan-value-table');
            $('div').remove('.eventItem .value-pic-box');
            $('.eventItem .event-txt-box').css({
                width: '48%',
                marginLeft: '2%',
            });
            $('.eventItem .event-cover').css({
                width:'50%',
                overflow: 'hidden',
            });
            $('.eventItem .event-cover img').css({
                width:'110%',
            });
            $('.eventItem .event-hour-price').css({
                fontFamily: '微軟正黑體',
                fontSize: '15px',
                color: '#232323',
                letterSpacing: '1.5',
                lineHeight: '1.5',
                marginLeft: '2%',
            });
            $('.eventItem').css({
                width: '88%',
                height: '100px',
                border: '5px solid black',
                borderRadius: '13px',
                cursor: 'default',
                margin: '5% 2%',
                padding: '2%',
                position: 'relative',
                display: 'flex',
            });
            $('.event-txt-box h4').css({
                fontFamily: '微軟正黑體',
                fontSize: '24px',
                color: '#718cc6',
                fontWeight: 'bold',
                letterSpacing: '1.5',
                margin: '2%',
            });





            //checkPrice
            var priceTotal = 0;
            var priceAmount = document.querySelectorAll('.eventItem .event-price');
            for( i = 0; i < priceAmount.length; i++){
                var checkPrice = $(this).find('.eventItem').eq(i).find('.event-price').text();
                priceTotal += parseInt(checkPrice);
            }
            // console.log(checkPrice);
            document.getElementById('event_price').innerText = priceTotal;
            document.getElementById('myEventPrice').value = priceTotal;

            //checkHour
            var hourTotal = 0;
            var hourAmount = document.querySelectorAll('.eventItem .event-hour');
            for( i = 0; i < hourAmount.length; i++){
                var checkHour = $(this).find('.eventItem').eq(i).find('.event-hour').text();
                hourTotal += parseInt(checkHour);
            }
                // console.log(checkPrice);
                document.getElementById('event_hour').innerText = hourTotal;
                // document.getElementById('myEventHour').value = hourTotal;

            $('.eventItem').hover(function(){
                $(this).find('.fas.fa-trash-alt').css('display','block');
                // console.log('hi');
                $(this).css('background-color','#d0dbe0');
            },function(){
                $(this).find('.fas.fa-trash-alt').css('display','none');
                $(this).css('background-color','white');

            });

            // alert($(ui.draggable).find('.eventLoc').val());
            insertEventLoc($(ui.draggable).find('.eventLoc').val());

            $('.eventItem .fas.fa-trash-alt').click(function(e){
                var event_drop_zone = document.getElementById('event_drop_zone');
                var trash = e.target;
            
            //抓dropZone裡的價格
            var prevPrice = trash.previousElementSibling.querySelector(".event-price").innerText;
            // console.log(prevPrice)
            priceTotal -= parseInt(prevPrice);
            document.getElementById('event_price').innerText = priceTotal;

            var prevHour = trash.previousElementSibling.querySelector(".event-hour").innerText;
            // console.log(prevHour)
            hourTotal -= parseInt(prevHour);
            document.getElementById('event_hour').innerText = hourTotal;

            //刪掉座標
            console.log(e.target.parentNode);
            removeEventLoc(e.target.parentNode);

            $(this).parent('.eventItem').remove();
            });

        }


    }).sortable({
        sort: function(){
            $(this).removeClass('ui-state-default');
        }
    });
});




//點小圖換大圖--桌機 //ok!
var imgs = document.querySelectorAll('.dt_small_cover_pic img');
var cover_check = document.getElementById('dt_cover_check');
for (var i = 0; i < imgs.length; i++){
imgs[i].addEventListener('click',function(e){
    cover_check.src = e.target.src.replace('small','big');
    cover_check.style.width = '100%';
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

    // console.log(picStr);

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


//篩選霸--桌機 //ok!
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


//抓篩選霸資料
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
    // console.log(familyRange+" "+ handmadeRange+" "+ surviveRange);

    var xhr = new XMLHttpRequest();
    xhr.addEventListener('load', (e) => {
        if (xhr.status == 200){
            document.getElementsByClassName('event-detail-group')[0].innerHTML=xhr.responseText;
            // console.log(xhr.responseText);
            draggable();
            //==========================================
            //AJAX //點選活動顯示活動介紹燈箱
            $('.event-detail-group .event-detail-box').click(function(e){
                console.log($(this).find('.eventNo').val());

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

                xhr.open("GET", "plan_eventPop.php?entNo="+ $(this).find('.eventNo').val(), true);
                xhr.send(null);
            });
            //==========================================

        }else{
            alert(xhr.status);
        }
    });
    xhr.open("GET", "plan_autoChangeEvent.php?familyRange=" + familyRange + "&handmadeRange="+ handmadeRange + "&surviveRange=" + surviveRange, true);
    xhr.send(null);
}

//拖拉 //
function draggable(){

    $('.event-detail-box').draggable({
        appenTo: "parent",
        helper: "clone",
    });

    $('.event-drop-area').droppable({
        activeClass: "ui-state-default",
        hoverClass: "ui-state-hover",
        accept: ":not(.ui-sortable-helper)",
        drop: function(event, ui){

            $('<div></div>').addClass('eventItem').html(ui.draggable.html()).appendTo(this);
            // ==========================================================

            let inputVal = $(this).find('.event-txt-box > input[type=hidden]:last').val();
            $(this).find('.event-txt-box > input[type=hidden]:last').attr('name', inputVal);

             // ==========================================================

            $('table').remove('.eventItem .allPlan-value-table');
            $('div').remove('.eventItem .value-pic-box');


            $('.eventItem .event-txt-box').css({
                width: '48%',
                marginLeft: '2%',
            });
            $('.eventItem .event-cover').css({
                width:'50%',
                overflow: 'hidden',
            });
            $('.eventItem .event-cover img').css({
                width:'110%',
            });
            $('.eventItem .event-hour-price').css({
                fontFamily: '微軟正黑體',
                fontSize: '15px',
                color: '#232323',
                letterSpacing: '1.5',
                lineHeight: '1.5',
                marginLeft: '2%',
            });
            $('.eventItem').css({
                width: '88%',
                height: '100px',
                border: '5px solid black',
                borderRadius: '13px',
                cursor: 'default',
                margin: '5% 2%',
                padding: '2%',
                position: 'relative',
                display: 'flex',
            });
            $('.event-txt-box h4').css({
                fontFamily: '微軟正黑體',
                fontSize: '24px',
                color: '#718cc6',
                fontWeight: 'bold',
                letterSpacing: '1.5',
                margin: '2%',
            });

            //checkPrice
            var priceTotal = 0;
            var priceAmount = document.querySelectorAll('.eventItem .event-price');
            for( i = 0; i < priceAmount.length; i++){
                var checkPrice = $(this).find('.eventItem').eq(i).find('.event-price').text();
                priceTotal += parseInt(checkPrice);
            }
            // console.log(checkPrice);
            document.getElementById('event_price').innerText = priceTotal;
            document.getElementById('myEventPrice').value = priceTotal;

            //checkHour
            var hourTotal = 0;
            var hourAmount = document.querySelectorAll('.eventItem .event-hour');
            for( i = 0; i < hourAmount.length; i++){
                var checkHour = $(this).find('.eventItem').eq(i).find('.event-hour').text();
                hourTotal += parseInt(checkHour);
            }
                // console.log(checkPrice);
                document.getElementById('event_hour').innerText = hourTotal;
                // document.getElementById('myEventHour').value = hourTotal;

            $('.eventItem').hover(function(){
                $(this).find('.fas.fa-trash-alt').css('display','block');
                // console.log('hi');
                $(this).css('background-color','#d0dbe0');
            },function(){
                $(this).find('.fas.fa-trash-alt').css('display','none');
                $(this).css('background-color','white');
            });

            insertEventLoc($(ui.draggable).find('.eventLoc').val());
            console.log($(ui.draggable).find('.eventLoc').val());
            $('.eventItem .fas.fa-trash-alt').click(function(e){
                var event_drop_zone = document.getElementById('event_drop_zone');
                var trash = e.target;
            
            //抓dropZone裡的價格
            var prevPrice = trash.previousElementSibling.querySelector(".event-price").innerText;
            // console.log(prevPrice)
            priceTotal -= parseInt(prevPrice);
            document.getElementById('event_price').innerText = priceTotal;

            var prevHour = trash.previousElementSibling.querySelector(".event-hour").innerText;
            // console.log(prevHour)
            hourTotal -= parseInt(prevHour);
            document.getElementById('event_hour').innerText = hourTotal;

            removeEventLoc(e.target.parentNode);

            $(this).parent('.eventItem').remove();
            });
        }
    }).sortable({
        sort: function(){
            $(this).removeClass('ui-state-default');
        }
    });
}

//AJAX //依最新活動-熱門活動結果抓資料
var listPlan = document.getElementById('list-plan');
listPlan.addEventListener('change',changeEventNewest);

function changeEventNewest(){
    console.log(1);
    var xhr = new XMLHttpRequest();
    xhr.addEventListener('load', (e) => {
        if (xhr.status == 200){
            document.getElementsByClassName('event-detail-group')[0].innerHTML=xhr.responseText;
            // console.log(xhr.responseText);
            draggable();
            //==========================================
            //AJAX //點選活動顯示活動介紹燈箱
            $('.event-detail-group .event-detail-box').click(function(e){
                console.log($(this).find('.eventNo').val());

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

                xhr.open("GET", "plan_eventPop.php?entNo="+ $(this).find('.eventNo').val(), true);
                xhr.send(null);
            });
            //==========================================
        }else{
            alert(xhr.status);
        }
    });
    xhr.open("GET", "plan_changeEventNewest.php?list-plan="+ document.getElementById('list-plan').value, true);
    xhr.send(null);
}

//AJAX //點選活動顯示活動介紹燈箱
$('.event-detail-group .event-detail-box').click(function(e){
    console.log($(this).find('.eventNo').val());

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

    xhr.open("GET", "plan_eventPop.php?entNo="+ $(this).find('.eventNo').val(), true);
    xhr.send(null);
});


//顯示自選圖片
var uploadCover = document.getElementById('upload_cover_pic');

uploadCover.addEventListener('change',function(e){
        var reader = new FileReader();
        reader.addEventListener('load',function(){
            var planCover = document.getElementById('dt_cover_check');
            planCover.src = reader.result;
        });
        reader.readAsDataURL(event.target.files[0]);
});

if( document.getElementById('upload_cover_pic').files.length == 0){
    var filename = document.getElementById('dt_cover_check').src.split("/").pop();
    console.log(filename);
    var picSelected = document.getElementById('picSelected');
    picSelected.value = filename;
}else{
    var filename = document.getElementById('upload_cover_pic').files[0].name;
    console.log(filename);
    var picSelected = document.getElementById('picSelected');
    picSelected.value = filename;
}

//抓所有需要資訊
$(document).on('click','#btn_confirm_and_buy_ticket',function(){
    eventItems = document.getElementsByClassName('eventItem');
    for( let i=0; i<eventItems.length;i++){
        console.log(eventItems[i].querySelector('input').value);
    }
    if( document.getElementById('upload_cover_pic').files.length == 0){
        var filename = document.getElementById('dt_cover_check').src.split("/").pop();
        console.log(filename);
        var picSelected = document.getElementById('picSelected');
        picSelected.value = filename;
    }else{
        var filename = document.getElementById('upload_cover_pic').files[0].name;
        console.log(filename);
        var picSelected = document.getElementById('picSelected');
        picSelected.value = filename;
    }
});


//設定每次點擊圖像放置位置
function insertEventLoc(location) {

    // Var
    // let insertLoc = document.getElementById('insetLoc');
    let mapboard = document.getElementById('mapboard');
    let points = document.getElementsByClassName("point");
    let point = document.createElement("img");

    // 每次點擊後，移除之前的座標圖像
    // removeElementsByClass('point');

    // 設定point屬性
    point.classList.add("point");
    point.setAttribute("width", "5%");
    point.setAttribute("src", "images/owl_2.png");
    point.style.position = "absolute";
    point.style.zIndex = "100";
    point.style.transform ="translate(-50%,-50%)";
    mapboard.appendChild(point);


    let templocation = location.split(",");
    percX = templocation[0];
    percY = templocation[1];

    // 計算相對位置
    // let percX = ( e.offsetX ) / $(e.target).width() * 100;
    // let percY = ( e.offsetY ) / $(e.target).height() * 100;

    // 設定point位置
    point.style.top = percY +"%";
    point.style.left = percX +"%";
    // insertLoc.value = percX.toFixed(2) + "," + percY.toFixed(2) ;

    // console.log( e.offsetX + " " + e.offsetY );
    console.log(point.height + " " + point.width);
    console.log(point.style.left + " " + point.style.top);
}


// 移除className的節點
// function removeElementsByClass(className){
//     var elements = document.getElementsByClassName(className);
//     while(elements.length > 0){
//         elements[0].parentNode.removeChild(elements[0]);
//     }
// }

function removeEventLoc(e){
    var elements = document.getElementsByClassName("point");
    for( var i=0 ;i<elements.length ;i++){
        elements[i].parentNode.removeChild(elements[i]);
    }

    // point.classList.add("point");
    // point.setAttribute("width", "5%");
    // point.setAttribute("src", "images/owl_2.png");
    // point.style.position = "absolute";
    // point.style.zIndex = "100";
    // point.style.transform ="translate(-50%,-50%)";
}


// DOMNodeInserted
// document.getElementById("event-drop-area").addEventListener("DOMNodeInserted", function(e){
//     insertEventLoc($(this).find('.eventLoc:last').val());
// });

// document.getElementById("event-drop-area").addEventListener("change", function(e){
    // insertEventLoc($(this).find('.eventLoc:last').val());
    // console.log("esfes");
// });

// document.getElementById("event-drop-area").addEventListener("DOMNodeRemoved", function(e){

//     removeEventLoc($(this).find('.eventLoc:last').val());
//         // $(this).find('.eventLoc:last').val());
// });




