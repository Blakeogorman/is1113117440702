<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
         <link rel="stylesheet" href="shop.css" type="text/css" />
    </head>
    <body>
                  <div class="one">
        
  <a href="../homepage.html">Return</a>
  <a href=" ../Cloud/aboutus.html">About Us </a>
  <a href="../Cloud/aboutcloud.html">About Cloud</a>
  <a href ="../Ebusiness/Ebus1.php"> Products </a>
</div>
<div id="receipt">
        <h1>RECEIPT</h1>
                 <?php
                 $_SESSION["user_email"] = $_POST["user_email"];
              $_SESSION["user_name"] = $_POST["user_name"];
              ?>
              
        <?php
        // Echo session variables that were set on previous page
        echo "Total Price is " . $_SESSION["total"] . "</br>";
        echo "Name: " . $_SESSION["user_name"] . "</br>";
        echo "Email: " . $_SESSION["user_email"] . "</br>";
        ?>
        </div>
        
        
            
               <a href="../home/homepage.html" class="end">Home</a>
        
        <a href="../homepage.html" class="end">Home</a>
    </body>
</html>