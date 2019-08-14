<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <?php include($_SERVER['DOCUMENT_ROOT'].'/libs.php') ?>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,700,700i,900,900i|Ubuntu:400,400i,700,700i&display=swap"> <!-- Fonts -->
  <link rel="stylesheet" href="css/master.css">
  <link rel="icon" href="images/favicon.ico">
  <title>Tindog</title>
</head>
  <body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/nav.php') ?>
    <div class="wrapper">
      <section id="title" class="title coloured-section">
        <div class="container-fluid">
          <!-- Nav Bar -->
          <nav class="inner-nav navbar navbar-expand-lg navbar-dark">
            <a class="inner-nav-brand navbar-brand" href="#">tindog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggle">
              <ul class="navbar-nav ml-auto">
                <li class="inner-nav-item nav-item"><a class="inner-nav-link nav-link" href="#footer">Contact</a></li>
                <li class="inner-nav-item nav-item"><a class="inner-nav-link nav-link" href="#pricing">Pricing</a></li>
                <li class="inner-nav-item nav-item"><a class="inner-nav-link nav-link" href="#cta">Download</a></li>
              </ul>
            </div>
          </nav>

          <!-- Title -->
          <div class="row">
            <div class="col-lg-6">
              <h1 class="big-heading">Meet new and interesting dogs nearby.</h1>
              <button class="dl-btn btn btn-lg btn-dark" type="button"><i class="fab fa-apple"></i> Download</button>
              <button class="dl-btn btn btn-lg btn-outline-light" type="button"><i class="fab fa-google-play"></i> Download</button>
            </div>
            <div class="col-lg-6">
              <img class="title-img" src="images/iphone6.png" alt="iphone-mockup">
            </div>
          </div>
        </div>
      </section>

      <!-- Features -->
      <section id="features" class="features white">
        <div class="container-fluid">
          <div class="row">
            <div class="feature-box col-lg-4">
              <i class="feature-icon fas fa-check-circle fa-4x"></i>
              <h3 class="feature-title">Easy to use.</h3>
              <p>So easy to use, even your dog could do it.</p>
            </div>
            <div class="feature-box col-lg-4">
              <i class="feature-icon fas fa-bullseye fa-4x"></i>
              <h3 class="feature-title">Elite Clientele</h3>
              <p>We have all the dogs, the greatest dogs.</p>
            </div>
            <div class="feature-box col-lg-4">
              <i class="feature-icon fas fa-heart fa-4x"></i>
              <h3 class="feature-title">Guaranteed to work.</h3>
              <p>Find the love of your dog's life or your money back.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Testimonials -->
      <section id="testimonials" class="testimonials coloured-section">
        <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active container-fluid">
              <h2 class="testimonial-text">I no longer have to sniff other dogs for love. I've found the hottest Corgi on TinDog. Woof.</h2>
              <img class="testimonial-image" src="images/dog-img.jpg" alt="dog-profile">
              <em>Pebbles, New York</em>
            </div>
            <div class="carousel-item container-fluid">
              <h2 class="testimonial-text">My dog used to be so lonely, but with TinDog's help, they've found the love of their life. I think.</h2>
              <img class="testimonial-image" src="images/lady-img.jpg" alt="lady-profile">
              <em>Beverly, Illinois</em>
            </div>
          </div>
          <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <br><br>
          <ol class="carousel-indicators">
            <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#testimonial-carousel" data-slide-to="1"></li>
          </ol>
        </div>
      </section>

      <!-- Press -->
      <section id="press" class="press coloured-section">
        <img class="press-img" src="images/TechCrunch.png" alt="tc-logo">
        <img class="press-img" src="images/tnw.png" alt="tnw-logo">
        <img class="press-img" src="images/bizinsider.png" alt="biz-insider-logo">
        <img class="press-img" src="images/mashable.png" alt="mashable-logo">
      </section>

      <!-- Pricing -->
      <section id="pricing" class="pricing white">
        <h2 class="section-heading">A Plan for Every Dog's Needs</h2>
        <p>Simple and affordable price plans for your and your dog.</p>

        <div class="row">
          <div class="pricing-col col-lg-4 col-md-6">
            <div class="card">
              <div class="card-header">
                <h3>Chihuahua</h3>
              </div>
              <div class="card-body">
                <h2 class="price-text">Free</h2>
                <p>5 Matches Per Day</p>
                <p>10 Messages Per Day</p>
                <p>Unlimited App Usage</p>
                <button class="btn btn-lg btn-block btn-outline-dark" type="button">Sign Up</button>
              </div>
            </div>
          </div>
          <div class="pricing-col col-lg-4 col-md-6">
            <div class="card">
              <div class="card-header">
                <h3>Labrador</h3>
              </div>
              <div class="card-body">
                <h2 class="price-text">$49 / mo</h2>
                <p>Unlimited Matches</p>
                <p>Unlimited Messages</p>
                <p>Unlimited App Usage</p>
                <button class="btn btn-lg btn-block btn-dark" type="button">Sign Up</button>
              </div>
            </div>
          </div>
          <div class="pricing-col col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3>Mastiff</h3>
              </div>
              <div class="card-body">
                <h2 class="price-text">$99 / mo</h2>
                <p>Pirority Listing</p>
                <p>Unlimited Matches</p>
                <p>Unlimited Messages</p>
                <p>Unlimited App Usage</p>
                <button class="btn btn-lg btn-block btn-dark" type="button">Sign Up</button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Call to Action -->
      <section id="cta" class="cta coloured-section">
        <div class="container-fluid">
          <h3 class="big-heading">Find the True Love of Your Dog's Life Today.</h3>
          <button class="dl-btn btn btn-lg btn-dark" type="button"><i class="fab fa-apple"></i> Download</button>
          <button class="dl-btn btn btn-lg btn-outline-light" type="button"><i class="fab fa-google-play"></i> Download</button>
        </div>
      </section>

      <!-- Footer -->
      <footer id="footer" class="footer white">
        <div class="container-fluid">
          <i class="social-btn fab fa-twitter"></i>
          <i class="social-btn fab fa-facebook-f"></i>
          <i class="social-btn fab fa-instagram"></i>
          <i class="social-btn fas fa-envelope"></i>
          <p>© Copyright 2018 TinDog</p>
        </div>
      </footer>
    </div>
  </body>
</html>
