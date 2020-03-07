<link rel="stylesheet" type="Text/css" href="../../css/changepassword.css" />
<?php
require('../Includes/configDB.php');
require('../Includes/getUserID.php');
require('../includes/header.php');

echo "<div class ='wrapper'>";
echo '<form method="post" action="changePasswordScript.php">';
echo '<input type = hidden name = "id" value =' . $userID . ">";
?>


New Password<BR> <input type="password" name="pwd" placeholder="Password"><br>
Confirm Password<BR> <input type="password" name="pwdRepeat" placeholder="Confirm Password"><br>
<input type="Submit" value="change password">
</form>
</div>