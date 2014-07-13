<?php
include 'connect.php';
session_start();
$approve="";
if($_SERVER['REQUEST_METHOD']=="POST")
{
    
    if($_POST['type']=="health")
    {
        $cust_id=$_POST["cust_id"];
        $type=$_POST["type"];
        $date=date("y/m/d");
        $premium_amt=$_POST['sum_insured'];
        $approve=$_POST['approve'];
        $app=mysql_query("update health_insurance set approve='$approve' where cust_id='$cust_id'");
        if(!$app)
        {
            echo mysql_error();
        }
        $query=mysql_query("insert into policy (cust_id,type,purchase_date,premium_amt,policy_start_date,approve) values ('$cust_id','$type','$date','$premium_amt','$date','$approve')");
        if(!$query)
        {
            echo mysql_error();
        }
    }
    
    
    if($_POST['type']=="house")
    {
        $cust_id=$_POST["cust_id"];
        $type=$_POST["type"];
        $date=date("y/m/d");
        $premium_amt=$_POST['sum_insured'];
        $approve=$_POST['approve'];
        $app=mysql_query("update house_insurance set approve='$approve' where cust_id='$cust_id'");
        if(!$app)
        {
            echo mysql_error();
        }
        $query=mysql_query("insert into policy (cust_id,type,purchase_date,premium_amt,policy_start_date,approve) values ('$cust_id','$type','$date','$premium_amt','$date','$approve')");
        if(!$query)
        {
            echo mysql_error();
        }
        
    }
    
        
    if($_POST['type']=="life")
    {
        $cust_id=$_POST["cust_id"];
        $type=$_POST["type"];
        $date=date("y/m/d");
        $premium_amt=$_POST['sum_insured'];
        $approve=$_POST['approve'];
        $app=mysql_query("update life_insurance set approve='$approve' where cust_id='$cust_id'");
        if(!$app)
        {
            echo mysql_error();
        }
        $query=mysql_query("insert into policy (cust_id,type,purchase_date,premium_amt,policy_start_date,approve) values ('$cust_id','$type','$date','$premium_amt','$date','$approve')");
        if(!$query)
        {
            echo mysql_error();
        }
        
    }
    
    
     if($_POST['type']=="loan")
    {
        $cust_id=$_POST["cust_id"];
        $type=$_POST["type"];
        $date=date("y/m/d");
        $premium_amt=$_POST['sum_insured'];
        $approve=$_POST['approve'];
        //$premium_paying=$_POST['emi'];
        $app=mysql_query("update loan set approve='$approve' where cust_id='$cust_id'");
        if(!$app)
        {
            echo mysql_error();
        }
        $query=mysql_query("insert into policy (cust_id,type,purchase_date,premium_amt,policy_start_date,approve) values ('$cust_id','$type','$date','$premium_amt','$date','$approve')");
        if(!$query)
        {
            echo mysql_error();
        }
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
           
            //$query1=mysql_query("select * from health_insurance where approve='no'");    
            $query1=mysql_query("select health_insurance.cust_id,health_insurance.sum_insured,health_insurance.type,customer.name from health_insurance left join customer on health_insurance.cust_id=customer.cust_id where health_insurance.approve!='yes'");
            if(!$query1)
            {
                echo "Couldn't connect:".mysql_error();
            }
            
            while($row=mysql_fetch_array($query1))
            {
                echo "Health Insurance request by  ".$row['name']."<br>Sum insured=".$row['sum_insured']."<br>";
                echo "<form method='POST' action='new_policy_request.php'>";
                echo "<input type='hidden' value=".$row['sum_insured']." name='sum_insured'></input>";
                echo "<input type='hidden' value=".$row['cust_id']." name='cust_id'></input>";
                echo "<input type='hidden' value=".$row['type']." name='type'></input>";
                echo "<input type='radio' value='yes' name='approve'>Yes</input>";
                echo "<input type='radio' value='no' name='approve'>No</input><br>";
                echo "<input type='submit' value='submit' name='submit'></form><br><br><br>";
            }
            
                
            $query2=mysql_query("select house_insurance.cust_id,house_insurance.buildingcost,house_insurance.electricalcost,house_insurance.sum_insured,customer.name,house_insurance.type,house_insurance.approve from house_insurance left join customer on house_insurance.cust_id=customer.cust_id where house_insurance.approve!='yes'");
            if(!$query2)
            {
                echo "Couldn't connect:".mysql_error();
            }
            
            while($row=mysql_fetch_array($query2))
            {
                echo "House Insurance request by  ".$row['name']."<br>";
                echo "Building Cost: ".$row['buildingcost']."  Electrical Cost: ".$row['electricalcost']."  Sum insured: ".$row['sum_insured']."<br>";
                echo "<form method='POST' action='new_policy_request.php'>";
                echo "<input type='hidden' value=".$row['sum_insured']." name='sum_insured'></input>";
                echo "<input type='hidden' value=".$row['cust_id']." name='cust_id'></input>";
                echo "<input type='hidden' value=".$row['type']." name='type'></input>";
                echo "<input type='hidden' value='yes' name='approve'></input>";
                echo "<input type='radio' value='yes' name='approve'>Yes</input>";
                echo "<input type='radio' value='no' name='approve'>No</input><br>";
                echo "<input type='submit' value='submit' name='submit'></form><br><br><br>";;
            }
            
            $query3=mysql_query("select life_insurance.cust_id,life_insurance.life_cover,life_insurance.premium_paying,life_insurance.nominee_name,life_insurance.type,life_insurance.approve,customer.name from life_insurance left join customer on life_insurance.cust_id=customer.cust_id where life_insurance.approve!='yes'");
            if(!$query3)
            {
                echo "Couldn't connect:".mysql_error();
            }
            
            while($row=mysql_fetch_array($query3))
            {
                echo "Life Insurance request by  ".$row['name']."<br>";
                echo "Life cover: ".$row['life_cover']."  Premium paying: ".$row['premium_paying']."  Nominee name: ".$row['nominee_name']."<br>";
                echo "<form method='POST' action='new_policy_request.php'>";
                echo "<input type='hidden' value=".$row['life_cover']." name='sum_insured'></input>";
                echo "<input type='hidden' value=".$row['cust_id']." name='cust_id'></input>";
                echo "<input type='hidden' value=".$row['type']." name='type'></input>";
                echo "<input type='hidden' value=".$row['premium_paying']." name='premium'></input>";
                echo "<input type='radio' value='yes' name='approve'>Yes</input>";
                echo "<input type='radio' value='no' name='approve'>No</input><br>";
                echo "<input type='submit' value='submit' name='submit'></form><br><br><br>";
            }
            
            $query4=mysql_query("select loan.cust_id,loan.loan_amt,loan.time_period,loan.rate_of_interest,loan.emi,loan.loan_date,loan.type,loan.approve,customer.name from loan left join customer on loan.cust_id=customer.cust_id where loan.approve!='yes'");
            if(!$query4)
            {
                echo "Couldn't connect:".mysql_error();
            }
            while($row=mysql_fetch_array($query4))
            {
                echo "Loan request by  ".$row['name']."<br>";
                echo "Loan amount: ".$row['loan_amt']."  Time period: ".$row['time_period']."  Rate of interest: ".$row['rate_of_interest']."   EMI: ".$row['emi']."<br>";
                echo "<form method='POST' action='new_policy_request.php'>";
                echo "<input type='hidden' value=".$row['loan_amt']." name='sum_insured'></input>";
                echo "<input type='hidden' value=".$row['cust_id']." name='cust_id'></input>";
                echo "<input type='hidden' value=".$row['type']." name='type'></input>";
                echo "<input type='hidden' value=".$row['emi']." name='premium'></input>";
                echo "<input type='radio' value='yes' name='approve'>Yes</input>";
                echo "<input type='radio' value='no' name='approve'>No</input><br>";
                echo "<input type='submit' value='submit' name='submit'></form><br><br><br>";
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

