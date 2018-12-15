<?php

// Initialize the session

session_start();

 

// If session variable is not set it will redirect to login page

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){

  header("location: Login2.php");

  exit;

}

?>

 

<!DOCTYPE html>

<html class="font">

    <head>

    <meta charset="UTF-8">
    <link rel="stylesheet"  href="style2.css" />
    <title>Welcome</title>

    
    
    
    </head>

    <body id="ancre1" style="margin:0px; padding:0px;">
    <?php include "navBar2.php"; ?>
    <?php include "requete.php"; ?>

    <div id="content">

    <div class="page-header">

        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>. Welcome to our site.</h1>

    </div>
    <div class="form-group">
        <p><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>

    </div>

    </div>

    </br>

    
    <div id="bas">
    <?php include "Pied_de_page2.php"; ?>
    
    </div>

    </body>
</html>
























    
	
