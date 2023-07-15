<?php
   include 'config.php';
   $id = $_GET['id'];
   $fetcheQuery = "SELECT `p_id`, `p_name`, `p_price`, `p_image` FROM `product` WHERE id='$id'";
   $allData = mysqli_query($conn, $fetcheQuery);
   $arrayData = mysqli_fetch_array($allData);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form</title>

    <style>
        form{
            background : #fff;
            padding: 15px;
            box-shadow : 0px 0px 10px 0px;
            border-radius : 10px
        }
    </style>
  </head>

   <body>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 col-sm-12">
                <form action="updateAction.php" method ="post" enctype='multipart/form-data'>
                    <h5>Update  Product</h5>
                    
                    <div class="mb-3">
                        product Name :                        
                        <input type="text" class="form-control" name="name" value="<?php echo $arrayData['p_name']?>">
                    </div>

                    <div class="mb-3">
                        Product Price :                         
                        <input type="text" class="form-control" name="price" value="<?php echo $arrayData['p_price']?>">
                    </div>
                    
                    <div class="mb-3">
                        Image :                         
                        <input type="file" class="form-control" name="p_image" Required>
                    </div>

                    <div class="mb-3">
                        <img width="150px" src="<?php echo $arrayData['p_image']?>" alt="">
                    </div>

                    <input type="text" name = "id" value="<?php echo $arrayData['id']?>">
                    
                    <button type="Login" class="btn btn-primary col-12">Update</button>
                </form>
            </div>
        </div>
    </div>


      <!-- Bootstrap JS from CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

   </body>
</html>