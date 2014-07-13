<?php
include 'connect.php';

$fnameErr=$lnameErr=$dobErr=$loginidErr=$passwordErr=$addressErr=$phoneErr=$emailErr=$genderErr=$nationalityErr=$countryErr=$stateErr=$cityErr=$pincodeErr=$occupationErr="";   //define error variables and set to empty values
$new_fname=$new_lname=$new_dob=$new_loginid=$new_password=$new_address=$new_phone=$new_email=$new_gender=$new_nationality=$new_country=$new_state=$new_city=$new_pincode=$new_occupation="";    //define variables for taking input
$query1=$query2=$query3="";

//firstname validation
if($_SERVER["REQUEST_METHOD"]=="POST")        
{
    if(empty($_POST["fname"]))     //check if the name area is empty then display name is required
    {
        $fnameErr="Firstname is required";
    }
    else
    {
        $new_fname=test_input($_POST["fname"]);     //now take input as the name after checking using test_input() function
        if(!preg_match("/^[a-zA-Z ]*$/",$new_fname))      //check name enterred with regular expression     
        {
            $fnameErr="Only letter and white spaces allowed";
        }
    }
}
//lastname validation
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($_POST["lname"]))
    {
        $lnameErr="Lastname is required";
    }
    else
    {
        $new_lname=$_POST["lname"]; 
        if(!preg_match("/^[a-zA-Z ]*$/",$new_lname))      //check name enterred with regular expression     
        {
            $lnameErr="Only letter and white spaces allowed";
        }
        
    }
}



if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($_POST["dob"]))
    {
        $dobErr="date is required";
    }
    else
    {
        $new_dob=$_POST["dob"]; 
    }
}



//username validation
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($_POST["loginid"]))
    {
        $loginidErr="loginid is required";
    }
    else
    {
        $new_loginid=test_input($_POST["loginid"]);
        /*$query1=mysql_query("SELECT user_name FROM users WHERE user_name='$new_username'");
        
        if(mysql_num_rows($query1)!=0)
        {
            $loginidErr="loginid already exists";
        */
    }
        
}




//password validation
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($_POST["password"]))
    {
        $passwordErr="Password is required";
    }
 else 
 {
     $new_password=test_input($_POST["password"]);
    if(!preg_match("/^[a-zA-Z ]*$/",$new_password))
    {
       $passwordErr="Invalid password"; 
    }
 }
}



//registration number validation
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($_POST["address"]))
    {
        $addressErr="Address is required";
    }
 else 
 {
     $new_address=test_input($_POST["address"]);
  
 }
}



if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($_POST["phone"]))
    {
        $phoneErr="Phone number is required";
    }
 else 
 {
     $new_phone=test_input($_POST["phone"]);
  
 }
}



//email validation
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($_POST["email"]))
    {
       $emailErr="email is required"; 
    }
    else
    {
        $new_email=test_input($_POST["email"]);
        if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$new_email))
        {
            $emailErr="Invalid email";
        }
       /* else if(mysql_num_rows($query3)!=0)
        {
            $emailErr="This email already exists";
        }*/
    }
}



//validation for gender
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($_POST["gender"]))
    {
        $genderErr="Gender missing";
    }
    else 
    {
    $new_gender = $_POST["gender"]; 
    }
 }
   
 
 //validation for school
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
       if(empty($_POST["nationality"]))
       {
           $nationalityErr="nationality missing";
       }
   else
   {
       $new_nationality=$_POST["nationality"];
   }
   }
   
   
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
       if(empty($_POST["country"]))
       {
           $countryErr="country missing";
       }
   else
   {
       $new_country=$_POST["country"];
   }
   }
   
   
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
       if(empty($_POST["state"]))
       {
           $stateErr="state missing";
       }
   else
   {
       $new_state=$_POST["state"];
   }
   }
   
   
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
       if(empty($_POST["city"]))
       {
           $cityErr="city missing";
       }
   else
   {
       $new_city=$_POST["city"];
   }
   }
   
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
       
       $new_pincode=$_POST["pincode"];
   }
   
   
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
       
       $new_occupation=$_POST["occupation"];
   }


$new_date=date("y/m/d");



function test_input($data)     //test_input function
{
  $data=trim($data);                    //for trimming the spaces
  $data=stripslashes($data);            //for trimming backslashes
  $data=htmlspecialchars($data);         
  return $data;
}



if($_SERVER["REQUEST_METHOD"]=="POST")
{
/*if(!$fnameErr && !$lnameErr && !$loginidErr && !$passwordErr && !$addressErr && !$phoneErr && !$emailErr && !$genderErr && !$nationalityErr && !$countryErr && !$stateErr && !$cityErr)
{
    $ins=mysql_query("insert into customer (name,last_name,dob,loginid,password,address,ph_no,email_id,gender,nationality,country,state,city,pincode,occupation) values ('$new_fname','$new_lname','$new_dob','$new_loginid','$new_password','$new_address','$new_phone',$new_email','$new_gender','$new_nationality','$new_country','$new_state','$new_city','$new_pincode','$new_occupation')");
    if(!$ins)
    {echo "I will not allow you,contact the admin";}
}*/
    $query=mysql_query("insert into customer (name,last_name,dob,loginid,password,address,ph_no,email_id,gender,nationality,country,state,city,pincode,occupation) values ('$new_fname','$new_lname','$new_dob','$new_loginid','$new_password','$new_address','$new_phone','$new_email','$new_gender','$new_nationality','$new_country','$new_state','$new_city','$new_pincode','$new_occupation')");
    if(!$query)
    {echo "couldn't connect".mysql_error();}
}

