<?php
include 'config.php';
session_start();

$l_username = $_POST['l_username'];
$l_pass = $_POST['l_pass'];

$query = "SELECT * FROM `register` WHERE db_username='$l_username' AND db_pass='$l_pass'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result)) {
  $_SESSION['l_username'] = $l_username;
  header("Location: index.php");
  exit();
} else {
  echo "<script>alert('Username and Password do not match')</script>";
  echo "<script>location.href='login.php'</script>";
}
?>
