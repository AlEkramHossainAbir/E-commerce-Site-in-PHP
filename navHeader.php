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
    <style>
    
    .dropbtn {
  background-color: #ff523b;
  border-radius: 5px;
  color: white;
  padding: 10px;
  font-size: 20px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color:  #094764;}
    </style>
 <?php
session_start();
?>

<body>


<div class="header">
      <div class="container">
        <div class="navbar">
        <h3>Inventory Management System</h3> 
          <nav>
            <ul id="menuItems">
            <li><a href="/Project480/index.php">Home</a></li>
            <?php 
                if(isset( $_SESSION["username"]))
                {
              ?>
              <li><a href="/Project480/products.php">Products</a></li>
              <?php
                }
                ?>
              <li><a href="">About</a></li>
              <li><a href="">Contact</a></li>
              <?php


if(isset( $_SESSION["username"]))
{
    ?>
   <li>
   <div class="dropdown">
  <button class="dropbtn"><?= $_SESSION["username"]; ?></button>
  <div class="dropdown-content">
    <a href="/Project480/viewProfile.php">View Profile</a>
    <a href="/Project480/addProduct.php">Add Product</a>
    <a href="/Project480/productList.php">Remove Product</a>
    <a href="/Project480/login.php">Logout</a>
  </div>
</div>
   
   </li>
   <?php
}
else
{
    ?>
    <li><a href='/Project480/login.php'>Account</a></li>
    <?php
}
              ?>
            </ul>
          </nav>
          <?php 
                if(isset( $_SESSION["username"]))
                {
              ?>
               <a href="/Project480/cart.php" class="cart-logo"
            ><img src="images/cart.png" width="30px" height="30px"
          /></a>
              <?php
                }
                ?>
        
          <img src="images/menu.png" class="menu-icon" onclick="menutoggle()" />
        </div>
      </div>
    </div>
   