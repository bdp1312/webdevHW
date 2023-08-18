<h1>Benjamin's Homepage</h1>
<p><a href="index.html">Home</a></p>
<p><a href="Contact.html">Contact</a></p>
<p><a href="Studies.html">Studies</a></p>
<p><a href="Professional.html">Professional</a></p>
<p><a href="Hobbies.html">Hobbies</a></p>
<p><a href="Random.html">/b/</a></p>
<h3>Sites and Contact info</h3>
    <ul>
            <li><i>Email: </i><a href=mailto:benjamin.parrish@my.utsa.edu>benjamin.parrish@my.utsa.edu</a></li>
            <li><i>Phone: </i><a href="tel:5126934903">512 693 4903</a></li>
            <li><a href="https://github.com/bdp1312">My Github page</a></li>
    </ul>
        <p><img src="images/USS_Midway-Radar_Tower.jpg" alt="Profile picture" title="Radar Tower of the USS Midway" width="25%" height="25%"><br/>My profile picture</p>

<tr rowspan="3">
    <td colspan="6">

<?php
/*
if(!iset($)POST['submit']))
{
    echo '<form method="post" action="">';
    echo '<p>First name: ';
    echo '<input type="text"name="firstName"/>';
    echo '</p>';

    echo '<p>Last name: ';
    echo '<input type="text"name="lastName"/>';
    echo '</p>';
    
    echo '<p>Email: ';
    echo '<input type="text"name="email"/>';
    echo '</p>';

    echo '<p>Phone Number: ';
    echo '<input type="text"name="phoneNumber"/>';
    echo '</p>';

    echo '<p>Comments: ';
    echo '<input type="text"name="comments"/>';
    echo '</p>';
//writing form on paper can help inform database schema`

//submit button
    echo'<p> <button=type="submit">Submit</button>';
    echo '</form>';
}
if(isset($_POST['submit']))
{
    //addslashes method is used to escape reserved characters (add '\' )
    $firstName=addslashes($_POST['firstName']);
    $lastName=addslashes($_POST['lastName']);
    $email=addslashes($_POST['email']);
    $phoneNumber=addslashes($_POST['phoneNumber']);
    $comments=addslashes($_POST['comments']);
    echo"<h3>Data recevied:</h2>";
    echo"<p>First name: $firstName</p>";
    //etc
}
 */
// NGINX ERROR LOG FILE: /var/log/nginx/error.log
// NGINX ACCESS LOG FILE: /var/log/nginx/access.log
$username="webuser";
$password="password";
$host="localhost";
$db="contact_data";
//create new MYSQL connection
$dblink=new(mysqli($host,$username,$password,$db);
//connection
//db columns denoted by `, php variables denoted by '
$sql="Select * from `entries`";
$dblink->query($sql) or die("<p>Something went wrong with $sqlbr>".$dblink->error);
//MYSQLI_ASSOC->Column_name MYSQLI_NUM->Column_number MYSQLI_BOTH->Either
while(($data=$resutls->fetch_array(MYSQLI_ASSOC))
{
    echo"<p> $data[] $data[comments]'</p>";
}
//echo"<h2> Data entered into the dattabase</h3>";
//database connection parameters
//mysql both lets one acces via numeric or actual field name
/*
$username="webuser";
$password="password";
$host="localhost";
$db="contact_data";
//create new MYSQL connection
$dblink=new(mysqli($host,$username,$password,$db);
//connection
//db columns denoted by `, php variables denoted by '
$sql="Insert into `entries` (`first_name`, `last_name`,`email`,`phone`,`comments`) values('$firstName','$lastName','$email','$phone','$comments')";
$dblink->query($sql) or die("<p>Something went wrong with $sqlbr>".$dblink->error);
echo"<h2> Data entered into the dattabase</h3>";
 */
?>
