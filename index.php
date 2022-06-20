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
  new Movie(
    'Pulp Fiction',
    "Un killer si innamora della moglie del suo capo, un pugile rinnega la sua promessa e una coppia tenta una rapina che va rapidamente fuori controllo.",
    '1994',
    'https://m.media-amazon.com/images/I/81-NJGwcsGL._AC_SL1400_.jpg'
  ),
  new Movie(
    'The Imitation Game',
    "La vita del matematico inglese Alan Turing, genio indiscusso del XX secolo, considerato uno dei padri dell'informatica e dei moderni computer, fino alla sua precoce e tragica scomparsa.",
    '2014',
    'https://qr.hello-world.it/wp-content/uploads/2019/10/the.jpg'
  ),
  new Movie(
    'Fight Club',
    "Tyler Durden ed un nuovo amico sfogano la loro aggressività creando un club di combattimento, che assume rapidamente connotati rivoluzionari, fino a esporre la vera identità di Tyler Durden.",
    '1999',
    'https://m.media-amazon.com/images/I/81JWVTlPQ2L._SL1500_.jpg'
  )
];

// var_dump($movies);
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
<body class="text-center">
  
  <h1 class="mb-5">Stampo gli oggetti Movie con le relative proprietà</h1>

  <div class="content d-flex flex-column align-items-center">
    <?php foreach ($movies as $movie) : ?>
    <div class="card mb-5" style="width: 18rem;">
      <img class="card-img-top" src="<?php echo $movie->poster ?>" alt="Card image cap">

      <div class="card-body">
        <h5 class="card-title"> <?php echo $movie->getTitle() ?> </h5>
        <p class="card-text"> <?php echo $movie->description ?> </p>
        <span> <?php echo $movie->release_year ?> </span>
      </div>
      
    </div>
    <?php endforeach; ?>
  </div>

</body>
</html>