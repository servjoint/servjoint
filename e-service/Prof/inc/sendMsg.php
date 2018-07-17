<?php
	$u = $_POST["u"];
	$user = $_COOKIE["serv"];
	
	if($u == $user)
	{
		echo "<div class='msgDialog' align='center'>";
		echo "<pre><div class='msgText'><form action='inc/send.php' method='POST'>";
		echo "<textarea placeholder='Type Your Message Here To ServJoint' name='msg' id='Msg'></textArea>";
		echo "<input type='hidden' name='from' value='$u' />
		<input type='hidden' name='to' value='ServJoint' />
		<input type='submit' name='send' value='Send Message' id='btnSend'/>
		</form></div></pre>"; // add a message box for a reply.
		echo "</div>";
	}
	
	
?>