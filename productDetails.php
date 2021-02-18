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

    <div class="small-container single-product">
      <div class="row">
        <div class="col-2">
          <img src="/Project480/images/gallery-1.jpg" width="100%" id="product-image" />

          <div class="small-img-row">
            <div class="small-img-col">
              <img
                src="/Project480/images/gallery-1.jpg"
                width="100%"
                class="small-image"
              />
            </div>
            <div class="small-img-col">
              <img
                src="/Project480/images/gallery-2.jpg"
                width="100%"
                class="small-image"
              />
            </div>
            <div class="small-img-col">
              <img
                src="/Project480/images/gallery-3.jpg"
                width="100%"
                class="small-image"
              />
            </div>
            <div class="small-img-col">
              <img
                src="/Project480/images/gallery-4.jpg"
                width="100%"
                class="small-image"
              />
            </div>
          </div>
        </div>
        <div class="col-2">
          <p>Home / T-Shirt</p>
          <h1>Red Printed T-shirt</h1>
          <h4>$50.00</h4>
          <select>
            <option>Select Size</option>
            <option>Small</option>
            <option>Medium</option>
            <option>Large</option>
            <option>XL</option>
            <option>XXL</option>
          </select>
          <input type="number" value="1" />
          <a href="/Project480/cart.php" class="btn">Add To Cart</a>
          <h3>Product Details <i class="fa fa-indent"></i></h3>
          <br />
          <p>
            ggj yr ytf ty uyhi uyu ufu uffiufyf ufyfyuf 9tyrs ygoiugf ioyf d
            djfsf sdgfsdhf yoasf sabfasuif fbayugerge fusdfysdf sdugfusygtfs
            dfuigysduify siusdghfu sdugfusygtfs dsfysgf jysdf sdfsdgfsdf syugfs
            fgysd opguitdf
          </p>
        </div>
      </div>
    </div>

    <!-- --Title-- -->

    <div class="small-container">
      <div class="row row-2">
        <h2>Related Products</h2>
        <p>View More</p>
      </div>
    </div>

    <div class="small-container">
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
        </div>
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
