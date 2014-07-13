<?php
session_start();
include 'connect.php';
$log_name=$pass="";
$userErr=$passErr="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($_POST["user_in"]))
    {
        $userErr="Username is required";
    }
    else
    {
        $log_name=$_POST["user_in"];
        
    }
    if(empty($_POST["pass_in"]))
    {
        $passErr="Password required";
    }
    else
    {
        $pass=$_POST["pass_in"];
    }

                

if(!$passErr && !$userErr)
{
                $sel=  mysql_query("select password,loginid,name from company_official where loginid='$log_name'");
                if(mysql_num_rows($sel)==0)
                    $userErr="Wrong User name";
                else
                    {
                    while($row=  mysql_fetch_array($sel))
                    {
                         if($row['password']==$pass)
                         {
                             $_SESSION['signed_in']=true;
                             $_SESSION['loginid']=$row['loginid'];
                             //$_SESSION['fname']=$row['fname'];
                             header('location:home_company_official.php');
                         }
                         else
                             $passErr="wrong password";
                    }
                    }
}
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Insurance Management System</title>
        <link rel="stylesheet" type="text/css" href="signin style.css"/>
        <link rel="stylesheet" type="text/css" href="temp style.css"/>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>        
        <div id="header">
            <h1 id="logo" align="center">Insurance Management System</h1>
        </div>
    
    </head>
    <body> 
        </div>
        <div id="sign_block">
            <form method="POST" action="login company official.php">
                <table>
                    <tr>
                        <td>Login ID</td>
                        <td><input type="text" name="user_in"></td>
                        <?php
                        if($userErr)
                        {
                        echo "<td><span class='error'>*".$userErr."</span></td>";
                        }
                        ?>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="pass_in"></td>
                        <?php
                        if($passErr)
                        {
                        echo "<td><span class='error'>*".$passErr."</span></td>";
                        }
                        ?>
                    </tr>
                    </table>
               
                <input type="submit" name="button" value="Go..." style="background:white; height:30px;margin-left:150px;margin-top: 20px;" align="center">
            </form>
            
            </div>
        <div id="footer">
            <ul>
                <li>Contact us</li>
                <li>Suggestion</li>
                <li>Feedback</li>
            </ul>
            
        
    </body>
</html>
