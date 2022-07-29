<?php include "components/data.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "components/header.php" ?>
</head>

<body>

  <!--header-->
  <header class="main-header clearfix" role="header">
    <?php include "components/navbar.php" ?>
  </header>


  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
      <source src="assets/images/video.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
      <div class="caption">
        <h6>Coming Soon</h6>
        <h2><em>International Youth</em> Business Competition 2023</h2>
        <div class="main-button">
          <div class="scroll-to-section"><a href="#section2">Registration</a></div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->


  <section class="features">
    <?php include "components/features.php" ?>
  </section>

  <section class="section why-us" data-section="section2">
    <?php include "components/price.php" ?>
  </section>

  <section class="section video" data-section="section5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <div class="left-content">
            <span>About Us</span>
            <h4>Internasional Youth <em>Business Competition 2023</em></h4>
            <p>Economics and business plays an important role in our daily economic life.
              IYSA believes that the eld of economics and business can also be one of the
              categories that we can compete in making projects related to problems that
              occur in the global world today and also their solutions.
              <br><br>Therefore, our Indonesian Young Scientist Association (IYSA) Indonesia will
              hold an international-level Invention competition special for Business and
              Economics
            </p>
            <div class="main-button"><a rel="nofollow" href="home.php?page=AboutUs" target="_parent">About More</a></div>
          </div>
        </div>
        <div class="col-md-6">
          <article class="video-item">
            <div class="video-caption">
              <h4>AFTER EVENT IYBC & GLOCOLIS 2022</h4>
            </div>
            <figure>
              <a href="https://www.youtube.com/watch?v=_7yaNYW45nI" class="play"><img src="assets/images/after-event.jpg"></a>
            </figure>
          </article>
        </div>
      </div>
    </div>
  </section>

  <?php include "components/categories.php" ?>

  <section class="section courses" data-section="section4">
    <?php include "components/logo.php"; ?>
  </section>




  <section class="section contact" data-section="section6">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Let’s Keep In Touch</h2>
          </div>
        </div>
        <div class="col-md-6">


          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-md-6">
                <fieldset>
                  <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                </fieldset>
              </div>
              <div class="col-md-6">
                <fieldset>
                  <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="button">Send Message Now</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.1774898890221!2d106.7827083!3d-6.431292600000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e9a57eea4ae3%3A0x57bb4022b320c1d9!2sDepok%2C%20Pasir%20Putih%2C%20Sawangan%2C%20Depok%20City%2C%20West%20Java%2016519!5e0!3m2!1sen!2sid!4v1654859534780!5m2!1sen!2sid" width="100%" height="422px" frameborder="0" style="border:0" allowfullscreen></iframe>

          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2022 by IYSA

            | Design: <a href="#" rel="sponsored" target="_parent">IYBC</a></p>
        </div>
      </div>
    </div>
  </footer>

  <?php include "components/footer.php" ?>
</body>

</html>