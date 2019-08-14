<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/libs.php') ?>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/sweetalert2.js"></script>
    <script type="text/javascript" src="js/sweetalert.js"></script>
    <script type="text/javascript" src="js/const.js"></script>
    <script type="text/javascript" src="js/theme.js"></script>
    <script type="text/javascript" src="js/pageAlert.js"></script>
    <link type="text/css" id="currentCSS" rel="stylesheet" href="css/master-dark.css">
    <link type="text/css" rel="stylesheet" href="css/master.css">
    <link rel="icon" href="images/favicon.ico">
    <title>Jamie's Personal Site</title>
  </head>
  <body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/nav.php') ?>
    <div class="wrapper" onload="notifyLoad()">
      <table>
        <tr>
          <td><img class="profile-img" src="images/profile-img.png" alt="Profile Image"></td>
          <td>
            <h1>Jamie Ritchie</h1>
            <p><em>Apprentice Developer at <strong><a href="https://www.property-network.co.uk">Property Network</a></strong></em></p>
            <p>I like programming, playing games and spending time with family. I can't resist a good cup of tea.</p>
          </td>
        </tr>
      </table>
      <hr>
      <nav>
        <ul class="nav-bar">
          <li class="nav-button"><a href="#"><i class="fas fa-home"></i> Homepage</a></li>
          <li class="nav-button"><a href="pages/hobbies.php"><i class="fas fa-gamepad"></i> My Hobbies</a></li>
          <li class="nav-button"><a href="pages/contact.php"><i class="fas fa-comments"></i> Contact Me</a></li>
          <button class="theme-button" onclick="selectTheme()"><i class="fas fa-paint-brush"></i> Theme</button>
        </ul>
      </nav>
      <hr>
      <h3>Education</h3>
      <ul>
        <li>Holland House</li>
        <li>Hollyfield School</li>
        <li><a href="http://www.fairfax.bham.sch.uk/">Fairfax Academy</a></li>
        <li><a href="https://www.bmet.ac.uk/">Birmingham Metropolitan College</a></li>
      </ul>
      <hr>
      <h3>Work Experience</h3>
      <table>
        <thead>
          <tr>
            <th>Dates</th>
            <th>Work</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2017-2019</td>
            <td>Student at Birmingham Metropolitan College</td>
          </tr>
          <tr>
            <td>2019-Current</td>
            <td>Apprentice Developer at Property Network</td>
          </tr>
        </tbody>
      </table>
      <hr>
      <h3>Skills</h3>
      <table cellspacing="10">
        <tr>
          <td>HTML</td><td>⭐⭐⭐⭐</td>
        </tr>
        <tr>
          <td>CSS</td><td>⭐⭐⭐</td>
        </tr>
        <tr>
          <td>JS</td><td>⭐⭐⭐</td>
        </tr>
        <tr>
          <td>PHP</td><td>⭐⭐⭐</td>
        </tr>
      </table>
      <hr>
    </div>
  </body>
</html>
