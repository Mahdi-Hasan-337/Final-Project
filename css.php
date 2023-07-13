<?php
  header('Content-type: text/css; charset: UTF-8');
?>
label.logo{
        color: rgb(0, 0, 0);
        font-size: 35px;
        line-height: 80px;
        padding-left: 25px;
        font-weight: bold;
    }
    
    .checkbtn{
        font-size: 30px;
        color: white;
        float: right;
        line-height: 80px;
        margin-right: 40px;
        cursor: pointer;
        display: none;
    }

    #check{
        display: none;
    }
    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .element2 ul {
      display: flex;
      margin: 0;
      padding: 0;
      list-style: none;
    }
    
    .element2 ul li {
      margin-left: 15px;
    }
    
    .element2 ul li a {
      text-decoration: none;
    }

    .element3 ul li a {
      text-decoration: none;
    }

    .reverse {
      display: flex;
      align-items: center;
    }

    @media (max-width: 576px) {
      nav {
        display: block;
      }
        
      .reverse{
        display: flex;
        flex-direction: column-reverse;
      }

      .element2 ul {
        display: block;
      }

      .element2 ul li {
        margin-top: 25px;
        text-align: center;
      }
    }

    .login_btn{
      background:red;
      
    } 

    @media (max-width: 768px) {
      nav {
        display: block;
      }

      <?php
      // session_start();
      if (isset($_SESSION['l_username'])) {
        ?>
        .reverse {
          display: flex;
          flex-direction: column-reverse;
        }
        <?php
      } else {
        ?>
        .reverse {
          display: flex;
          align-items: center;
        }
        <?php
      }
      ?>

      .element2 ul {
        display: block;
      }

      .element2 ul li {
        margin-top: 25px;
        text-align: center;
      }
    }

      @media (max-width: 992px) {
        nav {
        display: block;
        }

        .reverse{
          display: flex;
          flex-direction: column-reverse;
        }

        .element2 ul {
          display: block;
        }

        .element2 ul li {
          margin-top: 25px;
          text-align: center;
        }
    }