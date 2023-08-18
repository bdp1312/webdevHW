<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link href="assets/css/style.css" rel="stylesheet"/>
</head>
<body>
    <div class="header"><h1>Benjamin's Homepage</h1>
        <div class="nav">
            <ul> 
                <li><a href="index.html">Home</a></li>
                <li><a href="Studies.html">Studies</a></li>
                <li><a href="Professional.html">Professional</a></li>
                <li><a href="Hobbies.html">Hobbies</a></li>
                <li><a href="Random.html">/b/</a></li>
                <li><a href="Contact.html">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="sidebar left"><img src="images/SideBanner.jpg"></div> 
    <div class="sidebar right"><img src="images/SideBanner.jpg"></div> 
    <div class="row"> 
        <div class="col side"><br></div> 
        <div class="col main">
            <div class="article"> 
                <div class="title"><h3>Sites and Contact info</h3></div>
                <ul>
                    <li><i>Email: </i><a href=mailto:benjamin.parrish@my.utsa.edu>benjamin.parrish@my.utsa.edu</a></li>
                    <li><i>Phone: </i><a href="tel:5126934903">512 693 4903</a></li>
                    <li><a href="https://github.com/bdp1312">My Github page</a></li>
                </ul>
                <p><img src="images/USS_Midway-Radar_Tower.jpg" alt="Profile picture" title="Radar Tower of the USS Midway" width="25%" height="25%"><br/>My profile picture</p>
            </div>  
            <div class="article">
                <?php
                if(!isset($_POST['submit']))
                {
                    echo '<div class="title"><h3>Contact Form</h3></div>'; 
                    echo '<form method="post" action="">';
                    echo '<p>First name: ';
                    echo '<input type="text" name="firstname"/>';
                    echo '</p>';
                    echo '<p>Last name: ';
                    echo '<input type="text" name="lastname"/>';
                    echo '</p>';    
                    echo '<p>Email: ';
                    echo '<input type="text" name="email"/>';
                    echo '</p>';    
                    echo '<p> Phone number: ';
                    echo '<input type="text" name="phone"/>';
                    echo '</p>';    
                    echo '<p> Comments: ';
                    echo '<input type="text" name="comments"/>';
                    echo '</p>';    
                    echo '<p><button type="submit" name="submit" value="submit">Submit</button';
                    echo '</form>';
                }   
                if (isset($_POST['submit']))
                {
                    $firstname=addslashes($_POST['firstname']);
                    $lastname=addslashes($_POST['lastname']);
                    $email=addslashes($_POST['email']);
                    $phone=addslashes($_POST['phone']);
                    $comments=addslashes($_POST['comments']);
                    echo '<div class="title"><h3> Data recevied:</h3></div>';
                    echo "<p>First name: $firstname";
                    echo "<p>Last name: $lastname";
                    echo "<p>Phone Number: $phone";
                    echo "<p>Email: $email";
                    echo "<p>Comments: $comments</p>";
                    //Database connection parameters
                    $username="webuser";
                    $password="BOk5i6KZI3Maati*";
                    $db="contact_data";                    
                    $host="localhost";
                    //create new msql connection
                    $dblink=new mysqli($host,$username,$password,$db);  
                    $sql="INSERT INTO `entries` 
                    (`first_name`, `last_name`, `email`, `phone`, `comments`) values 
                    ('$firstname','$lastname','$email','$phone','$comments')";
                    $dblink->query($sql) or die("<p>Something went wrong with $sql<br>".$dblink->error);
                    echo "<h3>Data entered successfully!</h3>";     
                }
                ?>
            </div>  
        </div>
        <div class="col side"><br></div> 
    </div> 
</body>
</html>
