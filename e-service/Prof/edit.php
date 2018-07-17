<?php
	require("inc/start.php");
	error_reporting(false);
	require("inc/header.php");
	
	$idNumber = $_POST["edit"];
	$servName = $_POST["serv"];

	$selecAll = "SELECT * FROM serv_indvi_offer where Serv_Off_ID='$idNumber'";
	$querSelc = mysql_query( $selecAll , $conn);
	
	if($querSelc)
	{
		$rowServ = mysql_fetch_array($querSelc);
		
		if($rowServ["Serv_Activation"] == 1 )
			{
				$act = "Activated";
			}else{
				$act = "Deactivated";
			}
		
		$dervDesc = $rowServ["Serv_Prov_Serv_Descr"];
		echo "<div class='serv'></br>";
		echo "<div class='servText'><form> Service Offered: ".$servName;
		echo "</br> My Service Description: </br> <textArea id='txtDesc' name='servDesc' >$dervDesc</textArea>";
		echo "</br> Service Status: ";?> <select name='act'> <option name='act' value='1'>Activate</option><option name='act' value='0'>Deactivate</option> </select>
		<?php echo "</br> Default Service Description: ". $rowServ["Serv_Desc"] ;?> </br><button id='btnEdit' onclick="this.form.action='inc/updateDesc.php' " >Click To Update Description</button> 
		<input type='hidden' value="<?php echo $idNumber ?>" name='update'> 
		</form>
		<?php
		
	}else{
		
	}
	
?>