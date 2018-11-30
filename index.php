<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>SAMS Bank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Banking system" />
    <meta name="keywords" content="DSW project" />
    <meta name="author" content="Shivang Samyak Mridul Anushree" />
	<link rel="shortcut icon" href="xyz.ico">
	
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css" type="text/css">

    <link rel="stylesheet" href="preview/lmpixels-demo-panel.css" type="text/css">
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-93917891-1', 'auto');
      ga('send', 'pageview');

	  
    </script>

    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
	<script src="js/jquery-2.1.0.min.js"></script>
	<script src="js/sound.js"></script>
	
	
  </head>

  <body onload="playSound()">
    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="dot1"></div>
        <div class="dot2"></div>
      </div>
    </div>
    <!-- /Loading animation -->

    <div id="main-container">

      <!-- Header -->
      <header id="header" class="header">
        <div class="container clearfix">
          <div class="logo-container">
            <div class="header-logo">SAMS BANK (we brings everyone together)</div>
          </div>

          <div class="header-date mobile-hidden">
            <p id="header-date"></p>
			<script>
			var d = new Date();
			document.getElementById("header-date").innerHTML = d.toDateString();
			</script>
          </div>
          <a class="menu-toggle mobile-visible">
            <i class="fa fa-bars"></i>
          </a>
        </div>
      </header>
      <!-- /Header -->

      <!-- Site Navigation -->
      <nav class="main-nav mobile-menu-hide">
        <div class="container">
          <ul class="nav navbar-nav">
            <li>
              <a href="#home" >Home</a>
            </li>
            <li>
              <a href="#our-services">Our Services</a>
            </li>
            <li>
              <a href="#rsvp">Suggestion</a>
            </li>
			<li>
              <a href="#"onclick="document.getElementById('id01').style.display='block'" style="width:auto;" >Customer login</a>
			</li>
			<li>
              <a href="#"onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Employee login</a>
			</li>			
			</ul>
        </div>
      </nav>
      <!-- /Site Navigation -->
		<div id="id01" class="modal">
  
	  <form class="modal-content animate" method="post" action="check1.php" >
		<div class="imgcontainer">
		  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		  <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
		</div>

		<div class="container1">
		  <label><b>Consumer Username</b></label>
		  <input type="text" placeholder="Enter Username" name="uname1" required>

		  <label><b>Password</b></label>
		  <input type="password" placeholder="Enter Password" name="psw1" required>
			
		  <button name="submit1" type="submit" id="submit1" value="Login" >Login</button>
		</div>
		<div class="container1" style="background-color:#fefefe">
		  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
		</div>
	  </form>
	</div>
	<div id="id02" class="modal">
  
	  <form class="modal-content animate" method="post" action="check2.php">
		<div class="imgcontainer">
		  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
		  <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
		</div>

		<div class="container1">
		  <label><b>Employee Username</b></label>
		  <input type="text" placeholder="Enter Username" name="uname1" required>

		  <label><b>Password</b></label>
		  <input type="password" placeholder="Enter Password" name="psw1" required>
			
		  <button name="submit1" type="submit" id="submit1" value="Login">Login</button>
		</div>
		<div class="container1" style="background-color:#fefefe">
		  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
		</div>
	  </form>
	</div>
      <div class="sections">
        <!-- Home Section -->
        <section id="home" class="home-section clearfix">
          <div id="hs-image-block" class="hs-image-block" style="background-image: url(images/bank.jpg); background-attachment: fixed; background-position: 50% 0;" data-stellar-background-ratio="0.5">
            <div class="hs-mask"></div>
          </div>

          <div class="hs-main-content container">
            <div class="hs-section-title">
              <h1>Be assured of affordable access to banking, deposit, remittance, credit, insurance and pension services</h1>
            </div>

            <div class="about-us clearfix"> 
              <div class="about-us-block second-block">
                <div class="top-block">
                  <div class="name">
                    <h2>PM Narendra Modi</h2>
                    <p></p>
                    <ul class="social-links">
                      <!--<li><a class="tip social-button" href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li> <!-- Full list of social icons: http://fontawesome.io/icons/#brand -->
                      <li><a target="_blank" class="tip social-button" href="https://www.facebook.com/narendramodi/" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                      <!--<li><a class="tip social-button" href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                      <!--<li><a class="tip social-button" href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>-->
                      <!--<li><a class="tip social-button" href="#" title="last.fm"><i class="fa fa-lastfm"></i></a></li>-->
                      <!--<li><a class="tip social-button" href="#" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>-->
                    </ul>
                  </div>

                  <div class="photo">
                    <img src="images/pro_1.jpg" alt="">
                  </div>
                </div>
                <div class="bottom-block">
                  <p>One day every person will have there bank account</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- /Home Section -->

        <section id="our-services" class="our-story section-boxed">
          <div class="container">
            <div class="section-title">
              <h2>Our Services</h2>
              <p class="intro">Our bank provides one of the finest banking experience across the globe.</p>
            </div>

            <div class="row">
			              <!-- Ceremony Block -->
              <div class="col-md-4 event-block">
                <div class="event-photo scale-image-effect">
                  <img src="images/6.png" alt="">
                </div>

                <div class="event-title">
                  <h3>Interest rate</h3>
                </div>

                <div class="event-info">
                  <div class="event-date">Our bank provides 6% interest rate which is much more than any other bank</div>
                </div>
              </div>
              <!-- /Ceremony Block -->
              <!-- Ceremony Block -->
              
              <!-- /Ceremony Block -->

              <!-- Party Block -->
              <div class="col-md-4 event-block">
                <div class="event-photo scale-image-effect">
                  <img src="images/discount.jpg" alt="">
                </div>

                <div class="event-title">
                  <h3>Offers</h3>
                </div>

                <div class="event-info">
                  <div class="event-date">Our bank provides one of the best offers around the world which helps you to save money everyday...</div>
				</div>
              </div>
              <!-- /Party Block -->
			  <div class="col-md-4 event-block">
                <div class="event-photo scale-image-effect">
                  <img src="images/lock.png" alt="">
                </div>

                <div class="event-title">
                  <h3>Security</h3>
                </div>

                <div class="event-info">
                  <div class="event-date">Our bank provides best security features which ensures safe and secured banking experience...</div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- RSVP Section -->
        <section id="rsvp" class="rsvp section-boxed">
          <div class="container">
            <div class="section-title">
              <h2>Priceless words !!!</h2>
              <p class="intro">We would love to know what you are feeling and thinking :)
