<?php
session_start();
include_once("db.php");

if (isset($_POST["logout"])){
    session_abort();
    header("Location: index.php");
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
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
        <form action="" method="post">
            <a href="index.php" style="color: black;"><i class="fa-solid fa-right-from-bracket" name="logout"></i></a>
        </form>
        <div class="img">
            <a href="profile.php"><img src="image/profile.png"></a>
            <p><?php echo "Welcome back, " . $_SESSION["username"]."<br>"?></p>
        </div>
</body>
</html>
