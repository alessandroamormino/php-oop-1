<?php 
// importo la classe Movie
require_once './Models/Movie.php';
require_once 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP 1</title>
  <!-- css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
  <h1>Movies</h1>

  <div class="container">
    <?php
    foreach($movies as $singleMovie){
      ?>
      <div class="card">
        <div class="title">
          <h2><?= $singleMovie->title ?></h2>
        </div>
        <div class="image">
          <img src="<?= $singleMovie->image ?>" alt="<?= $singleMovie->title ?>">
        </div>
        <div class="infos">
          <div class="genres">
            <!-- stampo più generi separati da una virgola -->
            Genre: 
            <?php 
              $count = count($singleMovie->genre) - 1;
              foreach($singleMovie->genre as $key=>$singleGenre){
                echo $singleGenre;
                if($key < $count){
                  echo ", ";
                }
              }
            ?>
          </div>
          <div class="duration">
            Duration: <?= $singleMovie->duration ?>
          </div>
          <div class="ratings">
            Rating: <?= $singleMovie->getInfo(); ?> 
          </div>
          <div class="storyline">
            Storyline: <?= $singleMovie->storyline ?>
          </div>
        </div>
      </div>
      <?php
    }
    ?>

  </div>


</body>
</html>