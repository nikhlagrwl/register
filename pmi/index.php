<?php 
include('server.php'); 
//$errors = array();
if(isset($_POST['register'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']); 

    if (empty($username) or empty($email) or empty($password_1) or empty($password_2)) {
          ?>
            <script type="text/javascript">
                alert('Empty fields found!');
            </script>
          <?php
          die(mysqli_error($db));
          header("Location: index.php");
      }  
      
    else {
        if($password_1 == $password_2)
        {
            $password = md5($password_1);
            $query = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";
            $exec = mysqli_query($db, $query);
            ?>
                <script type="text/javascript">
                    alert('User created successfully!');
                </script>
            <?php
        }
        else{
            ?>
                <script type="text/javascript">
                    alert('Two passwords should match');
                    die(mysqli_error($db));
                    header("Location:index.php");
                </script>
            <?php
        }
    }    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Registration Page
        </title>
    </head>

    <body>
        <h1>Register</h1>
        <form action = "index.php" method = "POST">
        
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