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

            // metodo per la durata
            public function setDuration($duration){
                if($duration > 0 && $duration < 400){
                    $this->duration = $duration; 
                } else{
                    echo 'durata film non corretta';
                }
            }
            public function getTitle($title_film1){
                return $this->title;
            }
            // costruttore


        }
        $film1 = new Movies();
        $title_film1 = $film1->getTitle($title_film1);
        echo $title_film1;
    ?>
</body>
</html>