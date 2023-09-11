<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理員列表</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/gameAdministratorList.css">
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
                    <li class="item2"><a href="#">管理員列表</a></li>
                    <!-- <li class="item3"><a href="#">系統設置</a></li>
                    <li class="item4"><a href="#">管理紀錄</a></li> -->
                </ul>
            </div>
        </section>
        <section class="container">
            <h1>管理員列表</h1>
            <div class="add-group">
                <a class="add-btn">新增管理帳號</a>
            </div>
            <div class="table-group">
                <table>
                    <tr>
                        <th class="row1">權限群組</th>
                        <th class="row2">帳號</th>
                        <th class="row3">姓名</th>
                        <th class="row4">電話</th>
                        <th class="row5">狀態</th>
                        <th class="row6">修改時間</th>
                        <th class="row7">功能</th>
                    </tr>
                    <tr>
                        <td class="row1">老闆權限</td>
                        <td class="row2">Tom</td>
                        <td class="row3">王大明</td>
                        <td class="row4">0123456789</td>
                        <td class="row5">啟用</td>
                        <td class="row6">2023/8/1 23:59</td>
                        <td class="row7">
                            <div class="edit-group">
                                <a class="edit-btn" href="./administrator_settings.php">編輯</a>
                                <a class="del-btn">刪除</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="row1">主管權限</td>
                        <td class="row2">Mandy</td>
                        <td class="row3"></td>
                        <td class="row4"></td>
                        <td class="row5"></td>
                        <td class="row6">2023/8/1 23:59</td>
                        <td class="row7">
                            <div class="edit-group">
                                <a class="edit-btn" href="./administrator_settings.php">編輯</a>
                                <a class="del-btn">刪除</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="row1">管理員權限</td>
                        <td class="row2">May</td>
                        <td class="row3"></td>
                        <td class="row4"></td>
                        <td class="row5"></td>
                        <td class="row6">2023/8/1 23:59</td>
                        <td class="row7">
                            <div class="edit-group">
                                <a class="edit-btn" href="./administrator_settings.php">編輯</a>
                                <a class="del-btn">刪除</a>
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