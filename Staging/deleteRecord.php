<?php
include_once("connect.php");
$id=$_POST['rowName'];
$firstName= $_POST['rowFirstname'];
$residenceChoice=$_POST['rowResidence'];
$sql = "SELECT * FROM residence_halls";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $updatingResidence=$row[$residenceChoice];
        if ($updatingResidence>=5){
            echo "<div class='alert alert-danger'>
  <strong><span class='glyphicon glyphicon-warning-sign'></span> Sorry there has been in error: </strong> Database error $residenceChoice has too many spots left. Please <a href='mailto:help@example.com'>contact</a> your system administrator.
</div>";
        }else{
            $updatedResidence= $updatingResidence+1;
            echo "<br> $updatingResidence<br>";
            echo $updatedResidence;
            $sql2= "UPDATE residence_halls SET $residenceChoice='$updatedResidence' WHERE $residenceChoice= $updatingResidence ";
            $result2= $conn->query($sql2);
            
            if ($conn->query($sql2) === TRUE) {
            echo "<br> <div class='alert alert-success'>
  <strong>Success!</strong> Record has been deleted.
</div><br>";
            } else {
            echo "<br>Error updating record: " . $conn->error;
            }
            
            $sql3 = "DELETE FROM residence_areas WHERE id = $id";
            
            if ($conn->query($sql3) === TRUE) {
            echo "Record deleted successfully";
            } else {
            echo "Error deleting record: " . $conn->error;
}
        }
        
} 
}else {
    echo "0 results";
}

echo "<div class='panel panel-warning'>
      <div class='panel-heading'>You are deleting $firstName </div>
      <div class='panel-body'>Their user id was: $id";
echo "<br> Residence Choice <span class='label label-info'>$residenceChoice</span><br>
</div>
</div>";






$conn->close();

?>