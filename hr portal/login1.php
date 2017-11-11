<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
//      if(empty($_POST["username"]))
//          $nameErr = "Name is required";;
//      if(empty($_POST["password"]))
//          echo "Password is Required";
      $myusername = mysqli_real_escape_string($dbConn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($dbConn,$_POST['password']); 
      
      $sql = "select username and password from tbl_login where username='$myusername' and password='$mypassword'";
      $result = mysqli_query($dbConn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
//         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
         
      }else {
//         $error = "Your Login Name or Password is invalid";
//         echo "$error";
//         header("location: sign_in.php");
         echo ("<script type='text/javascript'> alert('Username or Password Invalid'); window.location.href='sign_in.php';</script>");
//         header("location: sign_in.php");
//          echo ("<SCRIPT LANGUAGE='JavaScript'>
//            window.alert('invalid username or password')
//            window.location.href='sign_in.php';
//                    </SCRIPT>");
      }
   }
