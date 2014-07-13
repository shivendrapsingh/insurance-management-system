
<?php
include 'connect.php';
session_start();
$new_buildingcost=$new_electricalcost=$new_hsum=$new_hcustid="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $new_buildingcost=$_POST["buildingcost"];
    $new_electricalcost=$_POST["electricalcost"];
    $new_hsum=$_POST["sum"];
    $new_htype="house";
    $new_hcustid=$_SESSION['cust_id'];
    $query=mysql_query("insert into house_insurance(cust_id,buildingcost,electricalcost,sum_insured,type) values ('$new_hcustid','$new_buildingcost','$new_electricalcost','$new_hsum','$new_htype')");
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
            <form method="POST" action="house_insurance.php">
                
                
                <table>
                    
                    <tr>
                        <td>Building Cost:<input type="text" name="buildingcost"></td>
                    </tr>
                    
                    <tr>
                        <td>Electrical Cost<input type="text" name="electricalcost"></td>
                    </tr>
                    
                    <tr>
                        <td>Total Amount<input type="text" name="sum"></td>
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
    </body>
</html>


