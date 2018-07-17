<!DOCTYPE html>
<html style=" margin: -50px; " >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Services, Register Service">
	
    <title>ServJoint</title>
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
			
			<marquee><strong> Breaking News: Service Provider Registration Is Still Free </strong></marquee> 
			<?php	
					echo "<h3 id='hServ'> Service Provider Registration </h3>";
						//require("inc/connection.php");
						//$selctServ = "SELECT * FROM service";
						//$servQuery= mysql_query($selctServ, $conn);
						
					echo "
						<form action='reg.php' name='Reg1' method='post' id='formReg' style='margin-top: 2px;margin-bottom: 2px;
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
								background-color: lightgrey;'> 
							
							<strong>General Information </strong></br></br>
							 
							<input type='text' name='txtName' id='txtReg' placeholder='name' style='margin-bottom: 5px; 
								background-color: inherit;'/> 
								<font color='red'>  * </font>
								</br>
							<input type='text' name='txtSurname' id='txtReg' placeholder='surname' style='margin-bottom: 5px; 
								background-color: inherit;' /><font color='red'>  *</font>
								</br><font color='darkgoldenrod'> "; ?>
								
							<input type="text" name="txtID_Num" id="txtReg" placeholder="ID Number" maxlength="13" /><font color='red'>  * </font><?php

				// $user = txtID_Num;
				
				$Bdate = substr($user,0,6);
				
				$year = substr($Bdate,0,2);
				
				$month = substr($Bdate,2,2);
				
				$day = substr($Bdate,4,2);
				
				if($month == 01 ){
					$month = "Jan";
				}else if($month == 02 ){
					$month = "Feb";
				}else if($month == 03 ){
					$month = "Mar";
				}else if($month == 04 ){
					$month = "Apr";
				}else if($month == 05 ){
					$month = "May";
				}else if($month == 06 ){
					$month = "Jun";
				}else if($month == 07 ){
					$month = "Jul";
				}else if($month == 08 ){
					$month = "Aug";
				}else if($month == 09 ){
					$month = "Sep";
				}else if($month == 10 ){
					$month = "Oct";
				}else if($month == 11 ){
					$month = "Nov";
				}else if($month == 12 ){
					$month = "Dec";
				}
								
							echo "</br></br>Male <input type='radio' name='radGend' value='male' />     Female <input type='radio' name='radGend' value='female' checked/>
								</font> </br></br>";
								/*
								 echo "<select id='service' name='combService' >"; 
								 echo "<option value=''> Select Service </option>"; 
								
								 while($row = mysql_fetch_array($servQuery) )
								{
									$serID = $row["Serv_ID"];
									$servN = $row["Serv_Name"];
									
									echo "<option value='$serID' name='combService'>$servN</option>";
								} */
								echo "<input type='text' id='txtReg' placeholder='service' align='center' name='combService'/> <font color='red'>  * </font> ";

								/* for ($i=0; $i < sizeof($arrServ) ;$i++ )
								 {
									 echo "<option value='$arrServ[$i]'> $arrServ[$i] </option>";
									 
								 } */
								// echo "</select>";
					
				echo "</br></br><strong>Address Information </strong></br></br>
							<input require type='text' name='House' placeholder='house number' id='txtReg'/><font color='red'> *</font><br></br>
							<input require type='text' name='Street' placeholder='Street name' id='txtReg'/><font color='red'> *</font><br></br>
							<input require type='text' name='City' placeholder='city/township' id='txtReg'/><font color='red'> *</font><br></br>
							<input require type='text' name='Postal' placeholder='postal code' id='txtReg'/><font color='red'> *</font><br></br>
							<select name='Province' id='txtReg'>
							<option value='GP' >Gauteng</option>
							<option value='LP' >Limpopo</option>
							<option value='FS' >Free State</option>
							<option value='MP' >Mpumalanga</option>
							<option value='EC' >Eastern Cape</option>
							<option value='WC' >Western Cape</option>
							<option value='NC' >Northern Cape </option>
							<option value='KZN'>Kwazulu-Natal</option>
							<option value='NW'>North-West Province</option>
							</select> <font color='red'>  *</font> </br>
							<br> <strong> Contact Information </strong> </br>
							</br>
							<input type='email' name='txtEmail' id='txtReg' require placeholder='email address' style='margin-bottom: 5px; 
								background-color: inherit;' /><font color='red'>  *</font>     </br> 
							<br>
							<input type='text' name='txtCont' id='txtReg' require Placeholder='main contact details' style='margin-bottom: 5px; 
								background-color: inherit;' /><font color='red'>  *</font>
							</br>
							<br>
							<input type='text' name='txtContAlt' id='txtReg' Placeholder='alternative contact details' style='margin-bottom: 5px; 
								background-color: inherit;'/><font color='red'>  *</font>
							</font>
							</br></br> <strong>Logging Information</strong>
							</br></br>
							<input type='text' title='Username' name='txtUsername' id='txtReg' placeholder='username'  style='margin-bottom: 5px; 
								background-color: inherit;'/> <font color='red'>  *</font>							
							</br>
							<input type='Password' title='Enter New Password' name='txtPass' id='txtReg' placeholder='new password' style='margin-bottom: 5px; '/><font color='red'>  *</font></br>
							<input type='Password' title='Re-Enter Password' name='txtPassConf' id='txtReg' Placeholder='re-type Password' style='margin-bottom: 5px; '/><font color='red'>  *</font>
							</br>
							</br>
							<input type='checkbox' name='txtchck'> I have read the <a href=''>Terms and Conditions </a><font color='red'>  * </font>
							</br>";
							
							/*	echo "</br></br>
							<input type='submit' value='next' name='form1' id='btnNext' />
							*/
							
							?>
							<input type='submit' value='Register' name='form3' id='btnNext'  onclick="this.form.action='reg.php' " />
							<?php
								echo "</form>";
								echo "<br>";
							?>
				
			</section>
			</section>
	
	</div>
	
</body>
<?php
require("inc/footer.php");
?>