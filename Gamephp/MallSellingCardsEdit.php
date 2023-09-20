<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商城管理/商城活動</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/MallSellingCardsEdit.css">
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
                    <li class="item1"><a href="./MallDrawCard.php">商城抽卡</a></li>
                    <li class="item2"><a href="./MallActivities.php">商城活動</a></li>
                    <li class="item3"><a href="./MallSellingCards.php">賣卡設定</a></li>
                </ul>
            </div>
        </section>
        <section class="container">
            <div class="settings">
                <div class="basic">
                    <div class="item item1">
                        <div class="item-title1">賣卡設定-編輯卡牌與裝備的販售金額</div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            皇：
                            <form action="">
                                <input type="number" name="" id="">
                            </form>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            神：
                            <form action="">
                                <input type="number" name="" id="">
                            </form>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            普：
                            <form action="">
                                <input type="number" name="" id="">
                            </form>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            裝備：
                            <form action="">
                                <input type="number" name="" id="">
                            </form>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            修改時間：
                            <form action="">
                                2023/8/1 23:59
                            </form>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            修改人：
                            <form action="">
                                TOM
                            </form>
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