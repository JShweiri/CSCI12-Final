<?php
session_start();

$nameTaken = False;
$wrongPass = False;
$accountMade = False;

//Check if logged in
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){

//Connection Settings
$servername = "localhost";
$username = "id2719071_admin";
$password = "Shweiri1";
$dbName = "id2719071_cwb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//If a form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

//if it was the 'Register' form:
  if (isset($_POST['user']) && isset($_POST['password'])){
    $user = $_POST['user'];
    $password = $_POST['password'];
    
    //Prepare SQL statement to see if username has been taken
    $sql = "SELECT username, password FROM users2 WHERE username = '$user'";
    
    //Do the statement
    $result = $conn->query($sql);
    
    //Print error if unsuccessful
    if (!$result) {
        echo 'Could not run query: ' . mysql_error();
        exit;
    }
    
    //if there are no results
    $row_cnt = $result->num_rows;
    if ($row_cnt == 0){
    
        //Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO users2 (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $user, $password);
        
        //Hash Password
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        //Execute SQL statement
        $stmt->execute();
        $stmt->close();
        $accountMade = True;
    } else {
        $nameTaken = True;
    }
  }

//If it was the login form
  if (isset($_POST['userLogin']) && isset($_POST['passwordLogin'])){
    $user = $_POST['userLogin'];
    
    //Prepare SQL statement
    $sql = "SELECT username, password FROM users2 WHERE username = '$user'";
    $result = $conn->query($sql);
    
    //Print error if unsuccessful
    if (!$result) {
        echo 'Could not run query: ' . mysql_error();
        exit;
    }

    $row = $result->fetch_row();
    
    //If login successfull
    if(password_verify($_POST['passwordLogin'], $row[1])){
        $_SESSION['username'] = $user;
        header("location: welcome.php");
    } else {
        $wrongPass = True;
    }
  }


}

$conn->close();

?>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
  <link rel="icon" href="/CS12/Images/favicon.ico">
  <link rel="stylesheet" href="/CS12/Styles/style.css">

  <title>Mantas - Login</title>

</head>

<body>

  <?php
  
  $path = $_SERVER['DOCUMENT_ROOT'] . "/CS12/header.php";
  include_once($path);
  ?>
  
  <div class="content">
      
      
      <div class="content-item">
          
          <?php
            if ($nameTaken){
              echo "<em class=\"bad\">Username has already been used</em>";
          }
          if ($accountMade){
              echo "<em class=\"good\">Account successfully made!</em>";
          }
          ?>
          
          <form method="post" action="<?=$_SERVER['PHP_SELF'];?>#login">
            Create Account: <br><br>
            User:<br>
            <input type="text" name="user" placeholder="Username"><br>
            Password:<br>
            <input type="text" name="password" placeholder="Passowrd"><br><br>
            <input type="submit" value="Submit">
            </form>
        </div>
            
        <div class="content-item">
            <?php
            if ($wrongPass){
              echo "<em class=\"bad\">Wrong Username or Password</em>";
            }
            ?>
            <form id="login" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>#login">
            Login: <br><br>
            User:<br>
            <input type="text" name="userLogin" placeholder="Username"><br>
            Password:<br>
            <input type="text" name="passwordLogin" placeholder="Password"><br><br>
            <input type="submit" value="Submit">
            </form>
      </div>
  </div>
<?php
    }else {
?>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
  <link rel="icon" href="/CS12/Images/favicon.ico">
  <link rel="stylesheet" href="/CS12/Styles/style.css">

  <title>Mantas - Login</title>

</head>

<body>

  <?php
  
  $path = $_SERVER['DOCUMENT_ROOT'] . "/CS12/header.php";
  include_once($path);
  ?>
  
  <div class="content">
      <div class="content-item">
          <h1>Already Logged In</h1>
        </div>
  </div>
<?php
}
?>

  <?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/CS12/footer.html";
  include_once($path);
  ?>

</body>

</html>