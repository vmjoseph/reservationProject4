<?php
include_once("connect.php");
$id=$_POST['idValue'];
$firstName= $_POST['editfName'];
$residence=$_POST['residence'];
$lastName=$_POST['editlName'];
$year=$_POST['editYear'];
$gender=$_POST['editGender'];
$cwid=$_POST['editCWID'];
$email=$_POST['editEmail'];
$newHall=$_POST['residenceNew'];

    $sql2 = "SELECT hall FROM residence_areas WHERE cwid=$loggedCWID";
    $result2 = $conn->query($sql2);
    
        if ($result2->num_rows > 0) {
            // output data of each row
            while($row = $result2->fetch_assoc()) {
                $oldHall=$row["hall"];
            }
        } else {
            echo "0 results";
        }

// echo "The old hall chosen was $oldHall.";
// echo "<br>The new hall is $newHall <br>";
    if ($oldHall!=$newHall){
        
    $sql3 = "SELECT * from residence_halls";
    $result3 = $conn->query($sql3);
    
        if ($result3->num_rows > 0) {
            // output data of each row
            while($row = $result3->fetch_assoc()) {
                $changingHalls=$row["$oldHall"];
                $changedHalls=$changingHalls+1;
            }
        } else {
            echo "0 results";
        }
        
    $sql6 = "SELECT * from residence_halls";
    $result6 = $conn->query($sql6);
    
        if ($result6->num_rows > 0) {
            // output data of each row
            while($row = $result6->fetch_assoc()) {
                $findNew=$row["$newHall"];
                $foundNew=$findNew-1;
                // echo "<br>The $newHall previous number was $findNew <br>
                // Now, it will be $foundNew";
            }
        } else {
            echo "0 results";
        }    
    
    
    $sql7="UPDATE residence_halls SET $newHall=$foundNew ";
        if ($conn->query($sql7) === TRUE) {
            echo "<br> <div class='panel panel-success'>
  <div class='panel-heading'>$firstName's record has been updated successfully.</div>";
        } else {
            echo "<br> <div class='panel panel-danger'>
  <div class='panel-heading'>Error updating $firstName's record:<br> " . $conn->error;
        }
        
        
    $sql5="UPDATE residence_halls SET $oldHall=$changedHalls ";
        if ($conn->query($sql5) === TRUE) {
            echo "<br> $firstName's residence has been updated successfully.";
        } else {
            echo "<br> Error updating $firstName's record:<br> " . $conn->error;
        }
    
    $sql4="UPDATE residence_areas SET first_name = '$firstName', last_name= '$lastName' , year= '$year', cwid = '$cwid', hall = '$newHall' , email='$email' WHERE id = $id ";
        if ($conn->query($sql4) === TRUE) {
            echo "<br> $firstName's general information has been updated successfully.";
        } else {
            echo "<br> Error updating $firstName's record:<br> " . $conn->error;
        }
    
        
    }else{
    $sql="UPDATE residence_areas SET first_name = '$firstName', last_name= '$lastName' , year= '$year', cwid = '$cwid', hall = '$oldHall' , email='$email' WHERE id = $id ";
        if ($conn->query($sql) === TRUE) {
            echo "<br> $firstName's record has been updated successfully.</div>";
        } else {
            echo "<br> Error updating $firstName's record:<br> " . $conn->error."</div>";
        }
}

?>