<html>
<body>
<p>Welcome!</p>
<!--<form action="results.php" method="get">-->

<?php
	if(!isset($_POST['submit']))
	{
		
		echo '<form action="" method="post">';
		if (isset($_GET['fname']))
			echo '<p>ERROR: FIRST NAME CANNOT BE BLANK!</p>';
		echo '<div>First Name:';
		echo '<input type="text" name="firstName" id="firstName" class="firstName"/>';
		echo '</div>';
		echo '<div>Last Name:';
		echo '<input type="text" name="lastName" id="firstName"/>';
		echo '</div>';
		echo '<div>Email Address:';
		echo '<input type="text" name="email"/>';
		echo '</div>';
		echo '<button type="submit" name="submit" value="submit">Submit</button>';
		echo '</form>';
}
	if(isset($_POST['submit']))
	{
		if (($fname=$fname=$_REQUEST['firstName'])=="")
		{
			header('Location: https://ec2-52-15-127-4.us-east-2.compute.amazonaws.com/HW10/request.php?fname=err');
		}
		$lname=$_REQUEST['lastName'];
		$email=$_REQUEST['email'];

		echo '<h3> Data Received from Index.php</h3>';
		echo '<p>First Name:'.$fname.'</p>';
		echo '<p>Last Name:'.$lname.'</p>';
		echo '<p>Email:'.$email.'</p>';
	}
	else{
		echo '<h3> DATA NOT FOUND</h3';
	}
?>
</body>
</html>
