<?php
include 'connect.php' ; ?>
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $dept1=$_POST["dept"];
    $Address=$_POST["add"];
    $Contactno=$_POST["cno"];
    $IDno=$_POST["idno"];
    $sql= "insert into 'employee'(name, address, email, Cno, Id_no) values('$name','$Address', '$dept1', '$Contactno', '$IDno')";
   $result =mysqli_query($conn, $sql);
   if($result)
   {
       header('location:display.php')
   }
   else{
       
    die (mysqli_error($conn));
   }
} 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Operations</title>
  </head>
  <body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
              <label>Name</label>
              <input type="text" class="form-control" placeholder="Enter  Name" name="name" autocomplete="off"> 

            </div>
            <div class="mb-3">
                <label>ID No</label>
                <input type="text" class="form-control" placeholder="Enter Aadhar Number" name="id" autocomplete="off"> 
                
              </div><div class="mb-3">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Enter Address" name="add" > 
                
              </div><div class="mb-3">
                <label>Contact No</label>
                <input type="text" class="form-control" placeholder="Mobile Number" name="cno" autocomplete="off">  

                
              </div>
        <div class="mb-3">
              <label>Department</label>
              <input type="text" class="form-control" placeholder="Enter Department" name="dept" autocomplete="off"> 
              
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </form>
        </div>
  </body>
</html>