<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>登入頁面</title>
    <?php require_once "../method/bootstrap.html" ?>
  </head>
  <body>
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
          <a class="nav-link"style='color:#ffffff;' href="../Tutorial">玩法說明</a>
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
      <form class="form-inline my-2 my-lg-0">
        <a class="btn btn-outline-warning my-2 my-sm-0" href="./" role="button">登入</a>
      </form>
    </div>
</nav>
    <div class="container"style='' id='LoginIndex'>
        <form action="logincheck.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">帳號</label>
                <input type="account" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Account" name='account'>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">密碼</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="密碼"name='password'>
            </div>
            <button type="submit" class="btn btn-primary">登入</button>
            <a href="./sign/" class="btn btn-light">還沒註冊嗎?</a>
            <?php 
              if(isset($_GET['sig_suc'])){
                if($_GET['sig_suc']!='')
                  echo "<li>".$_GET['sig_suc']."</li>";
              }
              if(isset($_GET['error'])){
                if($_GET['error']!='')
                  echo "<li>".$_GET['error']."</li>";
              }
            ?>
            
        </form>
   </div>
  </body>
</html>