Do scribble some words before you leave...!!!</p>
<a class="typeform-share button" href="https://shivang6.typeform.com/to/ja1wRl" data-mode="popup" style="display: inline-block; text-decoration: none; background-color: #1e5799; color: white; cursor: pointer; font-family: Helvetica, Arial, sans-serif; font-size: 24px; line-height: 16px; padding: 10px 30px; margin: 0; height: 1.5em; border-radius: 50px; box-shadow: none; background-image: none; border: none" target="_blank" > Your Suggestions </a> <script> (function() { var qs, js, q, s, d = document, gi = d.getElementById, ce = d.createElement, gt = d.getElementsByTagName, id = "typef_orm_share", b = "https://s3-eu-west-1.amazonaws.com/share.typeform.com/"; if (!gi.call(d, id)) { js = ce.call(d, "script"); js.id = id; js.src = b + "share.js"; q = gt.call(d, "script")[0]; q.parentNode.insertBefore(js, q) } })() </script>
            </div>

            <div class="row">
            </div>
          </div>
        </section>
        <!-- /RSVP Section -->

        <!-- Footer (Thank You block) -->
        <footer id="thanks" class="footer">
          <div id="footer-image-block" class="footer-image-block" style="background-image: url(images/footer_image.jpg); background-attachment: fixed; background-position: 50%;" data-stellar-background-ratio="0.3">
            <div class="footer-mask"></div>
          </div>

          <div class="footer-title">
            <h2>Thanks for showing your trust with us... hope you like it...</h2>
          </div>
        </footer>
        <!-- /Footer (Thank You block) -->

    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/validator.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.malihu.PageScroll2id.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Demo Color changer Script -->
    <script src="preview/lmpixels-demo-panel.js"></script>
    <!-- /Demo Color changer Script -->
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-96096379-1', 'auto');
  ga('send', 'pageview');

  function playSound(){
	document.getElementById('player').play();
    setTimeout(playSound, 25000);
}
alert("Welcome to SAMS Bank");
$( document.body ).click(function() {
    document.getElementById('player').play();
});
</script>
 </body>
</html>
