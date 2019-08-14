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
    <title>Jamie's Hobbies</title>
  </head>
  <body onload="notifyLoad()">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/nav.php') ?>
    <nav>
      <ul class="nav-bar">
        <li class="nav-button"><a href="../index.php"><i class="fas fa-home"></i> Homepage</a></li>
        <li class="nav-button"><a href="#"><i class="fas fa-gamepad"></i> My Hobbies</a></li>
        <li class="nav-button"><a href="./contact.php"><i class="fas fa-comments"></i> Contact Me</a></li>
        <button class="theme-button" onclick="selectTheme()"><i class="fas fa-paint-brush"></i> Theme</button>
      </ul>
    </nav>
    <hr>
    <h1>My Hobbies</h1>
    <ol>
      <li>Computer Games</li>
      <li>Programming</li>
      <li>Cars</li>
      <li>Watching Movies</li>
    </ol>
    <hr>
  </body>
</html>
