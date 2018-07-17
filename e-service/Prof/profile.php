<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Services, Register Service">
	<meta name="keyword" content="Login Service">
	<meta name="keyword" content="Service">
	<meta name="keyword" content="Lookup a Service">
	
    <title>Profile</title>
    
    <link rel="stylesheet" href="./css/cust.css">
	
	<link rel="icon" href="./img/logo.jpg" type="image/x-icon" />
	<link rel="shortcut icon" href="./img/logo.jpg" type="image/x-icon" />
	
</head>
<?php
	require("inc/header.php");
	
	$cont = $row["Contact_Details"];
	$altcont = $row["Alternative_Contacts"];
	$servid = $row["ID_Number"];
	$email = $row["E_Mail"];
	$city = $row["City"];
	$prov = $row["Province"];
	$address = $row["Address"];
	
	if($row["pp"] == NULL)
	{
		$pp = "img/avatar.png";
	}else{
		$pp = $row["pp"];
	}
	
	if($row["Province"] == "GP")
	{
		$prov = "Gauteng";
	}else if($row["Province"] == "FS"){
		$prov = "Free State";
	}else if($row["Province"] == "MP"){
		$prov = "Mpumalanga";
	}else if($row["Province"] == "NW" ){
		$prov = "North West Province";
	}else if($row["Province"] == "EC"){
		$prov = "Eastern Cape";
	}else if($row["Province"] == "WC" ){
		$prov = "Western Cape";
	}else if($row["Province"] == "NC"){
		$prov = "Northern Cape";
	}else if($row["Province"] == "LP" ){
		$prov = "Limpopo";
	}else if($row["Province"] == "KZN" ){
		$prov = "Kwazulu-Natal";
	}
	
	
?>

<div class="serv">
	<div class="profile">
		<div class="profile-card">
			<br>
			<?php echo '<img src="data:image/jpeg;base64,'.
							base64_encode( $pp ).'" height="130px" width="120px" id="pp" class="pphover" /> </br> <a href="changeProfile.php?picture=125" id="link">change profile picture</a>  ';
			?>
			<!-- <img src="<?php echo $pp; ?>" id="pp" title="<?php echo $name." ".$surname; ?>" alt="<?php echo $name." ".$surname; ?>" />
				<?php echo $name." ".$surname; ?> --> 
				
			</br>
			<hr id="hrpp"/>
			<div class="info">
				Contact Details Information
			</div>
			<input type="email" id="txtInfo" title="Email" placeholder="Enter House and Street Name" value="<?php echo $email;?>" />
			<input type="text" id="txtInfo" title="Cellphone" placeholder="Enter Cellphone" value="<?php echo $cont;?>"/>
			<input type="text" id="txtInfo" title="Alternative Numbers" placeholder="Enter Alternative Numbers" value="<?php echo $altcont;?>"/>
			<hr id="hrpp" >
			
			<div class="info">
				Resident Information
			</div>
			<H3> &nbsp &nbsp Address Line 1 </H3>
			<input type="text" id="txtInfo" title="House Nr and Street Name" placeholder="Enter House and Street Name" value="<?php echo $address;?>" />
			<input type="text" id="txtInfo" title="City" placeholder="Enter City" value="<?php echo $city;?>"/>
			<input type="text" id="txtInfo" title="Province" placeholder="Enter Province" value="<?php echo $prov;?>"/>
			
			<H3> &nbsp &nbsp Address Line 2 </H3>
			<input type="text" id="txtInfo" title="House Nr and Street Name" placeholder="Enter House and Street Name" value="<?php echo $address;?>" />
			<input type="text" id="txtInfo" title="City" placeholder="Enter City" value="<?php echo $city;?>"/>
			<input type="text" id="txtInfo" title="Province" placeholder="Enter Province" value="<?php echo $prov;?>"/>
			
			
			<hr id="hrpp">
			
			<div class="info">
				Services Information
			</div>
			<?php
			
				$selcall = "SELECT * from serv_indvi_offer WHERE Serv_Provider ='$servid' ";
				$que = mysql_query($selcall,$conn);
				
				while($serow = mysql_fetch_assoc($que))
				{
					$servIDs = $serow["Service_ID"];
					
					$selcServ = "SELECT * FROM service WHERE Serv_ID='$servIDs' ";
					$queRow = mysql_query($selcServ, $conn);
					
					$servRows = mysql_fetch_assoc($queRow);
						
					$serName = $servRows["Serv_Name"];
						
					echo "<input type='text' readonly id='txtInfo' value='$serName' ></br>";
					
				}
				
			
			?>
		<br>	
		</br>	
		</div>
		
	</div>

</div>

</body>
<footer>

</footer>
</html>