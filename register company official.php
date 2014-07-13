<?php
include 'connect.php';

$new_cfname=$new_clname=$new_cloginid=$new_cpassword=$new_cemail=$new_caddress=$new_cdesignation=$new_cgender=$new_cpincode=$new_cphone=$new_ccity="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $new_cfname=$_POST["fname"];
    $new_clname=$_POST["lname"];
    $new_cloginid=$_POST["loginid"];
    $new_cpassword=$_POST["password"];
    $new_cemail=$_POST["email"];
    $new_caddress=$_POST["address"];
    $new_cdesignation=$_POST["designation"];
    $new_cgender=$_POST["gender"];
    $new_cdoj=$_POST["doj"];
    $new_cpincode=$_POST["pincode"];
    $new_cphone=$_POST["phone"];
    $new_ccity=$_POST["city"];
    
    $query=mysql_query("insert into company_official (loginid,password,emailid,name,last_name,address,designation,gender,doj,pincode,ph_no,city) values ('$new_cloginid','$new_cpassword','$new_cemail','$new_cfname','$new_clname','$new_caddress','$new_cdesignation','$new_cgender','$new_cdoj','$new_cpincode','$new_cphone','$new_ccity')");
    if(!$query)
    {echo "couldn't connect".mysql_error();}
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Insurance Management System</title>
        <link rel="stylesheet" type="text/css" href="sign up style.css"/>
        <link rel="stylesheet" type="text/css" href="temp style.css"/>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>        
        <div id="header">
            <h1 id="logo" align="center">Insurance Management System</h1>
        </div>
        
        
         
        <div id="sign_block"> 
            <p align="center">
            <form method="POST" action="register company official.php">
                
                <table>
                    
                    <tr>
                        <td><input type="text" name="fname" placeholder="FirstName"></td>
                    </tr>
                    
                    <tr>
                        <td><input type="text" name="lname" placeholder="Lastname"></td>
                    </tr>
                    
                    <tr>
                        <td><input type="text" name="loginid" placeholder="Loginid"></td>
                    </tr>
                    
                    <tr>
                        <td><input type="password" name="password" placeholder="Password"></td>
                    </tr>
                    
                    <tr>
                        <td><input type="text" name="email" placeholder="Email id"></td>
                    </tr>
                    
                    <tr>
                        <td><input type="text" name="address" placeholder="Address"></td>
                    </tr>
                    
                    <tr>
                        <td><input type="text" name="designation" placeholder="Designation"></td>
                    </tr>
                    
                    <tr>
                        <td>Gender:
                            <input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="female">Female</td>
                    </tr>
                    
                    <tr>
                        <td><input type="text" name="doj" placeholder="Date of joining  YYYY-mm-dd"></td>
                    </tr>
                    
                    <tr>
                        <td><input type="text" name="pincode" placeholder="Pincode"></td>
                    </tr>
                    
                    <tr>
                        <td><input type="text" name="phone" placeholder="Phone Number"></td>
                    </tr>
                    
                    <tr>
                        <td><input type="text" name="city" placeholder="City"></td>
                    </tr>
                </table>
                    
                     <input type="submit" name="button" value="Signup..." style="background:white; height:30px;margin-left:150px;margin-top: 20px;" align="center">
            </form>
        </div>
        
        <div id="footer">
            <ul>
                <li>Contact us</li>
                <li>Suggestion</li>
                <li>Feedback</li>
            </ul>
            
        </div>
       </body>
</html>

            
            
            
            
            
            
            
            
            
            
            
            
            
            
            