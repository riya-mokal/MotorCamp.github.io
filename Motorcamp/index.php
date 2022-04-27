
<!DOCTYPE html> <html> <head> <meta charset="utf-8"> <meta name="viewport"
content="with=device-width, initial-scale=1.0"> <title >MotorCamp</title>
<link rel="stylesheet" type="text/css" href="style.css"> <link
href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap"
rel="stylesheet"> <script
src="https://kit.fontawesome.com/a076d05399.js"></script>
   
</head>
<body style="background-color:powderblue";>
  <section class="header">
    <nav>
      <a href="index.html" >MOTORCAMP</a>
      <div class="nav-links" id="navLinks">
        <i class="far fa-times-circle" onclick="hideMenu()"></i>

      <ul>
      <li><a href="login.php">Login</a></li>
      <li><a href="services.html">Services</a></li>
      <li><a href="aboutus.html">About Us</a></li>
      <li><a href="signup.php">Sign-in</a></li>
      <li><a href="contact.html">Contact</a></li>
      </ul> 
      </div>
      <i class="fas fa-bars" onclick="showMenu()"></i>
    </nav>
    <div class="text-box">
      <h1> Welcome to MOTOR<span>CAMP</span></h1>
      <p>Travel with your own home</p>
      <div class="text-change">
      <h2>Let's Go to <span class="change"></span></h2>
      </div>
      <input type="text" placeholder="Search..">

    </div>
    
  </section>
<!-- servies -->
<section class="servies">
  <h1> Our Services</h1>
  <p> Try our exlusive Services</p>
  <div class="row">
    <div class="servies-col">
    <img src="image/busrv.jpg">
     <h3>Bus Rv</h3>
     <a href="services.html">Learn More</a>
    </div>
    <div class="servies-col">
     <img src="image/suvrv.jpg">
     <h3>Suv converted</h3>
     <a href="services.html">Learn More</a>
    </div>
    <div class="servies-col">
     <img src="image/mini.jpg"> 
     <h3>Mini Bus</h3>
     <a href="services.html">Learn More</a>
    </div>
  </div>

</section>

<!-- Packages -->
<section class="packages">
  <h1>Our Popular Packages</h1>
  <div class="row">
    <div class="packages-col">
      <img src="image/goa.jpg">
      <div class="layer">
      <a href="packages-goa.html"><h3>Goa</h3></a>
      </div>
    </div>
    <div class="packages-col">
      <img src="image/jaipur.jpeg">
      <div class="layer">
       <a href="packages-jaipur.html"><h3>Jaipur</h3></a>
      </div>
    </div>
    <div class="packages-col">
      <img src="image/manali.jpg">
      <div class="layer">
        <a href="packages-manali.html"><h3>Manali</h3></a>
      </div>
    </div>
  </div>
</section>

<!-- Aminities -->
<section class="Aminities">
  <h1>Aminities</h1>
  <div class="row">
    <div class="Aminities-col">
      <i class="fas fa-hands-helping">24*7 Support</i>
    </div>
    <div class="Aminities-col">
      <i class="fas fa-taxi">Trained Driver and Helping Staff</i>
    </div>
    <div class="Aminities-col">
      <i class="fas fa-wifi">
        Free Wifi
      </i>
    </div>
    </div>
    <div class="row"> 
    <div class="Aminities-col">
        <i class="fas fa-suitcase-rolling">
        Free pickup and drop</i>
    </div>
    <div class="Aminities-col">
      <i class="fas fa-snowboarding">
        Fun activity at site
      </i>
    </div>
    <div class="Aminities-col">
      <i class="fas fa-utensils">
        Different types of foood!!
      </i>
    </div>
    </div>
    <h3>And Many More Coming ahead</h3>  
</section>

<!-- feedback -->
<section class="feedback">
  <h1>Feedback</h1>
  <div class="row">
    <div class="feedback-col">
      <img src="image/user1.jpg">
      <div>
        <p>Had a great experince using there packages you should try also</p>
        <h3>Simmy Singh</h3>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
      </div>
    </div>
    <div class="feedback-col">
      <img src="image/user2.jpg">
      <div>
        <p>Great experince using there packages.</p>
        <h3>Rahul Koli</h3>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>

      </div>
    </div>
  </div>
</section>

<!-- Contact

 -->
 <section class="cta">
   <h1>Contact Us for knowing our best packages at best deals</h1>
   <a href="contact.html" class="hero-btn">Contact us</a>
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


