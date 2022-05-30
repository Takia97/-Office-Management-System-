<?php
session_start();


$con = mysqli_connect('localhost', 'root');

if ($con) {
    echo "Connection Successful";
} else {
    echo "No connection";
}

mysqli_select_db($con, "intdb");

$name = $_POST['user'];
$pass = $_POST['password'];
$dept = $_POST['department'];

$q = "select * from user where username='$name'  ";

$_result = mysqli_query($con, $q);
$num = mysqli_num_rows($_result);

$q1 = "select * from admin where username='$name'  ";

$_result1 = mysqli_query($con, $q1);
$num1 = mysqli_num_rows($_result1);


if ($num == 1) {
    
    header('location:registeragain.php');
} 
else if ($num1 == 1) {
    header('location:registeragain.php');
}

else {
    $qy = "insert into user(username,password,department) values ('$name', '$pass', '$dept')";
    mysqli_query($con, $qy);
    header('location:LOGIN.php');
}
