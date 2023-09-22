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
    <link rel="stylesheet" href="./css/gamePermissionManagement.css">
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
                    <li class="item1"><a href="#">權限設定</a></li>
                    <li class="item2"><a href="./gameAdministratorList.php">管理員列表</a></li>
                    <!-- <li class="item3"><a href="#">系統設置</a></li>
                    <li class="item4"><a href="#">管理紀錄</a></li> -->
                </ul>
            </div>
        </section>
        <section class="container">
            <h1>權限列表</h1>
            <div class="add-group">
                <a href="./administrator_settings.php" class="add-btn">新增管理帳號</a>
            </div>
            <div class="table-group">
                <table>
                    <tr>
                        <th class="row1">權限群組</th>
                        <th class="row2">帳號</th>
                        <th class="row3">權限描述</th>
                        <th class="row4">修改時間</th>
                        <th class="row5">功能</th>
                    </tr>
                    <tr>
                        <td class="row1">老闆權限</td>
                        <td class="row2">Tom</td>
                        <td class="row3">
                            <div class="permission-group">
                                <h1>可審核主管以下權限</h1>
                                <div class="options">
                                    <label for="item1"><input type="checkbox" name="item1" id="item1">管理</label>
                                    <label for="item2"><input type="checkbox" name="item2" id="item2">審核/刪除</label>
                                    <label for="item3"><input type="checkbox" name="item3" id="item3">新增/編輯</label>
                                    <label for="item4"><input type="checkbox" name="item4" id="item4">檢視</label>
                                </div>
                            </div>
                        </td>
                        <td class="row4">2023/8/1 23:59</td>
                        <td class="row5">
                            <div class="edit-group">
                                <a class="edit-btn" href="./boss_authority.php">編輯</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="row1">主管權限</td>
                        <td class="row2">Mandy</td>
                        <td class="row3">
                            <div class="permission-group permission-group1">
                                <h1>可審核首頁廣告/卡牌/知識村題庫上架是否顯示在前端</h1>
                                <div class="options">
                                    <label for="item5"><input type="checkbox" name="item5" id="item5">管理</label>
                                    <label for="item6"><input type="checkbox" name="item6" id="item6">審核/刪除</label>
                                    <label for="item7"><input type="checkbox" name="item7" id="item7">新增/編輯</label>
                                    <label for="item8"><input type="checkbox" name="item8" id="item8">檢視</label>
                                </div>
                            </div>
                            <div class="permission-group permission-group2">
                                <h1>可執行遊戲設定/會員/商店上架</h1>
                                <div class="options">
                                    <label for="item9"><input type="checkbox" name="item9" id="item9">管理</label>
                                    <label for="item10"><input type="checkbox" name="item10" id="item10">審核/刪除</label>
                                    <label for="item11"><input type="checkbox" name="item11" id="item11">新增/編輯</label>
                                    <label for="item12"><input type="checkbox" name="item12" id="item12">檢視</label>
                                </div>
                            </div>
                        </td>
                        <td class="row4">2023/8/1 23:59</td>
                        <td class="row5">
                            <div class="edit-group">
                                <a class="edit-btn" href="./boss_authority.php">編輯</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="row1">管理員權限</td>
                        <td class="row2">May</td>
                        <td class="row3">
                            <div class="permission-group">
                                <h1>可執行首頁廣告曲/卡牌/知識村題庫上架</h1>
                                <div class="options">
                                    <label for="item13"><input type="checkbox" name="item13" id="item13">管理</label>
                                    <label for="item14"><input type="checkbox" name="item14" id="item14">審核/刪除</label>
                                    <label for="item15"><input type="checkbox" name="item15" id="item15">新增/編輯</label>
                                    <label for="item16"><input type="checkbox" name="item16" id="item16">檢視</label>
                                </div>
                            </div>
                        </td>
                        <td class="row4">2023/8/1 23:59</td>
                        <td class="row5">
                            <div class="edit-group">
                                <a class="edit-btn" href="./boss_authority.php">編輯</a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </section>
    </main>
    <script src="./js/script.js"></script>
</body>

</html>