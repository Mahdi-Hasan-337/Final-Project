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
                <form action="registerAction.php" method ="post">
                    <h5>Register</h5>
                    <div class="mb-3">
                        Username :                        
                        <input type="text" class="form-control" name="r_username">
                    </div>

                    <div class="mb-3">
                        Email :                        
                        <input type="text" class="form-control" name="r_email">
                    </div>

                    <div class="mb-3">
                        Password :                         
                        <input type="text" class="form-control" name="r_pass">
                    </div>

                    <div class="mb-3">
                        Confirm Password :                         
                        <input type="text" class="form-control" name="r_con_pass">
                    </div>

                    <div class="mb-3">
                        Phone :                         
                        <input type="text" class="form-control" name="r_phone">
                    </div>
                    
                    <button type="Register" class="btn btn-primary col-12">Register</button>
                    Already have an account ? <a href="login.php">Login Here</a>
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