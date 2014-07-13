

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
                    <tr><td><a href='home customer.php'><h2>Home</h2></a></td>
                        <td>.                           .</td>
                       <td>
                           <?php
                        //echo "<h2>Welcome   <a href='profile.php'>".$_SESSION['loginid']."</a><h2>";
                        ?>
                        </td>
                    </tr>
                </table>
                
            <?php
            include 'connect.php';
            session_start();
            $cust=$_SESSION['cust_id'];
            $query=mysql_query("select * from policy where cust_id='$cust'");
            if(!$query)
            {
                echo mysql_error();
            }
            while($row= mysql_fetch_array($query))
            {
                if($row['type']=="health")
                {
                    echo "<h3>Health Insurance<h3>";
                    echo "Amount: ".$row['premium_amt']."<br>";
                    echo "Purchase date: ".$row['purchase_date']."<br><br><br>";
                }
                if($row['type']=="life")
                {
                    echo "<h3>Life Insurance<h3>";
                    echo "Amount: ".$row['premium_amt']."<br>";
                    echo "Purchase date: ".$row['purchase_date']."<br><br><br>";
                }
                if($row['type']=="house")
                {
                    echo "<h3>House Insurance<h3>";
                    echo "Amount: ".$row['premium_amt']."<br>";
                    echo "Purchase date: ".$row['purchase_date']."<br><br><br>";
                }
                if($row['type']=="loan")
                {
                    echo "<h3>Loan<h3>";
                    echo "Amount: ".$row['premium_amt']."<br>";
                    echo "Purchase date: ".$row['purchase_date']."<br><br><br>";
                }
            }
            
            

            ?>  
        </div>  
        </div>
            </div>
           
    </div>     
                
        
        
                
                
                
        
            </div>
        </div>
    </body>
</html>


