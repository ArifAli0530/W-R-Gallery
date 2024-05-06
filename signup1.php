<?php

session_start();



$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'w&r');


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$s= "select * from logindata where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num==1){
    echo "<script type='text/javascript'>
    alert ('user already exist');
     window.location.href='signup.html';
     </script>"; 
    
}
else{
    $reg = "insert into logindata(name , email , password) values ('$name','$email','$password')";
    mysqli_query($con, $reg);
    header('location:login.html');
    
}

?>