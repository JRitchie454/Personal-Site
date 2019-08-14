<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/libs.php') ?>
    <script src="../js/jquery.js"></script>
    <script src="../js/sweetalert2.js"></script>
    <script src="../js/sweetalert.js"></script>
    <script src="../js/const.js"></script>
    <script src="../js/theme.js"></script>
    <script src="../js/pageAlert.js"></script>
    <link id="currentCSS" rel="stylesheet" href="../css/master-dark.css">
    <link rel="stylesheet" href="../css/master.css">
    <link rel="icon" href="../images/favicon.ico">
    <title>Contact Me</title>
  </head>
  <body onload="notifyLoad()">
    <style>
    .outer-nav {
      font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #212529;
      text-align: left;
    }
    </style>
    <nav class="outer-nav navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Navigation</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarToggle">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="../../index.html">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="../../Bootstrap-Site/index.html">Bootstrap Site</a></li>
          <li class="nav-item"><a class="nav-link" href="../../CSS-Styled-Site/index.html">CSS Styled Site</a></li>
          <li class="nav-item"><a class="nav-link active" href="../../HTML-Site/index.html">HTML Site</a></li>
        </ul>
      </div>
    </nav>

    <div class="wrapper">
      <nav>
        <ul class="nav-bar">
          <li class="nav-button"><a href="../index.html"><i class="fas fa-home"></i> Homepage</a></li>
          <li class="nav-button"><a href="./hobbies.html"><i class="fas fa-gamepad"></i> My Hobbies</a></li>
          <li class="nav-button"><a href="#"><i class="fas fa-comments"></i> Contact Me</a></li>
          <button class="theme-button" onclick="selectTheme()"><i class="fas fa-paint-brush"></i> Theme</button>
        </ul>
      </nav>
      <hr>
      <h1>My Contact Details</h1>
      <p>My Address</p>
      <p>My Number</p>
      <p>My Email</p>
      <hr>
      <form enctype="text/plain" action="mailto:jamie@property-network.co.uk" method="post">
        <table>
          <tr>
            <td><label>Your Name:</label></td>
            <td><input type="text" name="yourName" value=""></td>
          </tr>
          <tr>
            <td><label>Your Email:</label></td>
            <td><input type="email" name="yourEmail" value=""></td>
          </tr>
          <tr>
            <td><label>Your Message:</label></td>
            <td><textarea name="name" rows="10" cols="30" name="yourMessage"></textarea></td>
          </tr>
        </table>
        <input type="submit" name="">
      </form>
      <hr>
    </div>
  </body>
</html>
