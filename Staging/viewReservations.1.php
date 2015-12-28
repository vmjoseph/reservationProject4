<?php
include_once('connect2.php');
if($_SESSION["permissions"] == "user"){
     echo '<script type="text/javascript">alert("got a name!");</script>';
header("location:https://project-3-lizsan708.c9users.io/Staging/index2.php");
}
?>
<head>
     <!--Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

 <!--jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

 <!--Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.addRow{
    background-color:#33cc33;
    border-radius:5px;
    color:white;
}
.addRow{
    font-size:20px;
}
</style>
</head>
<?php
$servername = "localhost";
$username = "lizsan708";
$password = "";
$dbname = "residenceDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
<html>
    <div class="panel panel-default">
  <div class="panel-heading">Admin Control Panel</div>
</div>
<!--<script>-->
<!--function submitForm() {-->
<!--    document.getElementById("deleteRecord").submit();-->
<!--}-->
<!--</script>-->
</html>
<?php
$sql = "SELECT * FROM residence_areas";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table class='table table-striped table-hover'>";
    echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Year</th><th>Gender</th><th>CWID</th><th>Hall</th><th>Email</th><th>TimeStamp</th>
    <th>Delete</span></th><th>Modify</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["first_name"]."</td><td>".$row["last_name"]. "</td><td>".$row["year"]."</td><td>".$row["gender"]."</td><td>".
        $row["cwid"]."</td><td>".$row["hall"]."</td><td>".$row["email"]."</td><td>".$row["timestamp"]."</td>
        
        <td>
            <form action='deleteRecord.php' id='deleteRecord' method='POST'>
            <input type='hidden' name='rowName' value=".$row["id"].">
            <input type='hidden' name='rowFirstname' value=".$row["first_name"].">
            <input type='hidden' name='rowResidence' value=".$row["hall"].">
              <button type='submit' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></button>
             </form>
        </td>
        
        <td>
            <form action='editRecord.php' id='editRecord' method='POST'>
            <input type='hidden' name='editId' value=".$row["id"].">
            <input type='hidden' name='editFirstName' value=".$row["first_name"].">
            <input type='hidden' name='editResidence' value=".$row["hall"].">
            <input type='hidden' name='editLastName' value=".$row["last_name"].">
            <input type='hidden' name='editGender' value=".$row["gender"].">
            <input type='hidden' name='editCWID' value=".$row["cwid"].">
            <input type='hidden' name='editYear' value=".$row["year"].">
            <input type='hidden' name='editEmail' value=".$row["email"].">
             <button type='submit' class='btn btn-warning'><span class='glyphicon glyphicon-edit'></span></button>
            </form>
            </td>
       </tr>";
    }
} else {
    echo "<table class='table table-striped table-hover'>
            <tr><td>Sorry, there are currently no records in this database</td><td> Would you like to add a record?</td></tr>";
}
echo "<tr><td colspan='11'><button type='button' onclick='window.location='index2.php''class='btn btn-success btn-block'><span class='glyphicon glyphicon-plus'></span> &nbsp; Add A Reservation</button></td></tr>";
echo "</table>";

$conn->close();
?>