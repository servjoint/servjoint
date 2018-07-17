<?php
	
	$selectMsg = "SELECT * FROM message ORDER BY date DESC";
	$queryMsg = mysql_query( $selectMsg , $conn);
	
	if(mysql_num_rows($queryMsg) > 0 )
	{
		while($rowMsg = mysql_fetch_array($queryMsg))
		{
			$msgID = $rowMsg["Msg_ID"];
			$msgStatus = $rowMsg["Status"];
			$msgTo = $rowMsg["MsgTo"];
			$time = $rowMsg["date"];
			$msg = $rowMsg["Message"];
			
			$name2 = $rowMsg["MsgFrom"];
			
			if( strpos($name2,"@servjoint.com") ) // if name has @servjoint.com
			{
				$name3 = "ServJoint Co";
				$name2 = $name2;
			}else{ // if name is from another user account
				$name2 = $name2;
				$name3 = $name." ".$surname;
			}
			
			// end of if statement
			
			if($name3 == "ServJoint Co" )
			{
				echo "<div class='serv' align='center'>";
				echo "<pre><div class='msgText'>";
					echo "<font color='teal'>$name2 ($time) To: $msgTo</font></br><hr><textArea id='MsgRec' readonly>$msg</textArea><hr>";
				echo "</div></pre>";
				echo "</div>";
			}else
			{
				echo "<div class='serv' align='center'>";
				echo "<form action='respond.php' Method='POST'><pre><div class='msgText'>";
					echo "<font color='cryan'>$name2 ($time) To: $msgTo</font></br><hr><textArea id='MsgRec' readonly>$msg</textArea></br>
					<input type='hidden' name='msgID' value='$msgID' />
					<input type='submit' name='btnRespond' id='btnSend' value='Respond' /><hr>";
				echo "</div></pre></form>";
				echo "</div>";
			}
		
		}// end of while loop statement
		
		
	}else{
		echo "<div class='serv' align='center'>";
		echo "No Messages Available";
		echo "</div>";
	}



?>