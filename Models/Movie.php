 <?php 

//  definisco una classe
class Movie {
  public $title;
  public $genre;
  public $duration;
  public $rating;
  public $storyline;
  public $info;

  // dichiaro il constructor
  function __constructor(string $title, string $genre, string $duration, int $rating, string $storyline){
    // memorizzo i valori nella classe
    $this->title = $title;
    $this->genre = $genre;
    $this->duration = $duration;
    $this->rating = $rating;
    $this->storyline = $storyline;
  }
  // creo un metodo
  public function setInfo(){
    $this->$info = $this.title. ":" .$this.rating;
  }
}