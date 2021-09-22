<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
			<footer id="site-footer" role="contentinfo" class="header-footer-group">

				<div class="container">
          <div class="footer-inner">
            <div class="footer-top">
              <div class="footer-logo">
                <a href="#"><img src="/wp-content/uploads/2021/09/footer-logo.svg"></a>
              </div>
              <div class="footer-menu-inner">
                <div class="footer-heading">
                  <h2>An Icon <br>of uptown <br>Altamonte.</h2>
                </div>
                <div class="footer-menu">
                  <ul class="social-links">
                    <li><a href="#"><img src="/wp-content/uploads/2021/09/twitter-icon.svg" width="20px" height="18px" alt="twitter"></a></li>
                    <li><a href="#"><img src="/wp-content/uploads/2021/09/instagram-icon.svg" width="23px" height="23px" alt="instagram"></a></li>
                    <li><a href="#"><img src="/wp-content/uploads/2021/09/facebook-icon.svg" width="25px" height="21px" alt="facebook"></a></li>
                  </ul>
                  <ul>
                    <li><a href="">Availability</a></li>
                    <li><a href="">One</br> Bedroom</a></li>
                    <li><a href="">Two </br>Bedroom</a></li>
                    <li><a href="">Three</br> Bedroom</a></li>
                  </ul>
                  <ul>
                    <li><a href="">Features</br> & Amenities</a></li>
                    <li><a href="">FAQs</a></li>
                    <li><a href="">Neighborhood</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Privacy Policy</a></li>
                  </ul>

                </div>
              </div>
            </div>
            <div class="footer-bottom">
              <div class="footer-left">
                <div class="footer-small-img">
                  <img src="/wp-content/uploads/2021/09/footer-small-logo.svg">
                </div>
                <div class="footer-residential">
                  <a href="#">
                    <img src="/wp-content/uploads/2021/09/epoch-residential.svg">
                  </a>
                </div>
              </div>
              <div class="footer-right">
                <p><a href="#">407.459.8800</a></p>
                <p><a href="#">theloftsuptown@epochonsite.com</a></p>
                <p><a href="#">285 Uptown Blvd</br>Altamonte Springs, FL 32701</a></p>
              </div>
            </div>
          </div>
          
        </div>

			</footer><!-- #site-footer -->

	</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
  $(".header-bottom .main-menu .site-main-menu .main-menu-list li").mouseover(function(){
    $(".header-bottom").addClass("menu-active");
  });
  $(".header-bottom .main-menu .site-main-menu .main-menu-list li").mouseout(function(){
    $(".header-bottom").removeClass("menu-active");
  });

// to add a class on body

  $(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
      $("body").addClass("active");
    } else {
      $("body").removeClass("active");
    }
  });

  // moblie menu

  $(".header-bottom .main-menu .moblie-menu").click(function(){
    $("header").toggleClass("active-moblie-menu");
  });



});


</script>