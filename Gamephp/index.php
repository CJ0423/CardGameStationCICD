<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>後台首頁</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <header>
        <!-- <nav>
            <div class="nav-logo"><img src="./img/logo.png" alt=""></div>
            <input type="checkbox" name="nav-checkbox" id="nav-checkbox">
            <label for="nav-checkbox"></label>
            <ul class="nav-menu">
                <li class="nav-user">
                    <ul>
                        <li class="admin">管理員：<span>May</span></li>
                        <li class="nav-user-navigation">
                            <h1>遊戲設定</h1>
                            <ul class="ul-navigation">
                                <li class="item1"><a href="#">權限管理</a></li>
                                <li class="item2"><a href="#">會員管理</a></li>
                                <li class="item3"><a href="#">商店管理</a></li>
                                <li class="item4"><a href="#">卡牌管理</a></li>
                                <li class="item5"><a href="#">首頁管理</a></li>
                                <li class="item6"><a href="#">知識村管理</a></li>
                                <li class="item7"><a href="#">訂單管理</a></li>
                            </ul>
                        </li>
                        <li class="logout"><a href="#">登出</a></li>
                    </ul>
                </li>
            </ul>
        </nav> -->
        <?php 
        require_once("./components/nav.php")
        ?>
    </header>
    <main>
        <section class="mask"></section>
        <section class="system">
            <div class="nav-navigation">
                <ul>
                    <li class="item1"><a href="#">各項指標總覽</a></li>
                    <li class="item2"><a href="./gameAllConfiguration.php">遊戲整體配置</a></li>
                    <li class="item3"><a href="./gameSystemSettings.php">系統設置</a></li>
                    <li class="item4"><a href="./gameManagementRecords.php">管理紀錄</a></li>
                </ul>
            </div>
        </section>
        <section class="container index-main-container">
            <a>
                <div class="main-item container-item1">
                    <h1>遊戲首頁廣告</h1>
                    <div class="text horizontal-item">
                        <div class="first-text"><span>2</span>角色</div>
                        <div class="second-text"><span>3</span>個對話</div>
                    </div>
                </div>
            </a>
            <a>
                <div class="main-item container-item2">
                    <h1>權限總覽</h1>
                    <div class="text horizontal-item">
                        <div class="first-text"><span>2</span>角色</div>
                        <div class="second-text"><span>3</span>個對話</div>
                    </div>
                </div>
            </a>
            <a>
                <div class="main-item container-item3">
                    <h1>註冊會員總覽</h1>
                    <div class="text vertical-item">
                        <div class="first-text">今日註冊共<span>200</span>位會員</div>
                        <div class="second-text">總共<span>2000</span>位會員</div>
                    </div>
                </div>
            </a>
            <a>
                <div class="main-item container-item4">
                    <h1>VIP總覽</h1>
                    <div class="text vertical-item">
                        <div class="first-text">今日共<span>20</span>位VIP會員</div>
                        <div class="second-text">總共<span>100</span>位VIP會員</div>
                    </div>
                </div>
            </a>
            <a>
                <div class="main-item container-item5">
                    <h1>商店總覽</h1>
                    <div class="text vertical-item">
                        <div class="first-text">今日共<span>2000</span>位會員抽卡</div>
                        <div class="second-text">今日共<span>2000</span>位VIP抽卡</div>
                    </div>
                </div>
            </a>
            <a>
                <div class="main-item container-item6">
                    <h1>卡片總覽</h1>
                    <div class="text vertical-item">
                        <div class="first-text">今日新增共<span>20</span>張卡牌</div>
                        <div class="second-text">總共<span>2000</span>張卡牌</div>
                        <div class="tired-text">皇卡<span>200</span>張</div>
                        <div class="fourth-text">神卡<span>200</span>張</div>
                        <div class="fifth-text">普卡<span>200</span>張</div>
                    </div>
                </div>
            </a>
            <a>
                <div class="main-item container-item7">
                    <h1>知識村總覽</h1>
                    <div class="text vertical-item">
                        <div class="first-text">今日新進共<span>200</span>個題庫</div>
                        <div class="second-text">總共<span>2000</span>個題庫</div>
                        <div class="tired-text">國文科<span>200</span>個題庫</div>
                        <div class="fourth-text">數學科<span>200</span>個題庫</div>
                    </div>
                </div>
            </a>
            <a>
                <div class="main-item container-item8">
                    <h1>訂單總覽</h1>
                    <div class="text vertical-item">
                        <div class="first-text">今日收入共<span>2000</span>元</div>
                        <div class="second-text">本日收入共<span>20000</span>元</div>
                    </div>
                </div>
            </a>
        </section>
    </main>
    <script src="./js/script.js"></script>
</body>

</html>