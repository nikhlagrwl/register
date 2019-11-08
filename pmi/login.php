<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            test
        </title>
    </head>

<body>
        <h1>login</h1>
        <form action = "login.php" method = "post">
            <div>
                    <label for="username">username</label>
                    <input type = "text" placeholder="Username" name="username"/> 
            </div>
            <div>
                    <label for="pasword">Password</label>
                    <input type = "password" placeholder="Password" name="password_1"/>
            </div>
            <button type="submit" name="login_user">Login</button>
        </form>
</body>
</html>