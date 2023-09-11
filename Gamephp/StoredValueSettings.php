<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>儲值管理</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/StoredValueSettings.css">
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
                    <li class="item1"><a href="./gameOrderManagement.php">訂單管理</a></li>
                    <li class="item2"><a href="#">儲值管理</a></li>
                </ul>
            </div>
        </section>
        <section class="container">
            <div class="settings">
                <div class="basic">
                    <div class="item item1">
                        <div class="item-title1">儲值管理</div>
                    </div>
                    <div class="item">
                        <div class="item-title">VIP訂閱年費：</div>
                        <div class="item-subitem">
                            <div class="subitem">
                                <input type="number" name="" id="" placeholder="1999">
                            </div>
                        </div>
                    </div>
                    <div class="item2">
                        <div class="item-title">&emsp;&emsp;&emsp;1.知識村：解鎖所有VIP題型，完成答題金幣X2</div>
                    </div>
                    <div class="item2">
                        <div class="item-title">&emsp;&emsp;&emsp;2.商城：解鎖VIP抽卡</div>
                    </div>
                    <div class="item2">
                        <div class="item-title"><div class="item-title">&emsp;&emsp;&emsp;3.可獲得金幣：</div>
                        <div class="item-subitem">
                            <div class="subitem">
                                <input type="number" name="" id="" placeholder="3000">
                                金幣
                            </div>
                            <div class="subitem">
                                <input type="number" name="" id="" placeholder="100">
                                卡鬥劵
                            </div>
                        </div></div>
                    </div>
                    <div class="item">
                        <div class="item-title">儲值：</div>
                        <div class="item-subitem">
                            <div class="subitem">
                                <input type="number" name="" id="" placeholder="1999">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-title">可獲得金幣：</div>
                        <div class="item-subitem">
                            <div class="subitem">
                                <input type="number" name="" id="" placeholder="3000">
                                金幣
                            </div>
                            <div class="subitem">
                                <input type="number" name="" id="" placeholder="100">
                                卡鬥劵
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="save">
                <button type="button">確認修改</button>
            </div>
        </section>
    </main>
    <script src="./js/script.js"></script>
</body>

</html>