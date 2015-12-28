<head>
     <!--Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<title>Reservation Confirmation</title>

 <!--jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

 <!--Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    .whiteText{
        color:white;
        margin-left:40%;
        float:right;
    }
    .btn{
    	display:inline-block;
    }
</style>
</head>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index2.php"><span class='glyphicon glyphicon-home'></span> FoxTrot Reservation System  </a>
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
        $loggedAddress=$_SESSION["address"];
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

<?php
$firstname = ucfirst(trim($_POST["firstname"]));
$lastname= ucfirst(trim($_POST["lastname"]));
$cwid= trim($_POST["cwid"]);
$year= $_POST["year"];
$laundry= isset($_POST["laundry"]);
$sservices= isset($_POST["sservices"]);
$kitchen=isset($_POST["kitchen"]);
$residence= ($_POST["residence"]);
$gender=$_POST["gender"];
#Placing each group of residence halls (halls for seniors/juniors, halls for freshman ect) into an array
$seniorJunior= array("newfulton", "lowerwest","upperwest","fulton","talmadge");
$freshman=array("sheahan","leo","marian","champagnat");
$sophomore=array("midrise","gartland","foy","uppernew","lowernew");
$email=$_POST["email"];
$laundryChoice=$_POST["laundry"];
$kitchenChoice=$_POST["kitchen"];
$sservicesChoice=$_POST["sservices"];
$roomsRemaining=$_POST["roomsRemaining"];
$subtractRoom=$roomsRemaining-1;
?>
<div class="container">
	 <div class="jumbotron">
	 	<h1>Confirmation</h1>
<?php
#checks room availability from the residence hall table
if ($subtractRoom==-1){
    echo "Sorry, there are no more rooms remaining in $residence<br>
    Please return and choose a new room <a href='index.php'>Return</a>";
}else{
	#displays number of remaining rooms for the chosen residence hall
echo "Rooms remaining in <span class='label label-info'>$residence</span> is <span class='label label-default'>$roomsRemaining </span><br>";
	   // echo "<script>alert('Your submission has a few errors, please return to the form');</script>";
	    
 echo "Are you sure you want to reserve a room in <span class='label label-info'>$residence</span>?<br> 
There will be <span class='label label-default'>$subtractRoom </span>rooms left after you submit.<br>";
	   // echo "<script>alert('Your submission has a few errors, please return to the form');</script>";
	    echo "<button class='btn btn-info' onclick='window.history.back()';><span class='glyphicon glyphicon-menu-left'></span>Go Back</button>";
	    echo "<form action='submit.php' method='post'>
	    <input type='hidden' name='firstname' value=$firstname></input>
	    <input type='hidden' name='lastname' value=$lastname></input>
	    <input type='hidden' name='cwid' value=$cwid></input>
	    <input type='hidden' name='year' value=$year></input>
	    <input type='hidden' name='gender' value=$gender></input>
	    <input type='hidden' name='laundry' value=$laundryChoice></input>
	    <input type='hidden' name='kitchen' value=$kitchenChoice></input>
	    <input type='hidden' name='sservices' value=$sservicesChoice></input>
	    <input type='hidden' name='residence' value=$residence></input>
	    <input type='hidden' name='email' value=$email></input>
	    <input type='hidden' name='roomsRemaining' value=$roomsRemaining></input>
	    <input type='hidden' name='subtractRoom' value=$subtractRoom></input>
	    <input type='submit' class='btn btn-success' value='Submit for Submission'>
	    </form>";

}


	    
 
?>
</div>
</div>