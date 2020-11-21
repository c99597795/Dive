<?php 
session_start();
if($_SESSION['member']==null){
    header('Location:../');
    exit;
  }
?>
<!doctype html>
<html>
  <head>
	<meta charset="utf-8">
    <title>克災人</title>
    <?php require_once "../method/bootstrap.html"?>
    <?php require_once "../method/connect.php"?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
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

    <div class="collapse navbar-collapse"' id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link"style='color:#ffffff;' href="../">首頁 <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item" >
          <a class="nav-link"style='color:#ffffff;' href="../Tutorial/">玩法說明</a>
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
  <div class='container'style='margin-top:10%;'>
  <div style='margin-top:5%; background-color:#ffffff; opacity: 0.95;border: 2px solid LightGray;border-radius: 12px;}'>
    <h1 class='text-center'>總排行榜</h1>
    <table class='table'>
    <thead>
    <tr>
      <th>玩家名稱</th>
      <th>評分等級</th>
      <th>答題成績</th>
      <th>怪物分數</th>
      <th>輸贏</th>
      <th>時間</th>
    </tr>
    <?php 
    $member =$_SESSION['member']['name'];
    $connect = mysqli_connect('localhost','id14047808_plzletmesucess','1}>OhB6munzUG-X*','id14047808_dive');
    //$connect = mysqli_connect('localhost','root','','dive');
    $sql = "SELECT * FROM `score` ORDER BY `Level` DESC";
    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $level=$row["Level"];
            if($level==5){
              $row['level']='SS';
            }
            elseif($row["WinorLose"]=='Lose'){
                $row['level']='D';
            }
            elseif($level==4){
              $row['level']='S';
            }
            elseif($level==3){
              $row['level']='A';
            }
            elseif($level==2){
              $row['level']='B';
            }
            elseif($level==1){
              $row['level']='C';
            }
            else{
              $row['level']='?';
            }
          echo "<tr><th>" .$row['usrname'].'</th>'.'<th>'.$row['level'].'</th>'.'<th>'. $row["score"]."</th>".'<th>'.$row["killmonster"].'</th>'.'<th>'.$row["WinorLose"].'</th>'.'<th>'.$row["Time"].'</th>'.'</tr>';
        }
      } 
      else {
        echo "0 results";
      }
    
    ?>
  </thead>
    </table>
  </div>
  </div>
</body>
</html>