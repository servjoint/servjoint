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
	<meta name="keywords" content="Services">
	
    <title>ServJoint</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	<link rel="icon" href="./img/logo.jpg" type="image/x-icon" />
	<link rel="shortcut icon" href="./img/logo.jpg" type="image/x-icon" />
	
</head>
<?php
 include("inc/servHeader.php");
?>


	<section>
	
			<section class="middle-section"  >
				<marquee><strong> Breaking News: Service Provider Registration Is Still Free </strong></marquee> 
				</br>
				</br>
				
				<h4>
				<div class="panel panel-default">
				<div class="panel-heading">
						<h3 class="panel-title">Find service</h3>
						
				</div>
				<br>
				<?php
				/**
					$get = $_GET["Province"];
					$servPro ="SELECT * FROM service_provider WHERE Province='$get' and City IS NOT NULL";
					$exNow = mysql_query($servPro,$conn);
					
					if(mysql_num_rows($exNow) <= 0 )
					{
						echo "No Services Registered For The Province.";
					}else{
						$servCity ="SELECT DISTINCT City FROM service_provider where Province='$get' ";
						$exCity = mysql_query($servCity,$conn);
						
						$i = 0;
						while($rowCity = mysql_fetch_array($exCity) )
						{
							
							if($i%4==2)
							{
								echo "<tr>".PHP_EOL;
							}
							echo "<th id='tblCity' ><form action='./services.php'><input type='hidden' name='Province' value='$get' /> <input type='submit' name='City' id='noBk' value='".$rowCity["City"]."'/> </form></th>".PHP_EOL;
							
							if($i%4==2)
							{
								echo "</tr>".PHP_EOL;
							}
							$i++;
						}
						
					}
					**/
					
					// new outline
					$provc = $_GET['Province'];
					
					
					// Echo "<h4 id='headerSearch' >Search By Area</h4>";
					echo "<form action='services.php' method='GET'> 
					&nbsp&nbsp
					<input type='text' id='txtSearch' placeholder='Service' name='service' /> &nbsp&nbsp
					<input type='text' id='txtSearch' placeholder='Location' name='city' />
					<input type='hidden' id='txtSearch' value='$provc' name='provice' />
					</br>
					<input type='submit' name='search' value='search' id='btnSearch' /></form></br>";
				?>
				</br>
				</div>
				
				</h4>
				
				<br></br>
			</section>
			
	</section>
</body>

<?php

require("inc/footer.php");

?>
	