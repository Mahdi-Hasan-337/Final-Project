<?php
   include 'config.php';
   $id = $_GET['id'];
   $fetcheQuery = "SELECT `id`, `p_name`, `p_price`, `p_image` FROM `product` WHERE id='$id'";
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

  <body style="display: flex; justify-content: center; align-items: center; height: 100vh;">

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 col-sm-12">
                <form action="updateAction.php" method ="post" enctype='multipart/form-data' style="background : rgb(76, 222, 220); padding: 15px;border-radius : 10px">
                    <h5 style="text-align:center; font-weight: bold; font-size: 2rem;">Update  Product</h5>
                    <hr>

                    <div class="mb-3">
                        <span style="text-transform: uppercase; font-weight: 500; font-style: italic;">Serial</span>                    
                        <input type="text" readonly class="form-control" style= "margin-top:.2rem; border-radius:.5rem; padding:.5rem;" name="p_name" value="<?php echo $arrayData['id']?>">
                    </div>

                    <div class="mb-3">
                        <span style="text-transform: uppercase; font-weight: 500; font-style: italic;">product Name</span>                    
                        <input type="text" placeholder="Enter name.." class="form-control" style= "margin-top:.2rem; border-radius:.5rem; padding:.5rem;" name="p_name" value="<?php echo $arrayData['p_name']?>">
                    </div>

                    <div class="mb-3">
                        <span style="text-transform: uppercase; font-weight: 500; font-style: italic;">product Price</span>                         
                        <input type="text" placeholder="Enter price.." class="form-control" style="margin-top:.2rem; border-radius:.5rem; padding:.5rem;" name="p_price" value="<?php echo $arrayData['p_price']?>">
                    </div>
                    
                    <div class="mb-3">
                        <span style="text-transform: uppercase; font-weight: 500; font-style: italic;">image</span> 
                        <input type="file" placeholder="Enter image.." name="image" id="image" style="margin-top:.2rem; background: white; border-radius:.5rem; width: 100%; padding:.5rem;">

                        <img width="150px" id="image-preview" src="<?php echo $arrayData['p_image']?>" alt="Image Preview" style="display: block; margin: 1rem auto;"/>
                        <!-- <input type="file" class="form-control" name="image" Required> -->
                    </div>

                    <!-- <input type="text" name = "id" value="<?php echo $arrayData['id']?>"> -->
                    
                    <button type="Login" class="btn btn-primary col-12" style="border-radius: 1rem;">Update</button>
                    <a href="index.php" class="btn btn-secondary col-12 mt-2" style="border-radius: 1rem;">Cancel</a>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS from CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">

        $("#image").change(function () {
            imagePreview(this); 
        });
        function imagePreview(input)
        {
            //Check if there is a file that has been selected
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function(e) {
                $('#image-preview').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]); 
            }
        }
    </script>
    </body>
</html>