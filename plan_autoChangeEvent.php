<?php
    try{
        require_once("connectDB.php");
        $sql = "SELECT * from `event` where entSurVal=:entSurVal and entHanVal=:entHanVal and entPcVal=:entPcVal";
        $event = $pdo->prepare( $sql );
        $event -> bindValue(":entSurVal", $_GET["surviveRange"]);
        $event -> bindValue(":entHanVal", $_GET["handmadeRange"]);
        $event -> bindValue(":entPcVal", $_GET["familyRange"]);
        $event -> execute();

        if($event -> rowCount() == 0){
            echo '沒有符合條件值的選項，請重新選擇。';
        }else{

            // echo $sql;
            while( $eventRows = $event->fetch() ){
                echo '<div class="event-detail-box">';
                echo '<div class="event-cover">';
                echo '<img src="images/plan/'.$eventRows['entPhoto'].'">';
                echo '</div>';
                echo '<div class="event-txt-box">';
                echo '<h4>'.$eventRows['entName'].'</h4>';
                echo '<input type="hidden" value="'.$eventRows['entLoc'].'" class="eventLoc" name="eventLoc">';
                echo '<input type="hidden" value="'.$eventRows['entNo'].'" class="eventNo" name="eventNo">';
                echo '<table class="allPlan-value-table">';
                echo '<tr>';
                echo '<td><img src="images/value_family.png" alt="親子值"></td>';
                echo '<td>'.$eventRows['entPcVal'].'</td>';
                echo '<td><img src="images/value_handmade.png" alt="手作值"></td>';
                echo '<td>'.$eventRows['entHanVal'].'</td>';
                echo '<td><img src="images/value_survive.png" alt="求生值"></td>';
                echo '<td>'.$eventRows['entSurVal'].'</td>';
                echo '</tr>';
                echo '</table>';

                echo '<div class="value-pic-box">平均';
                for($i=0;$i<$eventRows['entSco'];$i++){
                    echo '<img src="images/plan/fire.png" alt="評分火數">';
                }
                echo '</div>';

                echo '<div class="event-hour-price">';
                echo '<span class="event-hour">'.$eventRows['entDate'].'</span>';
                echo '<span class="event-hour-mark">小時</span>';
                echo '<span class="event-price-mark">$</span>';
                echo '<span class="event-price">'.$eventRows['entPrice'].'</span>';
                echo '</div>';

                echo '</div>';
                echo '<i class="fas fa-trash-alt"></i>';
                echo '</div>';
            }
        }

    }catch(PDOException $e){
        echo "error";
    }
?>