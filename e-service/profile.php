<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Services Profile">
	
    <title>ServJoint</title>
    <!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="assets/css/styles.css">
	<link rel="icon" href="./img/logo.jpg" type="image/x-icon" />
	<link rel="shortcut icon" href="./img/logo.jpg" type="image/x-icon" />
	<script>
		function clicked()
		{
			alert("clicked")
		}
	</script>
	
	<?php
		error_reporting(false);
		require("inc/connection.php");
	?>
</head>
<?php
 include("inc/servHeader.php");
?>

<div class="main-activity" id="main-activity">
		

			<section class="middle-section">
				<marquee>
					<strong> Breaking News: Service Provider Registration Is Still Free </strong>
				</marquee> 
				<br>
				</br>
				
				<div class="profile">
					<?php
							$id = $_POST["nr"]; // service indiv id
							$req = $_POST["id"]; // cookie value if exists
				
							$selcIndSev ="SELECT  Service_ID , Serv_Provider FROM serv_indvi_offer WHERE Serv_Off_ID ='$id' ";
							$exec = mysql_query($selcIndSev, $conn);
				
							$fetchRow = mysql_fetch_assoc($exec);
							
							$servProv = $fetchRow["Serv_Provider"];
							$servID = $fetchRow["Service_ID"];
							
							// add
							$selcServ = "SELECT * FROM service WHERE Serv_ID = '$servID'";
							
							$exc = mysql_query( $selcServ ,$conn); // change to mysqli($conn, $selcServ);
							
							$fetchServRow = mysql_fetch_array($exc);
							$na = $fetchServRow["Serv_Name"];
							// till here
							
							$slectSerProv = "SELECT First_Name , Last_Name , Gender , City , Province , E_Mail , Contact_Details , 
							Alternative_Contacts , pp FROM service_provider WHERE ID_Number ='$servProv'";
							
							$execSerPr = mysql_query($slectSerProv, $conn);
				
							$fetchServPRow = mysql_fetch_array($execSerPr);
							
							$pp = $fetchServPRow["pp"];
							$prov = "";
							if($fetchServPRow["Province"] == "GP")
							{
								$prov = "Gauteng";
							}else if($fetchServPRow["Province"] == "FS"){
								$prov = "Free State";
							}else if($fetchServPRow["Province"] == "MP"){
								$prov = "Mpumalanga";
							}else if($fetchServPRow["Province"] == "NW" ){
								$prov = "North West Province";
							}else if($fetchServPRow["Province"] == "EC"){
								$prov = "Eastern Cape";
							}else if($fetchServPRow["Province"] == "WC" ){
								$prov = "Western Cape";
							}else if($fetchServPRow["Province"] == "NC"){
								$prov = "Northern Cape";
							}else if($fetchServPRow["Province"] == "LP" ){
								$prov = "Limpopo";
							}else if($fetchServPRow["Province"] == "KZN" ){
								$prov = "Kwazulu-Natal";
							}
							
					?>
					<div class="inner-profile">
						
						<?php
						// 				ADD 				//
						echo "<h5 id='servOff'>$na</h5>";
						// 			TILL HERE				//
						if($pp !="")
						{
							echo '<img src="data:image/jpeg;base64,'.
							base64_encode( $pp ).'" height="130px" width="120px" id="pp" />';
							
						}else{
							echo "<img id='pp' src='img/avatar.png' /> </th>";
						}
						
						echo "</br><h5 id='servOff'>  ".$fetchServPRow["First_Name"]." ".$fetchServPRow["Last_Name"]."</br>Lives in: ".$fetchServPRow["City"].", $prov </h5>"; ?>
					
					</div>
					</br>
				</div>
				<br>
				<?php
				// execute Project References Card
				$selcProj = "Select * from project WHERE Service_Provider ='$servProv' AND Servic_Offered ='$servID'";
				$selcRev = "Select * from review WHERE service_provider ='$servProv' ORDER BY date DESC  LIMIT 3";
				
				$execProj = mysql_query($selcProj, $conn);
				
				/* if(mysql_num_rows($execProj) != 0 )
				{
					echo "<heading style='color: crimson;'> References <heading>";
					$count = 0;
					while($rowProj = mysql_fetch_array($execProj))
					{
						$ref_nr = $count+1;
						
						$refName = $rowProj["name"];
						$refSurname = $rowProj["surname"];
						$cont = $rowProj["contact"];
						$email = $rowProj["email"];
						
						echo "<div class='profile-card'>
								Job Reference:$ref_nr <br> $refName $refSurname </br> $cont <br> $email </br>
							</div>
							<br>";
						$count++;
					}
					
				
				}else{
					
					echo "</br>
					<div class='profile'>
						Have No Reference(s).
					</div>
					<br>
					</br>";
				
				}
				 */
				 
				$execReview = mysql_query($selcRev, $conn);
				
				if(mysql_num_rows($execReview) != 0 )
				{
					echo "<heading style='color: crimson;'> Last 3 reviews <heading>";
					
					while($rowRev = mysql_fetch_array($execReview))
					{
						// check if there is last review
						if( mysql_fetch_array($execReview) < 3 )
						{
							$seekerName = $rowRev["service_seeker"];
							$datest = $rowRev["date"];
							$text = $rowRev["review_text"];
						
							// 				view last 3 reviews
							
							// 					END HERE
						
							echo "</br>
							<div class='profile'>
							$seekerName ($datest) <hr id='hrprof' >
							$text
							</div>
							</br>";
						}
						
						
					}
				
				}else{
					echo "</br>
					<div class='profile'>
						No Reviews.
					</div>
					<br>
					</br>";
				}
				
				?>
				
			</section>
		
</div>
<?php
include("inc/footer.php")
?>