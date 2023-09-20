<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>卡牌管理/卡牌管理</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/NPClistEdit.css">
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
                    <li class="item3"><a href="./CardBookManagement.php">圖鑑管理</a></li>
                </ul>
            </div>
        </section>
        <section class="container">
            <div class="settings">
                <div class="basic">
                    <div class="item">
                        <div class="item-title1">卡片隊伍新增刪除修改</div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            1. 皇卡：
                            <select name="select-up-down" id="select-up-down" class="select-up-down">
                                <option value="">請選擇皇卡</option>
                                <option value="A卡">A卡</option>
                                <option value="B卡">B卡</option>
                                <option value="C卡">C卡</option>
                            </select>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            2. 神卡：
                            <select name="select-up-down" id="select-up-down" class="select-up-down">
                                <option value="">請選擇神卡</option>
                                <option value="A卡">A卡</option>
                                <option value="B卡">B卡</option>
                                <option value="C卡">C卡</option>
                            </select>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            3. 普卡：
                            <select name="select-up-down" id="select-up-down" class="select-up-down">
                                <option value="">請選擇普卡</option>
                                <option value="A卡">A卡</option>
                                <option value="B卡">B卡</option>
                                <option value="C卡">C卡</option>
                            </select>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            4. CP總數-加總以上的體力值
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-title1">查看每日NPC戰鬥紀錄(日/月)</div>
                    </div>
                    <div class="item table-group">
                        <table>
                            <tr>
                                <th class="row1"></th>
                                <th class="row2">9/1</th>
                                <th class="row3">9/2</th>
                                <th class="row4">9月份總計</th>
                            </tr>
                            <tr>
                                <td class="row1">戰鬥次數</td>
                                <td class="row2">1</td>
                                <td class="row3">2</td>
                                <td class="row4">3</td>
                            </tr>
                            <tr>
                                <td class="row1">NPC獲勝</td>
                                <td class="row2">1</td>
                                <td class="row3">2</td>
                                <td class="row4">3</td>
                            </tr>
                            <tr>
                                <td class="row1">NPC戰敗</td>
                                <td class="row2">1</td>
                                <td class="row3">2</td>
                                <td class="row4">3</td>
                            </tr>
                            <tr>
                                <td class="row1">發動絕技次數</td>
                                <td class="row2">1</td>
                                <td class="row3">2</td>
                                <td class="row4">3</td>
                            </tr>
                        </table>
                    </div>
                    <div class="item">
                        <div class="item-title1">NPC卡牌隊伍攻擊模式(隨機)</div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            後台卡牌上架管理
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            。 三張卡牌隨機出牌順序
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                            。 每個回合出拳時，除了首次出拳之外，其餘出拳時可能都會出絕招
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-title1">[會員玩家與NPC配對規則]</div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                           根據玩家的三張卡牌生命值+-200，決定電腦NPC的對手 
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-subitem"> 
                           EX：
                           <div>
                               <div>
                                    玩家生命值總數皇500神300普100，總計900
                               </div>
                               <div>
                                    可決定電腦NPC生命值總數700~1100之間
                               </div>
                           </div>
                        </div>
                    </div>


                    

                </div>
            </div>
        </section>
    </main>
    <script src="./js/script.js"></script>
</body>

</html>