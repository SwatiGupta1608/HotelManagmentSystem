<?php
include 'connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add Employees</a>
        
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">ID_no</th>
      <th scope="col">Department</th>
      <th scope="col">Contact_no</th>
      <th scope="col">Operations</th>
    </tr>
    
  </thead>
  <tbody>
<?php
$sql="Select * from 'employees'";
$result=mysqli_query($conn, $sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
  $sno=$row['sno'];
  $name=$row['name'];
  $address=$row['add'];
  $Contactno=$row['cno'];
  $department=$row['dept'];
  $ID_No=$row['Id_no'];
  echo ' <tr>
  <th scope="row">'.$sno.'</th>
  <td>'.$name.'</td>
  <td> '.$address.'</td>
  <td>'.$Contactno.'</td>
  <td>'.$deptartment.'</td>
  <td> '.$ID_no.'</td>
  <td>
  <button class="btn btn-primary"> <a href="update.php" deleteid=".$sno." class="text-light">Update</a></button>
<button class="btn btn-danger"><a href="delete.php" deleteid=".$sno." class="text-light">Delete</a></button></td>

</tr>';
}}
?> 

  </tbody>
</table>
</div>

</body>
</html>