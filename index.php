<?php

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

    // COSTRUTTORE
    /**
     * __construct
     *
     * @param  mixed $_title
     * @param  mixed $_minutes
     * @return void
     */
    public function __construct(string $_title, int $_minutes) // durata in minuti
    {
        $this->title = $_title;
        $this->length = $_minutes .' minutes';
        // richiamo il metodo setType
        $this->setType($_minutes);
    }
}

/* ------- ISTANZA 1 -------- */
// definisco un' istanza di un oggetto movie
$burn_e = new Movie('BURN-E', 8);

// stampo i valori delle proprietà in pagina
//var_dump($burn_e);

echo $burn_e->title .'<br>';
echo $burn_e->length .'<br>';
// richiamo il metodo setType
echo $burn_e->getType($length);

echo '<br>';
echo '<br>';

/* ------- ISTANZA 2 -------- */
$gattaca = new Movie('Gattaca', 107);
//var_dump($gattaca);
// stampo i valori delle proprietà in pagina
echo $gattaca->title .'<br>';
echo $gattaca->length .'<br>';
// richiamo il metodo setType
echo $gattaca->getType($length);

echo '<br>';
echo '<br>';

/* ------- ISTANZA 3 -------- */
$interstellar = new Movie('Interstellar', 169);
// stampo i valori delle proprietà in pagina
echo $interstellar->title .'<br>';
echo $interstellar->length .'<br>';
// richiamo il metodo setType
echo $interstellar->getType($length);

echo '<br>';
echo '<br>';

/* ------- ISTANZA 4 -------- */
$nimic = new Movie('Nimic', 12);
// stampo i valori delle proprietà in pagina
echo $nimic->title .'<br>';
echo $nimic->length .'<br>';
// richiamo il metodo setType
echo $nimic->getType($length);
?>