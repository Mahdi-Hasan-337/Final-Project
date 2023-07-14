<?php
  session_start();
  if(isset($_SESSION['ul_username'])) {
    header("Location: index.php");
    exit();
  }
  ?>
  <!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
      <title>Login</title>
      <style>
        body {
          background: url(images/lbg.jpg);
          background-position:center;
          background-size:cover;      
          background-repeat: no-repeat;
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
        }

        form {
          background: transperant;
          padding: 2rem;
          box-shadow: 0px 0px 10px 0px;
          border-radius: 1.2rem;
        }

        .logo{
          text-align:center;
          padding: 2rem;
          font-size: 3rem;
          margin-bottom : 1rem;
          /* color: red; */
        }

        .login_btn{
          background : transperant;
          font-weight: 1000;
          font-size: 1.5rem;
          border: 1px solid red;

        }

        .login_btn:hover{
        background : red;
        color: white;
      }
      </style>
    </head>

    <body>
      <div class="container-fluid">
        <!-- <h5 class="logo">Welcome to our website</h5> -->
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <form action="loginAction.php" method="post">
                    <h4 style="text-align:center; margin-bottom:1rem">USER LOGIN</h4>
                    <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input type="text" class="form-control" name="ul_username" placeholder="Enter username">
                    </div>
                    <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" class="form-control" name="ul_pass" placeholder="Enter password" id="myInput">
                    <div class="input-group-text">
                        <input type="checkbox" onclick="myFunction()">
                    </div>
                    </div>
                    <button type="submit" class="btn col-12" style="background: gray; border-radius: 2rem;">Login</button>
                    New? <a href="register.php">Register Here</a>
                </form>
            </div>
          </div>
        </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <script>
          function myFunction() {
              var x = document.getElementById("myInput");
              if (x.type === "password") {
                  x.type = "text";
              } else {
                  x.type = "password";
              }
          }
      </script>
    </body>
  </html>
