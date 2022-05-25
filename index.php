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
    public $vote = 0; // Vote average 
    public $overview; //Overview lorem ipsum
    
    /* Avvio Di un method per voto causale - NON CI SONO RIUSCITO 
    Praticamente, l'unico modo per Generare un numero randomico del voto
    è quello di Commentare Int $_vote dal __construct e generare una nuova
    card (al di fuori dell'array di oggetti). Facendo cosi perdo il numero intero
    arrotondato e la possibilità di usare il forEach. Questa la commento in attesa
    di risposta da Fabio */
    /*  */
    /* function setRandomVote() {
        if($this->vote == 0) {
            return $this->vote = rand(1,10);
        }
    } */
    
    /* Avvio la Function construct */
    /* Per far funzionare numero randomico su ultima Card commenta -> Int $_vote / $this->vote = $_vote; */
    function __construct(String $_title, Int $_release, String $_poster, String $_lang, Int $_vote,  String $_overview) {
        $this->title = $_title;
        $this->release = $_release;
        $this->poster = $_poster;
        $this->lang = $_lang;
        $this->vote = $_vote;
        $this->overview = $_overview;
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
    new Movie('Avatar', 2009, 'https://image.tmdb.org/t/p/w342/jRXYjXNq0Cs2TcJjLkki24MLp7u.jpg', 'en', 6.5, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, cumque.' ),
    new Movie('Blade Runner', 2017, 'https://image.tmdb.org/t/p/w342/gajva2L0rPYkEWjzgFlBXCAVBE5.jpg', 'en', 7.5, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, cumque.' ),
    new Movie('Ghost in the Shell', 2017, 'https://image.tmdb.org/t/p/w342/myRzRzCxdfUWjkJWgpHHZ1oGkJd.jpg', 'en', 6, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, cumque.' ),
    new Movie('Altered Carbon: Resleeved', 2020, 'https://image.tmdb.org/t/p/w342/vlIYzx7cc4Wvaoh7ShjF2HZG45.jpg', 'en', 6.5, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, cumque.' ),
    new Movie('Snowden', 2016, 'https://image.tmdb.org/t/p/w342/yfK7zxNL63VWfluFuoUaJj5PdNw.jpg', 'en', 7.1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, cumque.' ),
    new Movie('Dune', 2021, 'https://image.tmdb.org/t/p/w342/d5NXSklXo0qyIYkgV94XAgMIckC.jpg', 'en', 7.5, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, cumque.' )
];

/* Push con method dell'ultima card */
/* $last_movie = new Movie('Dune', 2021, 'https://image.tmdb.org/t/p/w342/d5NXSklXo0qyIYkgV94XAgMIckC.jpg', 'en', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, cumque.' ); */
/* $last_movie->setRandomVote() */ // All'ultimo film lascio il random vote, tutte le altri perdono il voto


/* var_dump("Questo è il console log dell'array"); 
var_dump($products); */


/* Link API per dei film/serie 
https://api.themoviedb.org/3/search/movie?api_key=98d2bdd48bfc7c3ba0b288ac94e06943&language=en-US&page=1&include_adult=false&query=?avatar
https://api.themoviedb.org/3/search/movie?api_key=98d2bdd48bfc7c3ba0b288ac94e06943&language=en-US&page=1&include_adult=false&query=?blade runner

PER IMMAGINE poster
ImageLink: "https://image.tmdb.org/t/p/w342/+ SUA BACKDROP DEL JSON "
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-1</title>
    <!-- Link a CDN Bootstrp -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <!-- Link a foglio di style -->
    <link rel='stylesheet' href='./css/style.css'>
</head>
<body>
    <!-- /#site_header -->
    <div class="flex_cent" id="site_header">
        <h1>PHP-OOP-1</h1>
    </div>
    <!-- /#site_main -->    
    <div class="flex_cent p-2" id="site_main">
        <!-- Container Principale -->
        <div class="container-xl flex_cent p-0 h-100">
            <!-- Row container -->
            <div class="row gap-3 flex_cent flex-column w-100 h-100 p-0 m-0 flex-wrap">
                <!-- Cards del ForEach -->
                <?php foreach ($products as $product) : ?>
                <div class="col-3 rel p-0 h_45">
                    <!-- Immagine della card -->
                    <img class="w-100 h-100 p-0" src="<?= $product->poster ?>" alt="<?= $product->title ?>">
                    <!-- Informazioni Card -->
                    <div class="w-100 h-100 p-0 abs desc flex-column d-flex justify-content-start align-items-start">
                        <!-- Title -->
                        <h4 class="ps-2 pt-1"><?= $product->title ?></h4>
                        <!-- Anno d'uscita -->
                        <span class="ps-2 pt-2">Release: <?= $product->release ?></span>
                        <!-- Lingua -->
                        <span class="ps-2 pt-2">Lang: <?= $product->lang ?></span>
                        <!-- Voto -->
                        <span class="ps-2 pt-2">Vote: <?= $product->vote ?></span>
                        <!-- Descrizione -->
                        <span class="ps-2 pt-2">Film Overview: </span>
                        <span class="ps-2 pt-2"><?= $product->overview ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
                <!-- Last Cards senza forEach -->
                <!-- Commentata del tutto, riesco a generare numero randomico  -->
                <!-- Però a discapito dei voti altrui, valuta il method solo in caso di assenza forEach -->
                <!-- <div class="col-3 rel p-0 h_45"> -->
                    <!-- Immagine della card -->
                    <!-- <img class="w-100 h-100 p-0" src="<?= $last_movie->poster ?>" alt="<?= $last_movie->title ?>"> -->
                    <!-- Informazioni Card -->
                    <!-- <div class="w-100 h-100 p-0 abs desc flex-column d-flex justify-content-start align-items-start"> -->
                        <!-- Title -->
                        <!--  <h4 class="ps-2 pt-1"><?= $last_movie->title ?></h4> -->
                        <!-- Anno d'uscita -->
                        <!-- <span class="ps-2 pt-2">Release: <?= $last_movie->release ?></span> -->
                        <!-- Lingua -->
                        <!-- <span class="ps-2 pt-2">Lang: <?= $last_movie->lang ?></span> -->
                        <!-- Voto -->
                        <!--  <span class="ps-2 pt-2">Vote: <?= $last_movie->vote ?></span> -->
                        <!-- Descrizione -->
                        <!-- <span class="ps-2 pt-2">Film Overview: </span> -->
                        <!-- <span class="ps-2 pt-2"><?= $last_movie->overview ?></span> -->
                    <!-- </div> -->
                </div>        
            </div>
        </div>
    </div>
</body>
</html>