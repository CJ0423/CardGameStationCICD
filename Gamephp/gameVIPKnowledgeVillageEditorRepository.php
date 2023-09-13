<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>知識村/編輯題庫</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/gameVIPKnowledgeVillageEditorRepository.css">
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
            <h1>VIP題目編號：<span>A001</span></h1>
            <div class="main-group">
                <div class="content-group">
                    <div class="item role-group">
                        <div class="subitem-group">
                            <div class="subitems subitem1">
                                <h1>科目名稱：</h1>
                                <select name="select-search" id="select-search" class="select-search">
                                    <option value="">科目</option>
                                    <option value="國文">國文</option>
                                    <option value="英文">英文</option>
                                    <option value="VIP英文">VIP英文</option>
                                </select>
                            </div>
                            <div class="subitems subitem1">
                                <h1>類別：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
                                <select name="select-search" id="select-search" class="select-search">
                                    <option value="">年級別</option>
                                    <option value="國小一年級">國小一年級</option>
                                    <option value="國小二年級">國小二年級</option>
                                    <option value="國小三年級">國小三年級</option>
                                    <option value="國小四年級">國小四年級</option>
                                    <option value="國小五年級">國小五年級</option>
                                    <option value="國小六年級">國小六年級</option>
                                </select>
                                <button type="button" class="sure-btn">編輯類別</button>
                            </div>
                            <div class="subitems subitem1">
                                <h1>題目：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
                                <input type="text" placeholder="請輸入文字">
                                <!-- <div class="label-group"><label for="subitem1-audio">上傳音檔</label>
                                    <input type="file" name="subitem1-audio" id="subitem1-audio">
                                </div> -->
                            </div>
                            <div class="subitems subitem2">
                                <h1>選項1：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
                                <input type="text" placeholder="請輸入文字">
                                <div class="label-group"><label for="subitem2-audio">上傳音檔</label>
                                    <input type="file" name="subitem2-audio" id="subitem2-audio">
                                </div>
                            </div>
                            <div class="subitems subitem3">
                                <h1>選項2：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
                                <input type="text" placeholder="請輸入文字">
                                <div class="label-group"><label for="subitem3-audio">上傳音檔</label>
                                    <input type="file" name="subitem3-audio" id="subitem3-audio">
                                </div>
                            </div>
                            <div class="subitems subitem4">
                                <h1>選項3：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
                                <input type="text" placeholder="請輸入文字">
                                <div class="label-group"><label for="subitem4-audio">上傳音檔</label>
                                    <input type="file" name="subitem4-audio" id="subitem4-audio">
                                </div>
                            </div>
                            <div class="subitems subitem5">
                                <h1>選項4：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
                                <input type="text" placeholder="請輸入文字">
                                <div class="label-group"><label for="subitem5-audio">上傳音檔</label>
                                    <input type="file" name="subitem5-audio" id="subitem5-audio">
                                </div>
                            </div>
                            <div class="subitems subitem6">
                                <h1>正確選項：</h1>
                                <input type="text" placeholder="請輸入文字">
                                <!-- <div class="label-group"><label for="subitem1-audio">上傳音檔</label>
                                    <input type="file" name="subitem1-audio" id="subitem1-audio">
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-group">
                <button type="button" class="sure-btn">確認修改</button>
            </div>
        </section>
    </main>
    <script src="./js/script.js"></script>
</body>

</html>