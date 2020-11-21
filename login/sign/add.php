<?php
     ini_set("display_errors","On");
     $usrname =$_POST['usrname'];
     $mail = $_POST['mail'];
     $password = $_POST['password'];
     $name = $_POST['name'];
     $birth = $_POST['birth'];

     require_once "../../method/connect.php";
     $select = $connect -> prepare("SELECT * FROM member WHERE mail = :acc AND usrname = :usr");
     $select -> execute(array(':acc' => $mail,':usr'=>$usrname));

     $result = $select -> fetch(PDO::FETCH_ASSOC);
     if($result!=null){
      header("location:./?error=Email或使用者名稱已註冊過");
     }
     else{$insert = $connect -> prepare("INSERT INTO member(usrname,mail,password,name,birth)
      VALUES(?,?,?,?,?)");
    $insert -> execute(array($usrname,$mail,$password,$name,$birth));

   header("location:../?sig_suc=註冊成功");}

 ?>
