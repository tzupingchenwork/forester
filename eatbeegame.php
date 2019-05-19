<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/eatbeegameain.css">
</head>

<body>
  <div id="mousestyle"><img src="images/aa.png" alt=""></div>
  <div class="player">

    <div class="legs">
      <div class="leg leg--left">
      </div>
      <div class="leg leg--right">
      </div>
    </div>

    <div class="body">


      <div class="crown"></div>
      <div class="belly"></div>
      <div class="arms">
        <div class="arm arm--left">
          <div class="hand">
            <div class="toe"></div>
            <div class="toe"></div>
            <div class="toe"></div>
          </div>
        </div>
        <div class="arm arm--right">
          <div class="hand">
            <div id="umbarr">
              <img class="umbarr" src="images/talk.png" alt="">
              <img id="net" src="images/talk1.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="mouth">
        <div class="top-lip"></div>
        <div class="bottom-lip"></div>
        <div class="tongue">
          <div class="tongue-inner">
            <div class="fly is-dead"></div>
          </div>
        </div>
      </div>
      <div class="eyes">

        <div class="eye eye--left">
          <div class="pupil"></div>
        </div>
        <div class="eye eye--right">
          <div class="pupil"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="screen menu">
    <p>蜜蜂大作戰</p>
    <a href="#" class="btn play" id="play">
      <span class="text">開始</span>
      <br>
      <!-- <span>最高分: <span class="js-best">0</span></span> -->
    </a>

  </div>

  <div class="screen game">
    <div class="hud">
      <div class="time">
        <span class="label">時間</span>
        <span class="value js-time">30</span>
      </div>

      <div class="score" id="score">
        <span class="label">點數</span>
        <span class="value js-score">0</span>
      </div>
    </div>

    <div class="flies">
      <div class="path">
        <div class="target">
          <div class="fly">
            <div class="fly_head">
              <span class="beeeye"></span>
              <span class="beeeye"></span>
            </div>
            <div class="fly_black1"></div>
            <div class="fly_body"></div>
            <div class="fly_black2"></div>
          </div>
        </div>
      </div>
      <div class="path">
        <div class="target">
          <div class="fly">
            <div class="fly_head">
              <span class="beeeye"></span>
              <span class="beeeye"></span>
            </div>
            <div class="fly_black1"></div>
            <div class="fly_body"></div>
            <div class="fly_black2"></div>
          </div>
        </div>
      </div>
      <div class="path">
        <div class="target">
          <div class="fly">
            <div class="fly_head">
              <span class="beeeye"></span>
              <span class="beeeye"></span>
            </div>
            <div class="fly_black1"></div>
            <div class="fly_body"></div>
            <div class="fly_black2"></div>
          </div>
        </div>
      </div>
      <div class="path">
        <div class="target">
          <div class="fly">
            <div class="fly_head">
              <span class="beeeye"></span>
              <span class="beeeye"></span>
            </div>
            <div class="fly_black1"></div>
            <div class="fly_body"></div>
            <div class="fly_black2"></div>
          </div>
        </div>
      </div>
      <div class="path">
        <div class="target">
          <div class="fly">
            <div class="fly_head">
              <span class="beeeye"></span>
              <span class="beeeye"></span>
            </div>
            <div class="fly_black1"></div>
            <div class="fly_body"></div>
            <div class="fly_black2"></div>
          </div>
        </div>
      </div>
      <div class="path">
        <div class="target">
          <div class="fly">
            <div class="fly_head">
              <span class="beeeye"></span>
              <span class="beeeye"></span>
            </div>
            <div class="fly_black1"></div>
            <div class="fly_body"></div>
            <div class="fly_black2"></div>
          </div>
        </div>
      </div>
      <div class="path">
        <div class="target">
          <div class="fly">
            <div class="fly_head">
              <span class="beeeye"></span>
              <span class="beeeye"></span>
            </div>
            <div class="fly_black1"></div>
            <div class="fly_body"></div>
            <div class="fly_black2"></div>
          </div>
        </div>
      </div>
      <div class="path">
        <div class="target">
          <div class="fly">
            <div class="fly_head">
              <span class="beeeye"></span>
              <span class="beeeye"></span>
            </div>
            <div class="fly_black1"></div>
            <div class="fly_body"></div>
            <div class="fly_black2"></div>
          </div>
        </div>
      </div>
    </div>


  </div>

  <div class="screen win">
    <h1>遊戲結束</h1>
    <div class="card">
      <h3 class="highscore js-highscore is-hidden"></h3>

      <div class="score">
        <span class="label">恭喜你獲得點數</span>
        <span class="value js-score" id="finalsorce">30</span>
      </div>

      <!-- <div class="best">
        <span class="label">最高分</span>
        <span class="value js-best">0</span>
      </div> -->

    </div>
    <a href="#" id="continu" class="btn" >確認</a>

  </div>



  <div class="screen scoreboard">
    <h1>Score Board</h1>
    <div class="card">
      <ol class="scoreboard-list js-scoreboard"></ol>
    </div>

    <!-- <a href="#" class="btn" onClick="menu()">Back</a> -->
  </div>

  <script src="js/main.js"></script>
  <script src="js/sessionPage.js"></script>
</body>

</html>