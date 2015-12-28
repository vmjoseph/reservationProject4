<?php

// define('DB_HOST', 'localhost'); 
// define('DB_NAME', 'practice'); 
// define('DB_USER','root'); 
// define('DB_PASSWORD',''); 

// $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
// $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 



require_once("register.php");

$servername = "localhost";
$username = "lizsan708";
$password = "";
$dbname = "testDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    echo "Connection was successful!<br>";
}

$firstname= ucfirst(trim($_POST["firstname"]));
$lastname= ucfirst(trim($_POST["lastname"]));
$year= $_POST["year"];
$gender= $_POST["gender"];
$cwid= trim($_POST["cwid"]);
$email= $_POST["email"];
$username= $_POST["username"];
$password= $_POST["password"];
$address= $_POST["address"]." ".$_POST["state"]." ".$_POST["city"]." ".$_POST["zipCode"];

#logs user input into the members table        
$sql =  "INSERT INTO members (first_name, last_name, year, gender, cwid, email, username, password, address)
 VALUES ('$firstname', '$lastname','$year', '$gender', '$cwid', '$email', '$username', '$password', '$address')";
 
if (mysqli_query($conn, $sql)) {
    echo "<br> New Registration Created Successfully<br>";
    header("location:https://project-4-lizsan708.c9users.io/Staging/index2.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
// header("reservationindex.html");
?>