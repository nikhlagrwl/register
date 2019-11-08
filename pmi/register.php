<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Registration Page
        </title>
    </head>

    <body>
        <h1>Register</h1>
        <form action = "register.php" method = "post">
        <?php include('error.php') ?>
            <div>
                <label for="username">Username</label>
                <input type = "text" placeholder="Username" name="username"/> 
            </div>
            <div>
                    <label for="email">E-mail</label>
                    <input type = "email" placeholder="E-mail" name="email"/> 
            </div>
            <div>
                    <label for="password">Password</label>
                    <input type = "password" placeholder="Password" name="password_1"/>
            </div>
            <div>
                    <label for="password">Confirm Password</label>
                    <input type = "password" placeholder="Confirm Password" name="password_2"/>
            </div>
            <button type="submit" name="register">Submit</button>
            <a href="login.php">already a member</a>
        </form>
    </body>


</html>