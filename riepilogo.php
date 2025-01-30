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
  <body>
    <h1>Lista dei videogiochi</h1>
    <div class="w-50 mx-auto my-auto">
      <ul class="list-group">
          <?php
              foreach ($_SESSION['punteggiUtenti'] as $gioco => $punteggio) {  
                echo '<li class="list-group-item">';
                echo $gioco . ' - ' . $punteggio; // Stampa Gioco - Punteggio
                echo '</li>';
              }           
              //session_destroy();
          ?>
      </ul>
    </div>
    <p><a class="link-opacity-75" href="./index.php">Torna alla home</a></p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
