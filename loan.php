
<?php
session_start();
include 'connect.php';
$new_loanamt=$new_timeperiod=$new_interestrate=$new_emi=$new_date=$new_llcustid="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $new_loanamt=$_POST["loanamt"];
    $new_timeperiod=$_POST["time"];
    $new_interestrate=$_POST["rate"];
    $new_emi=$_POST["emi"];
    $new_date=date("y/m/d");
    $new_loantype="loan";
    $new_llcustid=$_SESSION['cust_id'];
    $query=mysql_query("insert into loan(loan_amt,time_period,rate_of_interest,emi,loan_date,type,cust_id) values ('$new_loanamt','$new_timeperiod','$new_interestrate','$new_emi','$new_date','$new_loantype','$new_llcustid')");
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
            <form method="POST" action="loan.php">
                
                
                <table>
                    
                    <tr>
                        <td>Loan amount:<input type="text" name="loanamt"></td>
                    </tr>
                    
                    <tr>
                        <td>Time Period <input type="text" name="time"></td>
                    </tr>
                    
                    <tr>
                        <td>Rate of interest<input type="text" name="rate"></td>
                    </tr>
                    
                    <tr>
                        <td>EMI<input type="text" name="emi"></td>
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


