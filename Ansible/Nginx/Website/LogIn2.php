<?php require_once 'config.php';

	// Define variables and initialize with empty values

	$username = $password = "";

	$username_err = $password_err = "";

 

	// Processing form data when form is submitted

	if($_SERVER["REQUEST_METHOD"] == "POST"){

  	// Check if username is empty

 	 if(empty(trim($_POST["username"]))){
  	$username_err = 'Please enter username.';
  	} else{
    $username = trim($_POST["username"]);
  	}

  	// Check if password is empty

  	if(empty(trim($_POST['password']))){
    $password_err = 'Please enter your password.';
    } else{
    $password = trim($_POST['password']);
		}	
		
 		 // Validate credentials

  	if(empty($username_err) && empty($password_err)){

      // Prepare a select statement

        $sql = "SELECT username, password FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){

        // Bind variables to the prepared statement as parameters

        mysqli_stmt_bind_param($stmt, "s", $param_username);

       	// Set parameters

        $param_username = $username;

        // Attempt to execute the prepared statement

        if(mysqli_stmt_execute($stmt)){

        // Store result

        mysqli_stmt_store_result($stmt);

        	// Check if username exists, if yes then verify password

       	  if(mysqli_stmt_num_rows($stmt) == 1){                    

        	// Bind result variables

        	mysqli_stmt_bind_result($stmt, $username, $hashed_password);

        		if(mysqli_stmt_fetch($stmt)){

        			if(password_verify($password, $hashed_password)){

        	 		/* Password is correct, so start a new session and save the username to the session */

         			session_start();

          		$_SESSION['username'] = $username;      

         	 		header("location: welcome.php");

        			}else{

       		 		// Display an error message if password is not valid

           		$password_err = 'The password you entered was not valid.';

							}
						}

        } else{

       	// Display an error message if username doesn't exist

        $username_err = 'No account found with that username.';

        }

        } else{

                echo "Oops! Something went wrong. Please try again later.";

            }

        }

        // Close statement

        mysqli_stmt_close($stmt);

    }

    // Close connection

    mysqli_close($link);

	}

?>

<!DOCTYPE html>

