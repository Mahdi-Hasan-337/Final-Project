<?php
    session_start();
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
        <title>eShopify</title>
    </head>

    <body>
        <?php include ('navbar.php');?>
        <?php include ('carousel.php');?>
        <?php include ('card-section.php');?>
        <?php include ('footer.php');?>

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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script>
            function togglePasswordVisibility(inputId) {
                var input = document.getElementById(inputId);
                input.type = (input.type === "password") ? "text" : "password";
            }
      </script>

    </body>
</html>