<?php


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'w&r');


$email = $_POST['email'];
$password = $_POST['password'];

$s= "select * from logindata where email = '$email' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['email']= $emailid;
    header('location:index.php');
    echo "you has successfull login";
}
else{
    echo "wrong email or password";
}


  




?>