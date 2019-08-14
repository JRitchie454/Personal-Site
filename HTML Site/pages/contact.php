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
    <?php include($_SERVER['DOCUMENT_ROOT'].'/nav.php') ?>
    <nav>
      <ul class="nav-bar">
        <li class="nav-button"><a href="../index.php"><i class="fas fa-home"></i> Homepage</a></li>
        <li class="nav-button"><a href="./hobbies.php"><i class="fas fa-gamepad"></i> My Hobbies</a></li>
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
  </body>
</html>
