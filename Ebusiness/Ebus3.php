<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
         <link rel="stylesheet" href="shop.css" type="text/css" />
    </head>
    <body id="receipt">
        <h4>RECEIPT</h4>
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
        
        <div class="thanks">
            <h3><strong>THANK YOU FOR SHOPPING WITH US</strong></h3>
               <a href="../home/homepage.html" class="end">Home</a>
        </div>
        <a href="../homepage.html" class="end">Home</a>
    </body>
</html>