<html class="font">

	<head>
		<meta charset="UTF-8"/>	
		<link rel="stylesheet" href="style2.css" />		
		<title>Connexion</title>

		<script>

		//check password, username AND email access
		
		//email

		function check_email(){
		
			var email = document.getElementById('new_email').value;

			var zegex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;		

			if (!zegex.test(email)){
				alert("Email incorrecte");
			}else {
        text = "Input OK";

    	}
    	document.getElementById("Em").innerHTML = text;

		}	

  	//Identifiant
		
		function myID() {

			var ID = document.getElementById('new_ID').value;
	
			var id_regex = /^[a-zA-Z0-9._-]{4,15}$/;	
		
			if (!id_regex.test(ID)){
					alert("Identifiant incorrecte");
			}else {
					text = "Input OK";
			}
			document.getElementById("click").innerHTML = text;
		}

		// check if fields are not empty

		function	check_access_admin(){
			
			var username= document.getElementById("username").value;
			var password= document.getElementById("password").value;

			if (username =="" || password==""){
			alert('Please fill in all fields');
			return false;

			}else{
			
			} 
		}

		function	check_access_members(){
			
			var username= document.getElementById("m_username").value;
			var password= document.getElementById("m_password").value;

			if (username =="" || password==""){
				alert('Please fill in all fields');
			return false;
			}else{
			} 
		}

		//password
		
		function myFunction() {
		
			var Password = document.getElementById('new_password').value;
	
			// /^(?=<CONDITION1>)(?=<CONDITION2>)(?=<CONDITION3>)<REGEX>
			// 4 à 15 caracères,1 lettre minu, 1 lettre maj, 1 digit, 1 caractère spec, pas les autres +@ ...
			// /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$

			var password_regex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_è])([-+!*$@%_\w]{4,15})$/;	
		
			
			if (!password_regex.test(Password)){
				alert("Mot de passe incorrecte");
					
			} else {
				text = "Input OK";
			}
				document.getElementById("demo").innerHTML = text;
		}

		//Phone number

		function myNumber() {
		
			var Numbers = document.getElementById('new_number').value;

			var number_regex = /^(0){1}[1-9]{2,10}$/;	
		
			if (!number_regex.test(Numbers)){
					alert("Numéro incorrecte");
					
			} else {
					text = "Input OK";
			}
			document.getElementById("numb").innerHTML = text;
		}

		// Alert Box

		function customAlert(){

 				this.render= function (dialog){
  				var winW= window.innerWidth;
  				var winH = window.innerHeight;
  				var dialogoverlay= document.getElementById('dialogoverlay');
 					var dialogbox= document.getElementById('dialogbox');

  				dialogoverlay.style.display ="block";
  				dialogoverlay.style.height =winH +"px";
  				dialogbox.style.left =(winW/2) - (550 * 0.5) + "px";
  				dialogbox.style.top="100px";
  				dialogbox.style.display="block";

 					document.getElementById('dialogboxhead').innerHTML ="Syntaxe";
  				document.getElementById('dialogboxbody').innerHTML = "-Au moins 4 à 15 caractères ";
 		 			document.getElementById('dialogboxbody1').innerHTML ="-Au moins 1 chiffre compris entre 0 et 9";
  				document.getElementById('dialogboxbody2').innerHTML ="-Au moins 1 lettre minuscule";
					document.getElementById('dialogboxbody3').innerHTML ="-Au moins 1 lettre majuscule";
  				document.getElementById('dialogboxbody4').innerHTML =dialog;
  				document.getElementById('dialogboxfoot').innerHTML ='<button onclick="Alert.ok()">J\'ai compris</button>';
				}
 
 				this.ok = function (){
  				document.getElementById('dialogbox').style.display ="none";
  				document.getElementById('dialogoverlay').style.display="none";
  			} 
			}var Alert = new customAlert();



		function customAlert_tel(){

  			this.render_tel= function (telephone){
  				var winW= window.innerWidth;
  				var winH = window.innerHeight;
 					var numberoverlay= document.getElementById('numberoverlay');
  				var numberbox= document.getElementById('numberbox');
  
					numberoverlay.style.display ="block";
  				numberoverlay.style.height =winH +"px";
  				numberbox.style.left =(winW/2) - (550 * 0.5) + "px";
  				numberbox.style.top="100px";
 				  numberbox.style.display="block";

  				document.getElementById('numberhead').innerHTML ="Syntaxe";
  				document.getElementById('numberbody').innerHTML = telephone;
  				document.getElementById('numberfoot').innerHTML ='<button onclick="Alerts.ok_tel()">J\'ai compris</button>';

				}
 
 			 	this.ok_tel = function (){
  				document.getElementById('numberbox').style.display ="none";
  				document.getElementById('numberoverlay').style.display="none";
  			} 
			}var Alerts = new customAlert_tel();

		// Include config files


		</script>


		</head>
			
		<!-- Menu deroulant -->
		<body id="ancre1" style="margin:0px; padding:0px;">
		<?php include "navBar2.php"; ?>

		<div id="content">

		</br>

		<h1><li>Connexion</li></h1>
	
		<!--Admin Access-->

		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="login_back" onsubmit=" return check_access_admin();">

			<fieldset>

			<legend><h3>Accés réservé à l'administrateur</h3></legend>

				<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>" id="set">

						<label >Utilisateur</label>

						<input type="text" name="username"class="form-control"id="username" value="<?php echo $username; ?>">

						<span class="help-block"><?php echo $username_err; ?></span>

				</div>    

				<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">

						<label>Mot de passe</label>

						<input type="password" name="password" class="form-control"id="password">

						<span class="help-block"><?php echo $password_err; ?></span>

				</div>

				<div class="form-group">

						<input type="submit" class="btn btn-primary" value="Login">

				</div>

	

			</fieldset>

		</form>


		<!--Members Access-->
		</br>


		<div class="wrapper">

		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="login_back" onsubmit=" return check_access_members();">

		<fieldset>
			<legend><h3>Accés réservé aux membres</h3></legend>

        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">

          <label >Utilisateur</label>

          <input type="text" name="username"class="form-control"id="m_username" value="<?php echo $username; ?>">

          <span class="help-block"><?php echo $username_err; ?></span>

        </div>    

        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">

          <label>Mot de passe</label>

          <input type="password" name="password" class="form-control"id="m_password">

          <span class="help-block"><?php echo $password_err; ?></span>

        </div>
			
				<div class="form-group">

        <input type="submit" class="btn btn-primary" value="Login">

        </div>

            <p>Don't have an account? <a href="register.php"target ="_blank">Sign up now</a>.</p>

		</fieldset>

		</form>
		</br>

		<!--access nouvel utilisateur-

		<form action ="Submission.html" method="post" >
					
			<fieldset>
				<legend><h3> Accés nouvel utilisateur</h3></legend>
				
				<label>
				Identifiant:<input id="new_ID" />
				<button type="button" onclick="myID()" id="click" >Check</button >
				<button class=" button_S button1" type ="button" onclick="Alert.render('')">!</button>
				</label>
				
				</br>
				</br>

				<label>
				Mot de passe:<input  id="new_password">
				<button type="button" onclick="myFunction()" id="demo" >Check</button >
				<button  class=" button_S button1" type ="button" onclick="Alert.render('-Au moins 1 de ses caractères spéciaux autorisé : -+!*$@%_ ')">!</button>		
				</label>
				
				</br>
				</br>
				
				<label>
				Email:<input id="new_email">
				<button type="button" onclick="check_email()" id="Em" >Check</button >
				<button type = "button"  class=" button_S button1" onclick="Alerts.render_tel('Format minimum: *@**.**')">!</button>	
				</label>
			
				</br>
				</br>
				
				<label>
				Téléphone:<input id="new_number">
				<button type="button" onclick="myNumber()" id="numb" >Check</button >	
				<button type = "button"  class=" button_S button1" onclick="Alerts.render_tel('Format: 0 + ( 9 chiffres compris entre 1 et 9 )')">!</button>	
				</label>
				
				<p><input type = "submit" value = "Inscription"></p>

			</fieldset>

		</form>


		// Alert Box Alignement 

		<div id="dialogoverlay"></div>

		<div id="dialogbox">

		<div>  

		<div id="dialogboxhead"></div>
		<div id="dialogboxbody"></div>
		<div id="dialogboxbody1"></div>
		<div id="dialogboxbody2"></div>
		<div id="dialogboxbody3"></div>
		<div id="dialogboxbody4"></div>
		<div id="dialogboxfoot"></div>
	
		</div>

		</div>

		</br>	

		<div id="numberoverlay"></div>

		<div id="numberbox">

  	<div>
    
    <div id="numberhead"></div>
    <div id="numberbody"></div>
    <div id="numberfoot"></div>
    
  	</div>
	
		</div>-->

		</div>
		</br>
	
		<!-- Pied de page -->
		</div>
		<div id="bas">
 
 		<?php include "Pied_de_page2.php"; ?>

   </div>
	 
	</body>
	</html>