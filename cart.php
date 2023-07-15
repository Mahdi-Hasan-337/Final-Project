<?php
    include 'config.php';
    if(isset($_POST['update_update_btn'])){
        $update_quantity = $_POST['update_quantity'];
        $update_id = $_POST['update_id'];
        $update_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_id'");
        if($update_query){
            header('location:cart.php');
        };
    };
    if(isset($_GET['remove'])){
        $remove_id = $_GET['remove'];
        mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
        header('location:cart.php');
    };
    if(isset($_GET['delete_all'])){
        mysqli_query($conn, "DELETE FROM `cart`");
        header('location:cart.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Online Market</title>
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </head>
    <body>
        <?php include 'navbar.php'; ?>
        <div class="container">
        <section class="shopping-cart">
            <h1 class="heading">shopping cart</h1>

            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price(Total)</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $allData = mysqli_query($conn, "SELECT * FROM `cart`");
                        $grand_total = 0;
                        if(mysqli_num_rows($allData) > 0){
                            while($row = mysqli_fetch_assoc($allData)){
                            echo "
                            <tr>
                                <td> <img width='100px' src='$row[image]' alt=''></td>
                                <td>$row[p_name]</td>
                                <td>$row[p_price]</td>
                                <td>$row[p_quantity]</td>
                                <td>$echo number_format($row[price])/-</td>
                                <td>
                                    <form action='' method='post'>
                                        <input type='hidden' name='update_quantity_id'  value='$row[id]'>
                                        <input type='number' name='update_quantity' min='1'  value='$row[quantity]'>
                                        <input type='submit' value='update' name='update_update_btn'>
                                    </form>   
                                </td>
                                <td>$<?php echo $sub_total = number_format($row[price] * $row[quantity]); ?>/-</td>
                                <td><a href='cart.php?remove=$row[id]>REMOVE</a></td>
                            </tr>
                                <tr>                
                                    <td>
                                        <a class='btn btn-warning' href='update.php? id=$row[id]' style='margin-top:0.35rem; width: 6rem;'>Update</a> 
                                        <br>
                                        <a class='btn btn-danger' href='delete.php? id=$row[id]' style='margin-top:1rem; width: 6rem; onclick='return confirmDelete()'>Delete</a>
                                    </td>
                                </tr>
                            ";
                        }
                    }
                    ?>
                </tbody>
            </table>
            <div class="checkout-btn">
                <a href="checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">procced to checkout</a>
            </div>
        </section>
        </div>
    </body>
</html>