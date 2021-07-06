<?php
session_start();
?>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
  <link rel="icon" href="/CS12/Images/favicon.ico">
  <link rel="stylesheet" href="/CS12/Styles/style.css">

  <title>Mantas - Habitat</title>

</head>

<body>

  <?php
  
  $path = $_SERVER['DOCUMENT_ROOT'] . "/CS12/header.php";
  include_once($path);
  ?>

  <div class="content">
      <div class="content-item">
          <h1>Distribution and Habitat</h1>
            <p>Mantas are found in tropical and subtropical waters in all the world's major oceans and also venture into temperate seas. The furthest from the equator they have been recorded is North Carolina in the United States (31ºN) to the north, and the North Island of New Zealand (36ºS) to the south. They prefer water temperatures above 68 °F (20 °C) and M. alfredi is predominantly found in tropical areas. Both species are pelagic. M. birostris lives mostly in the open ocean, travelling with the currents and migrating to areas where upwellings of nutrient-rich water increase prey concentrations.
</p><p>
Fish that have been fitted with radio transmitters have travelled as far as 1,000 km (620 mi) from where they were caught and descended to depths of at least 1,000 m (3,300 ft). M. alfredi is a more resident and coastal species. Seasonal migrations do occur, but they are shorter than those of M. birostris. Mantas are common around coasts from spring to fall, but travel further offshore during the winter. They keep close to the surface and in shallow water in daytime, while at night they swim at greater depths.
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
