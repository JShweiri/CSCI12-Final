<?php
session_start();
?>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
  <link rel="icon" href="/CS12/Images/favicon.ico">
  <link rel="stylesheet" href="/CS12/Styles/style.css">

  <title>Mantas - Sawfish</title>

</head>

<body>

  <?php
  
  $path = $_SERVER['DOCUMENT_ROOT'] . "/CS12/header.php";
  include_once($path);
  ?>

  <div class="content">
      <div class="content-item">
          <h1>Sawfish</h1>
        <img class="content-image" alt="Sawfish" align="left" src="/CS12/Images/sawfish.jpg">
            <p>Sawfishes, also known as carpenter sharks, are a family of rays characterized by a long, narrow, flattened rostrum, or nose extension, lined with sharp transverse teeth, arranged in a way that resembles a saw. They are among the largest fish with some species reaching lengths of about 7 m (23 ft). They are found worldwide in tropical and subtropical regions in coastal marine and brackish estuarine waters, as well as freshwater rivers and lakes.
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
