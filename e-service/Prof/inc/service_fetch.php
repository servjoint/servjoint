<?php
	$statement = "Select * From service";
	
	$ex = mysql_query($statement, $conn);
	
	if( !$ex )
	{
		echo "<script> alert('".mysql_error()."') </script>";
		echo "<script> window.location='/dashboard.php'</script>";
	}else{
		
		echo "<div class='serv'></br>";
		echo "<div class='servAdd'><form action='inc/addServ.php' method='GET'> Provide Another Service: <select name='s'>";
		
		while($row = mysql_fetch_array($ex))
		{
			$id = $row["Serv_ID"];
			$name = $row["Serv_Name"];
			echo  "<option value='$id' name='s'>$name</option>";
		}
		 echo "</select> <input type='hidden' name='u' value='$username'/><input type='submit' id='btnSub' name='k' value='submit' /> </form> 
				</br> <a href='newService.php' id='link'>Recomand a new Service </a>
		 </div> </div>";
		
	}
	
	
	

?>