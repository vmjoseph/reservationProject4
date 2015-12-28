<?php
session_start();
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
    session_start();
// Register $myusername, $mypassword and redirect to file "login_success.php"
 #User First Name
            // $queryFirstName= "SELECT * FROM $tbl_name WHERE username='$myusername' AND  password='$mypassword'";
            // //Grabs the result of the query
            //     $resultFirstName= $db->query($queryFirstName);
            //     while ($row = $resultFirstName->fetch(PDO::FETCH_ASSOC)){
            //         //creates first name var from fetched db result
            //         $firstN=$row["first_name"];
            //     }
            //     //creates first name session var 
            //     $_SESSION['firstName']=$firstN;
            //     //test echo
                //  echo $firstN."<br>"; 
                
$sql4 = "SELECT * FROM $tbl_name WHERE username='$myusername' and password ='$mypassword'";
$result4 = $con->query($sql4);

if ($result4->num_rows > 0) {
    // output data of each row
    while($row = $result4->fetch_assoc()) {
        $_SESSION["firstname"]=$row["first_name"];
        // $_SESSION["lastname"]=$row["last_name"];
        // $_SESSION["cwid"]=$row["cwid"];
    }
}

$sql5 = "SELECT * FROM $tbl_name WHERE username='$myusername' and password ='$mypassword'";
$result5 = $con->query($sql5);

if ($result5->num_rows > 0) {
    // output data of each row
    while($row = $result5->fetch_assoc()) {
        // $_SESSION["firstname"]=$row["first_name"];
        $_SESSION["lastname"]=$row["last_name"];
        // $_SESSION["cwid"]=$row["cwid"];
    }
}

$sql6 = "SELECT * FROM $tbl_name WHERE username='$myusername' and password ='$mypassword'";
$result6 = $con->query($sql6);

if ($result6->num_rows > 0) {
    // output data of each row
    while($row = $result6->fetch_assoc()) {
        $_SESSION["cwid"]=$row["cwid"];
    }
}

$sql7 = "SELECT * FROM $tbl_name WHERE username='$myusername' and password ='$mypassword'";
$result7 = $con->query($sql7);

if ($result7->num_rows > 0) {
    // output data of each row
    while($row = $result7->fetch_assoc()) {
        $_SESSION["gender"]=$row["gender"];
    }
}

$sql8 = "SELECT * FROM $tbl_name WHERE username='$myusername' and password ='$mypassword'";
$result8 = $con->query($sql8);

if ($result8->num_rows > 0) {
    // output data of each row
    while($row = $result8->fetch_assoc()) {
        $_SESSION["email"]=$row["email"];
    }
}
$sql9 = "SELECT * FROM $tbl_name WHERE username='$myusername' and password ='$mypassword'";
$result9 = $con->query($sql9);

if ($result9->num_rows > 0) {
    // output data of each row
    while($row = $result9->fetch_assoc()) {
        $_SESSION["year"]=$row["year"];
    }

}

$sql10= "SELECT * FROM $tbl_name WHERE username='$myusername' and password ='$mypassword'";
$result10 = $con->query($sql10);

if ($result10->num_rows > 0) {
    // output data of each row
    while($row = $result10->fetch_assoc()) {
        $_SESSION["permissions"]=$row["permissions"];
    }

}
$sql11= "SELECT * FROM $tbl_name WHERE username='$myusername' and password ='$mypassword'";
$result11 = $con->query($sql11);

if ($result11->num_rows > 0) {
    // output data of each row
    while($row = $result11->fetch_assoc()) {
        $_SESSION["address"]=$row["address"];
    }

}
//header("location:login_success.php");
if ( $_SESSION["permissions"] == "admin"){
header("location:https://project-4-lizsan708.c9users.io/Staging/index3.php");
}else{
    
header("location:https://project-4-lizsan708.c9users.io/Staging/index2.php");
}
}
else {
echo "Wrong Username or Password";
}
}
?>