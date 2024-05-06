<?php

session_start();


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'w&r');


$firstN = $_POST['firstN'];
$lastN = $_POST['lastN'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$textarea = $_POST['textarea'];

    $reg = "insert into con(firstN , lastN , email , mobile , textarea ) values ('$firstN','$lastN','$email','$mobile','$textarea')";
    mysqli_query($con, $reg);
   // header('location:contact.html');


   echo "<script type='text/javascript'>
      alert ('Your review is submit successfully');
       window.location.href='contact.html';
       </script>"; 

?>