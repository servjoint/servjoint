<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Services">
	
    <title>ServJoint</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	<link rel="icon" href="./img/logo.jpg" type="image/x-icon" />
	<link rel="shortcut icon" href="./img/logo.jpg" type="image/x-icon" />
	
	<?php
		error_reporting(false);
		
	?>
</head>

<?php
 include("inc/servHeader.php");
?>

<div class="main-activity">
		<section class="inline-all">
		  <section class="left-section">
			<section class="middle-section">
			<br>
			<h3 id="Pass" > Retrieve Your Password Now </h3>
				<form action="email.php" method="POST" style='margin-top: 2px;margin-bottom: 2px;
								border-bottom-width: 2px;
								border-bottom-style: solid;
								border-top-width: 3px;
								border-top-style: solid;
								border-right-width: 3px;
								border-right-style: solid;
								border-left-width: 3px;
								border-left-style: solid;
								padding-bottom: 15px;
								padding-top: 12px;
								background-color: lightgrey;' >
					<input type="text" placeholder="enter name" name="txtName" id='txtFReg' required /><br>
					<input type="text" placeholder="enter surname" name="txtSurname" id='txtFReg' required /></br>
					<input type="email" placeholder="enter email address" name="txtEmail" id='txtFReg' required /><br>
					<input type="submit" id="btnSub" value="submit" />
				</form>
				</br>
			</section>
		  </section>
		</section>
</div>
	
	
</body>
<?php
require("inc/footer.php");
?>