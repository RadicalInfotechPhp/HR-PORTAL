<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo '

            <form action="Reset.php" method="POST">

            E-mail Address: <input type="text" name="email" size="20" /><br />

            New Password: <input type="password" name="password" size="20" /><br />

            Confirm Password: <input type="password" name="confirmpassword" size="20" /><br />

            <input type="hidden" name="q" value="';

            if (isset($_GET["q"])) {

                echo $_GET["q"];

            }

            echo '" />
                <input type="submit" name="ResetPasswordForm" value=" Reset Password " />

                </form>';

 

?>

    </body>
</html>
