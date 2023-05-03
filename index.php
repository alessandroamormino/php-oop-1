<?php 
// importo la classe Movie
require_once './Models/Movie.php';
require_once 'db.php';

?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP 1</title>
  <!-- css -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>Movies</h1>

  <div class="container">
    <?php
    foreach($movies as $singleMovie){
      ?>
      <div class="card">
        <div class="title">
          <h3><?= $singleMovie->title ?></h3>
        </div>
        <div class="image">
          <img src="<?= $singleMovie->image ?>" alt="<?= $singleMovie->title ?>">
        </div>
        <div class="genres">
          <!-- stampo più generi separati da una virgola -->
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
          <?= $singleMovie->duration ?>
        </div>
        <div class="ratings">
          <?= $singleMovie->getInfo(); ?> 
        </div>
        <div class="storyline">
          <?= $singleMovie->storyline ?>
        </div>
      </div>
      <?php
    }
    ?>

  </div>


</body>
</html>