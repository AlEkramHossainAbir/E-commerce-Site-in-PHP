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
    <!--  <meta http-equiv="X-UA-Compatible" content="ie=edge" /> -->
    <title>Inventory Management System</title>
    <link rel="stylesheet" href="./style.css" />
    <link
      href="https://fonts.google.com/css2?
      family=Poppins:wght@300;500;600;700&display=swap"
      rel="stylesheet"
    />
    
    <style>
        .table-responsive{
            display: table;
            display: block;
        }

        .btn img{
            height: 15px;
            width: auto;
        }
    </style>
  </head>
  <body>
  <?php
        include "navHeader.php";
        if(isset($_POST['delete'])){
            $id = $_POST['id'];
            $sql = "DELETE FROM product WHERE id='$id'";
            $data = mysqli_query($conn,$sql);
        }
    ?>



    <div class="container mt-5">
            <table class="table table-dark table-responsive-sm text-center">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Size</th>
                        <th>Quantity</th>
                        <th>Remove</th>
    
                    </tr>
                </thead>
                <tbody>

                <?php
$sql = "SELECT * FROM product";
$result = mysqli_query($conn,$sql);
while($row = $result->fetch_assoc()) {

?>
<tr>
        <td><?= $row['pname']; ?></td>
        <td><?= $row['price']; ?></td>
        <td><?= $row['size']; ?></td>
        <td><?= $row['quantity']; ?></td>
        <td>
        <form action="" method="POST">
        <input type="text" name="id" value="<?= $row['id']; ?>" hidden>
            <button type="submit" class="btn" name="delete" onclick="return confirm('Are you sure to delete this message from the list?')">
            <img src="images/delete.png" class="icon" alt="menu">
            </button>
            </form>
        </td> 
        </form>
        </tr>
        <?php

}
?>                 
                </tbody>
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

    <script src="/app1.js"></script>
    <script
      src="https://kit.fontawesome.com/5d1697f880.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
