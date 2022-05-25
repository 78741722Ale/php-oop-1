<?php 
/*  
definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo 
*/

class Movie {
    public $title; //titolo film
    public $release; // data del film
    public $backdrop; // Immagine
    public $lang; // lingua del film
    public $vote; // Vote average 

    /* Avvio la Function construct */
    function __construct($_title, $_release, $_backdrop, $_lang, $_vote) {
        $this->title = $_title;
        $this->release = $_release;
        $this->backdrop = $_backdrop;
        $this->lang = $_lang;
        $this->vote = $_vote;
    }
};

$prova = new Movie('Avatar', '2020', 'https://image.tmdb.org/t/p/w342/jRXYjXNq0Cs2TcJjLkki24MLp7u.jpg', 'en', '5.5' );
var_dump("Questo è il console log di Prova"); 
var_dump($prova); // prima verifica
var_dump("Questo è il console log della seconda verifica"); 
var_dump($prova);




/* Link API per dei film/serie 
https://api.themoviedb.org/3/search/movie?api_key=98d2bdd48bfc7c3ba0b288ac94e06943&language=en-US&page=1&include_adult=false&query=?avatar
https://api.themoviedb.org/3/search/movie?api_key=98d2bdd48bfc7c3ba0b288ac94e06943&language=en-US&page=1&include_adult=false&query=?blade runner

PER IMMAGINE backdrop
ImageLink: "https://image.tmdb.org/t/p/w342/+ SUA BACKDROP DEL JSON "


*/



?>