<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/libs.php') ?>
    <link type="text/css" rel="stylesheet" href="css/master.css">
    <link rel="icon" href="images/favicon.ico">
    <title>Jamie's Personal Site</title>
  </head>
  <body onload="notifyLoad()">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/nav.php') ?>
    <div class="wrapper">
      <div class="top-container">
        <img class="top-cloud" src="images/cloud.png" alt="Cloud">
        <h1>I'm Jamie.</h1>
        <h2 class="subtitle">a web developer.</h2>
        <img class="bottom-cloud" src="images/cloud.png" alt="Cloud">
        <img src="images/mountain.png" alt="Mountain">
      </div>
      <div class="middle-container">
        <div class="profile">
          <img class="profile-img" src="images/profile-img.png" alt="Jamie Avatar">
          <h2>Hello.</h2>
          <p class="intro">I like programming, playing games and spending time with family. I can't resist a good cup of tea.</p>
        </div>
        <hr>
        <div class="skills">
          <h2>My Skills.</h2>
          <div class="skill-row">
            <img class="code-img" src="images/webdev.png" alt="Web Development">
            <h3>Web Design and Development</h3>
            <p>I have been coding for around 4-5 years as a hobby and I am currently learning website design and development in HTML, CSS, Javascript and PHP under an apprenticeship at MACTech Group.</p>
          </div>
          <div class="skill-row">
            <img class="hardware-img" src="images/hardware.png" alt="Hardware">
            <h3>Computer Hardware</h3>
            <p>I have been working with computer hardware for years and have built, maintained and dismantled several different devices including PCs, consoles and laptops including my personal home gaming PC.</p>
          </div>
        </div>
        <hr>
        <div class="contact-me">
          <h2>Get In Touch.</h2>
          <h3>If you love games like me.</h3>
          <p class="contact-message">Love gaming like I do? Get in touch and lets get our game on!<br />Click the button below and send me an email.</p>
          <a class="butn" href="mailto:jamie@property-network.co.uk">CONTACT ME</a>
        </div>
      </div>
      <div class="bottom-container">
        <a class="footer-link" href="https://www.virtualval.co.uk">Virtual Val</a>
        <a class="footer-link" href="https://www.agentcanvassing.co.uk">Agent Canvassing</a>
        <a class="footer-link" href="https://www.property-network.co.uk">Property Network</a>
        <p class="copyright">© 2019 Jamie Ritchie</p>
      </div>
    </div>
  </body>
</html>
