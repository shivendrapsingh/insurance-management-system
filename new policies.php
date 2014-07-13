<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="temp style.css"/>
        
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php session_start(); ?>
        
        
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
            <ul>
                <li><a href="health_insurance.php">Health insurance</a></li>
                <li><a href="house_insurance.php">House insurance</a></li>
                <li><a href="life_insurance.php">Life insurance</a></li>
                <li><a href="loan.php">Loan</a></li>
            </ul> 
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

