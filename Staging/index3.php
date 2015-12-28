<?php
include_once('connect2.php');

if($_SESSION["permissions"] == "user"){
    echo "<script>
            alert('You are not authorized to view this page.');
            </script>";
           
header("location:https://project-3-lizsan708.c9users.io/Staging/index2.php");
}
?>
<html>
<script>
    $(document).ready(function(){
       $("#create").click(function(){
           window.location.replace("admin_index.php");
       });
       $("#viewReservations").click(function(){
           window.location.replace("viewReservations.1.php");
       });
       $("#deleteReservation").click(function(){
           window.location.replace("viewReservations.1.php");
       });
    });
</script>
<body>
<div class='row'>
    <div class='col-sm-4'> </div>
    <div class='col-sm-4 jumbotron'><center><h1>Welcome Admin</h1><h3><small>Please select one of the following options:</small></h3></center></div>
    <div class='col-sm-4'></div>
</div>

<div class='row'>
    <div class='col-sm-3'> </div>
   <div class='col-sm-6'> 
        <center><div class='btn-group'>
            <button type="button" id='create' class="btn btn-success"><span class='glyphicon glyphicon-plus-sign'></span><br>Create Reservation</button>
            <button type="button" id='viewReservations'  class="btn btn-info"><span class='glyphicon glyphicon-eye-open'></span><br>View Reservation</button>
            <button type="button" id='deleteReservation'  class="btn btn-warning"><span class='glyphicon glyphicon-remove-sign'></span><br>Delete/Modify Reservation</button>
        </div></center>
    </div>
<div class='col-sm-3'> </div>
</div>


</body>
</html>
