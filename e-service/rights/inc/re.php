<?php

	$msgID = $_POST["msgID"];

	$selectMsg = "SELECT * FROM message WHERE Msg_ID='$msgID'";
	
	$queryMsg = mysql_query( $selectMsg , $conn);
	
	if($queryMsg)
	{
		$rowMsg = mysql_fetch_array($queryMsg);
		$name2 = $rowMsg["MsgFrom"];
			
			if( strpos($name2,"@servjoint.com") ) // if name has @servjoint.com
			{
				$name3 = "ServJoint Co";
				$name2 = $name2;
			}else{ // if name is from another user account
				$name2 = $name2;
				$name3 = $name." ".$surname;
			}
			
		require("inc/respUser.php");
		
		$msgID_ = $rowMsg["Msg_ID"];
		$msgStatus = $rowMsg["Status"];
		$msgTo = $rowMsg["MsgTo"];
		$time = $rowMsg["date"];
		$msg = $rowMsg["Message"];
		
		echo "<div class='serv' align='center'>";
		echo "<pre><div class='msgText'>";
		echo "<font color='teal'>$user1name $user2name($time) To: $msgTo</font></br>
		<hr><textArea id='MsgRec' readonly>$msg</textArea>
		<hr><form action='replymessage.php' method='POST'>
		</br><textArea id='MsgRec' placeholder='Write a reply message...' name='reply'></textArea></br>
		<hr></br><input type='hidden' name='msgID_Num' value='&msgID_'/>
		<input type='hidden' name='msgName' value='$name2' />
		<input type='submit' value='Send Reply' />
		</form>";
		echo "</div></pre>";
		echo "</div>";

	}else{
		echo "<div class='serv' align='center'>";
		echo "<pre><div class='msgText'>";
		echo "<font color='teal'>$user1name $user2name($time) To: $msgTo</font></br><hr><textArea id='MsgRec' readonly>UNABLE TO CONNECT</textArea><hr>";
		echo "</div></pre>";
		echo "</div>";

	}
	
		
	
	
	
?>