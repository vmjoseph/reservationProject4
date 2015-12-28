<?php
include_once('connect.php');
?>
<html>
<script>
    $(document).ready(function(){
       $("#create").click(function(){
           window.location.replace("index.php");
       });
       $("#viewReservations").click(function(){
           window.location.replace("viewDirections.php");
       });
       $("#deleteReservation").click(function(){
           window.location.replace("viewReservations.php");
       });
    });
</script>
<body>
<div class='row'>
    <div class='col-sm-4'> </div>
    <div class='col-sm-4 jumbotron'><center><h1>Welcome!</h1><h3><small>Please select one of the following options:</small></h3></center></div>
    <div class='col-sm-4'></div>
</div>

<div class='row'>
    <div class='col-sm-3'> </div>
   <div class='col-sm-6'> 
        <center><div class='btn-group'>
            <button type="button" id='create' class="btn btn-success"><span class='glyphicon glyphicon-plus-sign'></span><br>Create Reservation</button>
            <button type="button" id='viewReservations'  class="btn btn-info"><span class='glyphicon glyphicon-globe'></span><br>How To Get There?</button>
            <button type="button" id='deleteReservation'  class="btn btn-warning"><span class='glyphicon glyphicon-remove-sign'></span><br>Delete/Modify Reservation</button>
        </div></center>
    </div>
<div class='col-sm-3'> </div>
</div>

</body>
</html>
