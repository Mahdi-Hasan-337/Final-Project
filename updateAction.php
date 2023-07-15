<?php
    include 'config.php';
    $id = $_POST['id'];
    $name = $_POST['p_name'];
    $price = $_POST['p_price'];
    
    $image = $_FILES['p_image']; 
    $imageLocation = $_FILES['p_image']['tmp_name'];
    $imageName = $_FILES['p_image']['name'];
    $img_des = "up_images/".$imageName;
    move_uploaded_file($imageLocation, $img_des);

    $updateQuery = "UPDATE `product` SET `p_name`='$p_name',`p_price`='$p_price',`p_image`='$img_des' WHERE id = '$id'";

    // $updateQuery = "UPDATE `product` SET `p_name`='$p_name',`p_price`='$p_price',`p_image`='$img_des' WHERE id = '$id'";

    if(mysqli_query($conn, $updateQuery))
    {
        echo "<script>alert('Updated....!!!')</script>";
        echo "<script>location.href='insertbody.php'</script>";
    }
?>