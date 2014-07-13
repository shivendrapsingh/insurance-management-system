
<?php
include 'connect.php';
session_start();
$new_lifecover=$new_premium=$new_nominee=$new_lcustid="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $new_lifecover=$_POST["lifecover"];
    $new_premium=$_POST["premium"];
    $new_nominee=$_POST["nominee"];
    $new_ltype="life";
    $new_lcustid=$_SESSION['cust_id'];
    $query=mysql_query("insert into life_insurance(cust_id,life_cover,premium_paying,nominee_name,type) values ('$new_lcustid','$new_lifecover','$new_premium','$new_nominee','$new_ltype')");
    if(!$query)
    {echo "couldn't connect".mysql_error();}
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="temp style.css"/>
        
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        
        
        <div>
        <div id="header">
            
            <h1 id="logo" align="center">Insurance Management System</h1>
            
        </div>
        
            <div> 
        <div id="menu" style="float:left; width:20%">
            <table border="0" align="center" cellpadding="5" cellspacing="12"><br><br><br><br><br>
                <tr bgcolor="white"><td style="border:1px solid black"> <a href="home customer.php">Home</a></td></tr>
                <tr bgcolor="white"><td style="border:1px solid black"><a href="">Your Policies</a></td></tr>
                <tr bgcolor="white"><td style="border:1px solid black"><a href="new policies.php">New Policies</a></td></tr>
                <tr bgcolor="white"><td style="border:1px solid black"><a href="index.php">Sign Out</a></td></tr>
            </table>
        </div>
        

        <div id="main" style="float:right; width:50%">
            <div style="float:left">
            <div id="sign_block"> 
            <p align="center">
            <form method="POST" action="life_insurance.php">
                
                
                <table>
                    
                    <tr>
                        <td>Life Cover amount:<input type="text" name="lifecover"></td>
                    </tr>
                    
                    <tr>
                        <td>Premium Paying <input type="text" name="premium"></td>
                    </tr>
                    
                    <tr>
                        <td>Nominee Name<input type="text" name="nominee"></td>
                    </tr>
                    
                            
                       
                </table>
                    Click submit to send for approval
                     <input type="submit" name="button" value="Submit" style="background:white; height:30px;margin-left:150px;margin-top: 20px;" align="center">
            </form>
        </div> 
        </div>  
        </div>
            </div>
           
    </div>     
            
                <div id="footer">
            <ul>
                <li>Contact us</li>
                <li>Suggestion</li>
                <li>Feedback</li>
            </ul>
            
        </div>
        
            </div>
        </div>
    </bod>
</html>


