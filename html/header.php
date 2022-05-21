<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>InfluencerMania</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

  <link rel="stylesheet" href="../assets/css/hover.css">

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
      <div class="container">
        <a href="index.php" class="navbar-brand">Influencer<span class="text-primary">Mania</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.php">Influencers</a>
            </li>
            <!-- <div class="dropdown">
                    <a href="#" class="dropbtn">Signin</a>
                    <div class="dropdown-content">
                        <a href="login_signup_influencer.html">Influencer</a>
                        <a href="login_signup_brand.html">Brand</a>
                    </div> -->

            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <?php 
            if($_SESSION['isloggedin']==false){
                ?>
            <li class="nav-item">
                            <div class="dropdown">
                                    <a href="#" class="dropbtn">Signin</a>
                                    <div class="dropdown-content">
                                        <a href="login_signup_influencer.html">Influencer</a>
                                        <a href="login_signup_brand.html">Brand</a>
                                    </div>
                            </div>  
            </li>
            <?php
            }
            else
            {
            ?>
            <li>      
                                <a href="#">Welcome:
                                <?php
                                try {
                                    error_reporting(E_ERROR | E_PARSE);
                                    if($_SESSION['id']!=null){
                                        echo $_SESSION['username']; 
                                    }
                                } catch (\Throwable $th) {
                                    echo 'erro';
                                }
                               
                               ?>
                                </a>
                                
                            </li>
            <li class="nav-items">
                <a class="nav-link" href="logout.php">Logout
                </a>
        </li>
        <?php
            }
            
            ?>
          </ul>
        </div>
        </div>
      </div>
    </nav>
