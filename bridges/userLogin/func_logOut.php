<?php
//echo md5('abhipassword');
require_once("../../config.php");
require_once("../../process/userMgt.php");

	$objLoginUser = new userLoginProcessor();
	$objLoginUser->logOutUser($arrDBTaskManagement);

?>