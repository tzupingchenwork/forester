        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">森存者</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <b class="caret"></b></a>
                    <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <b class="caret"></b></a> -->
                    <ul class="dropdown-menu">
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active" >
                        <a href="admin.php">管理員帳號管理</a>
                    </li>
                    <li>
                        <a href="member.php">會員帳號管理</a>
                    </li>
                    <li>
                        <a href="order.php">訂單管理</a>
                    </li>
                    <li>
                        <a href="ticket.php">門票管理</a>
                    </li>
                    <li>
                        <a href="event.php">活動管理</a>
                    </li>
                    <li>
                        <a href="keyword.php">關鍵字管理</a>
                    </li>
                    <li>
                        <a href="game.php">尋找森存者遊戲管理</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo">檢舉管理 <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="eventEvalReport.php">活動評價管理</a>
                            </li>
                            <li>
                                <a href="gamePhotoReport.php">照片上傳管理</a>
                            </li>
                            <li>
                                <a href="noteCommReport.php">手札留言管理</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>