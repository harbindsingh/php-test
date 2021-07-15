<?php

$con=mysqli_connect("shareddb-y.hosting.stackcp.net","emailverify-ad80","emailverify@");
if(!$con)
	echo "Not connected to server";

if(!mysqli_select_db($con,'email_OTP-313539265d')) 
	echo "Database not selected";
	
	?>
