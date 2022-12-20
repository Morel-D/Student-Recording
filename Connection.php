<?php

// PHP Script and mysql Connection
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'studentrecording2');

$Sychro = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$Json = array();

if($Sychro == true){
    
}else {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



// Fetching data from the database and rendering the records on the browser
$sql = "select * from student2";
$results = mysqli_query($Sychro, $sql);
$prints = mysqli_fetch_all($results, MYSQLI_ASSOC);


// Insert data into the database user input
if(isset($_POST["save"])){
    $Name = mysqli_real_escape_string($Sychro, $_POST['name']);
    $Mat = mysqli_real_escape_string($Sychro, $_POST['matricule']);
    $Email = mysqli_real_escape_string($Sychro, $_POST['email']);
    $Program = mysqli_real_escape_string($Sychro,$_POST['program']);

    if(empty($Name) || empty($Mat) || empty($Email) || empty($Program)){
        $fill_error =  "Please Fill all the Informations Below";
    }else  {

    
    $sql_insert = "insert into student2 (id, name, matricule, email, program) values('$id', '$Name', '$Mat', '$Email', '$Program')";
    $results = mysqli_query($Sychro, $sql_insert);
    if($results) {
        header("location: Index.php");
        $fill_error =  "Cool";
    }else {
        echo "error bro".mysqli_error($Sychro);
    }
    
    }
   
    }



    // Delete section from a particular colum 
       if(isset($_POST['delete'])){
        $Delete = mysqli_real_escape_string($Sychro, $_POST['hidden_btn_delete']);
        $sql = "delete from student2 where id = '$Delete'";
        $querry = mysqli_query($Sychro, $sql);
        if($querry){
            header("Location: Index.php");
        }else {
            echo "ERROR ERROR !!!".mysqli_error($Sychro);
        }
        }


        
    // Search for a particular record
    if(isset($_POST["search"])){
        $Search =  mysqli_real_escape_string($Sychro, $_POST['search']);
        $sql = "select * from student2 where name like '$Search%'";
        $results = mysqli_query($Sychro, $sql); 
        $results = mysqli_fetch_all($results1);
    
    }



     // Count  The number of rows
    $sql_count = "select count(*) as total from student2";
    $querry_count = mysqli_query($Sychro, $sql_count);
    