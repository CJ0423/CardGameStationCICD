<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員管理/列表</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/gameNewMemberReviewEdit.css">
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
                    <li class="item1"><a href="./gameMemberList.php">會員列表</a></li>
                    <li class="item2"><a href="./gameMemberReview.php">會員審核</a></li>
                    <li class="item3"><a href="./gameNewMemberReview.php">新會員審核</a></li>
                </ul>
            </div>
        </section>
        <section class="container">
            <div class="settings">
                <div class="basic">
                    <div class="item item1">
                        <div class="item-title1">會員管理/編輯</div>
                    </div>
                    <div class="item">
                        <div class="item-title">會員基本資料：</div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            會員姓名：
                            <form action="">
                                David
                            </form>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            家長姓名：
                            <form action="">
                                Father
                            </form>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            連絡電話：
                            <form action="">
                                0912-345-789
                            </form>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            ID碼：
                            <form action="">
                                12356
                            </form>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            登入方式：
                            <form action="">
                                信箱/FB/Line/Google/未驗證
                            </form>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            卡鬥劵2張：
                            <form action="">
                                <input type="number" name="" id="">
                            </form>
                        </div>
                        <hr>
                        <div class="item-subitem"> 
                            金幣100：
                            <form action="">
                                <input type="number" name="" id="">
                            </form>
                            <!-- <input type="submit" value="+" name="" id=""> -->
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            卡牌張數 20張：
                            <div class="card-number">
                                <form action="" >
                                    <label for="item1"><input type="checkbox" name="item1" id="item1">A卡</label>
                                    <label for="item2"><input type="checkbox" name="item2" id="item2">A卡</label>
                                    <label for="item3"><input type="checkbox" name="item3" id="item3">A卡</label>
                                    <label for="item4"><input type="checkbox" name="item4" id="item4">A卡</label>
                                    <label for="item5"><input type="checkbox" name="item5" id="item5">A卡</label>
                                    <label for="item6"><input type="checkbox" name="item6" id="item6">A卡</label>
                                    <label for="item7"><input type="checkbox" name="item7" id="item7">A卡</label>
                                </form>
                                <form action="" >
                                    <label for="item8"><input type="checkbox" name="item8" id="item8">A卡</label>
                                    <label for="item9"><input type="checkbox" name="item9" id="item9">A卡</label>
                                    <label for="item10"><input type="checkbox" name="item10" id="item10">A卡</label>
                                    <label for="item11"><input type="checkbox" name="item11" id="item11">A卡</label>
                                    <label for="item12"><input type="checkbox" name="item12" id="item12">A卡</label>
                                    <label for="item13"><input type="checkbox" name="item13" id="item13">A卡</label>
                                    <label for="item14"><input type="checkbox" name="item14" id="item14">A卡</label>
                                </form>
                                <form action="" >
                                    <label for="item15"><input type="checkbox" name="item15" id="item15">A卡</label>
                                    <label for="item16"><input type="checkbox" name="item16" id="item16">A卡</label>
                                    <label for="item17"><input type="checkbox" name="item17" id="item17">A卡</label>
                                    <label for="item18"><input type="checkbox" name="item18" id="item18">A卡</label>
                                    <label for="item19"><input type="checkbox" name="item19" id="item19">A卡</label>
                                    <label for="item20"><input type="checkbox" name="item20" id="item20">A卡</label>
                                    <label for="item21"><input type="checkbox" name="item21" id="item21">A卡</label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="./js/script.js"></script>
</body>

</html>