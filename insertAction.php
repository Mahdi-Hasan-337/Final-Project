<?php

    include 'config.php';

    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $p_image = $_FILES['p_image'];

    $imageLocation = $_FILES['p_image']['tmp_name'];

    $imageName = $_FILES['p_image']['name'];

    $img_des = "up_images/".$imageName;

    move_uploaded_file($imageLocation, $img_des);

    $insert_query = "INSERT INTO `product`(`p_name`, `p_price`, `p_image`) VALUES ('$p_name','$p_price','$img_des')";
    
  if(mysqli_query($conn,$insert_query))
  {
    echo "<script>alert('Inserted')</script>";
    // echo "<script>location.href='index.php'</script>";
    echo "<script>location.href='insertbody.php'</script>";
  }
?>