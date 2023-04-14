<?php

//DEFINISCO UNA CLASSE GENRES
/**
 * Genres
 */
class Genre
{
    public $genre;

    public function __construct($_genre)
    {
        $this->genre = $_genre;
    }
}

// DEFINISCO LA CLASSE MOVIE
/**
 * Movie
 */
class Movie 
{
    // definisco una variabile (proprietà) di classe     
    public $title = 'Title'; // imposto un valore di default
    public $length;
    // definisco una variabile di classe private
    private $type;
    public $genres;

    // DEFINISCO UN SETTER (METODO)
    /**
     * setType
     *
     * @param  mixed $_minutes
     * @return void
     */
    public function setType(int $_minutes){
        // se la durata è inferiore a 15 minuti 
        if($_minutes <= 15){
            // alla variabile type assegno short film
            $this->type = 'Short Film';
        } else {
            // altrimenti assegno movie
            $this->type = 'Movie';
        }
    }

    // DEFINISCO UN GETTER (METODO)   
    /**
     * getType
     *
     * @return void
     */
    public function getType(){
        return $this->type;
    }

    public function getGenre(){
        foreach($this->genres as $genre){
            echo $genre->genre .' ';
        }
    }

    // COSTRUTTORE
    /**
     * __construct
     *
     * @param  mixed $_title
     * @param  mixed $_minutes
     * @return void
     */
    public function __construct(string $_title, int $_minutes, array $_genres) // durata in minuti
    {
        $this->title = $_title;
        $this->length = $_minutes .' minutes';
        // richiamo il metodo setType
        $this->setType($_minutes);
        $this->genres = $_genres;
    }
}

/* ------- ISTANZA 1 -------- */
// istanzio un oggetto Genre
$burn_e_genres = [new Genre('animation')];
// istanzio un oggetto movie
$burn_e = new Movie('BURN-E', 8, $burn_e_genres);

// stampo i valori delle proprietà in pagina
//var_dump($burn_e);

echo $burn_e->title .'<br>';
echo $burn_e->length .'<br>';
// richiamo il metodo setType
echo $burn_e->getType();
echo '<br>';
echo $burn_e->getGenre();

echo '<br>';
echo '<br>';

/* ------- ISTANZA 2 -------- */
// istanzio un oggetto Genre
$gattaca_genres = [new Genre('science fiction'), new Genre('adventure')];
// istanzio un oggetto Movie
$gattaca = new Movie('Gattaca', 107, $gattaca_genres);
//var_dump($gattaca);
// stampo i valori delle proprietà in pagina
echo $gattaca->title .'<br>';
echo $gattaca->length .'<br>';
// richiamo il metodo setType
echo $gattaca->getType();
echo '<br>';
echo $gattaca->getGenre();

echo '<br>';
echo '<br>';

/* ------- ISTANZA 3 -------- */
// istanzio un oggetto Genre
$interstellar_genres = [new Genre('science fiction'), new Genre('adventure')];
// istanzio un oggetto Movie
$interstellar = new Movie('Interstellar', 169, $interstellar_genres);
// stampo i valori delle proprietà in pagina
echo $interstellar->title .'<br>';
echo $interstellar->length .'<br>';
// richiamo il metodo setType
echo $interstellar->getType();
echo '<br>';
echo $interstellar->getGenre();

echo '<br>';
echo '<br>';

/* ------- ISTANZA 4 -------- */
// istanzio un oggetto Genre
$nimic_genres = [new Genre('drama'), new Genre('psychological'), new Genre('thriller')];
// istanzio un oggetto Movie
$nimic = new Movie('Nimic', 12, $nimic_genres);
// stampo i valori delle proprietà in pagina
echo $nimic->title .'<br>';
echo $nimic->length .'<br>';
// richiamo il metodo setType
echo $nimic->getType();
echo '<br>';
echo $nimic->getGenre();
?>