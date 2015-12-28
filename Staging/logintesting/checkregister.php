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
$email= $_POST["email"];
$username= $_POST["username"];
$password= $_POST["password"];
//permissions??

#logs user input into the members table        
$sql =  "INSERT INTO members (first_name, last_name, email, username, password)
 VALUES ('$firstname', '$lastname', '$email', '$username', '$password')";
 
if (mysqli_query($conn, $sql)) {
    echo "<br> New Registration Created Successfully<br>";
    header("location:https://project-3-lizsan708.c9users.io/Staging/index2.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
// header("reservationindex.html");
?>