<?php
$fname=$_GET['firstName'];
$lname=$_GET['lastName'];
$email=$_GET['email'];
if(isset($_GET['submit']))
{
echo '<h3> Data Received from Index.php</h3>';
echo '<p>First Name:'.$fname.'</p>';
echo '<p>Last Name:'.$lName.'</p>';
echo '<p>Email:'.$email.'</p>';
}
else{
	echo '<h3> DATA NOT FOUND</h3';
}
?>
