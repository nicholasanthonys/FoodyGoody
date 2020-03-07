<?php
require('../Includes/configDB.php');
require('../includes/getUserID.php');

$newpass = $_POST['pwd'];
$newpassrepeat = $_POST['pwdRepeat'];

if ($newpass != $newpassrepeat) {
    echo " password tidak match ";
    header("location:editProfile.php?success=no");
} else {
    $newpass = md5($newpass);
    $sql = "UPDATE users SET Password = '$newpass' WHERE UserID ='$userID'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("location: ../notif.php?msg=passwordChanged");
    } else {
        header("location:editProfile.php?success=no");
    }
}
