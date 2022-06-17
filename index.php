<!-- 
Creare un file index.php in cui:

- è definita una classe ‘Movie’
  => all’interno della classe sono dichiarate delle variabili d’istanza
  => all’interno della classe è definito un costruttore
  => all’interno della classe è definito almeno un metodo

- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i 
valori delle relative proprietà
La classe può essere definita internamente al file index.php o essere 
inclusa (soluzione preferibile)
-->



<?php

require_once __DIR__ . '/class/Movie.php';


$movies = [
  $pulpFiction = new Movie(
    'Pulp Fiction',
    'descrizione Pulp Fiction',
    '1994'
  ),
  $theImitationGame = new Movie(
    'The Imitation Game',
    'descrizione The Imitation Game',
    '2014'
  ),
  $fightClub = new Movie(
    'Fight Club',
    'descrizione Fight Club',
    '1999'
  )
  ];

var_dump($movies)
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


  <title>Movies</title>
</head>
<body>
  
<h1>Stampo gli oggetti Movie con le relative proprietà</h1>

<?php for ($i=0; $i < count($movies); $i++) : ?>
  
<div class="card" style="width: 18rem;">

  <?php foreach ($movie[$i] as $key => $value) : ?>
  <div class="card-body">
    <h5 class="card-title"> <?php echo ?> </h5>
    <p class="card-text"> <?php echo  ?> </p>
    <span> <?php echo  ?> </span>
  </div>
  <?php endforeach; ?>

</div>
<?php endfor; ?>

</body>
</html>