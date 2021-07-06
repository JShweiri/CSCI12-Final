<?php
$success = NULL;

//Only Run This After A submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if($_POST["firstname"] == "" || $_POST["lastname"] == "" || $_POST["country"] == "" || $_POST["email"] == ""){

    //Form Is missing required fields
    $success = false;

  } else {

    $to = "wafflemanz3000@gmail.com";
    $subject = "Form Submission";

    $txt =
    "First Name:  ". $_POST["firstname"]   . "\n" .
    "Last Name:   ". $_POST["lastname"]    . "\n" .
    "Country:     ". $_POST["country"]     . "\n" .
    "Email:       ". $_POST["email"]       . "\n" .
    "Phone:       ". $_POST["phone"]       . "\n" .
    "Timezone:    ".  $_POST["timezone"]   . "\n" .
    "Comments:    ". $_POST["comments"];

    $headers = "From: form@Mantas.com";

     mail($to,$subject,$txt,$headers);
    $success = true;
  }
}
?>






<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
  <link rel="icon" href="/CS12/Images/favicon.ico">
  <link rel="stylesheet" href="/CS12/Styles/style.css">

  <title>Mantas - Contact Us</title>

</head>

<body>

  <?php
  $path = $_SERVER['DOCUMENT_ROOT'] . "/CS12/header.php";
  include_once($path);
  ?>

  <div class="content">

      <div class="content-item">




<?php if(!isset($success)){ ?>

        <h1>Contact Us</h1>
        <p> Feel free to leave us any comments or concerns </p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

          <input type="text" name="firstname" placeholder="Joe">
          <input type="text" name="lastname" placeholder="Shmoe">
          <input type="text" name="country" placeholder="USA">
          <input type="text" name="email" placeholder="example@mail.com">
          <input type="text" name="phone" placeholder="1(234)567-8910">
          <input type="text" name="timezone" placeholder="PST">
          <input type="text" name="comments" placeholder="Comments...">

          <br><br>

          <input type="submit" value="Submit">
        </form>

<?php } elseif($success){ ?>

        <h1>Successfully Submitted!</h1>
        <p> yay </p>

<?php } elseif(!$success) { ?>

        <h1>Contact Us</h1>
        <p> Feel free to leave us any comments or concerns </p>
        <p class="error"> First name last name and email are required. </p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

          <input type="text" name="firstname" placeholder="Joe">
          <input type="text" name="lastname" placeholder="Shmoe">
          <input type="text" name="country" placeholder="USA">
          <input type="text" name="email" placeholder="example@mail.com">
          <input type="text" name="phone" placeholder="1(234)567-8910">
          <input type="text" name="timezone" placeholder="PST">
          <input type="text" name="comments" placeholder="Comments...">

          <br><br>

          <input type="submit" value="Submit">
        </form>

<?php } ?>




      </div>
  </div>

  <?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/CS12/footer.html";
  include_once($path);
  ?>

</body>

</html>
