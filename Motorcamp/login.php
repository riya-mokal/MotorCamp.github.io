<?php
require_once "config.php";
$error = "";
if($_SERVER['REQUEST_METHOD'] == "POST") {
  if(empty(trim($_POST['username'])) || empty(trim($_POST['password']))) {
    $error = "Please enter username + password";
  }
  if($error == "") {
    $selectQuery = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $selectQuery);
    mysqli_stmt_bind_param($stmt, 's', $_POST["username"]);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $count = mysqli_stmt_num_rows($stmt);
    if($count > 0 ) {
      mysqli_stmt_bind_result($stmt, $id, $username, $password);
      mysqli_stmt_fetch($stmt);
      if(password_verify($_POST['password'], $password)) {
        $_SESSION["username"] = $username;
        $_SESSION["id"] = $id;
        $_SESSION["loggedin"] = true;
        mysqli_stmt_close($stmt);
        header("location:index.html");
      }
      else {
        $error = "Password is incorrect.";
        mysqli_stmt_close($stmt);
      }
    }
    else {
      $error = "User account does not exist.";
    }
  }
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body  style="background-color:powderblue">
        <section class="sub-header">
            <nav>
                <a href="index.html">MOTORCAMP</a>
                <div class="nav-links" id="navLinks">
                    <i class="far fa-times-circle" onclick="hideMenu()"></i>
                    <ul>
                    <li><a href="login.php">Login</a></li>
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

            <h1>Login</h1>
        </section>
        <!-- login-->
        <section class="login">
            <?php
             if($error != "") {
              echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
             }

          ?>
            <form action="" method="post">
                <h4>Username:</h4>
                <input type="text" name="username" id="user" placeholder="username">
                <h4>Password:</h4>
                <input type="password" name="password" id="pass" placeholder="Password">
                <h5>Dont have a account<a href="signup.php">Click Here</a></h5>
                <input class="btn" type="submit" onclick="window.location.href='index.html';"> 

            </form>
        </section>
        <!-- Footer -->
        <section class="footer">
    
            <div class="icons">
                <a href="#"></a>
                <a href="https://facebook.com"><span class="fab fa-facebook-f"style="color: white; background: #3B5998; "></span></a>
                <a href="https://twitter.com"><span class="fab fa-twitter" style="background: #55ACEE; color: white; "></span></a>
                <a href="https://instagram.com"><span class="fab fa-instagram" style=" background: #f09433; background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); color: white; "></span></a>
                <a href="https://youtube.com"><span class="fab fa-youtube" style="background: #bb0000; color: white"></span></a>
                
            </div>

           <h5 style="padding-top:30px;font-size:20px;">Made with <i class="fas fa-heart"></i> By Riya</h5>
        </section>
        <!-- java script for toggle for small screen -->
        <script type="text/javascript">
            var navLinks = document.getElementById("navLinks");
            
            function showMenu(){
              navLinks.style.right = "0";
            }
            function hideMenu(){
              navLinks.style.right = "-200px";
            }
            
        </script>
    </body>
</html>