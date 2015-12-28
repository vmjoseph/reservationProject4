
<html> 
    <head> 
        <title>Sign-Up</title> 
    </head> 
    
    <body id="body-color"> 
        <div id="Sign-Up"> 
            <fieldset style="width:30%">
                <legend>Registration Form</legend> 
                <table border="0"> <tr> 
                    <!--<form method="POST" action="connectivity-sign-up.php"> -->
                     <form method="POST" action="checkregister.php"> 
                <td> First Name</td><td> 
                    <input type="text" name="firstname"></td> </tr>
                <td> Last Name</td><td> 
                    <input type="text" name="lastname"></td> 
                <tr><td>Year</td><td>
                    <input type="text" name="year"></td></tr>
                <tr><td>Gender</td><td>
                    <input type="text" name="gender"></td></tr>
                <tr><td>CWID</td><td>
                    <input type="text" name="cwid"></td></tr>
                <tr> <td>Email</td><td> <input type="text" name="email"></td> </tr> 
                <tr> <td>UserName</td><td> 
                    <input type="text" name="username"></td> </tr> 
                <tr> <td>Password</td><td> 
                    <input type="password" name="password"></td> </tr> 
                <tr> <td>Confirm Password </td><td>
                    <input type="password" name="cpass"></td> </tr> 
                <tr> <td><input id="button" type="submit" name="submit" value="Sign-Up"></td> </tr> 
                    </form> 
                </table>
            </fieldset> 
        </div> 
    </body> 
</html>