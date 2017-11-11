<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css"  type="text/css">
        <title>HR Portal</title>
    </head>
    <body>
        
        <div class="container-fluid ">
            <div class="container container-1 ">
                <div class="row">
                    
                    <div class="col-md-6 main-div-1">
                        <div class="div-1">
                            <img id="bg-img" src="images/bg 3.jpg">
                            <div class="text-img"><p>haiiighfgh</p><p>uioi</p></div>
                        </div>
                    </div>
                    <div class="col-md-6 main-div-2">
                        <div class="div-2">
<!--                            <h2 id="sign-h2">Radical Infotech</h>-->
                            <img id="logo" src="images/radical logo.jpg">
                            <h3 id="sign-h3">Sign in</h3>
                            <form action="login1.php" method="post" >
                                <div class="form-group">
                                    <label for="username" class="user_labl">Username:</label>
                                  <input type="username" class="form-control" id="username" placeholder="Enter username" name="username" required>
                                   
<!--                                  <input type="email" class="form-control" id="username" placeholder="Enter username" name="username">-->
                                </div>
                                <div class="form-group">
                                  <label for="pwd">Password:</label>
                                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
                                </div>
                                <div class="checkbox">
                                  <label><input type="checkbox" name="remember"> Remember me</label>
                                </div>
                                <button type="submit" name="submit" class="btn btn-default">Sign in</button>
                                <p></p>
                                <p>Not a member yet?</p><a href="">Sign Up Here</a>
                                <p></p>
                                <a href="">Forgot your password ?</a>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
   
        
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>
</html>
