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
			
			if( strpos($name2,"@servjoint.com") )
			{
				$name3 = "ServJoint Co";
			}else{
				$name2 = $name2;
				$name3 = $name." ".$surname;
			}
			
			if($msgStatus == 1 & ( $name2 == $username || $msgTo == $username)) // check if message is private
			{
				
				echo "<div class='serv' align='center'>";
				echo "<pre><div class='msgText'>";
				echo "$name3 ($time)</br><hr><textArea id='MsgRec' readonly>$msg</textArea>";
				echo "</div></pre>"; // add a message box for a reply.
				echo "</div>";
			}
			else if($msgStatus == 0)
			{ // message is public
				echo "<div class='serv' align='center'>";
				echo "<pre><div class='msgText'>";
					echo "$name3 ($time)</br><hr><textArea id='MsgRec' readonly>$msg</textArea>";
				echo "</div></pre>"; // add a message box for a reply.
				echo "</div>";
			}else if($msgStatus == 0)
			{
				echo "<div class='serv' align='center'>";
				echo "No Messages Available";
				echo "</div>";
			}
		
		}// end of while loop statement
		
		
	}else{
		echo "<div class='serv' align='center'>";
		echo "No Messages Available";
		echo "</div>";
	} 
	
	
?>