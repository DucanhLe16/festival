<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="search">
    <h2>Login</h2>
    <form action="login.php" method="post">
        <table>
            <tr>
                <td>Username: </td>
                <td><input type="text" placeholder="Enter your Username" name="username" autofocus></td> 
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="password" placeholder="Enter your Password" name ="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
    require_once 'db_login_config.php';

    if(isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        $r = mysqli_query($conn, "SELECT * from admin where name = '$username' and password = '$password'" );
        $row = mysqli_fetch_assoc($r);

        if($username === $row["name"] && $password === $row["password"]){
            header("Location: admin.php");
        }
        else
            echo "Username or password is not correct!";
    }
?>