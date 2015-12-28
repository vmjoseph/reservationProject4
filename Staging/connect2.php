<html>
    <head>
     <!--Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

 <!--jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

 <!--Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    .whiteText{
        color:white;
        margin-left:40%;
        padding-top:10%;
    }
</style>
</head>
<?php
$servername = "localhost";
$username = "lizsan708";
$password = "";
$dbname = "residenceDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
   // echo "Connection was successful!<br>";
}
// echo "hi , ".$_SESSION["myusername"];

?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index3.php"><span class='glyphicon glyphicon-home'></span> FoxTrot Reservation System  </a>
    </div>
    <div>
      <!--<ul class="nav navbar-nav">-->
      <!--  <li><a href="main_login.php"><span class="glyphicon glyphicon-user"> Login</span></a></li>-->
      <!--  <li><a href="register.php"><span class="glyphicon glyphicon-plus"> Register</span></a></li> -->
      <!--</ul>-->
      <?php
session_start();


     if (isset($_SESSION['firstname'])) {
        echo "<span class='whiteText'>Welcome, ".  $_SESSION["firstname"]."
        <a href='logout.php'>Logout</a></span>";
        $loggedUserfName=$_SESSION['firstname'];
        $loggedUserlName=$_SESSION['lastname'];
        $loggedCWID=$_SESSION["cwid"];
        $loggedGender=$_SESSION["gender"];
        $loggedEmail=$_SESSION["email"];
        $loggedYear=$_SESSION["year"];
        // echo $_SESSION["lastname"];
     }else {
           
           echo "<script>alert('you must be logged in to view this page')</script>";
           echo "<script>window.open('main_login.php','_self')</script>";
           echo "you have logged out successfully";
      
      }
?>
    </div>
  </div>
</nav>

</html>
