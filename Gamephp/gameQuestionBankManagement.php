<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>知識村/題庫管理</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/gameQuestionBankManagement.css">
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
                    <li class="item2"><a href="#">題庫編輯</a></li>
                    <li class="item3"><a href="./VIPAccountManagement.php">VIP科目管理</a></li>
                    <li class="item4"><a href="./gameVIPQuestionBankManagement.php">VIP題庫編輯</a></li>
                </ul>
            </div>
        </section>
        <section class="container">
            <h1>知識村-題庫管理</h1>
            <div class="add-group">
                <a class="add-btn">新增題目</a>
                <a class="add-btn">匯入題目</a>
            </div>
            <div class="table-group">
                <table>
                    <tr>
                        <th class="row1">題目編號</th>
                        <th class="row2">科目</th>
                        <th class="row3">類別</th>
                        <th class="row4">狀態</th>
                        <th class="row5">建立時間</th>
                        <th class="row6">修改時間</th>
                        <th class="row7">功能</th>
                    </tr>
                    <tr>
                        <td class="row1">A001</td>
                        <td class="row2">英文科</td>
                        <td class="row3">國小一年級</td>
                        <td class="row4">✓</td>
                        <td class="row5">2023/8/1 23:59</td>
                        <td class="row6">2023/8/1 23:59</td>
                        <td class="row7">
                            <div class="edit-group">
                                <a class="edit-btn" href="./gameKnowledgeVillageEditorRepository.php">編輯</a>
                                <a class="del-btn">刪除</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="row1">A002</td>
                        <td class="row2">國文科</td>
                        <td class="row3">國小一年級</td>
                        <td class="row4">✗</td>
                        <td class="row5">2023/8/1 23:59</td>
                        <td class="row6">2023/8/1 23:59</td>
                        <td class="row7">
                            <div class="edit-group">
                                <a class="edit-btn" href="./gameKnowledgeVillageEditorRepository.php">編輯</a>
                                <a class="del-btn">刪除</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="row1">A003</td>
                        <td class="row2">VIP英文科</td>
                        <td class="row3">國小一年級</td>
                        <td class="row4">✓</td>
                        <td class="row5">2023/8/1 23:59</td>
                        <td class="row6">2023/8/1 23:59</td>
                        <td class="row7">
                            <div class="edit-group">
                                <a class="edit-btn" href="./gameKnowledgeVillageEditorRepository.php">編輯</a>
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