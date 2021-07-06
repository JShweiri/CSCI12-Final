<?php
session_start();
?>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
  <link rel="icon" href="/CS12/Images/favicon.ico">
  <link rel="stylesheet" href="/CS12/Styles/style.css">

  <title>Mantas - Taxonomy</title>

</head>

<body>

  <?php
  
  $path = $_SERVER['DOCUMENT_ROOT'] . "/CS12/header.php";
  include_once($path);
  ?>

  <div class="content">
      <div class="content-item">
          <h1>Species</h1>
            <p>The scientific naming of mantas has had a convoluted history, during which several names were used for both the genus (Ceratoptera, Brachioptilon Daemomanta and Diabolicthys) and species (such as vampyrus, americana, johnii and hamiltoni). All were eventually treated as synonyms of the single species Manta birostris. The genus name Manta was first published in 1829 by Dr Edward Nathaniel Bancroft of Jamaica. The specific name birostris is ascribed to Johann Julius Walbaum (1792) by some authorities and to Johann August Donndorff (1798) by others. The name alfredi was first used by Australian zoologist Gerard Krefft, who named the manta after Prince Alfred.
            </p>
            <p>
                Authorities were still not in agreement and some argued that the black color morph was a different species from the mostly white morph. This proposal was discounted by a 2001 study of the mitochondrial DNA of both. A 2009 study analyzed the differences in morphology, including color, meristic variation, spine, dermal denticles (tooth-like scales) and teeth of different populations. Two distinct species emerged: the smaller M. alfredi found in the Indo-Pacific and tropical east Atlantic, and the larger M. birostris found throughout tropical, subtropical and warm temperate oceans. The former is more coastal while the latter is more ocean-going and migratory. A 2010 study on mantas around Japan confirmed the morphological and genetic differences between M. birostris and M. alfredi.
</p><p>
A third possible species, preliminarily called Manta sp. cf. birostris, reaches at least 6 m (20 ft) in width, and inhabits the tropical west Atlantic, including the Caribbean. It and M. birostris occur in sympatry.
            </p>
      </div>
      
    <div class="content-item">
          <h1>Fossil Record</h1>
            <p>While some small teeth have been found, few fossilized skeletons of manta rays have been discovered. Their cartilaginous skeletons do not preserve well as they lack the calcification of the bony fish. Only three sedimentary beds bearing manta ray fossils are known, one from the Oligocene in South Carolina and two from the Miocene and Pliocene in North Carolina. Remains of an extinct species have been found in the Chandler Bridge Formation of South Carolina. These were originally described as Manta fragilis but were later reclassified as Paramobula fragilis.
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
