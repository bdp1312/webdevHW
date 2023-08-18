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
        echo"<tr>";
        echo"<td>$data[auto_id]</td>";
        echo"<td>$data[first_name]</td>";
        echo"<td>$data[last_name]</td>";
        echo"<td>$data[email]</td>";
        echo"<td>$data[phone]</td>";
        echo"<td>$data[comments]</td>";
        echo"</tr>";
    }

?>
