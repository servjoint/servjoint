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
		require("inc/service_fetch.php");
	?>
</head>

<?php
 include("inc/servHeader.php");
?>

	
	
	<div class="main-activity">

			<section class="middle-section">
				<marquee><strong> Breaking News: Service Provider Registration Is Still Free </strong></marquee> 
				<br>
				</br>
				<h4>
				<?php
					/* 

					if( isset($_GET['p']) )
					{
						$iCount = $_GET["p"];
					} else {
						$iCount = 0;
					}
					
					if( isset($_GET["Page"]) && isset($_GET["p"] ) && $_GET["Page"] == "Prev" && $_GET["p"] == 10  )
					{
							$iCount = 0;
							
					}
					 */
					/* 
					if( isset($_GET["Page"]) && isset($_GET["p"] ) && $_GET["Page"] == "Prev" && $_GET["p"] == 20  )
					{
							$iCount = $iCount - 10;
							// echo "<script> location.reload() </script> ";
					} 
					 */
					// require("inc/servPage.php");
					
					
					
					// echo "</br> </br> <h4 class='numOf' style=' '>Number of services available: $iCount/".mysql_num_rows($ex)."</h4>";
					
				?>
				<script src="assets/js/jquery.min_2.js"></script>
				<script src="assets/bootstrap/js/bootstrap.min_2.js"></script>
				
				
				<div class="panel panel-default" >
				<div class="panel-heading">
						<h3 class="panel-title">Basic Services</h3>
				</div>
				
				<div class="panel-body">
				
				<div class="carousel slide" data-ride="carousel" data-interval="2000" id="carousel-1">
					<div class="carousel-inner" role="listbox">
					<div class="item active"><img src="img/serv/skills photo.jpg" alt="Slide Image"></div>
					<div class="item"><img src="img/serv/mechanic.png" alt="Slide Image"></div>
					<div class="item"><img src="img/serv/gardener.png" alt="Slide Image"></div>
					<div class="item"><img src="img/serv/grocery-hex.png" alt="Slide Image"></div>
					<div class="item"><img src="img/serv/ba_orig_3349479516_praca-ostatne-pracovne-ponuky-na-slovensku-upratovanie-v-ziline.jpg" alt="Slide Image"></div>
					<div class="item"><img src="img/serv/taxi.png" alt="Slide Image"></div>
					<div class="item"><img src="img/serv/interior-design.jpg" alt="Slide Image"></div>
					<div class="item"><img src="img/serv/commerical_cleaning.jpg" alt="Slide Image"></div>
					<div class="item"><img src="img/serv/deliver2.jpg" alt="Slide Image"></div>
					<div class="item"><img src="img/serv/electricityService.jpg" alt="Slide Image"></div>
					<div class="item"><img src="img/serv/tutor.jpg" alt="Slide Image"></div>
					<div class="item"><img src="img/serv/carpentry-icon-with-black-hammer-and-nails-on-white-background-with-text-carpenter.jpg" alt="Slide Image"></div>
					<div class="item"><img src="img/serv/set-icon-cleaning-figure-people-29080705.jpg" alt="Slide Image"></div>
					
					</div>
					<div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><img><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-1" role="button"
					data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a></div>
				
				
					<ol class="carousel-indicators">
						<li data-target="#carousel-1" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-1" data-slide-to="1"></li>
						<li data-target="#carousel-1" data-slide-to="2"></li>
						<li data-target="#carousel-1" data-slide-to="3"></li>
						<li data-target="#carousel-1" data-slide-to="4"></li>
						<li data-target="#carousel-1" data-slide-to="5"></li>
						<li data-target="#carousel-1" data-slide-to="6"></li>
						<li data-target="#carousel-1" data-slide-to="7"></li>
						<li data-target="#carousel-1" data-slide-to="8"></li>
						<li data-target="#carousel-1" data-slide-to="9"></li>
						<li data-target="#carousel-1" data-slide-to="10"></li>
						<li data-target="#carousel-1" data-slide-to="11"></li>
					</ol>
				
				</div>
				
				
				</div>
				</div>
				
				<div class="panel panel-default">
				<div class="panel-heading">
						<h3 class="panel-title">Find Service Provider By Province</h3>
				</div>
				<div class="panel-body" style=" text-align: center; ">
					
							<form action="./serv.php">
							<input type=hidden value="GP" name="Province" >
							<input type=submit value="Gauteng" name="" id="noB"/> 
							</form>
							</br>
							<form action="./serv.php">
							<input type=hidden value="LP" name="Province" > 
							<input type=submit value="Limpopo" name="" id="noB"/> 
							</form>
							</br>
								<form action="./serv.php">
								<input type=hidden value="FS" name="Province" > 
								<input type=submit value="Free State" name="" id="noB"/> 
							</form>
							
						</br>
						
						
							<form action="./serv.php">
							<input type=hidden value="NW" name="Province" > 
							<input type=submit value="North-West" name="" id="noB"/> 
							</form>
						
						
						<br>
						
							<form action="./serv.php">
							<input type=hidden value="MP" name="Province" > 
							<input type=submit value="Mpumalanga" name="" id="noB"/> 
							</form>
						
					</br>
					
					
							<form action="./serv.php">
					<input type=hidden value="EC" name="Province" > 
					<input type=submit value="Eastern Cape" name="" id="noB"/> 
				</form>
						
						
						</br>
					
						
							<form action="./serv.php">
					<input type=hidden value="KZN" name="Province" > 
					<input type=submit value="Kwazulu Natal" name="" id="noB"/> 
				</form>
						
						<br>
						
						
								<form action="./serv.php">
								<input type=hidden value="WC" name="Province" > 
								<input type=submit value="Western Cape" name="" id="noB"/> 
							</form>
						
						<br>
						
							<form action="./serv.php"  >
								<input type=hidden value="NC" name="Province" > 
								<input type=submit value="Northern Cape" name="" id="noB" /> 
							</form>
				
						
						</br>
						
					
					<!--
					<table>
						<tr>
							<th id="tblpadding" >
								<form action="./serv.php">
									<input type=hidden value="GP" name="Province" >
									<input type=submit value="Gauteng" name="" id="noB"/> 
								</form>
							</th>
							
							<th id="tblpadding">
								<form action="./serv.php" >
									<input type=hidden value="LP" name="Province" > 
									<input type=submit value="Limpopo" name="" id="noB"  /> 
								</form>
							</th>
							
							<th id="tblpadding">
								<form action="./serv.php">
									<input type=hidden value="FS" name="Province" > 
									<input type=submit value="Free State" name="" id="noB"/> 
								</form>
							</th>
							
						</tr>
					</table>
					-->
				</div>
				</div>
				
				
				</h4>
				</br>
			</section>
		

	</div>
	
</body>

<?php
require("inc/footer.php");

?>