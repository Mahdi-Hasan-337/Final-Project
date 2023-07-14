<?php
    session_start();
    //include ('nav.php');
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
                        <!--  -->
                        <?php
                        // session_start();
                        if (isset($_SESSION['l_username'])) {
                        ?>
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item btn" style="text-align:center;">
                                    <a class="nav-link active" aria-current="page" href="#" style="font-size: 1.2rem;">Home</a>
                                </li> 
                                <li class="nav-item align-items-center mt-2" style="text-align:center;">
                                    <a class="nav-link" aria-current="page" href="#" style="font-size: 1.2rem;">
                                        <i class="fa-solid fa-cart-shopping" style="align-item:center;"></i>0
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
                            </ul>
                        <?php } ?>
                    </div>
                </div>
            </nav>
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
                        <button type="button" class="btn btn-secondary m-auto d-block" data-bs-dismiss="modal" style="width:6rem;" aria-label="Close">CANCEL</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Admin Login -->
        <div class="modal fade" id="adminlogin" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="display: flex; align-items: center; min-height: calc(100% - 1rem);">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body m-auto d-block mb-2">
                        <form action="loginAction.php" method="post">
                            <h4 style="text-align:center; margin-bottom:1rem">ADMIN LOGIN</h4>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                <input type="text" class="form-control" name="l_username" placeholder="Enter username">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                <input type="password" class="form-control" name="l_pass" placeholder="Enter password" id="myInput">
                                <div class="input-group-text">
                                    <input type="checkbox" onclick="myFunction()">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary col-12" style="background: gray; border-radius: 2rem;">Login</button>
                            New? <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#adminreg"  style="width:6rem; margin-left:1rem; margin-right:1rem;">Register here</a>
                        </form>
                    </div>

                    <div class="modal-footer"> 
                        <button type="button" class="btn btn-secondary m-auto d-block" data-bs-dismiss="modal" style="width:6rem;" aria-label="Close">CANCEL</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Login -->
        <div class="modal fade" id="userlogin" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
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
                                <input type="text" class="form-control" name="l_username" placeholder="Enter username">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                <input type="password" class="form-control" name="l_pass" placeholder="Enter password" id="myInput">
                                <div class="input-group-text">
                                    <input type="checkbox" onclick="myFunction()">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary col-12" style="background: gray; border-radius: 2rem;">Login</button>
                            New? <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#userreg"  style="width:6rem; margin-left:1rem; margin-right:1rem;">Register here</a>
                        </form>
                    </div>

                    <div class="modal-footer"> 
                        <button type="button" class="btn btn-secondary m-auto d-block" data-bs-dismiss="modal" style="width:6rem;" aria-label="Close">CANCEL</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Admin Register -->
        <div class="modal fade" id="adminreg" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="display: flex; align-items: center; min-height: calc(100% - 1rem);">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body m-auto d-block mb-2">
                        <form action="registerAction.php" method ="post" style="text-transform: uppercase">
                            <h4 style="text-align:center; margin-bottom:1rem">ADMIN REGISTER</h4>
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

                    <div class="modal-footer"> 
                        <button type="button" class="btn btn-secondary m-auto d-block" data-bs-dismiss="modal" style="width:6rem;" aria-label="Close">CANCEL</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- User register -->
        <div class="modal fade" id="userreg" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="display: flex; align-items: center; min-height: calc(100% - 1rem);">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body m-auto d-block mb-2">
                        <form action="registerAction.php" method ="post" style="text-transform: uppercase">
                            <h4 style="text-align:center; margin-bottom:1rem">USER REGISTER</h4>
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

                    <div class="modal-footer"> 
                        <button type="button" class="btn btn-secondary m-auto d-block" data-bs-dismiss="modal" style="width:6rem;" aria-label="Close">CANCEL</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Are you sure to logout? -->
        <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="display: flex; align-items: center; min-height: calc(100% - 1rem);">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body m-auto d-block mb-2">
                        <h5 class="modal-title" id="loginModalLabel" style="text-align:center">Are you sure to logout?</h5>
                    </div>

                    <div class="modal-footer"> 
                        <a href="logout.php" class="btn btn-primary m-auto d-block">LOGOUT</a>
                        <button type="button" class="btn btn-secondary m-auto d-block" data-bs-dismiss="modal" style="width:6rem;" aria-label="Close">DECLINE</button>
                    </div>
                </div>
            </div>
        </div>

        <section class="card-section">
            <div class="row mt-4 mb-2">   
                <div class="col-lg-3 col-md-6">
                    <a href="electronics.php">
                        <div class="card card d-block m-auto" style="width: 18rem; border-radius: 10%;">
                            <img class="card-img-top" src="images/camera.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="electronics.php">
                        <div class="card card d-block m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="images/camera.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="electronics.php">
                        <div class="card card d-block m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="images/camera.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="electronics.php">
                        <div class="card card d-block m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="images/camera.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row mt-4 mb-4">    
            <div class="col-lg-3 col-md-6">
                    <a href="electronics.php">
                        <div class="card card d-block m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="images/camera.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="electronics.php">
                        <div class="card card d-block m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="images/camera.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="electronics.php">
                        <div class="card card d-block m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="images/camera.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="electronics.php">
                        <div class="card card d-block m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="images/camera.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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