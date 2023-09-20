<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NPC管理列表</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/NPClist.css">
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
                    <li class="item2"><a href="#">NPC管理</a></li>
                    <li class="item3"><a href="./CardBookManagement.php">圖鑑管理</a></li>
                </ul>
            </div>
        </section>
        <section class="container">
            <div class="add-group">
                <div class="add-rows add-row1">
                    <h1>NPC管理</h1>
                    <input type="text" name="input-search" id="input-search" placeholder="關鍵字搜尋">
                    <input type="submit" value="搜尋" class="submit-search">
                </div>
                <div class="add-rows add-row2">
                    <select name="select-up-down" id="select-up-down" class="select-up-down">
                        <option value="">上/下架</option>
                        <option value="上架">上架</option>
                        <option value="下架">下架</option>
                    </select>
                    <select name="select-sort" id="select-sort" class="select-sort">
                        <option value="">按上架時間排序/按CP總數排序</option>
                        <option value="上架時間排序">上架時間排序</option>
                        <option value="CP總數排序">CP總數排序</option>
                    </select>
                    <a class="add-btn">新增卡牌隊伍</a>
                </div>
            </div>
            <div class="table-group">
                <table>
                    <tr>
                        <th class="row1">NPC編號</th>
                        <th class="row2">卡牌隊伍</th>
                        <th class="row3">圖片</th>
                        <th class="row4">數值</th>
                        <th class="row5">三張卡牌生命加總</th>
                        <th class="row6">狀態</th>
                        <th class="row7">修改時間</th>
                        <th class="row8">修改人</th>
                        <th class="row9">功能</th>
                    </tr>
                    <tr>
                        <td class="row1">2055</td>
                        <td class="row2">
                            <div class="item1">大墩王(皇)</div>
                            <div class="item2">中墩王(神)</div>
                            <div class="item3">想敦王(普)</div>
                        </td>
                        <td class="row3"></td>
                        <td class="row4">
                            <div class="item1">HP:900 剪50 石30 布30</div>
                            <div class="item2">HP:400 剪50 石30 布30</div>
                            <div class="item3">HP:200 剪50 石30 布30</div>
                        </td>
                        <td class="row5">1500</td>
                        <td class="row6">✓</td>
                        <td class="row7">2023/8/1 23:59</td>
                        <td class="row8">TOM</td>
                        <td class="row9">
                            <div class="edit-group">
                                <a class="edit-btn" href="./NPClistEdit.php">編輯</a>
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
                        <td class="row6">✗</td>
                        <td class="row7">2023/8/1 23:59</td>
                        <td class="row8">TOM</td>
                        <td class="row9">
                            <div class="edit-group">
                                <a class="edit-btn" href="./NPClistEdit.php">編輯</a>
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
                        <td class="row6">✗</td>
                        <td class="row7">2023/8/1 23:59</td>
                        <td class="row8">TOM</td>
                        <td class="row9">
                            <div class="edit-group">
                                <a class="edit-btn" href="./NPClistEdit.php">編輯</a>
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