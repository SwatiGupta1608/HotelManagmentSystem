<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer_Data</title>
</head>
<body>
    <div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sno.</th>
      <th scope="col">Name</th>
      <th scope="col">Aadhar Number</th>
      <th scope="col">Contactno</th>
      <th scope="col">NO_OFGuest</th>
      <th scope="col">Check_In_DATE</th>
      <th scope="col">Check_Out_DATE</th>
    </tr>
    
  </thead>
  <tbody>
<?php
 {
 $servername="localhost";
 $username="root";
 $password="";
 $database="booking";
 $conn = mysqli_connect($servername,$username,$password,$database);
 if (!$conn) {
 die(mysqli_connect_error($conn));
 }

$sql="select * from book";
$result=mysqli_query($conn,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
  $sno=$row['Serial_no'];
  $name=$row['Name'];
  $Aadhar=$row['Id_no'];
  $Contactno=$row['Contact_no'];
$Guests=$row['Guests'];
  $Check_In_DATE=$row['Check_In'];
  $Check_Out_DATE=$row['Check_out'];
  echo ' <tr>
  <th scope="row">'.$sno.'</th>
  <td>'.$name.'</td>
  <td> '.$Aadhar.'</td>
  <td>'.$Contactno.'</td>
  <td>'.$Guests.'</td>
  <td> '.$Check_In_DATE.'</td>
  <td>'.$Check_Out_DATE.'</td>
  <td> 
  <button class="btn btn-primary"> <a href="update.php" deleteid=".$sno." class="text-light">Update</a></button>
<button class="btn btn-danger"><a href="delete.php" deleteid=".$sno." class="text-light">Delete</a></button></td>

</tr>';
}}
}
?> 

  </tbody>
</table>
</div>

</body>
</html>