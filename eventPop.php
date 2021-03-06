<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/plan.css"> 
</head>
<body>
    <div id="Lightbox_click">點我</div>
    <div id="Lightbox2">
        <div class="Lightbox2">
        <img id="decr_bear" src="images/new/talk_opp.png" alt="">
        <img id="decr_bear2" src="images/new/talk.png" alt="">
            <div class="event_left_img">
                <div class="event_pic_box">
                    <img id="event_pic" src="images/plan/direction.jpg" alt="">
                </div>
                <div class="event_map_box">
                    <span>該活動所在位置</span>
                    <img id="event_map" src="images/Australia_map.png" alt="">
                </div>
            </div>
            <div class="event_right_txt">
                <div>
                    <div class="title-value">
                        <h2>生火術</h2>
                    </div>
                    <div>                        
                        <table class="allPlan-value-table">
                            <tr>
                                <td><img src="images/value_family.png" alt="親子值"></td>
                                <td><img src="images/value_handmade.png" alt="手作值"></td>
                                <td><img src="images/value_survive.png" alt="求生值"></td>
                            </tr>
                            <tr>
                                <td>親子值</td>
                                <td>手作值</td>
                                <td>求生值</td>
                            </tr>
                            <tr>
                                <td class="value-number">2</td>
                                <td class="value-number">1</td>
                                <td class="value-number">2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div>
                    <p>過去大人總禁止小孩玩火,因為怕發生意外,但意外從來沒有減少過。我們提供了一個安全又能合法玩火的環境,在專業教練的指導下,讓你跟你的孩子能學習到火的一切,並利用火來煮食及製作食器。就讓我們帶領你和你的孩子,一起進入火的世界。
                    </p>
                </div>
                <div class="event-price-hour">
                    <p>時數：
                        <span class="event_hour" id="event_hour"></span>
                        <input type="hidden" name="myEventHour" id="myEventHour">
                        <span>小時</span>
                    </p>
                    <p>金額：
                        <span class="event_price" id="event_price"></span>
                        <input type="hidden" name="myEventPrice" id="myEventPrice">
                        <span>元</span>
                    </p>
                </div>
            </div>
            <span id="Lightbox2_close"><img id="aa" src="images/icon-close.png" alt=""></span>  
        </div>     
    </div>


    
    <script>
        var Lightbox_click=document.getElementById("Lightbox_click");
        var Lightbox2_close=document.getElementById("Lightbox2_close");
        Lightbox_click.addEventListener("click",function(){
            document.getElementById("Lightbox2").style.display="block";
        });
        Lightbox2_close.addEventListener("click",function(){
            document.getElementById("Lightbox2").style.display="none";
        });
    </script>
</body>
</html>          