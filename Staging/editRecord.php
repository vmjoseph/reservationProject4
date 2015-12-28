<?php
include_once("connect.php");
$id=$_POST['editId'];
$firstName= $_POST['editFirstName'];
$residence=$_POST['editResidence'];
$lastName=$_POST['editLastName'];
$year=$_POST['editYear'];
$gender=$_POST['editGender'];
$cwid=$_POST['editCWID'];
$email=$_POST['editEmail'];
?>
<div class="container">
	<div class="jumbotron">
		</h1>
		<?php
echo "<h1>You are editing $firstName's Information. </h1><h3 class='small'>Edit their informaiton below: </h3>";
// echo "<br> The residence was: $residence <br>";

echo "
<form action='updateTables.php' method='POST'>
<table>
<tr><td>ID:</td><td><input type='text' readonly name='idValue' value='$id'></td>
<td>First Name: </td><td><input name='editfName' type='text' value='$firstName'></td>
<td>Last Name: </td><td><input name='editlName' type='text' value='$lastName'></td>
<td>Year: </td><td><input name='editYear' type='text' value='$year'></td></tr><tr>
<td>Gender:</td><td><input name='editGender' type='text' value='$gender'></td>
<td>CWID: </td><td><input name='editCWID'type='numbers' value='$cwid'></td>
<td>Residence Hall:</td><td>
	<select id='residence' name='residenceNew' >
		<option value=''>Select a residence</option>
		<option value='champagnat'>Champagnat Hall</option>
		<option value='leo'>Leo Hall</option>
		<option value='marian'>Marian Hall</option>
		<option value='sheahan'>Sheahan Hall</option>
		<option selected value='midrise'>Midrise Hall</option>
		<option value='foy'>Foy Townhouses</option>
		<option value='gartland'>Gartland Commons</option>
		<option value='uppernew'>Upper New Townhouses</option>
		<option value='lowernew'>Lower New Townhouses</option>
		<option value='newfulton'>New Fulton Townhouses</option>
		<option value='lowerwest'>Lower West Cedar Townhouses</option>
		<option value='upperwest'>Upper West Cedar Townhouses</option>
		<option value='fulton'>Fulton Street Townhouses</option>
		<option value='talmadge'>Talmadge Court</option>
		<option value='offcampus'>Off Campus</option>
		</select></td>
<td>Email</td> <td> <input name='editEmail' type='text' value='$email'></td></tr>
</table>
<input type='submit' class='btn btn-info'>
</form>

<script>
var selectOptionRes=document.getElementById('residence').value ='$residence';

</script>";

// if($hall)


echo "<br><br>";

echo "</table>";



?>
	</div>
</div>
