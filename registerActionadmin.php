<?php

    // include config.php to connect database
    include 'config.php';

    // to accept all values coming from register.php field
    $ar_username = $_POST['ar_username'];
    $ar_email = $_POST['ar_email'];
    $ar_phone = $_POST['ar_phone'];
    $ar_pass = $_POST['ar_pass'];
    $ar_conpass = $_POST['ar_conpass'];

    // regex of all fields
    $username_pattern = "/[A-Za-z .]{3,20}/";
    $email_pattern = "/(cse|eee|law)_\d{10}@lus\.ac\.bd/";
    $phone_pattern = "/(\+88)?-?01[3-9]\d{8}/";
    $pass_pattern = "/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&*_+><])).{6,20}/";

    // To check username not used twice
    $duplicate_email = mysqli_query($conn, "SELECT * FROM `register` WHERE db_username='$r_username'");

    if(mysqli_num_rows($duplicate_email) > 0)
    {
        echo "<script>alert('Username Already Taken')</script>";
        echo "<script>location.href='register.php'</script>";
    }

    // to validate user name field
    elseif(!preg_match($username_pattern, $ar_username))
    {
        echo "<script>alert('Invalid Username')</script>";
        echo "<script>location.href='register.php'</script>";
    }

    // to validate email field
    elseif(!preg_match($email_pattern, $ar_email))
    {
        echo "<script>alert('Invalid Email')</script>";
        echo "<script>location.href='register.php'</script>";
    }

    // To validate phone field
    elseif(!preg_match($phone_pattern, $ar_phone))
    {
        echo "<script>alert('Invalid Phone Number')</script>";
        echo "<script>location.href='register.php'</script>";
    }

    // To check password field
    elseif(!preg_match($pass_pattern, $ar_pass))
    {
        echo "<script>alert('Invalid Password')</script>";
        echo "<script>location.href='register.php'</script>";
    }

    // to check confirm password field and password field are same or not
    elseif($ar_pass!=$ar_conpass)
    {
        echo "<script>alert('Password not matched')</script>";
        echo "<script>location.href='register.php'</script>";
    }

    else
    {
        $insert_query = "INSERT INTO `register`(`db_username`, `db_email`, `db_phone`, `db_pass`) VALUES ('$ar_username','$ar_email','$ar_phone','$ar_pass')";
        if(!mysqli_query($conn, $insert_query))
        {
            die("Not Inserted...!!!");
        }
        else
        {
            echo "<script>alert('Inserted')</script>";
            echo "<script>location.href='register.php'</script>";
        }
    }

?>