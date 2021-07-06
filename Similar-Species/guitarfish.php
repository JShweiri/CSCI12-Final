<?php
session_start();
?>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
  <link rel="icon" href="/CS12/Images/favicon.ico">
  <link rel="stylesheet" href="/CS12/Styles/style.css">

  <title>Mantas - Guitarfish</title>

</head>

<body>

  <?php
  
  $path = $_SERVER['DOCUMENT_ROOT'] . "/CS12/header.php";
  include_once($path);
  ?>

  <div class="content">
      <div class="content-item">
          <h1>Guitarfish</h1>
          <img class="content-image" alt="Guitarfish" align="left" src="/CS12/Images/guitarfish.JPG">
            <p>
                Guitarfish have a body form intermediate between those of sharks and rays. The tail has a typical shark-like form, but in many species, the head has a triangular, or guitar-like shape, rather than the disc-shape formed by fusion with the pectoral fins found in other rays.
            </p>
      </div>

  </div>

  <?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/CS12/footer.html";
  include_once($path);
  ?>

</body>

</html>
