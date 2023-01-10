<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-oop</title>
</head>
<body>
    <?php
        class Movies {
            public $title;
            public $genre;
            public $year;
            public $duration;
            // costruttore
            function __construct($_title,$_genre,$_year,$_duration)
            {
                $this->title = $_title;
                $this->genre= $_genre;
                $this->year = $_year;
                $this->duration= $_duration;

            }
            // metodi
        
        public function getTitle(){
            return $this->title;
        }
        public function getGenre(){
            return $this->genre;
        }
        public function getYear(){
            return $this->year;
        }
        public function setDuration($duration){
            if($duration > 0 && $duration < 400){
                $this->duration = $duration; 
            } else{
                echo 'durata film non corretta';
            }
        }
        public function getDuration(){
            return $this->duration;
        }
        
        
        }
        $film1 = new Movies('Io sono leggenda','thriller',2007,150);
        echo $film1_title = $film1->getTitle();
        echo '<br>';
        echo $film1_genre = $film1->getGenre();
        echo '<br>';
        echo $film1_year = $film1->getYear();
        echo '<br>';
        $film1_duration = $film1->setDuration(150);
        echo $film1_duration = $film1->getDuration();
        echo '<br>';
        $film2 = new Movies('Space Jam','avventura',1996,80);
        echo $film2_title = $film2->getTitle();
        echo '<br>';
        echo $film2_genre = $film2->getGenre();
        echo '<br>';
        echo $film2_year = $film2->getYear();
        echo '<br>';
        $film2_duration = $film2->setDuration(150);
        echo $film1_duration = $film1->getDuration();
    ?>
</body>
</html>