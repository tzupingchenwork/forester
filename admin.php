<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="Shortcut Icon" type="image/x-icon" href="images/new/favicon.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">
    
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <nav class="navbar col-md-2 navbar-expand-md navbar-dark bg-dark text-light  fixed-left">
                <a class="navbar-brand" href="./"><img src="images/logo.svg" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                    aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav nav-pills " id="pills-tab" role="tablist">
                        <li class="nav-item"><a class="text-light nav-link menu" data-item="#admin">管理員帳號管理</a></li>
                        <li class="nav-item"><a class="text-light nav-link menu" data-item="#member">會員帳號管理</a></li>
                        <li class="nav-item"><a class="text-light nav-link menu" data-item="#order">訂單管理</a></li>
                        <li class="nav-item"><a class="text-light nav-link menu" data-item="#ticket">門票管理</a></li>
                        <li class="nav-item"><a class="text-light nav-link menu" data-item="#event">活動管理</a></li>
                        <li class="nav-item"><a class="text-light nav-link menu" data-item="#keyword">關鍵字管理</a></li>
                        <li class="nav-item"><a class="text-light nav-link menu" data-item="#qrcode">QRCode管理</a></li>
                        <li class="nav-item"><a class="text-light nav-link menu" data-item="#game">尋找生存者遊戲管理</a></li>
                        <li class="nav-item dropdown">
                            <a class="text-light nav-link dropdown-toggle " id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">檢舉管理</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item menu" data-item="#eventEvalReport">活動評價檢舉管理</a>
                                <a class="dropdown-item menu" data-item="#gamePhotoReport">照片上傳檢舉管理</a>
                                <a class="dropdown-item menu" data-item="#noteCommReport">手札留言檢舉管理</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>



            <main id="admin" role="main" class="col-md-10 ml-sm-auto px-4">
                <h2>管理員帳號管理</h2>
                <p>最高權限管理員才有刪除的權限。</p>
                <form class="searchbar form-inline mt-2 mt-md-0 justify-content-end">
                    <input class="form-control mr-sm-2 form-control-sm" type="text" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0 btn-sm" type="submit">搜尋</button>
                </form>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>管理員編號 <i class="fas fa-sort-amount-down"></i></th>
                                <th>管理員帳號 <i class="fas fa-sort-amount-down"></i></th>
                                <th>管理員密碼</th>
                                <th>管理員權限 <i class="fas fa-sort-amount-down"></i></th>
                                <th>管理員狀態 <i class="fas fa-sort-amount-down"></i></th>
                                <th>狀態異動</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td><input class="form-control form-control-sm" type="text"></td>
                                <td><input class="form-control form-control-sm" type="text"></td>
                                <td><input class="form-control form-control-sm" type="password"></td>
                                <td></td>
                                <td><button type="button" class="btn btn-primary btn-sm">新增</button></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>abc</td>
                                <td>****</td>
                                <td>最高管理員</td>
                                <td>正常</td>
                                <td><button type="button" class="btn btn-danger btn-sm">停權</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>john</td>
                                <td>****</td>
                                <td>一般管理員</td>
                                <td>正常</td>
                                <td><button type="button" class="btn btn-danger btn-sm">停權</button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>kk2234</td>
                                <td>****</td>
                                <td>一般管理員</td>
                                <td>正常</td>
                                <td><button type="button" class="btn btn-danger btn-sm">停權</button></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>bb1233</td>
                                <td>****</td>
                                <td>一般管理員</td>
                                <td>停權</td>
                                <td><button type="button" class="btn btn-success btn-sm">恢復正常</button></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>hh3422</td>
                                <td>****</td>
                                <td>一般管理員</td>
                                <td>停權</td>
                                <td><button type="button" class="btn btn-success btn-sm">恢復正常</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <nav aria-label="pagination">
                    <ul class="pagination pagination-sm justify-content-end">
                        <li class="page-item disabled">
                            <span class="page-link">上一頁</span>
                        </li>
                        <li class="page-item"><a class="page-link " href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <span class="page-link">
                                2
                                <span class="sr-only">(current)</span>
                            </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">下一頁</a>
                        </li>
                    </ul>
                </nav>
            </main>

            <main id="member" role="main" class="col-md-10 ml-sm-auto px-4">
                <h2>會員帳號管理</h2>
                <form class="searchbar form-inline mt-2 mt-md-0 justify-content-end">
                    <input class="form-control mr-sm-2 form-control-sm" type="text" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0 btn-sm" type="submit">搜尋</button>
                </form>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>會員編號 <i class="fas fa-sort-amount-down"></i></th>
                                <th>會員帳號 <i class="fas fa-sort-amount-down"></i></th>
                                <th>會員狀態 <i class="fas fa-sort-amount-down"></i></th>
                                <th>狀態異動</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>abc</td>
                                <td>正常</td>
                                <td><button type="button" class="btn btn-danger btn-sm">停權</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>john</td>
                                <td>正常</td>
                                <td><button type="button" class="btn btn-danger btn-sm">停權</button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>kk2234</td>
                                <td>正常</td>
                                <td><button type="button" class="btn btn-danger btn-sm">停權</button></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>bb1233</td>
                                <td>停權</td>
                                <td><button type="button" class="btn btn-success btn-sm">恢復正常</button></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>hh3422</td>
                                <td>停權</td>
                                <td><button type="button" class="btn btn-success btn-sm">恢復正常</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <nav aria-label="pagination">
                    <ul class="pagination pagination-sm justify-content-end">
                        <li class="page-item disabled">
                            <span class="page-link">上一頁</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <span class="page-link">
                                2
                                <span class="sr-only">(current)</span>
                            </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">下一頁</a>
                        </li>
                    </ul>
                </nav>
            </main>

            <main id="order" role="main" class="col-md-10 ml-sm-auto px-4">
                <h2>訂單管理</h2>
                <form class="searchbar form-inline mt-2 mt-md-0 justify-content-end">
                    <input class="form-control mr-sm-2 form-control-sm" type="text" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0 btn-sm" type="submit">搜尋</button>
                </form>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>會員編號 <i class="fas fa-sort-amount-down"></i></th>
                                <th>會員帳號 <i class="fas fa-sort-amount-down"></i></th>
                                <th>訂單狀態 <i class="fas fa-sort-amount-down"></i></th>
                                <th>狀態異動</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>abc</td>
                                <td>正常</td>
                                <td><button type="button" class="btn btn-danger btn-sm">退票</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>john</td>
                                <td>正常</td>
                                <td><button type="button" class="btn btn-danger btn-sm">退票</button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>kk2234</td>
                                <td>正常</td>
                                <td><button type="button" class="btn btn-danger btn-sm">退票</button></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>bb1233</td>
                                <td>退票</td>
                                <td><a href=""></a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>hh3422</td>
                                <td>退票</td>
                                <td><a href=""></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <nav aria-label="pagination">
                    <ul class="pagination pagination-sm justify-content-end">
                        <li class="page-item disabled">
                            <span class="page-link">上一頁</span>
                        </li>
                        <li class="page-item"><a class="page-link " href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <span class="page-link">
                                2
                                <span class="sr-only">(current)</span>
                            </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">下一頁</a>
                        </li>
                    </ul>
                </nav>
            </main>

            <main id="ticket" role="main" class="col-md-10 ml-sm-auto px-4">
                <h2>門票管理</h2>
                <form class=" searchbar form-inline mt-2 mt-md-0 justify-content-end">
                    <input class="form-control mr-sm-2 form-control-sm" type="text" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0 btn-sm" type="submit">搜尋</button>
                </form>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>票種編號 <i class="fas fa-sort-amount-down"></i></th>
                                <th>票種名稱 <i class="fas fa-sort-amount-down"></i></th>
                                <th>票種敘述 <i class="fas fa-sort-amount-down"></i></th>
                                <th>票種價格 <i class="fas fa-sort-amount-down"></i></th>
                                <th>票種數量 <i class="fas fa-sort-amount-down"></i></th>
                                <th>票種狀態 <i class="fas fa-sort-amount-down"></i></th>
                                <th>票種狀態異動</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td><input class="form-control form-control-sm" type="text"></td>
                                <td><input class="form-control form-control-sm" type="text"></td>
                                <td><input class="form-control form-control-sm" type="text"></td>
                                <td><input class="form-control form-control-sm" type="text"></td>
                                <td></td>
                                <td><button type="button" class="btn btn-primary btn-sm">新增</button></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>愛心票</td>
                                <td>給有愛心的人使用</td>
                                <td>500</td>
                                <td>300</td>
                                <td>正常</td>
                                <td><button type="button" class="btn btn-danger btn-sm">下架</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>一般票</td>
                                <td>給一般人使用</td>
                                <td>1000</td>
                                <td>300</td>
                                <td>正常</td>
                                <td><button type="button" class="btn btn-danger btn-sm">下架</button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>學生票</td>
                                <td>給學生使用</td>
                                <td>700</td>
                                <td>300</td>
                                <td>正常</td>
                                <td><button type="button" class="btn btn-danger btn-sm">下架</button></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>星光票</td>
                                <td>給月光族使用</td>
                                <td>300</td>
                                <td>300</td>
                                <td>下架</td>
                                <td><button type="button" class="btn btn-success btn-sm">恢復正常</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <nav aria-label="pagination">
                    <ul class="pagination pagination-sm justify-content-end">
                        <li class="page-item disabled">
                            <span class="page-link">上一頁</span>
                        </li>
                        <li class="page-item"><a class="page-link " href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <span class="page-link">
                                2
                                <span class="sr-only">(current)</span>
                            </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">下一頁</a>
                        </li>
                    </ul>
                </nav>
            </main>

            <main id="event" role="main" class="col-md-10 ml-sm-auto px-4">
                <h2>活動管理</h2>
                <form>
                    <div class="form-group row">
                        <label for="eventName" class="col-sm-1 col-form-label">活動名稱</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="eventName" placeholder="">
                        </div>
                        <div class="col-sm-2">
                        </div>
                        <label for="eventPhoto" class="col-sm-1 col-form-label">活動圖片</label>
                        <div class="col-sm-3">
                            <input type="file" id="eventPhoto" placeholder="">
                        </div>
                        <div class="col-sm-2">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="eventSummary" class="col-sm-1 col-form-label">活動簡述</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="eventSummary" placeholder="">
                        </div>
                        <div class="col-sm-2">
                        </div>
                        <label for="eventDesc" class="col-sm-1 col-form-label">活動詳述</label>
                        <div class="col-sm-3">
                            <textarea name="" id="eventDesc" class="form-control"></textarea>
                        </div>
                        <div class="col-sm-2">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="eventTime" class="col-sm-1 col-form-label">活動時間</label>
                        <div class="col-sm-3">
                            <select class="form-control" id="eventTime">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                        </div>
                        <label for="eventPrice" class="col-sm-1 col-form-label">活動單價</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="eventSummary" placeholder="">
                        </div>
                        <div class="col-sm-2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="eventLoc" class="col-sm-1 col-form-label">活動座標</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="eventSummary" placeholder="">
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-1 pt-0">求生值</legend>
                            <div class="col-sm-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                        value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                        value="option3">
                                    <label class="form-check-label" for="inlineCheckbox3">3 </label>
                                </div>
                            </div>

                            <legend class="col-form-label col-sm-1 pt-0">手作值</legend>
                            <div class="col-sm-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                        value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                        value="option3">
                                    <label class="form-check-label" for="inlineCheckbox3">3 </label>
                                </div>
                            </div>


                            <legend class="col-form-label col-sm-1 pt-0">親子值</legend>
                            <div class="col-sm-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                        value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                        value="option3">
                                    <label class="form-check-label" for="inlineCheckbox3">3 </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <div class="col-sm-12 ">
                            <button type="submit" class="btn btn-primary">新增活動</button>
                        </div>
                    </div>
                </form>

                <hr>
                <form class=" searchbar form-inline mt-2 mt-md-0 justify-content-end">
                    <input class="form-control mr-sm-2 form-control-sm" type="text" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0 btn-sm" type="submit">搜尋</button>
                </form>

                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>活動編號 <i class="fas fa-sort-amount-down"></i></th>
                                <th>活動名稱</th>
                                <th>活動圖片</th>
                                <th>活動簡述</th>
                                <th>活動詳述</th>
                                <th>活動所需時間</th>
                                <th>活動單價</th>
                                <th>活動座標</th>
                                <th>活動求生值</th>
                                <th>活動手作值</th>
                                <th>活動親子值</th>
                                <th>活動狀態 <i class="fas fa-sort-amount-down"></i></th>
                                <th>活動狀態異動</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>捕魚術</td>
                                <td><img src="images/fishing.jpg" alt=""></td>
                                <td>學習捕魚工具的製作，捕魚技巧。</td>
                                <td>魚類對於野味求生來說是一種很好的食物來源。所以學會了捕魚便能幫助你在野外生活下來。
                                    透過本課程你將學會捕魚工具的製作、捕魚陷阱的製作、利用礦泉水瓶或是藤條製作魚籠，學會製作魚叉，利用止血帶進行野外捕魚活動。
                                </td>
                                <td>2</td>
                                <td>500</td>
                                <td>165382.328349,2496334.003558</td>
                                <td>3</td>
                                <td>1</td>
                                <td>0</td>
                                <td>正常</td>
                                <td><button type="button" class="btn btn-danger btn-sm">下架</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>搭建庇身所</td>
                                <td><img src="images/house.jpg" alt=""></td>
                                <td>我的野外避風港</td>
                                <td>在野外活動中，遇天候不佳、受傷、蛇蟲攻擊等因素，無法返回預定營地，活
                                    動會利用附近的地形或材料製成天然的營帳過夜，以達到遮風避雨或禦寒的效
                                    果，即為庇護所，讓您學會野外搭建庇身所的技能。
                                </td>
                                <td>2</td>
                                <td>500</td>
                                <td>165382.328349,2496334.003558</td>
                                <td>0</td>
                                <td>3</td>
                                <td>3</td>
                                <td>正常</td>
                                <td><button type="button" class="btn btn-danger btn-sm">下架</button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>捕魚術</td>
                                <td><img src="images/fishing.jpg" alt=""></td>
                                <td>學習捕魚工具的製作，捕魚技巧。</td>
                                <td>魚類對於野味求生來說是一種很好的食物來源。所以學會了捕魚便能幫助你在野外生活下來。
                                    透過本課程你將學會捕魚工具的製作、捕魚陷阱的製作、利用礦泉水瓶或是藤條製作魚籠，學會製作魚叉，利用止血帶進行野外捕魚活動。
                                </td>
                                <td>2</td>
                                <td>500</td>
                                <td>165382.328349,2496334.003558</td>
                                <td>3</td>
                                <td>1</td>
                                <td>0</td>
                                <td>正常</td>
                                <td><button type="button" class="btn btn-danger btn-sm">下架</button></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>捕魚術</td>
                                <td><img src="images/fishing.jpg" alt=""></td>
                                <td>學習捕魚工具的製作，捕魚技巧。</td>
                                <td>魚類對於野味求生來說是一種很好的食物來源。所以學會了捕魚便能幫助你在野外生活下來。
                                    透過本課程你將學會捕魚工具的製作、捕魚陷阱的製作、利用礦泉水瓶或是藤條製作魚籠，學會製作魚叉，利用止血帶進行野外捕魚活動。
                                </td>
                                <td>2</td>
                                <td>500</td>
                                <td>165382.328349,2496334.003558</td>
                                <td>3</td>
                                <td>1</td>
                                <td>0</td>
                                <td>正常</td>
                                <td><button type="button" class="btn btn-danger btn-sm">下架</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <nav aria-label="pagination">
                    <ul class="pagination pagination-sm justify-content-end">
                        <li class="page-item disabled">
                            <span class="page-link">上一頁</span>
                        </li>
                        <li class="page-item"><a class="page-link " href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <span class="page-link">
                                2
                                <span class="sr-only">(current)</span>
                            </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">下一頁</a>
                        </li>
                    </ul>
                </nav>
            </main>

            <main id="keyword" role="main" class="col-md-10 ml-sm-auto px-4">
                <h2>關鍵字管理</h2>
                <form class="searchbar form-inline mt-2 mt-md-0 justify-content-end">
                    <input class="form-control mr-sm-2 form-control-sm" type="text" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0 btn-sm" type="submit">搜尋</button>
                </form>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>關鍵字 <i class="fas fa-sort-amount-down"></i></th>
                                <th>關鍵字回應 <i class="fas fa-sort-amount-down"></i></th>
                                <th>狀態 <i class="fas fa-sort-amount-down"></i></th>
                                <th>狀態異動</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input class="form-control form-control-sm" type="text"></td>
                                <td><input class="form-control form-control-sm" type="text"></td>
                                <td></td>
                                <td><button type="button" class="btn btn-primary btn-sm">新增</button></td>
                            </tr>
                            <tr>
                                <td>地址</td>
                                <td>我們的地址為:中央路中央街</td>
                                <td>正常</td>
                                <td><button type="button" class="btn btn-danger btn-sm">刪除</button></td>
                            </tr>
                            <tr>
                                <td>電話</td>
                                <td>我們的電話為: 0911111111</td>
                                <td>正常</td>
                                <td><button type="button" class="btn btn-danger btn-sm">刪除</button></td>
                            </tr>
                            <tr>
                                <td>營業時間</td>
                                <td>早上八點到晚上六點</td>
                                <td>正常</td>
                                <td><button type="button" class="btn btn-danger btn-sm">刪除</button></td>
                            </tr>
                            <tr>
                                <td>您好</td>
                                <td>歡迎來到森存者營地</td>
                                <td>下架</td>
                                <td><button type="button" class="btn btn-success btn-sm">恢復正常</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <nav aria-label="pagination">
                    <ul class="pagination pagination-sm justify-content-end">
                        <li class="page-item disabled">
                            <span class="page-link">上一頁</span>
                        </li>
                        <li class="page-item"><a class="page-link " href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <span class="page-link">
                                2
                                <span class="sr-only">(current)</span>
                            </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">下一頁</a>
                        </li>
                    </ul>
                </nav>
            </main>

            <main id="qrcode" role="main" class="col-md-10 ml-sm-auto px-4">
                <h2>QRCode管理</h2>
                <div class="scranqrcode"><i class="fas fa-camera"></i></div>
                <input type="button" value="掃描QRCode">
            </main>

            <main id="game" role="main" class="col-md-10 ml-sm-auto px-4">
                <h2>尋找森存者遊戲管理</h2>
                <p>同一時段只有六名工作人員</p>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>管理員編號</th>
                                <th>管理員座標</th>
                                <th>異動</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input class="form-control form-control-sm" type="text"></td>
                                <td><input class="form-control form-control-sm" type="text"></td>
                                <td><button type="button" class="btn btn-primary btn-sm">新增</button></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>165382.328349,2496334.003558</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>165382.328349,2496334.003558</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>165382.328349,2496334.003558</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>165382.328349,2496334.003558</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>165382.328349,2496334.003558</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>165382.328349,2496334.003558</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <nav aria-label="pagination">
                    <ul class="pagination pagination-sm justify-content-end">
                        <li class="page-item disabled">
                            <span class="page-link">上一頁</span>
                        </li>
                        <li class="page-item"><a class="page-link " href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <span class="page-link">
                                2
                                <span class="sr-only">(current)</span>
                            </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">下一頁</a>
                        </li>
                    </ul>
                </nav>
            </main>

            <main id="eventEvalReport" role="main" class="col-md-10 ml-sm-auto px-4">
                <h2>活動評價檢舉管理</h2>
                <form class="searchbar form-inline mt-2 mt-md-0 justify-content-end">
                    <input class="form-control mr-sm-2 form-control-sm" type="text" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0 btn-sm" type="submit">搜尋</button>
                </form>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>活動評價檢舉編號</th>
                                <th>評價內容</th>
                                <th>檢舉原因</th>
                                <th>檢舉狀態異動</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>草擬馬</td>
                                <td>這是髒話吧</td>
                                <td><button type="button" class="btn btn-danger btn-sm">刪除評價</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>草擬馬</td>
                                <td>這是髒話吧</td>
                                <td><button type="button" class="btn btn-danger btn-sm">刪除評價</button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>草擬馬</td>
                                <td>這是髒話吧</td>
                                <td><button type="button" class="btn btn-danger btn-sm">刪除評價</button></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>草擬馬</td>
                                <td>這是髒話吧</td>
                                <td><button type="button" class="btn btn-danger btn-sm">刪除評價</button></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>草擬馬</td>
                                <td>這是髒話吧</td>
                                <td><button type="button" class="btn btn-danger btn-sm">刪除評價</button></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>草擬馬</td>
                                <td>這是髒話吧</td>
                                <td><button type="button" class="btn btn-danger btn-sm">刪除評價</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <nav aria-label="pagination">
                    <ul class="pagination pagination-sm justify-content-end">
                        <li class="page-item disabled">
                            <span class="page-link">上一頁</span>
                        </li>
                        <li class="page-item"><a class="page-link " href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <span class="page-link">
                                2
                                <span class="sr-only">(current)</span>
                            </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">下一頁</a>
                        </li>
                    </ul>
                </nav>
            </main>

            <main id="gamePhotoReport" role="main" class="col-md-10 ml-sm-auto px-4">
                <h2>尋找森存者遊戲照片檢舉管理</h2>
                <form class="searchbar form-inline mt-2 mt-md-0 justify-content-end">
                    <input class="form-control mr-sm-2 form-control-sm" type="text" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0 btn-sm" type="submit">搜尋</button>
                </form>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>照片檢舉編號</th>
                                <th>照片</th>
                                <th>檢舉原因</th>
                                <th>檢舉狀態異動</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img class="gamephoto" src="images/Report_1.jpg" alt=""></td>
                                <td>太可怕了</td>
                                <td><button type="button" class="btn btn-danger btn-sm">刪除照片</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img class="gamephoto" src="images/Report_2.jpg" alt=""></td>
                                <td>太可怕了</td>
                                <td><button type="button" class="btn btn-danger btn-sm">刪除照片</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img class="gamephoto" src="images/Report_3.jpg" alt=""></td>
                                <td>太可怕了</td>
                                <td><button type="button" class="btn btn-danger btn-sm">刪除照片</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <nav aria-label="pagination">
                    <ul class="pagination pagination-sm justify-content-end">
                        <li class="page-item disabled">
                            <span class="page-link">上一頁</span>
                        </li>
                        <li class="page-item"><a class="page-link " href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <span class="page-link">
                                2
                                <span class="sr-only">(current)</span>
                            </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">下一頁</a>
                        </li>
                    </ul>
                </nav>
            </main>

            <main id="noteCommReport" role="main" class="col-md-10 ml-sm-auto px-4">
                <h2>手札留言檢舉管理</h2>
                <form class="searchbar form-inline mt-2 mt-md-0 justify-content-end">
                    <input class="form-control mr-sm-2 form-control-sm" type="text" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0 btn-sm" type="submit">搜尋</button>
                </form>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>手札留言檢舉編號</th>
                                <th>評價內容</th>
                                <th>檢舉原因</th>
                                <th>檢舉狀態異動</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>草擬馬</td>
                                <td>這是髒話吧</td>
                                <td><button type="button" class="btn btn-danger btn-sm">刪除評價</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>草擬馬</td>
                                <td>這是髒話吧</td>
                                <td><button type="button" class="btn btn-danger btn-sm">刪除評價</button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>草擬馬</td>
                                <td>這是髒話吧</td>
                                <td><button type="button" class="btn btn-danger btn-sm">刪除評價</button></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>草擬馬</td>
                                <td>這是髒話吧</td>
                                <td><button type="button" class="btn btn-danger btn-sm">刪除評價</button></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>草擬馬</td>
                                <td>這是髒話吧</td>
                                <td><button type="button" class="btn btn-danger btn-sm">刪除評價</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <nav aria-label="pagination">
                    <ul class="pagination pagination-sm justify-content-end">
                        <li class="page-item disabled">
                            <span class="page-link">上一頁</span>
                        </li>
                        <li class="page-item"><a class="page-link " href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <span class="page-link">
                                2
                                <span class="sr-only">(current)</span>
                            </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">下一頁</a>
                        </li>
                    </ul>
                </nav>
            </main>

        </div>
    </div>



    
    <!-- footer -->
<?php include 'footer.php';?>
<!-- footer -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            $('.menu').click(function () {
                var $clicked = $(this)
                $('.menu').each(function () {
                    var $menu = $(this);
                    if (!$menu.is($clicked)) {
                        $($menu.attr('data-item')).hide();
                        $menu.removeClass('selected');
                    }
                });
                $($clicked.attr('data-item')).toggle();
                $clicked.addClass('selected');
            });
        });


    </script>

<script src="js/sessionPage.js"></script>
</body>

</html>