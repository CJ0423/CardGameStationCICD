<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理員設定</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/administrator_settings.css">
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
                    <li class="item1"><a href="./gamePermissionManagement.php">權限設定</a></li>
                    <li class="item2"><a href="./gameAdministratorList.php">管理員列表</a></li>
                </ul>
            </div>
        </section>
        <section class="container">
            <ul>
                <li>
                    <div>
                        <h1>管理員設定</h1><br>
                    </div>
                </li>
                <li>
                    <div>
                        <h1>帳號:Tom</h1>
                    </div>
                </li>
                <li>
                    <div>
                        <h1>
                            密碼:
                            <input type="password" name="password" class="input" placeholder="輸入密碼">
                        </h1>
                    </div>
                </li>
                <li>
                    <div>
                        <h1>姓名:
                            <input type="text" name="password" class="input" placeholder="輸入姓名">
                        </h1>
                    </div>
                </li>
                <li>
                    <div>
                        <h1>
                            電話:
                            <input type="text" name="password" class="input" placeholder="輸入電話">
                        </h1>
                    </div>
                </li>
                <li>
                    <div>
                        <h1>
                            狀態:
                            <select name="" id="">
                                <option>啟用</option>
                                <option>關閉</option>
                            </select>
                        </h1>
                    </div>
                </li>
                <li>
                    <div>
                        <h1>
                            權限:
                            <select name="" id="">
                                <option>老闆</option>
                                <option>主管</option>
                                <option>管理員</option>
                            </select>
                        </h1>
                    </div>
                </li>
                <li>
                    <div>
                        <h1>
                            建檔人員:Tom
                        </h1>
                    </div>
                </li>
                <li>
                    <div>
                        <h1>
                            建檔日期:2018-02-05 19:10:56
                        </h1>
                    </div>
                </li>
                <li>
                    <div>
                        <h1>修改人員:Tom</h1>
                    </div>
                </li>
                <li>
                    <div>
                        <h1>修改日期:2023-02-08 10:36:53</h1>
                    </div>
                </li>
                <li>
                    <div>
                        <input type="submit" value="確認修改" class="submit">
                    </div>
                </li>
            </ul>
        </section>
    </main>
    <script src="./js/script.js"></script>
</body>

</html>