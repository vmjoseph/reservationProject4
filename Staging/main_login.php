<?php
// include_once("connect.php");
session_start();
?>
<html>
    <!-- table for login information -->  
      <head>
     <!--Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

 <!--jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

 <!--Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index2.php"><span class='glyphicon glyphicon-home'></span> FoxTrot Reservation System  </a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a href="main_login.php"><span class="glyphicon glyphicon-user"> Login</span></a></li>
        <li><a href="register.php"><span class="glyphicon glyphicon-plus"> Register</span></a></li> 
      </ul>
    </div>
  </div>
</nav>

<body>
    <div class="container">
  <div class="jumbotron">
     <center><h2>Member Login </h2></center>
    <table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
        <tr>
            <form  class="form" name="form1" method="post" action="checklogin.php">
        <td>
    <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
        <tr>
            <td width="78">Username</td>
            <td width="6">:</td>
            <td width="294"><input  class="form-control" name="myusername" type="text" id="myusername"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password"  class="form-control" name="mypassword" id="mypassword"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" class="form-control"  name="Submit" value="Login"></td>
        </tr>
    </table>
        </td>
            </form>
        </tr>
    </table>
   <center> New? Click <a href="register.php">here</a> to make an account</center>
</div>
</div>
</body>

</html>



