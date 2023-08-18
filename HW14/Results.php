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
                <div class="title"><h3>Contact Data</h3></div>
                <div class="table">
                    <table>  
                        <tr> 
                           <th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone #</th><th>Comments</th>
                        </tr>
                    <?php
                
                   //Database connection parameters
                    $username="webuser";
                    $password="BOk5i6KZI3Maati*";
                    $db="contact_data";                    
                    $host="localhost";
                    //create new msql connection
                    $dblink=new mysqli($host,$username,$password,$db);  
                    $sql="SELECT * FROM `entries`"; 
                    $results=$dblink->query($sql) or die("<p>Something went wrong with $sql<br>".$dblink->error);
                    while($data=$results->fetch_array(MYSQLI_ASSOC)){
                        echo"<tr><td>$data[auto_id]</td><td>$data[first_name]</td><td>$data[last_name]</td><td>$data[email]</td><td>$data[phone]</td><td>$data[comments]</td></tr>";
                    }

                ?>
                    </table>
                </div> 
            </div>  
        </div>
        <div class="col side"><br></div> 
    </div> 
</body>
</html>
