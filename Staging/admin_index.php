<?php
require_once("connect2.php");
?>

<html>
    <!--admin reservation page; allows full modificaion of all values -->
<head>
        <!--Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

 <!--jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

 <!--Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<script>
    // function autoEmail(){
    //     var firstname= document.getElementById("firstname").value;
    //     var lastname= document.getElementById("lastname").value;
    //     var emailPre=document.getElementById("email");
    //     // emailPre=firstname+"."+lastname+"1@marist.edu";
    //     emailPre.value=firstname+"."+lastname+"1@marist.edu";
    // }
</script>
<body>
    
	<form class="form" action="parse.php" method="POST">
		<table>
			<tr><th colspan="2"> General Information: </th></tr>
			<tr><td> First Name: </td><td><input type="text" id="firstname" required="required" value="<?php echo $loggedUserfName; ?>"name="firstname"></td></tr>
			<tr><td> Last Name: </td><td><input type="text" id="lastname" required="required" value="<?php echo $loggedUserlName;?>" name="lastname"></td></tr>
			<tr><td> CWID: </td><td><input type="number" required="required" value="<?php echo $loggedCWID;?>" name="cwid"></td></tr>
			<tr><td> Year </td><td>
							<input name= "year" type="text" value="<?php echo $loggedYear; ?>"></td></tr>
			<tr><td>Gender</td><td><input value="<?php echo $loggedGender;?>" required="required" class="form-control" name="gender" id="gender"></td></tr>
			<tr><td>Email:</td><td><input class="form-control" type="email" id="email" required="required" name="email"></td></tr>
			<tr><th colspan="2">Preferences:</th></tr>
			<tr><td> Laundry?: </td><td><input type="checkbox" class="form-control" name="laundry"></td></tr>
			<tr><td> Special Services?: </td><td><input class="form-control" type="checkbox" name="sservices"></td></tr>
			<tr><td> Kitchen?: </td><td><input type="checkbox" class="form-control" name="kitchen"></td></tr>
			<tr><th colspan="2">Residence Selection</th></tr>
			<tr><td>Where would you like to live?:</td><td>
															<select name="residence" class="form-control" required="required">
																<option value="">Select a residence</option>
																<option value="champagnat">Champagnat Hall</option>
																<option value="leo">Leo Hall</option>
																<option value="marian">Marian Hall</option>
																<option value="sheahan">Sheahan Hall</option>
																<option value="midrise">Midrise Hall</option>
																<option value="foy">Foy Townhouses</option>
																<option value="gartland">Gartland Commons</option>
																<option value="uppernew">Upper New Townhouses</option>
																<option value="lowernew">Lower New Townhouses</option>
																<option value="newfulton">New Fulton Townhouses</option>
																<option value="lowerwest">Lower West Cedar Townhouses</option>
																<option value="upperwest">Upper West Cedar Townhouses</option>
																<option value="fulton">Fulton Street Townhouses</option>
																<option value="talmadge">Talmadge Court</option>
																<option value="offcampus">Off Campus</option>
															</td></tr>
			<tr><th colspan="2"><button type="submit" class="btn btn-default">Submit</button></th></tr>
			</table>
</body>
</html>

<?php


$sql="SELECT * FROM residence_halls";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "
<table class='table' id='available'>
    <tr><th>Residence Hall: </th><th> Rooms Available: </th></tr>
    <tr><td>Champagnat: </td><td>".$row["champagnat"]."</td></tr>
    <tr><td>Leo:</td><td> ".$row["leo"]."</td></tr> 
    <tr><td>Marian:</td><td> ".$row["marian"]."</tr> 
    <tr><td>Sheahan:</td><td> ".$row["sheahan"]."</td></tr>
    <tr><td>Midrise: </td><td>".$row["midrise"]."</td></tr>
    <tr><td>Foy:</td><td> ".$row["foy"]."</td></tr>
    <tr><td>Gartland: </td><td>".$row["gartland"]."</td></tr>
    <tr><td>Uppernew:</td><td> ".$row["uppernew"]."</td></tr> 
    <tr><td>Lowernew:</td><td> ".$row["lowernew"]."</td></tr> 
    <tr><td>New Fulton:</td><td> ".$row["newfulton"]."</td></tr> 
    <tr><td>Lower West:</td><td> ".$row["lowerwest"]."</td></tr> 
    <tr><td>Upper West:</td><td> ".$row["upperwest"]."</td></tr> 
    <tr><td>Fulton:</td><td> ".$row["fulton"]."</td></tr> 
    <tr><td>Talmadge:</td><td> ".$row["talmadge"]."</td></tr>
    </table>
    </div>";
    
    $champLeft=$row["champagnat"];
    $leoLeft=$row["leo"];
    $marianLeft=$row["marian"];
    $sheahanLeft=$row["sheahan"];
    $midriseLeft=$row["midrise"];
    $foyLeft=$row["foy"];
    $gartlandLeft=$row["gartland"];
    $uppernLeft=$row["uppernew"];
    $lowernLeft=$row["lowernew"];
    $newfLeft=$row["newfulton"];
    $lowerwLeft=$row["lowerwest"];
    $upperwLeft=$row["upperwest"];
    $fultonLeft=$row["fulton"];
    $talmadgeLeft=$row["talmadge"];
    
    #pass on the variables to different pages
    echo "<table>
    <input type='hidden' name='champagnat' value=$champLeft>
    <input type='hidden' name='leo' value=$leoLeft>
    <input type='hidden' name='marian' value=$marianLeft>
    <input type='hidden' name='sheahan' value=$sheahanLeft>
    <input type='hidden' name='midrise' value=$midriseLeft>
    <input type='hidden' name='foy' value=$foyLeft>
    <input type='hidden' name='gartland' value=$gartlandLeft>
    <input type='hidden' name='uppernew' value=$uppernLeft>
    <input type='hidden' name='lowernew' value=$lowernLeft>
    <input type='hidden' name='newfulton' value=$newfLeft>
    <input type='hidden' name='lowerwest' value=$lowerwLeft>
    <input type='hidden' name='upperwest' value=$upperwLeft>
    <input type='hidden' name='fulton' value=$fultonLeft>
    <input type='hidden' name='talmadge' value=$talmadgeLeft>
    </table>";
    }
} else {
    echo "0 results";
}
?>
<html>
    </div>
</html>