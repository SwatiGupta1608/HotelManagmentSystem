
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Booking</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<style>
  input{

    border-radius: 30px;
  }
</style>
<body>
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
        <li><a href="signup.html">Login</a></li>
        <li><a href="career.html">Careers</a></li>
        
      </ul>
    </nav>
    </header>
      <br><br><br>
<section class="book" id="book">

        <h1 class="heading">
           BOOK NOW
        </h1>
    
        <div class="row">
    
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>"method="post">

                <div class="inputBox">
                    <h3>Name</h3>
                    <input type="text" name="S2" placeholder="Name">
                </div>
                <div class="inputBox">
                    <h3>ID no.</h3>
                    <input type="number" name="S3" placeholder="Id no" min="0">
                </div>
                <div class="inputBox">
                    <h3>Contact No.</h3>
                    <input type="number" name="S4" placeholder="Contact no" min="0">
                </div>
                <div class="inputBox">
                    <h3>No. of guests</h3>
                    <input type="number" name="S5" placeholder="number of guests" min="0">
                </div>
                <div class="inputBox">
                    <h3>Date of check-in</h3>
                    <input type="date" name="S6" min="2021-06-01">
                </div>
                <div class="inputBox">
                    <h3>Date of check-out</h3>
                    <input type="date" name="S7" min="2021-06-01">
                </div>
                <input type="submit" class="btn" value="book now">
            </form>


        </div>
    
    </section>
<?php
 If($_SERVER['REQUEST_METHOD']=='POST'){

$name=$_POST["S2"];
$Id=$_POST["S3"];
$DATE =$_POST["S6"] ;
$Date1=$_POST["S7"];
$NOOfGuest=$_POST["S5"];
$contact=$_POST["S4"];


// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "booking";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

// Variables to be inserted into the table

// Sql query to be executed
$sql = "INSERT INTO book (Name, Id_no, Contact_no, Guests, Check_In, Check_out) VALUES ('$name','$Id', '$contact' , '$NOOfGuest', '$DATE' , '$Date1')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo "The record has been inserted successfully successfully!<br>";
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}}

?>
 


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