<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'studentrecording');

$Sychro = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($Sychro == true){
    
}else {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


// Fetching data from the database and rendering the records on the browser
$sql = "select * from student";
$results = mysqli_query($Sychro, $sql);
$prints = mysqli_fetch_all($results, MYSQLI_ASSOC);

// Insert data into the database user input


?>