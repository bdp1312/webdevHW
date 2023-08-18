<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <script src="assets/js/jquery-3.5.1.js"></script>
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
            <?php
                echo '<div class="article">';
                echo '<div class="title"><h3 align="center">Contact Form Data</h3></div>';
                echo '<div class="table">';
                echo '<table border="1" width="100%">';
                echo '<tr>';
                echo '<th>ID</th>';
                echo '<th>First Name</th>';
                echo '<th>Last Name</th>';
                echo '<th>Email</th>';
                echo '<th>Phone #</th>';
                echo '<th>Comments</th>';
                echo '</tr>';
                echo '<tbody id="results">';
                echo '</tbody>';
                echo '</table>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            ?>  
        </div>
        <div class="col side"><br></div> 
    </div> 
</body>
</html>
<script>
function refresh_div() {
    $.ajax({
        type:'post',
        url: 'https://ec2-52-15-127-4.us-east-2.compute.amazonaws.com/HW15/query.php',
        success: function(data){
            $('#results').html(data);
        }
    });
};
setInterval(function(){ refresh_div();}, 500);

</script>
