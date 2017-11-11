<?php


require("config.php");

session_start();
if(isset($_POST['submit']))
{
    $username=mysqli_real_escape_string($dbConn,$_POST['username']);
    $password=mysqli_real_escape_string($dbConn,$_POST['password']);
    if(!($_POST['username']) | !($_POST['password']))
    {
       die("username or Password not set"); 
       
    }
//    elseif(!isset($_POST['pwd'])) 
//    {
//        die("password not set"); 
//    }
   
    $query= mysqli_query($dbConn,"select username and password from tbl_login where username='$username' and password='$password'");
    
    if(mysqli_num_rows($query)>0)
    {
        
         
    
        $_SESSION['username']=$username;
         header("location: index.php");   
        
//        die("login successful");
        
    }
    else
    {
        die("incorrect password and username");
    }
}



