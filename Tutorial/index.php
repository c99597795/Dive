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
<button class="btn btn-primary" type='button' onclick=
'document.getElementById("gametutorial").className = "collapse multi-collapse show";
document.getElementById("story").className = "multi-collapse collapse"'>玩法說明</button>
<button class="btn btn-primary" type='button' onclick=
'document.getElementById("gametutorial").className = "collapse multi-collapse";
document.getElementById("story").className = "multi-collapse collapse show"'>故事劇情</button>
  <div class='card card-body'style='margin-top:5%; background-color:#ffffff; opacity: 0.95;border: 2px solid LightGray;border-radius: 12px;}'>
    <div class="collapse multi-collapse show" id="gametutorial">
        <h1 class='text-black text-center'>玩法說明</h1>
        <div id='WinandLose'class='border-bottom border-secondary'>
          <h4 class='bg-success text-light'>
          獲勝方式：</h4>
          <p>根據遊戲中遇到事件的處理結果來給予評分</p>
          <h4 class='bg-danger text-light'>
          失敗條件：</h4><p>被火焰怪攻擊則直接結束遊戲</p>
        </div>
        <div id='score'class='border-bottom border-secondary'>
          <h4 class='bg-info text-light'>評分等級：</h4><p>
          SS級→事件處理方法全對，火焰怪全數清空、完成隱藏任務</p>
          <p>S級→事件處理方法全對</p>
          <p>A級→事件處理方法選錯一次</p>
          <p>B級→事件處理方法選錯兩次</p>
          <p>C級→事件處理方法全部錯誤</p>
          <p>Fail→被火焰怪攻擊</p>
        </div>
        <div id='play'class='border-bottom border-secondary'>
          <h4 class='bg-info text-light'>操作說明:</h4>
          <p>移動：方向鍵 ←,→</p>
          <p>攻擊：Z</p>
          <p>上下樓梯：方向鍵 ↑,↓</p>
          <p>進房間：方向鍵 ↑</p>
          <p>其他操作：滑鼠
          </p>
        </div>
    </div>
    <div class="collapse multi-collapse" id="story">
        <h1 class='text-black text-center'>故事劇情</h1>
        <p>在DiVE報告即將到來的前一天，傑洛在房間裡忙著整理電腦資料時，突如其來的大地震，引起電線走火。
            出門的時候發現，因為大地震的原因，居然產生了扭曲空間，導致火焰怪出現在這個世界裡。
            傑洛與好友艾克斯住在同一棟大樓，都被困在火場之中，為了將災害造成的傷害降到最低，於是開始了一連串的逃生大考驗。</p>
      </div>
    </div>
  </div>
</div>
</body>
</html>