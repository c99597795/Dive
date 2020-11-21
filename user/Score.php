<?php 
require_once "../method/connect.php";
session_start();
$usrname=$_SESSION['member']['name'];
$level=$_GET['level'];
$score=$_GET['score'];
$killmonster=$_GET['killmonster'];
$WinorLose=$_GET['complete'];
$Time=date("Y- m - d / H : i : s");
$insert = $connect -> prepare("INSERT INTO score(usrname,Level,score,killmonster,WinorLose,Time)VALUES(?,?,?,?,?,?)");
$insert -> execute(array($usrname,$level,$score,$killmonster,$WinorLose,$Time));
?>