
<?php
include 'connect.php';
session_start();
$new_sum=$new_type=$new_custid="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $new_sum=$_POST["sum"];
    $new_type="health";
    $new_custid=$_SESSION['cust_id'];
    $query=mysql_query("insert into health_insurance(sum_insured,type,cust_id) values ('$new_sum','$new_type','$new_custid')");
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
            <form method="POST" action="health_insurance.php">
                
                
                <table>
                    
                    <tr>
                        <td>Enter the Amount:<input type="text" name="sum"></td>
                    </tr>
                   
                    <tr><td>
                            Click submit to send for approval
                        </td></tr>
                    
                  
                    
                    
                </table>
                    
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


