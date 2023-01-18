<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SignUp Page <span><a href="index.php">Login</a></span></h1>
    <form method="post" action="signup.php">
        <div>
            <input type="text" name="username" placeholder="Enter username">
        </div>
        <div>
            <input type="email" name="email" placeholder="Enter email">
        </div>
        <div>
            <input type="password" name="password" placeholder="Enter password">
        </div>
        <div>
            <input type="submit" name="signup" value="Sign up">
        </div>
    </form>
</body>
</html>
<?php
    if(isset($_POST['signup'])){
        $usr =  $_POST['username'];
        $em  = $_POST['email'];
        $pwd =  $_POST['password'];
        $encryted_pwd = password_hash($pwd, PASSWORD_DEFAULT);

        //Define the db credentials
        $db_host = 'localhost';
        $db_user = 'root';
        $db_password = '';
        $db_name = 'may_22';

        $db_connect = new mysqli($db_host, $db_user, $db_password, $db_name);
        if($db_connect->connect_error){
            echo "Failed";
        }

        $sql = "INSERT INTO details(username, email, password) VALUES('$usr', '$em', '$encryted_pwd')";

        if($db_connect->query($sql) === TRUE){
            echo "Registration successful";
        }else{
            echo "Registration failed". $db_connect->error;
        }

        $db_connect->close();
    }
?>