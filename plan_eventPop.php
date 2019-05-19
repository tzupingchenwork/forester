<?php
    try{
        require_once("connectDB.php");
        $sql = "SELECT * from `event` where entNo=:entNo";
        $event = $pdo->prepare( $sql );
        $event -> bindValue(":entNo", $_GET["entNo"]);
        $event -> execute();

        // echo $sql;
        $eventRows = $event->fetch();

            echo '<div id="Lightbox2" onload="getAllEntLoc()">';
            echo '<div class="Lightbox2">';
            echo '<img id="decr_bear" src="images/new/talk_opp.png" alt="">';
            echo '<img id="decr_bear2" src="images/new/talk.png" alt="">';
            echo '<div class="event_left_img">';
            echo '<div class="event_pic_box">';
            echo '<img id="event_pic" src="images/plan/'.$eventRows['entPhoto'].'">';
            echo '</div>';
            echo'<script>var globalVariable ='.$eventRows['entLoc'].'</script>';
            echo'<script>
                    function getAllEntLoc(e){
                    let mapboard = document.getElementById("mapboard");
                    alert();
                    let locationXandY = (globalVariable).split(",");

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
                };
                </script>';
            echo '<div class="event_map_box" id="mapboard">';
            echo '<span>該活動所在位置</span>';
            echo '<img class="map" id="event_map"src="images/Australia_map.png" alt="">';
            echo '</div>';
            echo '</div>';
            echo '<div class="event_right_txt">';
            echo ' <div>';
            echo '<div class="title-value">';
            echo '<h2>'.$eventRows['entName'].'</h2>';
            echo '</div>';
            echo '<div>';
            echo '<table class="allPlan-value-table">';
            echo '<tr>';
            echo '<td><img src="images/value_family.png" alt="親子值"></td>';
            echo '<td><img src="images/value_handmade.png" alt="手作值"></td>';
            echo '<td><img src="images/value_survive.png" alt="求生值"></td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>親子值</td>';
            echo '<td>手作值</td>';
            echo '<td>求生值</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td class="value-number">'.$eventRows['entPcVal'].'</td>';
            echo '<td class="value-number">'.$eventRows['entHanVal'].'</td>';
            echo '<td class="value-number">'.$eventRows['entSurVal'].'</td>';
            echo '</tr>';
            echo '</table>';
            echo '</div>';
            echo '</div>';
            echo '<div>';
            echo '<p>'.$eventRows['entDesc'].'</p>';
            echo '</div>';
            echo '<div class="event-price-hour">';
            echo '<p>時數：';
            echo '<span class="event_hour" id="event_hour">'.$eventRows['entDate'].'</span>';
            echo '<span>小時</span>';
            echo '</p>';
            echo '<p>金額：';
            echo '<span class="event_price" id="event_price">'.$eventRows['entPrice'].'</span>';
            echo '<span>元</span>';
            echo '</p>'; 
            echo '</div>';
            echo '</div>';
            echo '<span id="Lightbox2_close"><img id="aa" src="images/icon-close.png" alt=""></span>';
            echo '</div>';
            echo '</div>';
        

    }catch(PDOException $e){
        echo "error";
    }
?>