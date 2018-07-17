<?php
ob_start();
?>
<html>
<h1> HELLO </h1>
<?php

	header('Location: http://www.google.com');

?>
</html>
<?php
ob_end_flush;
?>