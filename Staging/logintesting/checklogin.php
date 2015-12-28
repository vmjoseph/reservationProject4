<?php

$host="localhost"; // Host name 
$username="lizsan708"; // Mysql username 
$password=""; // Mysql password 
$db_name="testDB"; // Database name 
$tbl_name="members"; // Table name 

// Connect to server and select databse.
//$conn?
$con = mysqli_connect($host,$username,$password,$db_name);
mysqli_select_db($con, $tbl_name);

// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// To protect from MySQL injection
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = $con->real_escape_string($myusername);
$mypassword =  $con->real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
if (mysqli_query($con, $sql)) {
$result = $con->query($sql);
// Mysqli_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION["myusername"] = $username;
$_SESSION["mypassword"] = $pass;
//header("location:login_success.php");
header("location:https://project-3-lizsan708.c9users.io/Staging/index2.php");
}
else {
echo "Wrong Username or Password";

}
}
?>