?>




<!DOCTYPE html>
<html>
    <head>
        <title>Insurance Management System</title>
        <link rel="stylesheet" type="text/css" href="sign up style.css"/>
        <link rel="stylesheet" type="text/css" href="temp style.css"/>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>        
        <div id="header">
            <h1 id="logo" align="center">Insurance Management System</h1>
        </div>
        
        
         
        <div id="sign_block"> 
            <p align="center">
            <form method="POST" action="register customer.php">
                
                <table>
                    
                    <tr>
                        <td><input type="text" name="fname" placeholder="FirstName"></td>
                        <?php
                        if($fnameErr)
                        {
                        echo "<td><span class='error'>*".$fnameErr."</span></td>";
                        }
                        ?>
                    </tr>
                    
                  
                    <tr>
                        <td><input type="text" name="lname" placeholder="Lastname"></td>
                        <?php
                        if($lnameErr)
                        {
                        echo "<td><span class='error'>*".$lnameErr."</span></td>";
                        }
                        ?>
                    </tr>
                    
                    
                    <tr>
                        <td><input type="text" name="dob" placeholder="Date of birth  yyyy-mm-dd"></td>
                        <?php
                        if($dobErr)
                        {
                            echo "<td><span class='error'>*".$dobErr."</span></td>";
                        }
                        ?>
                    </tr>
                    
                    
                    
                    <tr>
                        <td><input type="text" name="loginid" placeholder="Login id"></td>
                        <?php
                        if($loginidErr)
                        {
                            echo "<td><span class='error'>*".$loginidErr."</span></td>";
                        }
                        ?>
                    </tr>
                    
                    
                    <tr>
                        <td><input type="password" name="password" placeholder="Password"></td>
                        <?php
                        if($passwordErr)
                        {
                            echo "<td><span class='error'>*".$passwordErr."</span></td>";
                        }
                        ?>
                    </tr>
                    
                    
                    <tr>
                        <td><input type="text" name="address" placeholder="address"></td>
                        <?php
                        if($addressErr)
                        {
                            echo "<td><span class='error'>*".$addressErr."</span></td>";
                        }
                        ?>
                    </tr>
                    
                    
                    
                    <tr>
                        <td><input type="text" name="phone" placeholder="Phone number"></td>
                        <?php
                        if($phoneErr)
                        {
                            echo "<td><span class='error'>*".$phoneErr."</span></td>";
                        }
                        ?>
                    </tr>
                    
                    
                     <tr>
                        <td><input type="email" name="email" placeholder="xyz@abc.lmn"></td>
                        <?php
                        if($emailErr)
                        {
                            echo "<td><span class='error'>*".$emailErr."</span></td>";
                        }
                        ?>
                    </tr>
                    
                    
                    <tr>
                        <td>
                            Gender:
                            <input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="female">Female
                        </td>
                        <?php
                        if($genderErr)
                        {
                            echo "<td><span class='error'>*".$genderErr."</span></td>";
                        }
                        ?>
                    </tr>
                    
                    
                    
                    <tr>
                        <td><input type="text" name="nationality" placeholder="Nationality"></td>
                        <?php
                        if($nationalityErr)
                        {
                            echo "<td><span class='error'>*".$nationalityErr."</span></td>";
                        }
                        ?>
                    </tr>
                    
                   
                    <tr>
                        <td><input type="text" name="country" placeholder="Country"></td>
                        <?php
                        if($countryErr)
                        {
                            echo "<td><span class='error'>*".$countryErr."</span></td>";
                        }
                        ?>
                    </tr>
                    
                    
                    <tr>
                        <td><input type="text" name="state" placeholder="state"></td>
                        <?php
                        if($stateErr)
                        {
                            echo "<td><span class='error'>*".$stateErr."</span></td>";
                        }
                        ?>
                    </tr>
                    
                    <tr>
                        <td><input type="text" name="city" placeholder="City"></td>
                        <?php
                        if($cityErr)
                        {
                            echo "<td><span class='error'>*".$cityErr."</span></td>";
                        }
                        ?>
                    </tr>
                    
                    
                    
                    <tr>
                        <td><input type="text" name="pincode" placeholder="Pincode"></td>
                        <?php
                        if($pincodeErr)
                        {
                            echo "<td><span class='error'>*".$pincodeErr."</span></td>";
                        }
                        ?>
                    </tr>
                   
                    
                    
                    <tr>
                        <td><input type="text" name="occupation" placeholder="Occupation"></td>
                        <?php
                        if($occupationErr)
                        {
                            echo "<td><span class='error'>*".$occupationErr."</span></td>";
                        }
                        ?>
                    </tr>    
                </table>
                
                <input type="submit" name="button" value="Signup..." style="background:white; height:30px;margin-left:150px;margin-top: 20px;" align="center">
            </form>
            </div>
        
        
        <div id="footer">
            <ul>
                <li>Contact us</li>
                <li>Suggestion</li>
                <li>Feedback</li>
            </ul>
            
        </div>
       </body>
</html>

