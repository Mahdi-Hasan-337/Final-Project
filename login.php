  <?php
  session_start();
  if(isset($_SESSION['l_username'])) {
    header("Location: index.php");
    exit();
  }
  ?>
  <!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
      <title>Login</title>
      <style>
        body {
          background: url(images/log_bg.jpg);
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
          padding: 15px;
          box-shadow: 0px 0px 10px 0px;
          border-radius: 10px;
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
        }
      </style>
    </head>
    <body>
    <div class="container-fluid">
      <h5 class="logo">Welcome to our website</h5>
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <form action="loginAction.php" method="post">
              <!-- <h5>Login</h5> -->
              <div class="mb-3">
                <input type="text" class="form-control" name="l_username" Placeholder="Enter user name">
              </div>
              <div class="mb-3">
                <input type="password" class="form-control" name="l_pass" Placeholder="Enter password">
              </div>
              <button type="submit" class="login_btn btn col-12">Login</button>
              New? <a href="register.php">Register Here</a>
            </form>
          </div>
        </div>
      </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
  </html>
