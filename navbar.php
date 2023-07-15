<?php 
 include 'config.php';
?>

</p><section class="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="display: flex; align-items: center; height: 100%;">
                <img src="images/logo.png" alt="Logo" width="70" height="70" class="d-inline-block align-text-top" style="border-radius: 50%; margin-right: 1rem;">
                <span style="font-size : 2rem; font-weight: bold;">eShopify</span>
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
                            <?php
                                $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
                                $row_count = mysqli_num_rows($select_rows);
                            ?>
                            <a class="nav-link" aria-current="page" href="#" style="font-size: 1.2rem;">
                                <i class="fa-solid fa-cart-shopping" style="align-item:center;"></i><span><?php echo $row_count; ?></span>
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
                        <li class="nav-item btn" style="text-align:center;">
                            <a class="nav-link" href="insert.php" style="font-size: 1.2rem;">Add Product</a>
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
                            <a class="nav-link" href="insert.php" style="font-size: 1.2rem;">Add Product</a>
                        </li>
                        <li class="nav-item btn" style="text-align:center;">
                            <a class="nav-link" href="#" style="font-size: 1.2rem;">See Feedback</a>
                        </li>
                        <li class="nav-item btn btn-secondary logout-btn" style="text-align:center;">
                            <a class="nav-link" href="insert.php" data-bs-toggle="modal" data-bs-target="#logoutModal" style="border-radius: 10%; font-size: 1.2rem;">ADD PRODUCT</a>
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
                        <li class="nav-item btn" style="text-align:center;">
                            <a class="nav-link" href="insert.php" style="font-size: 1.2rem;">Add Product</a>
                        </li>
                        <li class="nav-item btn btn-secondary login-btn" style="text-align:center;">
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal" style="border-radius: 10%; font-size: 1.2rem;">Login</a>
                        </li>
                        <li class="nav-item" style="text-align:center;">
                            <span style="color: transparent;">A</span>
                        </li>
                        <li class="nav-item btn btn-secondary login-btn" style="text-align:center;">
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#signupModal" style="border-radius: 10%; font-size: 1.2rem;">Register</a>
                        </li>
                    </ul>
                <?php } ?>
            </div>
        </div>
    </nav>
</section>