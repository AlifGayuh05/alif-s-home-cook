<?php

session_start();

include '../connect.php';

$email = $_POST['email'];
$password = $_POST['password'];   

$sql = "SELECT * FROM reg WHERE email = '$email'";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

if($num == 1){
    echo "<div>Failed To Register<a href='../home/index.html'>back</a></div>";
    header("location: ../home/index.html");
    $_SESSION['reg'] = $email;
  }else{
    header("location: login.php");
    echo "<div>failed to register <a href='login.php'>back</a></div>";
  };
?>