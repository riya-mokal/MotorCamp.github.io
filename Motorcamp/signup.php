<?php
require_once "config.php";
$error = "";
if($_SERVER['REQUEST_METHOD'] == "POST") {
  if(empty(trim($_POST["username"]))) {
    $error = "Username cannot be blank.";
  }
  else {
    $selectQuery = "SELECT id FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $selectQuery);
    mysqli_stmt_bind_param($stmt, 's', $_POST["username"]);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $count = mysqli_stmt_num_rows($stmt);
    if($count > 0) {
      $error = "This username is already taken.";
    }
    mysqli_stmt_close($stmt);
  }

  if(empty($_POST['password'])) {
    $error = "Password cannot be blank";
  }
  else if(strlen(trim($_POST['password'])) < 5) {
    $error = "Password cannot be less than 5 characters.";
  }

  if(empty($_POST['address'])) {
    $error = "Address cannot be blank";
  }

  if(empty($_POST['city'])) {
    $error = "City cannot be blank";
  }

  if(empty($_POST['state'])) {
    $error = "State cannot be blank";
  }

  if(empty($_POST['zip'])) {
    $error = "Post code cannot be blank";
  }
  if($error == "") {
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $insertQuery = "INSERT INTO users (username, password, address, city, state, zip) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $insertQuery);
    mysqli_stmt_bind_param($stmt, 'sssssi', $_POST['username'], $_POST['password'], $_POST['address'], $_POST['city'], $_POST['state'], $_POST['zip']);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: login.php");
    
  }
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>SignUp</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body style="background-color:powderblue">
        <section class="sub-header">
            <nav>
                <a style="text-align: left;" href="index.html">MOTORCAMP</a>
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

    <div class="heading"> 
    <h1>Sign-Up</h1>
    </div>
  </section>
        <!-- signup-->
        <section class="signup">
          
          <?php
             if($error != "") {
              echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
             }

          ?>
            <form action="" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Username</label>
                        <input type="text" class="form-control" name="username" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword5">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_password" id="inputPassword5" placeholder="Confirm Password">
                </div>
                <div class="form-row">
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control"  name="address" id="inputAddress" placeholder="Apartment, studio, or floor">
                </div>

                <div class="form-group">
                    <label for="inputMobile">Mobile no</label>
                    <input type="text" class="form-control"  name="mobile" id="inputMobile" placeholder="Enter Your mobile number">
                </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" name="city" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control" name="state">
                            <option selected>Choose...</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Goa">Goa</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" name="zip" id="inputZip" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                        Check me out
                        </label>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary"><a href="login.html"></a>
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