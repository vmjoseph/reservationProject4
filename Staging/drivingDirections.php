<?php

include_once('connect.php');
$sql = "SELECT hall FROM residence_areas WHERE cwid=$loggedCWID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $destinationHall= $row["hall"];
          echo "<script>
      console.log('$destinationHall');
      </script>";
    }
} else {
    echo "0 results";

}
  
    if($destinationHall== "champagnat" || "leo" || "marian" || "sheahan"){
        $latParking="41.718637";
        $lonParking="-73.935582";
        echo "<script>
        var latParking=$latParking;
        var lonParking=$lonParking;
        </script>";
    }elseif($destinationHall== "midrise"){
          $latParking="41.722164";
        $lonParking="-73.936347";
        
        echo "<script>
        var latParking=$latParking;
        var lonParking=$lonParking;
        </script>";
    }elseif($destinationHall=="foy"){
          $latParking="41.724489";
        $lonParking="-73.934064";
        echo "<script>
        var latParking=$latParking;
        var lonParking=$lonParking;
        </script>";
    }elseif($destinationHall=="gartland"){
          $latParking="41.726082";
        $lonParking=" -73.933186";
        echo "<script>
        var latParking=$latParking;
        var lonParking=$lonParking;
        </script>";; 
    }elseif($destinationHall== "uppernew" || "lowernew"){
          $latParking="41.722164";
        $lonParking="-73.936347";
        echo "<script>
        var latParking=$latParking;
        var lonParking=$lonParking;
        </script>";
        
    }elseif($destinationHall== "upperwest" || "lowerwest" || "fulton" || "newfulton"|| "talmadge"){
          $latParking="41.721703";
        $lonParking="-73.925743";
        echo "<script>
        var latParking=$latParking;
        var lonParking=$lonParking;
        
        console.log('you have upperwest');
        </script>";
        
    }else{
        echo "There has been an error, please try again later";
    }
    ?>