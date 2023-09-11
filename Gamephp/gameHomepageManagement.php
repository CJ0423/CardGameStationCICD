<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首頁管理</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/gameHomepageManagement.css">
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
                    <!-- <li class="item1"><a href="#">權限設定</a></li>
                    <li class="item2"><a href="#">管理員列表</a></li> -->
                    <!-- <li class="item3"><a href="#">系統設置</a></li>
                    <li class="item4"><a href="#">管理紀錄</a></li> -->
                </ul>
            </div>
        </section>
        <section class="container">
            <h1>首頁管理</h1>
            <div class="main-group">
                <div class="content-group">
                    <div class="item role-group">
                        <h1>角色圖</h1>
                        <div class="subitem-group">
                            <div class="subitems subitem1">
                                <div class="label-group">
                                    <label for="subitem1-img">上傳圖檔</label>
                                    <input type="file" name="subitem1-img" id="subitem1-img">
                                </div>
                                <input type="text" placeholder="請輸入文字">
                                <div class="label-group"><label for="subitem1-audio">上傳音檔</label>
                                    <input type="file" name="subitem1-audio" id="subitem1-audio">
                                </div>
                            </div>
                            <div class="subitems subitem2">
                                <div class="label-group">
                                    <label for="subitem2-img">上傳圖檔</label>
                                    <input type="file" name="subitem2-img" id="subitem2-img">
                                </div>
                                <input type="text" placeholder="請輸入文字">
                                <div class="label-group"><label for="subitem2-audio">上傳音檔</label>
                                    <input type="file" name="subitem2-audio" id="subitem2-audio">
                                </div>
                            </div>
                            <div class="subitems subitem3">
                                <div class="label-group">
                                    <label for="subitem3-img">上傳圖檔</label>
                                    <input type="file" name="subitem3-img" id="subitem3-img">
                                </div>
                                <input type="text" placeholder="請輸入文字">
                                <div class="label-group"><label for="subitem3-audio">上傳音檔</label>
                                    <input type="file" name="subitem3-audio" id="subitem3-audio">
                                </div>
                            </div>
                            <div class="subitems subitem4">
                                <div class="label-group">
                                    <label for="subitem4-img">上傳圖檔</label>
                                    <input type="file" name="subitem4-img" id="subitem4-img">
                                </div>
                                <input type="text" placeholder="請輸入文字">
                                <div class="label-group"><label for="subitem4-audio">上傳音檔</label>
                                    <input type="file" name="subitem4-audio" id="subitem4-audio">
                                </div>
                            </div>
                            <div class="subitems subitem5">
                                <div class="label-group">
                                    <label for="subitem5-img">上傳圖檔</label>
                                    <input type="file" name="subitem5-img" id="subitem5-img">
                                </div>
                                <input type="text" placeholder="請輸入文字">
                                <div class="label-group"><label for="subitem5-audio">上傳音檔</label>
                                    <input type="file" name="subitem5-audio" id="subitem5-audio">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item bgi-group">
                        <h1>背景圖</h1>
                        <div class="subitem-group">
                            <div class="subitems subitem6">
                                <div class="label-group">
                                    <label for="bgc-img">背景圖片上傳</label>
                                    <input type="file" name="bgc-img" id="bgc-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img-group"><img src="./img/game.png" alt="遊戲畫面"></div>
            </div>
            <div class="btn-group">
                <button type="button" class="sure-btn">確認修改</button>
            </div>
        </section>
    </main>
    <script src="./js/script.js"></script>
</body>

</html>