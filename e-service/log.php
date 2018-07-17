<!DOCTYPE html>
<html style="margin:-50px;">

<head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114927747-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-114927747-1');
</script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="title" content="servjoint - login" >
	<meta name="keyword" content="Servjoint">
	<meta name="keywords" content="Services, Register Service">
	<meta name="keyword" content="Login Service">
	<meta name="keyword" content="Service">
	<meta name="keyword" content="Lookup a Service">
	<meta name="keyword" content="Login a Service">
	<meta name="keyword" content="Log">
	<meta name="keyword" content="login">
	<meta title='servjoint - login'>
	<meta name="title" content="servjoint - login" >
	<meta name="description" content="service registration, login... Search a serive in your area" >
	
    <title>ServJoint - login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	
	<link rel="icon" href="./img/logo.jpg" type="image/x-icon" />
	<link rel="shortcut icon" href="./img/logo.jpg" type="image/x-icon" />
	
</head>

<?php
 include("inc/servHeader.php");
 
?>

	
	<div class="main-activity">
		
			<section class="middle-section">
			</br>
			<h3 style= "margin-right: -96px;"> Service Provider Login </h3>
			<?php
				if(isset($_COOKIE["Acc_Lock"]) )
				{
					if($_COOKIE["Acc_Lock"] == "lock" )
					{
						// Lock Current Account
					}
				}
			?>
			<form action='validate.php' name='Reg1' method='post' onsubmit='return checkRegform1()' style='margin-top: 2px;margin-bottom: 2px;
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
								background-color: lightgrey;
								margin-right: -110px;'>
			
				<input type="text" id="txtReg" name="txtUsername" placeholder="username" title="Username" />
				</br></br>
				<input type="password" id="txtReg" name="txtPassword" placeholder="password" title="Password"/>
				</br></br>
				
				<input type="submit" id="btnSubLog" name="btnSub" value="login" title="sign in" />
				
				<a href="Forgotten.php" title="Password Retrieve" alt="Forgot Password" id="forgotten" >Forgot Password</a>
				
			</form>
			<br>
			</section>
	</div>
	
<?php
	include("inc/footer.php");
?>