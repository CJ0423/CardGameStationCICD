<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>提示文字</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/gamePromptText.css">
</head>

<body>
    <header>
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
                    <li class="item4"><a href="./gameManagementRecords.php">管理紀錄</a></li>
                    <li class="item5"><a href="#">提示文字</a></li>
                </ul>
            </div>
        </section>
        <section class="container">
            <div class="settings">
                <div class="item item1">
                    <div class="item-title">卡鬥編輯隊伍</div>
                    <div class="item-subitem">
                        <form oninput="output.value=enter.value">
                            <textarea name="enter" id="enter" class="enter" cols="20" rows="2"></textarea>
                            
                            <div class="prompt-window">
                                <textarea name="output" id="output" class="output" cols="19" rows="4"></textarea>
                                <img src="./img/提示跳窗 .jpg" alt="">
                            </div>
                        </form>
                    </div>
                    <hr>
                    <div class="item-title">商店活動提示</div>
                    <div class="item-subitem">
                        <form oninput="output.value=enter.value">
                            <textarea name="enter" id="enter" class="enter" cols="20" rows="2"></textarea>
                            
                            <div class="prompt-window">
                                <textarea name="output" id="output" class="output" cols="19" rows="4"></textarea>
                                <img src="./img/提示跳窗 .jpg" alt="">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="item item2">
                    <div class="item-title">商店免費獎勵</div>
                    <div class="item-subitem">
                        <form oninput="output.value=enter.value">
                            <textarea name="enter" id="enter" class="enter" cols="20" rows="2"></textarea>
                            
                            <div class="prompt-window">
                                <textarea name="output" id="output" class="output" cols="19" rows="4"></textarea>
                                <img src="./img/提示跳窗 .jpg" alt="">
                            </div>
                        </form>
                    </div>
                    <hr>
                    <div class="item-title">圖鑑說明</div>
                    <div class="item-subitem">
                        <form oninput="output.value=enter.value">
                            <textarea name="enter" id="enter" class="enter" cols="20" rows="2"></textarea>
                            
                            <div class="prompt-window">
                                <textarea name="output" id="output" class="output" cols="19" rows="4"></textarea>
                                <img src="./img/提示跳窗 .jpg" alt="">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="item item3">
                    <div class="item-title">商店卡牌交易提示</div>
                    <div class="item-subitem">
                        <form oninput="output.value=enter.value">
                            <textarea name="enter" id="enter" class="enter" cols="20" rows="2"></textarea>
                            
                            <div class="prompt-window">
                                <textarea name="output" id="output" class="output" cols="19" rows="4"></textarea>
                                <img src="./img/提示跳窗 .jpg" alt="">
                            </div>
                        </form>
                    </div>
                    <hr>
                    <div class="item-title">歡迎訊息</div>
                    <div class="item-subitem">
                        <form oninput="output.value=enter.value">
                            <textarea name="enter" id="enter" class="enter" cols="20" rows="2"></textarea>
                            
                            <div class="prompt-window">
                                <textarea name="output" id="output" class="output" cols="19" rows="4"></textarea>
                                <img src="./img/提示跳窗 .jpg" alt="">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="./js/script.js"></script>
</body>

</html>