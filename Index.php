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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
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
      <input type="text" name="name" id="Fname" class="form-control" placeholder="Full Names" aria-describedby="helpId" ><br>
   
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
<button type="submit" name = "save" id="save" value = "sumbit">Save</button>



</form>


 </div>    




 <hr style="width: 1089px;">
<br>
<form action="Index.php" method="post">
<div class="" style="margin-left: 100px;">
    <input type="text" name = "search" placeholder="Search">
    <button type="submit" name ="Go" value = "<?php echo $Search?>" id="search">Search</button>
    <!-- <button type="submit" id="clear">Clear All</button> -->
</form>    
</div>
<br>
<br>


   


<table class="table">
<thead>
<tbody style = "background-color: black; color: white">
        <tr>
            <td><b>Total Colum</b> </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

            <?php  while ($Counts = mysqli_fetch_assoc($querry_count)) { ?>

            <td><?php echo $Counts['total']; ?></td>

            <?php  }  ?>
        </tr>

    </tbody>

    
        <tr>
            <th>No</th>
            <th>Student Name</th>
            <th>Matricule</th>
            <th>Email</th>
            <th>Program</th>
            <th>Action</th>
        </tr>
    </thead>


    <tbody>

      <?php foreach($prints as $print) {  ?>
       <tr class="col_table">
            <td scope="row"><?php echo$print['id']; ?></td>
            <td><?php echo $print['name']; ?></td>
            <td><?php echo $print['matricule']; ?></td>
            <td><?php echo $print['email']; ?></td>
            <td><?php echo $print['program']; ?></td>
            <td>
                <!-- ::::::::::::::::::::::::::::::::::::::: -->
                <!-- Button Delete modal -->
                 <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#modelId" id= "delete_btn">
                 <i class="fas fa-trash" id= "delete_icon"></i>
                 </button>
                 
                 <!-- Modal -->
                 <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                         <div class="modal-content">
                             <div class="modal-header">
                                <center>  <h4 class="modal-title">Are You Sure ?</h4></center>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                     </button>
                             </div>
                             <div class="modal-body">
                                <label for="" style = "color: grey"> Do you really want to delete these records ? This process cannot be undone.</label>
                             </div>
                             <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                 <form action="Index.php" method="post">
                                <input type="hidden" name = "hidden_btn_delete" value="<?php echo $print['id']; ?>">
                                <input type="submit" name = "delete" value="delete" class ="btn btn-danger">
                               </form>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- :::::::::::::::::::::::::::::: -->

                 <!-- ::::::::::::::::::::::::::::::::::::::: -->
                 <!-- Button View modal -->
                 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modelId2">
                 <i class="fas fa-eye"></i>
                 </button>
                 
                 <!-- Modal -->
                 <div class="modal fade" id="modelId2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title">Student View</h5>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                     </button>
                             </div>
                             <div class="modal-body">
                                 <ul>
                                 <li><?php echo "<b>Name : </b>".$print['name']; ?></li>
                                 <li><?php echo "<b>Student Matricule : </b>".$print['matricule']; ?></li>
                                 <li><?php echo "<b>Student School Email : </b>".$print['email']; ?></li>
                                 <li><?php echo "<b>Student Program : </b>".$print['program']; ?></li>
                                 </ul>
                             </div>
                             <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 <button type="button" class="btn btn-danger">Delete</button>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- ::::::::::::::::::::::::::::::::::::::: -->

                 <button class = "btn btn-info" id="Edit"><i class="fas fa-pen"></i></button>
            </td>
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
