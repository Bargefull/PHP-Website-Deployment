<!DOCTYPE html>

<html class="font">

	<head>
	<meta charset="UTF-8"/>	
    <link rel="stylesheet" href="style2.css" />		
	<title>New members</title>

    <script>
    </script>

    </head>
	
    <!-- Menu déroulant -->
    <body id="ancre1" style="margin:0px; padding:0px;">
    <?php include "navBar2.php"; ?>

    <!-- Requete SQL -->
    <?php include "requete.php"; ?>

    <div id="content">


    <!-- Formulaire d'inscription -->

    <div class="wrapper">

    <h2>Sign Up</h2>

    <p>Please fill this form to create an account.</p>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <fieldset>
	    <legend><h3>Accés réservé aux nouveaux membres</h3></legend>
        
        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">

            <label>Username</label>

            <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">

            <span class="help-block"><?php echo $username_err; ?></span>

        </div>    

        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">

            <label>Password</label>

            <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">

            <span class="help-block"><?php echo $password_err; ?></span>

        </div>

        <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">

            <label>Confirm Password</label>

            <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">

        <span class="help-block"><?php echo $confirm_password_err; ?></span>

        </div>

        <div class="form-group">

            <input type="submit" class="btn btn-primary" value="Submit">

            <input type="reset" class="btn btn-default" value="Reset">

        </div>

        <p>Already have an account? <a href="Login2.php#login_back" >Login here.</a></p>
        </fieldset>
    </form>

    </div>    

    </br>

    </div>

    <!-- Pied de page -->
    <div id="bas">
    <?php include "Pied_de_page2.php"; ?>
    </div>

    </body>
</html>