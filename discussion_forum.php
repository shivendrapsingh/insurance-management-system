
<?php
include 'connect.php';
session_start();
$new_query=$new_postedby="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $new_query=$_POST["query"];
    $new_postedby=$_SESSION['loginid'];

    $query=mysql_query("insert into query(query,posted_by) values ('$new_query','$new_postedby')");
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
                <tr bgcolor="white"><td style="border:1px solid black"><a href="customer_home_policies.php">Your Policies</a></td></tr>
                <tr bgcolor="white"><td style="border:1px solid black"><a href="new policies.php">New Policies</a></td></tr>
                <tr bgcolor="white"><td style="border:1px solid black"><a href="index.php">Sign Out</a></td></tr>
            </table>
        </div>
        

        <div id="main" style="float:right; width:50%">
            
            <div id="sign_block" align="left"> 
            <form method="POST" action="discussion_forum.php">
                <h2>Ask a Question</h2><br>
            <textarea rows="8" cols="60" name="query"></textarea>
            <input type="submit" name="button "value="submit">    
                
            </form>
        </div> 
            
            <?php
            $val=$_SESSION['loginid'];
            $query1=mysql_query("select * from query where posted_by='$val'");
            if(!$query1)
            {
                echo "couldn't connect:".mysql_error();
            }
            while($row=mysql_fetch_array($query1))
            {
                $queryid=$row['query_id'];
                $ques=$row['query'];
                echo "<br><br>Your Question:  ".$ques."<br>";
                
                $ans=mysql_query("select * from reply where query_id='$queryid'");
                if(!$ans)
                {
                    echo "couldn't connect:".mysql_error();
                }
                while($row1=mysql_fetch_array($ans))
                {
                    echo "Ans: ".$row1['reply'];
                }
            }
            
            ?>
            
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


