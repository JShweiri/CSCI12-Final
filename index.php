<?php
session_start();
?>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
  <link rel="icon" href="/CS12/Images/favicon.ico">
  <link rel="stylesheet" href="/CS12/Styles/style.css">

  <title>Mantas</title>

</head>

<body>

  <?php
  
  $path = $_SERVER['DOCUMENT_ROOT'] . "/CS12/header.php";
  include_once($path);
  ?>

  <div class="content">
      <div class="content-item">
          <h1>Learn All About Mantas</h1>
          <p>Mantas are the magestic beasts of the deep, come and learn all about the mysterious world of mantas and why they are so amazing
              
          </p>
          
      </div>
  
        <div class="content-item">
            <h1>Citations and Sources:</h1>
          <h2>ALL INFORMATION IS TAKEN DIRECTLY FROM WIKIPEDIA, IN NO WAY AM I CLAIMING IT MY WORK.</h2>
          <p>Pages used: </p>
          <ul>
              <li><a href="https://en.wikipedia.org/wiki/Manta_ray">en.wikipedia.org/wiki/Manta_ray</a></li>
              <li><a href="https://en.wikipedia.org/wiki/Skate_(fish)">en.wikipedia.org/wiki/Skate_(fish)</a></li>
              <li><a href="https://en.wikipedia.org/wiki/Guitarfish">en.wikipedia.org/wiki/Guitarfish</a></li>
              <li><a href="https://en.wikipedia.org/wiki/Sawfish">en.wikipedia.org/wiki/Sawfish</a></li>
          </ul>
          <br>
          <h2>ALL ART WAS EITHER LISTED UNDER CREATIVE COMMONS OR PERMITTED WITH CITATION.</h2>
          <p>Header photo taken by: (Octavio Aburto / iLCP)</p>
            <p>Logo made with: logomakr</p>
            <p> Game assets taken from: majorclanger.co and pluspng.com</p>
      </div>
  </div>

  <?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/CS12/footer.html";
  include_once($path);
  ?>

</body>

</html>
