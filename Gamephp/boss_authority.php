<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>權限管理/權限設定</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/boss_authority.css">
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
                    <li class="item2"><a href="./gamePermissionManagement.php">權限設定</a></li>
                    <li class="item1"><a href="./gameAdministratorList.php">管理員列表</a></li>
                </ul>
            </div>
        </section>
        <section class="container">
            <ul>
                <li>
                    <div>
                        <h1>權限編輯 - 老闆權限</h1><br>
                    </div>
                </li>
                <li>
                    <div>
                        <h1>
                            遊戲設定
                            &emsp;
                            <input type="checkbox" id="game-manage" name="game-manage" /><label for="game-manage">管理</label>
                            <input type="checkbox" id="game-review" name="game-review" /><label for="game-review">審核/刪除</label>
                            <input type="checkbox" id="game-add" name="game-add" /><label for="game-add">新增/編輯</label>
                            <input type="checkbox" id="game-view" name="game-view" /><label for="game-view">檢視</label>
                        </h1>
                    </div>
                </li>
                <li>
                    <div>
                        <h1>
                            權限管理
                            &emsp;
                            <input type="checkbox" id="permissions-manage" name="permissions-manage" /><label for="permissions-manage">管理</label>
                            <input type="checkbox" id="permissions-review" name="permissions-review" /><label for="permissions-review">審核/刪除</label>
                            <input type="checkbox" id="permissions-add" name="permissions-add" /><label for="permissions-add">新增/編輯</label>
                            <input type="checkbox" id="permissions-view" name="permissions-view" /><label for="permissions-view">檢視</label>
                        </h1>
                    </div>
                </li>
                <li>
                    <div>
                        <h1>
                            會員管理
                            &emsp;
                            <input type="checkbox" id="member-manage" name="member-manage" /><label for="member-manage">管理</label>
                            <input type="checkbox" id="member-review" name="member-review" /><label for="member-review">審核/刪除</label>
                            <input type="checkbox" id="member-add" name="member-add" /><label for="member-add">新增/編輯</label>
                            <input type="checkbox" id="member-view" name="member-view" /><label for="member-view">檢視</label>
                        </h1>
                    </div>
                </li>
                <li>
                    <div>
                        <h1>
                            商店管理
                            &emsp;
                            <input type="checkbox" id="shop-manage" name="shop-manage" /><label for="shop-manage">管理</label>
                            <input type="checkbox" id="shop-review" name="shop-review" /><label for="shop-review">審核/刪除</label>
                            <input type="checkbox" id="shop-add" name="shop-add" /><label for="shop-add">新增/編輯</label>
                            <input type="checkbox" id="shop-view" name="shop-view" /><label for="shop-view">檢視</label>
                        </h1>
                    </div>
                </li>
                <li>
                    <div>
                        <h1>
                            卡牌管理
                            &emsp;
                            <input type="checkbox" id="card-manage" name="card-manage" /><label for="card-manage">管理</label>
                            <input type="checkbox" id="card-review" name="card-review" /><label for="card-review">審核/刪除</label>
                            <input type="checkbox" id="card-add" name="card-add" /><label for="card-add">新增/編輯</label>
                            <input type="checkbox" id="card-view" name="card-view" /><label for="card-view">檢視</label>
                        </h1>
                    </div>
                </li>
                <li>
                    <div>
                        <h1>
                            首頁管理
                            &emsp;
                            <input type="checkbox" id="front-manage" name="front-manage" /><label for="front-manage">管理</label>
                            <input type="checkbox" id="front-review" name="front-review" /><label for="front-review">審核/刪除</label>
                            <input type="checkbox" id="front-add" name="front-add" /><label for="front-add">新增/編輯</label>
                            <input type="checkbox" id="front-view" name="front-view" /><label for="front-view">檢視</label>
                        </h1>
                    </div>
                </li>
                <li>
                    <div>
                        <h1>
                            知識村管理
                            &zwj;
                            <input type="checkbox" id="lore-manage" name="lore-manage" /><label for="lore-manage">管理</label>
                            <input type="checkbox" id="lore-review" name="lore-review" /><label for="lore-review">審核/刪除</label>
                            <input type="checkbox" id="lore-add" name="lore-add" /><label for="lore-add">新增/編輯</label>
                            <input type="checkbox" id="lore-view" name="lore-view" /><label for="lore-view">檢視</label>
                        </h1>
                    </div>
                </li>
                <li>
                    <div>
                        <h1>
                            訂單管理
                            &emsp;
                            <input type="checkbox" id="order-manage" name="manage" /><label for="order-manage">管理</label>
                            <input type="checkbox" id="order-review" name="order-review" /><label for="order-review">審核/刪除</label>
                            <input type="checkbox" id="order-add" name="order-add" /><label for="order-add">新增/編輯</label>
                            <input type="checkbox" id="order-view" name="order-view" /><label for="order-view">檢視</label>
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
                    <div class="confirm-btn">
                        <input type="submit" value="確認修改" class="submit">
                    </div>
                </li>
            </ul>
        </section>
    </main>
    <script src="./js/script.js"></script>
</body>

</html>