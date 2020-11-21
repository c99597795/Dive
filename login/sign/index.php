<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>註冊頁面</title>
    <?php require_once "../../method/bootstrap.html" ?>
    <?php require_once "../../method/Datepicker.html" ?>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="font-size:20px;"role="navigation" >
    <img src="../../img/navbackground.png" width="250" height="81" class="d-inline-block align-top" alt="KJR_icon">
      <a class="navbar-brand"style='color:#ffffff;' href="#">克災人</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link"style='color:#ffffff;' href="../../">首頁 <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item" >
          <a class="nav-link"style='color:#ffffff;' href="../../Tutorial">玩法說明</a>
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
    <div class='container'id='SignIndex'>
      <form action="add.php" method="post">
      <div class="form-row">
        <div class="form-group col-6" id='usrname'>
          <label for="inputAddress">帳號名稱</label>
          <input type="usrname" name="usrname" value="" class="form-control" id="inputAddress">
        </div>
        <div class="col-6" id='empty'><img src="../../img/navbackground.png" width="300" height="96" class="d-inline-block align-top" alt="KJR_icon">
      </div>
        <div class="form-group col-6" id='email'>
          <label for="inputEmail4">Email</label>
          <input type="mail" name="mail" value="" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-6" id='pwd'>
          <label for="inputPassword4">Password</label>
          <input type="password" name="password" value="" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
        <div class="form-group col-6"id='birth'>
          <label for="inputCity">Birthday</label>
            <input name="birth" value="" id="datepicker" width="350" />
            <script>
                $('#datepicker').datepicker({
                    uiLibrary: 'bootstrap4'
                });
            </script>
        </div> 
        <div class="form-group col-6"id='name'>
          <label for="inputCity">Name</label>
          <input type="text" name="name" value=""class="form-control" id="Name">
        </div>
      
        <button type="submit" class="btn btn-primary">註冊</button>
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
      </div>
        
      </form>
  </div>
 
  </body>
</html>
