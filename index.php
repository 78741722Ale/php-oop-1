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
    public $poster; // Immagine
    public $lang; // lingua del film
    public $vote; // Vote average 

    /* Avvio la Function construct */
    function __construct(String $_title, Int $_release, $_poster, $_lang, Int $_vote) {
        $this->title = $_title;
        $this->release = $_release;
        $this->poster = $_poster;
        $this->lang = $_lang;
        $this->vote = $_vote;
    }
};

/* $prova = new Movie('Avatar', '2020', 'https://image.tmdb.org/t/p/w342/jRXYjXNq0Cs2TcJjLkki24MLp7u.jpg', 'en', '5.5' );
var_dump("Questo è il console log di Prova"); 
var_dump($prova); */ // prima verifica
/* var_dump("Questo è il console log della seconda verifica"); 
var_dump($prova); */

/* Ora avvio un array products e gli salvo Tot istanze */

$products = [
    /* Prima Classe - Blade Runner */
    new Movie('Avatar', 2009, 'https://image.tmdb.org/t/p/w342/jRXYjXNq0Cs2TcJjLkki24MLp7u.jpg', 'en', 7.5 ),
    new Movie('Blade Runner', 2017, 'https://image.tmdb.org/t/p/w342/gajva2L0rPYkEWjzgFlBXCAVBE5.jpg', 'en', 7.5 ),
    new Movie('Ghost in the Shell', 2017, 'https://image.tmdb.org/t/p/w342/myRzRzCxdfUWjkJWgpHHZ1oGkJd.jpg', 'en', 6 ),
    new Movie('Altered Carbon: Resleeved', 2020, 'https://image.tmdb.org/t/p/w342/vlIYzx7cc4Wvaoh7ShjF2HZG45.jpg', 'en', 6.5 ),
    new Movie('Snowden', 2016, 'https://image.tmdb.org/t/p/w342/yfK7zxNL63VWfluFuoUaJj5PdNw.jpg', 'en', 7.1 ),
];

var_dump("Questo è il console log dell'array"); 
var_dump($products);


/* Link API per dei film/serie 
https://api.themoviedb.org/3/search/movie?api_key=98d2bdd48bfc7c3ba0b288ac94e06943&language=en-US&page=1&include_adult=false&query=?avatar
https://api.themoviedb.org/3/search/movie?api_key=98d2bdd48bfc7c3ba0b288ac94e06943&language=en-US&page=1&include_adult=false&query=?blade runner

PER IMMAGINE poster
ImageLink: "https://image.tmdb.org/t/p/w342/+ SUA BACKDROP DEL JSON "


*/



?>