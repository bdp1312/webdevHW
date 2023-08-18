<html>
<body>
<p>Welcome!</p>
<!--<form action="results.php" method="get">-->

<?php
	if(!isset($_POST['submit']))
	{
		
		echo '<form action="" method="post">';
		echo '<div>First Name:
			<input type="text" name="firstName" id="firstName" class="firstName"/>
		</div>';
		echo '<div>Last Name:
			<input type="text" name="lastName" id="firstName"/>
		</div>';
		echo '<div>Email Address:
			<input type="text" name="email"/>
		</div>';
			echo '<button type="submit" name="submit" value="submit">Submit</button>';
		echo '</form>';
}
	if(isset($_POST['submit']))
	{
		$fname=$_POST['firstName'];
		$lname=$_POST['lastName'];
		$email=$_POST['email'];

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
