<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'shoppingcart';
    try {
        return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
        // If there is an error with the connection, stop the script and display the error.
        exit('Failed to connect to database!');
    }
}
// Template header, feel free to customize this
function template_header($title) {
    
echo <<<EOT

EOT;
}
// Template footer
function template_footer() {
$year = date('Y');
echo <<<EOT

EOT;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>BUYRVDUMMY</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body>
<section class="sub-header">
    <nav>
      <a href="index.html">MOTORCAMP</a>
      <div class="nav-links" id="navLinks">
        <i class="far fa-times-circle" onclick="hideMenu()"></i>

      <ul>
      <li><a href="login.html">Login</a></li>
      <li><a href="services.html">Services</a></li>
      <li><a href="aboutus.html">About Us</a></li>
      <li><a href="contact.html">Contact</a></li>
      </ul>
      </div>
      <i class="fas fa-bars" onclick="showMenu()"></i>
    </nav>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="signup.php">Signup</a>
    <a href="login.php">Login</a>
    <a href="buyrv.html">Buy Campervan</a>
    <a href="rentrv.html">Rent Campervan</a>
    <a href="services.html">Our Services</a>
    <a href="aboutus.html">About-Us</a>
    <a href="contact.html">Contact Us</a>
  </div>
</div>

<span style="font-size:30px;cursor:pointer; float: right; position: relative;padding-right: 70px" onclick="openNav()">&#9776; Menu   </span>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>

    <div class="heading"> 
    <h1>Buy an RV</h1>
    </div>

  </section>


 <header>
   <!-- <div class="content-wrapper">
                <h1>Shopping Cart System</h1>
                <nav>
                    <a href="buypg.php?page=products">Products</a>
                </nav>
                <div class="link-icons">
                    <a href="buypg.php?page=cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
            </div>-->
        </header>
        <main>
        </main>
    
        <script src="script.js"></script>
    </body>
</html>
