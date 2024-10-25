<?php 
  session_start();
  if($_SESSION['user_id'] || $_SESSION['username']){
      $user_id = $_SESSION['user_id'];
      include "../class/dbh.php";
      include "../class/model/User.php";
      include "../class/view/userdetails.php";
  }else{
    header("Location:../index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
</head>
<body>

      <?php
        if(isset($_SESSION['user_id'])){
            ?>
                <a class="btn btn-success btn-sm" href="../logout.php">Logout</a>
            <?php
        }
        ?>