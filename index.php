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
};

$prova = new Movie();
var_dump("Questo è il console log di Prova"); 
var_dump($prova); // prima verifica





/* Link API per dei film/serie 
https://api.themoviedb.org/3/search/movie?api_key=98d2bdd48bfc7c3ba0b288ac94e06943&language=en-US&page=1&include_adult=false&query=?avatar

PER IMMAGINE backdrop
ImageLink: "https://image.tmdb.org/t/p/w342/+ SUA BACKDROP DEL JSON "


*/



?>