<?php

/**
 * Movie
 * caratteristiche di un singolo movie
 */
class Movie {
    public $title;
    public $description;
    public $gender;
    public $director;
    public $year;


    
    /**
     * __construct
     *
     * @param  string $title
     * @param  string $description
     * @param  string $gender
     * @param  string $director
     * @param  int $year

     */
    public function __construct($title, $description, $gender, $director, $year) { 
        $this->title = $title;
        $this->description = $description;
        $this->gender = $gender;
        $this->director = $director;
        $this->year = $year;
     }

};


$movie1 = new Movie(
    "C'è ancora domani",
    "Un viaggio nel passato neorealista tra povertà, maschi tossici e speranze per la figura femminile",
    "Drama",
    "Paola Cortellesi",
    "2023",
);

/* var_dump($movie1); */

$movie2 = new Movie(
    "Split", 
    "Il film segue un uomo affetto da disturbo dissociativo dell'identità che rapisce e imprigiona tre ragazze adolescenti in una struttura sotterranea isolata.",
    "Mistery",
    "M. Night Shyamalan",
    "2016",

);
/* var_dump($movie2); */


$movies = [
    $movie1,
    $movie2
];
/* var_dump($movies); */

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>php-oop-1</title>
     <!-- bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        
        <h1 class="text-danger text-center mb-3">Movies</h1>
        <ul>
            <?php
            foreach($movies as $movie) {
                echo "
                <li>
                TITOLO : " . $movie->title ." <br> DESCRIZIONE: " . $movie->description . " <br> GENERE: " . $movie->gender . " <br> DIRETTORE: " . $movie->director . " <br> ANNO: " . $movie->year . ";
                </li>
                ";
                
            }
            ?>
            </ul>

    </div>
        
        
</body>
</html>