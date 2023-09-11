<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>卡片管理新增/編修/刪除</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/CardInformation.css">
</head>

<body>
    <header>
        <nav>
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
        </nav>
    </header>
    <main>
        <section class="mask"></section>
        <section class="system">
            <div class="nav-navigation">
                <ul>
                    <li class="item1"><a href="#">各項指標總覽</a></li>
                    <li class="item2"><a href="#">遊戲整體配置</a></li>
                    <li class="item3"><a href="#">系統設置</a></li>
                    <li class="item4"><a href="#">登入紀錄</a></li>
                </ul>
            </div>
        </section>
        <section class="container">
            <ul>
                <li>
                    <h1>卡牌基本資訊:</h1>
                </li>
                <li>
                    (1)卡片(人物)名稱
                    <input type="text" name="card-name" class="card-name" placeholder="卡片名稱">
                </li>
                <li>
                    (2)卡片檔案
                    <div class="subitem-img">
                        <img src="./img/png.png" alt="上傳的圖片">
                    </div>
                    <div class="subitem-group">
                        <div class="items">
                            <label class="upload-btn">
                                <input type="file" name="upload-img" id="upload-img">
                            </label>
                            <button type="button">刪除圖片</button>
                        </div>
                    </div>
                </li>
                <li>
                    (3)生命力數字：
                    <input type="number" name="life-number" class="life-number" placeholder="數字">
                </li>
                <li>
                    (4)攻擊力數字：
                    <input type="number" name="scissors-number" class="scissors-number" placeholder="剪刀">、
                    <input type="number" name="stone-number" class="stone-number" placeholder="石頭">、
                    <input type="number" name="cloth-number" class="cloth-number" placeholder="布">
                </li>
                <li>
                    (5)卡片文字介紹
                </li>
                <li>
                    (6)卡片語音介紹
                </li>
                <li>
                    (7)出場叫囂語音
                </li>
                <li>
                    (8)是否丟入\抽卡池?(複選)
                </li>
                <li>
                    (9)選擇圖鑑系列(單選)
                </li>
                <li>
                    (10)上架/下架
                </li>
            </ul>
            <ul>
                <li>
                    <h1>絕技:</h1>
                </li>
                <li>
                    絕技名稱
                </li>
                <li>
                    絕技介紹
                </li>
                <li>
                    絕技圖檔(上傳圖檔)
                </li>
                <li>
                    絕技語音介紹(上傳語音)
                </li>
                <li>
                    <h2>
                        扣血：無論任何情況，對手減(-)HP
                    </h2>
                </li>
                <li>
                    <h2>
                        回血：無論任何情況，我方加(+)HP
                    </h2>
                </li>
                <li>
                    <h2>
                        攻擊：我方加(+)攻擊力(剪刀石頭布)
                    </h2>
                </li>
                <li>
                    <h2>
                        破防：對方減(-)攻擊力(剪刀石頭布)
                    </h2>
                </li>
                <li>
                    <h2>
                        必殺：無論任何狀況，對等級一擊斃殺(皇/神/普)
                    </h2>
                </li>
            </ul>
        </section>
    </main>
    <script src="./js/script.js"></script>
</body>

</html>