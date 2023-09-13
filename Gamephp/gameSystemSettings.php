<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>遊戲設定/系統設置</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/gameSystemSettings.css">
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
                    <li class="item1"><a href="./index.php">各項指標總覽</a></li>
                    <li class="item2"><a href="./gameAllConfiguration.php">遊戲整體配置</a></li>
                    <li class="item3"><a href="#">系統設置</a></li>
                    <li class="item4"><a href="./gameManagementRecords.php">管理紀錄</a></li>
                    <li class="item5"><a href="./gamePromptText.php">提示文字</a></li>
                </ul>
            </div>
        </section>
        <section class="container">
            <div class="settings">
                <div class="item item1">
                    <div class="item-title">網站標題：</div>
                    <div class="item-subitem">
                        <input type="text" name="web-title" id="web-title">
                    </div>
                </div>
                <div class="item item2">
                    <div class="item-title">網站註解：</div>
                    <div class="item-subitem">
                        <input type="text" name="web-comment" id="web-comment">
                    </div>
                </div>
                <div class="item item3">
                    <div class="item-title">網址列icon：</div>
                    <div class="item-subitem">
                        <div class="subitem-img">
                            <img src="./img/png.png" alt="上傳的圖片">
                        </div>
                        <div class="subitem-group">
                            <div class="items">
                                <label class="upload-btn"><input type="file" name="upload-img" id="upload-img"></label>
                                <button type="button">刪除圖片</button>
                            </div>
                            <div class="text">建議上傳尺寸30x30像素</div>
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