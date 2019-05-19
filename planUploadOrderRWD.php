<?php
session_start();
// echo "jfsoieisf";
// echo $_POST["totalPrice"];
    $planListNo = '';
    $planListNo .= $_GET['entNo'];

function _get($str){
    $val = !empty($_POST[$str]) ? $_POST[$str] : null;
    return $val;
}
    if(isset($_POST['submit'])){
        // foreach($_SESSION['entNo'] as $value){
        //     echo $value;
        // }
        $memNo = 1;
        //$memNo = $_SESSION['GHH'];
        $entPrice = $_POST['totalPrice'];
        // $entNo = $_POST['entNo'];
        $planName = $_POST['planName'];
        $upFile = _get('upFile');
        $entPic = $_POST['picSelected'];
        $planList = $planListNo;

        
        
        if($upFile != null){
            switch($_FILES['upFile']['error']){
                case 0:
                    $dir = 'images//';
                    if( file_exists($dir) == false){
                            mkdir( $dir );
                    }
                    $from = $_FILES['upFile']['tmp_name'];
                    $to = $dir.$_FILES['upFile']['name'];
                    copy($from, $to);
                    echo "上傳成功<br>"; 
                    break;
                case 1:
                    echo "上傳檔案太大, 不得超過", ini_get("upload_max_filesize") ,"<br>";
                    break;
                case 2:
                    echo "上傳檔案太大, 不得超過", $_POST["MAX_FILE_SIZE"], "位元組<br>";
                    break;
                case 3:
                    echo "上傳檔案不完整<br>";
                    break;
                case 4:
                    echo "没選送檔案<br>";
                    break;
                default:
                    echo "請聯絡網站維護人員<br>";
                    echo "error code : ", $_FILES['upFile']['error'],"<br>";
            }
        }
    
        try {
        require_once("connectDb.php");
        $sql = "INSERT INTO `plan` VALUES (:planNo,:memNo,:planDefNo,:planName,:planPhoto,:planPrice,:planStatus,:planDesc,:planList,:noteName,:noteContent,:noteLikeTime,:noteMsgTime,:noteStatus,:noteDate)";
        $plan = $pdo->prepare($sql);
        $plan -> bindValue(':planNo', null); 
        $plan -> bindValue(':memNo', 1); 
        $plan -> bindValue(':planDefNo', null); 
        
        $plan -> bindValue(':planName', $planName); 
        $plan -> bindValue(':planPhoto', $entPic); 
        $plan -> bindValue(':planPrice', $entPrice); 
    
        $plan -> bindValue(':planStatus', 1); 
        $plan -> bindValue(':planDesc', 0); 
        $plan -> bindValue(':planList', $planList); 
    
        $plan -> bindValue(':noteName', null); 
        $plan -> bindValue(':noteContent', null); 
        $plan -> bindValue(':noteLikeTime', null); 
        $plan -> bindValue(':noteMsgTime', null); 
        $plan -> bindValue(':noteStatus', null); 
        $plan -> bindValue(':noteDate', null); 
    
        $plan -> execute();

        echo ('hi');
            
        
        header("Location:order.php"); 
    
        } catch (PDOException $e) {
        echo "失敗",$e->getMessage(),"<br>";
        echo "行號",$e->getLine();
        }
    }




// session_start();

// if(isset($_SESSION['memNo'])){
//     if(isset($_POST['submit'])){
//         $memNo = 1;
//         //$memNo = $_SESSION['GHH'];
//         $entPrice = $_POST['myEventPrice'];
//         $entNo = $_POST['eventNo'];
//         $planName = $_POST['planName'];
//         $upFile = $_POST['upFile'];
//         $entPic = $_POST['picSelected'];
//         $planList = '';
    
//         // 如果有才塞進array
//         if(isset($_POST['1'])){$planList = "1,";}
//         if(isset($_POST['2'])){$planList .= "2,";}
//         if(isset($_POST['3'])){$planList .= "3,";}
//         if(isset($_POST['4'])){$planList .= "4,";}
//         if(isset($_POST['5'])){$planList .= "5,";}
//         if(isset($_POST['6'])){$planList .= "6,";}
//         if(isset($_POST['7'])){$planList .= "7,";}
//         if(isset($_POST['8'])){$planList .= "8,";}
//         if(isset($_POST['9'])){$planList .= "9,";}
//         if(isset($_POST['10'])){$planList .= "10,";}
//         if(isset($_POST['11'])){$planList .= "11,";}
//         if(isset($_POST['12'])){$planList .= "12,";}
//         if(isset($_POST['13'])){$planList .= "13,";}
//         if(isset($_POST['14'])){$planList .= "14,";}
//         if(isset($_POST['15'])){$planList .= "15,";}
//         if(isset($_POST['16'])){$planList .= "16,";}
//         if(isset($_POST['17'])){$planList .= "17,";}
//         if(isset($_POST['18'])){$planList .= "18,";}
    
//         // echo "hi";
//         // 因為最後一筆有","，要去掉
//         $planList = substr($planList, 0, strlen($planList));
    
//         if($upFile != null){
//             switch($_FILES['upFile']['error']){
//                 case 0:
//                     $dir = '..//images//';
//                     if( file_exists($dir) == false){
//                             mkdir( $dir );
//                     }
//                     $from = $_FILES['upFile']['tmp_name'];
//                     $to = $_FILES['upFile']['name'];
//                     copy($from, $to);
//                     echo "上傳成功<br>"; 
//                     break;
//                 case 1:
//                     echo "上傳檔案太大, 不得超過", ini_get("upload_max_filesize") ,"<br>";
//                     break;
//                 case 2:
//                     echo "上傳檔案太大, 不得超過", $_POST["MAX_FILE_SIZE"], "位元組<br>";
//                     break;
//                 case 3:
//                     echo "上傳檔案不完整<br>";
//                     break;
//                 case 4:
//                     echo "没選送檔案<br>";
//                     break;
//                 default:
//                     echo "請聯絡網站維護人員<br>";
//                     echo "error code : ", $_FILES['upFile']['error'],"<br>";
//             }
//         }
    
//         try {
//         require_once("connectDb.php");
//         $sql = "INSERT INTO `plan` VALUES (:planNo,:memNo,:planDefNo,:planName,:planPhoto,:planPrice,:planStatus,:planDesc,:planList,:noteName,:noteContent,:noteLikeTime,:noteMsgTime,:noteStatus)";
//         $plan = $pdo->prepare($sql);
//         $plan -> bindValue(':planNo', null); 
//         $plan -> bindValue(':memNo', 1); 
//         $plan -> bindValue(':planDefNo', null); 
        
//         $plan -> bindValue(':planName', $planName); 
//         $plan -> bindValue(':planPhoto', $entPic); 
//         $plan -> bindValue(':planPrice', $entPrice); 
    
//         $plan -> bindValue(':planStatus', 1); 
//         $plan -> bindValue(':planDesc', 0); 
//         $plan -> bindValue(':planList', $planList); 
    
//         $plan -> bindValue(':noteName', null); 
//         $plan -> bindValue(':noteContent', null); 
//         $plan -> bindValue(':noteLikeTime', null); 
//         $plan -> bindValue(':noteMsgTime', null); 
//         $plan -> bindValue(':noteStatus', null); 
    
//         $plan -> execute();
    
//         echo "hi";
    
//         // header("Location:order.php"); 
    
//         } catch (PDOException $e) {
//         echo "失敗",$e->getMessage(),"<br>";
//         echo "行號",$e->getLine();
//         }
//     }
            
//     }else{
//             header("Location: login.php");
//     }

?>