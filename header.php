
  <div class="header">
    <div class="logo-bar" height="200px">
        <a href="https://jshweiri.000webhostapp.com/CS12/index.php"><img height = 50 src="/CS12/Images/Logo.png" title="Home"></a>


        <div class="social-media">
            <a class="social-media-items" href="http://www.facebook.com" target="_blank">     <img src="/CS12/Images/Facebook.png" alt="Facebook" title="Facebook" width="32px" height="32px"></a>
            <a class="social-media-items" href="https://twitter.com" target="_blank">                                                   <img src="/CS12/Images/Twitter.png" alt="Twitter" title="Twitter" width="32px" height="32px"></a>
            <a class="social-media-items" href="http://www.tumblr.com/" target="_blank">                                          <img src="/CS12/Images/Tumblr.png" alt="Tumblr" title="tumblr" width="32px" height="32px"></a>
            <a class="social-media-items" href="http://www.linkedin.com" target="_blank">                           <img src="/CS12/Images/Linkedin.png" alt="Linkedin" title="LinkedIn" width="32px" height="32px"></a>
            <a class="social-media-items" href="https://www.youtube.com" target="_blank">                           <img src="/CS12/Images/Youtube.png" alt="Youtube" title="Youtube" width="32px" height="32px"></a>
            <a class="social-media-items" href="https://www.wordpress.org" target="_blank">                                        <img src="/CS12/Images/Rss.png" alt="RSS" title="RSS Feed" width="32px" height="32px"></a>
            
            <?php
            if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
                echo "<a href=\"https://jshweiri.000webhostapp.com/CS12/login.php#login\">Login</a>";
            } else {
                echo $_SESSION['username'] . "<a href=\"https://jshweiri.000webhostapp.com/CS12/logout.php\"> Logout</a>";
            }
            
            ?>
            
      </div>
    </div>

    <img src="/CS12/Images/Manta.jpg" alt="Manta Ray" alt="" width="100%">

    <ul class="topnav">
      <li><a id="home" href="/CS12/index.php">Home</a></li>

      <li class="dropdown">
        <a id="about" class="dropbtn">About</a>
          <div class="dropdown-content">
            <a href="/CS12/About/taxonomy.php">Taxonomy</a>
            <a href="/CS12/About/biology.php">Biology</a>
            <a href="/CS12/About/conservation.php">Conservation</a>
            <a href="/CS12/About/habitat.php">Habitat</a>
          </div>
      </li>

      <li class="dropdown">
        <a id="news" class="dropbtn">News</a>
          <div class="dropdown-content">
            <a href="https://jshweiri.000webhostapp.com/CS12/News/announcements.php">Announcements</a>
          </div>
      </li>

      <li class="dropdown">
        <a id="similar-species" class="dropbtn">Similar Species</a>
          <div class="dropdown-content">
            <a href="/CS12/Similar-Species/skates.php">Skates</a>
            <a href="/CS12/Similar-Species/guitarfish.php">Guitarfish</a>
            <a href="/CS12/Similar-Species/sawfish.php">Sawfish</a>
          </div>
      </li>

      <li><a id="manta-game" href="/CS12/manta-game.php">Manta-Game</a></li>

      <li><a id="donate" href="/CS12/donate.php">Donate</a></li>

    </ul>
<script src="/CS12/Scripts/getActive.js"> </script>
  </div>
