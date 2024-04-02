<?php


/**
 * Movie
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
    "Drama/Comedy",
    "Paola Cortellesi",
    "2023",
);

var_dump($movie1);

$movie2 = new Movie(
    "Split", 
    "Il film segue un uomo affetto da disturbo dissociativo dell'identità che rapisce e imprigiona tre ragazze adolescenti in una struttura sotterranea isolata.",
    "mistery/horror",
    "M. Night Shyamalan",
    "2016",

);
var_dump($movie2);



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    <h1>Movies</h1>
    <ul>
        <li>
        </li>
        
    </ul>
</body>
</html>