<?php
session_start();
include_once("db.php");

if(isset($_POST["login"])){
    $uname = $_POST["name"];
    $password = $_POST["password"];

    if(!empty($uname) && !empty($password)){
        $q = mysqli_query($conn, "SELECT * FROM user WHERE USERNAME = '$uname' AND PASSWORD = '$password' ");
        $records = mysqli_fetch_assoc($q);

        if($records){
            $_SESSION["username"] = $uname;
            $_SESSION["password"] = $password;
            echo header("Location: home.php");
        }else{
            echo "<h1> Incorrect username and password! </h1>";
        }
    }
    else{
        echo "<h1> Please fill all your form details </h1>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script language="javascript" type="text/javascript">
    window.history.forward();
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Instagram</title>
</head>
<body>
    <form action="" method="POST">
        <label>Username</label>
        <br>
        
        <input type="text" name="name" id="">
        <br>
        <label>Password</label>
        <br>
        
        <input type="password" name="password" id="">
        <br>
        <br>
        <button type="submit" name="login">Login</button>
        <p>Don't have an account? <a href="register.php">Register Here</a></p>
        <p>Forgot Password? <a href="cpasswd.php">Change Password</a></p>
    </form>

</body>
</html>
