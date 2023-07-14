<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
        <style>
            .login-btn{
                /* background:red; */
            }

            .login-btn:hover{
                background-color: rgb(151, 198, 214);
            }

        </style>
        <title>LU print shop</title>
    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#" style="display: flex; align-items: center; height: 100%;">
                        <img src="images/logo.png" alt="Logo" width="70" height="70" class="d-inline-block align-text-top" style="border-radius: 50%; margin-right: 1rem;">
                        <span style="font-size : 2rem; font-weight: bold;">Online Market</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon" style="color:red;"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <!--  -->
                        <?php
                        // session_start();
                        if (isset($_SESSION['l_username'])) {
                        ?>
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item btn" style="text-align:center;">
                                    <a class="nav-link active" aria-current="page" href="#" style="font-size: 1.2rem;">Home</a>
                                </li>
                                <li class="nav-item btn" style="text-align:center;">
                                <a class="nav-link" aria-current="page" href="#" style="font-size: 1.2rem;">Home</a>
                                </li>
                                <li class="nav-item btn" style="text-align:center;">
                                    <i class="fa-solid fa-cart-shopping"></i>0                           
                                </li>
                                <li class="nav-item dropdown btn" style="text-align:center;">
                                    <a class="nav-link dropdown-toggle menu-end" href="#" style="font-size: 1.2rem;" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        My profile
                                    </a>
                                    <ul class="dropdown-menu btn" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Account</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item btn" style="text-align:center;">
                                    <a class="nav-link" href="logout.php" style="font-size: 1.2rem;">Logout</a>
                                </li>
                            </ul>
                        <?php } else { ?>
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item btn" style="text-align:center;">
                                    <a class="nav-link active" aria-current="page" href="#" style="font-size: 1.2rem;">Home</a>
                                </li>
                                <li class="nav-item dropdown btn" style="text-align:center;">
                                    <a style="font-size: 1.2rem;" class="nav-link dropdown-toggle menu-end" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Categories
                                    </a>
                                    <ul class="dropdown-menu btn" style="width:80px; background:rgb(196, 240, 255);" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item d-item" href="#" style="text-align:center;font-size: 1.2rem">Stationery</a></li>
                                        <hr>
                                        <li><a class="dropdown-item" href="#" style="text-align:center;font-size: 1.2rem">Grocery</a></li>
                                        <hr>
                                        <li><a class="dropdown-item" href="#" style="text-align:center;font-size: 1.2rem">Electric</a></li>
                                        <hr>
                                        <li><a class="dropdown-item" href="#" style="text-align:center;font-size: 1.2rem">Electronics</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item btn" style="text-align:center;font-size: 1.2rem;">
                                    <a class="nav-link" href="#">Contact Us</a>
                                </li>
                                <li class="nav-item btn" style="text-align:center;">
                                    <a class="nav-link" href="#" style="font-size: 1.2rem;">Feedback</a>
                                </li>
                                <li class="nav-item btn btn-secondary btn login-btn" style="text-align:center;">
                                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal" style="border-radius: 10%;font-size: 1.2rem;">Login</a>
                                </li>
                                <!-- <li class="nav-item btn btn-secondary btn login-btn" style="text-align:center;font-size: 1.2rem;">
                                    <a class="nav-link" href="login.php" style="border-radius: 10%">Login</a>
                                </li> -->
                            </ul>
                        <?php } ?>
                    </div>
                </div>
            </nav>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>