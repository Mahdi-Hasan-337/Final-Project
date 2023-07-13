<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="hero">
        <nav>
            <img src="images/logo.png" class="logo">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <img src="images/user.png" class="user-pic" onclick="toggleMenu()">
            
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="images/user.png" alt="">
                        <h3>Mahdi Hasan</h3>
                    </div>

                    <hr>

                    <a href="" class="sub-menu-link">
                        <img src="images/profile.png" alt="">
                        <p>Edit Profile</p>
                        <span>></span>
                    </a>


                    <a href="" class="sub-menu-link">
                        <img src="images/setting.png" alt="">
                        <p>Settings & Privacy</p>
                        <span>></span>
                    </a>

                    <a href="" class="sub-menu-link">
                        <img src="images/help.png" alt="">
                        <p>Help & Support</p>
                        <span>></span>
                    </a>

                    <a href="" class="sub-menu-link">
                        <img src="images/logout.png" alt="">
                        <p>Logout</p>
                        <span>></span>
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open-menu")
        }
    </script>
</body>
</html>