<?php
session_start();
//如果使用者已登入 直接導向user網頁
if(isset($_SESSION['member'])){
  header('Location:./user');
  exit;}
?>
<!doctype html>
<html>
  <head>
	<meta charset="utf-8">
    <title>克災人</title>
    <?php require_once "method/bootstrap.html"?>
  </head>
  <style>
  </style>
<body>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-analytics.js"></script>
<!--<style>
  :target:before {
    content: "";
    display: block;
    margin-top:10px;
    height: 70px;
    }
</style>-->

<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="font-size:20px;"role="navigation" >
  <img src="img/navbackground.png" width="250" height="81" class="d-inline-block align-top" alt="CMC_icon">
      <a class="navbar-brand"style='color:#ffffff;' href="#">克災人</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link"style='color:#ffffff;' href="./">首頁 <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item" >
          <a class="nav-link"style='color:#ffffff;' href="./Tutorial/">玩法說明</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link"style='color:#ffffff;' href="./user/Rankforperson.php">遊玩紀錄</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link"style='color:#ffffff;' href="./user/Rank.php">總排行榜</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"style='color:#ffffff;' href="https://www.nfa.gov.tw/cht/index.php" tabindex="-1" aria-disabled="true">合作網站</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <a class="btn btn-outline-warning my-2 my-sm-0" href="./login" role="button">登入</a>
      </form>
    </div>
</nav>
<div class='container-fluid'>
  <div class='row'>
    <div class='col-4'>
    </div>
    <div class='col-4' style='margin-top:25%; text-align:center; '>
      <a href='./login/' class="btn btn-dark btn-lg"style='font-size:50px;'>請先登入才能玩喔!</a>
    </div>
    <div class='col-4'>
  </div>
</div>

	</body>
</html>