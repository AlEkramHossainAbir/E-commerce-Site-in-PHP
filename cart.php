<?php

// if(!isset( $_SESSION['username'])){
//   header('Location : /Project480/header.php');
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
    <div class="small-container cart-page">
      <table>
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/buy-1.jpg" />
              <div>
                <p>Red Printed Tshirt</p>
                <small>price: $50.00</small>
                <br />
                <button class="btn">Remove</button>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" class="cart-quantity-input"/></td>
          <td class="cart-price">$50.00</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/buy-2.jpg" />
              <div>
                <p>Red Printed Tshirt</p>
                <small>price: $50.00</small>
                <br />
                <button class="btn">Remove</button>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" /></td>
          <td>$65.00</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images/buy-3.jpg" />
              <div>
                <p>Red Printed Tshirt</p>
                <small>price: $50.00</small>
                <br />
                <a href="">Remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" /></td>
          <td>$70.00</td>
        </tr>
      </table>

      <div class="total-price">
        <table>
          <tr>
            <td>Subtotal</td>
            <td>$185.00</td>
          </tr>
          <tr>
            <td>Service Charge</td>
            <td>$60.00</td>
          </tr>
          <tr>
            <td>Total</td>
            <td>$245.00</td>
          </tr>
        </table>
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

    <script
      src="https://kit.fontawesome.com/5d1697f880.js"
      crossorigin="anonymous"
    ></script>
    <script>
     let cartQuantity = document.getElementsByClassName('cart-quantity-input');
     
     </script>
    </script>
    <script src="/app1.js"></script>
  </body>
</html>
