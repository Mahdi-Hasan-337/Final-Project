<?php
    session_start();
    include 'config.php';
    if(isset($_POST['cart'])){
        $p_name = $_POST['p_name'];
        $p_price = $_POST['p_price'];
        $p_image = $_POST['p_image'];
        $p_quantity = 1;
        $select = mysqli_query($conn, "SELECT * FROM `cart` WHERE p_name = '$p_name'");
        if(mysqli_num_rows($select) > 0){
            $message[] = 'Product already Added';
        }else{
            $insert_product = mysqli_query($conn, "INSERT INTO 'product'(p_name, p_price, p_image, p_quantity) VALUES('$p_name', '$p_price', '$p_image', '$p_quantity')");
            $message[] = 'Added Successfully';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Favicon -->
        <link rel="icon" type="images/favicon.ico" href="favicon.ico">
        <!-- Font awesome icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <title>LU print shop</title>
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
            <section class="latest-products">
                <h1 style="text-align:center;">latest products</h1>
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
                            <input type="submit" class="btn" value="add to cart" name="cart">
                            <!-- <a href="#" class="btn btn-primary"><i class="fa-solid fa-cart-shopping" style="margin-right: 1rem;"></i>Add to Cart</a> -->
                        </div>
                    </form>
                    <?php
                        };
                    };
                    ?>
                </div>
                <div class="row" style="margin-top: 2rem; margin-bottom: 2rem;">
                    <div class="col-lg-3 col-md-6">
                        <form action="">
                            <div class="card" style="width: 18rem;">
                                <img src="up_imges/<?php echo $row['image']; ?>" alt="">
                                <div class="card-body">
                                    <input type="hidden" name="p_name" value="<?php echo $row['name']; ?>">
                                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                    <a href="#" class="btn btn-danger d-block m-auto"><i class="fa-solid fa-cart-shopping" style="margin-right: 1rem;"></i>Add to Cart</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>