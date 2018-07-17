<?php
	require("dash.php");
?>
<!-- start of main activity -->
	<div class = "main-activity">
		<div class= "services">
			<div align="center" >
				<font color="orangered" size="24px"> Service Report </font> 
			</div>
		<?php
			error_reporting(false);
			require("active.php");
			
		?>
		</br>
		<text id="prof" > <?php echo "Overall Profit: R".$prof; ?> </text>
		
		</br>
		</div>
		
		
	</div>