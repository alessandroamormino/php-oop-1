 <?php 

//  definisco una classe
class Movie {
  public $title;
  public $genre;
  public $duration;
  public $rating;
  public $storyline;
  public $image;

  // dichiaro il constructor
  function __construct(string $title, array $genre, string $duration, int $rating, string $storyline, string $image){
    // memorizzo i valori nella classe
    $this->title = $title;
    $this->genre = $genre;
    $this->duration = $duration;
    $this->rating = $rating;
    $this->storyline = $storyline;
    $this->image = $image;
  }
  // creo un metodo
  public function getInfo(){
    return "Vote: {$this->rating}";
  }

}
