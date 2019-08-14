<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/libs.php') ?>
    <link rel="icon" href="img/favicon.ico">
    <title>Home</title>
  </head>
  <body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/nav.php') ?>
    <div class="wrapper">
      <link rel="stylesheet" href="styles.css">
      <div class="intro-section jumbotron">
        <h1 class="display-4">Home</h1>
        <p class="lead">This is a small collection of websites that I am creating to test my skills in HTML, CSS, Javascript, PHP and more.</p>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col section-header">
            <h2>Follwing Udemy</h2>
            <p>Sites made while following <a href="https://www.udemy.com/course/the-complete-web-development-bootcamp/">The Complete Web Development Bootcamp</a> course available on <a href="https://www.udemy.com/">Udemy</a>.</p>
          </div>
        </div>
        <div class="row sites justify-content-center">
          <div class="card col-lg-3">
            <img src="img/Bootstrap-Site.png" class="card-img-top" alt="Bootstrap Site">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Bootstrap Site</h5>
              <p class="card-text">A website made using the Bootstrap library</p>
              <a href="Bootstrap Site/index.php" class="btn btn-outline-primary mt-auto">Bootstrap Site</a>
            </div>
          </div>
          <div class="card col-lg-3">
            <img src="img/CSS-Site.png" class="card-img-top" alt="CSS Styled Site">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">CSS Styled Site</h5>
              <p class="card-text">A website with heavy amounts of CSS Styling. Designed with a clean, minimal layout in mind.</p>
              <a href="CSS Styled Site/index.php" class="btn btn-outline-primary mt-auto">CSS Styled Site</a>
            </div>
          </div>
          <div class="card col-lg-3">
            <img src="img/HTML-Site.png" class="card-img-top" alt="HTML Site">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">HTML Site</h5>
              <p class="card-text">A website originally intended to be majority HTML; however it now includes heavy CSS and Javascript.</p>
              <a href="HTML Site/index.php" class="btn btn-outline-primary mt-auto">HTML Site</a>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-8 section-header">
            <h2>My Own Ideas</h2>
            <p>Sites created using ideas I've thought of myself</p>
          </div>
        </div>
        <div class="row sites justify-content-center">
          <div class="card col-lg-3">
            <img src="" alt="IN DEVELOPMENT">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Discord Oauth2</h5>
              <p class="card-text">A simple website demonstrating logging in and retrieving information using Discord Oauth2 and PHP.</p>
              <a href="#" class="btn btn-outline-success">Discord Oauth2</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
