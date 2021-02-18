<?php
  include "dbconnection.php";
  
//   if(!isset( $_SESSION['username'])){
//     header('Location : /Project480/header.php');
// }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport " content="width=device-width, initial-scale=1.0" />
    <!--  <meta http-equiv="X-UA-Compatible" content="ie=edge" /> -->
    <title>Inventory Management System</title>
    <link rel="stylesheet" href="./style.css" />
    <link
      href="https://fonts.google.com/css2?
      family=Poppins:wght@300;500;600;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
  <?php
        include "navHeader.php";
    ?>

    <div class="small-container">
      <div class="row row-2">
        <h2>All Products</h2>
        <select>
          <option>Default Shorting</option>
          <option>Short by Price</option>
          <option>Short by Popularity</option>
          <option>Short by rating</option>
          <option>Short by sale</option>
        </select>
      </div>


      <?php
$sql = "SELECT * FROM product";
$result = mysqli_query($conn,$sql);
while($row = $result->fetch_assoc()) {

?> 


      <div class="row">
      <div class="col-4">
        <a href="/Project480/productDetails.php"> <img src="images/product-1.jpg" /></a>
          <h4><?= $row['pname']; ?></h4>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p><?= $row['price']; ?> <?php } ?></p>
          <button class="btn" onClick=add()>Add to Cart </button>
        </div>
        <div class="col-4">
        <a href="/Project480/productDetails.php"> <img src="images/product-1.jpg" /></a>
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p>$50.00</p>
          <button class="btn" onClick=add()>Add to Cart </button>
        </div>
        <div class="col-4">
          <img src="images/product-2.jpg" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p>$50.00</p>
          <button class="btn" onClick=add()>Add to Cart </button>
        </div>
        <div class="col-4">
          <img src="images/product-3.jpg" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p>$50.00</p>
          <button class="btn" onClick=add()>Add to Cart </button>
        </div>
        <div class="col-4">
          <img src="images/product-4.jpg" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
          </div>
          <p>$50.00</p>
          <button class="btn" onClick=add()>Add to Cart </button>
        </div>
      </div>

      <div class="row">
        <div class="col-4">
          <img src="images/product-5.jpg" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p>$50.00</p>
          <button class="btn" onClick=add()>Add to Cart </button>
        </div>
        <div class="col-4">
          <img src="images/product-6.jpg" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p>$50.00</p>
          <button class="btn" onClick=add()>Add to Cart </button>
        </div>
        <div class="col-4">
          <img src="images/product-7.jpg" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p>$50.00</p>
          <button class="btn" onClick=add()>Add to Cart </button>
        </div>
        <div class="col-4">
          <img src="images/product-8.jpg" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
          </div>
          <p>$50.00</p>
          <button class="btn" onClick=add()>Add to Cart </button>
        </div>
      </div>

      <div class="row">
        <div class="col-4">
          <img src="images/product-9.jpg" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p>$50.00</p>
          <button class="btn" onClick=add()>Add to Cart </button>
        </div>
        <div class="col-4">
          <img src="images/product-10.jpg" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p>$50.00</p>
          <button class="btn" onClick=add()>Add to Cart </button>
        </div>
        <div class="col-4">
          <img src="images/product-11.jpg" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p>$50.00</p>
          <button class="btn" onClick=add()>Add to Cart </button>
        </div>
        <div class="col-4">
          <img src="images/product-12.jpg" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
          </div>
          <p>$50.00</p>
          <button class="btn" onClick=add()>Add to Cart </button>
        </div>
      </div>
      <div class="page-btn">
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span>&#8594;</span>
      </div>
    </div>

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

    <script src="/app1.js"></script>
    <script
      src="https://kit.fontawesome.com/5d1697f880.js"
      crossorigin="anonymous"
    ></script>
    <script>
    let notification = document.getElementsByClassName("cart-logo");
    let button = document.getElementsByClassName("btn");
   
    add =() => {
      alert("Added");
    }

   
    </script>
  </body>
</html>
