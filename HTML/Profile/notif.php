<?php 
require('../Includes/configDB.php');
require('../Includes/header.php');

$msg = $_GET['msg'];
if($msg=='updateusersuccess'){
	echo "Update profile success.";
}

echo "Click <a href=\"../Intro.php\">here</a> to continue.";


 ?>