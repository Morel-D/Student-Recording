<?php
require_once("Connection.php");







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Style.css">
    <title>Student Recording System</title>
</head>
<body>
    <br>
    <label for="" style="font-size: 25px; color: gray;">CHRONOS</label>
    <div class="jumbotron" id="jumb">
        <label class="display-4 text-white">Student Recording System</label>
    </div>
<br>
 <center><label id="lab1">Student's Details</label></center> 
 <br><br>


    
<div class="flex-cont">
    <div class="empty"></div>

<form action="Index.php" method="post">
    
    <div class="form-group"> 
        <br>
      <label for="">Enter your Names</label>
      <input type="text" name="name" id="Fname" class="form-control" placeholder="Full Names" aria-describedby="helpId"><br>
   
        <label for="">Enter your Matricule</label>
        <input type="text" name="matricule" id="Mart" class="form-control" placeholder="ICTU...." aria-describedby="helpId"><br>   
      </div>
      
      <div class="form-group">
          <br>
        <label for="">Enter your Email</label>
        <input type="text" name="email" id="Email" class="form-control" placeholder="example@ictu.org" aria-describedby="helpId"><br>
  
        <label for="">Enter your Program</label>
        <input type="text" name="program" id="Prog" class="form-control" placeholder="SE" aria-describedby="helpId"><br><br>
        
      </div>
<button type="submit" name = "save" id="save" onclick = "save()">Save</button>

</form>


 </div>    




 <hr style="width: 1089px;">
<br>
<div class="" style="margin-left: 100px;">
    <input type="text" placeholder="Search">
    <button type="submit" id="search">Search</button>
</div>
<br>
<br>

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Student Name</th>
            <th>Matricule</th>
            <th>Email</th>
            <th>Program</th>
            <th>Action</th>
            <th></th>
        </tr>
    </thead>
    <tbody>




      <?php foreach($prints as $print) {  ?>
       <tr class="col">
            <td scope="row"><?php echo htmlspecialchars($print["id"]); ?></td>
            <td><?php echo htmlspecialchars($print['name']); ?></td>
            <td><?php echo htmlspecialchars($print['matricule']); ?></td>
            <td><?php echo htmlspecialchars($print['email']); ?></td>
            <td><?php echo htmlspecialchars($print['program']); ?></td>
            <td><button id="Delete" name = "delete">Delete</button></td>
            <td><button id="Edit">Edit</button></td>
        </tr>
    <?php  }  ?>   
  


    

    </tbody>
</table>
<br>
<ul class="pagination justify-content-end">
    <li class="page-item"><a class="page-link text-dark" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
    <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
    <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
    <li class="page-item"><a class="page-link text-dark" href="#">Next</a></li>
  </ul> 


  <script src="index.js"></script>

</body>
</html>