<?php
  include 'config.php';
  session_start();

  $al_username = $_POST['al_username'];
  $al_pass = $_POST['al_pass'];

  $query = "SELECT * FROM `register` WHERE db_username='$al_username' AND db_pass='$al_pass'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result)) {
    $_SESSION['ul_username'] = $al_username;
    header("Location: index.php");
    exit();
  } else {
    echo "<script>alert('Username and Password do not match')</script>";
    echo "<script>location.href='login.php'</script>";
  }
?>
