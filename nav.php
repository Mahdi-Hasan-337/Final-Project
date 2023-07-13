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
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="images/user.png" alt="Logo" width="70" height="70" class="rounded-circle d-inline-block align-text-top" style="margin-right: 10px;">
            <span style="font-size: 2rem;">LU print shop</span>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <?php
                    // session_start();
                    if (isset($_SESSION['l_username'])) {
                    ?>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#">logged</a></li>
                    </ul>
                    <?php } else { ?>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#"  style="text-align: center">Button 1</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"  style="text-align: center">Button 2</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"  style="text-align: center">Button 3</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"  style="text-align: center">Button 4</a></li>
                    </ul>
                <?php } ?>
            </div> 

            
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <?php
                    // session_start();
                    if (isset($_SESSION['l_username'])) {
                    ?>
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="images/user.png" alt="Profile" width="30" height="30" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">My Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                    <?php } else { ?>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary" href="login.php" style="margin-right: 1rem;margin-left: 1rem">Login</a>
                        </li>
                    </ul>
                <?php } ?>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
