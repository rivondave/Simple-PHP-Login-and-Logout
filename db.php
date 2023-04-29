<?php
$conn = mysqli_connect("hostname","username","password","database"); //hostname, username, password, database

if(!$conn){
    echo 'This is not connected to the database';
}
?>
