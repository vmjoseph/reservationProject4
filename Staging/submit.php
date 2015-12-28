<head>
     <!--Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

 <!--jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

 <!--Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<?php
require_once("connect.php");
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
$subtractRoom=$_POST["subtractRoom"];
$confCode = substr(md5(uniqid(rand(), true)), 16, 16);
#displays final submission
echo "<div class='row'>
<div class='col-sm-4'><table class='table table-striped table-hover'>
        <tr><td>Name: </td><td colspan='2'>$firstname $lastname</td</tr>
        <tr><td>Year: </td><td colspan='2'>".ucfirst($year)."</td</tr>
        <tr><td>Residence Hall: </td><td colspan='2'>".ucfirst($residence)."</td</tr>
        <tr><td>Gender:</td><td colspan='2'>$gender</td></tr>
        <tr><td>Email:</td><td colspan='2'>$email</td></tr>
        <tr><td>Preferences: </td><td>Preference</td><td>Yes/No</td></tr>
        <tr><td></td><td> Kitchen: </td><td>$kitchenChoice</td></tr>
        <tr><td></td><td> Laundry: </td><td>$laundryChoice</td></tr>
        <tr><td></td><td>  Special Services: </td><td>$sservicesChoice</td></tr>
        </table>
        </div>
        <div class='col-sm-8'>
        <div class='panel panel-success'>
      <div class='panel-heading'>Congrats! You have reserved successfully!</div>
      <div class='panel-body'>
        <table class='table table-striped table-hover>";
        

#logs user input into the residence area table        
$sql =  "INSERT INTO residence_areas (first_name, last_name, year, gender, cwid, hall, special_services, kitchen, laundry, email,confirm_code)
 VALUES ('$firstname', '$lastname', '$year', '$gender', '$cwid' , '$residence' , '$sservicesChoice' , '$kitchenChoice' , '$laundryChoice' , '$email', '$confCode' )";

if (mysqli_query($conn, $sql)) {
    echo "<tr><td colspan='2'>Student Choices Inserted Successfully</td></tr>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
if($residence == "offcampus"){
    
}else{
    echo "<tr><td>Remaining rooms in $residence are :</td><td> ".$subtractRoom."</td></tr>";
    $sql2 = "UPDATE residence_halls SET $residence = $subtractRoom";
if (mysqli_query($conn, $sql2)) {
    echo "<tr><td colspan='2'>Residence Remaining Rooms Updated Successfully</td></tr>";
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn)."</div></div>";
}
}


echo "<tr><td>Confirmation Code: </td><td><a href='#'>$confCode</a></td></td>
</table>
</div>
        </div>
        </div>
    </div>";
?>