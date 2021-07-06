<?php
session_start();
?>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
  <link rel="icon" href="/CS12/Images/favicon.ico">
  <link rel="stylesheet" href="/CS12/Styles/style.css">

  <title>Mantas - Donate</title>

</head>

<body>

  <?php
  
  $path = $_SERVER['DOCUMENT_ROOT'] . "/CS12/header.php";
  include_once($path);
  ?>

  <div class="content">
      <div class="content-item">
          <h1>Donate to us</h1>
            <a href="https://www.paypal.com">Pay-Pal</a>
      </div>
  </div>

  <?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/CS12/footer.html";
  include_once($path);
  ?>

</body>

</html>
