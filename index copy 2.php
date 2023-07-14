<?php
    session_start();
    if(isset($_SESSION['al_username'])) {
        header("Location: index.php");
        exit();
    }

    if(isset($_SESSION['ul_username'])) {
        header("Location: index.php");
        exit();
    }

    if(isset($_SESSION['ar_username'])) {
        header("Location: index.php");
        exit();
    }

    if(isset($_SESSION['ur_username'])) {
        header("Location: index.php");
        exit();
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
        <style>
                body{
                    background: cornsilk;
                }

                nav{
                    text-transform:uppercase;
                }

                .login-btn:hover{
                    background-color: rgb(160, 200, 300);
                }

                .logout-btn:hover{
                    background-color: red;
                }

                .admin-log:hover{
                    background-color: red;
                }

                .card {
                    border-radius: 1rem;
                }

                .card-img-top {
                    border-radius: 1rem;
                }

                .c-item{
                    height: 35rem;
                }

                .c-img{
                    height: 100%;
                    object-fit:cover;
                    width: 100%;
                    filter: brightness(0.7); 
                }
        </style>
        <title>LU print shop</title>
    </head>

    <body>
        <section class="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#" style="display: flex; align-items: center; height: 100%;">
                        <img src="images/logo.png" alt="Logo" width="70" height="70" class="d-inline-block align-text-top" style="border-radius: 50%; margin-right: 1rem;">
                        <span style="font-size : 2rem; font-weight: bold;">ONLINE MARKET</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon" style="color:red;"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">

                        <!-- Logic -->
                        <!-- User Interface -->
                        <?php if (isset($_SESSION['ul_username'])) { ?>
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item btn" style="text-align:center;">
                                    <a class="nav-link active" aria-current="page" href="#" style="font-size: 1.2rem;">Home</a>
                                </li> 
                                <li class="nav-item align-items-center mt-2" style="text-align:center;">
                                    <a class="nav-link" aria-current="page" href="#" style="font-size: 1.2rem;">
                                        <i class="fa-solid fa-cart-shopping" style="align-item:center;"></i><span>0</span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown btn" style="text-align:center;">
                                    <a class="nav-link dropdown-toggle menu-end" href="#" style="font-size: 1.2rem;" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-user-circle"></i>
                                        <!-- My profile -->
                                    </a>
                                    <ul class="dropdown-menu btn" aria-labelledby="navbarDropdown">
                                        <li style="text-align:center;"><a class="dropdown-item" href="#">UPDATE</a></li>
                                        <li style="text-align:center;"><a class="dropdown-item" href="#">SETTINGS</a></li>
                                        <hr>
                                        <li class="nav-item" style="text-align:center;">
                                            <a class="nav-link" href="logout.php" data-bs-toggle="modal" data-bs-target="#logoutModal" style="border-radius: 10%; font-size: 1.2rem; color:black;">LOGOUT</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item btn btn-secondary logout-btn" style="text-align:center;">
                                    <a class="nav-link" href="logout.php" data-bs-toggle="modal" data-bs-target="#logoutModal" style="border-radius: 10%; font-size: 1.2rem;">LOGOUT</a>
                                </li>
                            </ul>
                        <!-- Admin Interface -->
                        <?php } elseif (isset($_SESSION['al_username'])) { ?>
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item btn" style="text-align:center;">
                                    <a class="nav-link active" aria-current="page" href="#" style="font-size: 1.2rem;">Home</a>
                                </li>

                                <li class="nav-item align-items-center mt-2" style="text-align:center;">
                                    <a class="nav-link" aria-current="page" href="#" style="font-size: 1.2rem;">
                                        <i class="fa-solid fa-cart-shopping" style="align-item:center;"></i>0
                                    </a>
                                </li>
                                <li class="nav-item btn" style="text-align:center;">
                                    <a class="nav-link" href="#" style="font-size: 1.2rem;">See Feedback</a>
                                </li>
                                <li class="nav-item btn btn-secondary logout-btn" style="text-align:center;">
                                    <a class="nav-link" href="logout.php" data-bs-toggle="modal" data-bs-target="#logoutModal" style="border-radius: 10%; font-size: 1.2rem;">LOGOUT</a>
                                </li>
                            </ul>
                        <!-- Visitor Interface -->
                        <?php } else { ?>
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item btn" style="text-align:center;">
                                    <a class="nav-link active" aria-current="page" href="#" style="font-size: 1.2rem;">Home</a>
                                </li>

                                <li class="nav-item dropdown btn" style="text-align:center;">
                                    <a href="#" style="font-size: 1.2rem;" class="nav-link dropdown-toggle menu-end"id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                        <hr>
                                        <li><a class="dropdown-item" href="#" style="text-align:center;font-size: 1.2rem">Ceramics</a></li>
                                        <hr>
                                        <li><a class="dropdown-item" href="#" style="text-align:center;font-size: 1.2rem">Library</a></li>
                                        <hr>
                                        <li><a class="dropdown-item" href="#" style="text-align:center;font-size: 1.2rem">Cloth</a></li>
                                        <hr>
                                        <li><a class="dropdown-item" href="#" style="text-align:center;font-size: 1.2rem">Furniture</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item align-items-center mt-2" style="text-align:center;">
                                    <a class="nav-link" aria-current="page" href="#" style="font-size: 1.2rem;">
                                        <i class="fa-solid fa-cart-shopping" style="align-item:center;"></i>0
                                    </a>
                                </li>
                                <li class="nav-item btn" style="text-align:center;">
                                    <a class="nav-link" href="#" style="font-size: 1.2rem;">Feedback</a>
                                </li>
                                <li class="nav-item btn btn-secondary login-btn" style="text-align:center;">
                                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal" style="border-radius: 10%; font-size: 1.2rem;">Login</a>
                                </li>
                                <li class="nav-item btn btn-secondary login-btn" style="margin-left:1rem;text-align:center;">
                                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#signupModal" style="border-radius: 10%; font-size: 1.2rem;">Register</a>
                                </li>
                            </ul>
                        <?php } ?>
                    </div>
                </div>
            </nav>
        </section>

        <section class="carousel-section">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                </ol>

                <!-- Slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active c-item">
                        <img src="images/drone.jpg" class="c-img" alt="Carousel Image 1">
                        <div class="carousel-caption">
                            <h3>Upto</h3>
                            <p>30% off</p>
                        </div>
                    </div>
                    <div class="carousel-item c-item">
                        <img src="images/camera.jpg" class="c-img" alt="Carousel Image 2">
                        <div class="carousel-caption">
                            <h3>Best Quality</h3>
                            <p>Camera</p>
                            <p>Make your dream easier</p>
                        </div>
                    </div>
                    <div class="carousel-item c-item">
                        <img src="images/gadget.jpg" class="c-img" alt="Carousel Image 3">
                        <div class="carousel-caption">
                            <h3>Your Dream</h3>
                            <p>Our Satisfaction</p>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </section>
        
        <section class="card-section">
            <div class="row mt-4 mb-4">   
                <div class="col-lg-3 col-md-6">
                    <a href="electronics.php" style="text-decoration:none;">
                        <div class="card card d-block m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="images/camera.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align:center; color: black; font-size: 1.5rem;">Stationery</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="electronics.php" style="text-decoration:none;">
                        <div class="card card d-block m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="images/camera.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align:center; color: black; font-size: 1.5rem;">Grocery</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="electronics.php" style="text-decoration:none;">
                        <div class="card card d-block m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="images/camera.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align:center; color: black; font-size: 1.5rem;">Electric</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="electronics.php" style="text-decoration:none;">
                        <div class="card card d-block m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="images/camera.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align:center; color: black; font-size: 1.5rem;">Electronics</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row mt-4 mb-4">   
                <div class="col-lg-3 col-md-6">
                    <a href="electronics.php" style="text-decoration:none;">
                        <div class="card card d-block m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="images/camera.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align:center; color: black; font-size: 1.5rem;">Ceramic</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="electronics.php" style="text-decoration:none;">
                        <div class="card card d-block m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="images/camera.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align:center; color: black; font-size: 1.5rem;">Library</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="electronics.php" style="text-decoration:none;">
                        <div class="card card d-block m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="images/camera.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align:center; color: black; font-size: 1.5rem;">Cloth</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="electronics.php" style="text-decoration:none;">
                        <div class="card card d-block m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="images/camera.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align:center; color: black; font-size: 1.5rem;">Furniture</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section class="footer">
            <footer class="footer bg-dark text-light" style="padding:.5rem;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 pt-5">
                            <h5>About Us</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, quibusdam id ducimus ut consequatur ratione dolor et fuga, expedita eaque consequuntur odio tempora suscipit enim magni illum aut placeat. Quos.</p>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 p-5" style="">
                            <h5 style="text-align:center; margin-bottom: 2rem;">Follow Us</h5>
                            <ul class="list-inline" style="text-align:center">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook" style="font-size: 2rem"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter" style="font-size: 2rem"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram" style="font-size: 2rem"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest" style="font-size: 2rem"></i></a></li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-6 p-5">
                            <h5>Contact Information</h5>
                            <ul class="list-unstyled">
                                <li>Address: Leading University, Kamalbazar, Sylhet, Bangladesh</li>
                                <li>Phone: (+880) 1517-161066</li>
                                <li>Email: example@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="text-center">
                        <p>&copy; 2023 Online Shop. All rights reserved.</p>
                    </div>
                </div>
            </footer>
        </section>

        <!-- Login as Admin or user? -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="display: flex; align-items: center; min-height: calc(100% - 1rem);">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body m-auto d-block mb-2">
                        <h5 class="modal-title" id="loginModalLabel" style="text-align:center">Login as</h5>
                        <a href="#" type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#adminlogin"  style="width:6rem; margin-left:1rem; margin-right:1rem;">ADMIN</a>
                        <span style="mt-2">or</span>
                        <a href="#" type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#userlogin"  style="width:6rem; margin-left:1rem; margin-right:1rem;">USER</a>
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
                        <a href="#" type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#adminreg"  style="width:6rem; margin-left:1rem; margin-right:1rem;">ADMIN</a>
                        <span style="mt-2">or</span>
                        <a href="#" type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#userreg"  style="width:6rem; margin-left:1rem; margin-right:1rem;">USER</a>
                    </div>
                    <div class="modal-footer"> 
                        <p>Don't Have an Account?
                            <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#loginModal"  style="width:6rem; margin-left:1rem; margin-right:1rem;">Login</a>
                        </p>
                        <button type="button" class="btn btn-secondary m-auto d-block" data-bs-dismiss="modal" style="width:6rem;" aria-label="Close">CANCEL</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Admin Login -->
        <div class="modal fade" id="adminlogin" tabindex="-1" aria-labelledby="adminloginLabel" aria-hidden="true">
            <div class="modal-dialog" style="display: flex; align-items: center; min-height: calc(100% - 1rem);">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body m-auto d-block mb-2">
                        <form action="loginActionadmin.php" method="post">
                            <h4 style="text-align:center; margin-bottom:1rem">ADMIN LOGIN</h4>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                <input type="text" class="form-control" name="al_username" placeholder="Enter username">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                <input type="password" class="form-control" name="al_pass" placeholder="Enter password" id="adminLoginPasswordInput">
                                <div class="input-group-text">
                                    <input type="checkbox" onclick="togglePasswordVisibility('adminLoginPasswordInput')">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary col-12" style="background: gray; border-radius: 2rem;">Login</button>
                            New? <a href="loginAdmin" type="button" data-bs-toggle="modal" data-bs-target="#adminreg"  style="width:6rem; margin-left:1rem; margin-right:1rem;">Register here</a>
                        </form>
                    </div>

                    <div class="modal-footer"> 
                        <button type="button" class="btn btn-secondary m-auto d-block" data-bs-dismiss="modal" style="width:6rem;" aria-label="Close">CANCEL</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Login -->
        <div class="modal fade" id="userlogin" tabindex="-1" aria-labelledby="userloginLabel" aria-hidden="true">
            <div class="modal-dialog" style="display: flex; align-items: center; min-height: calc(100% - 1rem);">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body m-auto d-block mb-2">
                        <form action="loginAction.php" method="post">
                            <h4 style="text-align:center; margin-bottom:1rem">USER LOGIN</h4>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                <input type="text" class="form-control" name="ul_username" placeholder="Enter username">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                <input type="password" class="form-control" name="ul_pass" placeholder="Enter password" id="userLoginPasswordInput">
                                <div class="input-group-text">
                                    <input type="checkbox" onclick="togglePasswordVisibility('userLoginPasswordInput')">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary col-12" style="background: gray; border-radius: 2rem;">Login</button>
                            New? <a href="loginUser.php" type="button" data-bs-toggle="modal" data-bs-target="#userreg"  style="width:6rem; margin-left:1rem; margin-right:1rem;">Register here</a>
                        </form>
                    </div>

                    <div class="modal-footer"> 
                        <button type="button" class="btn btn-secondary m-auto d-block" data-bs-dismiss="modal" style="width:6rem;" aria-label="Close">CANCEL</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Admin Register -->
        <div class="modal fade" id="adminreg" tabindex="-1" aria-labelledby="adminregLabel" aria-hidden="true">
            <div class="modal-dialog" style="display: flex; align-items: center; min-height: calc(100% - 1rem);">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body m-auto d-block mb-2">
                        <form action="registerActionadmin.php" method="post">
                            <h4 style="text-align:center; margin-bottom:1rem">ADMIN REGISTER</h4>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                <input type="text" class="form-control" name="r_username" placeholder="Enter username">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                                <input type="text" class="form-control" name="r_email" placeholder="Enter email">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                                <input type="text" class="form-control" name="r_phone" placeholder="Enter mobile">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                <input type="password" class="form-control" name="r_pass" placeholder="Enter password" id="adminPasswordInput">
                                <div class="input-group-text">
                                    <input type="checkbox" onclick="togglePasswordVisibility('adminPasswordInput')">
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                <input type="password" class="form-control" name="r_con_pass" placeholder="Re-enter password" id="adminConfirmPasswordInput">
                                <div class="input-group-text">
                                    <input type="checkbox" onclick="togglePasswordVisibility('adminConfirmPasswordInput')">
                                </div>
                            </div>
                            <button type="Register" class="btn btn-primary col-12">Register</button>
                            Already have an account ? <a href="loginAdmin.php">Login Here</a>
                        </form>
                    </div>

                    <div class="modal-footer"> 
                        <button type="button" class="btn btn-secondary m-auto d-block" data-bs-dismiss="modal" style="width:6rem;" aria-label="Close">CANCEL</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- User register -->
        <div class="modal fade" id="userreg" tabindex="-1" aria-labelledby="userregLabel" aria-hidden="true">
            <div class="modal-dialog" style="display: flex; align-items: center; min-height: calc(100% - 1rem);">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body m-auto d-block mb-2">
                        <form action="registerAction.php" method="post">
                            <h4 style="text-align:center; margin-bottom:1rem">USER REGISTER</h4>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                <input type="text" class="form-control" name="ur_username" placeholder="Enter username">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                                <input type="text" class="form-control" name="ur_email" placeholder="Enter email">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                                <input type="text" class="form-control" name="ur_phone" placeholder="Enter mobile">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                <input type="password" class="form-control" name="ur_pass" placeholder="Enter password" id="passwordInput">
                                <div class="input-group-text">
                                    <input type="checkbox" onclick="togglePasswordVisibility('passwordInput')">
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                <input type="password" class="form-control" name="ur_conpass" placeholder="Re-enter password" id="confirmPasswordInput">
                                <div class="input-group-text">
                                    <input type="checkbox" onclick="togglePasswordVisibility('confirmPasswordInput')">
                                </div>
                            </div>
                            <button type="Register" class="btn btn-primary col-12">Register</button>
                            Already have an account? <a href="loginuser.php">Login Here</a>
                        </form>
                    </div>

                    <div class="modal-footer"> 
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script>
            function togglePasswordVisibility(inputId) {
                var input = document.getElementById(inputId);
                input.type = (input.type === "password") ? "text" : "password";
            }
      </script>

    </body>
</html>