  <!--user login  info showing-->

  <?php

session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'w&r');



$sel = "SELECT * FROM logindata ";
$query = mysqli_query($con,$sel);
$resul = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home page</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- privent from access page -->

    <script type="text/javascript">
     function preventBack()
     { 
      window.history.forward()}; 
      setTimeout("preventBack()", 0);
       window.onunload=function(){null;} 
       </script>
       </head>
  <body>
  

    <nav>

      <div class="logo">
        <h1>W & R Gallery</h1>
      </div>
      <ul class="nav-links">
      <li><a href="logout.php">Logout</a></li>

        <li><a href="index.php">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><i class="fas fa-user">  </i>
       <?php 
          echo 
          $resul['name'];
          ?>
        </li>



      </ul>
    </nav>
    <div class="blockquote">
    <blockquote>
      W & R(Wallpaper and ringtones) Gallery is for downloading the Wallpapers and ringtones for your device.
       Various types of wallpaper and Ringtones<br> are available in this website for your devices. Find wallpapers and ringtones for your device<br>
      by clicking on the exploring button giving below. 
    </blockquote>
    </div>
    <div class="btn1">
     <a href="nature.html"><button>Explore Wallpapers</button></a>
     </div>
      <div class="btn2">
      <a href="randomtunes.html"><button>Explore Ringtones</button></a>
    </div>
    <footer>
      <p>W & R Gallery</p>
      <p> Follow us:</p>
      <div class="social">
        <a href="https://www.facebook.com/profile.php?id=100026017930616"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/arif_ali_05/" target="_blank"><i class="fab fa-instagram"></i></a>
              <a href="https://www.twitter.com/arifali0530/"><i class="fab fa-twitter"></i></a>
      </div>
      <p> Designer  : Arif <br>
        +91 8930010526<br>
         Email: aa9884433@gmail.com<br><br>
      
    </footer>
  </body>
</html>
