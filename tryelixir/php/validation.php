<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"><!--  --><!--    Document Title--><!-- =============================================-->
    <title>Registration</title><!--  --><!--    Favicons--><!--    =============================================-->
    <link rel="ServJoint-Icon" sizes="180x180" href="assets/images/favicons/favicon180x180.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon180x180.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon180x180.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicons/favicon180x180.png">
	<link rel="manifest" href="assets/images/favicons/manifest.json">
    <link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileImage" content="assets/images/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff"><!--  --><!--    Stylesheets--><!--    =============================================--><!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"><!-- Template specific stylesheets-->
    <link href="assets/lib/loaders.css/loaders.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/iconsmind/iconsmind.css" rel="stylesheet">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/lib/hamburgers/dist/hamburgers.min.css" rel="stylesheet">
    <link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet"><!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
	
	<meta name="Title" content="ServJoint Service Provider Registration">
	<meta name="Description" content="Register your freelancer or professional service here and become a menber in our website, where service seekers will be able to get in contact with you">
</head>
<body data-spy="scroll" data-target=".inner-link" data-offset="60">
    <main>
			<div class="loading" id="preloader">
				<div class="loader h-100 d-flex align-items-center justify-content-center">
					<div class="line-scale">
						<div>
						</div>
						<div>
						</div>
						<div>
				
						</div>
						<div>
						</div>
						<div>
						</div>
					</div>
				</div>
			</div>
	
			<section class="text-center py-0">
				<div class="background-holder overlay overlay-1" style="background-image:url(assets/images/services/Nails.jpg);">
				</div>
				<!--/.background-holder-->
				<div class="container">
				
<?php
if( isset($_POST["firstname"] ) & isset($_POST["surname"] ) 
	& isset($_POST["idnumber"] ) 
	& isset($_POST["email"] ) 
	& isset($_POST["phone"] )
	& isset($_POST["password"] ) 
	& isset($_POST["confirmPass"] ))
{
	
	$name = $_POST["firstname"];
	$surname = $_POST["surname"];
	$idnumber = $_POST["idnumber"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$password = $_POST["password"];
	$confirm = $_POST["confirmPass"];
	
	// create a javascript for confirming password while typing at registration page
	// * password match
	// * password contain Upper letter, lower letter and a digit
	
	include("class\ServiceProvider.php");
	
	
	$person = new Person();
	
	try{
		$person->name = $name;
		$person->surname = $surname;
		$person->idnumber = $idnumber;
		$person->phone = $phone;
		$person->email = $email;
		$person->password = $password;
		
		// function {record in the database}
		$person->register();
		
	}
	catch ( Exception $ex)
	{
		?>
		
		<div class="row h-100vh align-items-center">
		
					<div class="col-md-9 col-lg-6 mx-auto" data-zanim-timeline="{}" data-zanim-trigger="scroll">
					<div data-zanim='{"delay":0}' >
						<a href="..\index.html" >
							<img src="assets/images/services/Servjoint@Mall.png" alt="servjoint" title="servjoint" style="margin-top: 10rem !important;">
						</a>
					</div>
					<div class="background-white radius-secondary p-4 p-md-5" id="da" data-zanim='{"delay":0}' style="margin-top: 1rem !important;">
					<h4 class="text-uppercase fs-0 fs-md-1">Create your servjoint account</h4> <br/>
						<h4 class="text-uppercase fs-0 fs-md-1" style=" font-size: 0.8rem !important; color: red;" ><?php echo "Error: ". $ex->getMessage();  ?></h4>					
					<form class="mt-4 text-left" method="post" action="validation.php">
						<div class="row align-items-center">
							<div class="col-6">
								
								<input class="form-control" type="text" value ="<?php echo $name;?>" name="firstname" required placeholder="First name" aria-label="Text input with dropdown button">
							</div>
							<div class="col-6">
								<input class="form-control" type="text" value ="<?php echo $surname;?>" name="surname" required placeholder="Surname" aria-label="Text input with dropdown button">
							</div>
							<div class="col-12 mt-4">
								<input class="form-control" type="id_number" value ="<?php echo $idnumber;?>" name="idnumber" maxlength="13" placeholder="ID Number" aria-label="Text input with dropdown button">
							</div>
							<div class="col-12 mt-4">
								<input class="form-control" type="email" name="email" value ="<?php echo $email;?>" placeholder="Email Address" aria-label="Text input with dropdown button">
							</div>
							<div class="col-12 mt-4">
								<input class="form-control" maxlength="10" type="telephone" value ="<?php echo $phone;?>" name="phone" required placeholder="Phone Number" aria-label="Text input with dropdown button">
							</div>
							
							<div class="col-12 mt-4">
								<input class="form-control" type="Password" name="password" required placeholder="Password" aria-label="Text input with dropdown button">
							</div>
					
							<div class="col-12 mt-4">
								<input class="form-control" type="Password" name="confirmPass" required placeholder="Confirm Password" aria-label="Text input with dropdown button">
							</div>
						</div>
						<div class="row align-items-center mt-3">
							<div class="col-md-6 mt-3">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox">
									<span class="color-7"> I agree with the <a href="terms.html" src="assets/text/PrivacyAndPolicy.pdf" target="_blank" >terms &amp; conditions </a> </span>
								</label>
							</div>
							<div class="col-md-6 mt-3">
								<button class="btn btn-primary btn-block" type="submit">Create Account</button>
							</div>
						</div>
						</form>
					</div>
					</div>
					</div><!--/.row-->
		<?php
		
	}
	
}else{
	echo "<script> window.location='../registration.html' </script>";
}



?>
				</div><!--/.container-->
			</section>
	</main>
	<!--  -->
	
	
	
	<!--    JavaScripts    -->
	<!--    =============================================-->
    <script src="assets/lib/jquery/dist/jquery.min.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/lib/gsap/src/minified/TweenMax.min.js"></script>
    <script src="assets/lib/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>
    <script src="assets/lib/CustomEase.min.js"></script>
    <script src="assets/js/config.js"></script>
    <script src="assets/js/zanimation.js"></script> 
    <script src="assets/js/core.js"></script>
    <script src="assets/js/main.js"></script>
	<!--    End of JavaScripts    -->
</body>
</html>