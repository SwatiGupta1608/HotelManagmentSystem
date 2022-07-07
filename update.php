<?php
include 'connect.php';
$id=$_GET["updateid"];
$sql="select * from 'employees'";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$Address=$row['add'];
$dept1=$row['dept'];
$Contactno=$row['cno'];
$IDNo=$row[''];
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $dept1=$_POST["dept"];
    $Address=$_POST["add"];
    $Contactno=$_POST["cno"];
    $ID_NO1=$_POST["ID_no"];
    $IDno=$_POST["id"];
    $sql= "update 'employees' set id=$id, name='$name', address='$Address', dept='$dept1', Contact='$Contactno' ,
     Id_no="$ID_NO1", sno='$IDno' where id=$id";
   $result =mysqli_query($conn, $sql);
   if($result){
       header('location:display.php')
   }
   else{
       
    die (mysqli_error($conn));
   }
} ?>
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
              <input type="text" class="form-control" placeholder="Enter  Name" name="name" autocomplete="off" value=<?php echo $name ?>> 

            </div>
            <div class="mb-3">
                <label>ID No</label>
                <input type="text" class="form-control" placeholder="Enter Aadhar Number" name="id" autocomplete="off" value=<?php echo $ID_NO1 ?>> 
                
              </div><div class="mb-3">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Enter Address" name="add" value=<?php echo $Address;?> > 
                
              </div><div class="mb-3">
                <label>Contact No</label>
                <input type="text" class="form-control" placeholder="Mobile Number" name="cno" autocomplete="off" value=<?php echo $Contactno ?>>  

                
              </div>
        <div class="mb-3">
              <label>Department</label>
              <input type="text" class="form-control" placeholder="Enter Department" name="dept" autocomplete="off"> 
              
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
          </form>
        </div>
  </body>
</html>