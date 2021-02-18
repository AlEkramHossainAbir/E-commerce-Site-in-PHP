<?php
include "dbconnection.php";

include 'navHeader.php';

if(isset($_POST['login']))
{   
$customer_password = $_POST['pass'];
$customer_mail = $_POST['email'];

$sql = "SELECT * FROM user WHERE email = '$customer_mail' AND pass ='$customer_password'";
$result = $conn->query($sql);
if($result->num_rows!=0)
{
    $sql_1 = "SELECT * from user WHERE email = '$customer_mail' AND pass = '$customer_password'";
    
    $result_1 = $conn->query($sql_1);
    
    $row = $result_1->fetch_assoc();
    $_SESSION["username"]    = $row['username'];
    header("Location: /Project480/index.php");
}

}

else if(isset($_POST['register']))
{
$customer_name      = $_POST['username'];
$customer_mail      = $_POST['email'];
$customer_password  = $_POST['pass'];
echo "Customer Name".$customer_name;


$sql_1 = "SELECT * FROM user WHERE email = '$customer_mail'";
$result = $conn->query($sql_1);

if($result->num_rows==0)
{
        // Create a Data into our customer Table
     $sql = "INSERT INTO user(username, pass, email) VALUES ('$customer_name','$customer_password','$customer_mail')";

    if ($conn->query($sql) == TRUE) {
      echo "New record created successfully<br>";       
       }
    
   header("Location: login.php") ;

   }
 else
 {
    echo "<script>alert('This mail is already taken');</script>";
 }
}
else{

session_unset();
session_destroy();
}

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

    <div class="login-page">
      <div class="container">
        <div class="row">
          <div class="col-2">
            <img src="images/login.svg" width="100%" />
          </div>
          <div class="col-2">
            <div class="form-container">
              <div class="form-btn">
                <span onclick="login()">Login</span>
                <span onclick="register()">Register</span>
                <hr id="Indicator" />
              </div>
              <form id="loginForm" method="post" action="">
                <input type="email" placeholder="Email" name="email"/>
                <input type="password" placeholder="Password" name="pass"/>
                <button type="submit" class="btn" name="login">Login</button>
                <a href="">Forget Password</a>
              </form>
              
              <form id="regForm" method="post" action="">
                <input type="text" placeholder="Username" name="username" />
                <input type="email" placeholder="Email" name="email" />
                <input type="password" placeholder="Password" name="pass" />
                <button type="submit" class="btn" name="register">Register</button>
              </form>
       
            </div>
          </div>
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

    <script
      src="https://kit.fontawesome.com/5d1697f880.js"
      crossorigin="anonymous"
    ></script>
    <script src="/app1.js"></script>
    <script>
      const LoginForm = document.getElementById("loginForm");
      const RegForm = document.getElementById("regForm");
      const Indicator = document.getElementById("Indicator");

      register = () => {
        RegForm.style.transform = "translateX(0px)";
        LoginForm.style.transform = "translateX(0px)";
        Indicator.style.transform = "translateX(100px)";
      };
      login = () => {
        RegForm.style.transform = "translateX(300px)";
        LoginForm.style.transform = "translateX(300px)";
        Indicator.style.transform = "translateX(0px)";
      };
    </script>
  </body>
</html>
