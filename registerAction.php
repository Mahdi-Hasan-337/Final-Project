<?php

    // include config.php to connect database
    include 'config.php';

    // to accept all values coming from register.php field
    $ur_username = $_POST['ur_username'];
    $ur_email = $_POST['ur_email'];
    $ur_phone = $_POST['ur_phone'];
    $ur_pass = $_POST['ur_pass'];
    $ur_conpass = $_POST['ur_pass_confirm'];

    // regex of all fields

    $username_pattern = "/[A-Za-z .]{3,20}/";
    $email_pattern = "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/";
    $phone_pattern = "/(\+88)?-?01[3-9]\d{8}/";
    $pass_pattern = "/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&*_+><])).{6,20}/";

    // To check username not used twice
    $duplicate_email = mysqli_query($conn, "SELECT * FROM `u_register` WHERE db_username='$ur_email'");

    if(mysqli_num_rows($duplicate_email) > 0)
    {
        echo "<script>alert('Email Already Taken')</script>";
        echo "<script>location.href='index.php'</script>";
    }

    // to validate user name field
    elseif(!preg_match($username_pattern, $ur_username))
    {
        echo "<script>alert('Invalid Username')</script>";
        echo "<script>location.href='index.php'</script>";
    }

    // to validate email field
    elseif(!preg_match($email_pattern, $ur_email))
    {
        echo "<script>alert('Invalid Email')</script>";
        echo "<script>location.href='index.php'</script>";
    }

    // To validate phone field
    elseif(!preg_match($phone_pattern, $ur_phone))
    {
        echo "<script>alert('Invalid Phone Number')</script>";
        echo "<script>location.href='index.php'</script>";
    }

    // To check password field
    elseif(!preg_match($pass_pattern, $ur_pass))
    {
        echo "<script>alert('Invalid Password')</script>";
        echo "<script>location.href='index.php'</script>";
    }

    // to check confirm password field and password field are same or not
    elseif($ur_pass!=$ur_conpass)
    {
        echo "<script>alert('Password not matched')</script>";
        echo "<script>location.href='index.php'</script>";
    }

    else
    {
        $insert_query = "INSERT INTO `u_register`(`db_username`, `db_email`, `db_phone`, `db_pass`) VALUES ('$ur_username','$ur_email','$ur_phone','$ur_pass')";
        if(!mysqli_query($conn, $insert_query))
        {
            die("Not Inserted...!!!");
        }
        else
        {
            echo "<script>alert('Inserted')</script>";
            echo "<script>location.href='index.php'</script>";
        }
    }

?>