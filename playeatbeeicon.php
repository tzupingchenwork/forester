<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="Shortcut Icon" type="image/x-icon" href="images/new/favicon.png" />
    <title>森存者｜尋找森存者</title>
    <style>
        .beeplay {
            width: 200px;
            position: fixed;
            bottom: 0px;
            left: 0px;
            z-index: 8;
        }

        .beeplay:hover {
            left: 0px;
            transition: 0.5s;
            opacity: 1;
            /* animation: log 1s ; */
        }

        .text {
            position: absolute;
            width: 120px;
            height: 50px;
            background-color: #ddd;
            border-radius: 30px;
            top: -240px;
            left: 50px;
            padding: 5px 15px;
        }
        .text {
            color: #111;
animation: log 20s infinite;
        }

        .text::before {
            content: '';
            display: block;
            position: absolute;
            top: 40px;
            right: 80px;
            border-right: 20px solid transparent;
            border-left:6px solid transparent;
            border-top: 30px solid #ddd;
            /* -webkit-transform: skewX(40deg); */
            /* transform: skewX(40deg); */
            /* background-color: #fff; */
        }

        .jump{
            position: absolute;
            bottom: 0;
            animation: jump .3s infinite linear;
        }
        .jump:hover{
            bottom: 0;

        }
        @keyframes jump{
            0%{bottom: 3px;}
            100%{bottom: 0;}
        }
        @keyframes log {
            0% {opacity: 1;}
            10%{opacity: 0;}
            20%{opacity: 1;}
            30%{opacity: 0;}
            40%{opacity: 1;}
            50%{opacity: 0;}
            60%{opacity: 1;}
            70%{opacity: 0;}
            80%{opacity: 1;}
            90%{opacity: 0;}
            100% {opacity: 1;}
        }        ;
        @media screen and (max-width: 768px) {


        }


    </style>
</head>

<body>
    <div class="beeplay">
        <a  href="eatbeegame.php" target="_blank">
            <img class="jump" src="images/catchBear.svg" alt="">
           
        </a>
        <div class="text">
                <p>快帶我去抓蜜蜂</p>
            </div>

    </div>



</body>

</html>