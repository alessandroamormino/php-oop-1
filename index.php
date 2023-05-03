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
</head>
<body>
  <h1>Movies</h1>

  <div class="card">
    <div class="title">
      <h4><?= $guardians->title ?></h4>
    </div>
    <div class="image">
      <img src="<?= $guardians->image ?>" alt="<?= $guardians->title ?>">
    </div>
    <div class="genres">
      <!-- stampo più generi separati da una virgola -->
      <?php 
        $count = count($guardians->genre) - 1;
        foreach($guardians->genre as $key=>$singleGenre){
          echo $singleGenre;
          if($key < $count){
            echo ", ";
          }
        }
      ?>
    </div>
    <div class="duration">
      <?= $guardians->duration ?>
    </div>
    <div class="ratings">
      <?= $guardians->getInfo(); ?> 
    </div>
    <div class="storyline">
      <?= $guardians->storyline ?>
    </div>
  </div>

  <div class="card">
    <div class="title">
      <h4><?= $johnWick->title ?></h4>
    </div>
    <div class="image">
      <img src="<?= $johnWick->image ?>" alt="<?= $johnWick->title ?>">
    </div>
    <div class="genres">
      <!-- stampo più generi separati da una virgola -->
      <?php 
        $count = count($johnWick->genre) - 1;
        foreach($johnWick->genre as $key=>$singleGenre){
          echo $singleGenre;
          if($key < $count){
            echo ", ";
          }
        }
      ?>
    </div>
    <div class="duration">
      <?= $johnWick->duration ?>
    </div>
    <div class="ratings">
      <?= $johnWick->getInfo(); ?> 
    </div>
    <div class="storyline">
      <?= $johnWick->storyline ?>
    </div>
  </div>

</body>
</html>