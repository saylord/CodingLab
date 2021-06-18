<?php
require('connect.php');
session_start();
$newpass = $_POST['password1'];

$sql = "UPDATE users SET Password = '".$newpass."' WHERE users.email = '".$_SESSION['email']."'";

        $result = mysqli_query($conn,$sql);

        header('location: login.php')

?>