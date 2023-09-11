<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>卡牌管理/列表</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/gameCardManagement.css">
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
                    <li class="item1"><a href="#">卡牌管理</a></li>
                    <li class="item2"><a href="./NPClist.php">NPC管理</a></li>
                    <li class="item3"><a href="./CardBookManagement.php">圖鑑管理</a></li>
                    <!-- <li class="item4"><a href="#">管理紀錄</a></li> -->
                </ul>
            </div>
        </section>
        <section class="container">
            <div class="add-group">
                <div class="add-rows add-row1">
                    <h1>卡牌管理</h1>
                    <input type="text" name="input-search" id="input-search" placeholder="關鍵字搜尋">
                    <select name="select-search" id="select-search" class="select-search">
                        <option value="">卡牌名稱/絕技</option>
                        <option value="卡牌名稱">卡牌名稱</option>
                        <option value="絕技">絕技</option>
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
                        <option value="">等級</option>
                        <option value="皇">皇</option>
                        <option value="神">神</option>
                        <option value="普">普</option>
                    </select>
                    <a class="add-btn">新增卡牌</a>
                    <a class="add-btn">匯入卡牌</a>
                </div>
            </div>
            <div class="table-group">
                <table>
                    <tr>
                        <th class="row1">卡牌編號</th>
                        <th class="row2">卡牌名稱</th>
                        <th class="row3">圖片</th>
                        <th class="row4">等級</th>
                        <th class="row5">絕技</th>
                        <th class="row6">數值</th>
                        <th class="row7">抽卡</th>
                        <th class="row8">圖鑑</th>
                        <th class="row9">狀態</th>
                        <th class="row10">修改時間</th>
                        <th class="row11">修改人</th>
                        <th class="row12">功能</th>
                    </tr>
                    <tr>
                        <td class="row1">001</td>
                        <td class="row2">大墩王</td>
                        <td class="row3"></td>
                        <td class="row4">皇</td>
                        <td class="row5">雷霆萬鈞</td>
                        <td class="row6">
                            <div class="item1">HP 900</div>
                            <div class="item2">剪50 石30 布30</div>
                        </td>
                        <td class="row7">✓</td>
                        <td class="row8">✓</td>
                        <td class="row9">✓</td>
                        <td class="row10">2023/8/1 23:59</td>
                        <td class="row11">TOM</td>
                        <td class="row12">
                            <div class="edit-group">
                                <a class="edit-btn">編輯</a>
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
                        <td class="row8"></td>
                        <td class="row9">✗</td>
                        <td class="row10">2023/8/1 23:59</td>
                        <td class="row11">TOM</td>
                        <td class="row12">
                            <div class="edit-group">
                                <a class="edit-btn">編輯</a>
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
                        <td class="row8"></td>
                        <td class="row9">✓</td>
                        <td class="row10">2023/8/1 23:59</td>
                        <td class="row11">TOM</td>
                        <td class="row12">
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