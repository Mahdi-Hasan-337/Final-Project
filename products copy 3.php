<?php
    include 'config.php';
    if(isset($_POST['add_to_cart'])){
        $p_name = $_POST['p_name'];
        $p_price = $_POST['p_price'];
        $p_image = $_POST['p_image'];
        $p_quantity = 1;
        $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$p_name'");
        if(mysqli_num_rows($select_cart) > 0){
            $message[] = 'product already added to cart';
        }else{
            $insert_product = mysqli_query($conn, "INSERT INTO `cart`(p_name, p_price, image, p_quantity) VALUES('$p_name', '$p_price', '$p_image', '$product_quantity')");
            $message[] = 'product added to cart succesfully';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>products</title>
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
        if(isset($message)){
            foreach($message as $message){
                echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
            };
        };
        ?>
            <?php include 'navbar.php'; ?>
        <div>
            <section>
                <h1>latest products</h1>
                <div>
                    <?php
                    $select_products = mysqli_query($conn, "SELECT * FROM `product`");
                    if(mysqli_num_rows($select_products) > 0){
                        while($row = mysqli_fetch_assoc($select_products)){
                    ?>
                    <form action="" method="post">
                        <div>
                            <img src="uploaded_img/<?php echo $row['p_image']; ?>" alt="">
                            <h3><?php echo $row['p_name']; ?></h3>
                            <div class="price">$<?php echo $row['p_price']; ?>/-</div>
                            <input type="hidden" name="p_name" value="<?php echo $row['p_name']; ?>">
                            <input type="hidden" name="p_price" value="<?php echo $row['p_price']; ?>">
                            <input type="hidden" name="p_image" value="<?php echo $row['p_image']; ?>">
                            <input type="submit" class="btn" value="add to cart" name="add_to_cart">
                        </div>
                    </form>
                    <?php
                        };
                    };
                    ?>
                </div>
            </section>
        </div>
    </body>
</html>