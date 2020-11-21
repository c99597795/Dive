<?php 
session_start();
?>
<!doctype html>
<html>
  <head>
	<meta charset="utf-8">
    <title>克災人</title>
    <?php require_once "../method/bootstrap.html"?>
  </head>
<body>
<style>
  :target:before {
    content: "";
    display: block;
    margin-top:10px;
    height: 70px;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="font-size:20px;"role="navigation" >
  <img src="../img/navbackground.png" width="250" height="81" class="d-inline-block align-top" alt="KJR_icon">
      <a class="navbar-brand"style='color:#ffffff;' href="#">克災人</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse"' id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link"style='color:#ffffff;' href="../">首頁 <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item" >
          <a class="nav-link"style='color:#ffffff;' href="./">玩法說明</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link"style='color:#ffffff;' href="../user/Rankforperson.php">遊玩紀錄</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link"style='color:#ffffff;' href="../user/Rank.php">總排行榜</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"style='color:#ffffff;' href="https://www.nfa.gov.tw/cht/index.php" tabindex="-1" aria-disabled="true">合作網站</a>
        </li>
      </ul>
      <ul class='text-warning'>
        <?php
            echo $_SESSION['member']['name']."歡迎光臨"; ?>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <a class="btn btn-outline-warning my-2 my-sm-0" href="../method/logout.php" role="button">登出</a>
      </form>
    </div>
</nav>

<div class='container' style='margin-top:10%;'>
  <div class='card card-body'style='margin-top:5%; background-color:#ffffff; opacity: 0.95;border: 2px solid LightGray;border-radius: 12px;}'>
    <div>
        <h1 style='text-align:center;'>火場大考驗</h1>
        <div>
            <h4 class='bg-danger text-light'>發現火災第一時間該作甚麼？</h4>
            <p>
            (1)	大叫救命</p>
            <p>
            (2)	快點滅火&#8594;火苗成長初期，火焰高度25公分以下，不同火災需要不同滅火方式</p>
            <p>
            (3)	趕緊逃生&#8594;忘記提醒別人，極度驚慌下忽略其他事物</p>
        </div>
        <div>
            <h4 class='bg-danger text-light'>
            逃生是否關門？</h4>
            <p>
            (1)	順手關門好習慣&#8594;起火點在屋內，關門可將火勢和濃煙暫時拘限屋內</p> 
            <p>
            (2)	門開著方便救災&#8594;濃煙進入樓梯間，會有煙囪效應，樓梯間會充滿樓梯高熱</p>
            <h5 class='alert alert-warning'>要防止濃煙蔓延，平時就應該保持安全門關上不上鎖</h5>
        </div>
        <div>
            <h4 class='bg-danger text-light'>火災濃煙密布時，該怎麼做？</h4><p>
            (1)	用濕毛巾摀住口鼻逃生&#8594;濃煙比火勢更可怕，有毒氣體、一氧化碳，與血紅素結合速度比氧氣快200倍，使人瞬間缺氧失去知覺</p><p>
            (2)	關起門來避難&#8594;應該關門阻止濃煙進入，毛巾堵住門縫，開啟對外窗戶</p>
            <p class='alert alert-warning'>謹慎用火用電、使用防火建材、不堆放大量雜物、確保逃生通道暢通、加裝住警器</p>
        </div>
    </div>
  </div>
</div>
</body>
</html>