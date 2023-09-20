<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>卡牌管理/圖鑑管理</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/CardBookManagementEdit.css">
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
                    <div class="item">
                        <div class="item-subitem"> 
                            (1) 圖鑑系列名稱(可單選複選)：
                            <form action="">
                                <label for="illustrated1"><input type="checkbox" name="illustrated1" id="illustrated1">大墩王國</label>
                                <label for="illustrated2"><input type="checkbox" name="illustrated2" id="illustrated2">暗黑王國</label>
                                <label for="illustrated3"><input type="checkbox" name="illustrated3" id="illustrated3">金幣王國</label>
                            </form>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            (2) 選擇卡牌：
                            <div class="card-number">
                                <form action="" >
                                    <label for="tab-card1"><input type="checkbox" name="tab-card1" id="tab-card1">A卡</label>
                                    <label for="tab-card2"><input type="checkbox" name="tab-card2" id="tab-card2">A卡</label>
                                    <label for="tab-card3"><input type="checkbox" name="tab-card3" id="tab-card3">A卡</label>
                                    <label for="tab-card4"><input type="checkbox" name="tab-card4" id="tab-card4">A卡</label>
                                    <label for="tab-card5"><input type="checkbox" name="tab-card5" id="tab-card5">A卡</label>
                                    <label for="tab-card6"><input type="checkbox" name="tab-card6" id="tab-card6">A卡</label>
                                    <label for="tab-card7"><input type="checkbox" name="tab-card7" id="tab-card7">A卡</label>
                                    <label for="tab-card8"><input type="checkbox" name="tab-card8" id="tab-card8">A卡</label>
                                    <label for="tab-card9"><input type="checkbox" name="tab-card9" id="tab-card9">A卡</label>
                                </form>
                                <form action="" >
                                    <label for="tab-card10"><input type="checkbox" name="tab-card10" id="tab-card10">A卡</label>
                                    <label for="tab-card11"><input type="checkbox" name="tab-card11" id="tab-card11">A卡</label>
                                    <label for="tab-card12"><input type="checkbox" name="tab-card12" id="tab-card12">A卡</label>
                                    <label for="tab-card13"><input type="checkbox" name="tab-card13" id="tab-card13">A卡</label>
                                    <label for="tab-card14"><input type="checkbox" name="tab-card14" id="tab-card14">A卡</label>
                                    <label for="tab-card15"><input type="checkbox" name="tab-card15" id="tab-card15">A卡</label>
                                    <label for="tab-card16"><input type="checkbox" name="tab-card16" id="tab-card16">A卡</label>
                                    <label for="tab-card17"><input type="checkbox" name="tab-card17" id="tab-card17">A卡</label>
                                    <label for="tab-card18"><input type="checkbox" name="tab-card18" id="tab-card18">A卡</label>
                                </form>
                                <form action="" >
                                    <label for="tab-card19"><input type="checkbox" name="tab-card19" id="tab-card19">A卡</label>
                                    <label for="tab-card20"><input type="checkbox" name="tab-card20" id="tab-card20">A卡</label>
                                    <label for="tab-card21"><input type="checkbox" name="tab-card21" id="tab-card21">A卡</label>
                                    <label for="tab-card22"><input type="checkbox" name="tab-card22" id="tab-card22">A卡</label>
                                    <label for="tab-card23"><input type="checkbox" name="tab-card23" id="tab-card23">A卡</label>
                                    <label for="tab-card24"><input type="checkbox" name="tab-card24" id="tab-card24">A卡</label>
                                    <label for="tab-card25"><input type="checkbox" name="tab-card25" id="tab-card25">A卡</label>
                                    <label for="tab-card26"><input type="checkbox" name="tab-card26" id="tab-card26">A卡</label>
                                    <label for="tab-card27"><input type="checkbox" name="tab-card27" id="tab-card27">A卡</label>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            (3) 獲得圖鑑兌換獎勵(最多勾選三組)：
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            <label for="reward1"><input type="checkbox" name="reward1" id="reward1">
                                金幣
                                <input type="number" name="" id="">
                            </label>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            <label for="reward2"><input type="checkbox" name="reward2" id="reward2">
                                卡鬥劵
                                <input type="number" name="" id="">
                                張
                            </label>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            <label for="reward3"><input type="checkbox" name="reward3" id="reward3">
                                卡牌
                            </label>
                            <div class="card-number">
                                <form action="" >
                                    <label for="card1-1"><input type="checkbox" name="card1-1" id="card1-1">隨機</label>
                                    <label for="card1-2"><input type="checkbox" name="card1-2" id="card1-2">A卡</label>
                                    <label for="card1-3"><input type="checkbox" name="card1-3" id="card1-3">A卡</label>
                                    <label for="card1-4"><input type="checkbox" name="card1-4" id="card1-4">A卡</label>
                                    <label for="card1-5"><input type="checkbox" name="card1-5" id="card1-5">A卡</label>
                                    <label for="card1-6"><input type="checkbox" name="card1-6" id="card1-6">A卡</label>
                                    <label for="card1-7"><input type="checkbox" name="card1-7" id="card1-7">A卡</label>
                                    <label for="card1-8"><input type="checkbox" name="card1-8" id="card1-8">A卡</label>
                                    <label for="card1-9"><input type="checkbox" name="card1-9" id="card1-9">A卡</label>
                                </form>
                                <form action="" >
                                    <label for="card1-10"><input type="checkbox" name="card1-10" id="card1-10">A卡</label>
                                    <label for="card1-11"><input type="checkbox" name="card1-11" id="card1-11">A卡</label>
                                    <label for="card1-12"><input type="checkbox" name="card1-12" id="card1-12">A卡</label>
                                    <label for="card1-13"><input type="checkbox" name="card1-13" id="card1-13">A卡</label>
                                    <label for="card1-14"><input type="checkbox" name="card1-14" id="card1-14">A卡</label>
                                    <label for="card1-15"><input type="checkbox" name="card1-15" id="card1-15">A卡</label>
                                    <label for="card1-16"><input type="checkbox" name="card1-16" id="card1-16">A卡</label>
                                    <label for="card1-17"><input type="checkbox" name="card1-17" id="card1-17">A卡</label>
                                    <label for="card1-18"><input type="checkbox" name="card1-18" id="card1-18">A卡</label>
                                </form>
                                <form action="" >
                                    <label for="card1-19"><input type="checkbox" name="card1-19" id="card1-19">A卡</label>
                                    <label for="card1-20"><input type="checkbox" name="card1-20" id="card1-20">A卡</label>
                                    <label for="card1-21"><input type="checkbox" name="card1-21" id="card1-21">A卡</label>
                                    <label for="card1-22"><input type="checkbox" name="card1-22" id="card1-22">A卡</label>
                                    <label for="card1-23"><input type="checkbox" name="card1-23" id="card1-23">A卡</label>
                                    <label for="card1-24"><input type="checkbox" name="card1-24" id="card1-24">A卡</label>
                                    <label for="card1-25"><input type="checkbox" name="card1-25" id="card1-25">A卡</label>
                                    <label for="card1-26"><input type="checkbox" name="card1-26" id="card1-26">A卡</label>
                                    <label for="card1-27"><input type="checkbox" name="card1-27" id="card1-27">A卡</label>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            <label for="reward4"><input type="checkbox" name="reward4" id="reward4">
                                卡牌
                            </label>
                            <div class="card-number">
                                <form action="" >
                                    <label for="card2-1"><input type="checkbox" name="card2-1" id="card2-1">隨機</label>
                                    <label for="card2-2"><input type="checkbox" name="card2-2" id="card2-2">A卡</label>
                                    <label for="card2-3"><input type="checkbox" name="card2-3" id="card2-3">A卡</label>
                                    <label for="card2-4"><input type="checkbox" name="card2-4" id="card2-4">A卡</label>
                                    <label for="card2-5"><input type="checkbox" name="card2-5" id="card2-5">A卡</label>
                                    <label for="card2-6"><input type="checkbox" name="card2-6" id="card2-6">A卡</label>
                                    <label for="card2-7"><input type="checkbox" name="card2-7" id="card2-7">A卡</label>
                                    <label for="card2-8"><input type="checkbox" name="card2-8" id="card2-8">A卡</label>
                                    <label for="card2-9"><input type="checkbox" name="card2-9" id="card2-9">A卡</label>
                                </form>
                                <form action="" >
                                    <label for="card2-10"><input type="checkbox" name="card2-10" id="card2-10">A卡</label>
                                    <label for="card2-11"><input type="checkbox" name="card2-11" id="card2-11">A卡</label>
                                    <label for="card2-12"><input type="checkbox" name="card2-12" id="card2-12">A卡</label>
                                    <label for="card2-13"><input type="checkbox" name="card2-13" id="card2-13">A卡</label>
                                    <label for="card2-14"><input type="checkbox" name="card2-14" id="card2-14">A卡</label>
                                    <label for="card2-15"><input type="checkbox" name="card2-15" id="card2-15">A卡</label>
                                    <label for="card2-16"><input type="checkbox" name="card2-16" id="card2-16">A卡</label>
                                    <label for="card2-17"><input type="checkbox" name="card2-17" id="card2-17">A卡</label>
                                    <label for="card2-18"><input type="checkbox" name="card2-18" id="card2-18">A卡</label>
                                </form>
                                <form action="" >
                                    <label for="card2-19"><input type="checkbox" name="card2-19" id="card2-19">A卡</label>
                                    <label for="card2-20"><input type="checkbox" name="card2-20" id="card2-20">A卡</label>
                                    <label for="card2-21"><input type="checkbox" name="card2-21" id="card2-21">A卡</label>
                                    <label for="card2-22"><input type="checkbox" name="card2-22" id="card2-22">A卡</label>
                                    <label for="card2-23"><input type="checkbox" name="card2-23" id="card2-23">A卡</label>
                                    <label for="card2-24"><input type="checkbox" name="card2-24" id="card2-24">A卡</label>
                                    <label for="card2-25"><input type="checkbox" name="card2-25" id="card2-25">A卡</label>
                                    <label for="card2-26"><input type="checkbox" name="card2-26" id="card2-26">A卡</label>
                                    <label for="card2-27"><input type="checkbox" name="card2-27" id="card2-27">A卡</label>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            <label for="reward5"><input type="checkbox" name="reward5" id="reward5">
                                卡牌
                            </label>
                            <div class="card-number">
                                <form action="" >
                                    <label for="card3-1"><input type="checkbox" name="card3-1" id="card3-1">隨機</label>
                                    <label for="card3-2"><input type="checkbox" name="card3-2" id="card3-2">A卡</label>
                                    <label for="card3-3"><input type="checkbox" name="card3-3" id="card3-3">A卡</label>
                                    <label for="card3-4"><input type="checkbox" name="card3-4" id="card3-4">A卡</label>
                                    <label for="card3-5"><input type="checkbox" name="card3-5" id="card3-5">A卡</label>
                                    <label for="card3-6"><input type="checkbox" name="card3-6" id="card3-6">A卡</label>
                                    <label for="card3-7"><input type="checkbox" name="card3-7" id="card3-7">A卡</label>
                                    <label for="card3-8"><input type="checkbox" name="card3-8" id="card3-8">A卡</label>
                                    <label for="card3-9"><input type="checkbox" name="card3-9" id="card3-9">A卡</label>
                                </form>
                                <form action="" >
                                    <label for="card3-10"><input type="checkbox" name="card3-10" id="card3-10">A卡</label>
                                    <label for="card3-11"><input type="checkbox" name="card3-11" id="card3-11">A卡</label>
                                    <label for="card3-12"><input type="checkbox" name="card3-12" id="card3-12">A卡</label>
                                    <label for="card3-13"><input type="checkbox" name="card3-13" id="card3-13">A卡</label>
                                    <label for="card3-14"><input type="checkbox" name="card3-14" id="card3-14">A卡</label>
                                    <label for="card3-15"><input type="checkbox" name="card3-15" id="card3-15">A卡</label>
                                    <label for="card3-16"><input type="checkbox" name="card3-16" id="card3-16">A卡</label>
                                    <label for="card3-17"><input type="checkbox" name="card3-17" id="card3-17">A卡</label>
                                    <label for="card3-18"><input type="checkbox" name="card3-18" id="card3-18">A卡</label>
                                </form>
                                <form action="" >
                                    <label for="card3-19"><input type="checkbox" name="card3-19" id="card3-19">A卡</label>
                                    <label for="card3-20"><input type="checkbox" name="card3-20" id="card3-20">A卡</label>
                                    <label for="card3-21"><input type="checkbox" name="card3-21" id="card3-21">A卡</label>
                                    <label for="card3-22"><input type="checkbox" name="card3-22" id="card3-22">A卡</label>
                                    <label for="card3-23"><input type="checkbox" name="card3-23" id="card3-23">A卡</label>
                                    <label for="card3-24"><input type="checkbox" name="card3-24" id="card3-24">A卡</label>
                                    <label for="card3-25"><input type="checkbox" name="card3-25" id="card3-25">A卡</label>
                                    <label for="card3-26"><input type="checkbox" name="card3-26" id="card3-26">A卡</label>
                                    <label for="card3-27"><input type="checkbox" name="card3-27" id="card3-27">A卡</label>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            (4)
                            <select name="select-up-down" id="select-up-down" class="select-up-down">
                                <option value="">上架/下架</option>
                                <option value="上架">上架</option>
                                <option value="下架">下架</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <script src="./js/script.js"></script>
</body>

</html>