<?php
session_start();
?>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
  <link rel="icon" href="/CS12/Images/favicon.ico">
  <link rel="stylesheet" href="/CS12/Styles/style.css">

  <title>Mantas - Skates</title>

</head>

<body>

  <?php
  
  $path = $_SERVER['DOCUMENT_ROOT'] . "/CS12/header.php";
  include_once($path);
  ?>

  <div class="content">
      <div class="content-item">
          <h1>Skates</h1>
          <img class="content-image" alt="Skate" align="left" src="/CS12/Images/skate.jpg">
            <p>Skates are like stingrays in that they have five pairs of gill slits that are located ventrally, which means on the underside of their body (unlike sharks that have their gills located on their sides). Skates and rays both have pectoral fins that are flat and expanded, which are typically fused to the head. Both skates and stingrays typically have their eyes on top of their head. Skates also share similar feeding habits with rays.

Skates are different from rays in that they lack a whip-like tail and stinging spines. However, some skates have electric organs located in their tail. The main difference between skates and rays is that skates lay eggs, whereas rays give birth to live young.

Moreover, skates can be more abundant than rays, and are fished for food in some parts of the world.
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
