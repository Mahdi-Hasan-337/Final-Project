<?php
  include 'config.php';
  session_start();

  $ul_username = $_POST['ul_username'];
  $ul_pass = $_POST['ul_pass'];

  $query = "SELECT * FROM `u_register` WHERE db_username='$ul_username' AND db_pass='$ul_pass'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result)) {
    $_SESSION['ul_username'] = $ul_username;
    header("Location: index.php");
    exit();
  } else {
    echo "<script>alert('Username and Password do not match')</script>";
    echo "<script>location.href='index.php'</script>";
  }
?>
