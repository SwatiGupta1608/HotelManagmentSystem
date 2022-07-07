<?php
If($_SERVER['REQUEST_METHOD']=='POST')
 {
 $n=$_POST['username'];
 $p=$_POST['password'];
 $servername="localhost";
 $username="root";
 $password="";
 $database="booking";
 $conn = mysqli_connect($servername,$username,$password,$database);
 if (!$conn) {
 die(mysqli_connect_error($conn));
 }
}
?>