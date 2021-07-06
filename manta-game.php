<?php
session_start();
?>

<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
  <link rel="icon" href="/CS12/Images/favicon.ico">
  <link rel="stylesheet" href="/CS12/Styles/style.css">

  <title>Mantas - Game</title>

</head>

<body>

  <?php
  
  $path = $_SERVER['DOCUMENT_ROOT'] . "/CS12/header.php";
  include_once($path);

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  ?>
  <div class="content">
      <div class="content-item">
          <div id="game" class="center">
          <h1>Access Denied</h1>
            <p>You must be logged in to access this game.</p>
            </div>
      </div>
  </div>
<?php
} else {
?>

  <div class="content">
      <div class="content-item">
          <div id="game" class="center">
          <h1>Manta Mania</h1>
            <canvas id="gc" width="600" height="600"></canvas>
            <script src="/CS12/Scripts/manta-game.js"></script>
            </div>
      </div>
  </div>
  
<?php
}
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/CS12/footer.html";
  include_once($path);
  ?>

</body>

</html>
