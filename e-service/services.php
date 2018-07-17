<?php
	ob_start();
?>
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
		
		require("inc/service_fetch.php");
		error_reporting(false);
	?>
</head>
<?php

 include("inc/servHeader.php");
 $cont;
					
?>

<div class="main-activity">
		
			<section class="middle-section">
				<br>
				</br>
				
				<?php
					
					$province = $_GET["provice"];
					$city = $_GET["city"];
					$service_search = $_GET["service"];
					
					if($service_search=="" & $city=="")
					{
						header('Location:http://servjoint.000webhostapp.com');
						//echo "<script> window.location='./serv.php' </script>";
						exit();	
					}
					// Include service search
					$servPro ="SELECT * FROM service_provider WHERE Province LIKE '$province' AND City LIKE '%$city%' AND Activation_id IS NOT NULL";
					
					$exNow = mysql_query($servPro, $conn);
					
					if(mysql_num_rows($exNow) <= 0 )
					{
						echo "<h3 id='noS'> Sorry No Services Provider Found For $service_search in $city. </h3> <br>";
					}else{
							
						while($rowServ = mysql_fetch_assoc($exNow))
						{
							$servP = $rowServ["ID_Number"];
							
							$servIndPro ="SELECT * FROM serv_indvi_offer WHERE Serv_Provider LIKE '$servP' AND Serv_Activation='1' AND Serv_Desc LIKE '%$service_search%' ";
							
							
							$exServ = mysql_query($servIndPro, $conn);
							$name = $rowServ["First_Name"];
							$surname = $rowServ["Last_Name"];
							$pp = $rowServ["pp"];
							
							while($line = mysql_fetch_assoc($exServ) )
							{
								$cookieName = "scc".$line["Serv_Off_ID"].$line["Serv_Activation"].$line["Service_ID"]; // service contact check;
								
								if( isset($_COOKIE[$cookieName]) )
								{
									
									if($cookieName == $_COOKIE[$cookieName] )
									{
										$cont = $rowServ["Contact_Details"];
									}
									
								}
								else
								{									
										$cont = null;
								}

								$servID = $line["Serv_Off_ID"];
								$desc = $line["Serv_Prov_Serv_Descr"];
								$serv_De = $line["Serv_Desc"];
								$showDesc;
								
								// check if desc is empty or not
								if($desc != NULL)
								{
									$showDesc = $desc;
								}else{
									$showDesc = $serv_De;
								}
								
								echo "<div class='ServDiv' >";
								echo "<br> <h4 id='Sname'>"; 
								
								?> 
								
								<form method="POST" action="./reqCont.php">
								<input type="hidden" name="nr" value="<?php echo $servID; ?>" />
								<button id="btnPro" name="Profile" onClick="this.form.action='profile.php' " value="<?php echo $name." ".$surname; ?>"> <?php echo $name." ".$surname;?></button>  
								</h4> <hr></hr>
								
								<table id='tblprop' align="center" >
								<tr>
								
								<th id='tblW' >
								<?php
									if($pp != NULL){
										echo '<img src="data:image/jpeg;base64,'.
										base64_encode( $pp ).'" id="pp" />';
									}else{
										echo "<img src='img/avatar.png' id='pp' />";
									}
										
								?>
								</th>
								
								<th id='tblW' >
								<text><?php echo $rowServ["City"]; ?></text>
								</th>
								
								</tr>
								<tr>
								<td></td>
								<input type="hidden" value="<?php echo $province;?>" name="province"/>
								<input type="hidden" value="<?php echo $city;?>" name="city"/>
								<input type="hidden" value="<?php echo $service_search;?>" name="service"/>
								
								<input type="hidden" value="<?php echo $cookieName;?>" name="id"/>
								<td >Contact:<?php echo req_cont($cont); ?></td>
								</tr>
								</table>
								<br>
								</form>
								
								<?php
								echo "</div> </br>";
							}
							
						}
						
						
					}
					
					
				?>
			</section>
		
			
</div>
</body>
<?php
// function to show and hide contacts
						function req_cont($contCHK)
								{
									
										if($contCHK == null)
										{
											return "<input type='submit' id='btnReq' name='req' value='view contact'/>"; 

										}else{
											return "<font color='maroon'>".$contCHK."</font>";
										}
																				
								}
								
require("inc/footer.php");
ob_end_flush();
?>