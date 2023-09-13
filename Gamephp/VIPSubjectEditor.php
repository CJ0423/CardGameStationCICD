<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>知識村/VIP編輯類別</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/VIPSubjectEditor.css">
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
                    <li class="item1"><a href="./AccountManagement.php">科目管理</a></li>
                    <li class="item2"><a href="./gameQuestionBankManagement.php">題庫編輯</a></li>
                    <li class="item3"><a href="./VIPAccountManagement.php">VIP科目管理</a></li>
                    <li class="item4"><a href="./gameVIPQuestionBankManagement.php">VIP題庫編輯</a></li>
                </ul>
            </div>
        </section>
        <section class="container">
            <div class="settings">
                <div class="basic">
                    <div class="item item1">
                        <div class="item-title1">知識村-VIP科目管理</div>
                    </div>
                    <div class="item">
                        <div class="item-title">科目名稱：</div>
                        &emsp;
                        <input type="text" name="input-search" id="input-search" placeholder="英文科">
                    </div>
                    <div class="item">
                        <div class="item-title">類別：</div>
                        &emsp;&emsp;&emsp;&ensp;
                        <div class="add-rows add-rows2">
                            <select name="select-up-down" id="select-up-down" class="select-up-down">
                                <option value="">國小一年級</option>
                                <option value="國小二年級">國小二年級</option>
                                <option value="國小三年級">國小三年級</option>
                                <option value="國小四年級">國小四年級</option>
                                <option value="國小五年級">國小五年級</option>
                                <option value="國小六年級">國小六年級</option> 
                            </select>
                            <div class="save">
                                <button type="button">編輯類別</button>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-title">每題作答時間：</div>
                        <div class="item-subitem">
                            <div class="subitem">
                                <input type="number" name="" id="">
                                秒
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-title">答對一題：</div>
                        <div class="item-subitem">
                            <div class="subitem">
                                得<input type="number" name="" id="">
                                金幣
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-title">全對獎勵：</div>
                        <div class="item-subitem">
                            <div class="subitem">
                                得<input type="number" name="" id="">
                                卡鬥劵
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-title">魔王圖檔：</div>
                        <div class="item-picture">
                            
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-title">背景圖檔：</div>
                        <div class="item-picture">
                            
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