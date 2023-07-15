<?php
    session_start();
    if(isset($_SESSION['al_username'])){ ?>
        echo "<script>location.href='insert.php'</script>";
    <?php }
    else{ ?>
         echo "<script>location.href='index.php'</script>";
    <?php }?>
?> 