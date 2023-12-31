<?php

session_start();

include("../model/includes/db.php");
include("../model/includes/header.php");
include("../model/functions/functions.php");
include("../model/includes/main.php");

?>


  <!-- Cover -->
  <main>
    <div class="hero">
      <a href="shop.php" class="btn1">View all products
</a>
    </div>
    <!-- Main -->
    <div class="wrapper">
            <h1>Featured Collection<h1>
            
      </div>



    <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

    <?php

    getPro();

    ?>

    </div><!-- row Ends -->

    </div><!-- container Ends -->
    <!-- FOOTER -->
    <footer class="page-footer">

      <div class="footer-nav">
        <div class="container clearfix">

          <div class="footer-nav__col footer-nav__col--info">
            <div class="footer-nav__heading">Information</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="../model/shop.php" class="footer-nav__link">The Nursery's</a>
              </li>
              <li class="footer-nav__item">
                <a href="index.php" class="footer-nav__link">Local stores</a>
              </li>
              <li class="footer-nav__item">
                <a href="../model/contact.php" class="footer-nav__link">Customer service</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Privacy &amp; cookies</a>
              </li>
              <li class="footer-nav__item">
                <a href="https://www.google.com/maps/place/Baridhara+J+Block,+Dhaka+1212/@23.8006436,90.4223776,17z/data=!3m1!4b1!4m5!3m4!1s0x3755c7b0f0a41e45:0x6a7f337b6a377ca9!8m2!3d23.8006387!4d90.4245663" class="footer-nav__link">Site map</a>
              </li>
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--whybuy">
            <div class="footer-nav__heading">Why buy from us</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="../model/terms.php" class="footer-nav__link">Shipping &amp; returns</a>
              </li>
              <li class="footer-nav__item">
                <a href="../model/terms.php" class="footer-nav__link">Secure shipping</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Testimonials</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Award winning</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Ethical trading</a>
              </li>
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--account">
            <div class="footer-nav__heading">Your account</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="../model/checkout.php" class="footer-nav__link">Log in</a>
              </li>
              <li class="footer-nav__item">
                <a href="../model/customer_register.php" class="footer-nav__link">Register</a>
              </li>
              <li class="footer-nav__item">
                <a href="../model/cart.php" class="footer-nav__link">View cart</a>
              </li>
              <li class="footer-nav__item">
                <a href="http://localhost/ecommerce-website-php/mvc/model/customer/my_account.php?my_orders" class="footer-nav__link">Track an order</a>
              </li>
              <li class="footer-nav__item">
                <a href="http://localhost/ecommerce-website-php/mvc/model/customer/my_account.php?edit_account" class="footer-nav__link">Update information</a>
              </li>
            </ul>
          </div>
          


          <div class="footer-nav__col footer-nav__col--contacts">
            <div class="footer-nav__heading">Contact details</div>
            <address class="address">
            Head Office: Prasadh Paradise .<br>
            161/4 Baridhara J Block, Basundhara R/A, Dhaka-1212.
          </address>
            <div class="phone">
              Telephone:
              <a class="phone__number" href="tel:01732882773">01732882773</a>
            </div>
            <div class="email">
              Email:
              <a href="mailto:support@plantify.com" class="email__addr">support@wearegreen.com</a>
            </div>
          </div>

        </div>
      </div>

       <div class="banners">
        <div class="container clearfix">

          <div class="banner-award">
            <span>Award winner</span><br> Shaik Shiraj awards-2023
          </div>

          <div class="banner-social">
            <a href="#" class="banner-social__link">
            <i class="icon-facebook"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-twitter"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-instagram"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-pinterest-circled"></i>
          </a>
          </div>

        </div>
      </div>
      <div class="page-footer__subline">
          <div class="container clearfix">

          <div class="copyright">
            &copy; 2023 WeAregreen&trade;
          </div>

          <div class="developer">
            Developed by RIASAT ABDULLAH
          </div>
          
       
       
        </div>
      </div>
    
    </footer>
</body>

</html>
