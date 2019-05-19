<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/order.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/svg_style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="Shortcut Icon" type="image/x-icon" href="images/new/favicon.png" />
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/hbgClick.js"></script>
    <title>森存者｜線上訂票</title>
</head>
<body>
    <!-- header --> 
    <nav>
        <div class="icon" id="icon">
            <div class="hamburger" id="hamburger"></div>  
        </div>

        <div id="small-forester_logo">
                <a href="index.html"><h1><img src="images/logo.svg" alt="手機板森存者商標" ></h1></a>
        </div>
        <div id="header-member" >
            <a href="login.html" ><img src="images/icon_user.png" alt="會員大頭像"></a>
        </div>
        
        <div class="cloud">
            <div class="doc doc--bg2">
                <canvas id="canvas" width="1444" height="119"></canvas>
            </div>
        </div>
        <!--  -->

        <div class="header-background-cloud">
            <span id="show_span" >
                <ul><li></li>
                    <li><a href="plan.html">活動規劃</a></li>
                    <li><a href="order.html">線上訂票</a></li>
                    <li><a href="index.html"><h1> <img id="forester_logo" src="images/logo.svg" alt="森存者商標"></h1></a></li>
                    <li><a href="blog.html">手札分享</a></li>
                    <li><a href="game.html">尋找森存者</a></li> 
                    <li class="header-member"><a href="login.html" ><img src="images/icon_user.png" alt="會員大頭像"></a></li>
                </ul>                 
            </span>
        </div>        
    </nav>
    <!-- header -->
    <script src="js/header.js"></script>

    <div class="wrap">
        <!-- 訂購步驟 -->
        <div class="step_group">
            <ul class="step_process">
                <li>訂購門票</li>
                <li>選擇活動</li>
                <li>確認資訊</li>
                <li>付款</li>
            </ul>
        </div>

        <!-- 月曆訂票 -->
        <div id="step1" class="step active order_container">
            <div class="calendar">
                <img src="images/order/board.png" alt="board">
                <div class="box">
                    <div class="calender_mon_title">
                        <span id="prev"><i class="fas fa-chevron-left"></i></span>
                        <span id="calendar-year">year</span>
                        <span id="calendar-month">month</span>
                        <span id="next"><i class="fas fa-chevron-right"></i></span>
                    </div>
                    <div class="body">
                        <div class="light body-list">
                            <ul>
                                <li>日</li>
                                <li>一</li>
                                <li>二</li>
                                <li>三</li>
                                <li>四</li>
                                <li>五</li>
                                <li>六</li>
                            </ul>
                        </div>
                        <div class="dark body-list">
                            <ul id="days"></ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ticket">
                <div class="ticket_disabled">
                    <img src="images/order/ticket.png" alt="ticket_board">
                    <span class="t_name t_disabled">愛心票</span>
                    <div class="t_quantity">
                        <button class="t_less"><i class="fas fa-minus"></i></button>
                        <span class="t_num">1</span>
                        <button class="t_add"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
                <div class="ticket_student">
                    <img src="images/order/ticket.png" alt="ticket_board">
                    <span class="t_name t_student">學生票</span>
                    <div class="t_quantity">
                        <button class="t_less"><i class="fas fa-minus"></i></button>
                        <span class="t_num">1</span>
                        <button class="t_add"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
                <div class="ticket_adult">
                    <img src="images/order/ticket.png" alt="ticket_board">
                    <span class="t_name">成人票</span>
                    <div class="t_quantity">
                        <button class="t_less"><i class="fas fa-minus"></i></button>
                        <span class="t_num">1</span>
                        <button class="t_add"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div id="step2" class="step activity_container">
            <h3>匯入我的行程</h3>
            <div class="activity_group">
                <div class="item">
                    <div class="item_img">
                        <img src="images/order/fire.jpg" alt="取火術">
                    </div>
                    <h4>取火術</h4>
                    <button>選擇</button>
                </div>
                <div class="item">
                    <div class="item_img">
                        <img src="images/order/Fishing.png" alt="捕魚術">
                    </div>
                    <h4>捕魚術</h4>
                    <button>選擇</button>
                </div>
                <div class="item">
                    <div class="item_img">
                        <img src="images/order/building.png" alt="搭建術">
                    </div>
                    <h4>搭建術</h4>
                    <button>選擇</button>
                </div>
            </div>
            <div class="activity_none">
                <span>不規劃行程</span>
            </div>
        </div>
        <div id="step3" class="step confirm_container">
            <div class="confirm_box">
                <h3>訂票清單</h3>
                <div class="confirm">
                    <table>
                        <thead>
                            <tr>
                                <th>票價</th>
                                <th>單價</th>
                                <th>數量</th>
                                <th>小計</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>成人票</td>
                                <td>1000</td>
                                <td>2</td>
                                <td>2000</td>
                            </tr>
                            <tr>
                                <td>學生票</td>
                                <td>700</td>
                                <td>1</td>
                                <td>700</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <span>票券小計：2700</span>
            </div>

            <div class="confirm_box">
                <h3>行程活動清單</h3>
                <div class="confirm">
                    <table>
                        <thead>
                            <tr>
                                <th>票價</th>
                                <th>單價</th>
                                <th>數量</th>
                                <th>小計</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>生火術</td>
                                <td>700</td>
                                <td>1</td>
                                <td>700</td>
                            </tr>
                            <tr>
                                <td>防身術</td>
                                <td>800</td>
                                <td>2</td>
                                <td>1600</td>
                            </tr>
                            <tr>
                                <td>淨水術</td>
                                <td>600</td>
                                <td>2</td>
                                <td>1200</td>
                            </tr>
                            <tr>
                                <td>搭建術</td>
                                <td>900</td>
                                <td>1</td>
                                <td>900</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <span>活動小計：4400</span>
            </div>
            <div class="show_total">
                <div class="entrance">入園日期：<span id="entrance_date">2019.04.09</span></div>
                <div class="total">總金額：<span id="amount">7100</span></div>
            </div>
        </div>
        <div id="step4" class="step credit_container">
            <div class="ct_rule">
                <h3>訂購條款</h3>
                <p>若於入營前7天退訂，可全額退款。</p>
                <p>若於入營前3-7天退訂，可半額退款。</p>
                <p>若於入營前3天內退訂，則是20%退款。</p>
                <p>若園區暫停營業為天災人禍之因素，無條件全額退款。</p>
                <div class="ct_rule_check">
                    <label>使用紅利點數折抵
                        <input type="checkbox">
                        <span class="check_mark"></span>
                    </label>
                        <p>您持有的紅利點數為：0點</p>
                        <p>(每10點可折抵1元)</p>
                    <label>我已詳閱並同意購買的條款
                        <input type="checkbox">
                        <span class="check_mark"></span>
                    </label>
                </div>
            </div>
            <div class="ct_credit">
                <h3>信用卡資訊</h3>
                <div class="ct_credit_txt">
                    <ul>
                        <li>
                            <label>
                                <span>持卡人姓名</span>
                                <span>
                                    <input type="text" maxlength="15">
                                </span>
                            </label>
                        </li>
                        <li>
                            <label for="">
                                <span>信用卡卡號</span>
                                <span id="credit">
                                    <input type="tel" name="credit" maxlength="4" class="credit">
                                    <input type="tel" name="credit" maxlength="4" class="credit">
                                    <input type="tel" name="credit" maxlength="4" class="credit">
                                    <input type="tel" name="credit" maxlength="4" class="credit">
                                </span>
                            </label>
                        </li>
                        <li>
                            <span>到期月/年</span>
                            <span>
                                <label for="month">
                                    <select name="month" id="month" class="credit_month" value="0">
                                        <option value="0">月</option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                        <option value="5">05</option>
                                        <option value="6">06</option>
                                        <option value="7">07</option>
                                        <option value="8">08</option>
                                        <option value="9">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>                                  
                                </label>
                                <label for="year">
                                    <select name="year" id="year" class="credit_year" value="0">
                                        <option value="0">年</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                    </select>
                                </label>
                            </span>
                        </li>
                        <li>
                            <label for="safe">
                                <span>安全碼</span>
                                <span>
                                    <input type="tel" id="safe" maxlength="3">
                                </span>
                            </label>
                        </li>
                        <li class="ct_icon">
                            <i class="fab fa-cc-visa"></i>
                            <i class="fab fa-cc-mastercard"></i>
                            <i class="fab fa-cc-jcb"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="btn_group">
            <div id="pre_btn" style="display:none">上一步</div>
            <div id="next_btn">下一步</div>
        </div> 
    </div> 
    <script src="js/calendar.js"></script>
    <script>
        // $(document).ready(function(){
        //     $('#next_btn').click(function(){
        //         $('#step1').toggle(false);
        //         $('#step2').toggle(true);
        //         $('#pre_btn').toggle(true);
        //     });

        //     $('#pre_btn').click(function(){
        //         $('#step1').toggle(true);
        //         $('#step2').toggle(false);
        //         $('#pre_btn').toggle(false);
        //     });

        // });
        var index = $(".step.active").index(".step"),
        stepsCount = $(".step").length,
        prevBtn = $("#pre_btn"),
        nextBtn = $("#next_btn");

        prevBtn.click(function() {
            nextBtn.css("display", "block");

            if (index > 0) {
                index--;    
                $(".step").removeClass("active").eq(index).addClass("active");
            };

            if (index === 0) {
                $(this).css("display","none");
            }

            nextBtn.text("下一步");
        });

        nextBtn.click(function() {
            prevBtn.css("display", "block");

            if (index < stepsCount - 1) {
                index++;
                $(".step").removeClass("active").eq(index).addClass("active");
            };

            if (index === stepsCount - 1) {
                $(this).text("送出");
            }
        });
    </script>

    
<script src="js/sessionPage.js"></script>
</body>
</html>