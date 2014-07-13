<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="temp style.css"/>
        
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <div>
        <?php session_start(); ?>
        <div id="header">
            
            <h1 id="logo" align="center">Insurance Management System</h1>
            
        </div>
        
            <div> 
        <div id="menu" style="float:left; width:20%">
            <table border="0" align="center" cellpadding="5" cellspacing="12"><br><br><br><br><br>
                <tr bgcolor="white"><td style="border:1px solid black"> <a href="home_company_official.php">Home</a></td></tr>
                <tr bgcolor="white"><td style="border:1px solid black"><a href="new_policy_request.php">Policy Requests</a></td></tr>
                <tr bgcolor="white"><td style="border:1px solid black"><a href="Generate_policies.php">Generate Policies</a></td></tr>
                <tr bgcolor="white"><td style="border:1px solid black"><a href="index.php">Sign Out</a></td></tr>
                <tr bgcolor="white"><td style="border:1px solid black"><a href="discussion_forum_company.php">Customer Queries</a></td></tr>
            </table>
        </div>
        

        <div id="main" style="float:right; width:50%">
            <div style="float:left">
            <?php
            include 'connect.php';
                
                //to display which user is logged in
                echo "<h2>Welcome   <a href='profile.php'>".$_SESSION['loginid']."</a><h2>";
                

                ?>  
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

