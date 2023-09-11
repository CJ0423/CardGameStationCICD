<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>卡牌圖鑑管理列表</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/CardBookManagement.css">
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
                    <li class="item1"><a href="./gameCardManagement.php">卡牌管理</a></li>
                    <li class="item2"><a href="./NPClist.php">NPC管理</a></li>
                    <li class="item3"><a href="#">圖鑑管理</a></li>
                </ul>
            </div>
        </section>
        <section class="container">
            <div class="add-group">
                <div class="add-rows add-row1">
                    <h1>圖鑑管理</h1>
                    <input type="text" name="input-search" id="input-search" placeholder="搜尋框">
                    <input type="submit" value="搜尋" class="submit-search">
                </div>
                <div class="add-rows add-row2">
                    <select name="select-up-down" id="select-up-down" class="select-up-down">
                        <option value="">上/下架</option>
                        <option value="上架">上架</option>
                        <option value="下架">下架</option>
                    </select>
                    <a class="add-btn">新增圖鑑群組</a>
                </div>
            </div>
            <div class="table-group">
                <table>
                    <tr>
                        <th class="row1">系列名稱</th>
                        <th class="row2">卡牌名稱</th>
                        <th class="row3">圖片</th>
                        <th class="row4">兌換獎勵</th>
                        <th class="row5">狀態</th>
                        <th class="row6">修改時間</th>
                        <th class="row7">修改人</th>
                        <th class="row8">功能</th>
                    </tr>
                    <tr>
                        <td class="row1">大墩國王</td>
                        <td class="row2">
                            <div class="item1">大墩王</div>
                            <div class="item2">中墩王</div>
                            <div class="item3">想敦王</div>
                        </td>
                        <td class="row3"></td>
                        <td class="row4">金幣卡鬥劵卡片</td>
                        <td class="row5">✓</td>
                        <td class="row6">2023/8/1 23:59</td>
                        <td class="row7">TOM</td>
                        <td class="row8">
                            <div class="edit-group">
                                <a class="edit-btn">編輯</a>
                                <a class="del-btn">刪除</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="row1">暗黑王國</td>
                        <td class="row2"></td>
                        <td class="row3"></td>
                        <td class="row4"></td>
                        <td class="row5">✗</td>
                        <td class="row6">2023/8/1 23:59</td>
                        <td class="row7">TOM</td>
                        <td class="row8">
                            <div class="edit-group">
                                <a class="edit-btn">編輯</a>
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