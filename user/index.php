<?php 
session_start();
?>
<!doctype html>
<html>
  <head>
	<meta charset="utf-8">
    <title>克災人</title>
    <?php require_once "../method/bootstrap.html"?>
    <script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>
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

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link"style='color:#ffffff;' href="../">首頁 <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item" >
          <a class="nav-link"style='color:#ffffff;' href="../Tutorial/">玩法說明</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link"style='color:#ffffff;' href="./Rankforperson.php">遊玩紀錄</a>
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
  <div class='container'style='margin-top:10%;'>
  <iframe src="https://dive.nutn.edu.tw/Experiment/kaleTestExperiment5.jsp?eid=9717&record=false" name="dive"
      width="1005" height="720" frameborder="0"></iframe>
      <script src="./divelinker.js"></script>
      <script src='KJR.js'></script>
      <Input class='btn btn-warning'Type="Button" Value="Reset" onClick="window.location.reload();">
  </div>
</body>
</html>