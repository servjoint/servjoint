<?php
	
					/* 
					while( $row = mysql_fetch_array($ex,1) )
					{
						echo "<form action='./services/services.php' method='GET'>";
						echo "<input type='submit' name='k' id='btnSub' value='" . $row["Serv_Name"]. "'/> \t(".$row["Curr_of_User"].")</br>";
						echo "</form>";
						$iCount++;
					}
					 */
					
					$stat10 = "Select * from Service Limit $iCount,10";
					
					
					if($iCount < 10)
					{
						
						
						$stat = mysql_query($stat10, $conn );
						
						while( $row = mysql_fetch_array($stat) )
						{
							echo "<form action='./services/services.php' method='GET'>";
							echo "<input type='submit' name='k' id='btnSub' value='" . $row["Serv_Name"]. "'/> \t(".$row["Curr_of_User"].")</br>";
							echo "</form>";
							$iCount++;
						}
						
						
					}
					
					
					if( $_GET["Page"] == "Next" && $iCount >= 10 && $iCount < 20 && $_GET["p"] > 9 )
					{
							
							$stat = mysql_query($stat10, $conn );
						
							while( $row = mysql_fetch_array($stat) )
							{
								echo "<form action='./services/services.php' method='POST' >";
								echo "<input type='submit' name='k' id='btnSub' value='" . $row["Serv_Name"]. "'/> \t(".$row["Curr_of_User"].")</br>";
								echo "</form>";
								$iCount++;
							}
							
					}
					
					if( $_GET["Page"] == "Prev" && $iCount >= 10 && $iCount < 20 && $_GET["p"] > 9 )
					{
							
							$stat = mysql_query($stat10, $conn );
						
							while( $row = mysql_fetch_array($stat) )
							{
								echo "<form action='./services/services.php' method='POST' >";
								echo "<input type='submit' name='k' id='btnSub' value='" . $row["Serv_Name"]. "'/> \t(".$row["Curr_of_User"].")</br>";
								echo "</form>";
								$iCount++;
							}
							
					}
					
					if( $_GET["Page"] == "Next" && $iCount == 20 && $iCount < 30 && $_GET["p"] > 19 )
					{
						
						
							
							$stat = mysql_query($stat10, $conn );
						
							while( $row = mysql_fetch_array($stat) )
							{
								echo "<form action='./services/services.php' method='POST'>";
								echo "<input type='submit' name='k' id='btnSub' value='" . $row["Serv_Name"]. "'/> \t(".$row["Curr_of_User"].")</br>";
								echo "</form>";
								$iCount++;
								
							}
							
							$numbRow = mysql_num_rows($stat);
							
					}
					
					if( $_GET["Page"] == "Prev" && $iCount == 20 && $iCount < 30 && $_GET["p"] > 19 )
					{
						$stat = mysql_query($stat10, $conn );
						
							while( $row = mysql_fetch_array($stat) )
							{
								echo "<form action='./services/services.php' method='POST'>";
								echo "<input type='submit' name='k' id='btnSub' value='" . $row["Serv_Name"]. "'/> \t(".$row["Curr_of_User"].")</br>";
								echo "</form>";
								$iCount++;
								
							}
					}
					 
					 // Code a prev button to work correctly
					 // code the last index of the fetched rows that when it reaches the end, the next button disappears
					 
					 
					if( $_GET["Page"] == "Next" && $_GET["p"] >= 10 && $_GET["p"] <20 )
					{
						
						
						echo "</br> <form method='GET' >";
					?> 
						<button value='Prev' id='btnPrev' name='Page' onclick="this.form.action='index.php' " > Prev </button>
						<input type='submit' value='Next' name='Page' id='btnNext' onclick="this.form.action='index.php'" />
					<?php
						
						
						echo "<input type='hidden' name='p' value='$iCount' />";
						echo "</form>";
						
						
					}
					
					 /* 
					 if( $_GET["Page"] == "Prev" && $_GET["p"] >= 10 && $_GET["p"] <20 )
					{
						
						
						echo "</br> <form method='GET' >";
					?> 
						<button value='Prev' id='btnPrev' name='Page' onclick="this.form.action='index.php' " > Prev </button>
						<input type='submit' value='Next' name='Page' id='btnNext' onclick="this.form.action='index.php'" />
					<?php
						
						echo "<input type='hidden' name='p' value='$iCount' />";
						echo "</form>";
						
						
					}
					  */
					  
					  if( $_GET["Page"] == "Next" && $_GET["p"] >= 20 ) 
					{
							echo "</br> <form method='GET' >";
					?> 
						<button value='Prev' id='btnPrev' name='Page' onclick="this.form.action='index.php' " > Prev </button>
					<?php
						
						echo "<input type='hidden' name='p' value='$iCount' />";
						echo "</form>";
						
					}
					
					 if( $_GET["Page"] == "Next" && $_GET["p"] == 0 ) 
					{
							echo "</br> <form method='GET' >";
					?> 
						<button value='Next' id='btnNext' name='Page' onclick="this.form.action='index.php' " > Next </button>
					<?php
						
						echo "<input type='hidden' name='p' value='$iCount' />";
						echo "</form>";
						
					}
					
					if( $_GET["Page"] == "Prev" && $_GET["p"] <= 10 ) 
					{
						
							echo "</br> <form method='GET' >";
							
					?> 
						<button value='Prev' id='btnPrev' name='Page' onclick="this.form.action='index.php' " > Prev </button>
						<input type='submit' value='Next' name='Page' id='btnNext' onclick="this.form.action='index.php'" />
					<?php
						echo "<input type='hidden' name='p' value='0' />";
						echo "</form>";
						
					}
					/* 	else if( $_GET["Page"] == "Prev" && $_GET["p"] <= 20 ) 
					{
							echo "</br> <form method='GET' >";
							
					?> 
						<button value='Prev' id='btnPrev' name='Page' onclick="this.form.action='index.php' " > Prev </button>
						<input type='submit' value='Next' name='Page' id='btnNext' onclick="this.form.action='index.php'" />
					<?php
					
						echo "<input type='hidden' name='p' value='10' />";
						
						echo "</form>";
						
					} */
					
					 if( $_GET["Page"] == "Prev" && $_GET["p"] >= 20 ) 
					{
							echo "</br> <form method='GET' >";
					?> 
						<button value='Prev' id='btnPrev' name='Page' onclick="this.form.action='index.php' " > Prev </button>
					<?php
						
						echo "<input type='hidden' name='p' value='10' />";
						echo "</form>";
						
					}
					
					 if( $_GET["Page"] == "Prev" && $_GET["p"] <= 20 ) 
					{
							echo "</br> <form method='GET' >";
					?> 
						<button value='Prev' id='btnPrev' name='Page' onclick="this.form.action='index.php' " > Prev </button>
					<?php
						
						echo "<input type='hidden' name='p' value='10' />";
						echo "</form>";
						
					}
					
					if( !isset($_GET["Page"]) && !isset($_GET["p"]) )
					{
						echo "</br> <form method='GET' >";
					?> 
						<input type='submit' value='Next' name='Page' id='btnNext' onclick="this.form.action='index.php'" />
					<?php
						echo "<input type='hidden' name='p' value='$iCount' />";
						echo "</form>";
						
					}
					
					
					 


?>