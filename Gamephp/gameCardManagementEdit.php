<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>卡牌管理/卡牌管理</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/gameCardManagementEdit.css">
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
                    <li class="item1"><a href="./gameCardManagement.php">卡牌管理</a></li>
                    <li class="item2"><a href="./NPClist.php">NPC管理</a></li>
                    <li class="item3"><a href="./CardBookManagement.php">圖鑑管理</a></li>
                </ul>
            </div>
        </section>
        <section class="container">
            <div class="settings">
                <div class="basic">
                    <div class="item item1">
                        <div class="item-title1">卡牌基本資訊：</div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            (1) 卡牌(人物)名稱：
                            <form action="">
                                <input type="text" name="" id="">
                            </form>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            (2) 卡片圖檔：
                            <div class="label-group">
                                <label for="subitem-img1">選擇圖檔</label>
                                <input type="file" name="subitem-img1" id="subitem-img1">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            (3) 生命力數字：
                            <form action="">
                                <input type="number" name="" id="">
                            </form>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            (4) 攻擊力數字：
                            <p>剪刀</p>
                            <form action="">
                                <input type="number" name="" id="">
                            </form>
                            <p>石頭</p>
                            <form action="">
                                <input type="number" name="" id="">
                            </form>
                            <p>布</p>
                            <form action="">
                                <input type="number" name="" id="">
                            </form>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            (5) 卡片文字介紹：
                            <form action="">
                                <input type="text" name="" id="">
                            </form>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            (6) 卡片語音介紹(上傳語音檔案)點i的ICON：
                            <div class="label-group">
                                <label for="subitem1-mp3">選擇音檔</label>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            (7) 出場叫囂語音(上傳語音檔案)點i的ICON：
                            <div class="label-group">
                                <label for="subitem2-mp3">選擇音檔</label>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            (8) 是否丟入\抽卡池：
                            <form action="">
                                <label for="item1"><input type="checkbox" name="item1" id="item1">否</label>
                                <label for="item2"><input type="checkbox" name="item2" id="item2">抽卡</label>
                                <label for="item3"><input type="checkbox" name="item3" id="item3">VIP抽卡</label>
                            </form>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            (9) 選擇圖鑑系列(可單選複選)：
                            <form action="">
                                <label for="item1"><input type="checkbox" name="item1" id="item1">大墩王國</label>
                                <label for="item2"><input type="checkbox" name="item2" id="item2">暗黑王國</label>
                                <label for="item3"><input type="checkbox" name="item3" id="item3">金幣王國</label>
                            </form>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            (10) 
                            <select name="select-up-down" id="select-up-down" class="select-up-down">
                                <option value="">上架/下架</option>
                                <option value="上架">上架</option>
                                <option value="下架">下架</option>
                            </select>
                        </div>
                    </div>
                    <div class="item item1">
                        <div class="item-title1">絕技：</div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            絕技名稱：
                            <form action="">
                                <input type="text" name="" id="">
                            </form>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            絕技介紹：
                            <form action="">
                                <input type="text" name="" id="">
                            </form>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            絕技圖檔全版：
                            <div class="label-group">
                                <label for="subitem-img3">選擇圖檔</label>
                                <input type="file" name="subitem-img2" id="subitem-img2">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            絕技攻擊圖檔：
                            <div class="label-group">
                                <label for="subitem-img3">選擇圖檔</label>
                                <input type="file" name="subitem-img3" id="subitem-img3">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            絕技語音介紹：
                            <form action="">
                                <input type="text" name="" id="">
                            </form>
                        </div>
                    </div>

                    <div class="item">
                        <div class="item-subitem"> 
                            絕技效果(可單選複選)：
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            <form action="">
                                <label for="item1"><input type="checkbox" name="item1" id="item1">
                                    扣血：無論任何狀況，對手減(-)
                                    <input type="number" name="" id="">
                                    HP
                                </label>
                            </form>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            <form action="">
                                <label for="item1"><input type="checkbox" name="item1" id="item1">
                                    回血：無論任何狀況，我方加(+)
                                    <input type="number" name="" id="">
                                    HP
                                </label>
                            </form>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            <form action="">
                                <label for="item1"><input type="checkbox" name="item1" id="item1">
                                    攻擊：我方加(+)
                                    <input type="number" name="" id="">
                                    攻擊力(剪刀石頭布)
                                </label>
                            </form>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            <form action="">
                                <label for="item1"><input type="checkbox" name="item1" id="item1">
                                    破防：對方減(-)
                                    <input type="number" name="" id="">
                                    防禦力(剪刀石頭布)
                                </label>
                            </form>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            <form action="">
                                <label for="item1"><input type="checkbox" name="item1" id="item1">
                                    必殺：無論任何狀況，對
                                    <input type="number" name="" id="">
                                    等級一擊斃殺
                                </label>
                            </form>
                        </div>
                    </div>
                    
                    

                </div>
            </div>
        </section>
    </main>
    <script src="./js/script.js"></script>
</body>

</html>