<?php
include ('connect.php');
session_start();
$answer="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
     $answer=$_POST["reply"];
     /*$result=mysql_query("select query_id from query where topic_name='$topic_check'");
     while($row=mysql_fetch_array($result))
     {
         $t_id=$row['topic_id'];
     }

$date_time=date('y/m/d h:i:s');*/
//insert the answerd part in table
     $u_id=$_SESSION['loginid'];
     $q_id=$_SESSION['queryid'];
$ins=mysql_query("insert into reply(replied_by,reply,query_id) values ('$u_id','$answer','$q_id')");
if(!$ins)
    echo "couldn't connect".mysql_error();
else{ 
    //heading back to the question portion to prevent the resubmition on refreshing the browser
header("Location: discussion_forum_company.php");
 }
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
        

                <div id="main">
            <div>
                <table>
                    <tr><td><a href='home_company_official.php'><h2>Home</h2></a></td>
                        <td>.                           .</td>
                       <td>
             <?php
                        echo "<h2>Welcome   <a href='profile.php'>".$_SESSION['loginid']."</a><h2>";
                        ?>
                        </td>
                    </tr>
                </table>
                <?php
                include 'connect.php';
                $ques1=mysql_query("select * from query where query_id not in(select query_id from reply)");
                if(!$ques1)
                {
                   echo "couldn't connect:".mysql_error(); 
                }
                while($row=mysql_fetch_array($ques1))
                {
                    $_SESSION['queryid']=$row['query_id'];
                    echo "Question: ".$row['query']."    by    ".$row['posted_by']."<br><br>";
                    echo "<form method='POST' action=''>
                      <textarea rows='5' cols='60' name='reply' style='resize:none'></textarea><br>
                      <input type='submit' name='submit' value='Add'>
                      </form>";
                }
                           
                           
            
            /*include 'connect.php';
            //extracting the topic from the url
            $check=mysql_query("select * from topic where topic_name='$name'");
            $post=mysql_query("select topic.topic_name,topic.topic_by,topic.category,topic.date_time,users.user_id,users.fname from topic left join users on topic.topic_by=users.user_id where topic_name='$name'");
            
            if(mysql_num_rows($check)!=0)
            {
                while($row=  mysql_fetch_array($post))
                {
                    $question_userid=$row['user_id'];
                  echo "<p style='font-size:25px;color:grey;'>".$name."<br>";
                  echo "<span style='font-size:15px'>by <b><a href='profile_other.php?id=$question_userid'>".$row['fname']."</a></b> in <b>".$row['category']."</b></span></p>";
                  echo "<form method='POST' action=''>
                      <textarea rows='13' cols='60' name='reply' style='resize:none'></textarea><br>
                      <input type='submit' name='submit' value='Add'>
                      </form>";
                }  
            }
               */ 
                
                ?>
                
                </div>  
        </div>
            </div>
           
    </div>     
                
        
        
        
        
        
        
        
        
            </div>
        </div>
    </body>
</html>
