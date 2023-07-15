<?php
    include 'config.php';
    if(isset($_POST['cart'])){
        $p_name = $_POST['p_name'];
        $p_price = $_POST['p_price'];
        $p_image = $_POST['p_image'];
        $p_quantity = 1;
        $select = mysqli_query($conn, "SELECT * FROM `cart` WHERE p_name = '$p_name'");
        if(mysqli_num_rows($select) > 0){
            echo alert('Product already Added');
        }else{
            $insert_product = mysqli_query($conn, "INSERT INTO 'product'(p_name, p_price, p_image, p_quantity) VALUES('$p_name', '$p_price', '$p_image', '$p_quantity')");
            echo alert('Added Successfully');
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
        <?php include 'navbar.php'; ?>
        <div>
            <section class="latest-products">
                <div class="row" style="margin-top: 2rem; margin-bottom: 2rem;">
                    <div class="col-lg-3 col-md-6">
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
                </div>
            </section>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>