<!DOCTYPE html>
<html lang="en">
<head>
 <title>Document</title>
</head>
<body>
 <form method="post">
 <p>Username : <input type="text" name="nam"></p>
 <p>Password : <input type="text" name="pass"></p>
 <input type="submit" name="submit">
 </form>
 <?php
 if (isset($_POST['submit'])) {
 $n=$_POST['nam'];
 $p=$_POST['pass'];
 $servername="localhost";
 $username="root";
 $password="";
 $database="booking";
 $conn = mysqli_connect($servername,$username,$password,$database);
 if (!$conn) {
 die(mysqli_connect_error($conn));
 }
 $sql="SELECT * FROM `admin_login` WHERE (username='$n' AND password='$p');";
 $result =mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)==0){
 echo "User not exist";
 }
 else{
 echo "Welcome $n";
 }
 }
 ?>
</body>
</html>