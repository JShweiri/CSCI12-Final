<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
  <link rel="icon" href="/CS12/Images/favicon.ico">
  <link rel="stylesheet" href="/CS12/Styles/style.css">

  <title>Mantas - Welcome</title>

</head>

<body>

  <?php
  
  $path = $_SERVER['DOCUMENT_ROOT'] . "/CS12/header.php";
  include_once($path);
  ?>

  <div class="content">
      <div class="content-item">
            <h1>Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>. Welcome to our site.</h1>
            <p>with an account you get acces to these pages:</p>
            <a href="https://jshweiri.000webhostapp.com/CS12/manta-game.php">Manta-Game</a>
      </div>
  </div>

  <?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/CS12/footer.html";
  include_once($path);
  ?>

</body>

</html>