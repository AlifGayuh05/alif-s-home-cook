<?php

include '../connect.php';

$email = @$_GET['email'];
$query = "DELETE FROM reg WHERE email = '$email'";
$result = $connect->query($query);
$num = mysqli_affected_rows($connect);

if ($num > 0){
    echo "Delete Completed";
} else {
    echo "Delete Failed";
}
?>