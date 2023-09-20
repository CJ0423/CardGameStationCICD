<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商城管理/我要抽卡</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/MallDrawCard.css">
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
                    <li class="item1"><a href="#">商城抽卡</a></li>
                    <li class="item2"><a href="./MallActivities.php">商城活動</a></li>
                    <li class="item3"><a href="./MallSellingCards.php">賣卡設定</a></li>
                </ul>
            </div>
        </section>
        <section class="container">
            <h1>商城抽卡機率管理</h1>
            <h2>商城抽卡:抽一張卡片統一扣<input type="text" name="quantity" class="quantity">金幣</h2>
            
            <div class="table-group">
                <table>
                    <tr>
                        <th class="row1">類型</th>
                        <th class="row2">皇</th>
                        <th class="row3">神</th>
                        <th class="row4">普</th>
                        <th class="row5">指定獎勵</th>
                        <th class="row6">狀態</th>
                        <th class="row7">修改時間</th>
                        <th class="row8">功能</th>
                    </tr>
                    <tr>
                        <td class="row1">我要抽卡</td>
                        <td class="row2">10%</td>
                        <td class="row3">20%</td>
                        <td class="row4">70%</td>
                        <td class="row5"></td>
                        <td class="row6">✓</td>
                        <td class="row7">2023/8/1 23:59</td>
                        <td class="row8">
                            <div class="edit-group">
                                <a class="edit-btn" href="./MallDrawCardEdit.php">編輯</a>
                                <a class="del-btn">刪除</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="row1">VIP抽卡</td>
                        <td class="row2">20%</td>
                        <td class="row3">30%</td>
                        <td class="row4">40%</td>
                        <td class="row5">
                            大墩王/暗黑神 <br>
                            10% <br>
                        </td>
                        <td class="row6">✗</td>
                        <td class="row7">2023/8/1 23:59</td>
                        <td class="row8">
                            <div class="edit-group">
                                <a class="edit-btn" href="./MallDrawCardEdit.php">編輯</a>
                                <a class="del-btn">刪除</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="row1">免費抽</td>
                        <td class="row2"></td>
                        <td class="row3"></td>
                        <td class="row4"></td>
                        <td class="row5">
                            10元-20% <br>
                            5元-30% <br>
                            3元-50% <br>
                        </td>
                        <td class="row6">✓</td>
                        <td class="row7">2023/8/1 23:59</td>
                        <td class="row8">
                            <div class="edit-group">
                                <a class="edit-btn" href="./MallDrawCardEdit.php">編輯</a>
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