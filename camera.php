
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

        <title>LU print shop - Camera Details</title>
    </head>
    <body>
        <?php include ('navbar.php');?>

        <section class="product-details">
            <div class="container">
                <h1 class="mt-4 mb-4">Camera Details</h1>

                <div class="row">
                    <div class="col-lg-6">
                        <img src="images/camera.jpg" class="img-fluid" alt="Camera Image">
                    </div>
                    <div class="col-lg-6">
                        <h3>Camera Name</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vulputate, lectus a congue blandit, nulla elit vestibulum nisi, ut iaculis nulla massa sed ligula.</p>
                        <p>Price: $999</p>
                        <p>Availability: In Stock</p>
                        <a href="#" class="btn btn-primary"><i class="fa-solid fa-cart-shopping" style="margin-right: 1rem;"></i>Add to Cart</a>
                    </div>
                </div>

                <div class="mt-4">
                    <h3>Product Description</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vulputate, lectus a congue blandit, nulla elit vestibulum nisi, ut iaculis nulla massa sed ligula. Vivamus rutrum tristique tortor vitae rhoncus. Sed tincidunt ultricies enim, id auctor eros pharetra nec. Praesent sed commodo enim. Vestibulum quis lobortis erat. Nullam ac dui non urna euismod rutrum.</p>
                    <p>Aliquam lacinia rutrum tellus, vitae tincidunt lectus finibus ac. Suspendisse malesuada massa ac aliquet iaculis. Curabitur tristique mauris vitae tincidunt finibus. Etiam ac urna id nulla finibus vulputate. Maecenas iaculis lectus id enim egestas, vel tristique elit suscipit.</p>
                </div>
            </div>
        </section>
        <?php include ('footer.php');?>

        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-JMOwi/k1ShiwCdJ/x+vO/1kg9pd1UijwX3ICXyxLUnILuA8htzEavMwmXv8M6bz3" crossorigin="anonymous"></script>
    </body>
</html>
