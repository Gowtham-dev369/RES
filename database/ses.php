<?php
   include('db_connect.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select userid from admin_login where userid= '$user_check'");
   // $row = mysqli_fetch_array($ses_sql);
   // print_r($row);
   // $login_session = $row['uid'];
   
   if(!isset($_SESSION['login_user'])){
      header("Location: log.php");
   }
?>

<form action=""></form>