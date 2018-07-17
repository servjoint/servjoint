<div class="menu-items">
		<nav class="mini-menu">
				
				<?php
				
					if( basename($_SERVER['PHP_SELF']) == "index.php" )
					{
						echo '<strong> <a href="index.php" id="menu-items" class="active" > Home </a> </strong>&nbsp';
						echo '<strong> <a href="log.php" id="menu-items" > Login </a></strong>&nbsp';
				
					// echo '<!-- <strong> <a href="regservoffer.php" id="menu-items" > Sign Up </a></strong> &nbsp -->';
				
						echo '<strong> <a href="about_us.php" id="menu-items" > About us </a> </strong>&nbsp';
				
						echo '<strong> <a href="bsfunding.php" id="menu-items"> Business Support </a> </strong>'; 	
					// <!-- Fundings for small businesses that needs fundings. eg. NDTI, NYDA with maybe a default business plan -->
				
						
					}else if ( basename($_SERVER['PHP_SELF']) == "log.php" ) 
					{
						echo '<strong> <a href="index.php" id="menu-items" > Home </a> </strong>&nbsp';
						echo '<strong> <a href="log.php" id="menu-items" class="active"> Login </a></strong>&nbsp';
				
					// echo '<!-- <strong> <a href="regservoffer.php" id="menu-items" > Sign Up </a></strong> &nbsp -->';
				
						echo '<strong> <a href="about_us.php" id="menu-items" > About us </a> </strong>&nbsp';
				
						echo '<strong> <a href="bsfunding.php" id="menu-items"> Business Support </a> </strong>'; 	
					// <!-- Fundings for small businesses that needs fundings. eg. NDTI, NYDA with maybe a default business plan -->
				
					}else if( basename($_SERVER['PHP_SELF']) == "about_us.php" )
					{
						echo '<strong> <a href="index.php" id="menu-items" > Home </a> </strong>';
						echo '<strong> <a href="log.php" id="menu-items" > Login </a></strong>';
				
					// echo '<!-- <strong> <a href="regservoffer.php" id="menu-items" > Sign Up </a></strong> -->';
				
						echo '<strong> <a href="about_us.php" id="menu-items" class="active"> About us </a> </strong>';
				
						echo '<strong> <a href="bsfunding.php" id="menu-items"> Business Support </a> </strong>'; 	
					// <!-- Fundings for small businesses that needs fundings. eg. NDTI, NYDA with maybe a default business plan -->
				
				
					}else if ( basename($_SERVER['PHP_SELF']) == "regservoffer.php" ) 
					{
						echo '<strong> <a href="index.php" id="menu-items"> Home </a> </strong>&nbsp';
						echo '<strong> <a href="log.php" id="menu-items" > Login </a></strong>&nbsp';
				
					// echo '<!-- <strong> <a href="regservoffer.php" id="menu-items" class="active"> Sign Up </a></strong> &nbsp -->';
				
						echo '<strong> <a href="about_us.php" id="menu-items" > About us </a> </strong>&nbsp';
				
						echo '<strong> <a href="bsfunding.php" id="menu-items"> Business Support </a> </strong>'; 	
					// <!-- Fundings for small businesses that needs fundings. eg. NDTI, NYDA with maybe a default business plan -->
				
					}else if( basename($_SERVER['PHP_SELF']) == "bsfunding.php" ) 
					{
						
						echo '<strong> <a href="index.php" id="menu-items" > Home </a> </strong>';
						echo '<strong> <a href="log.php" id="menu-items" > Login </a></strong>';
				
					// echo '<!-- <strong> <a href="regservoffer.php" id="menu-items" > Sign Up </a></strong> -->';
				
						echo '<strong> <a href="about_us.php" id="menu-items" > About us </a> </strong>';
				
						echo '<strong> <a href="bsfunding.php" id="menu-items" class="active"> Business Support </a> </strong>'; 	
					// <!-- Fundings for small businesses that needs fundings. eg. NDTI, NYDA with maybe a default business plan -->
				
					}else{
						echo '<strong> <a href="index.php" id="menu-items" > Home </a> </strong>';
						echo '<strong> <a href="log.php" id="menu-items" > Login </a></strong>';
				
					// echo '<!-- <strong> <a href="regservoffer.php" id="menu-items" > Sign Up </a></strong> -->';
				
						echo '<strong> <a href="about_us.php" id="menu-items" > About us </a> </strong>';
				
						echo '<strong> <a href="bsfunding.php" id="menu-items" > Business Support </a> </strong>'; 	
					// <!-- Fundings for small businesses that needs fundings. eg. NDTI, NYDA with maybe a default business plan -->
				
					}
					
					
				?>
				<!--
					<strong> <a href="index.php" id="menu-items" class="active">Home</a> </strong>
					<strong> <a href="log.php" id="menu-items" class="active" >Login</a></strong>
				-->
					<!-- <strong> <a href="regservoffer.php" id="menu-items" class="active" > Sign Up </a></strong> &nbsp -->
				<!--
					<strong> <a href="about_us.php" id="menu-items" class="active" >About us</a> </strong>
				
					<strong> <a href="bsfunding.php" id="menu-items" class="active" >Business Support</a> </strong> 	
					<!-- Fundings for small businesses that needs fundings. eg. NDTI, NYDA with maybe a default business plan -->
				
				
				
		</nav>
</div>