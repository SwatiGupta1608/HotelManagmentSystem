<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Login/Signup</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
  input{

    border-radius: 30px;
  }
</style>
<body>
   

     
</body>




    <!-- header section starts  -->

    <header>
      <div class="head">
        <a href="index.html" class="logo"><span>Le</span>Meridien</a>
      </div>
      
      <nav id="nav_menu">
        <ul>
          
          <li><a href="book.html">Stay</a>
          </li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="bookings.html">Book</a></li>
          <li><a href="dining.html">Dining</a></li>
          <li><a href="blogs.html">Weddings</a></li>
          <li><a href="events.html">Events</a></li>
                    <li><a href="career.html">Careers</a></li>
          
        </ul>
      </nav>
    </header>
      <br><br><br>
<section class="book" id="book">

        <h1 class="heading">
           Login/signup
        </h1>
    
        <div class="row">
    
                        <form action="login.php" method="POST">
                <div class="inputBox">
                    <h3>User id.</h3>
                    <input type="text" placeholder="userid" name="username" required>
                </div>
                <div class="inputBox">
                    <h3>Password</h3>
                    <input type="text" name="password">
                </div>
               
                <input type="submit" class="btn" value="Login">
            </form>
    
        </div>
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
       



    
    </section>
    <!-- footer section  -->

    <footer class="footer">

      <div class="box-container">
  
        <div class="box">
          <h3>The The Meridien Hospitality Group</h3>
          <p>Management</p>
  <p>Careers</p>
  <p>Awards</p>
  <p>Published Rates</p>
  <p>Investor Relations</p>
        </div>
        <div class="box">
          <h3>Our brands</h3>
          <table class="footer-table">
            <tr>
              <th>Kitty Su</th>
              <th>Kittysu.io</th>
  
            </tr>
            <tr>
              <td>The Meridien School</td>
              <td>lschool.io</td>
  
            </tr>
            <tr>
              <td>Football team</td>
              <td>machester.united</td>
  
            </tr>
            
          </table>
        </div>
        <div class="box">
          <h3>quick links</h3>
          <a href="booking.html">book</a>
          <a href="book.html">Stay</a>
          <a href="gallery.html">gallery</a>
          <a href="blogs.html">Blogs</a>
          
          <a href="contact.html">contact</a>
          <a href="faq.html">FAQ</a>
  
  
        </div>
        <div class="box">
          <h3>follow us</h3>
          <a href="#" class="fa fa-facebook"> Facebook</a>
                  <a href="#" class="fa fa-twitter"> Twitter</a>
                  <a href="#" class="fa fa-linkedin"> Linkdin</a>
                  <a href="#" class="fa fa-instagram"> instagram</a>
         </div>
  
      </div>
  
      <h1 class="credit"> <span>&copy; LeMeridien </span> | all rights reserved! </h1>
  
    </footer>
</body>
</html>

