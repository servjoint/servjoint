<body id="bg">
<div class="fixed-cont">
	<div class="page-header">
	
        <h1 id="header_name" > <font style=" color: red; font-style: italic; font-weight: bolder;
			font-family: Kunstler Script; "> <a href="dashboard.php" alt="home" style=" text-decoration: none; color: inherit;">ServJoint </a></font> <small class="smallText" >-we work everywhere</small> </h1> 
	
		</div>
		<div class="page-header-UserLogger">
		
		</div>
		<nav class="logged-user" id="logged-user">
			<text id="welcome"> Welcome:
			<?php
			echo $name." ".$surname;
			?> | <a href="logout.php" alt="Sign Out" class="logout"> log out </a>
			</text>
		</nav>
	<nav class="menu" id="menu" >
		<a href="manIndServPro.php" id="menu-cont"> Individual Service Providers </a>
		<a href="feednews.php" id="menu-cont"> Feed News </a>
		<a href="servCheck.php" id="menu-cont"> Service Activation </a>
		<a href="activate.php" id="menu-cont"> Account Activation </a>
		<a href="manAdmRights.php" id="menu-cont"> Administrative Rights </a>
	</nav>
	
	
	
</div>
