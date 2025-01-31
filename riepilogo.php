<?php
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pagina action</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-light-subtle">
    <h1 class="text-danger text-center mt-3">Media di tutti i punteggi:</h1>
    <div class="w-50 mx-auto my-auto text-center">
          <?php
          $somma = 0;
          $mediaPunteggi = 0;
          $punteggioMax = max($_SESSION['punteggiUtenti']);//cerca il punteggio più alto 
          $giocoPunteggioMax = array_search($punteggioMax, $_SESSION['punteggiUtenti']); //cerca il gioco associato al punteggio più alto
          $punteggioMin = min($_SESSION['punteggiUtenti']); //cerca il punteggio più basso
          $giocoPunteggioMin = array_search($punteggioMin, $_SESSION['punteggiUtenti']); //cerca il gioco associato al punteggio più basso
            foreach ($_SESSION['punteggiUtenti'] as $gioco => $punteggio) {  //per il calcolo del punteggio medio
              $somma = $somma + $punteggio; //somma per il calcolo della media
            } 
            $mediaPunteggi = $somma/count($_SESSION['punteggiUtenti']);//calcolo della media
            echo "<h4>" . $mediaPunteggi . "</h4>";
            echo "<hr>";
            echo '<h1 class="text-danger text-center mt-3">Gioco con il punteggio più alto mai registrato:</h1>';
            echo "<h4>" . $giocoPunteggioMax . " - " . $punteggioMax . "</h4>";
            echo "<hr>";
            echo '<h1 class="text-danger text-center mt-3">Gioco con il punteggio più basso mai registrato:</h1>';
            echo "<h4>" . $giocoPunteggioMin . " - " . $punteggioMin . "</h4>";
          ?>
          <hr>
          <div class="w-25 mx-auto my-auto text-center bg-white border">
            <button class="btn btn-success mt-2 mb-2"><a class="link-light link-underline-opacity-0" href="./index.php">Torna alla home</a></button>
          </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
