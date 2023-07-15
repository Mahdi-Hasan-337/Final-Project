<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="display: flex; align-items: center; height: 100%;">
                <img src="images/logo.png" alt="Logo" width="70" height="70" class="d-inline-block align-text-top" style="border-radius: 50%; margin-right: 1rem;">
                <span style="font-size : 2rem; font-weight: bold;">eShopify</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="btn nav-item active">
                        <a class="nav-link" href="#" style="font-size:1.5rem;font-weight: 400;">Home</a>
                    </li>
                    <li class="btn nav-item">
                        <a class="nav-link" href="#" style="font-size:1.5rem;font-weight: 400;">Profile</a>
                    </li>
                    <li class="btn nav-item dropdown" style="font-size:1.5rem;font-weight: 400;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user"></i>                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#" style="text-align:center;">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#" style="text-align:center;">Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#" style="text-align:center;">Logout</a></li>
                        </ul>
                    </li>
                    <?php if (isset($_SESSION['al_username'])) { ?>
                        <li class="btn nav-item">
                            <a class="nav-link" href="insert.php" style="font-size:1.5rem;font-weight: 400;">Add Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-secondary px-4 mt-1" style="font-size:1.5rem;font-weight: 400;" href="logout.php" data-bs-toggle="modal" data-bs-target="#loginModal" style="border-radius: 10%; font-size: 1.2rem;">Login</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link btn btn-secondary px-4 mt-1" style="font-size:1.5rem;font-weight: 400;" href="loginadmin.php" data-bs-toggle="modal" data-bs-target="#loginModal" style="border-radius: 10%; font-size: 1.2rem;">Login</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

            <!-- Login as Admin or user? -->
            <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="display: flex; align-items: center; min-height: calc(100% - 1rem);">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body m-auto d-block mb-2">
                        <h5 class="modal-title" id="loginModalLabel" style="text-align:center">Login as</h5>
                        <a href="logadmin.php" type="button" class="btn btn-primary mt-2" style="width:6rem; margin-left:1rem; margin-right:1rem;">ADMIN</a>
                        <span style="mt-2">or</span>
                        <a href="loguser.php" type="button" class="btn btn-primary mt-2" style="width:6rem; margin-left:1rem; margin-right:1rem;">USER</a>
                    </div>
                    <div class="modal-footer"> 
                        <p>Don't Have an Account?
                            <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#signupModal"  style="width:6rem; margin-left:1rem; margin-right:1rem;">Sign Up</a>
                        </p>
                        <button type="button" class="btn btn-secondary m-auto d-block" data-bs-dismiss="modal" style="width:6rem;" aria-label="Close">CANCEL</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sign Up Modal -->
        <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="display: flex; align-items: center; min-height: calc(100% - 1rem);">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body m-auto d-block mb-2">
                        <h5 class="modal-title" id="loginModalLabel" style="text-align:center">Register as</h5>
                        <a href="regadmin.php" type="button" class="btn btn-primary mt-2" style="width:6rem; margin-left:1rem; margin-right:1rem;">ADMIN</a>
                        <span style="mt-2">or</span>
                        <a href="reguser.php" type="button" class="btn btn-primary mt-2" style="width:6rem; margin-left:1rem; margin-right:1rem;">USER</a>
                    </div>
                    <div class="modal-footer"> 
                        <p>Already Have an Account?
                            <a href="regdmin.php" type="button" data-bs-toggle="modal" style="width:6rem; margin-left:1rem; margin-right:1rem;">Login</a>
                        </p>
                        <button type="button" class="btn btn-secondary m-auto d-block" data-bs-dismiss="modal" style="width:6rem;" aria-label="Close">CANCEL</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Are you sure to logout? -->
        <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="display: flex; align-items: center; min-height: calc(100% - 1rem);">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body m-auto d-block mb-2">
                        <h5 class="modal-title" id="logoutModalLabel" style="text-align:center">Are you sure to logout?</h5>
                    </div>

                    <div class="modal-footer"> 
                        <a href="logout.php" class="btn btn-primary m-auto d-block">LOGOUT</a>
                        <button type="button" class="btn btn-secondary m-auto d-block" data-bs-dismiss="modal" style="width:6rem;" aria-label="Close">DECLINE</button>
                    </div>
                </div>
            </div>
        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>