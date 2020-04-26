<?php
    require('includes/init.php');

    if(isset($_POST['username']) && isset($_POST['password'])) {
        if($result = mysqli_query($mysqli, "SELECT username, password FROM `users` WHERE username='{$_POST['username']}' AND password='{$_POST['password']}'")){
          if($result->num_rows == 1){
            $_SESSION['username'] = $_POST['username'];
            header("Location: portfolio.php");
          } else {
            header("Location: login.php");
          }
        } else {
            header("Location: login.php");
        }
    } else {
      header("Location: login.php");
    }
?>
