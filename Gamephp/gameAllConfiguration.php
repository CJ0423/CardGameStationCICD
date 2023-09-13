<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>遊戲整體配置</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/gameAllConfiguration.css">
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
                    <li class="item2"><a href="#">遊戲整體配置</a></li>
                    <li class="item3"><a href="./gameSystemSettings.php">系統設置</a></li>
                    <li class="item4"><a href="./gameManagementRecords.php">管理紀錄</a></li>
                    <li class="item5"><a href="./gamePromptText.php">提示文字</a></li>
                </ul>
            </div>
        </section>
        <section class="container">
            <div class="settings">
                <div class="basic">
                    <div class="item item1">
                        <div class="item-title">暱稱修改：</div>
                        <div class="item-subitem">
                            第二次須扣款
                            <input type="text" name="rename-cost" id="rename-cost">
                            金幣
                        </div>
                    </div>
                    <div class="item item2">
                        <div class="item-title">大頭照設定：</div>
                        <div class="item-subitem">
                            <div class="subitem subitem1"><a href="#">1.列表</a></div>
                            <div class="subitem subitem2"><a href="#">2.新增/編修</a></div>
                        </div>
                    </div>
                    <div class="item item3">
                        <div class="item-title">註冊禮：</div>
                        <div class="item-subitem">
                            註冊成功系統贈送皇卡、神卡、普卡各一張(存取資料庫圖鑑)
                        </div>
                    </div>
                    <div class="item item4">
                        <div class="item-title">知識村音效、特效：</div>
                        <div class="item-subitem">
                            <div class="subitem subitem1">
                                <a href="#">1.背景音樂</a>
                            </div>
                            <div class="subitem subitem2">
                                <a href="#">2.答對音效</a>
                            </div>
                            <div class="subitem subitem3">
                                <a href="#">3.答對特效</a>
                            </div>
                            <div class="subitem subitem4">
                                <a href="#">4.答錯音效</a>
                            </div>
                            <div class="subitem subitem5">
                                <a href="#">5.答錯特效</a>
                            </div>
                        </div>
                    </div>
                    <div class="item item5">
                        <div class="item-title">卡鬥：</div>
                        <div class="item-subitem">
                            <div class="subitem subitem1">
                                對決一次需扣<input type="text" name="" id="">
                                張卡鬥券
                            </div>
                            <div class="subitem subitem2">
                                出拳倒數
                                <input type="text" name="" id="">
                                秒
                            </div>
                            <div class="subitem subitem3">
                                選擇出場卡片順序倒數
                                <input type="text" name="" id="">
                                秒
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ticker">
                    <h1>LOADING遊戲提醒文字(跑馬燈)：</h1>
                    <div class="text-group">
                        <input type="text" name="text1" id="text1" class="text text1">
                        <input type="text" name="text2" id="text2" class="text text2">
                        <input type="text" name="text3" id="text3" class="text text3">
                        <input type="text" name="text4" id="text4" class="text text4">
                        <input type="text" name="text5" id="text5" class="text text5">
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