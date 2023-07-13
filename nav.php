<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        /* .navbar-brand {
        margin-right: auto;
        } */

        a.nav-link{
          text-align:center;
        }

        .login-btn:hover {
        background-color: darkgray;
        color: white;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
            <img src="images/user.png" alt="Logo" width="70" height="70" class="rounded-circle d-inline-block align-text-top" style="margin-right: 10px;">
            <span style="font-size: 2rem;">LU print shop</span>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <?php
                    // session_start();
                    if (isset($_SESSION['l_username'])) {
                    ?>  
                        <a class="nav-link btn btn-primary" href="logout.php" style="margin-right: 1rem;margin-left: 1rem">Logout</a>
                    <?php } else { ?>
                            <a class="nav-link" href="#"  style="text-align: center; margin-left:2rem;">Button 1</a>
                            <a class="nav-link" href="#"  style="text-align: center; margin-left:2rem;">Button 2</a>
                            <a class="nav-link" href="#"  style="text-align: center; margin-left:2rem;">Button 3</a>
                            <a class="nav-link" href="#"  style="text-align: center; margin-left:2rem;">Button 4</a>
                            <a class="login-btn nav-link btn" href="login.php" style="text-align: center; margin-right: 1rem; margin-left: 1rem; background-color: gray; padding-left: 1rem; padding-right: 1rem; padding-top: 0.5rem; padding-bottom: 0.5rem; font-size : 1rem; ">Login</a>
                <?php } ?>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
