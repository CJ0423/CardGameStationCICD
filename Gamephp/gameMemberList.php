<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員管理/列表</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/gameMemberList.css">
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
                    <li class="item1"><a href="#">會員列表</a></li>
                    <li class="item2"><a href="./gameMemberReview.php">會員審核</a></li>
                    <li class="item3"><a href="./gameNewMemberReview.php">新會員審核</a></li>
                    <!-- <li class="item4"><a href="#">管理紀錄</a></li> -->
                </ul>
            </div>
        </section>
        <section class="container">
            <div class="add-group">
                <div class="add-rows add-row1">
                    <h1>會員管理</h1>
                    <input type="text" name="input-search" id="input-search" placeholder="關鍵字搜尋">
                    <select name="select-search" id="select-search" class="select-search">
                        <option value="">會員姓名/ID/電話</option>
                        <option value="會員姓名">會員姓名</option>
                        <option value="ID">ID</option>
                        <option value="電話">電話</option>
                    </select>
                    <input type="submit" value="搜尋" class="submit-search">
                </div>
                <div class="add-rows add-row2">
                    <select name="select-up-down" id="select-up-down" class="select-up-down">
                        <option value="">上下架</option>
                        <option value="上架">上架</option>
                        <option value="下架">下架</option>
                    </select>
                    <select name="select-picture-book" id="select-picture-book" class="select-picture-book">
                        <option value="">抽卡/圖鑑</option>
                        <option value="抽卡">抽卡</option>
                        <option value="圖鑑">圖鑑</option>
                    </select>
                    <select name="select-level" id="select-level" class="select-level">
                        <option value="">一般/VIP</option>
                        <option value="一般">一般</option>
                        <option value="VIP">VIP</option>
                    </select>
                    <a class="add-btn">新卡會員</a>
                    <a class="add-btn">匯入會員</a>
                </div>
            </div>
            <div class="table-group">
                <table>
                    <tr>
                        <th class="row1">會員姓名</th>
                        <th class="row2">家長姓名</th>
                        <th class="row3">連絡電話</th>
                        <th class="row4">ID</th>
                        <th class="row5">卡牌張數</th>
                        <th class="row6">卡鬥券</th>
                        <th class="row7">金幣</th>
                        <th class="row8">狀態</th>
                        <th class="row9">註冊時間</th>
                        <th class="row10">登入時間</th>
                        <th class="row11">功能</th>
                    </tr>
                    <tr>
                        <td class="row1">馬英九</td>
                        <td class="row2">Father</td>
                        <td class="row3">0912-345-789</td>
                        <td class="row4">David123456</td>
                        <td class="row5">10張</td>
                        <td class="row6">20張</td>
                        <td class="row7">100</td>
                        <td class="row8">✓</td>
                        <td class="row9">2023/8/1 23:59</td>
                        <td class="row10">2023/8/1 23:59</td>
                        <td class="row11">
                            <div class="edit-group">
                                <a class="edit-btn" href="./gameMemberListEdit.php">編輯</a>
                                <a class="del-btn">刪除</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="row1"></td>
                        <td class="row2"></td>
                        <td class="row3"></td>
                        <td class="row4"></td>
                        <td class="row5"></td>
                        <td class="row6"></td>
                        <td class="row7"></td>
                        <td class="row8">✗</td>
                        <td class="row9">2023/8/1 23:59</td>
                        <td class="row10">2023/8/1 23:59</td>
                        <td class="row11">
                            <div class="edit-group">
                                <a class="edit-btn" href="./gameMemberListEdit.php">編輯</a>
                                <a class="del-btn">刪除</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="row1"></td>
                        <td class="row2"></td>
                        <td class="row3"></td>
                        <td class="row4"></td>
                        <td class="row5"></td>
                        <td class="row6"></td>
                        <td class="row7"></td>
                        <td class="row8">✓</td>
                        <td class="row9">2023/8/1 23:59</td>
                        <td class="row10">2023/8/1 23:59</td>
                        <td class="row11">
                            <div class="edit-group">
                                <a class="edit-btn" href="./gameMemberListEdit.php">編輯</a>
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