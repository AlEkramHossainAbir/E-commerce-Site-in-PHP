<?php
include "dbconnection.php";

// if(!isset( $_SESSION['username'])){
//   header('Location : /Project480/header.php');
// }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport " content="width=device-width, initial-scale=1.0" />
    <title>Inventory Management System</title>
    <link rel="stylesheet" href="./style.css" />
    <link
      href="https://fonts.google.com/css2?
      family=Poppins:wght@300;500;600;700&display=swap"
      rel="stylesheet"
    />
    <style>
    .product{
      width:80%;

    }
    </style>
  </head>
  <body>
  <?php
        include "navHeader.php";
    ?>
    <div class="addProduct">
      <div>
        <form action="" class="cart-form" method="post">
          <input type="text" name="pname" autocomplete="off" required />
          <label for="name" class="label-name">
            <span class="content-name">Name</span>
          </label>

          <input type="text" name="price" autocomplete="off" required />
          <label for="price" class="label-name">
            <span class="content-name">Price</span>
          </label>

          <input type="text" name="size" autocomplete="off" required />
          <label for="size" class="label-name">
            <span class="content-name">Size</span>
          </label>

          <input type="number" name="quantity" autocomplete="off" required />
          <label for="quantity" class="label-name">
            <span class="content-name">Quantity</span>
          </label>
          <br />
          <input type="submit" class="btn" name="submit"/>
        </form>
      </div>


      <br />
      <div>
        <img class="product" src="./images/addproduct.svg" />
      </div>
    </div>
<?php

    if(isset($_POST['submit']))
        {
            $product_name      = $_POST['pname'];
            $product_price      = $_POST['price'];
            $product_size  = $_POST['size'];
            $product_quantity = $_POST['quantity'];
            echo "product Name".$product_name;
     

            
            $sql_1 = "SELECT * FROM product WHERE pname = '$product_name'";
            $result = $conn->query($sql_1);
            
            if($result->num_rows==0)
            {
                    // Create a Data into our product Table
                 $sql = "INSERT INTO product(pname, price, size, quantity) VALUES ('$product_name','$product_price','$product_size','$product_quantity')";
            
                if ($conn->query($sql) == TRUE) {
                  echo "New record created successfully<br>";       
                   }
                
    
               }
             else
             {
                echo "<script>alert('This price is already taken');</script>";
             }
         }
         ?>

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Download Our App</h3>
            <div class="app-logo">
              <img src="images/play-store.png" />
              <img src="images/app-store.png" />
            </div>
          </div>
          <div class="footer-col-2">
          <h3>Inventory Management System</h3> 
            <p>shd fsdhf dsfhk fshdk shf sdhkf</p>
          </div>
          <div class="footer-col-3">
            <h3>Useful Links</h3>
            <ul>
              <li>Coupons</li>
              <li>Blog Post</li>
              <li>Return Policy</li>
              <li>Join Affil</li>
            </ul>
          </div>
          <div class="footer-col-4">
            <h3>Follow us</h3>
            <div class="social-media">
              <img src="./images/facebook.svg" />
              <img src="./images/instagram.svg" />
              <img src="./images/youtube.svg" />
            </div>
          </div>
        </div>
        <hr />
        <p class="copyright">
          Copyright &copy; Inventory Management System 2020. All Rights Reserved
        </p>

        <div className="footer-bottom">
          <div className="language">
            <a href="#" title="English (UK)"> English (UK) </a>
            <a href="#" title="Bengali"> বাংলা </a>
            <a href="#" title="Assamese"> অসমীয়া </a>
            <a href="#" title="Hindi"> हिन्दी </a>
            <a href="#" title="Nepali"> नेपाली </a>
            <a href="#" title="Indonesian"> Bahasa Indonesia </a>
            <a href="#" title="Arabic"> العربية </a>
            <a href="#" title="Simplified Chinese (China)"> 中文(简体) </a>
            <a href="#" title="Malay"> Bahasa Melayu </a>
            <a href="#" title="Spanish"> Español </a>
            <a href="#" title="Portuguese (Brasil)"> Português (Brasil) </a>
          </div>
        </div>
      </div>
    </div>

    <script>
      const productImage = document.getElementById("product-image");
      const smallImage = document.getElementsByClassName("small-image");
      smallImage[0].onclick = () => {
        productImage.src = smallImage[0].src;
      };
      smallImage[1].onclick = () => {
        productImage.src = smallImage[1].src;
      };
      smallImage[2].onclick = () => {
        productImage.src = smallImage[2].src;
      };
      smallImage[3].onclick = () => {
        productImage.src = smallImage[3].src;
      };
    </script>
    <script
      src="https://kit.fontawesome.com/5d1697f880.js"
      crossorigin="anonymous"
    ></script>
    <script src="/app1.js"></script>
  </body>
</html>
