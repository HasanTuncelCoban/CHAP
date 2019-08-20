<?php
/********************************************************************************************************************/
require_once('PHP/dbadapter.php');
require_once('PHP/variable.php');
require_once('PHP/Browser_Module.php');

?>


<?php
 session_start();
$A=$_SESSION['STATUS'];
echo $A;
#$TOTAL_USER=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM $user_info"));

?>

