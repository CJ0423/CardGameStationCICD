<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>遊戲設定/管理/紀錄</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/gameManagementRecords.css">
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
                    <li class="item1"><a href="./index.php">各項指標總覽</a></li>
                    <li class="item2"><a href="./gameAllConfiguration.php">遊戲整體配置</a></li>
                    <li class="item3"><a href="./gameSystemSettings.php">系統設置</a></li>
                    <li class="item4"><a href="#">管理紀錄</a></li>
                    <li class="item5"><a href="./gamePromptText.php">提示文字</a></li>
                </ul>
            </div>
        </section>
        <section class="container">
            <table>
                <tr>
                    <th class="row1">時間紀錄</th>
                    <th class="row2">管理帳號</th>
                    <th class="row3">管理等級</th>
                    <th class="row4">介面</th>
                    <th class="row5">行為</th>
                </tr>
                <tr>
                    <td class="row1">2023/8/1 23:59</td>
                    <td class="row2">Tom</td>
                    <td class="row3">老闆</td>
                    <td class="row4">遊戲整體配置</td>
                    <td class="row5">增加20張大頭貼</td>
                </tr>
                <tr>
                    <td class="row1">2023/8/1 23:59</td>
                    <td class="row2">May</td>
                    <td class="row3">主管</td>
                    <td class="row4">商城抽卡機率管理</td>
                    <td class="row5">皇20% 神20% 普60%</td>
                </tr>
                <tr>
                    <td class="row1">2023/8/1 23:59</td>
                    <td class="row2">Mandy</td>
                    <td class="row3">管理員</td>
                    <td class="row4">卡片管理</td>
                    <td class="row5">新增30張卡牌</td>
                </tr>
                <tr>
                    <td class="row1">2023/8/1 23:59</td>
                    <td class="row2">Tom</td>
                    <td class="row3">老闆</td>
                    <td class="row4">會員管理</td>
                    <td class="row5">匯入會員</td>
                </tr>
                <tr>
                    <td class="row1">2023/8/1 23:59</td>
                    <td class="row2">May</td>
                    <td class="row3">主管</td>
                    <td class="row4">卡片管理</td>
                    <td class="row5">審核 Mandy 2023/8/1 23:59 新增30張卡牌上架</td>
                </tr>
                <tr>
                    <td class="row1">2023/8/1 23:59</td>
                    <td class="row2">Mandy</td>
                    <td class="row3">管理員</td>
                    <td class="row4">卡牌NPC管理</td>
                    <td class="row5">新增10組卡牌NPC</td>
                </tr>
            </table>
        </section>
    </main>
    <script src="./js/script.js"></script>
</body>

</html>