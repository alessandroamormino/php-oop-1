<?php 
// importo la classe Movie
require_once './Models/Movie.php';

// istanzio due oggetti Movie
$guardians = new Movie("Guardians Of The Galaxy Vol. 3", "Adventure", "2h 30m", 8, "Still reeling from the loss of Gamora, Peter Quill rallies his team to defend the universe and one of their own - a mission that could mean the end of the Guardians if not successful.");

$johnWick = new Movie("John Wick: Chapter 4", "Action", "2h 49m", 8, "Condemned by the tyrannical High Table to be on the run for the rest of his life, deadly assassin maestro John Wick (2014) embarks on a Sisyphean mission of suicidal fury to decide his fate after the merciless carnage in John Wick: Chapter 3 - Parabellum (2019).");


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
    <div class="genres">
      <?= $guardians->genre; ?>
    </div>
    <div class="duration">
      <?= $guardians->duration ?>
    </div>
    <div class="ratings">
      <?= $guardians->getInfo(); ?> 
    </div>
    <div class="storyline">
      <p><?= $guardians->storyline ?></p>
    </div>
  </div>

  <div class="card">
    <div class="title">
      <h4><?= $johnWick->title ?></h4>
    </div>
    <div class="genres">
      <?= $johnWick->genre; ?>
    </div>
    <div class="duration">
      <?= $johnWick->duration ?>
    </div>
    <div class="ratings">
      <?= $johnWick->getInfo(); ?> 
    </div>
    <div class="storyline">
      <p><?= $johnWick->storyline ?></p>
    </div>
  </div>

</body>
</html>